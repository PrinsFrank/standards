<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Composer\Script\Event;
use InvalidArgumentException;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Name_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\CountryShort\CountryAlpha2Source;
use PrinsFrank\Standards\Dev\DataSource\CountryShort\CountryAlpha3Source;
use PrinsFrank\Standards\Dev\DataSource\CountryShort\CountryNameSource;
use PrinsFrank\Standards\Dev\DataSource\CountryShort\CountryNumericSource;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Name_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Dev\DataSource\Http\HttpMethodSource;
use PrinsFrank\Standards\Dev\DataSource\Http\HttpStatusCodeSource;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_2_Alpha_3_Bibliographic_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_2_Alpha_3_Common_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_2_Alpha_3_Terminology_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_Name_Source;
use PrinsFrank\Standards\Dev\DataSource\SpecType;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use PrinsFrank\Standards\Dev\DataSourceExtractor\HtmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataSourceExtractor\XmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\UnitEnum;
use RuntimeException;
use Throwable;

class SpecUpdater
{
    /** @var array<class-string<DataSource>> */
    public const COUNTRY_SOURCES = [
        ISO3166_1_Numeric_Source::class,
        ISO3166_1_Alpha_2_Source::class,
        ISO3166_1_Alpha_3_Source::class,
        ISO3166_1_Name_Source::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const COUNTRY_SHORT_SOURCES = [
        CountryNumericSource::class,
        CountryAlpha2Source::class,
        CountryAlpha3Source::class,
        CountryNameSource::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const CURRENCY_SOURCES = [
        ISO4217_Alpha_3_Source::class,
        ISO4217_Numeric_Source::class,
        ISO4217_Name_Source::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const HTTP_STATUS_CODE_SOURCES = [
        HttpStatusCodeSource::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const HTTP_METHOD_SOURCES = [
        HttpMethodSource::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const LANGUAGE_SOURCES = [
        ISO639_1_Alpha_2_Source::class,
        ISO639_2_Alpha_3_Bibliographic_Source::class,
        ISO639_2_Alpha_3_Terminology_Source::class,
        ISO639_2_Alpha_3_Common_Source::class,
        ISO639_Name_Source::class,
    ];

    private const MAX_TRIES = 5;

    /**
     * @throws Throwable
     */
    public static function update(Event $event): void
    {
        $type = $event->getArguments()[0] ?? throw new InvalidArgumentException('Please specify the type with "-- --type=' . implode(',', UnitEnum::names(SpecType::class)) . '"');
        $type = str_starts_with($type, '--type=') === false ? throw new InvalidArgumentException('Please specify the type with "-- --type=' . implode(',', UnitEnum::names(SpecType::class)) . '"') : substr($type, 7);

        $sources = match (UnitEnum::tryFromKey(SpecType::class, strtoupper(str_replace('-', '_', $type)))) {
            SpecType::COUNTRY           => self::COUNTRY_SOURCES,
            SpecType::COUNTRY_SHORT     => self::COUNTRY_SHORT_SOURCES,
            SpecType::CURRENCY          => self::CURRENCY_SOURCES,
            SpecType::HTTP_STATUS_CODES => self::HTTP_STATUS_CODE_SOURCES,
            SpecType::HTTP_METHODS      => self::HTTP_METHOD_SOURCES,
            SpecType::LANGUAGE          => self::LANGUAGE_SOURCES,
            default                     => throw new InvalidArgumentException('Automatic spec updating for type "' . $type . '" not implemented'),
        };

        /** @var class-string<DataSource> $sourceFQN */
        foreach ($sources as $sourceFQN) {
            $specFQN = $sourceFQN::getSpecFQN();
            echo date('Y-m-d H:i:s') . ' updating spec ' . $specFQN . PHP_EOL;

            $nameValuePairs   = null;
            $backOffInSeconds = 60;
            for ($i = 1; $i <= self::MAX_TRIES; $i++) {
                echo 'Attempt ' . $i . ' of ' . self::MAX_TRIES . PHP_EOL;
                try {
                    if (is_a($sourceFQN, HtmlDataSource::class, true)) {
                        $nameValuePairs = HtmlDataSourceExtractor::extractForSource($sourceFQN);
                    } elseif (is_a($sourceFQN, XmlDataSource::class, true)) {
                        $nameValuePairs = XmlDataSourceExtractor::extractForSource($sourceFQN);
                    } else {
                        throw new RuntimeException('Unsupported data type');
                    }
                } catch (Throwable $throwable) {
                    if ($i === self::MAX_TRIES) {
                        throw $throwable;
                    }

                    $backOffInSeconds *= $i;
                    echo 'Updating spec failed with throwable "' . get_class($throwable) . '" and message "' . $throwable->getMessage() . '" in file "' . $throwable->getFile() . ':' . $throwable->getLine() . '", retrying in ' . $backOffInSeconds . ' seconds' . PHP_EOL;
                    sleep($backOffInSeconds);
                    continue;
                }
                break;
            }

            if ($nameValuePairs === null) {
                throw new RuntimeException('No specification values found');
            }

            if ($sourceFQN::sort() === true) {
                ksort($nameValuePairs);
            }

            $enumCases = [];
            foreach ($nameValuePairs as $name => $value) {
                $existingCaseForValue = $specFQN::tryFrom($value);
                if ($existingCaseForValue !== null) {
                    $name = $existingCaseForValue->name;
                }

                $enumCases[] = new EnumCase($name, $value);
            }

            $existingValues = array_map(static function (\BackedEnum $backedEnum) {
                return $backedEnum->value;
            }, $specFQN::cases());
            foreach (array_diff($existingValues, $nameValuePairs) as $deprecatedValue) {
                $enumCases[] = new EnumCase($specFQN::from($deprecatedValue)->name, $deprecatedValue, true);
            }

            (new EnumFile($sourceFQN::getSpecFQN()))
                ->setCases(...$enumCases)
                ->writeCases();
        }
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Composer\Script\Event;
use InvalidArgumentException;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Country\CountryAlpha2Source;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Country\CountryAlpha3Source;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Country\CountryNameSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Country\CountryNumericSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Currency\CurrencyAlpha3Source;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Currency\CurrencyNameSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Currency\CurrencyNumericSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\DataSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\HtmlDataSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Http\HttpMethodSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Http\HttpStatusCodeSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageAlpha2Source;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageAlpha3BibliographicSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageAlpha3CommonSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageAlpha3TerminologySource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageNameSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Script\ScriptAliasSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Script\ScriptCodeSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Script\ScriptNameSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Script\ScriptNumberSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\SpecType;
use PrinsFrank\Standards\Dev\DataSource\Configuration\XmlDataSource;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Extractor\HtmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Extractor\XmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\UnitEnum;
use RuntimeException;
use Throwable;

class SpecUpdater
{
    /** @var array<class-string<DataSource>> */
    public const COUNTRY_SOURCES = [
        CountryNumericSource::class,
        CountryAlpha2Source::class,
        CountryAlpha3Source::class,
        CountryNameSource::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const CURRENCY_SOURCES = [
        CurrencyAlpha3Source::class,
        CurrencyNumericSource::class,
        CurrencyNameSource::class,
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
        LanguageAlpha2Source::class,
        LanguageAlpha3BibliographicSource::class,
        LanguageAlpha3TerminologySource::class,
        LanguageAlpha3CommonSource::class,
        LanguageNameSource::class,
    ];

    public const SCRIPT_SOURCES = [
        ScriptAliasSource::class,
        ScriptCodeSource::class,
        ScriptNameSource::class,
        ScriptNumberSource::class,
    ];

    private const MAX_TRIES = 5;

    /**
     * @throws Throwable
     */
    public static function update(Event $event): void
    {
        $type = $event->getArguments()[0] ?? throw new InvalidArgumentException('Please specify the type with "-- --type=' . implode(',', UnitEnum::names(SpecType::class)) . '"');
        $type = str_starts_with($type, '--type=') === false
            ? throw new InvalidArgumentException('Please specify the type with "-- --type=' . implode(',', UnitEnum::names(SpecType::class)) . '"')
            : substr($type, 7);

        $sources = match (UnitEnum::tryFromKey(SpecType::class, strtoupper(str_replace('-', '_', $type)))) {
            SpecType::COUNTRY           => self::COUNTRY_SOURCES,
            SpecType::CURRENCY          => self::CURRENCY_SOURCES,
            SpecType::HTTP_STATUS_CODES => self::HTTP_STATUS_CODE_SOURCES,
            SpecType::HTTP_METHODS      => self::HTTP_METHOD_SOURCES,
            SpecType::LANGUAGE          => self::LANGUAGE_SOURCES,
            SpecType::SCRIPT            => self::SCRIPT_SOURCES,
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
                    printf(
                        'Updating spec failed with throwable "%s" and message "%s" in file "%s:%d", retrying in %d seconds%s',
                        get_class($throwable),
                        $throwable->getMessage(),
                        $throwable->getFile(),
                        $throwable->getLine(),
                        $backOffInSeconds,
                        PHP_EOL
                    );
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

            $existingValues = [];
            foreach ($specFQN::cases() as $existingValue) {
                $existingValues[$existingValue->name] = $existingValue->value;
            }
            foreach (array_diff_key($existingValues, $nameValuePairs) as $deprecatedKey => $deprecatedValue) {
                $enumCases[] = new EnumCase($specFQN::from($deprecatedValue)->name, $deprecatedValue, true);
            }

            (new EnumFile($sourceFQN::getSpecFQN()))
                ->setCases(...$enumCases)
                ->writeCases();
        }
    }
}

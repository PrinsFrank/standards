<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Composer\Script\Event;
use InvalidArgumentException;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Name_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Name_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Dev\DataSource\Http\HttpStatusCodeSource;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_2_Alpha_3_Bibliographic_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_2_Alpha_3_Common_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_2_Alpha_3_Terminology_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_Name_Source;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use PrinsFrank\Standards\Dev\DataSourceExtractor\HtmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataSourceExtractor\XmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use RuntimeException;

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
    public const CURRENCY_SOURCES = [
        ISO4217_Alpha_3_Source::class,
        ISO4217_Numeric_Source::class,
        ISO4217_Name_Source::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const HTTP_SOURCES = [
        HttpStatusCodeSource::class,
    ];

    /** @var array<class-string<DataSource>> */
    public const LANGUAGE_SOURCES = [
        ISO639_1_Alpha_2_Source::class,
        ISO639_2_Alpha_3_Bibliographic_Source::class,
        ISO639_2_Alpha_3_Terminology_Source::class,
        ISO639_2_Alpha_3_Common_Source::class,
        ISO639_Name_Source::class,
    ];

    private const SPEC_COUNTRY  = 'country';

    private const SPEC_CURRENCY = 'currency';

    private const SPEC_HTTP     = 'http';

    private const SPEC_LANGUAGE = 'language';

    /**
     * @throws UnavailableSourceException
     * @throws EnumNotFoundException
     * @throws TransliterationException
     * @throws DomElementNotFoundException
     */
    public static function update(Event $event): void
    {
        $type = $event->getArguments()[0] ?? throw new InvalidArgumentException('Please specify the type with "-- --type=country,http,language,currency"');
        $type = str_starts_with($type, '--type=') === false ? throw new InvalidArgumentException('Please specify the type with "-- --type=country,http,language,currency"') : substr($type, 7);

        $sources = match ($type) {
            self::SPEC_COUNTRY  => self::COUNTRY_SOURCES,
            self::SPEC_CURRENCY => self::CURRENCY_SOURCES,
            self::SPEC_HTTP     => self::HTTP_SOURCES,
            self::SPEC_LANGUAGE => self::LANGUAGE_SOURCES,
            default             => throw new InvalidArgumentException('Automatic spec updating for type "' . $type . '" not implemented'),
        };

        /** @var class-string<DataSource> $sourceFQN */
        foreach ($sources as $sourceFQN) {
            $specFQN = $sourceFQN::getSpecFQN();
            echo date('Y-m-d H:i:s') . ' updating spec ' . $specFQN . PHP_EOL;

            if (is_a($sourceFQN, HtmlDataSource::class, true)) {
                $nameValuePairs = HtmlDataSourceExtractor::extractForSource($sourceFQN);
            } elseif (is_a($sourceFQN, XmlDataSource::class, true)) {
                $nameValuePairs = XmlDataSourceExtractor::extractForSource($sourceFQN);
            } else {
                throw new RuntimeException('Unsupported data type');
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

            (new EnumFile($sourceFQN::getSpecFQN()))
                ->setCases(...$enumCases)
                ->writeCases();
        }
    }
}

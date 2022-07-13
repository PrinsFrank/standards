<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

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
    public const SOURCES = [
        ISO3166_1_Numeric_Source::class,
        ISO3166_1_Alpha_2_Source::class,
        ISO3166_1_Alpha_3_Source::class,
        ISO3166_1_Name_Source::class,
        ISO4217_Alpha_3_Source::class,
        ISO4217_Numeric_Source::class,
        ISO4217_Name_Source::class,
        HttpStatusCodeSource::class,
        ISO639_1_Alpha_2_Source::class,
        ISO639_2_Alpha_3_Bibliographic_Source::class,
        ISO639_2_Alpha_3_Terminology_Source::class,
        ISO639_2_Alpha_3_Common_Source::class,
        ISO639_Name_Source::class,
    ];

    /**
     * @throws UnavailableSourceException
     * @throws EnumNotFoundException
     * @throws TransliterationException
     * @throws DomElementNotFoundException
     */
    public static function update(): void
    {
        /** @var class-string<DataSource> $sourceFQN */
        foreach (self::SOURCES as $sourceFQN) {
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

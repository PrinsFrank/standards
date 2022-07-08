<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Currency\ISO4217_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Dev\DataSource\Http\HttpStatusCodeSource;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Bibliographic_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Common_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Terminology_Source;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use PrinsFrank\Standards\Dev\DataSourceExtractor\HtmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataSourceExtractor\XmlDataSourceExtractor;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use RuntimeException;

class SpecUpdater
{
    /** @var array<class-string<DataSource>, class-string> */
    public const SOURCES = [
        ISO639_1_Alpha_2_Source::class,
        ISO639_1_Alpha_3_Bibliographic_Source::class,
        ISO639_1_Alpha_3_Terminology_Source::class,
        ISO639_1_Alpha_3_Common_Source::class,
        ISO3166_1_Numeric_Source::class,
        ISO3166_1_Alpha_2_Source::class,
        ISO3166_1_Alpha_3_Source::class,
        ISO4217_Alpha_3_Source::class,
        ISO4217_Numeric_Source::class,
        HttpStatusCodeSource::class,
    ];

    public function __invoke(): void
    {
        /** @var DataSource $sourceFQN */
        foreach (self::SOURCES as $sourceFQN) {
            echo date('Y-m-d H:i:s') . ' updating spec ' . $sourceFQN::getSpecFQN() . PHP_EOL;

            if (is_a($sourceFQN, HtmlDataSource::class, true)) {
                $keyValuePairs = HtmlDataSourceExtractor::extractForSource($sourceFQN);
            } elseif (is_a($sourceFQN, XmlDataSource::class, true)) {
                $keyValuePairs = XmlDataSourceExtractor::extractForSource($sourceFQN);
            } else {
                throw new RuntimeException('Unsupported data type');
            }

            if ($sourceFQN::sort() === true) {
                ksort($keyValuePairs);
            }

            $enumCases = [];
            foreach ($keyValuePairs as $key => $value) {
                $enumCases[] = new EnumCase($key, $value);
            }

            (new EnumFile($sourceFQN::getSpecFQN()))
                ->setCases(...$enumCases)
                ->writeCases();
        }
    }
}

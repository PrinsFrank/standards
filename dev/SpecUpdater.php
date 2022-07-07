<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Facebook\WebDriver\Remote\RemoteWebElement;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_3_Source;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Numeric_Source;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Bibliographic_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Common_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Terminology_Source;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use Symfony\Component\Panther\Client;

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
    ];

    public function __invoke(): void
    {
        $client   = Client::createFirefoxClient();
        $crawlers = [];

        /** @var DataSource $sourceFQN */
        foreach (self::SOURCES as $sourceFQN) {
            if (array_key_exists($sourceFQN::url(), $crawlers) === false) {
                $crawlers[$sourceFQN::url()] = $client->request('GET', $sourceFQN::url());
            }
            $crawler = $crawlers[$sourceFQN::url()];
            $sourceFQN::afterPageLoad($client, $crawler);

            $enumCases = [];
            $keyValuePairs = array_filter(
                array_combine(
                    array_map(
                        static function (RemoteWebElement $remoteWebElement) use ($sourceFQN) {
                            $key = transliterator_transliterate('Any-Latin; Latin-ASCII;', $remoteWebElement->getText() ?? '');
                            $key = str_replace([' ', ';', ',', '(', ')', '-', '.', '\'', '*', '[', ']'], '_', $key);
                            $key = trim(str_replace(['__', '__'], ['_', '_'], $key), '_');

                            return $sourceFQN::transformKey($key);
                        },
                        iterator_to_array($crawler->filterXPath($sourceFQN::xPathIdentifierValue())->getIterator())
                    ),
                    array_map(
                        static function (RemoteWebElement $remoteWebElement) use ($sourceFQN) {
                            return $sourceFQN::transformValue($remoteWebElement->getText());
                        },
                        iterator_to_array($crawler->filterXPath($sourceFQN::xPathIdentifierKey())->getIterator())
                    ),
                )
            );
            ksort($keyValuePairs);
            foreach ($keyValuePairs as $key => $value) {
                $enumCases[] = new EnumCase($key, $value);
            }

            (new EnumFile($sourceFQN::getSpecFQN()))
                ->setCases(...$enumCases)
                ->writeCases();
        }
    }
}

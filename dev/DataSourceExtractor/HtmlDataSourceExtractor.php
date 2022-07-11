<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

use Exception;
use Facebook\WebDriver\Remote\RemoteWebElement;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Dev\KeyNormalizer\KeyNormalizer;
use Symfony\Component\Panther\Client;

class HtmlDataSourceExtractor implements DataSourceExtractor
{
    /**
     * @param class-string<HtmlDataSource> $sourceFQN
     * @return array<string, string|int>
     */
    public static function extractForSource(string $sourceFQN): array
    {
        $client  = Client::createFirefoxClient();
        $crawler = $client->request('GET', $sourceFQN::url());
        $sourceFQN::afterPageLoad($client, $crawler);

        return array_filter(
            array_combine(
                array_map(
                    static function (RemoteWebElement $remoteWebElement) use ($sourceFQN) {
                        return $sourceFQN::transformKey(KeyNormalizer::normalize($remoteWebElement->getText()));
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
    }
}

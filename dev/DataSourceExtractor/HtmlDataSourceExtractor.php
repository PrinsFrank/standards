<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

use Facebook\WebDriver\Remote\RemoteWebElement;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Dev\KeyNormalizer\KeyNormalizer;
use PrinsFrank\Standards\Dev\TransliterationException;
use Symfony\Component\Panther\Client;

class HtmlDataSourceExtractor implements DataSourceExtractor
{
    /**
     * @param class-string<HtmlDataSource> $sourceFQN
     * @return array<string, string|int>
     * @throws TransliterationException
     */
    public static function extractForSource(string $sourceFQN): array
    {
        $client  = Client::createFirefoxClient();
        $crawler = $client->request('GET', $sourceFQN::url());
        $sourceFQN::afterPageLoad($client, $crawler);

        $keys = $indicesForEmptyKeys = [];
        foreach ($crawler->filterXPath($sourceFQN::xPathIdentifierKey())->getIterator() as $index => $remoteWebElement) {
            /** @var RemoteWebElement $remoteWebElement */
            $transformedKey = $sourceFQN::transformKey(KeyNormalizer::normalize($remoteWebElement->getText()));
            if ($transformedKey === null) {
                $indicesForEmptyKeys[] = $index;
                continue;
            }

            $keys[] = $transformedKey;
        }

        $values = [];
        foreach ($crawler->filterXPath($sourceFQN::xPathIdentifierValue())->getIterator() as $index => $remoteWebElement) {
            if (in_array($index, $indicesForEmptyKeys, true)) {
                continue;
            }

            /** @var RemoteWebElement $remoteWebElement */
            $values[] = $sourceFQN::transformValue($remoteWebElement->getText());
        }

        return array_filter(array_combine($keys, $values));
    }
}

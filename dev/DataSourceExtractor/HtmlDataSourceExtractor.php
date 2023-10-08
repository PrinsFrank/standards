<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

use Exception;
use Facebook\WebDriver\Remote\RemoteWebElement;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Dev\KeyNormalizer\NameNormalizer;
use PrinsFrank\Standards\Dev\TransliterationException;
use Symfony\Component\Panther\Client;

class HtmlDataSourceExtractor implements DataSourceExtractor
{
    /**
     * @param class-string<HtmlDataSource> $sourceFQN
     * @return array<string, string|int>
     * @throws TransliterationException
     * @throws Exception
     */
    public static function extractForSource(string $sourceFQN): array
    {
        $client  = Client::createFirefoxClient();
        $crawler = $client->request('GET', $sourceFQN::url());
        $sourceFQN::afterPageLoad($client, $crawler);

        $names = $indicesForEmptyNames = [];
        foreach ($crawler->filterXPath($sourceFQN::xPathIdentifierName())->getIterator() as $index => $remoteWebElement) {
            /** @var RemoteWebElement $remoteWebElement */
            $transformedName = $sourceFQN::transformName(NameNormalizer::normalize($remoteWebElement->getText()));
            if ($transformedName === null) {
                $indicesForEmptyNames[] = $index;
                continue;
            }

            $names[] = $transformedName;
        }

        $values = [];
        foreach ($crawler->filterXPath($sourceFQN::xPathIdentifierValue())->getIterator() as $index => $remoteWebElement) {
            if (in_array($index, $indicesForEmptyNames, true)) {
                continue;
            }

            /** @var RemoteWebElement $remoteWebElement */
            $values[] = $sourceFQN::transformValue($remoteWebElement->getText(), $names[$index]);
        }

        foreach ($crawler->filterXPath($sourceFQN::xPathIdentifierKey())->getIterator() as $index => $remoteWebElement) {
            /** @var RemoteWebElement $remoteWebElement */
            $value = $sourceFQN::transformValue($remoteWebElement->getText(), $names[$index]);
            if ($value === null || in_array($index, $indicesForEmptyNames, true)) {
                continue;
            }

            $existingValue = $sourceFQN::getKeyEnumFQN()::tryFrom($value);
            if ($existingValue !== null) {
                $names[$index] = $existingValue->name;
            }
        }

        if (count($values) === 0) {
            throw new Exception('No items found (' . $crawler->getText() . ')');
        }

        return array_filter(array_combine($names, $values));
    }
}

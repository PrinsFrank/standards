<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

use DOMDocument;
use DOMElement;
use DOMXPath;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
use PrinsFrank\Standards\Dev\KeyNormalizer\KeyNormalizer;
use PrinsFrank\Standards\Dev\TransliterationException;
use PrinsFrank\Standards\Dev\UnavailableSourceException;

class XmlDataSourceExtractor implements DataSourceExtractor
{
    /**
     * @param class-string<XmlDataSource> $sourceFQN
     * @return array<string, string|int>
     * @throws UnavailableSourceException
     * @throws TransliterationException
     * @throws DomElementNotFoundException
     */
    public static function extractForSource(string $sourceFQN): array
    {
        $sourceContents = file_get_contents($sourceFQN::url());
        if ($sourceContents === false) {
            throw new UnavailableSourceException();
        }

        $domDocument = new DOMDocument();
        $domDocument->loadXML($sourceContents);

        $xPath        = new DOMXPath($domDocument);
        $keyDOMList   = $xPath->query($sourceFQN::xPathIdentifierKey());
        $valueDOMList = $xPath->query($sourceFQN::xPathIdentifierValue());
        if ($valueDOMList === false || $keyDOMList === false) {
            throw new DomElementNotFoundException();
        }

        $keys = $indicesForEmptyKeys = [];
        foreach ($keyDOMList->getIterator() as $index => $DomElement) {
            if ($DomElement->nodeValue === null) {
                $indicesForEmptyKeys[] = $index;
                continue;
            }

            $transformedKey = $sourceFQN::transformKey(KeyNormalizer::normalize($DomElement->nodeValue));
            if ($transformedKey === null) {
                $indicesForEmptyKeys[] = $index;
                continue;
            }

            $keys[] = $transformedKey;
        }

        $values = [];
        foreach ($valueDOMList->getIterator() as $index => $DomElement) {
            if (in_array($index, $indicesForEmptyKeys, true)) {
                continue;
            }

            $values[] = $DomElement->nodeValue !== null ? $sourceFQN::transformValue($DomElement->nodeValue) : null;
        }

        return array_filter(array_combine($keys, $values));
    }
}

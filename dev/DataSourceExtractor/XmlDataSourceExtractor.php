<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

use DOMDocument;
use DOMElement;
use DOMXPath;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
use PrinsFrank\Standards\Dev\KeyNormalizer\NameNormalizer;
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
        $nameDOMList   = $xPath->query($sourceFQN::xPathIdentifierName());
        $valueDOMList = $xPath->query($sourceFQN::xPathIdentifierValue());
        if ($valueDOMList === false || $nameDOMList === false) {
            throw new DomElementNotFoundException();
        }

        $names = $indicesForEmptyNames = [];
        foreach ($nameDOMList->getIterator() as $index => $DomElement) {
            if ($DomElement->nodeValue === null) {
                $indicesForEmptyNames[] = $index;
                continue;
            }

            $transformedName = $sourceFQN::transformName(NameNormalizer::normalize($DomElement->nodeValue));
            if ($transformedName === null) {
                $indicesForEmptyNames[] = $index;
                continue;
            }

            $names[] = $transformedName;
        }

        $values = [];
        foreach ($valueDOMList->getIterator() as $index => $DomElement) {
            if (in_array($index, $indicesForEmptyNames, true)) {
                continue;
            }

            $values[] = $DomElement->nodeValue !== null ? $sourceFQN::transformValue($DomElement->nodeValue) : null;
        }

        return array_filter(array_combine($names, $values));
    }
}

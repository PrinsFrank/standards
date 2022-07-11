<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

use DOMDocument;
use DOMElement;
use DOMXPath;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use PrinsFrank\Standards\Dev\KeyNormalizer\KeyNormalizer;

class XmlDataSourceExtractor implements DataSourceExtractor
{
    /**
     * @param class-string<XmlDataSource> $sourceFQN
     * @return array<string, string|int>
     */
    public static function extractForSource(string $sourceFQN): array
    {
        $sourceContents = file_get_contents($sourceFQN::url());
        $domDocument    = new DOMDocument();
        $domDocument->loadXML($sourceContents);

        $xPath = new DOMXPath($domDocument);
        return array_filter(
            array_combine(
                array_map(
                    static function (DOMElement $DomElement) use ($sourceFQN) {
                        return $sourceFQN::transformKey(KeyNormalizer::normalize($DomElement->nodeValue));
                    },
                    iterator_to_array($xPath->query($sourceFQN::xPathIdentifierValue())->getIterator())
                ),
                array_map(
                    static function (DOMElement $DomElement) use ($sourceFQN) {
                        return $sourceFQN::transformValue($DomElement->nodeValue);
                    },
                    iterator_to_array($xPath->query($sourceFQN::xPathIdentifierKey())->getIterator())
                ),
            )
        );
    }
}

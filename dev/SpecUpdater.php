<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use DOMDocument;
use DOMNode;
use DOMXPath;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_2_Source;
use PrinsFrank\Standards\Language\ISO639_1_Alpha_2;
use RuntimeException;

class SpecUpdater
{
    /** @var array<class-string<DataSource>, class-string> */
    public const SOURCES = [
        ISO639_1_Alpha_2_Source::class => ISO639_1_Alpha_2::class,
    ];

    public function __invoke()
    {
        foreach (self::SOURCES as $sourceFQN => $specs) {
            /** @var DataSource $source */
            $source         = new $sourceFQN();
            $sourceContents = file_get_contents($source::url());
            if ($sourceContents === false) {
                throw new RuntimeException('Unable to download source document at "' . $source::url() . '"');
            }

            $domDocument = new DOMDocument();
            $domDocument->loadHTML($sourceContents);

            $xPath         = new DOMXPath($domDocument);
            $keyValuePairs = array_combine(
                array_map(
                    static function (DOMNode $domNode) use ($source) {
                        return $source::transformKey($domNode->nodeValue);
                    },
                    iterator_to_array($xPath->query($source::xPathIdentifierValue())->getIterator())
                ),
                array_map(
                    static function (DOMNode $domNode) use ($source) {
                        return $source::transformValue($domNode->nodeValue);
                    },
                    iterator_to_array($xPath->query($source::xPathIdentifierKey())->getIterator())
                ),
            );

            $keyValuePairs = array_filter($keyValuePairs, static function (string $value) {
                return $value !== '';
            });
            var_dump($keyValuePairs);
        }
    }
}

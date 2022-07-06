<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use DOMDocument;
use DOMNode;
use DOMXPath;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_2_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Bibliographic_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Common_Source;
use PrinsFrank\Standards\Dev\DataSource\Language\ISO639_1_Alpha_3_Terminology_Source;
use PrinsFrank\Standards\Language\ISO639_1_Alpha_2;
use PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Bibliographic;
use PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Common;
use PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Terminology;
use RuntimeException;

class SpecUpdater
{
    /** @var array<class-string<DataSource>, class-string> */
    public const SOURCES = [
        ISO639_1_Alpha_2_Source::class               => ISO639_1_Alpha_2::class,
        ISO639_1_Alpha_3_Bibliographic_Source::class => ISO639_2_Alpha_3_Bibliographic::class,
        ISO639_1_Alpha_3_Terminology_Source::class   => ISO639_2_Alpha_3_Terminology::class,
        ISO639_1_Alpha_3_Common_Source::class        => ISO639_2_Alpha_3_Common::class,
    ];

    public function __invoke(): void
    {
        /** @var DataSource $sourceFQN */
        foreach (self::SOURCES as $sourceFQN => $specFQN) {
            $sourceContents = file_get_contents($sourceFQN::url());
            if ($sourceContents === false) {
                throw new RuntimeException('Unable to download source document at "' . $sourceFQN::url() . '"');
            }

            $domDocument = new DOMDocument();
            $domDocument->loadHTML($sourceContents);

            $xPath         = new DOMXPath($domDocument);
            $keyValuePairs = array_combine(
                array_map(
                    static function (DOMNode $domNode) use ($sourceFQN) {
                        $key = transliterator_transliterate('Any-Latin; Latin-ASCII;', $domNode->nodeValue ?? '');
                        $key = str_replace([' ', ';', ',', '(', ')', '-', '.', '\''], '_', $key);
                        $key = trim(str_replace(['__', '__'], ['_', '_'], $key), '_');

                        return $sourceFQN::transformKey($key);
                    },
                    iterator_to_array($xPath->query($sourceFQN::xPathIdentifierValue())->getIterator())
                ),
                array_map(
                    static function (DOMNode $domNode) use ($sourceFQN) {
                        return $sourceFQN::transformValue($domNode->nodeValue);
                    },
                    iterator_to_array($xPath->query($sourceFQN::xPathIdentifierKey())->getIterator())
                ),
            );

            $keyValuePairs = array_filter($keyValuePairs);
            ksort($keyValuePairs);

            $enumFilePath   = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . str_replace(['PrinsFrank\\Standards\\', '\\'], ['', DIRECTORY_SEPARATOR], $specFQN) . '.php';
            $enumContent    = file_get_contents($enumFilePath);
            $startEnum      = strpos($enumContent, '{');
            $firstMethodPos = strpos($enumContent, 'public');
            $endEnumPos     = strrpos($enumContent, '}');
            $newEnumContent = mb_substr($enumContent, 0, $startEnum + 1) . PHP_EOL;
            foreach ($keyValuePairs as $key => $value) {
                $newEnumContent .= '    case ' . $key . ' = \'' . $value . '\';' . PHP_EOL;
            }
            $newEnumContent .= mb_substr($enumContent, $firstMethodPos !== false ? ($firstMethodPos - 5) : ($endEnumPos - 1));
            file_put_contents($enumFilePath, $newEnumContent);
        }
    }
}

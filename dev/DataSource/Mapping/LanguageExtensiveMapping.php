<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataSource\Sorting\ValueWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{Id: string, Part2B: string, Part2T: string, Part1: string, Scope: string, LanguageType: string, RefName: string, Comment: string}
 * @implements Mapping<TDataSet>
 */
class LanguageExtensiveMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://iso639-3.sil.org/sites/iso639-3/files/downloads/iso-639-3_Latin1.tab';
    }

    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $dataSet = [];
        foreach (explode("\n", $client->getPageSource()) as $lineNumber => $line) {
            if ($lineNumber === 0) {
                continue;
            }

            $columns = explode("\t", $line);

            $record               = (object) [];
            $record->Id           = $columns[0];
            $record->Part2B       = $columns[1];
            $record->Part2T       = $columns[2];
            $record->Part1        = $columns[3];
            $record->Scope        = $columns[4];
            $record->LanguageType = $columns[5];
            $record->RefName      = $columns[6];
            $record->Comment      = $columns[7];

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    public static function toEnumMapping(array $dataSet): array
    {
        $languageExtensive = new EnumFile(LanguageAlpha3Extensive::class);
        foreach ($dataSet as $dataItem) {
            if (in_array($dataItem->RefName, ['Fa D\'ambu', 'C\'lela'], true)) {
                continue;
            }

            $languageExtensive->addCase(new EnumCase($dataItem->RefName, $dataItem->Id));
        }

        return [$languageExtensive];
    }

    public static function getSorting(): SortingInterface
    {
        return new ValueWithDeprecatedTagsSeparateSorting();
    }
}

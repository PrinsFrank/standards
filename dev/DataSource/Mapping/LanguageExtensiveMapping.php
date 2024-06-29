<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\Standards\Dev\DataSource\Sorting\ValueSorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\Exception\DomElementNotFoundException;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{Id: string, Part2B: string, Part2T: string, Part1: string, Scope: string, LanguageType: string, RefName: string, Comment: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class LanguageExtensiveMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://iso639-3.sil.org/sites/iso639-3/files/downloads/iso-639-3_Latin1.tab';
    }

    /** @throws DomElementNotFoundException */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $dataSet = [];
        foreach (explode("\n", $client->getPageSource()) as $lineNumber => $line) {
            if ($lineNumber === 0 || $line === '</pre></body></html>') {
                continue;
            }

            $columns = explode("\t", $line);

            $record = (object) [];
            $record->Id = $columns[0] ?? throw new DomElementNotFoundException('ID in ' . $line);
            $record->Part2B = $columns[1] ?? throw new DomElementNotFoundException('Part2B in ' . $line);
            $record->Part2T = $columns[2] ?? throw new DomElementNotFoundException('Part2T in ' . $line);
            $record->Part1 = $columns[3] ?? throw new DomElementNotFoundException('Part1 in ' . $line);
            $record->Scope = $columns[4] ?? throw new DomElementNotFoundException('Scope in ' . $line);
            $record->LanguageType = $columns[5] ?? throw new DomElementNotFoundException('LanguageType in ' . $line);
            $record->RefName = $columns[6] ?? throw new DomElementNotFoundException('RefName in ' . $line);
            $record->Comment = $columns[7] ?? throw new DomElementNotFoundException('Comment in ' . $line);

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    public static function toEnumMapping(array $dataSet): array
    {
        $languageExtensive = new EnumFile(LanguageAlpha3Extensive::class, ValueSorting::class);
        foreach ($dataSet as $dataItem) {
            if (in_array($dataItem->RefName, ['Fa D\'ambu', 'C\'lela'], true)) {
                continue;
            }

            $languageExtensive->addCase(new EnumCase($dataItem->RefName, $dataItem->Id));
        }

        return [$languageExtensive];
    }
}

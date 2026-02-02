<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Override;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Scripts\Attributes\SupportedByPHPRegex;
use PrinsFrank\Standards\Scripts\ScriptAlias;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{name: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class PHPRegexSupportedScriptsMapping implements Mapping {
    #[Override]
    public static function url(): string {
        return 'https://www.php.net/manual/en/regexp.reference.unicode.php';
    }

    #[Override]
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $items = $crawler->filterXPath('//table[@class="doctable table"]/tbody/tr/td/code')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $record = (object) [];
            $record->name = $item->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @return array<SpecFile>
     */
    #[Override]
    public static function toEnumMapping(array $dataSet): array {
        $scriptAliasStrings = array_map(static function (object $dataSetItem) {
            return $dataSetItem->name;
        }, $dataSet);

        $scriptAliasEnum = new SpecFile(ScriptAlias::class, KeySorting::class);
        foreach (ScriptAlias::cases() as $case) {
            $scriptAliasEnum->addCase(new EnumCase($case->name, $case->value, in_array($case->value, $scriptAliasStrings, true) ? [new EnumCaseAttribute(SupportedByPHPRegex::class)] : []));
        }

        return [$scriptAliasEnum];
    }
}

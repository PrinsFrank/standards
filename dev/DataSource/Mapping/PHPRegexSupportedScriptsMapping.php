<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Scripts\ScriptAlias;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{name: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class PHPRegexSupportedScriptsMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.php.net/manual/en/regexp.reference.unicode.php';
    }

    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@class="doctabel table"]/tbody/tr/td/code')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $record = (object) [];
            $record->name = $item->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    public static function toEnumMapping(array $dataSet): array
    {
        $scriptAliasEnum = new EnumFile(ScriptAlias::class);
        var_dump($dataSet);exit;

        return [$scriptAliasEnum];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Http\HttpMethod;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{alpha3: string, alpha2: string, name: string, name_french: string, name_german: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class HttpMethodMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-methods/http-methods.xhtml';
    }

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@id="table-methods"]/tbody/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));

            $record             = (object) [];
            $record->name       = $columns[0]->getText();
            $record->safe       = $columns[1]->getText();
            $record->idempotent = $columns[2]->getText();
            $record->reference  = $columns[3]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @return array<EnumFile>
     */
    public static function toEnumMapping(array $dataSet): array
    {
        $httpMethod  = new EnumFile(HttpMethod::class);
        foreach ($dataSet as $dataRow) {
            if ($dataRow->name === '*') {
                continue;
            }

            $httpMethod->addCase(new EnumCase(str_replace('-', '', mb_convert_case($dataRow->name, MB_CASE_TITLE)), $dataRow->name));
        }

        return [$httpMethod];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

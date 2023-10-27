<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
use PrinsFrank\Standards\Http\HttpMethod;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{alpha3: string, alpha2: string, name: string, name_french: string, name_german: string}
 * @implements Mapping<TDataSet>
 */
class HttpMethodMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-methods/http-methods.xhtml';
    }

    /** @return array<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@id="table-methods"]/tbody/tr')->getIterator();

        $dataSet = [];
        /** @var RemoteWebElement $item */
        foreach ($items as $i => $item) {
            foreach ($item->findElements(WebDriverBy::xpath('./td')) as $j => $childNode) {
                $dataSet[$i] ?? $dataSet[$i]                                                   = (object) [];
                $dataSet[$i]->{['name', 'safe', 'idempotent', 'reference'][$j]}                = $childNode->getText();
            }
        }

        return $dataSet;
    }

    /**
     * @param array<TDataSet> $dataSet
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

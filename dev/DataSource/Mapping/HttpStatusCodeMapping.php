<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataSource\Sorting\ValueWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
use PrinsFrank\Standards\Http\HttpStatusCode;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{CtryNm: string, CcyNm: string, Ccy: string, CcyNbr: string, CcyMnrUnts: string}
 * @implements Mapping<TDataSet>
 */
class HttpStatusCodeMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml';
    }

    /** @return array<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@id="table-http-status-codes-1"]/tbody/tr')->getIterator();

        $dataSet = [];
        /** @var RemoteWebElement $item */
        foreach ($items as $i => $item) {
            foreach ($item->findElements(WebDriverBy::xpath('./td')) as $j => $childNode) {
                $dataSet[$i] ?? $dataSet[$i]                                                   = (object) [];
                $dataSet[$i]->{['value', 'description', 'reference'][$j]}                      = $childNode->getText();
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
        $httpMethod  = new EnumFile(HttpStatusCode::class);
        foreach ($dataSet as $dataRow) {
            if (in_array($dataRow->description, ['Unassigned', '(Unused)'], true)) {
                continue;
            }

            $httpMethod->addCase(new EnumCase($dataRow->description, (int) $dataRow->value));
        }

        return [$httpMethod];
    }

    public static function getSorting(): SortingInterface
    {
        return new ValueWithDeprecatedTagsSeparateSorting();
    }
}

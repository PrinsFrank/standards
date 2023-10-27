<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use DOMDocument;
use DOMElement;
use DOMXPath;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{CtryNm: string, CcyNm: string, Ccy: string|null, CcyNbr: string|null, CcyMnrUnts: string|null}
 * @implements Mapping<TDataSet>
 */
class CurrencyMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list-one.xml';
    }

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $domDocument = new DOMDocument();
        $domDocument->loadXML($client->getPageSource());
        $xPath = new DOMXPath($domDocument);
        $items = $xPath->query('//ISO_4217/CcyTbl/CcyNtry');
        $items !== false ?: throw new DomElementNotFoundException('');

        $dataSet = [];
        /** @var DOMElement $item */
        foreach ($items as $item) {
            $columns = $item->childNodes;

            $record             = (object) [];
            $record->CtryNm     = $columns[1]->textContent;
            $record->CcyNm      = $columns[3]->textContent;
            $record->Ccy        = $columns[5]->textContent ?? null;
            $record->CcyNbr     = $columns[7]->textContent ?? null;
            $record->CcyMnrUnts = $columns[9]->textContent ?? null;

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
        $currencyAlpha3Enum  = new EnumFile(CurrencyAlpha3::class);
        $currencyNameEnum    = new EnumFile(CurrencyName::class);
        $currencyNumericEnum = new EnumFile(CurrencyNumeric::class);
        foreach ($dataSet as $dataRow) {
            if (($dataRow->Ccy ?? null) === null) {
                continue;
            }

            $currencyName = $dataRow->CcyNm;
            if ($dataRow->Ccy === 'VES' || $dataRow->Ccy === 'SLL') {
                $currencyName .= '_Old';
            }

            $currencyAlpha3Enum->addCase(new EnumCase($currencyName, $dataRow->Ccy));
            $currencyNameEnum->addCase(new EnumCase($currencyName, $currencyName));
            if ($dataRow->CcyNbr !== null) {
                $currencyNumericEnum->addCase(new EnumCase($currencyName, $dataRow->CcyNbr));
            }
        }

        return [$currencyAlpha3Enum, $currencyNameEnum, $currencyNumericEnum];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

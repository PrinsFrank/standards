<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use DOMDocument;
use DOMElement;
use DOMText;
use DOMXPath;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{CtryNm: string, CcyNm: string, Ccy: string, CcyNbr: string, CcyMnrUnts: string}
 * @implements Mapping<TDataSet>
 */
class CurrencyMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list-one.xml';
    }

    /** @return array<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $domDocument = new DOMDocument();
        $domDocument->loadXML($client->getPageSource());
        $xPath = new DOMXPath($domDocument);
        $items = $xPath->query('//ISO_4217/CcyTbl/CcyNtry');

        $dataSet = [];
        foreach ($items as $i => $item) {
            /** @var DOMElement $item */
            foreach ($item->childNodes as $childNode) {
                /** @var DOMElement|DOMText $childNode */
                if ($childNode instanceof DOMElement === false || $childNode->localName === null) {
                    continue;
                }

                $dataSet[$i] ?? $dataSet[$i] = (object) [];
                $dataSet[$i]->{$childNode->localName} = $childNode->textContent;
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
        $currencyAlpha3Enum = new EnumFile(CurrencyAlpha3::class);
        $currencyNameEnum = new EnumFile(CurrencyName::class);
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
            $currencyNumericEnum->addCase(new EnumCase($currencyName, $dataRow->CcyNbr));
        }

        return [$currencyAlpha3Enum, $currencyNameEnum, $currencyNumericEnum];
    }
}

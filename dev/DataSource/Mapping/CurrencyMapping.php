<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use DOMDocument;
use DOMElement;
use DOMXPath;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Enums\Exception\InvalidArgumentException;
use PrinsFrank\Enums\Exception\NameNotFoundException;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EuroZone;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumMethod;
use PrinsFrank\Standards\Dev\DataTarget\NameNormalizer;
use PrinsFrank\Standards\Dev\Exception\DomElementNotFoundException;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\Exception\RecursionException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{CtryNm: string, CcyNm: string, Ccy: string|null, CcyNbr: string|null, CcyMnrUnts: string|null}&stdClass
 * @implements Mapping<TDataSet>
 */
class CurrencyMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list-one.xml';
    }

    /**
     * @throws DomElementNotFoundException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $domDocument = new DOMDocument();
        $domDocument->loadXML($client->getPageSource());
        $xPath = new DOMXPath($domDocument);
        $items = $xPath->query('//ISO_4217/CcyTbl/CcyNtry');
        if ($items === false) {
            throw new DomElementNotFoundException();
        }

        $dataSet = [];
        /** @var DOMElement $item */
        foreach ($items as $item) {
            $columns = $item->childNodes;

            $record = (object) [];
            $record->CtryNm = $columns[1]->textContent;
            $record->CcyNm = $columns[3]->textContent;
            $record->Ccy = $columns[5]->textContent ?? null;
            $record->CcyNbr = $columns[7]->textContent ?? null;
            $record->CcyMnrUnts = $columns[9]->textContent ?? null;

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @throws TransliterationException
     * @throws InvalidArgumentException
     * @throws NameNotFoundException
     * @throws \PrinsFrank\Transliteration\Exception\InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     * @throws RecursionException
     * @return array<EnumFile>
     */
    public static function toEnumMapping(array $dataSet): array
    {
        $currencyNameEnum = new EnumFile(CurrencyName::class, KeySorting::class);
        $currencyNumericEnum = new EnumFile(CurrencyNumeric::class, KeySorting::class);
        $currencyAlpha3Enum = (new EnumFile(CurrencyAlpha3::class, KeySorting::class))
            ->addMethod($getMinorUnitsMethod = new EnumMethod('getMinorUnits', '?int', 'null'))
            ->addMethod($getCountriesAlpha2Method = new EnumMethod('getCountriesAlpha2', 'array', '[]', '/** @return list<CountryAlpha2> */'));

        foreach (CurrencyAlpha3::cases() as $case) {
            if (($minorUnits = $case->getMinorUnits()) !== null) {
                $getMinorUnitsMethod->addMapping('self::' . $case->name, (string) $minorUnits);
            }
        }

        $countryAlpha2 = (new EnumFile(CountryAlpha2::class, KeySorting::class))
            ->addMethod($getCurrenciesMethod = new EnumMethod('getCurrenciesAlpha3', 'array', '[]', '/** @return list<CurrencyAlpha3> */'));
        foreach ($dataSet as $dataRow) {
            if (($dataRow->Ccy ?? null) === null) {
                continue;
            }

            $currencyName = $dataRow->CcyNm;
            if ($dataRow->Ccy === 'VES' || $dataRow->Ccy === 'SLL') {
                $currencyName .= '_Old';
            }

            if ($dataRow->CcyMnrUnts === (string) (int) $dataRow->CcyMnrUnts) {
                $getMinorUnitsMethod->addMapping('self::' . NameNormalizer::normalize($currencyName), $dataRow->CcyMnrUnts);
            }

            $currencyAlpha3Enum->addCase(new EnumCase($currencyName, $dataRow->Ccy));
            $currencyNameEnum->addCase(new EnumCase($currencyName, $currencyName));
            if ($dataRow->CcyNbr !== null) {
                $currencyNumericEnum->addCase(new EnumCase($currencyName, $dataRow->CcyNbr));
            }

            $countryName = NameNormalizer::normalize(mb_convert_case($dataRow->CtryNm, MB_CASE_TITLE));
            if (str_starts_with($countryName, 'Zz') === true || in_array($dataRow->Ccy, [CurrencyAlpha3::SDR_Special_Drawing_Right->value, CurrencyAlpha3::ADB_Unit_of_Account->value, CurrencyAlpha3::Sucre->value], true) === true) {
                continue;
            }

            if ($countryName === 'European_Union') {
                foreach (EuroZone::allAlpha2() as $euroZoneCountry) {
                    $getCurrenciesMethod->addMapping('self::' . $euroZoneCountry->name, 'CurrencyAlpha3::' . NameNormalizer::normalize($currencyName));
                    $getCountriesAlpha2Method->addMapping('self::' . NameNormalizer::normalize($currencyName), 'CountryAlpha2::' . $euroZoneCountry->name);
                }
            } else {
                $countryName = (BackedEnum::fromName(CountryAlpha2::class, str_replace(['_The', '_And_', '_Plurinational_State_Of', '_Keeling', '_Of', '_D_ivoire', '_Malvinas', 'Mcdonald', '_Islamic_Republic', 'Isle_Man', 'People_s_', '_Federated_States', 'Moldova_Republic', '_and_Tristan', '_Da_', '_Part', '_and_Grenadines', '_and_Jan', '_Province_China', '_United_Republic', 'Turkiye', '_Great_Britain_and_Northern_Ireland', 'Minor_', '_America', '_Bolivarian_Republic', '_U_s'], ['', '_and_', '', '', '', '_d_Ivoire', '', 'McDonald', '', 'Isle_of_Man', 'Peoples_', '', 'Moldova', '_Tristan', '_da_', '_part', '_and_the_Grenadines', '_Jan', '_Province_of_China', '', 'Turkey', '', '', '_of_America', '', '_U_S'], $countryName))->name);

                $getCurrenciesMethod->addMapping('self::' . $countryName, 'CurrencyAlpha3::' . NameNormalizer::normalize($currencyName));
                $getCountriesAlpha2Method->addMapping('self::' . NameNormalizer::normalize($currencyName), 'CountryAlpha2::' . $countryName);
            }
        }

        return [$currencyAlpha3Enum, $currencyNameEnum, $currencyNumericEnum, $countryAlpha2];
    }
}

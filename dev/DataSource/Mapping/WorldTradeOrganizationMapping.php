<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverElement;
use Override;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\Country\Groups\WorldTradeOrganization;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumListMethod;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;
use TypeError;
use ValueError;

/**
 * @template TDataSet of object{countryAlpha3String: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class WorldTradeOrganizationMapping implements Mapping {
    #[Override]
    public static function url(): string {
        return 'https://www.wto.org/english/thewto_e/whatis_e/tif_e/org6_e.htm';
    }

    /** @throws RuntimeException */
    #[Override]
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $dataSet = [];
        foreach ($crawler->filterXPath('//div[@id="accordion"]//ul/li')->getIterator() as $item) {
            /** @var WebDriverElement $item */
            $aElements = $item->findElements(WebDriverBy::xpath('./a'));
            if ($aElements === []
                || array_key_exists(0, $aElements) === false
                || ($countryAlpha3String = $aElements[0]->getAttribute('id')) === '') {
                throw new RuntimeException('Unable to locate countryAlpha3');
            }

            $record = (object) [];
            $record->countryAlpha3String = $countryAlpha3String;

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /** @throws ValueError|TypeError */
    #[Override]
    public static function toEnumMapping(array $dataSet): array {
        $WorldTradeOrganization = (new SpecFile(WorldTradeOrganization::class, KeySorting::class))
            ->addMethod($allAlpha2 = new EnumListMethod('allAlpha2', 'array', '/** @return list<CountryAlpha2> */' . PHP_EOL . '    #[Override]'));

        foreach ($dataSet as $dataRow) {
            $countryAlpha3String = $dataRow->countryAlpha3String;
            if ($countryAlpha3String === 'EEC') {
                foreach (EU::allAlpha2() as $euCountry) {
                    $allAlpha2->addItem('CountryAlpha2::' . $euCountry->name);
                }

                continue;
            }

            if ($countryAlpha3String === 'ROM') { // Updated to ROU since 2002 but still used on the WTO site
                $countryAlpha3String = 'ROU';
            } elseif ($countryAlpha3String === 'CHT') { // Alternative country code
                $countryAlpha3String = 'TWN';
            } elseif ($countryAlpha3String === 'TUR1') { // Mistake?
                $countryAlpha3String = 'TUR';
            }

            $allAlpha2->addItem('CountryAlpha2::' . CountryAlpha3::from($countryAlpha3String)->toCountryAlpha2()->name);
        }

        return [$WorldTradeOrganization];
    }
}

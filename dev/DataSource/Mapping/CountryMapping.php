<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{name: string, name_french: string, alpha2: string, alpha3: string, numeric: string}
 * @implements Mapping<TDataSet>
 */
class CountryMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iso.org/obp/ui/#search/code/';
    }

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $client->waitFor('.v-select-select');
        $client->waitForInvisibility('.v-loading-indicator');
        $perPageDropdown = $crawler->filterXPath(".//select[@class='v-select-select']//option[last()]");
        $perPageDropdown->click();
        $client->waitForElementToContain('html', 'Zimbabwe');
        $items = $crawler->filterXPath('//tbody[@class="v-grid-body"]/tr')->getIterator();

        $dataSet = [];
        /** @var RemoteWebElement $item */
        foreach ($items as $i => $item) {
            foreach ($item->findElements(WebDriverBy::xpath('./td')) as $j => $childNode) {
                $dataSet[$i] ?? $dataSet[$i]                                                   = (object) [];
                $dataSet[$i]->{['name', 'name_french', 'alpha2', 'alpha3', 'numeric'][$j]}     = $childNode->getText();
            }
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @return array<EnumFile>
     */
    public static function toEnumMapping(array $dataSet): array
    {
        $countryName    = new EnumFile(CountryName::class);
        $countryAlpha2  = new EnumFile(CountryAlpha2::class);
        $countryAlpha3  = new EnumFile(CountryAlpha3::class);
        $countryNumeric = new EnumFile(CountryNumeric::class);
        foreach ($dataSet as $dataRow) {
            $countryName->addCase(new EnumCase($dataRow->name, $dataRow->name));
            $countryAlpha2->addCase(new EnumCase($dataRow->name, $dataRow->alpha2));
            $countryAlpha3->addCase(new EnumCase($dataRow->name, $dataRow->alpha3));
            $countryNumeric->addCase(new EnumCase($dataRow->name, $dataRow->numeric));
        }

        return [$countryName, $countryAlpha2, $countryAlpha3, $countryNumeric];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

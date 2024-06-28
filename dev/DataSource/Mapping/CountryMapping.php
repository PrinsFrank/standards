<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\Exception\TimeoutException;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{name: string, name_french: string, alpha2: string, alpha3: string, numeric: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class CountryMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iso.org/obp/ui/#search/code/';
    }

    /**
     * @throws NoSuchElementException
     * @throws TimeoutException
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $client->waitFor('#onetrust-accept-btn-handler');
        $cookieButton = $crawler->filterXPath(".//button[@id='onetrust-accept-btn-handler']");
        $cookieButton->click();

        $crawler = $client->refreshCrawler(); // The cookie acceptance causes a redirect, so we have to get a crawler instance for the new document
        $client->waitForVisibility('.v-select-select');
        $client->waitForInvisibility('.v-loading-indicator');
        $perPageDropdown = $crawler->filterXPath(".//select[@class='v-select-select']//option[last()]");
        $perPageDropdown->click();
        $client->waitForElementToContain('html', 'Zimbabwe');
        $items = $crawler->filterXPath('//tbody[@class="v-grid-body"]/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (array_key_exists(0, $columns) === false
                || array_key_exists(1, $columns) === false
                || array_key_exists(2, $columns) === false
                || array_key_exists(3, $columns) === false
                || array_key_exists(4, $columns) === false) {
                throw new RuntimeException('Expected exactly 5 columns');
            }

            $record = (object) [];
            $record->name = $columns[0]->getText();
            $record->name_french = $columns[1]->getText();
            $record->alpha2 = $columns[2]->getText();
            $record->alpha3 = $columns[3]->getText();
            $record->numeric = $columns[4]->getText();

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
        $countryName = new EnumFile(CountryName::class, KeySorting::class);
        $countryAlpha2 = new EnumFile(CountryAlpha2::class, KeySorting::class);
        $countryAlpha3 = new EnumFile(CountryAlpha3::class, KeySorting::class);
        $countryNumeric = new EnumFile(CountryNumeric::class, KeySorting::class);
        foreach ($dataSet as $dataRow) {
            $countryName->addCase(new EnumCase($dataRow->name, $dataRow->name));
            $countryAlpha2->addCase(new EnumCase($dataRow->name, $dataRow->alpha2));
            $countryAlpha3->addCase(new EnumCase($dataRow->name, $dataRow->alpha3));
            $countryNumeric->addCase(new EnumCase($dataRow->name, $dataRow->numeric));
        }

        return [$countryName, $countryAlpha2, $countryAlpha3, $countryNumeric];
    }
}

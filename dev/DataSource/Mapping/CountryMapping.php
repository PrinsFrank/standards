<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\Exception\TimeoutException;
use Facebook\WebDriver\Remote\RemoteWebElement;
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
 * @template TDataSet of object{name: string, name_french: string, alpha2: string, alpha3: string, numeric: string, subdivisions: array<string, object{category: string, code: string, name: string, local_variant: string, language_codes: list<string>, romanization_system: list<string>, parent: string}>}&stdClass
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
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $client->waitFor('#onetrust-accept-btn-handler');
        $cookieButton = $crawler->filterXPath(".//button[@id='onetrust-accept-btn-handler']");
        $cookieButton->click();

        $client->waitForVisibility('.v-select-select');
        $client->waitForInvisibility('.v-loading-indicator');
        $crawler = $client->refreshCrawler(); // The cookie acceptance causes a redirect, so we have to get a crawler instance for the new document
        $perPageDropdown = $crawler->filterXPath(".//select[@class='v-select-select']//option[last()]");
        $perPageDropdown->click();
        $client->waitForElementToContain('html', 'Zimbabwe');
        $items = $crawler->filterXPath('//tbody[@class="v-grid-body"]/tr')->getIterator();

        /** @var list<TDataSet> $dataSet */
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

            $record = (object) ['subdivisions' => []];
            $record->name = $columns[0]->getText();
            $record->name_french = $columns[1]->getText();
            $record->alpha2 = $columns[2]->getText();
            $record->alpha3 = $columns[3]->getText();
            $record->numeric = $columns[4]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        foreach ($dataSet as $record) {
            echo $record->name . PHP_EOL;
            $client->request('GET', 'https://www.iso.org/obp/ui/#iso:code:3166:' . $record->alpha2);
            $crawler = $client->refreshCrawler();
            $client->waitForElementToContain('.v-tabsheet-tabitem-selected', $record->alpha2);
            $client->waitForVisibility("table#subdivision");
            $client->waitForInvisibility('.v-loading-indicator');
            foreach ($crawler->filterXPath("//table[@id='subdivision']/tbody/tr")->getIterator() as $subdivision) {
                /** @var RemoteWebElement $subdivision */
                $subdivisionColumns = $subdivision->findElements(WebDriverBy::xpath('./td'));
                if (count($subdivisionColumns) !== 7
                    || array_key_exists(0, $subdivisionColumns) === false
                    || array_key_exists(1, $subdivisionColumns) === false
                    || array_key_exists(2, $subdivisionColumns) === false
                    || array_key_exists(3, $subdivisionColumns) === false
                    || array_key_exists(4, $subdivisionColumns) === false
                    || array_key_exists(5, $subdivisionColumns) === false
                    || array_key_exists(6, $subdivisionColumns) === false) {
                    throw new RuntimeException('Expected exactly 7 columns');
                }

                if (array_key_exists($subdivisionColumns[1]->getText(), $record->subdivisions)) {
                    $existingSubdivisionWithCode = $record->subdivisions[$subdivisionColumns[1]->getText()];
                    if ($existingSubdivisionWithCode->category !== $subdivisionColumns[0]->getText()
                        || $existingSubdivisionWithCode->code !== rtrim($subdivisionColumns[1]->getText(), '*')
                        || $existingSubdivisionWithCode->name !== $subdivisionColumns[2]->getText()
                        || $existingSubdivisionWithCode->local_variant !== $subdivisionColumns[3]->getText()
                        || $existingSubdivisionWithCode->parent !== $subdivisionColumns[6]->getText()) {
                        throw new RuntimeException('Attempted to merge division with previous division but the division information is different');
                    }

                    if (in_array($subdivisionColumns[4]->getText(), $existingSubdivisionWithCode->language_codes) === false) {
                        $existingSubdivisionWithCode->language_codes[] = $subdivisionColumns[4]->getText();
                    }

                    if (in_array($subdivisionColumns[5]->getText(), $existingSubdivisionWithCode->romanization_system) === false) {
                        $existingSubdivisionWithCode->romanization_system[] = $subdivisionColumns[5]->getText();
                    }

                    continue;
                }

                $record->subdivisions[$subdivisionColumns[1]->getText()] = (object) [
                    'category' => $subdivisionColumns[0]->getText(),
                    'code' => rtrim($subdivisionColumns[1]->getText(), '*'),
                    'name' => $subdivisionColumns[2]->getText(),
                    'local_variant' => $subdivisionColumns[3]->getText(),
                    'language_codes' => [$subdivisionColumns[4]->getText()],
                    'romanization_system' => [$subdivisionColumns[5]->getText()],
                    'parent' => $subdivisionColumns[6]->getText(),
                ];
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

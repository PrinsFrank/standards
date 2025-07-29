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
use PrinsFrank\Standards\Country\Subdivision\Attributes\Name;
use PrinsFrank\Standards\Country\Subdivision\Attributes\SameAsCountry;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumMappingMethod;
use PrinsFrank\Standards\Dev\DataTarget\NameNormalizer;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\ShouldNotHappenException;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;
use TypeError;
use ValueError;

/**
 * @template TDataSet of object{name: string, name_french: string, alpha2: string, alpha3: string, numeric: string, subdivisions: array<string, object{category: string, code: string, same_as_country: ?CountryAlpha2, parent: ?string, names: non-empty-list<object{name: string, note: ?string, languages: list<CountryAlpha2>, romanization_system: ?string, local_variant: ?string}&stdClass>}&stdClass>}&stdClass
 * @implements Mapping<TDataSet>
 */
class CountryMapping implements Mapping {
    public static function url(): string {
        return 'https://www.iso.org/obp/ui/#search/code/';
    }

    /**
     * @throws NoSuchElementException
     * @throws TimeoutException
     * @throws RuntimeException
     * @throws ValueError
     * @throws TypeError
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $client->waitForVisibility('.v-select-select');
        $client->waitForInvisibility('.v-window-modalitycurtain');
        $client->waitForInvisibility('.v-app-loading');
        $client->waitForInvisibility('.v-loading-indicator');
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

            /** @var TDataSet $record */
            $record = new stdClass();
            $record->subdivisions = [];
            $record->name = $columns[0]->getText();
            $record->name_french = $columns[1]->getText();
            $record->alpha2 = $columns[2]->getText();
            $record->alpha3 = $columns[3]->getText();
            $record->numeric = $columns[4]->getText();

            $dataSet[] = $record;
        }

        foreach ($dataSet as $record) {
            echo $record->name . PHP_EOL;
            $client->request('GET', 'https://www.iso.org/obp/ui/#iso:code:3166:' . $record->alpha2);
            $crawler = $client->refreshCrawler();
            $client->waitForElementToContain('.v-tabsheet-tabitem-selected', $record->alpha2);
            $client->waitForVisibility("table#subdivision");
            $client->waitForInvisibility('.v-window-modalitycurtain');
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
                        || $existingSubdivisionWithCode->parent !== $subdivisionColumns[6]->getText()) {
                        throw new RuntimeException('Attempted to merge division with previous division but the division information (category, code or parent) is different');
                    }

                    [$name, $note] = self::getNameNote($subdivisionColumns[2]->getText());
                    $existingSubdivisionWithCode->names[] = (object) [
                        'name' => $name,
                        'note' => $note,
                        'languages' => [LanguageAlpha2::tryFrom($subdivisionColumns[4]->getText())],
                        'romanization_system' => $subdivisionColumns[5]->getText() !== '' ? $subdivisionColumns[5]->getText() : null,
                        'local_variant' => $subdivisionColumns[3]->getText() !== '' ? $subdivisionColumns[3]->getText() : null,
                    ];

                    continue;
                }

                [$name, $note] = self::getNameNote($subdivisionColumns[2]->getText());
                $record->subdivisions[$subdivisionColumns[1]->getText()] = (object) [
                    'category' => $subdivisionColumns[0]->getText(),
                    'code' => rtrim($subdivisionColumns[1]->getText(), '*'),
                    'parent' => $subdivisionColumns[6]->getText(),
                    'same_as_country' => $note !== null && preg_match('/see also separate country code entry under (?P<countryCode>[A-Z]{2})/', $note, $matches) === 1 ? CountryAlpha2::from($matches['countryCode']) : null,
                    'names' => [
                        (object) [
                            'name' => $name,
                            'note' => $note,
                            'languages' => [LanguageAlpha2::tryFrom($subdivisionColumns[4]->getText())],
                            'romanization_system' => $subdivisionColumns[5]->getText() !== '' ? $subdivisionColumns[5]->getText() : null,
                            'local_variant' => $subdivisionColumns[3]->getText() !== '' ? $subdivisionColumns[3]->getText() : null,
                        ],
                    ],
                ];
            }
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @throws TypeError
     * @throws ValueError
     * @throws TransliterationException
     * @throws \PrinsFrank\Transliteration\Exception\TransliterationException
     * @throws ShouldNotHappenException
     * @return array<SpecFile>
     */
    public static function toEnumMapping(array $dataSet): array {
        $countryName = new SpecFile(CountryName::class, KeySorting::class);
        $countryAlpha2 = (new SpecFile(CountryAlpha2::class, KeySorting::class))
            ->addMethod($getSubdivisionsMethod = new EnumMappingMethod('getSubdivisions', 'array', '[]', '/** @return list<CountrySubdivision> */'));
        $countryAlpha3 = new SpecFile(CountryAlpha3::class, KeySorting::class);
        $countryNumeric = new SpecFile(CountryNumeric::class, KeySorting::class);
        $countrySubdivision = (new SpecFile(CountrySubdivision::class, KeySorting::class));
        foreach ($dataSet as $dataRow) {
            $countryName->addCase(new EnumCase($dataRow->name, $dataRow->name));
            $countryAlpha2->addCase(new EnumCase($dataRow->name, $dataRow->alpha2));
            $countryAlpha3->addCase(new EnumCase($dataRow->name, $dataRow->alpha3));
            $countryNumeric->addCase(new EnumCase($dataRow->name, $dataRow->numeric));

            foreach ($dataRow->subdivisions as $subdivision) {
                foreach ($subdivision->names as $key => $name) {
                    if (array_key_exists($key + 1, $subdivision->names) && $name->name === $subdivision->names[$key + 1]->name && $name->romanization_system === $subdivision->names[$key + 1]->romanization_system && $name->local_variant === $subdivision->names[$key + 1]->local_variant) {
                        $subdivision->names[$key + 1]->languages = [...$subdivision->names[$key + 1]->languages, ...$subdivision->names[$key]->languages];
                        unset($subdivision->names[$key]);
                    }
                }

                $subdivision->names = array_values(array_filter($subdivision->names, fn (object|null $value) => $value !== null));
                $countrySubdivision->addCase(
                    new EnumCase(
                        $name = sprintf('%s %s %s', CountryAlpha2::from($dataRow->alpha2)->getNameInLanguage(LanguageAlpha2::English), $subdivision->category, $subdivision->names[0]->name ?? throw new ShouldNotHappenException('This subdivision has no name(s)')),
                        $subdivision->code,
                        [...array_map(static function (object $nameInfo) {
                            return new EnumCaseAttribute(Name::class, [$nameInfo->name, array_filter($nameInfo->languages, fn (object|null $value) => $value !== null), $nameInfo->romanization_system, $nameInfo->local_variant]);
                        }, $subdivision->names), ...($subdivision->same_as_country !== null ? [new EnumCaseAttribute(SameAsCountry::class, [$subdivision->same_as_country])] : [])],
                    )
                );

                $country = CountryAlpha2::from($dataRow->alpha2);
                $subdivisionName = CountrySubdivision::tryFrom($subdivision->code)->name ?? NameNormalizer::normalize($name);
                $getSubdivisionsMethod->addMapping('self::' . $country->name, 'CountrySubdivision::' . $subdivisionName);
            }
        }

        return [$countryName, $countryAlpha2, $countryAlpha3, $countryNumeric, $countrySubdivision];
    }

    /** @return array{0: string, 1: ?string} */
    private static function getNameNote(string $text): array {
        if (($notePos = strpos($text, '(see also')) !== false) {
            return [rtrim(substr($text, 0, $notePos), ' '), ltrim(rtrim(substr($text, $notePos - 1), ')'), '(')];
        }

        return [$text, null];
    }
}

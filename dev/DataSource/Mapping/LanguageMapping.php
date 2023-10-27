<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Common;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Language\LanguageName;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{alpha3: string, alpha2: string, name: string, name_french: string, name_german: string}
 * @implements Mapping<TDataSet>
 */
class LanguageMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.loc.gov/standards/iso639-2/php/code_list.php';
    }

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@width="100%"]/tbody/tr')->getIterator();

        $dataSet = [];
        /** @var RemoteWebElement $item */
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (count($columns) !== 5 || $columns[2]->getText() === 'Reserved for local use') {
                continue;
            }

            $record              = (object) [];
            $record->alpha3      = $columns[0]->getText();
            $record->alpha2      = $columns[1]->getText();
            $record->name        = $columns[2]->getText();
            $record->name_french = $columns[3]->getText();
            $record->name_german = $columns[4]->getText();

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
        $languageAlpha2              = new EnumFile(LanguageAlpha2::class);
        $languageName                = new EnumFile(LanguageName::class);
        $languageAlpha3Common        = new EnumFile(LanguageAlpha3Common::class);
        $languageAlpha3Bibliographic = new EnumFile(LanguageAlpha3Bibliographic::class);
        $languageAlpha3Terminology   = new EnumFile(LanguageAlpha3Terminology::class);
        foreach ($dataSet as $dataRow) {
            $languageName->addCase(new EnumCase($dataRow->name, $dataRow->name));

            if (trim($dataRow->alpha2) !== '') {
                $languageAlpha2->addCase(new EnumCase($dataRow->name, $dataRow->alpha2));
            }

            if (strlen($dataRow->alpha3) === 3) {
                $languageAlpha3Common->addCase(new EnumCase($dataRow->name, $dataRow->alpha3));
            } elseif (preg_match('/(?P<bibliographic>[a-z]{3})\s+\(B\)\n(?P<terminology>[a-z]{3})\s+\(T\)/', $dataRow->alpha3, $matches)) {
                $languageAlpha3Terminology->addCase(new EnumCase($dataRow->name, $matches['terminology']));
                $languageAlpha3Bibliographic->addCase(new EnumCase($dataRow->name, $matches['bibliographic']));
            }
        }

        return [$languageAlpha2, $languageAlpha3Bibliographic, $languageAlpha3Common, $languageAlpha3Terminology, $languageName];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

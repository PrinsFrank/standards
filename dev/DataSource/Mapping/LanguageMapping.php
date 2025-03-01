<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Language\LanguageName;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{alpha3: string, alpha2: string, name: string, name_french: string, name_german: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class LanguageMapping implements Mapping {
    /** @var array<string, string> where key is the new name and value is the previous name */
    private const RENAMES = [
        'Tlicho; Dogrib' => 'Tlicho, Dogrib',
        'Dogri (macrolanguage)' => 'Dogri',
        'Konkani (macrolanguage)' => 'Konkani',
        'Malay (macrolanguage)' => 'Malay',
        'Nepali (macrolanguage)' => 'Nepali',
        'Oriya (macrolanguage)' => 'Oriya',
        'Swahili (macrolanguage)' => 'Swahili',
    ];

    public static function url(): string {
        return 'https://www.loc.gov/standards/iso639-2/php/code_list.php';
    }

    /**
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $items = $crawler->filterXPath('//table[@width="100%"]/tbody/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if ($columns === []) {
                continue;
            }

            if (array_key_exists(0, $columns) === false
                || array_key_exists(1, $columns) === false
                || array_key_exists(2, $columns) === false
                || array_key_exists(3, $columns) === false
                || array_key_exists(4, $columns) === false) {
                throw new RuntimeException('Expected exactly 5 columns');
            }

            if ($columns[2]->getText() === 'Reserved for local use') {
                continue;
            }

            $record = (object) [];
            $record->alpha3 = $columns[0]->getText();
            $record->alpha2 = $columns[1]->getText();
            $record->name = $columns[2]->getText();
            $record->name_french = $columns[3]->getText();
            $record->name_german = $columns[4]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @return array<SpecFile>
     */
    public static function toEnumMapping(array $dataSet): array {
        $languageAlpha2 = new SpecFile(LanguageAlpha2::class, KeySorting::class);
        $languageName = new SpecFile(LanguageName::class, KeySorting::class);
        $languageAlpha3Bibliographic = new SpecFile(LanguageAlpha3Bibliographic::class, KeySorting::class);
        $languageAlpha3Terminology = new SpecFile(LanguageAlpha3Terminology::class, KeySorting::class);
        foreach ($dataSet as $dataRow) {
            $languageName->addCase(new EnumCase($dataRow->name, $dataRow->name, previousValue: array_key_exists($dataRow->name, self::RENAMES) ? self::RENAMES[$dataRow->name] : null));

            if (trim($dataRow->alpha2) !== '') {
                $languageAlpha2->addCase(new EnumCase($dataRow->name, $dataRow->alpha2));
            }

            if (strlen($dataRow->alpha3) === 3) {
                $languageAlpha3Terminology->addCase(new EnumCase($dataRow->name, $dataRow->alpha3));
                $languageAlpha3Bibliographic->addCase(new EnumCase($dataRow->name, $dataRow->alpha3));
            } elseif (preg_match('/(?P<bibliographic>[a-z]{3})\s+\(B\)\n(?P<terminology>[a-z]{3})\s+\(T\)/', $dataRow->alpha3, $matches) === 1) {
                $languageAlpha3Terminology->addCase(new EnumCase($dataRow->name, $matches['terminology']));
                $languageAlpha3Bibliographic->addCase(new EnumCase($dataRow->name, $matches['bibliographic']));
            }
        }

        return [$languageAlpha2, $languageAlpha3Bibliographic, $languageAlpha3Terminology, $languageName];
    }
}

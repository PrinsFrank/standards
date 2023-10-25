<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Doctrine\Common\Annotations\Annotation\Enum;
use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageAlpha2Source;
use PrinsFrank\Standards\Dev\DataSource\Configuration\Language\LanguageAlpha3CommonSource;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
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

    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@width="100%"]/tbody/tr')->getIterator();
        $items !== false ?: throw new DomElementNotFoundException('');

        $dataSet = [];
        /** @var RemoteWebElement $item */
        foreach ($items as $i => $item) {
            foreach ($item->findElements(WebDriverBy::xpath('./td')) as $j => $childNode) {
                $dataSet[$i] ?? $dataSet[$i]                                                   = (object) [];
                $dataSet[$i]->{['alpha3', 'alpha2', 'name', 'name_french', 'name_german'][$j]} = $childNode->getText();
            }
        }

        return $dataSet;
    }

    public static function toEnumMapping(array $dataSet): array
    {
        $languageAlpha2 = new EnumFile(LanguageAlpha2::class);
        $languageName = new EnumFile(LanguageName::class);
        $languageAlpha3Common = new EnumFile(LanguageAlpha3Common::class);
        $languageAlpha3Bibliographic = new EnumFile(LanguageAlpha3Bibliographic::class);
        $languageAlpha3Terminology = new EnumFile(LanguageAlpha3Terminology::class);
        foreach ($dataSet as $dataRow) {
            $languageAlpha2->addCase(new EnumCase($dataRow->name, $dataRow->alpha2));
            $languageName->addCase(new EnumCase($dataRow->name, $dataRow->name));

            if () {
                // TODO
            }
        }

        return [$languageAlpha2, $languageAlpha3Bibliographic, $languageAlpha3Common, $languageAlpha3Terminology, $languageName];
    }
}

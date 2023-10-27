<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DomElementNotFoundException;
use PrinsFrank\Standards\Scripts\ScriptAlias;
use PrinsFrank\Standards\Scripts\ScriptCode;
use PrinsFrank\Standards\Scripts\ScriptName;
use PrinsFrank\Standards\Scripts\ScriptNumber;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{code: string, number: string, name: string, french_name: string, alias: string, age: string, date: string}
 * @implements Mapping<TDataSet>
 */
class ScriptMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.unicode.org/iso15924/iso15924-codes.html';
    }

    /** @return array<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@class="simple"]/tbody/tr')->getIterator();

        $dataSet = [];
        /** @var RemoteWebElement $item */
        foreach ($items as $i => $item) {
            foreach ($item->findElements(WebDriverBy::xpath('./td')) as $j => $childNode) {
                $dataSet[$i] ?? $dataSet[$i]                                                          = (object) [];
                $dataSet[$i]->{['code', 'number', 'name', 'french_name', 'alias', 'age', 'date'][$j]} = $childNode->getText();
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
        $scriptCode   = new EnumFile(ScriptCode::class);
        $scriptName   = new EnumFile(ScriptName::class);
        $scriptNumber = new EnumFile(ScriptNumber::class);
        $scriptAlias  = new EnumFile(ScriptAlias::class);
        foreach ($dataSet as $dataRow) {
            $name = preg_replace('/_+/', '_', str_replace('+', '_', preg_replace('/\p{No}/u', '', $dataRow->name) ?? '')) ?? '';

            $scriptCode->addCase(new EnumCase($name, $dataRow->number));
            $scriptName->addCase(new EnumCase($name, $dataRow->name));
            $scriptNumber->addCase(new EnumCase($name, $dataRow->code));
            if (trim($dataRow->alias) !== '' && $dataRow->number !== '241') {
                $scriptAlias->addCase(new EnumCase($name, $dataRow->alias));
            }
        }

        return [$scriptAlias, $scriptCode, $scriptName, $scriptNumber];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

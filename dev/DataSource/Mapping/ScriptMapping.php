<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Scripts\Attributes\SupportedByPHPRegex;
use PrinsFrank\Standards\Scripts\ScriptAlias;
use PrinsFrank\Standards\Scripts\ScriptNumber;
use PrinsFrank\Standards\Scripts\ScriptName;
use PrinsFrank\Standards\Scripts\ScriptCode;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;
use TypeError;
use ValueError;

/**
 * @template TDataSet of object{code: string, number: string, name: string, french_name: string, alias: string, age: string, date: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class ScriptMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.unicode.org/iso15924/iso15924-codes.html';
    }

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@class="simple"]/tbody/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (count($columns) !== 7) {
                continue;
            }

            $record = (object) [];
            $record->code = $columns[0]->getText();
            $record->number = $columns[1]->getText();
            $record->name = $columns[2]->getText();
            $record->french_name = $columns[3]->getText();
            $record->alias = $columns[4]->getText();
            $record->age = $columns[5]->getText();
            $record->date = $columns[6]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @throws TypeError
     * @throws ValueError
     * @return array<EnumFile>
     */
    public static function toEnumMapping(array $dataSet): array
    {
        $scriptCode = new EnumFile(ScriptCode::class);
        $scriptName = new EnumFile(ScriptName::class);
        $scriptNumber = new EnumFile(ScriptNumber::class);
        $scriptAlias = new EnumFile(ScriptAlias::class);
        foreach ($dataSet as $dataRow) {
            $name = preg_replace('/_+/', '_', str_replace('+', '_', preg_replace('/\p{No}/u', '', $dataRow->name) ?? '')) ?? '';

            $scriptCode->addCase(new EnumCase($name, $dataRow->code));
            $scriptName->addCase(new EnumCase($name, $dataRow->name));
            $scriptNumber->addCase(new EnumCase($name, $dataRow->number));
            if (trim($dataRow->alias) !== '' && $dataRow->number !== '241') {
                $attributes = [];
                if (ScriptAlias::tryFrom($dataRow->alias) !== null && BackedEnum::hasCaseAttribute(ScriptAlias::from($dataRow->alias), SupportedByPHPRegex::class)) {
                    $attributes[] = new EnumCaseAttribute(SupportedByPHPRegex::class);
                }

                $scriptAlias->addCase(new EnumCase($name, $dataRow->alias, $attributes));
            }
        }

        return [$scriptAlias, $scriptCode, $scriptName, $scriptNumber];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

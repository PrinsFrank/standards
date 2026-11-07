<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use Override;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumMappingMethod;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\SpecialUseTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{tld: string, status: string, type: string, manager: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class TopLevelDomainMapping implements Mapping {
    #[Override]
    public static function url(): string {
        return 'https://www.iana.org/domains/root/db';
    }

    /**
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    #[Override]
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $items = $crawler->filterXPath('//table[@id="ddtable"]/tbody/tr[not(contains(@class, "rzdb-group-header"))]')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (array_key_exists(0, $columns) === false
                || array_key_exists(1, $columns) === false
                || array_key_exists(2, $columns) === false
                || array_key_exists(3, $columns) === false) {
                throw new RuntimeException('Expected exactly 4 columns');
            }

            $record = (object) [];
            $record->tld = $columns[0]->getText();
            $record->status = $columns[1]->getText();
            $record->type = $columns[2]->getText();
            $record->manager = $columns[3]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     *@throws InvalidArgumentException
     * @return array<SpecFile>
     */
    #[Override]
    public static function toEnumMapping(array $dataSet): array {
        $countryCodeTLD = (new SpecFile(CountryCodeTLD::class, KeySorting::class))
            ->addMethod($toCountryAlpha2 = new EnumMappingMethod('getCountryAlpha2', '?CountryAlpha2', 'null'));
        $genericTLD = new SpecFile(GenericTLD::class, KeySorting::class);
        $testTLD = new SpecFile(TestTLD::class, KeySorting::class);
        $specialUseTLD = new SpecFile(SpecialUseTLD::class, KeySorting::class);
        $countryAlpha2Enum = (new SpecFile(CountryAlpha2::class, KeySorting::class))
            ->addMethod($getCountryCodeTLD = new EnumMappingMethod('getCountryCodeTLD', 'CountryCodeTLD', null));
        foreach ($dataSet as $dataRow) {
            $name = trim($dataRow->tld, '.');
            if (($xnPos = strpos($name, 'xn--')) !== false) {
                $name = trim(trim(substr($name, 0, $xnPos)), '.');
            }

            if ($dataRow->type === 'Country Code' && strlen($name) === 2) {
                $countryAlpha2 = CountryAlpha2::tryFrom(strtoupper($name));
                if ($countryAlpha2 !== null) {
                    $toCountryAlpha2->addMapping('self::' . $name, 'CountryAlpha2::' . $countryAlpha2->name);
                    $getCountryCodeTLD->addMapping('self::' . $countryAlpha2->name, 'CountryCodeTLD::' . $name);
                }
            }

            $attributes = $dataRow->status === 'Retired' ? [new EnumCaseAttribute(NotAssigned::class)] : [];
            match ($dataRow->type) {
                'Country Code' => $countryCodeTLD->addCase(new EnumCase($name, $name, $attributes)),
                'Generic' => $genericTLD->addCase(new EnumCase($name, $name, $attributes)),
                'Special Use' => $specialUseTLD->addCase(new EnumCase($name, $name, $attributes)),
                'Test' => $testTLD->addCase(new EnumCase($name, $name, $attributes)),
                default => throw new InvalidArgumentException('Unrecognized TLD type "' . $dataRow->type . '"'),
            };
        }

        return [$countryCodeTLD, $genericTLD, $specialUseTLD, $testTLD, $countryAlpha2Enum];
    }
}

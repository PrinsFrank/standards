<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumMappingMethod;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{tld: string, type: string, manager: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class TopLevelDomainMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/domains/root/db';
    }

    /**
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@id="tld-table"]/tbody/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (array_key_exists(0, $columns) === false
                || array_key_exists(1, $columns) === false
                || array_key_exists(2, $columns) === false) {
                throw new RuntimeException('Expected exactly 3 columns');
            }

            $record = (object) [];
            $record->tld = $columns[0]->getText();
            $record->type = $columns[1]->getText();
            $record->manager = $columns[2]->getText();

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
    public static function toEnumMapping(array $dataSet): array
    {
        $countryCodeTLD = (new SpecFile(CountryCodeTLD::class, KeySorting::class))
            ->addMethod($toCountryAlpha2 = new EnumMappingMethod('getCountryAlpha2', '?CountryAlpha2', 'null'));
        $genericRestrictedTLD = new SpecFile(GenericRestrictedTLD::class, KeySorting::class);
        $genericTLD = new SpecFile(GenericTLD::class, KeySorting::class);
        $infrastructureTLD = new SpecFile(InfrastructureTLD::class, KeySorting::class);
        $sponsoredTLD = new SpecFile(SponsoredTLD::class, KeySorting::class);
        $testTLD = new SpecFile(TestTLD::class, KeySorting::class);
        $countryAlpha2Enum = (new SpecFile(CountryAlpha2::class, KeySorting::class))
            ->addMethod($getCountryCodeTLD = new EnumMappingMethod('getCountryCodeTLD', 'CountryCodeTLD', null));
        foreach ($dataSet as $dataRow) {
            $name = trim($dataRow->tld, '.');
            if ($dataRow->type === 'country-code' && strlen($name) === 2) {
                $countryAlpha2 = CountryAlpha2::tryFrom(strtoupper($name));
                if ($countryAlpha2 !== null) {
                    $toCountryAlpha2->addMapping('self::' . $name, 'CountryAlpha2::' . $countryAlpha2->name);
                    $getCountryCodeTLD->addMapping('self::' . $countryAlpha2->name, 'CountryCodeTLD::' . $name);
                }
            }

            $attributes = $dataRow->manager === 'Not assigned' ? [new EnumCaseAttribute(NotAssigned::class)] : [];
            match ($dataRow->type) {
                'country-code' => $countryCodeTLD->addCase(new EnumCase($name, $name, $attributes)),
                'generic-restricted' => $genericRestrictedTLD->addCase(new EnumCase($name, $name, $attributes)),
                'generic' => $genericTLD->addCase(new EnumCase($name, $name, $attributes)),
                'infrastructure' => $infrastructureTLD->addCase(new EnumCase($name, $name, $attributes)),
                'sponsored' => $sponsoredTLD->addCase(new EnumCase($name, $name, $attributes)),
                'test' => $testTLD->addCase(new EnumCase($name, $name, $attributes)),
                default => throw new InvalidArgumentException('Unrecognized TLD type "' . $dataRow->type . '"'),
            };
        }

        return [$countryCodeTLD, $genericRestrictedTLD, $genericTLD, $infrastructureTLD, $sponsoredTLD, $testTLD, $countryAlpha2Enum];
    }
}

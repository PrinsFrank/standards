<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumMethod;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;
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

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $items = $crawler->filterXPath('//table[@id="tld-table"]/tbody/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (count($columns) !== 3) {
                continue;
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
     * @throws InvalidArgumentException
     * @return array<EnumFile>
     */
    public static function toEnumMapping(array $dataSet): array
    {
        $countryCodeTLD = (new EnumFile(CountryCodeTLD::class))
            ->addMethod($toCountryAlpha2 = new EnumMethod('getCountryAlpha2', '?CountryAlpha2', 'null'));
        $genericRestrictedTLD = new EnumFile(GenericRestrictedTLD::class);
        $genericTLD = new EnumFile(GenericTLD::class);
        $infrastructureTLD = new EnumFile(InfrastructureTLD::class);
        $sponsoredTLD = new EnumFile(SponsoredTLD::class);
        $testTLD = new EnumFile(TestTLD::class);
        $countryAlpha2Enum = (new EnumFile(CountryAlpha2::class))
            ->addMethod($getCountryCodeTLD = new EnumMethod('getCountryCodeTLD', 'CountryCodeTLD', null));
        foreach ($dataSet as $dataRow) {
            $name = trim($dataRow->tld, '.');
            if ($dataRow->type === 'country-code' && strlen($name) === 2) {
                $countryAlpha2 = CountryAlpha2::tryFrom(strtoupper($name));
                if ($countryAlpha2 !== null) {
                    $toCountryAlpha2->addMapping('self::' . $name, 'CountryAlpha2::' . $countryAlpha2->name);
                    $getCountryCodeTLD->addMapping('self::' . $countryAlpha2->name, 'CountryCodeTLD::' . $name);
                }
            }

            $attributes = $dataRow->manager === 'Not assigned' ? [new NotAssigned()] : [];
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

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

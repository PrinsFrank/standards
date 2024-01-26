<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;
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

            $record          = (object) [];
            $record->tld     = $columns[0]->getText();
            $record->type    = $columns[1]->getText();
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
        $countryCodeTLD       = new EnumFile(CountryCodeTLD::class);
        $genericRestrictedTLD = new EnumFile(GenericRestrictedTLD::class);
        $genericTLD           = new EnumFile(GenericTLD::class);
        $sponsoredTLD         = new EnumFile(SponsoredTLD::class);
        $testTLD              = new EnumFile(TestTLD::class);
        foreach ($dataSet as $dataRow) {
            $name = trim($dataRow->tld, '.');

            match ($dataRow->type) {
                'country-code'       => $countryCodeTLD->addCase(new EnumCase($name, $name)),
                'generic-restricted' => $genericRestrictedTLD->addCase(new EnumCase($name, $name)),
                'generic'            => $genericTLD->addCase(new EnumCase($name, $name)),
                'sponsored'          => $sponsoredTLD->addCase(new EnumCase($name, $name)),
                'test'               => $testTLD->addCase(new EnumCase($name, $name)),
                default              => throw new InvalidArgumentException('Unrecognized TLD type "' . $dataRow->type . '"'),
            };
        }

        return [$countryCodeTLD, $genericRestrictedTLD, $genericTLD, $sponsoredTLD, $testTLD];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}

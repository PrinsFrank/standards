<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\Exception\NoSuchElementException;
use Facebook\WebDriver\Exception\TimeoutException;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Enums\Exception\InvalidArgumentException;
use PrinsFrank\Enums\Exception\NameNotFoundException;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Dev\DataTarget\EnumListMethod;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{name: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class EUMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://european-union.europa.eu/principles-countries-history/eu-countries_en';
    }

    /** @throws NoSuchElementException|TimeoutException */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $client->waitFor('//a[contains(@class, "wt-ecl-button")]');
        $crawler->filterXPath('//a[contains(@class, "wt-ecl-button")]')->click();

        $urls = [self::url()];
        foreach ($crawler->filterXPath('//a[contains(@class, "ecl-pagination__link")]')->getIterator() as $paginationLink) {
            if ($paginationLink->isEnabled() && (int) $paginationLink->getText() !== 0) {
                $urls[] = self::url() . $paginationLink->getAttribute('href');
            }
        }

        $dataSet = [];
        foreach ($urls as $url) {
            $client->get($url);
            $crawler = $client->refreshCrawler();

            foreach ($crawler->filterXPath('//div[contains(@class, "ecl-content-item-block__item")]//a')->getIterator() as $item) {
                $record = (object) [];
                $record->name = $item->getText();

                /** @var TDataSet $record */
                $dataSet[] = $record;
            }
        }

        return $dataSet;
    }

    /** @throws NameNotFoundException|InvalidArgumentException */
    public static function toEnumMapping(array $dataSet): array
    {
        $EU = (new SpecFile(EU::class, KeySorting::class))
            ->addMethod($allAlpha2 = new EnumListMethod('allAlpha2', 'array', '/** @return list<CountryAlpha2> */'));

        foreach ($dataSet as $dataRow) {
            $allAlpha2->addItem('CountryAlpha2::' . BackedEnum::fromName(CountryAlpha2::class, $dataRow->name)->name);
        }

        return [$EU];
    }
}

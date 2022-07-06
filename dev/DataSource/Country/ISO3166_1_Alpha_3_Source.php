<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Country;

namespace PrinsFrank\Standards\Dev\DataSource\Country;

use PrinsFrank\Standards\Country\ISO3166_1_Alpha_3;
use PrinsFrank\Standards\Dev\DataSource\DataSource;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class ISO3166_1_Alpha_3_Source implements DataSource
{
    public static function url(): string
    {
        return 'https://www.iso.org/obp/ui/#search/code/';
    }

    public static function xPathIdentifierKey(): string
    {
        return '//tbody[@class="v-grid-body"]/tr/td[4]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//tbody[@class="v-grid-body"]/tr/td/button';
    }

    public static function transformKey(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value): ?string
    {
        return $value;
    }

    public static function getSpecFQN(): string
    {
        return ISO3166_1_Alpha_3::class;
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
        $client->waitFor('.v-select-select');
        $client->waitForInvisibility('.v-loading-indicator');
        $perPageDropdown = $crawler->filterXPath(".//select[@class='v-select-select']//option[last()]");
        $perPageDropdown->click();
    }
}

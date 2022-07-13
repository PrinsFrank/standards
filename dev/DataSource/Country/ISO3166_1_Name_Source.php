<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Country;

namespace PrinsFrank\Standards\Dev\DataSource\Country;

use PrinsFrank\Standards\Country\ISO3166_1_Name;
use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class ISO3166_1_Name_Source implements HtmlDataSource
{
    public static function url(): string
    {
        return 'https://www.iso.org/obp/ui/#search/code/';
    }

    public static function xPathIdentifierName(): string
    {
        return '//tbody[@class="v-grid-body"]/tr/td/button';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//tbody[@class="v-grid-body"]/tr/td/button';
    }

    public static function transformName(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value): string|int|null
    {
        return $value;
    }

    public static function getSpecFQN(): string
    {
        return ISO3166_1_Name::class;
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
        $client->waitFor('.v-select-select');
        $client->waitForInvisibility('.v-loading-indicator');
        $perPageDropdown = $crawler->filterXPath(".//select[@class='v-select-select']//option[last()]");
        $perPageDropdown->click();
        $client->waitForElementToContain('html', 'Zimbabwe');
    }

    public static function sort(): bool
    {
        return true;
    }
}

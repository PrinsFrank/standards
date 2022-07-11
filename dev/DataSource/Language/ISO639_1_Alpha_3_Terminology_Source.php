<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Language;

use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Terminology;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class ISO639_1_Alpha_3_Terminology_Source implements HtmlDataSource
{
    public static function url(): string
    {
        return 'https://www.loc.gov/standards/iso639-2/php/code_list.php';
    }

    public static function xPathIdentifierKey(): string
    {
        return '//table[@width="100%"]/tbody/tr/td[3]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//table[@width="100%"]/tbody/tr/td[1]';
    }

    public static function transformKey(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value): string|int|null
    {
        $terminologyMarkerPos = strpos($value, '(T)');
        if ($terminologyMarkerPos === false) {
            return null;
        }

        $value = substr($value, $terminologyMarkerPos - 4, 3);
        return strtolower(str_replace(' ', '', trim($value)));
    }

    public static function getSpecFQN(): string
    {
        return ISO639_2_Alpha_3_Terminology::class;
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
    }

    public static function sort(): bool
    {
        return true;
    }
}

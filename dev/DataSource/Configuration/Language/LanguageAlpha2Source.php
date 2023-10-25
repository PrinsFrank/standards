<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Configuration\Language;

use PrinsFrank\Standards\Dev\DataSource\Configuration\HtmlDataSource;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class LanguageAlpha2Source implements HtmlDataSource
{
    public static function url(): string
    {
        return 'https://www.loc.gov/standards/iso639-2/php/code_list.php';
    }

    public static function xPathIdentifierKey(): string
    {
        return self::xPathIdentifierName();
    }

    public static function xPathIdentifierName(): string
    {
        return '//table[@width="100%"]/tbody/tr/td[3]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//table[@width="100%"]/tbody/tr/td[2]';
    }

    public static function transformName(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value, ?string $key): string|int|null
    {
        return strtolower(str_replace(' ', '', trim($value)));
    }

    public static function getSpecFQN(): string
    {
        return LanguageAlpha2::class;
    }

    public static function getKeyEnumFQN(): string
    {
        return self::getSpecFQN();
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
    }

    public static function sort(): bool
    {
        return true;
    }
}

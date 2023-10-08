<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Script;

use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Scripts\ScriptName;
use PrinsFrank\Standards\Scripts\ScriptNumber;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class ScriptNumberSource implements HtmlDataSource
{
    public static function url(): string
    {
        return 'https://www.unicode.org/iso15924/iso15924-codes.html';
    }

    public static function xPathIdentifierKey(): string
    {
        return self::xPathIdentifierName();
    }

    public static function xPathIdentifierName(): string
    {
        return '//table[@class="simple"]/tbody/tr/td[3]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//table[@class="simple"]/tbody/tr/td[1]';
    }

    public static function transformName(string $key): ?string
    {
        return preg_replace('/_+/', '_', str_replace('+', '_', preg_replace('/\p{No}/u', '', $key)));
    }

    public static function transformValue(string $value, ?string $key): string|int|null
    {
        return str_replace(' ', '', trim($value));
    }

    public static function getSpecFQN(): string
    {
        return ScriptNumber::class;
    }

    public static function getKeyEnumFQN(): string
    {
        return ScriptName::class;
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
    }

    public static function sort(): bool
    {
        return true;
    }
}

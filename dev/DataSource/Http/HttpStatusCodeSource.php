<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Http;

use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Http\HttpStatusCode;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class HttpStatusCodeSource implements HtmlDataSource
{
    public static function xPathIdentifierKey(): string
    {
        return self::xPathIdentifierName();
    }

    public static function xPathIdentifierName(): string
    {
        return '//table[@id="table-http-status-codes-1"]/tbody/tr/td[2]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//table[@id="table-http-status-codes-1"]/tbody/tr/td[1]';
    }

    public static function transformName(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value, ?string $key): string|int|null
    {
        if (str_contains($value, '-')) {
            return null; // Don't include reserved ranges in spec
        }

        return (int) $value;
    }

    public static function getSpecFQN(): string
    {
        return HttpStatusCode::class;
    }

    public static function getKeyEnumFQN(): string
    {
        return self::getSpecFQN();
    }

    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml';
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
    }

    public static function sort(): bool
    {
        return false;
    }
}

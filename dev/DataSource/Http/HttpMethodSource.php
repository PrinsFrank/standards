<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Http;

use PrinsFrank\Standards\Dev\DataSource\HtmlDataSource;
use PrinsFrank\Standards\Http\HttpMethod;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class HttpMethodSource implements HtmlDataSource
{
    public static function transformName(string $key): ?string
    {
        if ($key === '*' || $key === '') {
            return null; // According to https://www.rfc-editor.org/rfc/rfc9110.html#name-method-registration, section 18.2, this is a reserved method
        }

        return preg_replace_callback(
            '/_([a-z])/',
            static function ($matches) {
                return mb_convert_case($matches[1], MB_CASE_UPPER);
            },
            ucfirst(strtolower($key))
        );
    }

    public static function transformValue(string $value, ?string $key): string|int|null
    {
        return $value;
    }

    public static function getSpecFQN(): string
    {
        return HttpMethod::class;
    }

    public static function sort(): bool
    {
        return true;
    }

    public static function xPathIdentifierKey(): string
    {
        return self::xPathIdentifierName();
    }

    public static function getKeyEnumFQN(): string
    {
        return HttpMethod::class;
    }

    public static function xPathIdentifierName(): string
    {
        return '//table[@id="table-methods"]/tbody/tr/td[1]';
    }

    public static function xPathIdentifierValue(): string
    {
        return self::xPathIdentifierName();
    }

    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-methods/http-methods.xhtml';
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
        $client->waitForElementToContain('//table/thead', 'Method Name');
    }
}

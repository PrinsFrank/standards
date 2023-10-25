<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Configuration\Currency;

use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Dev\DataSource\Configuration\XmlDataSource;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class CurrencyNameSource implements XmlDataSource
{
    public static function url(): string
    {
        return 'https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list-one.xml';
    }

    public static function xPathIdentifierKey(): string
    {
        return '//ISO_4217/CcyTbl/CcyNtry/CcyNm//following-sibling::Ccy';
    }

    public static function xPathIdentifierName(): string
    {
        return '//ISO_4217/CcyTbl/CcyNtry/Ccy//preceding-sibling::CcyNm';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//ISO_4217/CcyTbl/CcyNtry/Ccy//preceding-sibling::CcyNm';
    }

    public static function transformName(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value, ?string $key): string|int|null
    {
        return $value;
    }

    public static function getSpecFQN(): string
    {
        return CurrencyName::class;
    }

    public static function getKeyEnumFQN(): string
    {
        return CurrencyAlpha3::class;
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
    }

    public static function sort(): bool
    {
        return true;
    }
}

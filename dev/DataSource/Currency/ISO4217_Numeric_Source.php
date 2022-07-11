<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Currency;

use PrinsFrank\Standards\Currency\ISO4217_Numeric;
use PrinsFrank\Standards\Dev\DataSource\XmlDataSource;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class ISO4217_Numeric_Source implements XmlDataSource
{
    public static function url(): string
    {
        return 'https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list_one.xml';
    }

    public static function xPathIdentifierKey(): string
    {
        return '//ISO_4217/CcyTbl/CcyNtry/CcyNbr//preceding-sibling::CcyNm';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//ISO_4217/CcyTbl/CcyNtry/CcyNm//following-sibling::CcyNbr';
    }

    public static function transformKey(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value): string|int|null
    {
        return $value;
    }

    public static function getSpecFQN(): string
    {
        return ISO4217_Numeric::class;
    }

    public static function afterPageLoad(Client $client, Crawler $crawler): void
    {
    }

    public static function sort(): bool
    {
        return true;
    }
}

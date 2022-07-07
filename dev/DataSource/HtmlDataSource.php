<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

interface HtmlDataSource extends DataSource
{
    public static function url(): string;

    public static function xPathIdentifierKey(): string;

    public static function xPathIdentifierValue(): string;

    public static function afterPageLoad(Client $client, Crawler $crawler): void;
}

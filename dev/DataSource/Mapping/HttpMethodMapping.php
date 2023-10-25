<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class HttpMethodMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-methods/http-methods.xhtml';
    }

    public static function toDataSet(Client $client, Crawler $crawler): object
    {
        // TODO: Implement toDataSet() method.
    }

    public static function toEnumMapping(object $dataSet): array
    {
        // TODO: Implement toEnumMapping() method.
    }
}

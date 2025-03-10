<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet
 */
interface Mapping {
    public static function url(): string;

    /** @return list<TDataSet> */
    public static function toDataSet(Client $client, Crawler $crawler): array;

    /**
     * @param list<TDataSet> $dataSet
     * @return array<SpecFile>
     */
    public static function toEnumMapping(array $dataSet): array;
}

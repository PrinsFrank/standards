<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Composer\Script\Event;
use PrinsFrank\Standards\Dev\DataSource\DataSourceMappingProvider;
use PrinsFrank\Standards\Dev\DataSource\Mapping\Mapping;
use PrinsFrank\Standards\InvalidArgumentException;
use Symfony\Component\Panther\Client;
use Throwable;

class SpecUpdater
{
    /** @throws Throwable */
    public static function update(Event $event): void
    {
        $dataSourceMappingProvider = new DataSourceMappingProvider();
        $mapping                   = $event->getArguments()[0] ?? throw new InvalidArgumentException('Please specify the mapping with "-- ' . str_replace('\\', '\\\\', implode(',', $dataSourceMappingProvider->provide())) . '"');
        if (is_a($mapping, Mapping::class, true) === false) {
            throw new InvalidArgumentException('source should implement ' . Mapping::class . ', ' . $mapping . ' given');
        }

        /** @var Mapping $mapping */
        $crawler = ($client = Client::createFirefoxClient())->request('GET', $mapping::url());

        foreach ($mapping::toEnumMapping($mapping::toDataSet($client, $crawler)) as $enumFile) {
            $enumFile->writeCases();
        }
    }
}

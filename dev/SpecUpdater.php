<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Composer\Script\Event;
use PrinsFrank\Standards\Dev\DataSource\DataSourceMappingProvider;
use PrinsFrank\Standards\Dev\DataSource\Mapping\Mapping;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\InvalidArgumentException;
use Symfony\Component\Panther\Client;
use Throwable;

class SpecUpdater
{
    /** @throws Throwable */
    public static function update(Event $event): void
    {
        $dataSourceMappingProvider = new DataSourceMappingProvider();
        $requestedMapping          = $event->getArguments()[0] ?? null;
        if ($requestedMapping !== null && is_a($requestedMapping, Mapping::class, true) === false) {
            throw new InvalidArgumentException('source should implement ' . Mapping::class . ', ' . $requestedMapping . ' given');
        }

        /**
         * @var array<class-string<Mapping<object>>> $mappings
         */
        $mappings = $requestedMapping !== null ? [$requestedMapping] : $dataSourceMappingProvider->provide();
        foreach ($mappings as $mapping) {
            $event->getIO()->writeRaw('Updating from mapping "' . $mapping . '"');
            $crawler = ($client = Client::createFirefoxClient())->request('GET', $mapping::url());

            /** @var EnumFile $enumFile */
            foreach ($mapping::toEnumMapping($mapping::toDataSet($client, $crawler)) as $enumFile) {
                $event->getIO()->writeRaw('Updating contents of enum "' . $enumFile->path . '"');
                if ($enumFile->hasCases() === true) {
                    foreach ($enumFile->fqn::cases() as $existingCase) {
                        if ($enumFile->hasCaseWithValue($existingCase->value) === false) {
                            $enumFile->addCase(new EnumCase($existingCase->name, $existingCase->value, true));
                        }
                    }

                    $enumFile->writeCases($mapping::getSorting());
                }

                $enumFile->writeMethods();
            }
        }
    }
}

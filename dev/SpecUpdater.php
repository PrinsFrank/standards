<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use Composer\Script\Event;
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
        $mapping = $event->getArguments()[0] ?? throw new InvalidArgumentException('source should be supplied, none given');
        if (is_a($mapping, Mapping::class, true) === false) {
            throw new InvalidArgumentException('source should implement ' . Mapping::class . ', ' . $mapping . ' given');
        }

        $event->getIO()->writeRaw('Retrieving data from mapping "' . $mapping . '"');
        $crawler = ($client = Client::createFirefoxClient())->request('GET', $mapping::url());

        /** @var EnumFile $enumFile */
        foreach ($mapping::toEnumMapping($mapping::toDataSet($client, $crawler)) as $enumFile) {
            $event->getIO()->writeRaw('Updating contents of enum "' . $enumFile->path . '"');
            if ($enumFile->hasCases() === true) {
                foreach ($enumFile->fqn::cases() as $existingCase) {
                    if ($enumFile->hasCaseWithValue($existingCase->value) === false) {
                        $enumFile->addCase(new EnumCase($existingCase->name, $existingCase->value, [], true));
                    } else {
                        throw new \Exception('We already have ' . $existingCase->name . '=' . $existingCase->value);
                    }
                }

                $enumFile->writeCases($mapping::getSorting());
            }

            $enumFile->writeMethods();
        }
    }
}

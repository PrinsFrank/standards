<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

use PrinsFrank\Standards\Dev\DataSource\Mapping\CurrencyMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\Mapping;

class DataSourceMappingProvider
{
    /** @return array<Mapping> */
    public function provide(): array
    {
        return [
            CurrencyMapping::class,
        ];
    }
}

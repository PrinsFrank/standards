<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

use PrinsFrank\Standards\Dev\DataSource\Mapping\CountryMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\CurrencyMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\LanguageMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\Mapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\ScriptMapping;

/**
 * @template TDataSet of object
 */
class DataSourceMappingProvider
{
    /** @return array<class-string<Mapping<TDataSet>>> */
    public function provide(): array
    {
        return [
            CountryMapping::class,
            CurrencyMapping::class,
            LanguageMapping::class,
            ScriptMapping::class,
        ];
    }
}

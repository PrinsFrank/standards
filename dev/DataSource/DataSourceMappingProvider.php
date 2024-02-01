<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

use PrinsFrank\Standards\Dev\DataSource\Mapping\LanguageExtensiveMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\CountryMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\CurrencyMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\HttpMethodMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\HttpStatusCodeMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\LanguageMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\LanguageSubTagMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\Mapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\PHPRegexSupportedScriptsMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\ScriptMapping;
use PrinsFrank\Standards\Dev\DataSource\Mapping\TopLevelDomainMapping;

/**
 * @template TDataSet of object
 */
class DataSourceMappingProvider
{
    /** @return array<class-string<Mapping<TDataSet>>> */
    public function provide(): array
    {
        return [
            PHPRegexSupportedScriptsMapping::class,
            CountryMapping::class,
            CurrencyMapping::class,
            HttpMethodMapping::class,
            HttpStatusCodeMapping::class,
            LanguageExtensiveMapping::class,
            LanguageMapping::class,
            LanguageSubTagMapping::class,
            ScriptMapping::class,
            TopLevelDomainMapping::class,
        ];
    }
}

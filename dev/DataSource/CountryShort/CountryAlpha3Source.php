<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\CountryShort;

use PrinsFrank\Standards\CountryShort\CountryAlpha3;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_3_Source;

class CountryAlpha3Source extends ISO3166_1_Alpha_3_Source
{
    public static function getSpecFQN(): string
    {
        return CountryAlpha3::class;
    }
}

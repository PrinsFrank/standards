<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\CountryShort;

use PrinsFrank\Standards\CountryShort\CountryAlpha2;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Alpha_2_Source;

class CountryAlpha2Source extends ISO3166_1_Alpha_2_Source
{
    public static function getSpecFQN(): string
    {
        return CountryAlpha2::class;
    }
}

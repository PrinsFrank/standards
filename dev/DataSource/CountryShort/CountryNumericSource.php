<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\CountryShort;

use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Numeric_Source;

class CountryNumericSource extends ISO3166_1_Numeric_Source
{
    public static function getSpecFQN(): string
    {
        return CountryNumeric::class;
    }
}

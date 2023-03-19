<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\CountryShort;

use PrinsFrank\Standards\CountryShort\CountryName;
use PrinsFrank\Standards\Dev\DataSource\Country\ISO3166_1_Name_Source;

class CountryNameSource extends ISO3166_1_Name_Source
{
    public static function getSpecFQN(): string
    {
        return CountryName::class;
    }
}

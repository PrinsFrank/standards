<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\DigitGroupingSystem;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;

enum DigitGroupingSystem
{
    case Thousands;
    case Thousand_Then_Hundreds;

    public static function forCountry(CountryAlpha2|CountryAlpha3|CountryName|CountryNumeric $country): self
    {
        if ($country instanceof CountryAlpha2 === false) {
            $country = $country->toCountryAlpha2();
        }

        /** @var CountryAlpha2 $country */
        return match($country) {
            CountryAlpha2::Bangladesh,
            CountryAlpha2::Bhutan,
            CountryAlpha2::India,
            CountryAlpha2::Maldives,
            CountryAlpha2::Nepal,
            CountryAlpha2::Pakistan,
            CountryAlpha2::Sri_Lanka => self::Thousand_Then_Hundreds,
            default                  => self::Thousands,
        };
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Groups;

use PrinsFrank\Standards\Country\CountryAlpha2;

/**
 * @source https://european-union.europa.eu/institutions-law-budget/euro/countries-using-euro_en
 *
 * @manually-updated
 */
class EuroZone implements GroupInterface {
    public static function allAlpha2(): array {
        return [
            CountryAlpha2::Austria,
            CountryAlpha2::Belgium,
            CountryAlpha2::Croatia,
            CountryAlpha2::Cyprus,
            CountryAlpha2::Estonia,
            CountryAlpha2::Finland,
            CountryAlpha2::France,
            CountryAlpha2::Germany,
            CountryAlpha2::Greece,
            CountryAlpha2::Ireland,
            CountryAlpha2::Italy,
            CountryAlpha2::Latvia,
            CountryAlpha2::Lithuania,
            CountryAlpha2::Luxembourg,
            CountryAlpha2::Malta,
            CountryAlpha2::Netherlands,
            CountryAlpha2::Portugal,
            CountryAlpha2::Slovakia,
            CountryAlpha2::Slovenia,
            CountryAlpha2::Spain,
        ];
    }
}

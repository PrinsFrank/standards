<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Groups;

use PrinsFrank\Standards\Country\CountryAlpha2;

/**
 * @source https://european-union.europa.eu/principles-countries-history/eu-countries_en
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\EUMapping
 */
class EU implements GroupInterface {
    /** @return list<CountryAlpha2> */
    public static function allAlpha2(): array {
        return [
            CountryAlpha2::Austria,
            CountryAlpha2::Belgium,
            CountryAlpha2::Bulgaria,
            CountryAlpha2::Croatia,
            CountryAlpha2::Cyprus,
            CountryAlpha2::Czechia,
            CountryAlpha2::Denmark,
            CountryAlpha2::Estonia,
            CountryAlpha2::Finland,
            CountryAlpha2::France,
            CountryAlpha2::Germany,
            CountryAlpha2::Greece,
            CountryAlpha2::Hungary,
            CountryAlpha2::Ireland,
            CountryAlpha2::Italy,
            CountryAlpha2::Latvia,
            CountryAlpha2::Lithuania,
            CountryAlpha2::Luxembourg,
            CountryAlpha2::Malta,
            CountryAlpha2::Netherlands,
            CountryAlpha2::Poland,
            CountryAlpha2::Portugal,
            CountryAlpha2::Romania,
            CountryAlpha2::Slovakia,
            CountryAlpha2::Slovenia,
            CountryAlpha2::Spain,
            CountryAlpha2::Sweden,
        ];
    }
}

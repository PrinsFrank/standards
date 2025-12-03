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
        ];
    }
}

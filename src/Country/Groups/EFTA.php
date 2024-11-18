<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Groups;

use PrinsFrank\Standards\Country\CountryAlpha2;

/**
 * @source http://www.efta.int/about-efta/european-free-trade-association
 *
 * @manually-updated
 */
class EFTA implements GroupInterface {
    /** @return list<CountryAlpha2> */
    public static function allAlpha2(): array {
        return [
            CountryAlpha2::Iceland,
            CountryAlpha2::Liechtenstein,
            CountryAlpha2::Norway,
            CountryAlpha2::Switzerland,
        ];
    }
}

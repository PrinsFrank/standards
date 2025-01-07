<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Groups;

use PrinsFrank\Standards\Country\CountryAlpha2;

/**
 * @no-official-source
 *
 * @manually-updated
 */
class BRICS implements GroupInterface {
    /** @return list<CountryAlpha2> */
    public static function allAlpha2(): array {
        return [
            CountryAlpha2::Brazil,
            CountryAlpha2::Russian_Federation,
            CountryAlpha2::India,
            CountryAlpha2::China,
            CountryAlpha2::South_Africa,
            CountryAlpha2::Egypt,
            CountryAlpha2::Ethiopia,
            CountryAlpha2::Iran,
            CountryAlpha2::United_Arab_Emirates,
            CountryAlpha2::Indonesia,
        ];
    }
}

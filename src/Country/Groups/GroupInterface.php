<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Groups;

use PrinsFrank\Standards\Country\CountryAlpha2;

interface GroupInterface {
    /** @return list<CountryAlpha2> */
    public static function allAlpha2(): array;
}

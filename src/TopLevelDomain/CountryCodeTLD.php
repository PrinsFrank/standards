<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/** @source https://www.iana.org/domains/root/db */
enum CountryCodeTLD: string implements TLD
{
    case ac = 'ac';

    public function getCountryAlpha3(): ?CountryAlpha3
    {
        return $this->getCountryAlpha2()?->toCountryAlpha3();
    }

    public function getCountryNumeric(): ?CountryNumeric
    {
        return $this->getCountryAlpha2()?->toCountryNumeric();
    }

    public function isAssigned(): bool
    {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

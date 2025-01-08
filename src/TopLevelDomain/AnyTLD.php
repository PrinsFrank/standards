<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;
use ValueError;

class AnyTLD {
    /** @throws ValueError */
    public static function from(string $string): CountryCodeTLD|GenericRestrictedTLD|GenericTLD|InfrastructureTLD|TestTLD {
        return self::tryFrom($string)
            ?? throw new ValueError(sprintf('"%s" is not a valid backing value for any TLD enum', $string));
    }

    public static function tryFrom(string $string): CountryCodeTLD|GenericRestrictedTLD|GenericTLD|InfrastructureTLD|TestTLD|null {
        return CountryCodeTLD::tryFrom($string)
            ?? GenericRestrictedTLD::tryFrom($string)
            ?? GenericTLD::tryFrom($string)
            ?? InfrastructureTLD::tryFrom($string)
            ?? TestTLD::tryFrom($string);
    }
}

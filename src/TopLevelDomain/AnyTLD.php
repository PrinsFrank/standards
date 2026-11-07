<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use ValueError;

/**
 * @source https://github.com/PrinsFrank/standards/tree/main/src/TopLevelDomain
 *
 * @manually-updated
 */
class AnyTLD {
    /** @throws ValueError */
    public static function from(string $string): CountryCodeTLD|GenericTLD|TestTLD|SpecialUseTLD {
        return self::tryFrom($string)
            ?? throw new ValueError(sprintf('"%s" is not a valid backing value for any TLD enum', $string));
    }

    public static function tryFrom(string $string): CountryCodeTLD|GenericTLD|TestTLD|SpecialUseTLD|null {
        return CountryCodeTLD::tryFrom($string)
            ?? GenericTLD::tryFrom($string)
            ?? TestTLD::tryFrom($string)
            ?? SpecialUseTLD::tryFrom($string);
    }
}

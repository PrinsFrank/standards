<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/** @source https://www.iana.org/domains/root/db */
enum SponsoredTLD: string
{
    case aero = 'aero';
    case asia = 'asia';
    case cat = 'cat';
    case coop = 'coop';
    case edu = 'edu';
    case gov = 'gov';
    case int = 'int';
    case jobs = 'jobs';
    case mil = 'mil';
    case museum = 'museum';
    case post = 'post';
    case tel = 'tel';
    case travel = 'travel';
    case xxx = 'xxx';

    public function isNotAssigned(): bool
    {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class);
    }
}

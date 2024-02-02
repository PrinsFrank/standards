<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/** @source https://www.iana.org/domains/root/db */
enum GenericRestrictedTLD: string implements TLD
{
    case biz = 'biz';
    case name = 'name';
    case pro = 'pro';

    public function isAssigned(): bool
    {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

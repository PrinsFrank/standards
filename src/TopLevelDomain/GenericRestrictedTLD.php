<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use Override;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @source https://www.iana.org/domains/root/db
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\TopLevelDomainMapping
 */
enum GenericRestrictedTLD: string implements TLD {
    case biz = 'biz';
    case name = 'name';
    case pro = 'pro';

    #[Override]
    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

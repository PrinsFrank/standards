<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @source https://www.iana.org/domains/root/db
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\TopLevelDomainMapping
 */
enum InfrastructureTLD: string implements TLD {
    case arpa = 'arpa';

    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

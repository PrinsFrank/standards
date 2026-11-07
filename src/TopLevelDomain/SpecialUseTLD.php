<?php declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use Override;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @source https://www.iana.org/domains/root/db
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\TopLevelDomainMapping
 */
enum SpecialUseTLD: string implements TLD {
    case alt = 'alt';
    case arpa = 'arpa';
    case example = 'example';
    case internal = 'internal';
    case invalid = 'invalid';
    case local = 'local';
    case localhost = 'localhost';
    case onion = 'onion';
    case test = 'test';

    #[Override]
    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @source https://www.rfc-editor.org/rfc/rfc2606.html
 *
 * @manually-updated
 */
enum ReservedTLD: string implements TLD {
    #[NotAssigned]
    case test = 'test';

    #[NotAssigned]
    case example = 'example';

    #[NotAssigned]
    case invalid = 'invalid';

    #[NotAssigned]
    case localhost = 'localhost';

    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

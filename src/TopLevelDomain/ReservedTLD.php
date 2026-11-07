<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use Override;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @manually-updated
 *
 * @deprecated replaced by SpecialUse
 *
 * @source https://www.rfc-editor.org/rfc/rfc2606.html
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

    #[Override]
    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/** @source https://www.iana.org/domains/root/db */
enum TestTLD: string
{
    #[NotAssigned]
    case akhtbar = 'إختبار';

    #[NotAssigned]
    case azmayshy = 'آزمایشی';

    #[NotAssigned]
    case ce_shi = '测试';

    #[NotAssigned]
    case dokime = 'δοκιμή';

    #[NotAssigned]
    case ispytanie = 'испытание';

    #[NotAssigned]
    case pariksa = 'परीक्षा';

    #[NotAssigned]
    case paritcai = 'பரிட்சை';

    #[NotAssigned]
    case t_st = 'טעסט';

    #[NotAssigned]
    case teseuteu = '테스트';

    #[NotAssigned]
    case tesuto = 'テスト';

    public function isAssigned(): bool
    {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

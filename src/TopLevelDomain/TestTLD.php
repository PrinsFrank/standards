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
enum TestTLD: string implements TLD {
    #[NotAssigned]
    case akhtbar_arabic = 'إختبار';

    #[NotAssigned]
    case azmayshy_arabic = 'آزمایشی';

    #[NotAssigned]
    case ce_shi_han = '测试';

    #[NotAssigned]
    case ce_shi_han_2 = '測試';

    #[NotAssigned]
    case dokime_greek = 'δοκιμή';

    #[NotAssigned]
    case ispytanie_cyrillic = 'испытание';

    #[NotAssigned]
    case pariksa_Devanagari = 'परीक्षा';

    #[NotAssigned]
    case paritcai_tamil = 'பரிட்சை';

    #[NotAssigned]
    case t_st_hebrew = 'טעסט';

    #[NotAssigned]
    case teseuteu_hangul = '테스트';

    #[NotAssigned]
    case tesuto_katakana = 'テスト';

    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

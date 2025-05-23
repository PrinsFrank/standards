<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptNumber;

#[CoversClass(ScriptNumber::class)]
class ScriptNumberTest extends TestCase {
    public function testToScriptAlias(): void {
        foreach (ScriptNumber::cases() as $scriptNumber) {
            $scriptNumber->toScriptAlias();
        }
    }

    public function testToScriptName(): void {
        foreach (ScriptNumber::cases() as $scriptNumber) {
            $scriptNumber->toScriptName();
        }
    }

    public function testToScriptCode(): void {
        foreach (ScriptNumber::cases() as $scriptNumber) {
            $scriptNumber->toScriptCode();
        }
    }

    public function testForString(): void {
        static::assertSame(
            [],
            ScriptNumber::allForString('')
        );
        static::assertSame(
            [
                ScriptNumber::Latin,
            ],
            ScriptNumber::allForString('eu')
        );
        static::assertSame(
            [
                ScriptNumber::Cyrillic,
                ScriptNumber::Greek,
                ScriptNumber::Latin,
            ],
            ScriptNumber::allForString('euеюευ')
        );
        static::assertSame(
            [
                ScriptNumber::Cyrillic,
                ScriptNumber::Greek,
                ScriptNumber::Latin,
            ],
            ScriptNumber::allForString('еюeuеюευ')
        );
        static::assertSame(
            [
                ScriptNumber::Cyrillic,
                ScriptNumber::Latin,
                ScriptNumber::Greek,
            ],
            ScriptNumber::allForString('еюeuеюευeu')
        );
    }

    public function testHasMultipleForString(): void {
        static::assertFalse(ScriptNumber::hasMultipleForString(''));
        static::assertFalse(ScriptNumber::hasMultipleForString('eu'));
        static::assertTrue(ScriptNumber::hasMultipleForString('euеюευ'));
        static::assertTrue(ScriptNumber::hasMultipleForString('еюeuеюευ'));
        static::assertTrue(ScriptNumber::hasMultipleForString('еюeuеюευeu'));
    }

    public function testMostCommonInString(): void {
        static::assertNull(ScriptNumber::mostCommonInString(''));
        static::assertSame(ScriptNumber::Latin, ScriptNumber::mostCommonInString('eu'));
        static::assertSame(ScriptNumber::Cyrillic, ScriptNumber::mostCommonInString('euеюευ'));
        static::assertSame(ScriptNumber::Cyrillic, ScriptNumber::mostCommonInString('еюeuеюευ'));
        static::assertSame(ScriptNumber::Cyrillic, ScriptNumber::mostCommonInString('еюeuеюευeu'));
    }
}

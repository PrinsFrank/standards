<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptAlias;

#[CoversClass(ScriptAlias::class)]
class ScriptAliasTest extends TestCase {
    public function testToScriptNumber(): void {
        foreach (ScriptAlias::cases() as $scriptAlias) {
            $scriptAlias->toScriptNumber();

            $this->addToAssertionCount(1);
        }
    }

    public function testToScriptName(): void {
        foreach (ScriptAlias::cases() as $scriptAlias) {
            $scriptAlias->toScriptName();

            $this->addToAssertionCount(1);
        }
    }

    public function testToScriptCode(): void {
        foreach (ScriptAlias::cases() as $scriptAlias) {
            $scriptAlias->toScriptCode();

            $this->addToAssertionCount(1);
        }
    }

    public function testIsSupportedByPHPRegex(): void {
        static::assertTrue(ScriptAlias::Arabic->isSupportedByPHPRegex());
        static::assertFalse(ScriptAlias::Adlam->isSupportedByPHPRegex());
    }

    public function testForString(): void {
        static::assertSame(
            [],
            ScriptAlias::allForString('')
        );
        static::assertSame(
            [
                ScriptAlias::Latin,
            ],
            ScriptAlias::allForString('eu')
        );
        static::assertSame(
            [
                ScriptAlias::Cyrillic,
                ScriptAlias::Greek,
                ScriptAlias::Latin,
            ],
            ScriptAlias::allForString('euеюευ')
        );
        static::assertSame(
            [
                ScriptAlias::Cyrillic,
                ScriptAlias::Greek,
                ScriptAlias::Latin,
            ],
            ScriptAlias::allForString('еюeuеюευ')
        );
        static::assertSame(
            [
                ScriptAlias::Cyrillic,
                ScriptAlias::Latin,
                ScriptAlias::Greek,
            ],
            ScriptAlias::allForString('еюeuеюευeu')
        );
    }

    public function testHasMultipleForString(): void {
        static::assertFalse(ScriptAlias::hasMultipleForString(''));
        static::assertFalse(ScriptAlias::hasMultipleForString('eu'));
        static::assertTrue(ScriptAlias::hasMultipleForString('euеюευ'));
        static::assertTrue(ScriptAlias::hasMultipleForString('еюeuеюευ'));
        static::assertTrue(ScriptAlias::hasMultipleForString('еюeuеюευeu'));
    }

    public function testMostCommonInString(): void {
        static::assertNull(ScriptAlias::mostCommonInString(''));
        static::assertSame(ScriptAlias::Latin, ScriptAlias::mostCommonInString('eu'));
        static::assertSame(ScriptAlias::Cyrillic, ScriptAlias::mostCommonInString('euеюευ'));
        static::assertSame(ScriptAlias::Cyrillic, ScriptAlias::mostCommonInString('еюeuеюευ'));
        static::assertSame(ScriptAlias::Cyrillic, ScriptAlias::mostCommonInString('еюeuеюευeu'));
    }
}

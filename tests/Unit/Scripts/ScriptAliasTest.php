<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptAlias;

/** @coversDefaultClass \PrinsFrank\Standards\Scripts\ScriptAlias */
class ScriptAliasTest extends TestCase
{
    /** @covers ::toScriptNumber */
    public function testToScriptNumber(): void
    {
        foreach (ScriptAlias::cases() as $scriptAlias) {
            $scriptAlias->toScriptNumber();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptName */
    public function testToScriptName(): void
    {
        foreach (ScriptAlias::cases() as $scriptAlias) {
            $scriptAlias->toScriptName();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptCode */
    public function testToScriptCode(): void
    {
        foreach (ScriptAlias::cases() as $scriptAlias) {
            $scriptAlias->toScriptCode();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::isSupportedByPHPRegex */
    public function testIsSupportedByPHPRegex(): void
    {
        static::assertTrue(ScriptAlias::Arabic->isSupportedByPHPRegex());
        static::assertFalse(ScriptAlias::Adlam->isSupportedByPHPRegex());
    }

    /** @covers ::allForString */
    public function testForString(): void
    {
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

    /** @covers ::mostCommonInString */
    public function testMostCommonInString(): void
    {
        static::assertNull(ScriptAlias::mostCommonInString(''));
        static::assertSame(ScriptAlias::Latin, ScriptAlias::mostCommonInString('eu'));
        static::assertSame(ScriptAlias::Cyrillic, ScriptAlias::mostCommonInString('euеюευ'));
        static::assertSame(ScriptAlias::Cyrillic, ScriptAlias::mostCommonInString('еюeuеюευ'));
        static::assertSame(ScriptAlias::Cyrillic, ScriptAlias::mostCommonInString('еюeuеюευeu'));
    }
}

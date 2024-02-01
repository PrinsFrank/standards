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

    /** @covers ::forString */
    public function testForString(): void
    {
        static::assertSame(
            [],
            ScriptAlias::forString('')
        );
        static::assertSame(
            [
                ScriptAlias::Latin
            ],
            ScriptAlias::forString('eu')
        );
        static::assertSame(
            [
                ScriptAlias::Cyrillic,
                ScriptAlias::Greek,
                ScriptAlias::Latin,
            ],
            ScriptAlias::forString('euеюευ')
        );
        static::assertSame(
            [
                ScriptAlias::Cyrillic,
                ScriptAlias::Greek,
                ScriptAlias::Latin,
            ],
            ScriptAlias::forString('еюeuеюευ')
        );
        static::assertSame(
            [
                ScriptAlias::Cyrillic,
                ScriptAlias::Latin,
                ScriptAlias::Greek,
            ],
            ScriptAlias::forString('еюeuеюευeu')
        );
    }
}

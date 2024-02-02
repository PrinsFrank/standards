<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptCode;

/** @coversDefaultClass \PrinsFrank\Standards\Scripts\ScriptCode */
class ScriptCodeTest extends TestCase
{
    /** @covers ::toScriptAlias */
    public function testToScriptAlias(): void
    {
        foreach (ScriptCode::cases() as $scriptCode) {
            $scriptCode->toScriptAlias();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptNumber */
    public function testToScriptNumber(): void
    {
        foreach (ScriptCode::cases() as $scriptCode) {
            $scriptCode->toScriptNumber();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptName */
    public function testToScriptName(): void
    {
        foreach (ScriptCode::cases() as $scriptCode) {
            $scriptCode->toScriptName();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::allForString */
    public function testForString(): void
    {
        static::assertSame(
            [],
            ScriptCode::allForString('')
        );
        static::assertSame(
            [
                ScriptCode::Latin,
            ],
            ScriptCode::allForString('eu')
        );
        static::assertSame(
            [
                ScriptCode::Cyrillic,
                ScriptCode::Greek,
                ScriptCode::Latin,
            ],
            ScriptCode::allForString('euеюευ')
        );
        static::assertSame(
            [
                ScriptCode::Cyrillic,
                ScriptCode::Greek,
                ScriptCode::Latin,
            ],
            ScriptCode::allForString('еюeuеюευ')
        );
        static::assertSame(
            [
                ScriptCode::Cyrillic,
                ScriptCode::Latin,
                ScriptCode::Greek,
            ],
            ScriptCode::allForString('еюeuеюευeu')
        );
    }

    /** @covers ::hasMultipleForString */
    public function testHasMultipleForString(): void
    {
        static::assertFalse(ScriptCode::hasMultipleForString(''));
        static::assertFalse(ScriptCode::hasMultipleForString('eu'));
        static::assertTrue(ScriptCode::hasMultipleForString('euеюευ'));
        static::assertTrue(ScriptCode::hasMultipleForString('еюeuеюευ'));
        static::assertTrue(ScriptCode::hasMultipleForString('еюeuеюευeu'));
    }

    /** @covers ::mostCommonInString */
    public function testMostCommonInString(): void
    {
        static::assertNull(ScriptCode::mostCommonInString(''));
        static::assertSame(ScriptCode::Latin, ScriptCode::mostCommonInString('eu'));
        static::assertSame(ScriptCode::Cyrillic, ScriptCode::mostCommonInString('euеюευ'));
        static::assertSame(ScriptCode::Cyrillic, ScriptCode::mostCommonInString('еюeuеюευ'));
        static::assertSame(ScriptCode::Cyrillic, ScriptCode::mostCommonInString('еюeuеюευeu'));
    }
}

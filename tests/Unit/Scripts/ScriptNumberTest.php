<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptNumber;

/** @coversDefaultClass \PrinsFrank\Standards\Scripts\ScriptNumber */
class ScriptNumberTest extends TestCase
{
    /** @covers ::toScriptAlias */
    public function testToScriptAlias(): void
    {
        foreach (ScriptNumber::cases() as $scriptNumber) {
            $scriptNumber->toScriptAlias();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptName */
    public function testToScriptName(): void
    {
        foreach (ScriptNumber::cases() as $scriptNumber) {
            $scriptNumber->toScriptName();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptCode */
    public function testToScriptCode(): void
    {
        foreach (ScriptNumber::cases() as $scriptNumber) {
            $scriptNumber->toScriptCode();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::allForString */
    public function testForString(): void
    {
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

    /** @covers ::hasMultipleForString */
    public function testHasMultipleForString(): void
    {
        static::assertFalse(ScriptNumber::hasMultipleForString(''));
        static::assertFalse(ScriptNumber::hasMultipleForString('eu'));
        static::assertTrue(ScriptNumber::hasMultipleForString('euеюευ'));
        static::assertTrue(ScriptNumber::hasMultipleForString('еюeuеюευ'));
        static::assertTrue(ScriptNumber::hasMultipleForString('еюeuеюευeu'));
    }

    /** @covers ::mostCommonInString */
    public function testMostCommonInString(): void
    {
        static::assertNull(ScriptNumber::mostCommonInString(''));
        static::assertSame(ScriptNumber::Latin, ScriptNumber::mostCommonInString('eu'));
        static::assertSame(ScriptNumber::Cyrillic, ScriptNumber::mostCommonInString('euеюευ'));
        static::assertSame(ScriptNumber::Cyrillic, ScriptNumber::mostCommonInString('еюeuеюευ'));
        static::assertSame(ScriptNumber::Cyrillic, ScriptNumber::mostCommonInString('еюeuеюευeu'));
    }
}

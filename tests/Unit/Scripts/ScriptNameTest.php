<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptName;

#[CoversClass(ScriptName::class)]
class ScriptNameTest extends TestCase
{
    public function testToScriptAlias(): void
    {
        foreach (ScriptName::cases() as $scriptName) {
            $scriptName->toScriptAlias();

            $this->addToAssertionCount(1);
        }
    }

    public function testToScriptNumber(): void
    {
        foreach (ScriptName::cases() as $scriptName) {
            $scriptName->toScriptNumber();

            $this->addToAssertionCount(1);
        }
    }

    public function testToScriptCode(): void
    {
        foreach (ScriptName::cases() as $scriptName) {
            $scriptName->toScriptCode();

            $this->addToAssertionCount(1);
        }
    }

    public function testForString(): void
    {
        static::assertSame(
            [],
            ScriptName::allForString('')
        );
        static::assertSame(
            [
                ScriptName::Latin,
            ],
            ScriptName::allForString('eu')
        );
        static::assertSame(
            [
                ScriptName::Cyrillic,
                ScriptName::Greek,
                ScriptName::Latin,
            ],
            ScriptName::allForString('euеюευ')
        );
        static::assertSame(
            [
                ScriptName::Cyrillic,
                ScriptName::Greek,
                ScriptName::Latin,
            ],
            ScriptName::allForString('еюeuеюευ')
        );
        static::assertSame(
            [
                ScriptName::Cyrillic,
                ScriptName::Latin,
                ScriptName::Greek,
            ],
            ScriptName::allForString('еюeuеюευeu')
        );
    }

    public function testHasMultipleForString(): void
    {
        static::assertFalse(ScriptName::hasMultipleForString(''));
        static::assertFalse(ScriptName::hasMultipleForString('eu'));
        static::assertTrue(ScriptName::hasMultipleForString('euеюευ'));
        static::assertTrue(ScriptName::hasMultipleForString('еюeuеюευ'));
        static::assertTrue(ScriptName::hasMultipleForString('еюeuеюευeu'));
    }

    public function testMostCommonInString(): void
    {
        static::assertNull(ScriptName::mostCommonInString(''));
        static::assertSame(ScriptName::Latin, ScriptName::mostCommonInString('eu'));
        static::assertSame(ScriptName::Cyrillic, ScriptName::mostCommonInString('euеюευ'));
        static::assertSame(ScriptName::Cyrillic, ScriptName::mostCommonInString('еюeuеюευ'));
        static::assertSame(ScriptName::Cyrillic, ScriptName::mostCommonInString('еюeuеюευeu'));
    }
}

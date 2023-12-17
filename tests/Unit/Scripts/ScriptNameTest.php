<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Scripts;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Scripts\ScriptName;

/** @coversDefaultClass \PrinsFrank\Standards\Scripts\ScriptName */
class ScriptNameTest extends TestCase
{
    /** @covers ::toScriptAlias */
    public function testToScriptAlias(): void
    {
        foreach (ScriptName::cases() as $scriptName) {
            $scriptName->toScriptAlias();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptNumber */
    public function testToScriptNumber(): void
    {
        foreach (ScriptName::cases() as $scriptName) {
            $scriptName->toScriptNumber();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toScriptCode */
    public function testToScriptCode(): void
    {
        foreach (ScriptName::cases() as $scriptName) {
            $scriptName->toScriptCode();

            $this->addToAssertionCount(1);
        }
    }
}

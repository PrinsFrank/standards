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
}

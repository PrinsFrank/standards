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
}

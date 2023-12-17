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
}

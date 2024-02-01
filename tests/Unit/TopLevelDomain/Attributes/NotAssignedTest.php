<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain\Attributes;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned */
class NotAssignedTest extends TestCase
{
    /** @covers ::__toString */
    public function testToString(): void
    {
        static::assertSame('#[NotAssigned]', (new NotAssigned())->__toString());
        static::assertSame('#[NotAssigned]', (string) (new NotAssigned()));
    }
}

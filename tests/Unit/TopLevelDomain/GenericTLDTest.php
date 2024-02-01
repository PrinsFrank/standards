<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\GenericTLD */
class GenericTLDTest extends TestCase
{
    /** @covers ::isNotAssigned */
    public function testIsRevoked(): void
    {
        static::assertTrue(GenericTLD::abarth->isNotAssigned());
        static::assertFalse(GenericTLD::aaa->isNotAssigned());
    }
}

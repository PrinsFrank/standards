<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\GenericTLD */
class GenericTLDTest extends TestCase
{
    /** @covers ::isAssigned */
    public function testIsAssigned(): void
    {
        static::assertFalse(GenericTLD::abarth->isAssigned());
        static::assertTrue(GenericTLD::aaa->isAssigned());
    }
}

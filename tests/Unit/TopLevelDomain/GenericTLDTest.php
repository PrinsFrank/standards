<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;

#[CoversClass(GenericTLD::class)]
class GenericTLDTest extends TestCase
{
    public function testIsAssigned(): void
    {
        static::assertFalse(GenericTLD::abarth->isAssigned());
        static::assertTrue(GenericTLD::aaa->isAssigned());
    }
}

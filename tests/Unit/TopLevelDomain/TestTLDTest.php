<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\TestTLD */
class TestTLDTest extends TestCase
{
    /** @covers ::isRevoked */
    public function testIsRevoked(): void
    {
        static::assertTrue(TestTLD::tesuto->isNotAssigned());
    }
}

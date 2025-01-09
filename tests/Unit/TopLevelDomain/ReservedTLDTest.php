<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\ReservedTLD;

#[CoversClass(ReservedTLD::class)]
class ReservedTLDTest extends TestCase {
    public function testIsAssigned(): void {
        static::assertFalse(ReservedTLD::test->isAssigned());
    }
}

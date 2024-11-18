<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;

#[CoversClass(SponsoredTLD::class)]
class SponsoredTLDTest extends TestCase {
    public function testIsAssigned(): void {
        static::assertTrue(SponsoredTLD::aero->isAssigned());
    }
}

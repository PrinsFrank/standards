<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\SponsoredTLD */
class SponsoredTLDTest extends TestCase
{
    /** @covers ::isNotAssigned */
    public function testIsRevoked(): void
    {
        static::assertFalse(SponsoredTLD::aero->isNotAssigned());
    }
}

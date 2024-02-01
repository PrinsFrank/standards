<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD */
class GenericRestrictedTLDTest extends TestCase
{
    /** @covers ::isNotAssigned */
    public function testIsRevoked(): void
    {
        static::assertFalse(GenericRestrictedTLD::name->isNotAssigned());
    }
}

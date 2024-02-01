<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD */
class InfrastructureTLDTest extends TestCase
{
    /** @covers ::isNotAssigned */
    public function testIsRevoked(): void
    {
        static::assertFalse(InfrastructureTLD::arpa->isNotAssigned());
    }
}

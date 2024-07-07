<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;

#[CoversClass(TestTLD::class)]
class TestTLDTest extends TestCase
{

    public function testIsAssigned(): void
    {
        static::assertFalse(TestTLD::tesuto_katakana->isAssigned());
    }
}

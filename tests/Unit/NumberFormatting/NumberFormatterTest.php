<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\NumberFormatting;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\NumberFormatting\NumberFormatter;

/** @coversDefaultClass \PrinsFrank\Standards\NumberFormatting\NumberFormatter */
class NumberFormatterTest extends TestCase
{
    /** @covers ::getNumberOfDecimals */
    public function testGetNumberOfDecimals(): void
    {
        static::assertSame(0, NumberFormatter::getNumberOfDecimals(4));
        static::assertSame(0, NumberFormatter::getNumberOfDecimals(42));
        static::assertSame(0, NumberFormatter::getNumberOfDecimals(42 / 3 * 3));
        static::assertSame(0, NumberFormatter::getNumberOfDecimals(0.000000000000000));
        static::assertSame(1, NumberFormatter::getNumberOfDecimals(4.2));
        static::assertSame(2, NumberFormatter::getNumberOfDecimals(42.42));
        static::assertSame(10, NumberFormatter::getNumberOfDecimals(42.4242424242));
        static::assertSame(14, NumberFormatter::getNumberOfDecimals(0.00000000000012));
        static::assertSame(15, NumberFormatter::getNumberOfDecimals(0.000000000000123));
    }
}

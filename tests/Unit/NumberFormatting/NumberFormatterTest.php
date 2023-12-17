<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\NumberFormatting;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\NumberFormatting\NumberFormatter;

/** @coversDefaultClass \PrinsFrank\Standards\NumberFormatting\NumberFormatter */
class NumberFormatterTest extends TestCase
{
    /** @covers ::getPrecision */
    public function testGetPrecision(): void
    {
        static::assertSame(0, NumberFormatter::getPrecision(4));
        static::assertSame(0, NumberFormatter::getPrecision(42));
        static::assertSame(0, NumberFormatter::getPrecision(42 / 3 * 3));
        static::assertSame(0, NumberFormatter::getPrecision(0.000000000000000));
        static::assertSame(1, NumberFormatter::getPrecision(4.2));
        static::assertSame(2, NumberFormatter::getPrecision(42.42));
        static::assertSame(10, NumberFormatter::getPrecision(42.4242424242));
        static::assertSame(14, NumberFormatter::getPrecision(0.00000000000012));
        static::assertSame(15, NumberFormatter::getPrecision(0.000000000000123));
    }

    /** @covers ::formatNumber */
    public function testFormatNumber(): void
    {
        static::assertSame('0', NumberFormatter::formatNumber(0, CountryAlpha2::Netherlands));
        static::assertSame('0', NumberFormatter::formatNumber(0, CountryAlpha2::United_Kingdom));
        static::assertSame('0', NumberFormatter::formatNumber(0, CountryAlpha2::India));

        static::assertSame('0', NumberFormatter::formatNumber(0.0, CountryAlpha2::Netherlands));
        static::assertSame('0', NumberFormatter::formatNumber(0.0, CountryAlpha2::United_Kingdom));
        static::assertSame('0', NumberFormatter::formatNumber(0.0, CountryAlpha2::India));

        static::assertSame('42', NumberFormatter::formatNumber(42, CountryAlpha2::Netherlands));
        static::assertSame('42', NumberFormatter::formatNumber(42, CountryAlpha2::United_Kingdom));
        static::assertSame('42', NumberFormatter::formatNumber(42, CountryAlpha2::India));

        static::assertSame('42', NumberFormatter::formatNumber(42.0, CountryAlpha2::Netherlands));
        static::assertSame('42', NumberFormatter::formatNumber(42.0, CountryAlpha2::United_Kingdom));
        static::assertSame('42', NumberFormatter::formatNumber(42.0, CountryAlpha2::India));

        static::assertSame('42,42', NumberFormatter::formatNumber(42.42, CountryAlpha2::Netherlands));
        static::assertSame('42.42', NumberFormatter::formatNumber(42.42, CountryAlpha2::United_Kingdom));
        static::assertSame('42.42', NumberFormatter::formatNumber(42.42, CountryAlpha2::India));

        static::assertSame('42,4242', NumberFormatter::formatNumber(42.4242, CountryAlpha2::Netherlands));
        static::assertSame('42.4242', NumberFormatter::formatNumber(42.4242, CountryAlpha2::United_Kingdom));
        static::assertSame('42.4242', NumberFormatter::formatNumber(42.4242, CountryAlpha2::India));

        static::assertSame('4.242', NumberFormatter::formatNumber(4242, CountryAlpha2::Netherlands));
        static::assertSame('4,242', NumberFormatter::formatNumber(4242, CountryAlpha2::United_Kingdom));
        static::assertSame('4,242', NumberFormatter::formatNumber(4242, CountryAlpha2::India));

        static::assertSame('4.242,4242', NumberFormatter::formatNumber(4242.4242, CountryAlpha2::Netherlands));
        static::assertSame('4,242.4242', NumberFormatter::formatNumber(4242.4242, CountryAlpha2::United_Kingdom));
        static::assertSame('4,242.4242', NumberFormatter::formatNumber(4242.4242, CountryAlpha2::India));

        static::assertSame('42.424.242', NumberFormatter::formatNumber(42424242, CountryAlpha2::Netherlands));
        static::assertSame('42,424,242', NumberFormatter::formatNumber(42424242, CountryAlpha2::United_Kingdom));
        static::assertSame('4,24,24,242', NumberFormatter::formatNumber(42424242, CountryAlpha2::India));

        static::assertSame('42.424.242,4242', NumberFormatter::formatNumber(42424242.4242, CountryAlpha2::Netherlands));
        static::assertSame('42,424,242.4242', NumberFormatter::formatNumber(42424242.4242, CountryAlpha2::United_Kingdom));
        static::assertSame('4,24,24,242.4242', NumberFormatter::formatNumber(42424242.4242, CountryAlpha2::India));

        static::assertSame('42ወ424ወ242.4242', NumberFormatter::formatNumber(42424242.4242, CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Geez));
    }
}

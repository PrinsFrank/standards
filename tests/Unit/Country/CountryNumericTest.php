<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryNumeric;
use TypeError;
use ValueError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\CountryNumeric
 */
class CountryNumericTest extends TestCase
{
    /**
     * @covers ::toCountryAlpha2
     */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryAlpha2();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryAlpha2', $case->name));
            }
        }
    }

    /**
     * @covers ::toCountryAlpha3
     */
    public function testAllCasesCanBeConvertedToCountryAlpha3(): void
    {
        $cases = CountryNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryAlpha3();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryAlpha3', $case->name));
            }
        }
    }

    /**
     * @covers ::toCountryName
     */
    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        $cases = CountryNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryName();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryName', $case->name));
            }
        }
    }

    /**
     * @covers ::fromInt
     */
    public function testFromInt(): void
    {
        static::assertEquals(CountryNumeric::Albania, CountryNumeric::fromInt(8));
    }

    /**
     * @covers ::fromInt
     */
    public function testFromIntThrowsExceptionOnNonExistingValue(): void
    {
        $this->expectException(ValueError::class);
        static::assertNull(CountryNumeric::fromInt(1));
    }

    /**
     * @covers ::tryFromInt
     */
    public function testTryFromInt(): void
    {
        static::assertEquals(CountryNumeric::Albania, CountryNumeric::tryFromInt(8));
        static::assertNull(CountryNumeric::tryFromInt(1));
    }

    /**
     * @covers ::valueAsInt
     */
    public function testValueAsInt(): void
    {
        static::assertSame(4, CountryNumeric::Afghanistan->valueAsInt());
    }
}

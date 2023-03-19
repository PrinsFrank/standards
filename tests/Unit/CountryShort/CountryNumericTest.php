<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\CountryShort;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\CountryShort\CountryNumeric;
use TypeError;
use ValueError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\CountryShort\CountryNumeric
 */
class CountryNumericTest extends TestCase
{
    /**
     * @covers ::toISO3166_1_Alpha_2
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha2(): void
    {
        $cases = CountryNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_1_Alpha_2();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Alpha_2', $case->name));
            }
        }
    }

    /**
     * @covers ::toISO3166_1_Alpha_3
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        $cases = CountryNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_1_Alpha_3();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Alpha_3', $case->name));
            }
        }
    }

    /**
     * @covers ::toISO3166_Name
     */
    public function testAllCasesCanBeConvertedToISO3166Name(): void
    {
        $cases = CountryNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_Name();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Name', $case->name));
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

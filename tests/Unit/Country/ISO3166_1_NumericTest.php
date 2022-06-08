<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\ISO3166_1_Numeric;
use ValueError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\ISO3166_1_Numeric
 */
class ISO3166_1_NumericTest extends TestCase
{
    /**
     * @covers ::toISO3166_1_Alpha_2
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        $cases = ISO3166_1_Numeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO3166_1_Alpha_2());
        }
    }

    /**
     * @covers ::toISO3166_1_Alpha_3
     */
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        $cases = ISO3166_1_Numeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO3166_1_Alpha_3());
        }
    }

    /**
     * @covers ::fromInt
     */
    public function testFromInt(): void
    {
        static::assertEquals(ISO3166_1_Numeric::Albania, ISO3166_1_Numeric::fromInt(8));
    }

    /**
     * @covers ::fromInt
     */
    public function testFromIntThrowsExceptionOnNonExistingValue(): void
    {
        $this->expectException(ValueError::class);
        $this->expectExceptionMessage('"001" is not a valid backing value for enum "' . ISO3166_1_Numeric::class . '"');
        static::assertNull(ISO3166_1_Numeric::fromInt(1));
    }

    /**
     * @covers ::tryFromInt
     */
    public function testTryFromInt(): void
    {
        static::assertEquals(ISO3166_1_Numeric::Albania, ISO3166_1_Numeric::tryFromInt(8));
        static::assertNull(ISO3166_1_Numeric::tryFromInt(1));
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\CountryShort;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\CountryShort\CountryAlpha2;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\CountryShort\CountryAlpha2
 */
class CountryAlpha2Test extends TestCase
{
    /**
     * @covers ::toISO3166_1_Alpha_3
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        $cases = CountryAlpha2::cases();
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
     * @covers ::toISO3166_1_Numeric
     */
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        $cases = CountryAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_1_Numeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Numeric', $case->name));
            }
        }
    }

    /**
     * @covers ::toISO3166_Name
     */
    public function testAllCasesCanBeConvertedToISO3166Name(): void
    {
        $cases = CountryAlpha2::cases();
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
     * @covers ::lowerCaseValue
     */
    public function testLowerCaseValue(): void
    {
        static::assertSame('af', CountryAlpha2::Afghanistan->lowerCaseValue());
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\CountryAlpha2
 */
class CountryAlpha2Test extends TestCase
{
    /**
     * @covers ::toCountryAlpha3
     */
    public function testAllCasesCanBeConvertedToCountryAlpha3(): void
    {
        $cases = CountryAlpha2::cases();
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
     * @covers ::toCountryNumeric
     */
    public function testAllCasesCanBeConvertedToCountryNumeric(): void
    {
        $cases = CountryAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryNumeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryNumeric', $case->name));
            }
        }
    }

    /**
     * @covers ::toCountryName
     */
    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        $cases = CountryAlpha2::cases();
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
     * @covers ::lowerCaseValue
     */
    public function testLowerCaseValue(): void
    {
        static::assertSame('af', CountryAlpha2::Afghanistan->lowerCaseValue());
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\CountryShort;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\CountryShort\CountryAlpha3;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\CountryShort\CountryAlpha3
 */
class CountryAlpha3Test extends TestCase
{
    /**
     * @covers ::toCountryAlpha2
     */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryAlpha3::cases();
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
     * @covers ::toCountryNumeric
     */
    public function testAllCasesCanBeConvertedToCountryNumeric(): void
    {
        $cases = CountryAlpha3::cases();
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
        $cases = CountryAlpha3::cases();
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
        static::assertSame('afg', CountryAlpha3::Afghanistan->lowerCaseValue());
    }
}

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
     * @covers ::toISO3166_1_Alpha_2
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha2(): void
    {
        $cases = CountryAlpha3::cases();
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
     * @covers ::toISO3166_1_Numeric
     */
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        $cases = CountryAlpha3::cases();
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
        $cases = CountryAlpha3::cases();
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
        static::assertSame('afg', CountryAlpha3::Afghanistan->lowerCaseValue());
    }
}

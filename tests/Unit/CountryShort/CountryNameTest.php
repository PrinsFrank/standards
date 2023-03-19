<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\CountryShort;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\CountryShort\CountryName;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\CountryShort\CountryName
 */
class CountryNameTest extends TestCase
{
    /**
     * @covers ::toCountryAlpha2
     */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryName::cases();
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
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        $cases = CountryName::cases();
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
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        $cases = CountryName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryNumeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryNumeric', $case->name));
            }
        }
    }
}

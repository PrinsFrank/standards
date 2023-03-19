<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\CountryShort;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\CountryShort\CountryName;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\ISO3166_1_Name
 */
class CountryNameTest extends TestCase
{
    /**
     * @covers ::toISO3166_1_Alpha_2
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha2(): void
    {
        $cases = CountryName::cases();
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
        $cases = CountryName::cases();
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
        $cases = CountryName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_1_Numeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Numeric', $case->name));
            }
        }
    }
}

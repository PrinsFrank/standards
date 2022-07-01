<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\ISO3166_1_Alpha_3;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\ISO4217_Alpha_3
 */
class ISO3166_1_Alpha_3Test extends TestCase
{
    /**
     * @covers ::toISO3166_1_Alpha_2
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        $cases = ISO3166_1_Alpha_3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_1_Alpha_2();
            } catch (\TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Alpha_2', $case->name));
            }
        }
    }

    /**
     * @covers ::toISO3166_1_Numeric
     */
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        $cases = ISO3166_1_Alpha_3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO3166_1_Numeric();
            } catch (\TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO3166_1_Numeric', $case->name));
            }
        }
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\ISO4217_Alpha_3;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\ISO4217_Alpha_3
 */
class ISO4217_Alpha_3Test extends TestCase
{
    /**
     * @covers ::toISO4217_Numeric
     */
    public function testAllCasesCanBeConvertedToISO4217Numeric(): void
    {
        $cases = ISO4217_Alpha_3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO4217_Numeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO4217_Numeric', $case->name));
            }
        }
    }

    /**
     * @covers ::toISO4217_Name
     */
    public function testAllCasesCanBeConvertedToISO4217Name(): void
    {
        $cases = ISO4217_Alpha_3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toISO4217_Name();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO4217_Name', $case->name));
            }
        }
    }

    /**
     * @covers ::lowerCaseValue
     */
    public function testLowerCaseValue(): void
    {
        static::assertSame('xua', ISO4217_Alpha_3::ADB_Unit_of_Account->lowerCaseValue());
    }
}

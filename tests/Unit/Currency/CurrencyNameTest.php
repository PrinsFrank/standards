<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyName;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencyName
 */
class CurrencyNameTest extends TestCase
{
    /**
     * @covers ::toISO4217_Numeric
     */
    public function testAllCasesCanBeConvertedToISO4217Numeric(): void
    {
        $cases = CurrencyName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyNumeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO4217_Numeric', $case->name));
            }
        }
    }

    /**
     * @covers ::toISO4217_Alpha_3
     */
    public function testAllCasesCanBeConvertedToISO4217Alpha3(): void
    {
        $cases = CurrencyName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyAlpha3();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to ISO4217_Alpha3', $case->name));
            }
        }
    }
}

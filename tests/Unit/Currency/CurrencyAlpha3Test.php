<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencyAlpha3
 */
class CurrencyAlpha3Test extends TestCase
{
    /**
     * @covers ::toCurrencyNumeric
     */
    public function testAllCasesCanBeConvertedToCurrencyNumeric(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyNumeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CurrencyNumeric', $case->name));
            }
        }
    }

    /**
     * @covers ::toCurrencyName
     */
    public function testAllCasesCanBeConvertedToCurrencyName(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyName();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CurrencyAlpha3', $case->name));
            }
        }
    }

    /**
     * @covers ::getSymbol
     */
    public function testAllCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->getSymbol();
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }

    /**
     * @covers ::lowerCaseValue
     */
    public function testLowerCaseValue(): void
    {
        static::assertSame('xua', CurrencyAlpha3::ADB_Unit_of_Account->lowerCaseValue());
    }
}

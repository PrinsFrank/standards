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
     * @covers ::toCurrencyNumeric
     */
    public function testAllCasesCanBeConvertedToCurrencyNumeric(): void
    {
        $cases = CurrencyName::cases();
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
     * @covers ::getSymbol
     */
    public function testAllCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyName::cases();
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
     * @covers ::toCurrencyAlpha3
     */
    public function testAllCasesCanBeConvertedToCurrencyAlpha3(): void
    {
        $cases = CurrencyName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCurrencyAlpha3();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CurrencyAlpha3', $case->name));
            }
        }
    }

    /** @covers ::getMinorUnits */
    public function testGetMinorUnits(): void
    {
        foreach (CurrencyName::cases() as $currencyAlpha3) {
            $currencyAlpha3->getMinorUnits();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getCountriesAlpha2 */
    public function testGetCountriesAlpha2(): void
    {
        foreach (CurrencyName::cases() as $currencyAlpha3) {
            $currencyAlpha3->getCountriesAlpha2();

            $this->addToAssertionCount(1);
        }
    }
}

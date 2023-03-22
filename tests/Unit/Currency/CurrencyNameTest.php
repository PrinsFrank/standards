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
}

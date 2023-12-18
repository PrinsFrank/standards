<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Currency\CurrencySymbol;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencySymbol
 */
class CurrencySymbolTest extends TestCase
{
    /** @covers ::forCurrency */
    public function testAllAlpha3CasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                CurrencySymbol::forCurrency($case);
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }

    /** @covers ::forCurrency */
    public function testAllNameCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                CurrencySymbol::forCurrency($case);
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }

    /** @covers ::forCurrency */
    public function testAllNumericCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyNumeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                CurrencySymbol::forCurrency($case);
            } catch (TypeError) {
                $this->fail(sprintf('Unable to retrieve symbol for %s', $case->name));
            }
        }
    }
}

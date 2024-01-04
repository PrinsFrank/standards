<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Currency\CurrencySymbol;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencySymbol
 */
class CurrencySymbolTest extends TestCase
{
    /** @covers ::forCurrency */
    public function testAllAlpha3CasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyAlpha3::cases() as $case) {
            CurrencySymbol::forCurrency($case);
        }
    }

    /** @covers ::forCurrency */
    public function testAllNameCasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyName::cases() as $case) {
            CurrencySymbol::forCurrency($case);
        }
    }

    /** @covers ::forCurrency */
    public function testAllNumericCasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyNumeric::cases() as $case) {
            CurrencySymbol::forCurrency($case);
        }
    }
}

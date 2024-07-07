<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Currency\CurrencySymbol;

#[CoversClass(CurrencySymbol::class)]
class CurrencySymbolTest extends TestCase
{
    public function testAllAlpha3CasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyAlpha3::cases() as $case) {
            CurrencySymbol::forCurrency($case);

            $this->addToAssertionCount(1);
        }
    }

    public function testAllNameCasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyName::cases() as $case) {
            CurrencySymbol::forCurrency($case);

            $this->addToAssertionCount(1);
        }
    }

    public function testAllNumericCasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyNumeric::cases() as $case) {
            CurrencySymbol::forCurrency($case);

            $this->addToAssertionCount(1);
        }
    }
}

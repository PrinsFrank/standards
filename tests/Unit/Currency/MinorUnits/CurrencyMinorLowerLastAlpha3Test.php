<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency\MinorUnits;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\MinorUnits\CurrencyMinorLowerLastAlpha3;

#[CoversClass(CurrencyMinorLowerLastAlpha3::class)]
class CurrencyMinorLowerLastAlpha3Test extends TestCase {
    public function testToCurrencyMinorUpperXAlpha3(): void {
        foreach (CurrencyMinorLowerLastAlpha3::cases() as $currencyMinor) {
            /** @phpstan-ignore method.resultUnused */
            $currencyMinor->toCurrencyMinorUpperXAlpha3();
        }
    }
}

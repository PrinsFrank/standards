<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency\MinorUnits;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\MinorUnits\CurrencyMinorUpperXAlpha3;

#[CoversClass(CurrencyMinorUpperXAlpha3::class)]
class CurrencyMinorUpperXAlpha3Test extends TestCase {
    public function testToCurrencyMinorLowerLastAlpha3(): void {
        foreach (CurrencyMinorUpperXAlpha3::cases() as $currencyMinor) {
            /** @phpstan-ignore method.resultUnused */
            $currencyMinor->toCurrencyMinorLowerLastAlpha3();
        }
    }
}

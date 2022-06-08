<?php
declare(strict_types=1);

namespace Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\ISO4217_Numeric;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\ISO4217_Numeric
 */
class ISO4217_NumericTest extends TestCase
{
    /**
     * @covers ::toISO4217_Alpha3
     */
    public function testAllCasesCanBeConvertedToISO4217Numeric(): void
    {
        $cases = ISO4217_Numeric::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO4217_Alpha3());
        }
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Currency\ISO4217_Alpha_3;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\ISO4217_Alpha_3
 */
class ISO4217_Alpha_3Test extends TestCase
{
    /**
     * @covers ::toISO4217_Numeric
     */
    public function testAllCasesCanBeConvertedToISO4217Numeric(): void
    {
        $cases = ISO4217_Alpha_3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO4217_Numeric());
        }
    }
}

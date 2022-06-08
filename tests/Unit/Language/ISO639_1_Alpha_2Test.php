<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_1_Alpha_2;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_1_Alpha_2
 */
class ISO639_1_Alpha_2Test extends TestCase
{
    /**
     * @covers ::toISO639_2_Bibliographic
     */
    public function testAllCasesCanBeConvertedToToISO392_2Bibliographic(): void
    {
        $cases = ISO639_1_Alpha_2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Bibliographic());
        }
    }

    /**
     * @covers ::toISO639_2_Bibliographic
     */
    public function testAllCasesCanBeConvertedToISO392_2Terminology(): void
    {
        $cases = ISO639_1_Alpha_2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Terminology());
        }
    }
}

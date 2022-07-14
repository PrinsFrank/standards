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
     * @covers ::toISO639_2_Alpha_3_Bibliographic
     */
    public function testAllCasesCanBeConvertedToToISO392_2Bibliographic(): void
    {
        $cases = ISO639_1_Alpha_2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Alpha_3_Bibliographic());
        }
    }

    /**
     * @covers ::toISO639_2_Alpha_3_Terminology
     */
    public function testAllCasesCanBeConvertedToISO392_2Terminology(): void
    {
        $cases = ISO639_1_Alpha_2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Alpha_3_Terminology());
        }
    }

    /**
     * @covers ::toISO639_Name
     */
    public function testAllCasesCanBeConvertedToISO392_Name(): void
    {
        $cases = ISO639_1_Alpha_2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_Name());
        }
    }
}

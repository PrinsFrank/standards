<?php
declare(strict_types=1);

namespace Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_Name;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_Name
 */
class ISO639_NameTest extends TestCase
{
    /**
     * @covers ::toISO639_2_Alpha_3_Bibliographic
     */
    public function testAllCasesCanBeConvertedToToISO392_2Bibliographic(): void
    {
        $cases = ISO639_Name::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Alpha_3_Bibliographic());
        }
    }

    /**
     * @covers ::toISO639_2_Alpha_3_Bibliographic
     */
    public function testAllCasesCanBeConvertedToISO392_2Terminology(): void
    {
        $cases = ISO639_Name::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Alpha_3_Terminology());
        }
    }
}

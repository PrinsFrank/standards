<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Bibliographic;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Bibliographic
 */
class ISO639_2_Alpha_3BibliographicTest extends TestCase
{
    /**
     * @covers ::toISO639_1_Alpha_2
     */
    public function testAllCasesCanBeConvertedToISO639_1(): void
    {
        $cases = ISO639_2_Alpha_3_Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_1_Alpha_2());
        }
    }

    /**
     * @covers ::toISO639_2_Alpha_3_Terminology
     */
    public function testAllCasesCanBeConvertedToISO639_2_Terminology(): void
    {
        $cases = ISO639_2_Alpha_3_Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_2_Alpha_3_Terminology());
        }
    }

    /**
     * @covers ::toISO639_Name
     */
    public function testAllCasesCanBeConvertedToISO639_Name(): void
    {
        $cases = ISO639_2_Alpha_3_Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_Name());
        }
    }

    /**
     * @covers ::upperCaseValue
     */
    public function testUpperCaseValue(): void
    {
        static::assertSame('ALB', ISO639_2_Alpha_3_Bibliographic::Albanian->upperCaseValue());
    }
}

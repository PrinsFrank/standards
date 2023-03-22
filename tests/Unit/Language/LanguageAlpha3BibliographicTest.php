<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic
 */
class LanguageAlpha3BibliographicTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha2
     */
    public function testAllCasesCanBeConvertedToISO639_1(): void
    {
        $cases = LanguageAlpha3Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha2());
        }
    }

    /**
     * @covers ::toLanguageAlpha3Terminology
     */
    public function testAllCasesCanBeConvertedToISO639_2_Terminology(): void
    {
        $cases = LanguageAlpha3Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    /**
     * @covers ::toLanguageName
     */
    public function testAllCasesCanBeConvertedToISO639_Name(): void
    {
        $cases = LanguageAlpha3Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageName());
        }
    }

    /**
     * @covers ::upperCaseValue
     */
    public function testUpperCaseValue(): void
    {
        static::assertSame('ALB', LanguageAlpha3Bibliographic::Albanian->upperCaseValue());
    }
}

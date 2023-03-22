<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha2;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha2
 */
class ISO639_1_Alpha_2Test extends TestCase
{
    /**
     * @covers ::toLanguageAlpha3Bibliographic
     */
    public function testAllCasesCanBeConvertedToToISO392_2Bibliographic(): void
    {
        $cases = LanguageAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Bibliographic());
        }
    }

    /**
     * @covers ::toLanguageAlpha3Terminology
     */
    public function testAllCasesCanBeConvertedToISO392_2Terminology(): void
    {
        $cases = LanguageAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    /**
     * @covers ::toLanguageName
     */
    public function testAllCasesCanBeConvertedToISO392_Name(): void
    {
        $cases = LanguageAlpha2::cases();
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
        static::assertSame('AB', LanguageAlpha2::Abkhazian->upperCaseValue());
    }
}

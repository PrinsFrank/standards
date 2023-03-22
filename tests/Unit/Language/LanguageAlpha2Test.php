<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha2;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha2
 */
class LanguageAlpha2Test extends TestCase
{
    /**
     * @covers ::toLanguageAlpha3Bibliographic
     */
    public function testAllCasesCanBeConvertedToToLanguageAlpha3Bibliographic(): void
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
    public function testAllCasesCanBeConvertedToLanguageAlpha3Terminology(): void
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
    public function testAllCasesCanBeConvertedToLanguageName(): void
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

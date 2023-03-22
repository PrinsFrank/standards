<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Terminology
 */
class LanguageAlpha3TerminologyTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha2
     */
    public function testAllCasesCanBeConvertedToLanguageAlpha2(): void
    {
        $cases = LanguageAlpha3Terminology::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha2());
        }
    }

    /**
     * @covers ::toLanguageAlpha3Bibliographic
     */
    public function testAllCasesCanBeConvertedToLanguageAlpha3Bibliographic(): void
    {
        $cases = LanguageAlpha3Terminology::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Bibliographic());
        }
    }

    /**
     * @covers ::toLanguageName
     */
    public function testAllCasesCanBeConvertedToLanguageName(): void
    {
        $cases = LanguageAlpha3Terminology::cases();
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
        static::assertSame('SQI', LanguageAlpha3Terminology::Albanian->upperCaseValue());
    }
}

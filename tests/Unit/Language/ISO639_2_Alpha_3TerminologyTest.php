<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Terminology
 */
class ISO639_2_Alpha_3TerminologyTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha2
     */
    public function testAllCasesCanBeConvertedToISO639_1(): void
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
    public function testAllCasesCanBeConvertedToBibiliographical(): void
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
    public function testAllCasesCanBeConvertedToISO639_Name(): void
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

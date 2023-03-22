<?php
declare(strict_types=1);

namespace Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageName;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageName
 */
class ISO639_NameTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha3Bibliographic
     */
    public function testAllCasesCanBeConvertedToToISO392_2Bibliographic(): void
    {
        $cases = LanguageName::cases();
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
        $cases = LanguageName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    /**
     * @covers ::toLanguageAlpha2
     */
    public function testSomeCasesCanBeConvertedToISO639_1_Alpha2(): void
    {
        $cases = LanguageName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toLanguageAlpha2();
        }
    }
}

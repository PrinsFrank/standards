<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageName;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageName
 */
class LanguageNameTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha3Bibliographic
     */
    public function testAllCasesCanBeConvertedToLanguageAlpha3Bibliographic(): void
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
    public function testAllCasesCanBeConvertedToLanguageAlpha3Terminology(): void
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
    public function testSomeCasesCanBeConvertedToLanguageAlpha2(): void
    {
        $cases = LanguageName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toLanguageAlpha2();
        }
    }
}

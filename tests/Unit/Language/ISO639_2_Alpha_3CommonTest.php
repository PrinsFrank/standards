<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha3Common;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Common
 */
class ISO639_2_Alpha_3CommonTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha2
     */
    public function testSomeCasesCanBeConvertedToISO639_1_Alpha2(): void
    {
        $cases = LanguageAlpha3Common::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toLanguageAlpha2();
            $this->addToAssertionCount(1);
        }
    }

    /**
     * @covers ::toLanguageName
     */
    public function testAllCasesCanBeConvertedToISO639_Name(): void
    {
        $cases = LanguageAlpha3Common::cases();
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
        static::assertSame('ABK', LanguageAlpha3Common::Abkhazian->upperCaseValue());
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha3Common;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Common
 */
class LanguageAlpha3CommonTest extends TestCase
{
    /**
     * @covers ::toLanguageAlpha2
     */
    public function testSomeCasesCanBeConvertedToLanguageAlpha2(): void
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
    public function testAllCasesCanBeConvertedToLanguageName(): void
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

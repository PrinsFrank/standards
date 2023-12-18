<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\Scripts\ScriptCode;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Terminology
 */
class LanguageAlpha3TerminologyTest extends TestCase
{
    /** @covers ::toLanguageAlpha2 */
    public function testAllCasesCanBeConvertedToLanguageAlpha2(): void
    {
        $cases = LanguageAlpha3Terminology::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toLanguageAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toLanguageAlpha3Bibliographic */
    public function testAllCasesCanBeConvertedToLanguageAlpha3Bibliographic(): void
    {
        $cases = LanguageAlpha3Terminology::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Bibliographic());
        }
    }

    /** @covers ::toLanguageName */
    public function testAllCasesCanBeConvertedToLanguageName(): void
    {
        $cases = LanguageAlpha3Terminology::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageName());
        }
    }

    /** @covers ::upperCaseValue */
    public function testUpperCaseValue(): void
    {
        static::assertSame('SQI', LanguageAlpha3Terminology::Albanian->upperCaseValue());
    }

    /** @covers ::toLanguageTag */
    public function testToLanguageTag(): void
    {
        static::assertEquals(new LanguageTag(LanguageAlpha3Terminology::Dutch_Flemish), LanguageAlpha3Terminology::Dutch_Flemish->toLanguageTag());
        static::assertEquals(
            new LanguageTag(
                LanguageAlpha3Terminology::Dutch_Flemish,
                LanguageAlpha3Extensive::Dutch_Sign_Language,
                ScriptCode::Latin,
                CountryAlpha2::Aruba,
                [LanguageTagVariant::Nadiza_dialect],
                ['foo', 'bar'],
                'boop'
            ),
            LanguageAlpha3Terminology::Dutch_Flemish->toLanguageTag(
                LanguageAlpha3Extensive::Dutch_Sign_Language,
                ScriptCode::Latin,
                CountryAlpha2::Aruba,
                [LanguageTagVariant::Nadiza_dialect],
                ['foo', 'bar'],
                'boop'
            )
        );
    }
}

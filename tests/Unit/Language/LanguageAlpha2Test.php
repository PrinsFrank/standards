<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\Scripts\ScriptCode;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha2
 */
class LanguageAlpha2Test extends TestCase
{
    /** @covers ::toLanguageAlpha3Bibliographic */
    public function testAllCasesCanBeConvertedToToLanguageAlpha3Bibliographic(): void
    {
        $cases = LanguageAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Bibliographic());
        }
    }

    /** @covers ::toLanguageAlpha3Terminology */
    public function testAllCasesCanBeConvertedToLanguageAlpha3Terminology(): void
    {
        $cases = LanguageAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    /** @covers ::toLanguageName */
    public function testAllCasesCanBeConvertedToLanguageName(): void
    {
        $cases = LanguageAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageName());
        }
    }

    /** @covers ::upperCaseValue */
    public function testUpperCaseValue(): void
    {
        static::assertSame('AB', LanguageAlpha2::Abkhazian->upperCaseValue());
    }

    /** @covers ::getNameInLanguage */
    public function testGetNameInLanguage(): void
    {
        static::assertSame('Dutch', LanguageAlpha2::Dutch_Flemish->getNameInLanguage(LanguageAlpha2::English));
        static::assertSame('Nederlands', LanguageAlpha2::Dutch_Flemish->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
    }

    /** @covers ::getNameForCountry */
    public function testGetNameForCountry(): void
    {
        static::assertSame('Nederland', LanguageAlpha2::Dutch_Flemish->getNameForCountry(CountryAlpha2::Netherlands));
    }

    /** @covers ::toLanguageTag */
    public function testToLanguageTag(): void
    {
        static::assertEquals(new LanguageTag(LanguageAlpha2::Dutch_Flemish), LanguageAlpha2::Dutch_Flemish->toLanguageTag());
        static::assertEquals(
            new LanguageTag(
                LanguageAlpha2::Dutch_Flemish,
                LanguageAlpha3Extensive::Dutch_Sign_Language,
                ScriptCode::Latin,
                CountryAlpha2::Aruba,
                [LanguageTagVariant::Nadiza_dialect],
                ['foo', 'bar'],
                'boop'
            ),
            LanguageAlpha2::Dutch_Flemish->toLanguageTag(
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

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\Scripts\ScriptCode;

#[CoversClass(LanguageAlpha2::class)]
class LanguageAlpha2Test extends TestCase {
    public function testAllCasesCanBeConvertedToToLanguageAlpha3Bibliographic(): void {
        foreach (LanguageAlpha2::cases() as $case) {
            static::assertNotNull($case->toLanguageAlpha3Bibliographic());
        }
    }

    public function testAllCasesCanBeConvertedToLanguageAlpha3Terminology(): void {
        foreach (LanguageAlpha2::cases() as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    public function testAllCasesCanBeConvertedToLanguageName(): void {
        foreach (LanguageAlpha2::cases() as $case) {
            $case->toLanguageName();

            $this->addToAssertionCount(1);
        }
    }

    public function testUpperCaseValue(): void {
        static::assertSame('AB', LanguageAlpha2::Abkhazian->upperCaseValue());
    }

    public function testGetNameInLanguage(): void {
        static::assertSame('Dutch', LanguageAlpha2::Dutch_Flemish->getNameInLanguage(LanguageAlpha2::English));
        static::assertSame('Nederlands', LanguageAlpha2::Dutch_Flemish->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederlands', LanguageAlpha2::Dutch_Flemish->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
    }

    public function testGetNameForCountry(): void {
        static::assertSame('Nederland', LanguageAlpha2::Dutch_Flemish->getNameForCountry(CountryAlpha2::Netherlands));
    }

    /** @throws InvalidArgumentException */
    public function testToLanguageTag(): void {
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

    public function testFormatNumber(): void {
        static::assertSame('42,42', LanguageAlpha2::Dutch_Flemish->formatNumber(42.42));
        static::assertSame('42,42', LanguageAlpha2::Dutch_Flemish->formatNumber(42.42, CountryAlpha2::Netherlands));
        static::assertSame('42,42', LanguageAlpha2::Dutch_Flemish->formatNumber(42.42, CountryAlpha3::Netherlands));
        static::assertSame('42,42', LanguageAlpha2::Dutch_Flemish->formatNumber(42.42, CountryNumeric::Netherlands));
    }
}

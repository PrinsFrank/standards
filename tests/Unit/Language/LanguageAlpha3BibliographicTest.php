<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\Scripts\ScriptCode;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic
 */
class LanguageAlpha3BibliographicTest extends TestCase
{
    /** @covers ::toLanguageAlpha2 */
    public function testAllCasesCanBeConvertedToLanguageAlpha2(): void
    {
        $cases = LanguageAlpha3Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toLanguageAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toLanguageAlpha3Terminology */
    public function testAllCasesCanBeConvertedToLanguageAlpha3Terminology(): void
    {
        $cases = LanguageAlpha3Bibliographic::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    /** @covers ::upperCaseValue */
    public function testUpperCaseValue(): void
    {
        static::assertSame('ALB', LanguageAlpha3Bibliographic::Albanian->upperCaseValue());
    }

    /** @covers ::getNameInLanguage */
    public function testGetNameInLanguage(): void
    {
        static::assertSame('Dutch', LanguageAlpha3Bibliographic::Dutch_Flemish->getNameInLanguage(LanguageAlpha3Bibliographic::English));
        static::assertSame('Nederlands', LanguageAlpha3Bibliographic::Dutch_Flemish->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederlands', LanguageAlpha3Bibliographic::Dutch_Flemish->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
    }

    /** @covers ::getNameForCountry */
    public function testGetNameForCountry(): void
    {
        static::assertSame('Nederland', LanguageAlpha3Bibliographic::Dutch_Flemish->getNameForCountry(CountryAlpha2::Netherlands));
    }

    /** @covers ::toLanguageTag */
    public function testToLanguageTag(): void
    {
        static::assertEquals(new LanguageTag(LanguageAlpha3Terminology::Dutch_Flemish), LanguageAlpha3Bibliographic::Dutch_Flemish->toLanguageTag());
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
            LanguageAlpha3Bibliographic::Dutch_Flemish->toLanguageTag(
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

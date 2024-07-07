<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\Scripts\ScriptCode;

#[CoversClass(LanguageAlpha3Extensive::class)]
class LanguageAlpha3ExtensiveTest extends TestCase
{
    public function testGetNameForCountry(): void
    {
        static::assertSame('Nederland', LanguageAlpha3Extensive::Dutch->getNameForCountry(CountryAlpha2::Netherlands));
    }

    /** @throws InvalidArgumentException */
    public function testToLanguageTag(): void
    {
        static::assertEquals(new LanguageTag(LanguageAlpha3Extensive::Dutch), LanguageAlpha3Extensive::Dutch->toLanguageTag());
        static::assertEquals(
            new LanguageTag(
                LanguageAlpha3Extensive::Dutch,
                LanguageAlpha3Extensive::Dutch_Sign_Language,
                ScriptCode::Latin,
                CountryAlpha2::Aruba,
                [LanguageTagVariant::Nadiza_dialect],
                ['foo', 'bar'],
                'boop'
            ),
            LanguageAlpha3Extensive::Dutch->toLanguageTag(
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

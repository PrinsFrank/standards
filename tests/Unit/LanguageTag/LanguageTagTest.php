<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\LanguageTag;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\LanguageTag\PrivateUsePrimarySubtag;
use PrinsFrank\Standards\LanguageTag\SingleCharacterSubtag;
use PrinsFrank\Standards\Region\GeographicRegion;
use PrinsFrank\Standards\Scripts\ScriptCode;

/** @coversDefaultClass \PrinsFrank\Standards\LanguageTag\LanguageTag */
class LanguageTagTest extends TestCase
{
    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringSimpleLanguageTag(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German),
            LanguageTag::fromString('de'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::French),
            LanguageTag::fromString('fr'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Japanese),
            LanguageTag::fromString('ja'),
        );
        static::assertEquals(
            new LanguageTag(SingleCharacterSubtag::GRANDFATHERED, privateUseSubtag: 'enochian'),
            LanguageTag::fromString('i-enochian'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringLanguageSubtagPlusScriptSubtag(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, null, ScriptCode::Han_Traditional_variant),
            LanguageTag::fromString('zh-Hant'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, null, ScriptCode::Han_Simplified_variant),
            LanguageTag::fromString('zh-Hans'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Cyrillic),
            LanguageTag::fromString('sr-Cyrl'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Latin),
            LanguageTag::fromString('sr-Latn'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringExtendedLanguageSubtagsAndTheirPrimaryLanguageSubtagCounterparts(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Mandarin_Chinese, ScriptCode::Han_Simplified_variant, CountryAlpha2::China),
            LanguageTag::fromString('zh-cmn-Hans-CN'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha3Extensive::Mandarin_Chinese, scriptSubtag: ScriptCode::Han_Simplified_variant, regionSubtag: CountryAlpha2::China),
            LanguageTag::fromString('cmn-Hans-CN'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Yue_Chinese, regionSubtag: CountryAlpha2::Hong_Kong),
            LanguageTag::fromString('zh-yue-HK'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha3Extensive::Yue_Chinese, regionSubtag: CountryAlpha2::Hong_Kong),
            LanguageTag::fromString('yue-HK'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringLanguageScriptRegion(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, scriptSubtag: ScriptCode::Han_Simplified_variant, regionSubtag: CountryAlpha2::China),
            LanguageTag::fromString('zh-Hans-CN'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Latin, regionSubtag: CountryAlpha2::Serbia),
            LanguageTag::fromString('sr-Latn-RS'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringLanguageVariant(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, variantSubtag: LanguageTagVariant::Rezijan),
            LanguageTag::fromString('sl-rozaj'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, variantSubtag: LanguageTagVariant::Rezijan),
            LanguageTag::fromString('sl-rozaj-biske'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, variantSubtag: LanguageTagVariant::Nadiza_dialect),
            LanguageTag::fromString('sl-nedis'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringLanguageRegionVariant(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, regionSubtag: CountryAlpha2::Switzerland, variantSubtag: LanguageTagVariant::Traditional_German_orthography),
            LanguageTag::fromString('de-CH-1901'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, regionSubtag: CountryAlpha2::Italy, variantSubtag: LanguageTagVariant::Nadiza_dialect),
            LanguageTag::fromString('sl-IT-nedis'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringLanguageScriptRegionVariant(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Armenian, scriptSubtag: ScriptCode::Latin, regionSubtag: CountryAlpha2::Italy, variantSubtag: LanguageTagVariant::Eastern_Armenian),
            LanguageTag::fromString('hy-Latn-IT-arevela'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringLanguageRegion(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, regionSubtag: CountryAlpha2::Germany),
            LanguageTag::fromString('de-DE'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::English, regionSubtag: CountryAlpha2::United_States_of_America),
            LanguageTag::fromString('en-US'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Spanish_Castilian, regionSubtag: GeographicRegion::Latin_America_And_The_Caribbean),
            LanguageTag::fromString('es-419'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringPrivateUseSubTags(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, regionSubtag: CountryAlpha2::Switzerland, privateUseSubtag: 'phonebk'),
            LanguageTag::fromString('de-CH-x-phonebk'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Azerbaijani, scriptSubtag: ScriptCode::Arabic, privateUseSubtag: 'AZE-derbend'),
            LanguageTag::fromString('az-Arab-x-AZE-derbend'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromStringPrivateUseRegistryValues(): void
    {
        static::assertEquals(
            new LanguageTag(SingleCharacterSubtag::PRIVATE_USE, privateUseSubtag: 'whatever'),
            LanguageTag::fromString('x-whatever'),
        );
        static::assertEquals(
            new LanguageTag(PrivateUsePrimarySubtag::tryFrom('qaa'), scriptSubtag: ScriptCode::Reserved_for_private_use_start, privateUseSubtag: 'southern'),
            LanguageTag::fromString('qaa-Qaaa-QM-x-southern'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, scriptSubtag: ScriptCode::Reserved_for_private_use_start),
            LanguageTag::fromString('de-Qaaa'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Latin),
            LanguageTag::fromString('sr-Latn-QM'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Reserved_for_private_use_start, regionSubtag: CountryAlpha2::Serbia),
            LanguageTag::fromString('sr-Qaaa-RS'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#section-2.2.2
     *
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromString(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese),
            LanguageTag::fromString('zh')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Gan_Chinese),
            LanguageTag::fromString('zh-gan')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha3Extensive::Gan_Chinese),
            LanguageTag::fromString('gan')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Yue_Chinese),
            LanguageTag::fromString('zh-yue')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha3Extensive::Yue_Chinese),
            LanguageTag::fromString('yue')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Mandarin_Chinese),
            LanguageTag::fromString('zh-cmn')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha3Extensive::Mandarin_Chinese),
            LanguageTag::fromString('cmn')
        );
    }
}

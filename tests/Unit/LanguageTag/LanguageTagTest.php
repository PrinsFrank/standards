<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\LanguageTag;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\LanguageTag\PrivateUsePrimarySubtag;
use PrinsFrank\Standards\LanguageTag\PrivateUseRegionSubtag;
use PrinsFrank\Standards\LanguageTag\SingleCharacterSubtag;
use PrinsFrank\Standards\Region\GeographicRegion;
use PrinsFrank\Standards\Scripts\ScriptCode;

/** @coversDefaultClass \PrinsFrank\Standards\LanguageTag\LanguageTag */
class LanguageTagTest extends TestCase
{
    /**
     * @covers ::fromString
     * @covers ::__construct
     */
    public function testThrowsExceptionIfVariantSubTagIsOfInvalidType(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Param $variantSubtag should be an array of "' . LanguageTagVariant::class . '"');
        /** @phpstan-ignore argument.type */
        new LanguageTag(LanguageAlpha2::Dutch_Flemish, variantSubtag: ['foo']);
    }

    /**
     * @covers ::fromString
     * @covers ::__construct
     */
    public function testThrowsExceptionIfExtensionSubtagIsOfInvalidType(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Param $variantSubtag should be an array of strings');
        /** @phpstan-ignore argument.type */
        new LanguageTag(LanguageAlpha2::Dutch_Flemish, extensionSubtag: [42]);
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringLanguageVariant(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, variantSubtag: [LanguageTagVariant::Rezijan]),
            LanguageTag::fromString('sl-rozaj'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, variantSubtag: [LanguageTagVariant::Rezijan, LanguageTagVariant::The_Bila_dialect_of_Resian]),
            LanguageTag::fromString('sl-rozaj-biske'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, variantSubtag: [LanguageTagVariant::Nadiza_dialect]),
            LanguageTag::fromString('sl-nedis'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringLanguageRegionVariant(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, regionSubtag: CountryAlpha2::Switzerland, variantSubtag: [LanguageTagVariant::Traditional_German_orthography]),
            LanguageTag::fromString('de-CH-1901'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Slovenian, regionSubtag: CountryAlpha2::Italy, variantSubtag: [LanguageTagVariant::Nadiza_dialect]),
            LanguageTag::fromString('sl-IT-nedis'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringLanguageScriptRegionVariant(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Armenian, scriptSubtag: ScriptCode::Latin, regionSubtag: CountryAlpha2::Italy, variantSubtag: [LanguageTagVariant::Eastern_Armenian]),
            LanguageTag::fromString('hy-Latn-IT-arevela'),
        );
    }

    /**
     * @example https://datatracker.ietf.org/doc/html/rfc5646#appendix-A
     *
     * @covers ::fromString
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringPrivateUseRegistryValues(): void
    {
        static::assertEquals(
            new LanguageTag(SingleCharacterSubtag::PRIVATE_USE, privateUseSubtag: 'whatever'),
            LanguageTag::fromString('x-whatever'),
        );
        static::assertEquals(
            new LanguageTag(new PrivateUsePrimarySubtag('qaa'), scriptSubtag: ScriptCode::Reserved_for_private_use_start, regionSubtag: PrivateUseRegionSubtag::QM, privateUseSubtag: 'southern'),
            LanguageTag::fromString('qaa-Qaaa-QM-x-southern'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, scriptSubtag: ScriptCode::Reserved_for_private_use_start),
            LanguageTag::fromString('de-Qaaa'),
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Latin, regionSubtag: PrivateUseRegionSubtag::QM),
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
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringWithLanguageExtensions(): void
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

    /**
     * @covers ::fromString
     * @covers ::__construct
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringWithExtensions(): void
    {
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::German, extensionSubtag: ['a', 'value']),
            LanguageTag::fromString('de-a-value')
        );
        static::assertEquals(
            new LanguageTag(LanguageAlpha2::French, extensionSubtag: ['a', 'Latn']),
            LanguageTag::fromString('fr-a-Latn')
        );
    }

    /**
     * @covers ::fromString
     *
     * @throws InvalidArgumentException
     */
    public function testFromStringWithInvalidFormat(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Subtag "nl" is not a valid subtag with context {"primarySubTag":"nl"}');
        LanguageTag::fromString('nl-nl');
    }

    /** @covers ::tryFromString */
    public function testTryFromString(): void
    {
        static::assertNull(LanguageTag::tryFromString('nl-nl'));
        static::assertEquals(new LanguageTag(LanguageAlpha2::Dutch_Flemish), LanguageTag::tryFromString('nl'));
    }

    /**
     * @covers ::toString
     * @covers ::__toString
     *
     * @throws InvalidArgumentException
     */
    public function testToString(): void
    {
        static::assertSame('de', (LanguageTag::fromString('de'))->__toString());
        static::assertSame('fr', (LanguageTag::fromString('fr'))->__toString());
        static::assertSame('ja', (LanguageTag::fromString('ja'))->__toString());
        static::assertSame('i-enochian', (LanguageTag::fromString('i-enochian'))->__toString());
        static::assertSame('zh-Hant', (LanguageTag::fromString('zh-Hant'))->__toString());
        static::assertSame('zh-Hans', (LanguageTag::fromString('zh-Hans'))->__toString());
        static::assertSame('sr-Cyrl', (LanguageTag::fromString('sr-Cyrl'))->__toString());
        static::assertSame('sr-Latn', (LanguageTag::fromString('sr-Latn'))->__toString());
        static::assertSame('zh-cmn-Hans-CN', (LanguageTag::fromString('zh-cmn-Hans-CN'))->__toString());
        static::assertSame('cmn-Hans-CN', (LanguageTag::fromString('cmn-Hans-CN'))->__toString());
        static::assertSame('zh-yue-HK', (LanguageTag::fromString('zh-yue-HK'))->__toString());
        static::assertSame('yue-HK', (LanguageTag::fromString('yue-HK'))->__toString());
        static::assertSame('zh-Hans-CN', (LanguageTag::fromString('zh-Hans-CN'))->__toString());
        static::assertSame('sr-Latn-RS', (LanguageTag::fromString('sr-Latn-RS'))->__toString());
        static::assertSame('sl-rozaj', (LanguageTag::fromString('sl-rozaj'))->__toString());
        static::assertSame('sl-rozaj-biske', (LanguageTag::fromString('sl-rozaj-biske'))->__toString());
        static::assertSame('sl-nedis', (LanguageTag::fromString('sl-nedis'))->__toString());
        static::assertSame('de-CH-1901', (LanguageTag::fromString('de-CH-1901'))->__toString());
        static::assertSame('sl-IT-nedis', (LanguageTag::fromString('sl-IT-nedis'))->__toString());
        static::assertSame('hy-Latn-IT-arevela', (LanguageTag::fromString('hy-Latn-IT-arevela'))->__toString());
        static::assertSame('de-DE', (LanguageTag::fromString('de-DE'))->__toString());
        static::assertSame('en-US', (LanguageTag::fromString('en-US'))->__toString());
        static::assertSame('es-419', (LanguageTag::fromString('es-419'))->__toString());
        static::assertSame('de-CH-x-phonebk', (LanguageTag::fromString('de-CH-x-phonebk'))->__toString());
        static::assertSame('az-Arab-x-AZE-derbend', (LanguageTag::fromString('az-Arab-x-AZE-derbend'))->__toString());
        static::assertSame('x-whatever', (LanguageTag::fromString('x-whatever'))->__toString());
        static::assertSame('qaa-Qaaa-QM-x-southern', (LanguageTag::fromString('qaa-Qaaa-QM-x-southern'))->__toString());
        static::assertSame('de-Qaaa', (LanguageTag::fromString('de-Qaaa'))->__toString());
        static::assertSame('sr-Latn-QM', (LanguageTag::fromString('sr-Latn-QM'))->__toString());
        static::assertSame('sr-Qaaa-RS', (LanguageTag::fromString('sr-Qaaa-RS'))->__toString());
        static::assertSame('zh', (LanguageTag::fromString('zh'))->__toString());
        static::assertSame('zh-gan', (LanguageTag::fromString('zh-gan'))->__toString());
        static::assertSame('gan', (LanguageTag::fromString('gan'))->__toString());
        static::assertSame('zh-yue', (LanguageTag::fromString('zh-yue'))->__toString());
        static::assertSame('yue', (LanguageTag::fromString('yue'))->__toString());
        static::assertSame('zh-cmn', (LanguageTag::fromString('zh-cmn'))->__toString());
        static::assertSame('cmn', (LanguageTag::fromString('cmn'))->__toString());
        static::assertSame('de-a-value', (LanguageTag::fromString('de-a-value'))->__toString());
        static::assertSame('fr-a-Latn', (LanguageTag::fromString('fr-a-Latn'))->__toString());
    }
}

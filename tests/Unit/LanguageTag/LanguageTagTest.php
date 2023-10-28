<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\LanguageTag;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
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
            LanguageTag::createNormal(LanguageAlpha2::German),
            LanguageTag::fromString('de'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::French),
            LanguageTag::fromString('fr'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Japanese),
            LanguageTag::fromString('ja'),
        );
        static::assertEquals(
            LanguageTag::createGrandFathered('enochian'),
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
            LanguageTag::createNormal(LanguageAlpha2::Chinese, null, ScriptCode::Han_Traditional_variant),
            LanguageTag::fromString('zh-Hant'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Chinese, null, ScriptCode::Han_Simplified_variant),
            LanguageTag::fromString('zh-Hans'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Cyrillic),
            LanguageTag::fromString('Sr-Cyrl'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Serbian, scriptSubtag: ScriptCode::Latin),
            LanguageTag::fromString('Sr-Latn'),
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
            LanguageTag::createNormal(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Mandarin_Chinese, ScriptCode::Han_Simplified_variant, CountryAlpha2::Hong_Kong),
            LanguageTag::fromString('zh-cmn-Hans-CN'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha3Extensive::Mandarin_Chinese, scriptSubtag: ScriptCode::Han_Simplified_variant, regionSubtag: CountryAlpha2::Hong_Kong),
            LanguageTag::fromString('cmn-Hans-CN'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Yue_Chinese, regionSubtag: CountryAlpha2::Hong_Kong),
            LanguageTag::fromString('zh-yue-HK'),
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha3Extensive::Yue_Chinese, regionSubtag: CountryAlpha2::Hong_Kong),
            LanguageTag::fromString('yue-HK'),
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
            LanguageTag::createNormal(LanguageAlpha2::Chinese),
            LanguageTag::fromString('zh')
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Gan_Chinese),
            LanguageTag::fromString('zh-gan')
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha3Extensive::Gan_Chinese),
            LanguageTag::fromString('gan')
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Yue_Chinese),
            LanguageTag::fromString('zh-yue')
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha3Extensive::Yue_Chinese),
            LanguageTag::fromString('yue')
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha2::Chinese, LanguageAlpha3Extensive::Mandarin_Chinese),
            LanguageTag::fromString('zh-cmn')
        );
        static::assertEquals(
            LanguageTag::createNormal(LanguageAlpha3Extensive::Mandarin_Chinese),
            LanguageTag::fromString('cmn')
        );
    }
}

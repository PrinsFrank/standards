<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Common;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Region\GeographicRegion;
use PrinsFrank\Standards\Scripts\ScriptCode;

/**
 * @standard RFC5646
 * @source https://datatracker.ietf.org/doc/html/rfc5646
 */
class LanguageTag
{
    public const SUBTAG_SEPARATOR = '-';

    private function __construct(
        public readonly SingleCharacterSubtag|LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive $primaryLanguageSubtag,
        public readonly LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive|null $extendedLanguageSubtag = null,
        public readonly ScriptCode|null $scriptSubtag = null,
        public readonly CountryAlpha2|GeographicRegion|null $regionSubtag = null,
        public readonly mixed $variantSubtag = null,
        public readonly mixed $extensionSubtag = null,
        public readonly string|null $privateUseSubtag = null,
    ) {
    }

    public static function createNormal(
        LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive $primaryLanguageSubtag,
        LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive|null $extendedLanguageSubtag = null,
        ScriptCode|null $scriptSubtag = null,
        CountryAlpha2|GeographicRegion|null $regionSubtag = null,
    ): self {
        return new self(
            $primaryLanguageSubtag,
            $extendedLanguageSubtag,
            $scriptSubtag,
            $regionSubtag,
        );
    }

    public static function createPrivateUse(string $privateUseSubTag): self
    {
        return new self(
            SingleCharacterSubtag::PRIVATE_USE,
            privateUseSubtag: $privateUseSubTag,
        );
    }

    public static function createGrandFathered(): self
    {
        return new self(
            SingleCharacterSubtag::GRANDFATHERED,
        );
    }

    public static function tryFromString(string $languageTagString): ?self
    {
        try {
            return self::fromString($languageTagString);
        } catch (InvalidArgumentException) {
            return null;
        }
    }

    /** @throws InvalidArgumentException */
    public static function fromString(string $languageTagString): self
    {
        $languageTagSubTags = explode('-', $languageTagString);
        $primaryLanguageSubtag = LanguageAlpha2::tryFrom($languageTagSubTags[0])
            ?? LanguageAlpha3Terminology::tryFrom($languageTagSubTags[0])
            ?? LanguageAlpha3Common::tryFrom($languageTagSubTags[0])
            ?? LanguageAlpha3Extensive::tryFrom($languageTagSubTags[0])
            ?? SingleCharacterSubtag::tryFrom($languageTagSubTags[0])
            ?? throw new InvalidArgumentException('Primary language sub tag "' . $languageTagSubTags[0] . '" is not a valid Alpha2, Alpha3 or grandfathered/private use tag');

        if (array_key_exists(1, $languageTagSubTags) === false) {
            return new self($primaryLanguageSubtag);
        }

        $extendedLanguageSubTag =  LanguageAlpha3Terminology::tryFrom($languageTagSubTags[1])
            ?? LanguageAlpha3Common::tryFrom($languageTagSubTags[1])
            ?? LanguageAlpha3Extensive::tryFrom($languageTagSubTags[1])
            ?? throw new InvalidArgumentException('Extended language sub tag "' . $languageTagSubTags[1] . '" is not a valid Alpha3 tag');

        return new self($primaryLanguageSubtag, $extendedLanguageSubTag);
    }
}

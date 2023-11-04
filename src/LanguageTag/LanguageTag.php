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
        public readonly LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive|null                                 $extendedLanguageSubtag = null,
        public readonly ScriptCode|null                                                                                             $scriptSubtag = null,
        public readonly CountryAlpha2|GeographicRegion|null                                                                         $regionSubtag = null,
        public readonly mixed                                                                                                       $variantSubtag = null,
        public readonly mixed                                                                                                       $extensionSubtag = null,
        public readonly string|null                                                                                                 $privateUseSubtag = null,
    ) {
    }

    public static function createNormal(
        LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive $primaryLanguageSubtag,
        LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive|null           $extendedLanguageSubtag = null,
        ScriptCode|null                                                                       $scriptSubtag = null,
        CountryAlpha2|GeographicRegion|null                                                   $regionSubtag = null,
        mixed                                                                                 $variantSubtag = null,
        mixed                                                                                 $extensionSubtag = null,
        string|null                                                                           $privateUseSubtag = null,
    ): self {
        return new self(
            $primaryLanguageSubtag,
            $extendedLanguageSubtag,
            $scriptSubtag,
            $regionSubtag,
            $variantSubtag,
            $extensionSubtag,
            $privateUseSubtag,
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
        $primaryLanguageSubtag = $extendedLanguageSubtag = $scriptSubtag = $regionSubtag = $variantSubtag = $extensionSubtag = $privateUseSubtag = null;
        $subTags = explode(self::SUBTAG_SEPARATOR, $languageTagString);
        foreach ($subTags as $index => $subTag) {
            if ($index === 0) {
                $primaryLanguageSubtag = LanguageAlpha2::tryFrom($subTag)
                     ?? LanguageAlpha3Terminology::tryFrom($subTag)
                     ?? LanguageAlpha3Common::tryFrom($subTag)
                     ?? LanguageAlpha3Extensive::tryFrom($subTag)
                     ?? SingleCharacterSubtag::tryFrom($subTag)
                     ?? throw new InvalidArgumentException('Primary language sub tag "' . $subTag . '" is not a valid Alpha2/Alpha3 tag.');
                if ($primaryLanguageSubtag === SingleCharacterSubtag::PRIVATE_USE) {
                    return self::createPrivateUse(implode(self::SUBTAG_SEPARATOR, array_slice($subTags, $index + 1)));
                }

                continue;
            }

            if ($extendedLanguageSubtag === null
                && $regionSubtag === null
                && $variantSubtag === null
                && $extensionSubtag === null
                && $privateUseSubtag === null
                && ($matchesExtendedLanguage = LanguageAlpha3Terminology::tryFrom($subTag) ?? LanguageAlpha3Common::tryFrom($subTag) ?? LanguageAlpha3Extensive::tryFrom($subTag)) !== null) {
                $extendedLanguageSubtag = $matchesExtendedLanguage;
            } else if ($scriptSubtag === null
                && $regionSubtag === null
                && $variantSubtag === null
                && $extensionSubtag === null
                && $privateUseSubtag === null
                && ($matchesScriptTag = ScriptCode::tryFrom($subTag)) !== null) {
                $scriptSubtag = $matchesScriptTag;
            } else if ($regionSubtag === null
                && $variantSubtag === null
                && $extensionSubtag === null
                && $privateUseSubtag === null
                && ($matchesRegionTag = CountryAlpha2::tryFrom($subTag) ?? GeographicRegion::tryFrom($subTag)) !== null) {
                $regionSubtag = $matchesRegionTag;
            } else if ($variantSubtag === null
                && $extensionSubtag === null
                && $privateUseSubtag === null
                && ($matchesVariantTag = null) !== null) {
                $variantSubtag = $matchesVariantTag;
            }
        }

        return new self($primaryLanguageSubtag, $extendedLanguageSubtag, $scriptSubtag, $regionSubtag, $variantSubtag, $extensionSubtag, $privateUseSubtag);
    }
}

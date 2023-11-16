<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
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

    /** @throws InvalidArgumentException */
    public function __construct(
        public readonly SingleCharacterSubtag|PrivateUsePrimarySubtag|LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Extensive $primaryLanguageSubtag,
        public readonly LanguageAlpha3Terminology|LanguageAlpha3Extensive|null                                                         $extendedLanguageSubtag = null,
        public readonly ScriptCode|null                                                                                                $scriptSubtag = null,
        public readonly CountryAlpha2|GeographicRegion|PrivateUseRegionSubtag|null                                                     $regionSubtag = null,
        public readonly array                                                                                                          $variantSubtag = [],
        public readonly array                                                                                                          $extensionSubtag = [],
        public readonly string|null                                                                                                    $privateUseSubtag = null,
    ) {
        array_map(static function (mixed $variantSubtag) { $variantSubtag instanceof LanguageTagVariant ?: throw new InvalidArgumentException('Param $variantSubtag should be an array of "' . LanguageTagVariant::class . '"');}, $this->variantSubtag);
        array_map(static function (mixed $extensionSubtag) { is_string($extensionSubtag) ?: throw new InvalidArgumentException('Param $variantSubtag should be an array of strings');}, $this->extensionSubtag);
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
        $subTags               = explode(self::SUBTAG_SEPARATOR, $languageTagString);
        $primaryLanguageSubtag = LanguageAlpha2::tryFrom($subTags[0])
            ?? LanguageAlpha3Terminology::tryFrom($subTags[0])
            ?? LanguageAlpha3Extensive::tryFrom($subTags[0])
            ?? PrivateUsePrimarySubtag::tryFrom($subTags[0])
            ?? SingleCharacterSubtag::tryFrom($subTags[0])
            ?? throw new InvalidArgumentException('Primary language sub tag "' . $subTags[0] . '" is not a valid Alpha2/Alpha3 tag.');

        if ($primaryLanguageSubtag instanceof SingleCharacterSubtag) {
            return new self($primaryLanguageSubtag, privateUseSubtag: implode(self::SUBTAG_SEPARATOR, array_slice($subTags, 1)));
        }

        $variantSubtag          = $extensionSubtag = [];
        $extendedLanguageSubtag = $scriptSubtag = $regionSubtag = $privateUseSubtag = null;
        foreach ($subTags as $index => $subTag) {
            if ($index === 0) {
                continue;
            }

            if ($extendedLanguageSubtag === null
                && $regionSubtag        === null
                && $variantSubtag       === []
                && $extensionSubtag     === []
                && $privateUseSubtag    === null
                && ($matchesExtendedLanguage = LanguageAlpha3Terminology::tryFrom($subTag) ?? LanguageAlpha3Extensive::tryFrom($subTag)) !== null) {
                $extendedLanguageSubtag = $matchesExtendedLanguage;
            } elseif ($scriptSubtag  === null
                && $regionSubtag     === null
                && $variantSubtag    === []
                && $extensionSubtag  === []
                && $privateUseSubtag === null
                && ($matchesScriptTag = ScriptCode::tryFrom($subTag)) !== null) {
                $scriptSubtag = $matchesScriptTag;
            } elseif ($regionSubtag  === null
                && $variantSubtag    === []
                && $extensionSubtag  === []
                && $privateUseSubtag === null
                && ($matchesRegionTag = CountryAlpha2::tryFrom($subTag) ?? GeographicRegion::tryFrom($subTag) ?? PrivateUseRegionSubtag::tryFrom($subTag)) !== null) {
                $regionSubtag = $matchesRegionTag;
            } elseif ($extensionSubtag  === []
                && $privateUseSubtag    === null
                && ($matchesVariantTag = LanguageTagVariant::tryFrom($subTag)) !== null) {
                $variantSubtag[] = $matchesVariantTag;
            } elseif (SingleCharacterSubtag::tryFrom($subTag) !== null) {
                $privateUseSubtag = implode(self::SUBTAG_SEPARATOR, array_slice($subTags, $index + 1));

                break;
            } else {
                throw new InvalidArgumentException('Subtag "' . $subTag . '" is not a valid subtag with context ' . json_encode(array_filter(['primarySubTag' => $primaryLanguageSubtag, 'extendedLanguageSubtag' => $extendedLanguageSubtag, 'scriptSubTag' => $scriptSubtag, 'regionSubtag' => $regionSubtag, 'variantSubtag' => $variantSubtag, 'extensionSubtag' => $extensionSubtag, 'privateUseSubtag' => $privateUseSubtag]), JSON_THROW_ON_ERROR));
            }
        }

        return new self($primaryLanguageSubtag, $extendedLanguageSubtag, $scriptSubtag, $regionSubtag, $variantSubtag, $extensionSubtag, $privateUseSubtag);
    }
}

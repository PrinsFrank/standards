<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Common;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Region\GeographicRegion;
use PrinsFrank\Standards\Scripts\ScriptCode;
use UnitEnum;

/**
 * @standard RFC5646
 * @source https://datatracker.ietf.org/doc/html/rfc5646
 */
class LanguageTag
{
    public const SUBTAG_SEPARATOR = '-';

    private function __construct(
        public readonly SingleCharacterSubtag|LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Common $primaryLanguageSubtag,
        public readonly LanguageAlpha3Terminology|LanguageAlpha3Common|null $extendedLanguageSubtag = null,
        public readonly ScriptCode|null $scriptSubtag = null,
        public readonly CountryAlpha2|GeographicRegion|null $regionSubtag = null,
        public readonly $variantSubtag = null,
        public readonly $extensionSubtag = null,
        public readonly $privateUseSubtag = null,
    ) {
    }

    public static function createNormal(
        LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Common $primaryLanguageSubtag
    ): self {
        return new self(
            $primaryLanguageSubtag,

        );
    }

    public static function createPrivateUse(): self
    {
        return new self(
            SingleCharacterSubtag::PRIVATE_USE,

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
            ?? SingleCharacterSubtag::tryFrom($languageTagSubTags[0])
            ?? throw new InvalidArgumentException('Primary language sub tag "' . $languageTagSubTags[0] . '" is not a valid Alpha2, Alpha3 or grandfathered/private use tag');

        return new self($primaryLanguageSubtag);
    }

    /** @param mixed $subtag */
    protected function convertEnumToSeparatedString($subtag): string
    {
        return $subtag instanceof UnitEnum ? self::SUBTAG_SEPARATOR . $subtag->value : '';
    }

    public function __toString(): string
    {
        return $this->primaryLanguageSubtag->value
            . $this->convertEnumToSeparatedString($this->extendedLanguageSubtag)
            . $this->convertEnumToSeparatedString($this->scriptSubtag)
            . $this->convertEnumToSeparatedString($this->regionSubtag)
            . $this->convertEnumToSeparatedString($this->variantSubtag)
            . $this->convertEnumToSeparatedString($this->extensionSubtag)
            . $this->convertEnumToSeparatedString($this->privateUseSubtag)
        ;
    }
}

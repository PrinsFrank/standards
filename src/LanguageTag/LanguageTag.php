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
use Stringable;

/**
 * @standard RFC5646
 * @source https://datatracker.ietf.org/doc/html/rfc5646
 *
 * @manually-updated
 */
class LanguageTag implements Stringable {
    /** @deprecated will be removed in v4. Use LanguageSubtagSeparator::DEFAULT instead */
    public const SUBTAG_SEPARATOR = '-';

    /**
     * @param list<LanguageTagVariant> $variantSubtag
     * @param list<string> $extensionSubtag
     * @throws InvalidArgumentException
     */
    public function __construct(
        public readonly SingleCharacterSubtag|PrivateUsePrimarySubtag|LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Extensive $primaryLanguageSubtag,
        public readonly LanguageAlpha3Terminology|LanguageAlpha3Extensive|null                                                         $extendedLanguageSubtag = null,
        public readonly ScriptCode|null                                                                                                $scriptSubtag = null,
        public readonly CountryAlpha2|GeographicRegion|PrivateUseRegionSubtag|null                                                     $regionSubtag = null,
        public readonly array                                                                                                          $variantSubtag = [],
        public readonly array                                                                                                          $extensionSubtag = [],
        public readonly string|null                                                                                                    $privateUseSubtag = null,
    ) {
        /** @phpstan-ignore instanceof.alwaysTrue (as not everyone has PHPStan to tell them not to pass something else than a LanguageTagVariant) */
        array_map(static function (mixed $variantSubtag) { $variantSubtag instanceof LanguageTagVariant || throw new InvalidArgumentException('Param $variantSubtag should be an array of "' . LanguageTagVariant::class . '"');}, $this->variantSubtag);
        /** @phpstan-ignore function.alreadyNarrowedType (as not everyone has PHPStan to tell them not to pass something else than a string) */
        array_map(static function (mixed $extensionSubtag) { is_string($extensionSubtag) || throw new InvalidArgumentException('Param $variantSubtag should be an array of strings');}, $this->extensionSubtag);
    }

    public static function tryFromString(string $languageTagString, SubtagSeparator $subtagSeparator = SubtagSeparator::STANDARD): ?self {
        try {
            return self::fromString($languageTagString, $subtagSeparator);
        } catch (InvalidArgumentException) {
            return null;
        }
    }

    /** @throws InvalidArgumentException */
    public static function fromString(string $languageTagString, SubtagSeparator $subtagSeparator = SubtagSeparator::STANDARD): self {
        $subTags = explode($subtagSeparator->value, $languageTagString);
        $primaryLanguageSubtag = LanguageAlpha2::tryFrom($subTags[0])
            ?? LanguageAlpha3Terminology::tryFrom($subTags[0])
            ?? LanguageAlpha3Extensive::tryFrom($subTags[0])
            ?? PrivateUsePrimarySubtag::tryFrom($subTags[0])
            ?? SingleCharacterSubtag::tryFrom($subTags[0])
            ?? throw new InvalidArgumentException('Primary language sub tag "' . $subTags[0] . '" is not a valid Alpha2/Alpha3 tag.');

        if ($primaryLanguageSubtag instanceof SingleCharacterSubtag) {
            return new self($primaryLanguageSubtag, privateUseSubtag: implode($subtagSeparator->value, array_slice($subTags, 1)));
        }

        $variantSubtag = $extensionSubtag = [];
        $extendedLanguageSubtag = $scriptSubtag = $regionSubtag = $privateUseSubtag = null;
        foreach ($subTags as $index => $subTag) {
            if ($index === 0) {
                continue;
            }

            if ($extendedLanguageSubtag === null
                && $regionSubtag === null
                && $variantSubtag === []
                && ($matchesExtendedLanguage = LanguageAlpha3Terminology::tryFrom($subTag) ?? LanguageAlpha3Extensive::tryFrom($subTag)) !== null) {
                $extendedLanguageSubtag = $matchesExtendedLanguage;
            } elseif ($scriptSubtag === null
                && $regionSubtag === null
                && $variantSubtag === []
                && ($matchesScriptTag = ScriptCode::tryFrom($subTag)) !== null) {
                $scriptSubtag = $matchesScriptTag;
            } elseif ($regionSubtag === null
                && $variantSubtag === []
                && ($matchesRegionTag = CountryAlpha2::tryFrom($subTag) ?? GeographicRegion::tryFrom($subTag) ?? PrivateUseRegionSubtag::tryFrom($subTag)) !== null) {
                $regionSubtag = $matchesRegionTag;
            } elseif (($matchesVariantTag = LanguageTagVariant::tryFrom($subTag)) !== null) {
                $variantSubtag[] = $matchesVariantTag;
            } elseif (SingleCharacterSubtag::tryFrom($subTag) !== null) {
                $privateUseSubtag = implode($subtagSeparator->value, array_slice($subTags, $index + 1));

                break;
            } elseif (strlen($subTag) === 1) {
                $extensionSubtag = array_slice($subTags, $index);

                break;
            } else {
                throw new InvalidArgumentException('Subtag "' . $subTag . '" is not a valid subtag with context ' . json_encode(array_filter(['primarySubTag' => $primaryLanguageSubtag, 'extendedLanguageSubtag' => $extendedLanguageSubtag, 'scriptSubTag' => $scriptSubtag, 'regionSubtag' => $regionSubtag, 'variantSubtag' => $variantSubtag, 'extensionSubtag' => $extensionSubtag, 'privateUseSubtag' => $privateUseSubtag], fn (mixed $value) => $value !== [] && $value !== null)));
            }
        }

        return new self($primaryLanguageSubtag, $extendedLanguageSubtag, $scriptSubtag, $regionSubtag, $variantSubtag, $extensionSubtag, $privateUseSubtag);
    }

    public function toString(SubtagSeparator $subtagSeparator = SubtagSeparator::STANDARD): string {
        if ($this->primaryLanguageSubtag instanceof SingleCharacterSubtag) {
            return $this->primaryLanguageSubtag->value . ($this->privateUseSubtag !== null ? $subtagSeparator->value . $this->privateUseSubtag : '');
        }

        return ($this->primaryLanguageSubtag instanceof PrivateUsePrimarySubtag ? $this->primaryLanguageSubtag->subtag : $this->primaryLanguageSubtag->value)
            . ($this->extendedLanguageSubtag !== null ? $subtagSeparator->value . $this->extendedLanguageSubtag->value : '')
            . ($this->scriptSubtag !== null ? $subtagSeparator->value . $this->scriptSubtag->value : '')
            . ($this->regionSubtag !== null ? $subtagSeparator->value . $this->regionSubtag->value : '')
            . ($this->variantSubtag !== [] ? $subtagSeparator->value . implode($subtagSeparator->value, array_column($this->variantSubtag, 'value')) : '')
            . ($this->extensionSubtag !== [] ? $subtagSeparator->value . implode($subtagSeparator->value, $this->extensionSubtag) : '')
            . ($this->privateUseSubtag !== null ? $subtagSeparator->value . SingleCharacterSubtag::PRIVATE_USE->value . $subtagSeparator->value . $this->privateUseSubtag : '');
    }

    /** Stringable::__toString() doesn't allow arguments, so this method redirects to toString() to allow for custom separators */
    public function __toString(): string {
        return $this->toString();
    }
}

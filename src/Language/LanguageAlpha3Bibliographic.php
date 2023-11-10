<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\Region\GeographicRegion;
use PrinsFrank\Standards\Scripts\ScriptCode;

/**
 * @source https://www.iso.org/iso-639-language-codes.html
 * @source http://www.loc.gov/standards/iso639-2/php/code_list.php
 * @standard ISO639_1
 */
enum LanguageAlpha3Bibliographic: string
{
    case Albanian                    = 'alb';
    case Armenian                    = 'arm';
    case Basque                      = 'baq';
    case Burmese                     = 'bur';
    case Chinese                     = 'chi';
    case Czech                       = 'cze';
    case Dutch_Flemish               = 'dut';
    case French                      = 'fre';
    case Georgian                    = 'geo';
    case German                      = 'ger';
    case Greek_Modern_1453           = 'gre';
    case Icelandic                   = 'ice';
    case Macedonian                  = 'mac';
    case Malay                       = 'may';
    case Maori                       = 'mao';
    case Persian                     = 'per';
    case Romanian_Moldavian_Moldovan = 'rum';
    case Slovak                      = 'slo';
    case Tibetan                     = 'tib';
    case Welsh                       = 'wel';

    public function toLanguageAlpha3Terminology(): LanguageAlpha3Terminology
    {
        return BackedEnum::fromKey(LanguageAlpha3Terminology::class, $this->name);
    }

    public function toLanguageAlpha2(): LanguageAlpha2|null
    {
        return BackedEnum::tryFromKey(LanguageAlpha2::class, $this->name);
    }

    public function toLanguageName(): LanguageName
    {
        return BackedEnum::fromKey(LanguageName::class, $this->name);
    }

    public function upperCaseValue(): string
    {
        return strtoupper($this->value);
    }

    public function toLanguageTag(
        LanguageAlpha3Terminology|LanguageAlpha3Common|LanguageAlpha3Extensive|null $extendedLanguageSubtag = null,
        ScriptCode|null                                                             $scriptSubtag = null,
        CountryAlpha2|GeographicRegion|null                                         $regionSubtag = null,
        LanguageTagVariant|null                                                     $variantSubtag = null,
        string|null                                                                 $extensionSubtag = null,
        string|null                                                                 $privateUseSubtag = null,
    ): LanguageTag {
        return new LanguageTag(
            $this->toLanguageAlpha3Terminology(),
            $extendedLanguageSubtag,
            $scriptSubtag,
            $regionSubtag,
            $variantSubtag,
            $extensionSubtag,
            $privateUseSubtag,
        );
    }
}

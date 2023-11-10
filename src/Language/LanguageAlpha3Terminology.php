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
enum LanguageAlpha3Terminology: string
{
    case Albanian                    = 'sqi';
    case Armenian                    = 'hye';
    case Basque                      = 'eus';
    case Burmese                     = 'mya';
    case Chinese                     = 'zho';
    case Czech                       = 'ces';
    case Dutch_Flemish               = 'nld';
    case French                      = 'fra';
    case Georgian                    = 'kat';
    case German                      = 'deu';
    case Greek_Modern_1453           = 'ell';
    case Icelandic                   = 'isl';
    case Macedonian                  = 'mkd';
    case Malay                       = 'msa';
    case Maori                       = 'mri';
    case Persian                     = 'fas';
    case Romanian_Moldavian_Moldovan = 'ron';
    case Slovak                      = 'slk';
    case Tibetan                     = 'bod';
    case Welsh                       = 'cym';

    public function toLanguageAlpha3Bibliographic(): LanguageAlpha3Bibliographic
    {
        return BackedEnum::fromKey(LanguageAlpha3Bibliographic::class, $this->name);
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
            $this,
            $extendedLanguageSubtag,
            $scriptSubtag,
            $regionSubtag,
            $variantSubtag,
            $extensionSubtag,
            $privateUseSubtag,
        );
    }
}

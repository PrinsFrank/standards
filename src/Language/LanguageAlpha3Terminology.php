<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\BackedEnum;

/**
 * @source https://www.iso.org/iso-639-language-codes.html
 * @source http://www.loc.gov/standards/iso639-2/php/code_list.php
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

    public function toLanguageAlpha3Bibliographic(): LanguageAlpha3Common|LanguageAlpha3Bibliographic|null
    {
        return BackedEnum::tryFromKey(LanguageAlpha3Common::class, $this->name) ?? BackedEnum::tryFromKey(LanguageAlpha3Bibliographic::class, $this->name) ?? null;
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
}
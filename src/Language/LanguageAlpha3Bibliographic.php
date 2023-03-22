<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\BackedEnum;

/**
 * @source https://www.iso.org/iso-639-language-codes.html
 * @source http://www.loc.gov/standards/iso639-2/php/code_list.php
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

    public function toLanguageAlpha3Terminology(): LanguageAlpha3Common|LanguageAlpha3Terminology|null
    {
        return BackedEnum::tryFromKey(LanguageAlpha3Common::class, $this->name) ?? BackedEnum::tryFromKey(LanguageAlpha3Terminology::class, $this->name) ?? null;
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

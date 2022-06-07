<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\Enum;
use RuntimeException;

/**
 * @source https://www.loc.gov/standards/iso639-2/php/code_list.php
 */
enum ISO639_2_Bibliographic: string
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

    public function toLanguage(): Language
    {
        return Enum::fromKey(Language::class, $this->name) ?? throw new RuntimeException('Every item in ISO_639_2_Bibliographic should have a valid language reference in Language class, none for "' . $this->name . '" given.');
    }

    public function toISO639_2_Terminology(): ISO639_2_Common|ISO639_2_Terminology|null
    {
        return $this->toLanguage()->toISO639_2_Terminology();
    }

    public function toISO639_1(): ISO639_1|null
    {
        return $this->toLanguage()->toISO639_1();
    }
}

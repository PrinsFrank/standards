<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\Enum;
use RuntimeException;

/**
 * @source https://www.loc.gov/standards/iso639-2/php/code_list.php
 */
enum ISO639_2_Terminology: string
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

    public function toLanguage(): Language
    {
        return Enum::fromKey(Language::class, $this->name) ?? throw new RuntimeException('Every item in ISO_639_2_Terminology should have a valid language reference in Language class, none for "' . $this->name . '" given.');
    }

    public function toISO639_2_Bibliographic(): ISO639_2_Common|ISO639_2_Terminology|null
    {
        return $this->toLanguage()->toISO639_2_Bibliographic();
    }

    public function toISO639_1(): ISO639_1|null
    {
        return $this->toLanguage()->toISO639_1();
    }
}

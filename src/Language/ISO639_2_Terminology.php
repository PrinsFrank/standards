<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Standards\Enum;

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

    public function toISO639_2_Bibliographic(): ISO639_2_Common|ISO639_2_Bibliographic|null
    {
        return Enum::fromKey(ISO639_2_Common::class, $this->name) ?? Enum::fromKey(ISO639_2_Bibliographic::class, $this->name) ?? null;
    }

    public function toISO639_1(): ISO639_1|null
    {
        return Enum::fromKey(ISO639_1::class, $this->name);
    }
}

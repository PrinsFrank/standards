<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

enum SubtagSeparator: string
{
    /**
     * @standard RFC5646
     * @standard BCP47
     */
    case STANDARD = '-';

    /**
     * @used-by Unicode LDML (which is based on BCP47 but allows for underscores in addition to dashes)
     * @used-by Java locales
     * @used-by POSIX locales
     */
    case UNDERSCORE = '_';
}

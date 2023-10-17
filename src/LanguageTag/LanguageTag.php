<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Common;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Scripts\ScriptCode;

class LanguageTag
{
    public function __construct(
        public readonly SingleCharacterSubtag|LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Common $primaryLanguageSubtag,
        $extendedLanguageSubtag,
        ?ScriptCode $scriptSubtag,
        CountryAlpha2 $regionSubtag,
        $variantSubtag,
        $extensionSubtag,
        $privateUseSubtag,
    ) {
    }
}

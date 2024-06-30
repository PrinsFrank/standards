<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Subdivision\Attributes;

use Attribute;
use PrinsFrank\Standards\Language\LanguageAlpha2;

#[Attribute]
class Name
{
    public function __construct(
        public readonly string $name,
        public readonly ?string $localVariant,
        public readonly LanguageAlpha2 $languageAlpha2,
        public readonly string $romanizationSystem,
    ) {
    }
}

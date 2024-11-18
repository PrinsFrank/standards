<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Subdivision\Attributes;

use Attribute;
use PrinsFrank\Standards\Language\LanguageAlpha2;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS_CONSTANT)]
class Name {
    /** @param list<LanguageAlpha2> $language */
    public function __construct(
        public readonly string $name,
        public readonly array $language = [],
        public readonly ?string $romanizationSystem = null,
        public readonly ?string $localVariant = null,
    ) {
    }
}

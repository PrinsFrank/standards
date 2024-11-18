<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Subdivision\Attributes;

use Attribute;
use PrinsFrank\Standards\Country\CountryAlpha2;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class SameAsCountry {
    public function __construct(
        public readonly CountryAlpha2 $country
    ) {
    }
}

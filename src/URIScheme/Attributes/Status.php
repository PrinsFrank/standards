<?php declare(strict_types=1);

namespace PrinsFrank\Standards\URIScheme\Attributes;

use Attribute;
use PrinsFrank\Standards\URIScheme\URISchemeStatus;

#[Attribute]
class Status {
    public function __construct(
        public readonly URISchemeStatus $status,
    ) {
    }
}

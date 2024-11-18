<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Http\Attributes;

use Attribute;
use DateTimeImmutable;

#[Attribute]
class TemporaryAssignment {
    public function __construct(
        public readonly ?DateTimeImmutable $expiresAt,
    ) {
    }
}

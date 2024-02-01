<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Scripts\Attributes;

use Attribute;
use Stringable;

#[Attribute]
class SupportedByPHPRegex implements Stringable
{
    public function __toString(): string
    {
        return '#[SupportedByPHPRegex]';
    }
}

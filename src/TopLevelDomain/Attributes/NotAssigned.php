<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain\Attributes;

use Attribute;
use Stringable;

#[Attribute]
class NotAssigned implements Stringable
{
    public function __toString(): string
    {
        return '#[NotAssigned]';
    }
}

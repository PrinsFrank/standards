<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use ReflectionClass;
use ReflectionException;
use Stringable;

class EnumCaseAttribute implements Stringable
{
    /** @param class-string<object> $fqn */
    public function __construct(
        public readonly string $fqn,
    ) { }

    /** @throws ReflectionException */
    public function __toString(): string
    {
        return '#[' . (new ReflectionClass($this->fqn))->getShortName() . ']';
    }
}

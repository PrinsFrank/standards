<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use InvalidArgumentException;
use ReflectionClass;
use Stringable;
use UnitEnum;

class EnumCaseAttribute implements Stringable
{
    /**
     * @param class-string<object> $fqn
     * @param list<string|UnitEnum|BackedEnum|null> $parameters
     */
    public function __construct(
        public readonly string $fqn,
        public readonly array $parameters = [],
    ) {
    }

    public function __toString(): string
    {
        if ($this->parameters !== []) {
            return '#[' . (new ReflectionClass($this->fqn))->getShortName() . '(' . implode(', ', array_map(fn (mixed $value) => $this->valueToString($value), $this->parameters)) . ')]';
        }

        return '#[' . (new ReflectionClass($this->fqn))->getShortName() . ']';
    }

    private function valueToString(mixed $value): string {
        if ($value instanceof UnitEnum) {
            return substr($value::class, strrpos($value::class, '\\') + 1) . '::' . $value->name;
        }

        return match (gettype($value)) {
            'string' => sprintf("'%s'", $value),
            'null' => 'null',
            default => throw new InvalidArgumentException(sprintf('Unsupported parameter type %s', gettype($value))),
        };
    }
}

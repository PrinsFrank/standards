<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use DateTimeImmutable;
use Override;
use PrinsFrank\Standards\InvalidArgumentException;
use ReflectionClass;
use Stringable;
use UnitEnum;

class EnumCaseAttribute implements Stringable {
    /**
     * @param class-string<object> $fqn
     * @param list<string|UnitEnum|BackedEnum|DateTimeImmutable|null|array<string|UnitEnum|BackedEnum|null>> $parameters
     */
    public function __construct(
        public readonly string $fqn,
        public readonly array $parameters = [],
    ) {}

    /** @throws InvalidArgumentException */
    #[Override]
    public function __toString(): string {
        if ($this->parameters !== []) {
            return '#[' . (new ReflectionClass($this->fqn))->getShortName() . '(' . implode(', ', array_map(fn(mixed $value) => $this->valueToString($value), $this->parameters)) . ')]';
        }

        return '#[' . (new ReflectionClass($this->fqn))->getShortName() . ']';
    }

    /** @throws InvalidArgumentException */
    private function valueToString(mixed $value): string {
        if ($value instanceof UnitEnum) {
            return substr($value::class, strrpos($value::class, '\\') !== false ? strrpos($value::class, '\\') + 1 : 0) . '::' . $value->name;
        }

        if ($value instanceof DateTimeImmutable) {
            return sprintf('new DateTimeImmutable(\'%s\')', $value->format('Y-m-d'));
        }

        return match (gettype($value)) {
            'string' => sprintf("'%s'", str_replace('\'', '\\\'', $value)),
            'NULL' => 'null',
            'array' => '[' . implode(', ', array_map(fn(mixed $value) => $this->valueToString($value), $value)) . ']',
            default => throw new InvalidArgumentException(sprintf('Unsupported parameter type %s', gettype($value))),
        };
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

class EnumCase
{
    public function __construct(private string $key, private string|int $value)
    {
    }

    public function __toString(): string
    {
        if (is_int($this->value)) {
            return 'case ' . $this->key . ' = ' . $this->value . ';';
        }

        return 'case ' . $this->key . ' = \'' . str_replace('\'', '\\\'', $this->value) . '\';';
    }
}

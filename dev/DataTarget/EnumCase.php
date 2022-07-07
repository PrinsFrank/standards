<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

class EnumCase
{
    public function __construct(private string $key, private string $value)
    {
    }

    public function __toString(): string
    {
        return 'case ' . $this->key . ' = \'' . $this->value . '\';';
    }
}

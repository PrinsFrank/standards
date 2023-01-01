<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

class EnumCase
{
    public function __construct(private string $key, private string|int $value, private bool $deprecated = false)
    {
    }

    public function __toString(): string
    {
        $case = '';
        if ($this->deprecated === true) {
            $case .= '/** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */' . PHP_EOL;
        }

        if (is_int($this->value)) {
            $case .= 'case ' . $this->key . ' = ' . $this->value . ';' . PHP_EOL;
        } else {
            $case .= 'case ' . $this->key . ' = \'' . str_replace('\'', '\\\'', $this->value) . '\';' . PHP_EOL;
        }

        return $case;
    }
}

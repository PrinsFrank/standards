<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\KeyNormalizer\NameNormalizer;

class EnumCase
{
    public function __construct(public readonly string $key, public readonly string|int $value, public readonly bool $deprecated = false)
    {
    }

    public function __toString(): string
    {
        $case = '';
        if ($this->deprecated === true) {
            $case .= '/** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */' . PHP_EOL;
        }

        $key = NameNormalizer::normalize($this->key);
        if (is_int($this->value)) {
            $case .= 'case ' . $key . ' = ' . $this->value . ';' . PHP_EOL;
        } else {
            $case .= 'case ' . $key . ' = \'' . str_replace('\'', '\\\'', $this->value) . '\';' . PHP_EOL;
        }

        return $case;
    }
}

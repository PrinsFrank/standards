<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;

class EnumCase
{
    public function __construct(
        public readonly string $key,
        public readonly string|int $value,
        public readonly bool $deprecated = false
    ) {
    }

    /**
     * @param class-string<BackedEnum> $enumFQN
     * @throws TransliterationException
     */
    public function toString(string $enumFQN): string
    {
        $case = '';
        if ($this->deprecated === true) {
            $case .= '/** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */' . PHP_EOL;
        }

        $existingKeyWithValue = $enumFQN::tryFrom($this->value);
        $key                  = $existingKeyWithValue !== null ? $existingKeyWithValue->name : NameNormalizer::normalize($this->key);
        if (is_int($this->value)) {
            $case .= 'case ' . $key . ' = ' . $this->value . ';' . PHP_EOL;
        } else {
            $case .= 'case ' . $key . ' = \'' . str_replace('\'', '\\\'', $this->value) . '\';' . PHP_EOL;
        }

        return $case;
    }

    /**
     * @throws TransliterationException
     */
    public function __toString(): string
    {
        return NameNormalizer::normalize($this->key);
    }
}

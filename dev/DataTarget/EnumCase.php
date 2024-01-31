<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;

/** @internal */
class EnumCase
{
    public function __construct(
        public readonly string $name,
        public readonly string|int $value,
        public readonly bool $deprecated = false
    ) {
    }

    /**
     * @param class-string<BackedEnum> $enumFQN
     * @throws InvalidArgumentException
     * @throws TransliterationException
     * @throws UnableToCreateTransliteratorException
     */
    public function toString(string $enumFQN, string $indenting): string
    {
        $case = '';
        if ($this->deprecated === true) {
            $case .= PHP_EOL . $indenting . '/** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */' . PHP_EOL;
        }

        $existingKeyWithValue = $enumFQN::tryFrom($this->value);
        $key = $existingKeyWithValue !== null ? $existingKeyWithValue->name : NameNormalizer::normalize($this->name);
        if (is_int($this->value)) {
            $case .= $indenting . 'case ' . $key . ' = ' . $this->value . ';';
        } else {
            $case .= $indenting . 'case ' . $key . ' = \'' . str_replace('\'', '\\\'', $this->value) . '\';';
        }

        return $case;
    }

    /**
     * @throws TransliterationException
     * @throws InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     */
    public function __toString(): string
    {
        return NameNormalizer::normalize($this->name);
    }
}

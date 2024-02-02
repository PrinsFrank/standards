<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use BackedEnum;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Standards\Scripts\ScriptAlias;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;

/** @internal */
class EnumCase
{
    /** @param array<EnumCaseAttribute> $attributes */
    public function __construct(
        public readonly string $name,
        public readonly string|int $value,
        public readonly array $attributes = [],
        public readonly bool $deprecated = false
    ) {
    }

    /**
     * @param class-string<BackedEnum> $enumFQN
     * @throws InvalidArgumentException
     * @throws TransliterationException
     * @throws UnableToCreateTransliteratorException
     */
    public function toString(string $enumFQN, string $indenting, bool $isFirst): string
    {
        $case = '';
        if ($isFirst === false && ($this->deprecated === true || $this->attributes !== [])) {
            $case .= PHP_EOL;
        }

        if ($this->deprecated === true) {
            $case .= PHP_EOL . $indenting . '/** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */';
        }

        foreach ($this->attributes as $attribute) {
            $case .= PHP_EOL . $indenting . $attribute->__toString();
        }

        $existingKeyWithValue = $enumFQN::tryFrom($this->value);
        $key = $existingKeyWithValue !== null ? $existingKeyWithValue->name : NameNormalizer::normalize($this->name);
        if ($existingKeyWithValue === null && is_string($this->value)) {
            $mostCommonScriptInString = ScriptAlias::mostCommonInString($this->value) ?? ScriptAlias::Code_for_undetermined_script;
            if (in_array($mostCommonScriptInString, [ScriptAlias::Code_for_undetermined_script, ScriptAlias::Latin], true) !== true) {
                $key .= '_' . mb_strtolower($mostCommonScriptInString->value);
            }
        }

        if (is_int($this->value)) {
            $case .= PHP_EOL . $indenting . 'case ' . $key . ' = ' . $this->value . ';';
        } else {
            $case .= PHP_EOL . $indenting . 'case ' . $key . ' = \'' . str_replace('\'', '\\\'', $this->value) . '\';';
        }

        return $case;
    }
}

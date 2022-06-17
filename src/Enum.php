<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

class Enum
{
    /**
     * @template T of Enum
     * @param class-string<T> $fqn
     * @return T|null
     */
    public static function fromKey(string $fqn, string $keyName)
    {
        $matchingItems = array_values(array_filter($fqn::cases(), static function ($language) use ($keyName) {
            return $language->name === $keyName;
        }));
        if (array_key_exists(0, $matchingItems) === false || count($matchingItems) !== 1) {
            return null;
        }

        return $matchingItems[0];
    }
}

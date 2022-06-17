<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

class Enum
{
    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return T|null
     */
    public static function fromKey(string $fqn, string $keyName): ?\BackedEnum
    {
        foreach ($fqn::cases() as $case) {
            if ($case->name === $keyName) {
                // stop at first case found
                return $case;
            }
        }

        return null;
    }
}

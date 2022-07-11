<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

class BackedEnum
{
    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return T
     * @throws KeyNotFoundException
     */
    public static function fromKey(string $fqn, string $keyName): \BackedEnum
    {
        return self::tryFromKey($fqn, $keyName) ?? throw new KeyNotFoundException('Key "' . $keyName . '" not found in "' . $fqn . '"');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return T|null
     */
    public static function tryFromKey(string $fqn, string $keyName): ?\BackedEnum
    {
        return defined("{$fqn}::{$keyName}") ? constant("{$fqn}::{$keyName}") : null;
    }
}

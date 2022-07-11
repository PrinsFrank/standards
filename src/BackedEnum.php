<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

class BackedEnum
{
    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return T|null
     */
    public static function fromKey(string $fqn, string $keyName): ?\BackedEnum
    {
        return defined("{$fqn}::{$keyName}") ? constant("{$fqn}::{$keyName}") : null;
    }
}

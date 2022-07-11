<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

class BackedEnum
{
    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqcn
     * @return T|null
     */
    public static function fromKey(string $fqcn, string $keyName): ?\BackedEnum
    {
        return enum_exists("{$fqcn}::{$keyName}") ? $fqcn::$keyName : null;
    }
}

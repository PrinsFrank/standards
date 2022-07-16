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
        if (!defined("$fqn::$keyName")) {
            return null;
        }

        /** @var T $itemValue */
        $itemValue = constant("$fqn::$keyName");

        return $itemValue;
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return array
     */
    public static function names($fqn): array
    {
        return array_column($fqn::cases(), 'name');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return array
     */
    public static function values($fqn): array
    {
        return array_column($fqn::cases(), 'value');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return array
     */
    public static function toArray($fqn): array
    {
        $array = [];

        foreach ($fqn::cases() as $case) {
            $array[$case->name] = $case->value;
        }

        return $array;
    }
}

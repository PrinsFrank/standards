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
     * @throws InvalidArgumentException
     */
    public static function fromKey(string $fqn, string $keyName): \BackedEnum
    {
        return self::tryFromKey($fqn, $keyName) ?? throw new KeyNotFoundException('Key "' . $keyName . '" not found in "' . $fqn . '"');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return T|null
     * @throws InvalidArgumentException
     */
    public static function tryFromKey(string $fqn, string $keyName): ?\BackedEnum
    {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get names of backedEnums, "' . $fqn . '" provided');
        }

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
     * @return array<int, string>
     * @throws InvalidArgumentException
     */
    public static function names(string $fqn): array
    {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get names of backedEnums, "' . $fqn . '" provided');
        }

        return array_column($fqn::cases(), 'name');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return array<int, int|string>
     * @throws InvalidArgumentException
     */
    public static function values(string $fqn): array
    {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get values of backedEnums, "' . $fqn . '" provided');
        }

        return array_column($fqn::cases(), 'value');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @return array<int|string, int|string>
     * @throws InvalidArgumentException
     */
    public static function toArray(string $fqn): array
    {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get an array of key/value pairs for backedEnums, "' . $fqn . '" provided');
        }

        $array = [];
        foreach ($fqn::cases() as $case) {
            $array[$case->name] = $case->value;
        }

        return $array;
    }
}

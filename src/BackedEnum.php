<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

use Error;

/** @deprecated Will be removed in v4 of this package. If you want to use the logic here, please use prinsfrank/enums instead */
class BackedEnum {
    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @throws KeyNotFoundException
     * @throws InvalidArgumentException
     * @return T
     */
    public static function fromKey(string $fqn, string $keyName): \BackedEnum {
        return self::tryFromKey($fqn, $keyName) ?? throw new KeyNotFoundException('Key "' . $keyName . '" not found in "' . $fqn . '"');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @throws InvalidArgumentException
     * @return T|null
     */
    public static function tryFromKey(string $fqn, string $keyName): ?\BackedEnum {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get names of backedEnums, "' . $fqn . '" provided');
        }

        try {
            /** @var T $itemValue */
            $itemValue = constant("$fqn::$keyName");
        } catch (Error) {
            return null;
        }

        return $itemValue;
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @throws InvalidArgumentException
     * @return array<int, string>
     */
    public static function names(string $fqn): array {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get names of backedEnums, "' . $fqn . '" provided');
        }

        return array_column($fqn::cases(), 'name');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @throws InvalidArgumentException
     * @return array<int, int|string>
     */
    public static function values(string $fqn): array {
        if (is_a($fqn, \BackedEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get values of backedEnums, "' . $fqn . '" provided');
        }

        return array_column($fqn::cases(), 'value');
    }

    /**
     * @template T of \BackedEnum
     * @param class-string<T> $fqn
     * @throws InvalidArgumentException
     * @return array<int|string, int|string>
     */
    public static function toArray(string $fqn): array {
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

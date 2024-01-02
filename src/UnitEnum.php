<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

use Error;

/** @internal This class or its methods may change between minor versions */
class UnitEnum
{
    /**
     * @template T of \UnitEnum
     * @param class-string<T> $fqn
     * @throws KeyNotFoundException
     * @throws InvalidArgumentException
     * @return T
     */
    public static function fromKey(string $fqn, string $keyName): \UnitEnum
    {
        return self::tryFromKey($fqn, $keyName) ?? throw new KeyNotFoundException('Key "' . $keyName . '" not found in "' . $fqn . '"');
    }

    /**
     * @template T of \UnitEnum
     * @param class-string<T> $fqn
     * @throws InvalidArgumentException
     * @return T|null
     */
    public static function tryFromKey(string $fqn, string $keyName): ?\UnitEnum
    {
        if (is_a($fqn, \UnitEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get names of unitEnums, "' . $fqn . '" provided');
        }

        if (!defined("$fqn::$keyName")) {
            return null;
        }

        /** @var T $itemValue */
        try {
            $itemValue = constant("$fqn::$keyName");
        } catch (Error) {
            return null;
        }

        return $itemValue;
    }

    /**
     * @template T of \UnitEnum
     * @param class-string<T> $fqn
     * @throws InvalidArgumentException
     * @return array<int, string>
     */
    public static function names(string $fqn): array
    {
        if (is_a($fqn, \UnitEnum::class, true) === false) {
            throw new InvalidArgumentException('It is only possible to get names of unitEnums, "' . $fqn . '" provided');
        }

        return array_column($fqn::cases(), 'name');
    }
}

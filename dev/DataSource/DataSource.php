<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

interface DataSource
{
    public static function transformKey(string $key): ?string;

    public static function transformValue(string $value): string|int|null;

    /** @return class-string<\BackedEnum> */
    public static function getSpecFQN(): string;

    public static function sort(): bool;

    public static function xPathIdentifierKey(): string;

    public static function xPathIdentifierValue(): string;
}

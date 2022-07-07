<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

interface DataSource
{
    public static function transformKey(string $key): ?string;

    public static function transformValue(string $value): ?string;

    /** @return class-string */
    public static function getSpecFQN(): string;
}

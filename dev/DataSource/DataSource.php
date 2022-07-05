<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

interface DataSource
{
    public static function url(): string;

    public static function xPathIdentifierKey(): string;

    public static function xPathIdentifierValue(): string;

    public static function transformKey(string $key): string;

    public static function transformValue(string $value): string;
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Language;

use PrinsFrank\Standards\Dev\DataSource\DataSource;

class ISO639_1_Alpha_3_Common_Source implements DataSource
{
    public static function url(): string
    {
        return 'https://www.loc.gov/standards/iso639-2/php/code_list.php';
    }

    public static function xPathIdentifierKey(): string
    {
        return '//table[@width="100%"]/tr/td[1]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//table[@width="100%"]/tr/td[3]';
    }

    public static function transformKey(string $key): ?string
    {
        return $key;
    }

    public static function transformValue(string $value): ?string
    {
        if (str_contains($value, '(T)') || str_contains($value, '(B)') || str_contains($value, '-')) {
            return null;
        }

        return strtolower(str_replace(' ', '', trim($value)));
    }
}

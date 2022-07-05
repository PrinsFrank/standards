<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Language;

use PrinsFrank\Standards\Dev\DataSource\DataSource;

class ISO639_1_Alpha_2_Source implements DataSource
{
    public static function url(): string
    {
        return 'https://www.loc.gov/standards/iso639-2/php/code_list.php';
    }

    public static function xPathIdentifierKey(): string
    {
        return '//table[@width="100%"]/tr/td[2]';
    }

    public static function xPathIdentifierValue(): string
    {
        return '//table[@width="100%"]/tr/td[3]';
    }

    public static function transformKey(string $key): string
    {
        $key = str_replace([' ', ';', ',', '(', ')', '-', '.'], '_', $key);

        $key = str_replace('__', '_', $key);

        return $key;
    }

    public static function transformValue(string $value): string
    {
        return strtolower(str_replace(' ', '', trim($value)));
    }
}

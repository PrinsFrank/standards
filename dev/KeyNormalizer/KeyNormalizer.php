<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\KeyNormalizer;

class KeyNormalizer
{
    public static function normalize(string $key): string
    {
        $key = transliterator_transliterate('Any-Latin; Latin-ASCII;', $key);
        $key = str_replace([' ', ';', ',', '(', ')', '-', '.', '\'', '*', '[', ']'], '_', $key);

        return trim(str_replace(['__', '__'], ['_', '_'], $key), '_');
    }
}

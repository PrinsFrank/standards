<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\Exception\TransliterationException;

class NameNormalizer
{
    /** @throws TransliterationException */
    public static function normalize(string $key): string
    {
        $key = transliterator_transliterate('Any-Latin; Latin-ASCII;', $key);
        if ($key === false) {
            throw new TransliterationException();
        }

        $key = str_replace([' ', ';', ',', '(', ')', '-', '.', '\'', '"', '/', '|', '=', '!', '?', '*', '[', ']', '~'], '_', $key);
        if (preg_match('/[^0-9A-Z_a-z]/', $key) === 1) {
            throw new TransliterationException();
        }

        return trim(str_replace(['__', '__'], ['_', '_'], $key), '_');
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\Exception\TransliterationException;

class NameNormalizer
{
    /** @throws TransliterationException */
    public static function normalize(string $key): string
    {
        $key = transliterator_transliterate('Any-Latin; Latin-ASCII; IPA-XSampa;', $key);
        if ($key === false) {
            throw new TransliterationException();
        }

        $key = str_replace([' ', ';', ',', '(', ')', '-', '.', '\'', '"', '/', '|', '=', '!', '?', '*', '[', ']', '~', '´'], '_', $key);

        return trim(str_replace(['__', '__'], ['_', '_'], $key), '_');
    }
}

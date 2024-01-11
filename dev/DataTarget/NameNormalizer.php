<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\TransliteratorBuilder;

class NameNormalizer
{
    /** @throws TransliterationException */
    public static function normalize(string $key): string
    {
        $key = (new TransliteratorBuilder())
            ->toASCII()
            ->toXSampa()
            ->transliterate($key);

        // Supplemental IPA transliteration
        $key = str_replace(['´', 'Ɔ'], ['', 'O'], $key);

        $key = str_replace([' ', ';', ',', '(', ')', '-', '.', '\'', '"', '/', '|', '=', '!', '?', '*', '[', ']', '~'], '_', $key);
        if (preg_match('/[^0-9A-Z_a-z]/', $key) === 1) {
            throw new TransliterationException(sprintf('Invalid key: (%s)', $key));
        }

        return trim(str_replace(['__', '__'], ['_', '_'], $key), '_');
    }
}

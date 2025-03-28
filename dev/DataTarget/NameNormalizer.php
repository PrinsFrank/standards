<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\ConversionSet\IPAToEnglishApproximation;
use PrinsFrank\Transliteration\ConversionSet\Keep;
use PrinsFrank\Transliteration\ConversionSet\Replace;
use PrinsFrank\Transliteration\ConversionSet\ReplaceAll;
use PrinsFrank\Transliteration\ConversionSet\ToASCII;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\RecursionException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;
use PrinsFrank\Transliteration\Syntax\FormalId\Components\Character;
use PrinsFrank\Transliteration\Syntax\FormalId\Components\Filter;
use PrinsFrank\Transliteration\TransliteratorBuilder;

/** @internal */
class NameNormalizer {
    /**
     * @throws TransliterationException
     * @throws InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     * @throws RecursionException
     */
    public static function normalize(string $key): string {
        $normalizedKey = (new TransliteratorBuilder())
            ->applyConversionSet(new ToASCII())
            ->applyConversionSet(new IPAToEnglishApproximation())
            ->applyConversionSet(new ReplaceAll([' ', '!', '"', '#', '$', '%', '&', '\'', '(', ')', '*', '+', ',', '-', '.', '/', ':', ';', '<', '=', '>', '?', '@', '[', '\\', ']', '^', '`', '{', '|', '}', '~'], '_'))
            ->applyConversionSet(new Replace('ලංකා', 'lanka'))
            ->applyConversionSet(new Replace('ລາວ', 'lao'))
            ->applyConversionSet(
                new Keep(
                    (new Filter())
                        ->addRange(new Character('0'), new Character('9'))
                        ->addRange(new Character('A'), new Character('Z'))
                        ->addChar(new Character('_'))
                        ->addRange(new Character('a'), new Character('z'))
                )
            )
            ->transliterate($key);

        if (preg_match('/[^0-9A-Z_a-z]/', $normalizedKey) === 1) {
            throw new TransliterationException(sprintf('Invalid key: (%s)', $normalizedKey));
        }

        $normalizedKey = trim(str_replace(['__', '__'], ['_', '_'], $normalizedKey), '_');
        if ($normalizedKey === '') {
            throw new TransliterationException(sprintf('No characters left in key (%s)', $key));
        }

        return $normalizedKey;
    }
}

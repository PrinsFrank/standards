<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;
use PrinsFrank\Transliteration\FormalIdSyntax\Components\Character;
use PrinsFrank\Transliteration\FormalIdSyntax\Components\Filter;
use PrinsFrank\Transliteration\TransliteratorBuilder;

class NameNormalizer
{
    /**
     * @throws TransliterationException
     * @throws InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     */
    public static function normalize(string $key): string
    {
        $key = (new TransliteratorBuilder())
            ->toASCII()
            ->replace(' ', '_')
            ->replace(';', '_')
            ->replace(',', '_')
            ->replace('(', '_')
            ->replace(')', '_')
            ->replace('-', '_')
            ->replace('.', '_')
            ->replace('\'', '_')
            ->replace('"', '_')
            ->replace('/', '_')
            ->replace('|', '_')
            ->replace('=', '_')
            ->replace('!', '_')
            ->replace('?', '_')
            ->replace('*', '_')
            ->replace('[', '_')
            ->replace(']', '_')
            ->replace('~', '_')
            ->IPAToEnglishApproximation()
            ->keep(
                (new Filter())
                    ->addRange(new Character('a'), new Character('z'))
                    ->addRange(new Character('A'), new Character('Z'))
                    ->addChar(new Character(' '))
            )
            ->transliterate($key);

        if (preg_match('/[^0-9A-Z_a-z]/', $key) === 1) {
            throw new TransliterationException(sprintf('Invalid key: (%s)', $key));
        }

        return trim(str_replace(['__', '__'], ['_', '_'], $key), '_');
    }
}

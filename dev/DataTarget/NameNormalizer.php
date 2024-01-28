<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataTarget;

use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;
use PrinsFrank\Transliteration\FormalIdSyntax\Components\Character;
use PrinsFrank\Transliteration\FormalIdSyntax\Components\Filter;
use PrinsFrank\Transliteration\TransliteratorBuilder;

/** @internal */
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
            ->IPAToEnglishApproximation()
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
            ->keep(
                (new Filter())
                    ->addRange(new Character('0'), new Character('9'))
                    ->addRange(new Character('A'), new Character('Z'))
                    ->addChar(new Character('_'))
                    ->addRange(new Character('a'), new Character('z'))
            )
            ->transliterate($key);

        if (preg_match('/[^0-9A-Z_a-z]/', $key) === 1) {
            throw new TransliterationException(sprintf('Invalid key: (%s)', $key));
        }

        $key = trim(str_replace(['__', '__'], ['_', '_'], $key), '_');

        if ($key === '') {
            throw new TransliterationException('No characters left in key');
        }

        return $key;
    }
}

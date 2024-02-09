<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Sorting;

use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\NameNormalizer;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\RecursionException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;

class KeyWithDeprecatedTagsSeparateSorting implements SortingInterface
{
    /**
     * @throws InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     * @throws TransliterationException
     * @throws RecursionException
     */
    public function __invoke(EnumCase $a, EnumCase $b): int
    {
        return ($a->deprecated ? 1 : 0) . NameNormalizer::normalize($a->name) <=> ($b->deprecated ? 1 : 0) . NameNormalizer::normalize($b->name);
    }
}

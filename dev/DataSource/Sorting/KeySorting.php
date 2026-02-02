<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Sorting;

use BackedEnum;
use Override;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\Exception\TransliterationException;
use PrinsFrank\Transliteration\Exception\InvalidArgumentException;
use PrinsFrank\Transliteration\Exception\RecursionException;
use PrinsFrank\Transliteration\Exception\UnableToCreateTransliteratorException;

class KeySorting implements Sorting {
    /** @param class-string<BackedEnum> $enumFQN */
    public function __construct(
        private readonly string $enumFQN,
    ) {}

    /**
     * @throws InvalidArgumentException
     * @throws UnableToCreateTransliteratorException
     * @throws TransliterationException
     * @throws RecursionException
     */
    #[Override]
    public function __invoke(EnumCase $a, EnumCase $b): int {
        return ($a->deprecated ? 1 : 0) . $a->getKey($this->enumFQN) <=> ($b->deprecated ? 1 : 0) . $b->getKey($this->enumFQN);
    }
}

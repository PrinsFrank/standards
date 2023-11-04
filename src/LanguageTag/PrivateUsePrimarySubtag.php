<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

class PrivateUsePrimarySubtag
{
    private function __construct(
        public readonly string $subtag,
    ) {
    }

    public static function tryFrom(string $subtag): ?self
    {
        if (strlen($subtag) !== 3
            || str_starts_with($subtag, 'q')               === false
            || in_array($subtag[1], range('a', 'z'), true) === false
            || in_array($subtag[2], range('a', 'z'), true) === false) {
            return null;
        }

        return new self($subtag);
    }
}

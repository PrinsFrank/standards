<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

use PrinsFrank\Standards\InvalidArgumentException;

/**
 * @standard RFC5646
 * @source https://datatracker.ietf.org/doc/html/rfc5646
 *
 * @manually-updated
 */
class PrivateUsePrimarySubtag {
    /** @throws InvalidArgumentException */
    public function __construct(
        public readonly string $subtag,
    ) {
        if (self::isValid($this->subtag) === false) {
            throw new InvalidArgumentException('The supplied string "' . $this->subtag . '" is not a valid primary subtag');
        }
    }

    public static function tryFrom(string $subtag): ?self {
        try {
            return new self($subtag);
        } catch (InvalidArgumentException) {
            return null;
        }
    }

    private static function isValid(string $subtag): bool {
        return strlen($subtag) === 3
            && str_starts_with($subtag, 'q')
            && in_array($subtag[1], range('a', 'z'), true)
            && in_array($subtag[2], range('a', 'z'), true);
    }
}

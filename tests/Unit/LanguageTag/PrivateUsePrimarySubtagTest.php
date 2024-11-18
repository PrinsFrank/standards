<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\LanguageTag;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\LanguageTag\PrivateUsePrimarySubtag;

#[CoversClass(PrivateUsePrimarySubtag::class)]
class PrivateUsePrimarySubtagTest extends TestCase {
    /** @throws InvalidArgumentException */
    public function testConstructThrowsExceptionWhenInvalidTag(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The supplied string "0" is not a valid primary subtag');
        new PrivateUsePrimarySubtag('0');
    }

    /** @throws InvalidArgumentException */
    public function testTryFrom(): void {
        static::assertNull(PrivateUsePrimarySubtag::tryFrom('0'));
        static::assertEquals(new PrivateUsePrimarySubtag('qab'), PrivateUsePrimarySubtag::tryFrom('qab'));
    }
}

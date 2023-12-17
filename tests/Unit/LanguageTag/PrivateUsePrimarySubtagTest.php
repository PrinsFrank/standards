<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\LanguageTag;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\LanguageTag\PrivateUsePrimarySubtag;

/** @coversDefaultClass \PrinsFrank\Standards\LanguageTag\PrivateUsePrimarySubtag */
class PrivateUsePrimarySubtagTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::isValid
     */
    public function testConstructThrowsExceptionWhenInvalidTag(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('The supplied string "0" is not a valid primary subtag');
        new PrivateUsePrimarySubtag('0');
    }

    /**
     * @covers ::tryFrom
     * @covers ::isValid
     */
    public function testTryFrom(): void
    {
        static::assertNull(PrivateUsePrimarySubtag::tryFrom('0'));
        static::assertEquals(new PrivateUsePrimarySubtag('qab'), PrivateUsePrimarySubtag::tryFrom('qab'));
    }
}

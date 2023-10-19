<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\LanguageTag;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\LanguageTag\LanguageTag;

/** @coversDefaultClass \PrinsFrank\Standards\LanguageTag\LanguageTag */
class LanguageTagTest extends TestCase
{
    /**
     * @covers ::fromString
     * @covers ::tryFromString
     */
    public function testFromString(): void
    {
        // https://datatracker.ietf.org/doc/html/rfc5646#section-2.2.2
        static::assertEquals(LanguageTag::createNormal(), LanguageTag::fromString('zh-gan'));
        static::assertEquals(LanguageTag::createNormal(), LanguageTag::fromString('gan'));
        static::assertEquals(LanguageTag::createNormal(), LanguageTag::fromString('zh-yue'));
        static::assertEquals(LanguageTag::createNormal(LanguageAlpha3Terminology::Chinese), LanguageTag::fromString('yue'));
    }
}

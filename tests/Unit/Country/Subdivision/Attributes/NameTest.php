<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Subdivision\Attributes;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\Subdivision\Attributes\Name;
use PrinsFrank\Standards\Language\LanguageAlpha2;

/** @coversDefaultClass \PrinsFrank\Standards\Country\Subdivision\Attributes\Name */
class NameTest extends TestCase
{
    /** @covers ::__construct */
    public function testConstruct(): void
    {
        $name = new Name('foo', [LanguageAlpha2::English], 'bar', 'bop');
        static::assertSame('foo', $name->name);
        static::assertSame('bar', $name->romanizationSystem);
        static::assertSame('bop', $name->localVariant);
    }
}

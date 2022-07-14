<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\KeyNotFoundException;

/**
 * @coversDefaultClass \PrinsFrank\Standards\BackedEnum
 */
class BackedEnumTest extends TestCase
{
    /**
     * @covers ::tryFromKey
     */
    public function testTryFromKey(): void
    {
        static::assertNull(BackedEnum::tryFromKey(TestEnumBackedByString::class, 'BAR'));
        static::assertSame(TestEnumBackedByString::FOO, BackedEnum::tryFromKey(TestEnumBackedByString::class, 'FOO'));

        static::assertNull(BackedEnum::tryFromKey(TestEnumBackedByInt::class, 'BAR'));
        static::assertSame(TestEnumBackedByInt::FOO, BackedEnum::tryFromKey(TestEnumBackedByInt::class, 'FOO'));
    }

    /**
     * @covers ::fromKey
     */
    public function testFromKey(): void
    {
        static::assertSame(TestEnumBackedByString::FOO, BackedEnum::fromKey(TestEnumBackedByString::class, 'FOO'));
        static::assertSame(TestEnumBackedByInt::FOO, BackedEnum::fromKey(TestEnumBackedByInt::class, 'FOO'));
    }

    /**
     * @covers ::fromKey
     */
    public function testFromKeyThrowsExceptionNonExistingKey(): void
    {
        $this->expectException(KeyNotFoundException::class);
        $this->expectDeprecationMessage('Key "BAR" not found in "' . TestEnumBackedByString::class . '"');
        BackedEnum::fromKey(TestEnumBackedByString::class, 'BAR');
    }
}

enum TestEnumBackedByString: string
{
    case FOO = 'foo';
}

enum TestEnumBackedByInt: int
{
    case FOO = 42;
}

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
     * @covers ::names
     */
    public function testNames(): void
    {
        static::assertSame(
            BackedEnum::names(TestEnumBackedByString::class),
            ['FOO', 'FIZ'],
        );
        static::assertSame(
            BackedEnum::names(TestEnumBackedByInt::class),
            ['FOO', 'FIZ'],
        );
    }

    /**
     * @covers ::values
     */
    public function testValues(): void
    {
        static::assertSame(
            BackedEnum::values(TestEnumBackedByString::class),
            ['foo', 'fiz'],
        );
        static::assertSame(
            BackedEnum::values(TestEnumBackedByInt::class),
            [42, 43],
        );
    }

    /**
     * @covers ::toArray
     */
    public function testToArray(): void
    {
        static::assertSame(
            BackedEnum::toArray(TestEnumBackedByString::class),
            ['FOO' => 'foo', 'FIZ' => 'fiz'],
        );
        static::assertSame(
            BackedEnum::toArray(TestEnumBackedByInt::class),
            ['FOO' => 42, 'FIZ' => 43],
        );
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
    case FIZ = 'fiz';
}

enum TestEnumBackedByInt: int
{
    case FOO = 42;
    case FIZ = 43;
}

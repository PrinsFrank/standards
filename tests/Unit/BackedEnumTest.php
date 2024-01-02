<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\KeyNotFoundException;

/**
 * @coversDefaultClass \PrinsFrank\Standards\BackedEnum
 */
class BackedEnumTest extends TestCase
{
    /** @covers ::tryFromKey */
    public function testTryFromKey(): void
    {
        static::assertNull(BackedEnum::tryFromKey(TestEnumBackedByString::class, 'BAR'));
        static::assertSame(TestEnumBackedByString::FOO, BackedEnum::tryFromKey(TestEnumBackedByString::class, 'FOO'));

        static::assertNull(BackedEnum::tryFromKey(TestEnumBackedByInt::class, 'BAR'));
        static::assertSame(TestEnumBackedByInt::FOO, BackedEnum::tryFromKey(TestEnumBackedByInt::class, 'FOO'));
    }

    /** @covers ::tryFromKey */
    public function testTryFromKeyThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore-next-line as not everyone has PHPStan to tell them not to pass something else than an Enum FQN */
        BackedEnum::tryFromKey($testClass::class, 'foo');
    }

    /** @covers ::fromKey */
    public function testFromKey(): void
    {
        static::assertSame(TestEnumBackedByString::FOO, BackedEnum::fromKey(TestEnumBackedByString::class, 'FOO'));
        static::assertSame(TestEnumBackedByInt::FOO, BackedEnum::fromKey(TestEnumBackedByInt::class, 'FOO'));
    }

    /** @covers ::names */
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

    /** @covers ::names */
    public function testNamesThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore-next-line as not everyone has PHPStan to tell them not to pass something else than an Enum FQN */
        BackedEnum::names($testClass::class);
    }

    /** @covers ::values */
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

    /** @covers ::values */
    public function testValuesThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get values of backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore-next-line as not everyone has PHPStan to tell them not to pass something else than an Enum FQN */
        BackedEnum::values($testClass::class);
    }

    /** @covers ::toArray */
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

    /** @covers ::toArray */
    public function testToArrayThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get an array of key/value pairs for backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore-next-line as not everyone has PHPStan to tell them not to pass something else than an Enum FQN */
        BackedEnum::toArray($testClass::class);
    }

    /** @covers ::fromKey */
    public function testFromKeyThrowsExceptionNonExistingKey(): void
    {
        $this->expectException(KeyNotFoundException::class);
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

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\KeyNotFoundException;

#[CoversClass(BackedEnum::class)]
class BackedEnumTest extends TestCase
{
    /** @throws InvalidArgumentException */
    public function testTryFromKey(): void
    {
        static::assertNull(BackedEnum::tryFromKey(TestEnumBackedByString::class, 'BAR'));
        static::assertSame(TestEnumBackedByString::FOO, BackedEnum::tryFromKey(TestEnumBackedByString::class, 'FOO'));

        static::assertNull(BackedEnum::tryFromKey(TestEnumBackedByInt::class, 'BAR'));
        static::assertSame(TestEnumBackedByInt::FOO, BackedEnum::tryFromKey(TestEnumBackedByInt::class, 'FOO'));
    }

    public function testTryFromKeyThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore argument.type, argument.templateType, missingType.checkedException (as not everyone has PHPStan to tell them not to pass something else than an Enum FQN) */
        BackedEnum::tryFromKey($testClass::class, 'foo');
    }

    /** @throws InvalidArgumentException|KeyNotFoundException */
    public function testFromKey(): void
    {
        static::assertSame(TestEnumBackedByString::FOO, BackedEnum::fromKey(TestEnumBackedByString::class, 'FOO'));
        static::assertSame(TestEnumBackedByInt::FOO, BackedEnum::fromKey(TestEnumBackedByInt::class, 'FOO'));
    }

    /** @throws InvalidArgumentException */
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

    public function testNamesThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore argument.type, missingType.checkedException (as not everyone has PHPStan to tell them not to pass something else than an Enum FQN) */
        BackedEnum::names($testClass::class);
    }

    /** @throws InvalidArgumentException */
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

    public function testValuesThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get values of backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore argument.type, missingType.checkedException (as not everyone has PHPStan to tell them not to pass something else than an Enum FQN)*/
        BackedEnum::values($testClass::class);
    }

    /** @throws InvalidArgumentException */
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

    public function testToArrayThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get an array of key/value pairs for backedEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore argument.type, missingType.checkedException (as not everyone has PHPStan to tell them not to pass something else than an Enum FQN)*/
        BackedEnum::toArray($testClass::class);
    }

    /** @throws InvalidArgumentException|KeyNotFoundException */
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

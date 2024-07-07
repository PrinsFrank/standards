<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\UnitEnum;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\KeyNotFoundException;

#[CoversClass(UnitEnum::class)]
class UnitEnumTest extends TestCase
{
    /** @throws InvalidArgumentException */
    public function testTryFromKey(): void
    {
        static::assertNull(UnitEnum::tryFromKey(TestEnum::class, 'BAR'));
        static::assertSame(TestEnum::FOO, UnitEnum::tryFromKey(TestEnum::class, 'FOO'));
    }

    public function testTryFromKeyThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of unitEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore argument.type, argument.templateType, missingType.checkedException (as not everyone has PHPStan to tell them not to pass something else than an Enum FQN)*/
        UnitEnum::tryFromKey($testClass::class, 'foo');
    }

    /** @throws InvalidArgumentException|KeyNotFoundException */
    public function testFromKey(): void
    {
        static::assertSame(TestEnum::FOO, UnitEnum::fromKey(TestEnum::class, 'FOO'));
    }

    /** @throws InvalidArgumentException */
    public function testNames(): void
    {
        static::assertSame(
            UnitEnum::names(TestEnum::class),
            ['FOO', 'FIZ'],
        );
    }

    public function testNamesThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of unitEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore argument.type, missingType.checkedException (as not everyone has PHPStan to tell them not to pass something else than an Enum FQN)*/
        UnitEnum::names($testClass::class);
    }

    /** @throws InvalidArgumentException|KeyNotFoundException */
    public function testFromKeyThrowsExceptionNonExistingKey(): void
    {
        $this->expectException(KeyNotFoundException::class);
        UnitEnum::fromKey(TestEnum::class, 'BAR');
    }
}

enum TestEnum
{
    case FOO;
    case FIZ;
}

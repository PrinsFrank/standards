<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\UnitEnum;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\KeyNotFoundException;

/**
 * @coversDefaultClass \PrinsFrank\Standards\UnitEnum
 */
class UnitEnumTest extends TestCase
{
    /**
     * @covers ::tryFromKey
     *
     * @throws InvalidArgumentException
     */
    public function testTryFromKey(): void
    {
        static::assertNull(UnitEnum::tryFromKey(TestEnum::class, 'BAR'));
        static::assertSame(TestEnum::FOO, UnitEnum::tryFromKey(TestEnum::class, 'FOO'));
    }

    /** @covers ::tryFromKey */
    public function testTryFromKeyThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of unitEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore-next-line as not everyone has PHPStan to tell them not to pass something else than an Enum FQN */
        UnitEnum::tryFromKey($testClass::class, 'foo');
    }

    /**
     * @covers ::fromKey
     *
     * @throws InvalidArgumentException
     * @throws KeyNotFoundException
     */
    public function testFromKey(): void
    {
        static::assertSame(TestEnum::FOO, UnitEnum::fromKey(TestEnum::class, 'FOO'));
    }

    /**
     * @covers ::names
     *
     * @throws InvalidArgumentException
     */
    public function testNames(): void
    {
        static::assertSame(
            UnitEnum::names(TestEnum::class),
            ['FOO', 'FIZ'],
        );
    }

    /** @covers ::names */
    public function testNamesThrowsExceptionOnNonEnumValue(): void
    {
        $testClass = new class () {};

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('It is only possible to get names of unitEnums, "' . $testClass::class . '" provided');

        /** @phpstan-ignore-next-line as not everyone has PHPStan to tell them not to pass something else than an Enum FQN */
        UnitEnum::names($testClass::class);
    }

    /**
     * @covers ::fromKey
     *
     * @throws InvalidArgumentException
     * @throws KeyNotFoundException
     */
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

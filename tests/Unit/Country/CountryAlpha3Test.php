<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\CountryAlpha3
 */
class CountryAlpha3Test extends TestCase
{
    /**
     * @covers ::toCountryAlpha2
     */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryAlpha2();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryAlpha2', $case->name));
            }
        }
    }

    /**
     * @covers ::toCountryNumeric
     */
    public function testAllCasesCanBeConvertedToCountryNumeric(): void
    {
        $cases = CountryAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryNumeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryNumeric', $case->name));
            }
        }
    }

    /**
     * @covers ::toCountryName
     */
    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        $cases = CountryAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryName();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryName', $case->name));
            }
        }
    }

    /**
     * @covers ::lowerCaseValue
     */
    public function testLowerCaseValue(): void
    {
        static::assertSame('afg', CountryAlpha3::Afghanistan->lowerCaseValue());
    }

    /**
     * @covers ::isMemberOf
     */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore-next-line */
        CountryAlpha3::Netherlands->isMemberOf('foo');
    }

    /**
     * @covers ::isMemberOf
     */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryAlpha3::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryAlpha3::Netherlands->isMemberOf(EFTA::class));
    }

    /**
     * @covers ::getCountryCallingCodes
     */
    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha2) {
            static::assertNotEmpty($countryAlpha2->getCountryCallingCodes());
        }
    }
}

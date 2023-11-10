<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\CountryName
 */
class CountryNameTest extends TestCase
{
    /**
     * @covers ::toCountryAlpha2
     */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryName::cases();
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
     * @covers ::toCountryAlpha3
     */
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        $cases = CountryName::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryAlpha3();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryAlpha3', $case->name));
            }
        }
    }

    /**
     * @covers ::toCountryNumeric
     */
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        $cases = CountryName::cases();
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
     * @covers ::isMemberOf
     */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore-next-line */
        CountryName::Netherlands->isMemberOf('foo');
    }

    /**
     * @covers ::isMemberOf
     */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryName::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryName::Netherlands->isMemberOf(EFTA::class));
    }

    /**
     * @covers ::getCountryCallingCodes
     */
    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryName::cases() as $countryAlpha2) {
            static::assertNotEmpty($countryAlpha2->getCountryCallingCodes());
        }
    }

    /**
     * @covers ::getInternationalCallPrefix
     */
    public function testGetInternationalCallPrefix(): void
    {
        foreach (CountryName::cases() as $countryAlpha2) {
            $countryAlpha2->getInternationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use TypeError;
use ValueError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Country\CountryNumeric
 */
class CountryNumericTest extends TestCase
{
    /**
     * @covers ::toCountryAlpha2
     */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryNumeric::cases();
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
    public function testAllCasesCanBeConvertedToCountryAlpha3(): void
    {
        $cases = CountryNumeric::cases();
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
     * @covers ::toCountryName
     */
    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        $cases = CountryNumeric::cases();
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
     * @covers ::fromInt
     */
    public function testFromInt(): void
    {
        static::assertEquals(CountryNumeric::Albania, CountryNumeric::fromInt(8));
    }

    /**
     * @covers ::fromInt
     */
    public function testFromIntThrowsExceptionOnNonExistingValue(): void
    {
        $this->expectException(ValueError::class);
        static::assertNull(CountryNumeric::fromInt(1));
    }

    /**
     * @covers ::tryFromInt
     */
    public function testTryFromInt(): void
    {
        static::assertEquals(CountryNumeric::Albania, CountryNumeric::tryFromInt(8));
        static::assertNull(CountryNumeric::tryFromInt(1));
    }

    /**
     * @covers ::valueAsInt
     */
    public function testValueAsInt(): void
    {
        static::assertSame(4, CountryNumeric::Afghanistan->valueAsInt());
    }

    /**
     * @covers ::isMemberOf
     */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore-next-line */
        CountryNumeric::Netherlands->isMemberOf('foo');
    }

    /**
     * @covers ::isMemberOf
     */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryNumeric::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryNumeric::Netherlands->isMemberOf(EFTA::class));
    }

    /**
     * @covers ::getCountryCallingCodes
     */
    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            static::assertNotEmpty($countryNumeric->getCountryCallingCodes());
        }
    }

    /**
     * @covers ::getNationalCallPrefix
     */
    public function testGetNationalCallPrefix(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getNationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /**
     * @covers ::getInternationalCallPrefix
     */
    public function testGetInternationalCallPrefix(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getInternationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getFlagEmoji */
    public function testGetFlagEmoji(): void
    {
        static::assertSame('🇳🇱', CountryNumeric::Netherlands->getFlagEmoji());
    }

    /** @covers ::getCurrenciesAlpha3 */
    public function testGetCurrenciesAlpha3(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $currencies = $countryNumeric->getCurrenciesAlpha3();
            if (in_array($countryNumeric, [CountryNumeric::Antarctica, CountryNumeric::Palestine, CountryNumeric::South_Georgia_South_Sandwich_Islands], true)) {
                $this->addToAssertionCount(1);

                continue;
            }

            static::assertNotEmpty($currencies, 'No currencies for "' . $countryNumeric->name . '"');
        }
    }

    /** @covers ::getOfficialAndDeFactoLanguages */
    public function testGetOfficialAndDeFactoLanguages(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getOfficialAndDeFactoLanguages();

            $this->addToAssertionCount(1);
        }
    }
}

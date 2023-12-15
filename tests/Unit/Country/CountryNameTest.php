<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use TypeError;

/** @coversDefaultClass \PrinsFrank\Standards\Country\CountryName */
class CountryNameTest extends TestCase
{
    /** @covers ::toCountryAlpha2 */
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

    /** @covers ::toCountryAlpha3 */
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

    /** @covers ::toCountryNumeric */
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

    /** @covers ::isMemberOf */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore-next-line */
        CountryName::Netherlands->isMemberOf('foo');
    }

    /** @covers ::isMemberOf */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryName::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryName::Netherlands->isMemberOf(EFTA::class));
    }

    /** @covers ::getCountryCallingCodes */
    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryName::cases() as $countryName) {
            static::assertNotEmpty($countryName->getCountryCallingCodes());
        }
    }

    /** @covers ::getNationalCallPrefix */
    public function testGetNationalCallPrefix(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getNationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getInternationalCallPrefix */
    public function testGetInternationalCallPrefix(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getInternationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getFlagEmoji */
    public function testGetFlagEmoji(): void
    {
        static::assertSame('🇳🇱', CountryName::Netherlands->getFlagEmoji());
    }

    /** @covers ::getDecimalSeparator */
    public function testGetDecimalSeparator(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getDecimalSeparator();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getDigitGroupingSystem */
    public function testGetDigitGroupingSystem(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getDigitGroupingSystem();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getDigitGroupingIndicator */
    public function testGetDigitGroupingIndicator(): void
    {
        foreach (CountryName::cases() as $countryAlpha2) {
            $countryAlpha2->getDigitGroupingIndicator();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getDigitGroupingIndicator */
    public function testGetDigitGroupingIndicatorWithLanguage(): void
    {
        foreach (CountryName::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Terminology::cases() as $languageAlpha3Terminology) {
                $countryAlpha2->getDigitGroupingIndicator($languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::getCurrenciesAlpha3 */
    public function testGetCurrenciesAlpha3(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $currencies = $countryName->getCurrenciesAlpha3();
            if (in_array($countryName, [CountryName::Antarctica, CountryName::Palestine, CountryName::South_Georgia_South_Sandwich_Islands], true)) {
                $this->addToAssertionCount(1);

                continue;
            }

            static::assertNotEmpty($currencies, 'No currencies for "' . $countryName->name . '"');
        }
    }

    /** @covers ::getOfficialAndDeFactoLanguages */
    public function testGetOfficialAndDeFactoLanguages(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getOfficialAndDeFactoLanguages();

            $this->addToAssertionCount(1);
        }
    }
}

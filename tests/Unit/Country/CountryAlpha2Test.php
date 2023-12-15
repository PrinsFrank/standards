<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use TypeError;

/** @coversDefaultClass \PrinsFrank\Standards\Country\CountryAlpha2 */
class CountryAlpha2Test extends TestCase
{
    /** @covers ::toCountryAlpha3 */
    public function testAllCasesCanBeConvertedToCountryAlpha3(): void
    {
        $cases = CountryAlpha2::cases();
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
    public function testAllCasesCanBeConvertedToCountryNumeric(): void
    {
        $cases = CountryAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryNumeric();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryNumeric', $case->name));
            }
        }
    }

    /** @covers ::toCountryName */
    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        $cases = CountryAlpha2::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            try {
                $case->toCountryName();
            } catch (TypeError) {
                $this->fail(sprintf('Case %s could not be converted to CountryName', $case->name));
            }
        }
    }

    /** @covers ::lowerCaseValue */
    public function testLowerCaseValue(): void
    {
        static::assertSame('af', CountryAlpha2::Afghanistan->lowerCaseValue());
    }

    /** @covers ::isMemberOf */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore-next-line */
        CountryAlpha2::Netherlands->isMemberOf('foo');
    }

    /** @covers ::isMemberOf */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryAlpha2::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryAlpha2::Netherlands->isMemberOf(EFTA::class));
    }

    /** @covers ::getCountryCallingCodes */
    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            static::assertNotEmpty($countryAlpha2->getCountryCallingCodes());
        }
    }

    /** @covers ::getNationalCallPrefix */
    public function testGetNationalCallPrefix(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getNationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getInternationalCallPrefix */
    public function testGetInternationalCallPrefix(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getInternationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getFlagEmoji */
    public function testGetFlagEmoji(): void
    {
        static::assertSame('🇳🇱', CountryAlpha2::Netherlands->getFlagEmoji());
    }

    /** @covers ::getDecimalSeparator */
    public function testGetDecimalSeparator(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getDecimalSeparator();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getDecimalSeparator */
    public function testGetDecimalSeparatorWithLanguage(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Terminology::cases() as $languageAlpha3Terminology) {
                $countryAlpha2->getDecimalSeparator($languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::getDigitGroupingSystem */
    public function testGetDigitGroupingSystem(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getDigitGroupingSystem();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getDigitGroupingIndicator */
    public function testGetDigitGroupingIndicator(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getDigitGroupingIndicator();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getDigitGroupingIndicator */
    public function testGetDigitGroupingIndicatorWithLanguage(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Terminology::cases() as $languageAlpha3Terminology) {
                $countryAlpha2->getDigitGroupingIndicator($languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::getCurrenciesAlpha3 */
    public function testGetCurrenciesAlpha3(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $currencies = $countryAlpha2->getCurrenciesAlpha3();
            if (in_array($countryAlpha2, [CountryAlpha2::Antarctica, CountryAlpha2::Palestine, CountryAlpha2::South_Georgia_South_Sandwich_Islands], true)) {
                $this->addToAssertionCount(1);

                continue;
            }

            static::assertNotEmpty($currencies, 'No currencies for "' . $countryAlpha2->name . '"');
        }
    }

    /** @covers ::getOfficialAndDeFactoLanguages */
    public function testGetOfficialAndDeFactoLanguages(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getOfficialAndDeFactoLanguages();

            $this->addToAssertionCount(1);
        }
    }
}

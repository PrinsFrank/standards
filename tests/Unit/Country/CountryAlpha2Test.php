<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
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

    /** @covers ::getNameInLanguage */
    public function testGetNameInLanguage(): void
    {
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha3Extensive::Dutch));

        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha2::Hungarian));
        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha3Terminology::Hungarian));
        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha3Bibliographic::Hungarian));
        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha3Extensive::Hungarian));
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

    /** @covers ::formatNumber */
    public function testFormatNumber(): void
    {
        static::assertSame('42,42', CountryAlpha2::Netherlands->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42,42', CountryAlpha2::Netherlands->formatNumber(42.42, LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('42,42', CountryAlpha2::Netherlands->formatNumber(42.42, LanguageAlpha3Bibliographic::Dutch_Flemish));

        static::assertSame('42,42', CountryAlpha2::Netherlands->formatNumber(42.42, LanguageAlpha2::English));
        static::assertSame('42,42', CountryAlpha2::Netherlands->formatNumber(42.42, LanguageAlpha3Terminology::English));
        static::assertSame('42,42', CountryAlpha2::Netherlands->formatNumber(42.42, LanguageAlpha3Bibliographic::English));

        static::assertSame('42,42', CountryAlpha2::United_States_of_America->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42,42', CountryAlpha2::United_States_of_America->formatNumber(42.42, LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('42,42', CountryAlpha2::United_States_of_America->formatNumber(42.42, LanguageAlpha3Bibliographic::Dutch_Flemish));

        static::assertSame('42.42', CountryAlpha2::United_States_of_America->formatNumber(42.42, LanguageAlpha2::English));
        static::assertSame('42.42', CountryAlpha2::United_States_of_America->formatNumber(42.42, LanguageAlpha3Terminology::English));
        static::assertSame('42.42', CountryAlpha2::United_States_of_America->formatNumber(42.42, LanguageAlpha3Bibliographic::English));
    }
}

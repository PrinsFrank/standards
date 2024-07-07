<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use TypeError;
use ValueError;

#[CoversClass(CountryNumeric::class)]
class CountryNumericTest extends TestCase
{
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        foreach (CountryNumeric::cases() as $case) {
            $case->toCountryAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    public function testAllCasesCanBeConvertedToCountryAlpha3(): void
    {
        foreach (CountryNumeric::cases() as $case) {
            $case->toCountryAlpha3();

            $this->addToAssertionCount(1);
        }
    }

    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        foreach (CountryNumeric::cases() as $case) {
            $case->toCountryName();

            $this->addToAssertionCount(1);
        }
    }

    /** @throws TypeError|ValueError */
    public function testFromInt(): void
    {
        static::assertEquals(CountryNumeric::Albania, CountryNumeric::fromInt(8));
    }

    /** @throws TypeError|ValueError */
    public function testFromIntThrowsExceptionOnNonExistingValue(): void
    {
        $this->expectException(ValueError::class);
        CountryNumeric::fromInt(1);
    }

    public function testTryFromInt(): void
    {
        static::assertEquals(CountryNumeric::Albania, CountryNumeric::tryFromInt(8));
        static::assertNull(CountryNumeric::tryFromInt(1));
    }

    public function testValueAsInt(): void
    {
        static::assertSame(4, CountryNumeric::Afghanistan->valueAsInt());
    }

    public function testGetNameInLanguage(): void
    {
        static::assertSame('Nederland', CountryNumeric::Netherlands->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederland', CountryNumeric::Netherlands->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('Nederland', CountryNumeric::Netherlands->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederland', CountryNumeric::Netherlands->getNameInLanguage(LanguageAlpha3Extensive::Dutch));

        static::assertSame('Magyarország', CountryNumeric::Hungary->getNameInLanguage(LanguageAlpha2::Hungarian));
        static::assertSame('Magyarország', CountryNumeric::Hungary->getNameInLanguage(LanguageAlpha3Terminology::Hungarian));
        static::assertSame('Magyarország', CountryNumeric::Hungary->getNameInLanguage(LanguageAlpha3Bibliographic::Hungarian));
        static::assertSame('Magyarország', CountryNumeric::Hungary->getNameInLanguage(LanguageAlpha3Extensive::Hungarian));
    }

    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore argument.type, missingType.checkedException */
        CountryNumeric::Netherlands->isMemberOf('foo');
    }

    /** @throws InvalidArgumentException */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryNumeric::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryNumeric::Netherlands->isMemberOf(EFTA::class));
    }

    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            static::assertNotEmpty($countryNumeric->getCountryCallingCodes());
        }
    }

    public function testGetNationalCallPrefix(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getNationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    public function testGetInternationalCallPrefix(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getInternationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    public function testGetFlagEmoji(): void
    {
        static::assertSame('🇳🇱', CountryNumeric::Netherlands->getFlagEmoji());
    }

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

    public function testGetOfficialAndDeFactoLanguages(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getOfficialAndDeFactoLanguages();

            $this->addToAssertionCount(1);
        }
    }

    public function testGetCountryCodeTLD(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getCountryCodeTLD();

            $this->addToAssertionCount(1);
        }
    }

    public function testFormatNumber(): void
    {
        static::assertSame('42,42', CountryNumeric::Netherlands->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42,42', CountryNumeric::Netherlands->formatNumber(42.42, LanguageAlpha2::English));
        static::assertSame('42,42', CountryNumeric::United_States_of_America->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42.42', CountryNumeric::United_States_of_America->formatNumber(42.42, LanguageAlpha2::English));
    }

    public function testGetSubdivisions(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getSubdivisions();

            $this->addToAssertionCount(1);
        }
        static::assertSame(
            [
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Bonaire,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Saba,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Sint_Eustatius
            ],
            CountryNumeric::Bonaire_Sint_Eustatius_and_Saba->getSubdivisions(),
        );
    }

    public function testGetSubCountries(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getSubCountries();
        }
        static::assertSame(
            [
                CountryNumeric::Aruba,
                CountryNumeric::Curacao,
                CountryNumeric::Sint_Maarten_Dutch_part,
                CountryNumeric::Bonaire_Sint_Eustatius_and_Saba,
            ],
            CountryNumeric::Netherlands->getSubCountries(),
        );
        static::assertSame([], CountryNumeric::Aruba->getSubCountries());
    }

    public function testGetParentCountry(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            $countryNumeric->getParentCountry();
        }
        static::assertNull(CountryNumeric::Netherlands->getParentCountry());
        static::assertSame(CountryNumeric::Netherlands, CountryNumeric::Aruba->getParentCountry());
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

/** @coversDefaultClass \PrinsFrank\Standards\Country\CountryName */
class CountryNameTest extends TestCase
{
    /** @covers ::toCountryAlpha2 */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        foreach (CountryName::cases() as $case) {
            $case->toCountryAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toCountryAlpha3 */
    public function testAllCasesCanBeConvertedToISO3166Alpha3(): void
    {
        foreach (CountryName::cases() as $case) {
            $case->toCountryAlpha3();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toCountryNumeric */
    public function testAllCasesCanBeConvertedToISO3166Numeric(): void
    {
        foreach (CountryName::cases() as $case) {
            $case->toCountryNumeric();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getNameInLanguage */
    public function testGetNameInLanguage(): void
    {
        static::assertSame('Nederland', CountryName::Netherlands->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederland', CountryName::Netherlands->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('Nederland', CountryName::Netherlands->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederland', CountryName::Netherlands->getNameInLanguage(LanguageAlpha3Extensive::Dutch));

        static::assertSame('Magyarország', CountryName::Hungary->getNameInLanguage(LanguageAlpha2::Hungarian));
        static::assertSame('Magyarország', CountryName::Hungary->getNameInLanguage(LanguageAlpha3Terminology::Hungarian));
        static::assertSame('Magyarország', CountryName::Hungary->getNameInLanguage(LanguageAlpha3Bibliographic::Hungarian));
        static::assertSame('Magyarország', CountryName::Hungary->getNameInLanguage(LanguageAlpha3Extensive::Hungarian));
    }

    /** @covers ::isMemberOf */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore argument.type, missingType.checkedException */
        CountryName::Netherlands->isMemberOf('foo');
    }

    /**
     * @covers ::isMemberOf
     *
     * @throws InvalidArgumentException
     */
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

    /** @covers ::getSubdivisions */
    public function testGetSubdivisions(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getSubdivisions();

            $this->addToAssertionCount(1);
        }
        static::assertSame(
            [
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Bonaire,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Saba,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Sint_Eustatius
            ],
            CountryName::Bonaire_Sint_Eustatius_and_Saba->getSubdivisions(),
        );
    }

    /** @covers ::getSubCountries */
    public function testGetSubCountries(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getSubCountries();
        }
        static::assertSame(
            [
                CountryName::Aruba,
                CountryName::Curacao,
                CountryName::Sint_Maarten_Dutch_part,
                CountryName::Bonaire_Sint_Eustatius_and_Saba,
            ],
            CountryName::Netherlands->getSubCountries(),
        );
        static::assertSame([], CountryName::Aruba->getSubCountries());
    }

    /** @covers ::getParentCountry */
    public function testGetParentCountry(): void
    {
        foreach (CountryName::cases() as $countryName) {
            $countryName->getParentCountry();
        }
        static::assertNull(CountryName::Netherlands->getParentCountry());
        static::assertSame(CountryName::Netherlands, CountryName::Aruba->getParentCountry());
    }
}

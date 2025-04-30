<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Name\NameOrder;

#[CoversClass(CountryAlpha3::class)]
class CountryAlpha3Test extends TestCase {
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void {
        foreach (CountryAlpha3::cases() as $case) {
            $case->toCountryAlpha2();
        }
    }

    public function testAllCasesCanBeConvertedToCountryNumeric(): void {
        foreach (CountryAlpha3::cases() as $case) {
            $case->toCountryNumeric();
        }
    }

    public function testAllCasesCanBeConvertedToCountryName(): void {
        foreach (CountryAlpha3::cases() as $case) {
            $case->toCountryName();
        }
    }

    public function testLowerCaseValue(): void {
        static::assertSame('afg', CountryAlpha3::Afghanistan->lowerCaseValue());
    }

    public function testGetNameInLanguage(): void {
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha3Extensive::Dutch));

        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha2::Hungarian));
        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha3Terminology::Hungarian));
        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha3Bibliographic::Hungarian));
        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha3Extensive::Hungarian));
    }

    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore argument.type, missingType.checkedException */
        CountryAlpha3::Netherlands->isMemberOf('foo');
    }

    /** @throws InvalidArgumentException */
    public function testIsMemberOf(): void {
        static::assertTrue(CountryAlpha3::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryAlpha3::Netherlands->isMemberOf(EFTA::class));
    }

    public function testGetCountryCallingCodes(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            static::assertNotEmpty($countryAlpha3->getCountryCallingCodes());
        }
    }

    public function testGetNationalCallPrefix(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getNationalCallPrefix();
        }
    }

    public function testGetInternationalCallPrefix(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getInternationalCallPrefix();
        }
    }

    public function testGetFlagEmoji(): void {
        static::assertSame('🇳🇱', CountryAlpha3::Netherlands->getFlagEmoji());
    }

    public function testGetCurrenciesAlpha3(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $currencies = $countryAlpha3->getCurrenciesAlpha3();
            if (in_array($countryAlpha3, [CountryAlpha3::Antarctica, CountryAlpha3::Palestine, CountryAlpha3::South_Georgia_South_Sandwich_Islands], true)) {
                continue;
            }

            static::assertNotEmpty($currencies, 'No currencies for "' . $countryAlpha3->name . '"');
        }
    }

    public function testGetOfficialAndDeFactoLanguages(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha2) {
            $countryAlpha2->getOfficialAndDeFactoLanguages();
        }
    }

    public function testGetCountryCodeTLD(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getCountryCodeTLD();
        }
    }

    public function testFormatNumber(): void {
        static::assertSame('42,42', CountryAlpha3::Netherlands->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42,42', CountryAlpha3::Netherlands->formatNumber(42.42, LanguageAlpha2::English));
        static::assertSame('42,42', CountryAlpha3::United_States_of_America->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42.42', CountryAlpha3::United_States_of_America->formatNumber(42.42, LanguageAlpha2::English));
    }

    public function testGetSubdivisions(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getSubdivisions();
        }
        static::assertSame(
            [
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Bonaire,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Saba,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Sint_Eustatius
            ],
            CountryAlpha3::Bonaire_Sint_Eustatius_and_Saba->getSubdivisions(),
        );
    }

    public function testGetSubCountries(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getSubCountries();
        }
        static::assertSame(
            [
                CountryAlpha3::Aruba,
                CountryAlpha3::Curacao,
                CountryAlpha3::Sint_Maarten_Dutch_part,
                CountryAlpha3::Bonaire_Sint_Eustatius_and_Saba,
            ],
            CountryAlpha3::Netherlands->getSubCountries(),
        );
        static::assertSame([], CountryAlpha3::Aruba->getSubCountries());
    }

    public function testGetParentCountry(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getParentCountry();
        }
        static::assertNull(CountryAlpha3::Netherlands->getParentCountry());
        static::assertSame(CountryAlpha3::Netherlands, CountryAlpha3::Aruba->getParentCountry());
    }

    public function testGetMostCommonNameOrder(): void {
        foreach (CountryAlpha3::cases() as $countryAlpha2) {
            $countryAlpha2->getMostCommonNameOrder();
        }
        static::assertSame(NameOrder::Western, CountryAlpha3::Netherlands->getMostCommonNameOrder());
        static::assertSame(NameOrder::Eastern, CountryAlpha3::Japan->getMostCommonNameOrder());
    }

    public function testIsInAssignedUserSpace(): void {
        static::assertFalse(CountryAlpha3::isInUserAssignedSpace(''));
        static::assertFalse(CountryAlpha3::isInUserAssignedSpace('AA'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('AAA'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('AAZ'));
        static::assertFalse(CountryAlpha3::isInUserAssignedSpace('BAA'));
        static::assertFalse(CountryAlpha3::isInUserAssignedSpace('QLZ'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('QMA'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('QZZ'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('XAA'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('XZZ'));
        static::assertFalse(CountryAlpha3::isInUserAssignedSpace('ZYZ'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('ZZA'));
        static::assertTrue(CountryAlpha3::isInUserAssignedSpace('ZZZ'));
    }
}

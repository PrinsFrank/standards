<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Name\NameOrder;

#[CoversClass(CountryAlpha2::class)]
class CountryAlpha2Test extends TestCase {
    public function testAllCasesCanBeConvertedToCountryAlpha3(): void {
        foreach (CountryAlpha2::cases() as $case) {
            $case->toCountryAlpha3();
        }
    }

    public function testAllCasesCanBeConvertedToCountryNumeric(): void {
        foreach (CountryAlpha2::cases() as $case) {
            $case->toCountryNumeric();
        }
    }

    public function testAllCasesCanBeConvertedToCountryName(): void {
        foreach (CountryAlpha2::cases() as $case) {
            $case->toCountryName();
        }
    }

    public function testLowerCaseValue(): void {
        static::assertSame('af', CountryAlpha2::Afghanistan->lowerCaseValue());
    }

    public function testGetNameInLanguage(): void {
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha2::Netherlands->getNameInLanguage(LanguageAlpha3Extensive::Dutch));

        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha2::Hungarian));
        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha3Terminology::Hungarian));
        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha3Bibliographic::Hungarian));
        static::assertSame('Magyarország', CountryAlpha2::Hungary->getNameInLanguage(LanguageAlpha3Extensive::Hungarian));
    }

    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore argument.type, missingType.checkedException */
        CountryAlpha2::Netherlands->isMemberOf('foo');
    }

    /** @throws InvalidArgumentException */
    public function testIsMemberOf(): void {
        static::assertTrue(CountryAlpha2::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryAlpha2::Netherlands->isMemberOf(EFTA::class));
    }

    public function testGetCountryCallingCodes(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            static::assertNotEmpty($countryAlpha2->getCountryCallingCodes());
        }
    }

    public function testGetNationalCallPrefix(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getNationalCallPrefix();
        }
    }

    public function testGetInternationalCallPrefix(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getInternationalCallPrefix();
        }
    }

    public function testGetFlagEmoji(): void {
        static::assertSame('🇳🇱', CountryAlpha2::Netherlands->getFlagEmoji());
    }

    public function testGetCurrenciesAlpha3(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $currencies = $countryAlpha2->getCurrenciesAlpha3();
            if (in_array($countryAlpha2, [CountryAlpha2::Antarctica, CountryAlpha2::Palestine, CountryAlpha2::South_Georgia_South_Sandwich_Islands], true)) {
                continue;
            }

            static::assertNotEmpty($currencies, 'No currencies for "' . $countryAlpha2->name . '"');
        }
    }

    public function testGetOfficialAndDeFactoLanguages(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            /** @phpstan-ignore method.resultUnused */
            $countryAlpha2->getOfficialAndDeFactoLanguages();
        }
    }

    public function testGetCountryCodeTLD(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            /** @phpstan-ignore method.resultUnused */
            $countryAlpha2->getCountryCodeTLD();
        }
    }

    public function testFormatNumber(): void {
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

    public function testGetSubdivisions(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            /** @phpstan-ignore method.resultUnused */
            $countryAlpha2->getSubdivisions();
        }
        static::assertSame(
            [
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Bonaire,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Saba,
                CountrySubdivision::Caribbean_Netherlands_special_municipality_Sint_Eustatius
            ],
            CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba->getSubdivisions(),
        );
    }

    public function testGetSubCountries(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getSubCountries();
        }
        static::assertSame(
            [
                CountryAlpha2::Aruba,
                CountryAlpha2::Curacao,
                CountryAlpha2::Sint_Maarten_Dutch_part,
                CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba,
            ],
            CountryAlpha2::Netherlands->getSubCountries(),
        );
        static::assertSame([], CountryAlpha2::Aruba->getSubCountries());
    }

    public function testGetParentCountry(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            $countryAlpha2->getParentCountry();
        }
        static::assertNull(CountryAlpha2::Netherlands->getParentCountry());
        static::assertSame(CountryAlpha2::Netherlands, CountryAlpha2::Aruba->getParentCountry());
    }

    public function testGetMostCommonNameOrder(): void {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            /** @phpstan-ignore method.resultUnused */
            $countryAlpha2->getMostCommonNameOrder();
        }
        static::assertSame(NameOrder::Western, CountryAlpha2::Netherlands->getMostCommonNameOrder());
        static::assertSame(NameOrder::Eastern, CountryAlpha2::Japan->getMostCommonNameOrder());
    }

    public function testIsInAssignedUserSpace(): void {
        static::assertFalse(CountryAlpha2::isInUserAssignedSpace(''));
        static::assertTrue(CountryAlpha2::isInUserAssignedSpace('AA'));
        static::assertFalse(CountryAlpha2::isInUserAssignedSpace('QL'));
        static::assertTrue(CountryAlpha2::isInUserAssignedSpace('QM'));
        static::assertTrue(CountryAlpha2::isInUserAssignedSpace('QZ'));
        static::assertTrue(CountryAlpha2::isInUserAssignedSpace('XA'));
        static::assertTrue(CountryAlpha2::isInUserAssignedSpace('XZ'));
        static::assertTrue(CountryAlpha2::isInUserAssignedSpace('ZZ'));
        static::assertFalse(CountryAlpha2::isInUserAssignedSpace('AAA'));
        static::assertFalse(CountryAlpha2::isInUserAssignedSpace('ZZZ'));
    }
}

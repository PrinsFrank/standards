<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\Groups\EFTA;
use PrinsFrank\Standards\Country\Groups\EU;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

/** @coversDefaultClass \PrinsFrank\Standards\Country\CountryAlpha3 */
class CountryAlpha3Test extends TestCase
{
    /** @covers ::toCountryAlpha2 */
    public function testAllCasesCanBeConvertedToCountryAlpha2(): void
    {
        $cases = CountryAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toCountryAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toCountryNumeric */
    public function testAllCasesCanBeConvertedToCountryNumeric(): void
    {
        $cases = CountryAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toCountryNumeric();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toCountryName */
    public function testAllCasesCanBeConvertedToCountryName(): void
    {
        $cases = CountryAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toCountryName();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::lowerCaseValue */
    public function testLowerCaseValue(): void
    {
        static::assertSame('afg', CountryAlpha3::Afghanistan->lowerCaseValue());
    }

    /** @covers ::getNameInLanguage */
    public function testGetNameInLanguage(): void
    {
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha2::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha3Terminology::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha3Bibliographic::Dutch_Flemish));
        static::assertSame('Nederland', CountryAlpha3::Netherlands->getNameInLanguage(LanguageAlpha3Extensive::Dutch));

        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha2::Hungarian));
        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha3Terminology::Hungarian));
        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha3Bibliographic::Hungarian));
        static::assertSame('Magyarország', CountryAlpha3::Hungary->getNameInLanguage(LanguageAlpha3Extensive::Hungarian));
    }

    /** @covers ::isMemberOf */
    public function testIsMemberOfThrowsExceptionIfInvalidFQNSupplied(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "foo" given');
        /** @phpstan-ignore-next-line */
        CountryAlpha3::Netherlands->isMemberOf('foo');
    }

    /**
     * @covers ::isMemberOf
     * @throws InvalidArgumentException
     */
    public function testIsMemberOf(): void
    {
        static::assertTrue(CountryAlpha3::Netherlands->isMemberOf(EU::class));
        static::assertFalse(CountryAlpha3::Netherlands->isMemberOf(EFTA::class));
    }

    /** @covers ::getCountryCallingCodes */
    public function testGetCountryCallingCodes(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            static::assertNotEmpty($countryAlpha3->getCountryCallingCodes());
        }
    }

    /** @covers ::getNationalCallPrefix */
    public function testGetNationalCallPrefix(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getNationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getInternationalCallPrefix */
    public function testGetInternationalCallPrefix(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $countryAlpha3->getInternationalCallPrefix();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getFlagEmoji */
    public function testGetFlagEmoji(): void
    {
        static::assertSame('🇳🇱', CountryAlpha3::Netherlands->getFlagEmoji());
    }

    /** @covers ::getCurrenciesAlpha3 */
    public function testGetCurrenciesAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            $currencies = $countryAlpha3->getCurrenciesAlpha3();
            if (in_array($countryAlpha3, [CountryAlpha3::Antarctica, CountryAlpha3::Palestine, CountryAlpha3::South_Georgia_South_Sandwich_Islands], true)) {
                $this->addToAssertionCount(1);

                continue;
            }

            static::assertNotEmpty($currencies, 'No currencies for "' . $countryAlpha3->name . '"');
        }
    }

    /** @covers ::getOfficialAndDeFactoLanguages */
    public function testGetOfficialAndDeFactoLanguages(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha2) {
            $countryAlpha2->getOfficialAndDeFactoLanguages();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::formatNumber */
    public function testFormatNumber(): void
    {
        static::assertSame('42,42', CountryAlpha3::Netherlands->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42,42', CountryAlpha3::Netherlands->formatNumber(42.42, LanguageAlpha2::English));
        static::assertSame('42,42', CountryAlpha3::United_States_of_America->formatNumber(42.42, LanguageAlpha2::Dutch_Flemish));
        static::assertSame('42.42', CountryAlpha3::United_States_of_America->formatNumber(42.42, LanguageAlpha2::English));
    }
}

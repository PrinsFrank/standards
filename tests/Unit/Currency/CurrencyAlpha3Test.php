<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use TypeError;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencyAlpha3
 */
class CurrencyAlpha3Test extends TestCase
{
    /** @covers ::toCurrencyNumeric */
    public function testAllCasesCanBeConvertedToCurrencyNumeric(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toCurrencyNumeric();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toCurrencyName */
    public function testAllCasesCanBeConvertedToCurrencyName(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toCurrencyName();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getSymbol */
    public function testAllCasesHaveAccessToSymbolOrNull(): void
    {
        $cases = CurrencyAlpha3::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->getSymbol();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::lowerCaseValue */
    public function testLowerCaseValue(): void
    {
        static::assertSame('xua', CurrencyAlpha3::ADB_Unit_of_Account->lowerCaseValue());
    }

    /** @covers ::getMinorUnits */
    public function testGetMinorUnits(): void
    {
        foreach (CurrencyAlpha3::cases() as $currencyAlpha3) {
            $currencyAlpha3->getMinorUnits();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getCountriesAlpha2 */
    public function testGetCountriesAlpha2(): void
    {
        foreach (CurrencyAlpha3::cases() as $currencyAlpha3) {
            $currencyAlpha3->getCountriesAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::format */
    public function testFormat(): void
    {
        static::assertSame('€ 42,42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha2::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Bibliographic::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Terminology::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Terminology::Dutch_Flemish, CountryAlpha3::Netherlands));
        static::assertSame('€ 42,42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Terminology::Dutch_Flemish, CountryNumeric::Netherlands));

        static::assertSame('€42.42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha2::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Bibliographic::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Terminology::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Terminology::English, CountryAlpha3::Netherlands));
        static::assertSame('€42.42', CurrencyAlpha3::Euro->format(42.42, LanguageAlpha3Terminology::English, CountryNumeric::Netherlands));
    }
}

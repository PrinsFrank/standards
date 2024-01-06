<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Currency\CurrencyName;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Currency\CurrencyName
 */
class CurrencyNameTest extends TestCase
{
    /** @covers ::toCurrencyNumeric */
    public function testAllCasesCanBeConvertedToCurrencyNumeric(): void
    {
        foreach (CurrencyName::cases() as $case) {
            $case->toCurrencyNumeric();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getSymbol */
    public function testAllCasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyName::cases() as $case) {
            $case->getSymbol();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::toCurrencyAlpha3 */
    public function testAllCasesCanBeConvertedToCurrencyAlpha3(): void
    {
        foreach (CurrencyName::cases() as $case) {
            $case->toCurrencyAlpha3();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getMinorUnits */
    public function testGetMinorUnits(): void
    {
        foreach (CurrencyName::cases() as $currencyAlpha3) {
            $currencyAlpha3->getMinorUnits();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getCountriesAlpha2 */
    public function testGetCountriesAlpha2(): void
    {
        foreach (CurrencyName::cases() as $currencyAlpha3) {
            $currencyAlpha3->getCountriesAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::format */
    public function testFormat(): void
    {
        static::assertSame('€ 42,42', CurrencyName::Euro->format(42.42, LanguageAlpha2::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyName::Euro->format(42.42, LanguageAlpha3Bibliographic::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyName::Euro->format(42.42, LanguageAlpha3Terminology::Dutch_Flemish, CountryAlpha2::Netherlands));

        static::assertSame('€42.42', CurrencyName::Euro->format(42.42, LanguageAlpha2::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyName::Euro->format(42.42, LanguageAlpha3Bibliographic::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyName::Euro->format(42.42, LanguageAlpha3Terminology::English, CountryAlpha2::Netherlands));
    }
}

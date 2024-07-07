<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Currency;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Currency\CurrencyNumeric;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use TypeError;
use ValueError;

#[CoversClass(CurrencyNumeric::class)]
class CurrencyNumericTest extends TestCase
{
    public function testAllCasesCanBeConvertedToCurrencyAlpha3(): void
    {
        foreach (CurrencyNumeric::cases() as $case) {
            $case->toCurrencyAlpha3();

            $this->addToAssertionCount(1);
        }
    }

    public function testAllCasesCanBeConvertedToCurrencyName(): void
    {
        foreach (CurrencyNumeric::cases() as $case) {
            $case->toCurrencyName();

            $this->addToAssertionCount(1);
        }
    }

    public function testAllCasesHaveAccessToSymbolOrNull(): void
    {
        foreach (CurrencyNumeric::cases() as $case) {
            $case->getSymbol();

            $this->addToAssertionCount(1);
        }
    }

    /** @throws TypeError|ValueError */
    public function testFromInt(): void
    {
        static::assertEquals(CurrencyNumeric::Lek, CurrencyNumeric::fromInt(8));
    }

    /** @throws ValueError|TypeError */
    public function testFromIntThrowsExceptionOnNonExistingValue(): void
    {
        $this->expectException(ValueError::class);
        CurrencyNumeric::fromInt(1);
    }

    public function testTryFromInt(): void
    {
        static::assertEquals(CurrencyNumeric::Lek, CurrencyNumeric::tryFromInt(8));
        static::assertNull(CurrencyNumeric::tryFromInt(1));
    }

    public function testValueAsInt(): void
    {
        static::assertSame(965, CurrencyNumeric::ADB_Unit_of_Account->valueAsInt());
    }

    public function testGetMinorUnits(): void
    {
        foreach (CurrencyNumeric::cases() as $currencyAlpha3) {
            $currencyAlpha3->getMinorUnits();

            $this->addToAssertionCount(1);
        }
    }

    public function testGetCountriesAlpha2(): void
    {
        foreach (CurrencyNumeric::cases() as $currencyAlpha3) {
            $currencyAlpha3->getCountriesAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    public function testFormat(): void
    {
        static::assertSame('€ 42,42', CurrencyNumeric::Euro->format(42.42, LanguageAlpha2::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyNumeric::Euro->format(42.42, LanguageAlpha3Bibliographic::Dutch_Flemish, CountryAlpha2::Netherlands));
        static::assertSame('€ 42,42', CurrencyNumeric::Euro->format(42.42, LanguageAlpha3Terminology::Dutch_Flemish, CountryAlpha2::Netherlands));

        static::assertSame('€42.42', CurrencyNumeric::Euro->format(42.42, LanguageAlpha2::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyNumeric::Euro->format(42.42, LanguageAlpha3Bibliographic::English, CountryAlpha2::Netherlands));
        static::assertSame('€42.42', CurrencyNumeric::Euro->format(42.42, LanguageAlpha3Terminology::English, CountryAlpha2::Netherlands));
    }
}

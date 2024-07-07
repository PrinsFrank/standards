<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\InternationalCallPrefix;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\InternationalCallPrefix\InternationalCallPrefix;

#[CoversClass(InternationalCallPrefix::class)]
class InternationalCallPrefixTest extends TestCase
{
    public function testForCountryAlpha2(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            InternationalCallPrefix::forCountry($countryAlpha2);

            $this->addToAssertionCount(1);
        }
    }

    public function testForCountryAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            InternationalCallPrefix::forCountry($countryAlpha3);

            $this->addToAssertionCount(1);
        }
    }

    public function testForCountryNumeric(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            InternationalCallPrefix::forCountry($countryNumeric);

            $this->addToAssertionCount(1);
        }
    }

    public function testForCountryName(): void
    {
        foreach (CountryName::cases() as $countryName) {
            InternationalCallPrefix::forCountry($countryName);

            $this->addToAssertionCount(1);
        }
    }

    public function testGetCountriesAlpha2(): void
    {
        foreach (InternationalCallPrefix::cases() as $internationalCallPrefix) {
            $countriesAlpha2 = $internationalCallPrefix->getCountriesAlpha2();
            if ($internationalCallPrefix === InternationalCallPrefix::_119) {
                continue; // Deprecated international call prefix
            }

            static::assertNotEmpty($countriesAlpha2);
        }
    }
}

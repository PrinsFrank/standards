<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\NationalCallPrefix;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\NationalCallPrefix\NationalCallPrefix;

#[CoversClass(NationalCallPrefix::class)]
class NationalCallPrefixTest extends TestCase
{
    public function testForCountryAlpha2(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            NationalCallPrefix::forCountry($countryAlpha2);

            $this->addToAssertionCount(1);
        }
    }

    public function testForCountryAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            NationalCallPrefix::forCountry($countryAlpha3);

            $this->addToAssertionCount(1);
        }
    }

    public function testForCountryName(): void
    {
        foreach (CountryName::cases() as $countryName) {
            NationalCallPrefix::forCountry($countryName);

            $this->addToAssertionCount(1);
        }
    }

    public function testForCountryNumeric(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            NationalCallPrefix::forCountry($countryNumeric);

            $this->addToAssertionCount(1);
        }
    }
}

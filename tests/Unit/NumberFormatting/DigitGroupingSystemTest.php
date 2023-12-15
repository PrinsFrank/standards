<?php
declare(strict_types=1);

namespace NumberFormatting;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\NumberFormatting\DigitGroupingSystem;

/** @coversDefaultClass \PrinsFrank\Standards\NumberFormatting\DigitGroupingSystem */
class DigitGroupingSystemTest extends TestCase
{
    /** @covers ::forCountry */
    public function testForCountryAlpha2(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            DigitGroupingSystem::forCountry($countryAlpha2);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            DigitGroupingSystem::forCountry($countryAlpha3);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryName(): void
    {
        foreach (CountryName::cases() as $countryName) {
            DigitGroupingSystem::forCountry($countryName);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryNumeric(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            DigitGroupingSystem::forCountry($countryNumeric);

            $this->addToAssertionCount(1);
        }
    }
}

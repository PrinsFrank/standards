<?php
declare(strict_types=1);

namespace DecimalSeparator;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\DecimalSeparator\DecimalSeparator;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

/** @coversDefaultClass \PrinsFrank\Standards\DecimalSeparator\DecimalSeparator */
class DecimalSeparatorTest extends TestCase
{
    /** @covers ::forCountryAndLanguage */
    public function testForCountryAndLanguage(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Terminology::cases() as $languageAlpha3Terminology) {
                DecimalSeparator::forCountryAndLanguage($countryAlpha2, $languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::forCountryAndLanguage */
    public function testForCountryAlpha3AndLanguageBibliographic(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Bibliographic::cases() as $languageAlpha3Terminology) {
                DecimalSeparator::forCountryAndLanguage($countryAlpha2, $languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::forCountry */
    public function testForCountryAlpha2(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            DecimalSeparator::forCountry($countryAlpha2);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            DecimalSeparator::forCountry($countryAlpha3);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryName(): void
    {
        foreach (CountryName::cases() as $countryName) {
            DecimalSeparator::forCountry($countryName);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryNumeric(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            DecimalSeparator::forCountry($countryNumeric);

            $this->addToAssertionCount(1);
        }
    }
}

<?php
declare(strict_types=1);

namespace NumberFormatting;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\NumberFormatting\DigitGroupingIndicator;

/** @coversDefaultClass \PrinsFrank\Standards\NumberFormatting\DigitGroupingIndicator */
class DigitGroupingIndicatorTest extends TestCase
{
    /** @covers ::forCountryAndLanguage */
    public function testForCountryAndLanguage(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Terminology::cases() as $languageAlpha3Terminology) {
                DigitGroupingIndicator::forCountryAndLanguage($countryAlpha2, $languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::forCountryAndLanguage */
    public function testForCountryAlpha3AndLanguageBibliographic(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha2) {
            foreach (LanguageAlpha3Bibliographic::cases() as $languageAlpha3Terminology) {
                DigitGroupingIndicator::forCountryAndLanguage($countryAlpha2, $languageAlpha3Terminology);

                $this->addToAssertionCount(1);
            }
        }
    }

    /** @covers ::forCountry */
    public function testForCountryAlpha2(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            DigitGroupingIndicator::forCountry($countryAlpha2);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            DigitGroupingIndicator::forCountry($countryAlpha3);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryName(): void
    {
        foreach (CountryName::cases() as $countryName) {
            DigitGroupingIndicator::forCountry($countryName);

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryNumeric(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            DigitGroupingIndicator::forCountry($countryNumeric);

            $this->addToAssertionCount(1);
        }
    }
}

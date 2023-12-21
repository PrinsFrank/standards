<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\InternationalCallPrefix;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\InternationalCallPrefix\InternationalCallPrefix;
use UnhandledMatchError;

/** @coversDefaultClass \PrinsFrank\Standards\InternationalCallPrefix\InternationalCallPrefix */
class InternationalCallPrefixTest extends TestCase
{
    /** @covers ::forCountry */
    public function testForCountryAlpha2(): void
    {
        foreach (CountryAlpha2::cases() as $countryAlpha2) {
            try {
                InternationalCallPrefix::forCountry($countryAlpha2);
            } catch (UnhandledMatchError) {
                $this->fail('No international call prefix found for "' . $countryAlpha2->name . '"');
            }

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryAlpha3(): void
    {
        foreach (CountryAlpha3::cases() as $countryAlpha3) {
            try {
                InternationalCallPrefix::forCountry($countryAlpha3);
            } catch (UnhandledMatchError) {
                $this->fail('No international call prefix found for "' . $countryAlpha3->name . '"');
            }

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::forCountry */
    public function testForCountryNumeric(): void
    {
        foreach (CountryNumeric::cases() as $countryNumeric) {
            try {
                InternationalCallPrefix::forCountry($countryNumeric);
            } catch (UnhandledMatchError) {
                $this->fail('No international call prefix found for "' . $countryNumeric->name . '"');
            }

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getCountriesAlpha2 */
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

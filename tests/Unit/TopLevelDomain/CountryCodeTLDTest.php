<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;

/** @coversDefaultClass \PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD */
class CountryCodeTLDTest extends TestCase
{
    /** @covers ::getCountryAlpha2 */
    public function testGetCountryAlpha2(): void
    {
        static::assertSame(CountryAlpha2::Netherlands, CountryCodeTLD::nl->getCountryAlpha2());
        foreach (CountryCodeTLD::cases() as $countryCodeTLD) {
            $countryCodeTLD->getCountryAlpha2();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getCountryAlpha3 */
    public function testGetCountryAlpha3(): void
    {
        static::assertSame(CountryAlpha3::Netherlands, CountryCodeTLD::nl->getCountryAlpha3());
        foreach (CountryCodeTLD::cases() as $countryCodeTLD) {
            $countryCodeTLD->getCountryAlpha3();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getCountryNumeric */
    public function testGetCountryNumeric(): void
    {
        static::assertSame(CountryNumeric::Netherlands, CountryCodeTLD::nl->getCountryNumeric());
        foreach (CountryCodeTLD::cases() as $countryCodeTLD) {
            $countryCodeTLD->getCountryNumeric();

            $this->addToAssertionCount(1);
        }
    }
}

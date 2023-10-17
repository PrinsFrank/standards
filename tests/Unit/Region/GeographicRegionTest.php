<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Region;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Region\GeographicRegion;

/** @coversDefaultClass \PrinsFrank\Standards\Region\GeographicRegion */
class GeographicRegionTest extends TestCase
{
    /** @covers ::getDirectSubRegions */
    public function testGetDirectSubRegions(): void
    {
        static::assertSame(
            [
                GeographicRegion::Latin_America_And_The_Caribbean,
                GeographicRegion::Northern_America
            ],
            GeographicRegion::Americas->getDirectSubRegions()
        );
    }

    /** @covers ::getAllSubRegions */
    public function testGetAllSubRegions(): void
    {
        static::assertSame(
            [
                GeographicRegion::Latin_America_And_The_Caribbean,
                GeographicRegion::Caribbean,
                GeographicRegion::Central_America,
                GeographicRegion::South_America,
                GeographicRegion::Northern_America
            ],
            GeographicRegion::Americas->getAllSubRegions()
        );
    }

    /** @covers ::getDirectSubCountries */
    public function testGetDirectSubCountries(): void
    {
        static::assertSame(
            [
                CountryNumeric::Australia,
                CountryNumeric::Christmas_Island,
                CountryNumeric::Cocos_Islands,
                CountryNumeric::Heard_Island_and_McDonald_Islands,
                CountryNumeric::New_Zealand,
                CountryNumeric::Norfolk_Island
            ],
            GeographicRegion::Australia_And_New_Zealand->getDirectSubCountries()
        );
    }

    /** @covers ::getAllSubCountries */
    public function testGetAllSubCountries(): void
    {
        static::assertSame(
            [
                CountryNumeric::Australia,
                CountryNumeric::Christmas_Island,
                CountryNumeric::Cocos_Islands,
                CountryNumeric::Heard_Island_and_McDonald_Islands,
                CountryNumeric::New_Zealand,
                CountryNumeric::Norfolk_Island,
                CountryNumeric::Fiji,
                CountryNumeric::New_Caledonia,
                CountryNumeric::Papua_New_Guinea,
                CountryNumeric::Solomon_Islands,
                CountryNumeric::Vanuatu,
                CountryNumeric::Guam,
                CountryNumeric::Kiribati,
                CountryNumeric::Marshall_Islands,
                CountryNumeric::Micronesia,
                CountryNumeric::Nauru,
                CountryNumeric::Northern_Mariana_Islands,
                CountryNumeric::Palau,
                CountryNumeric::United_States_Outlying_Islands,
                CountryNumeric::American_Samoa,
                CountryNumeric::Cook_Islands,
                CountryNumeric::French_Polynesia,
                CountryNumeric::Niue,
                CountryNumeric::Pitcairn,
                CountryNumeric::Samoa,
                CountryNumeric::Tokelau,
                CountryNumeric::Tonga,
                CountryNumeric::Tuvalu,
                CountryNumeric::Wallis_and_Futuna,
            ],
            GeographicRegion::Oceania->getAllSubCountries()
        );
    }
}

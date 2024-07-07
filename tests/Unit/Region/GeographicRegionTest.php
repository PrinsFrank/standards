<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Region;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Region\GeographicRegion;

#[CoversClass(GeographicRegion::class)]
class GeographicRegionTest extends TestCase
{
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
        static::assertSame(
            [
                CountryNumeric::Anguilla,
                CountryNumeric::Antigua_and_Barbuda,
                CountryNumeric::Aruba,
                CountryNumeric::Bahamas,
                CountryNumeric::Barbados,
                CountryNumeric::Bonaire_Sint_Eustatius_and_Saba,
                CountryNumeric::British_Indian_Ocean_Territory,
                CountryNumeric::Cayman_Islands,
                CountryNumeric::Cuba,
                CountryNumeric::Curacao,
                CountryNumeric::Dominica,
                CountryNumeric::Dominican_Republic,
                CountryNumeric::Grenada,
                CountryNumeric::Guadeloupe,
                CountryNumeric::Haiti,
                CountryNumeric::Jamaica,
                CountryNumeric::Martinique,
                CountryNumeric::Montserrat,
                CountryNumeric::Puerto_Rico,
                CountryNumeric::Saint_Barthelemy,
                CountryNumeric::Saint_Kitts_and_Nevis,
                CountryNumeric::Saint_Lucia,
                CountryNumeric::Saint_Martin_French_part,
                CountryNumeric::Saint_Vincent_and_the_Grenadines,
                CountryNumeric::Sint_Maarten_Dutch_part,
                CountryNumeric::Trinidad_and_Tobago,
                CountryNumeric::Turks_and_Caicos_Islands,
                CountryNumeric::Virgin_Islands_U_S,
                CountryNumeric::Belize,
                CountryNumeric::Costa_Rica,
                CountryNumeric::El_Salvador,
                CountryNumeric::Guatemala,
                CountryNumeric::Honduras,
                CountryNumeric::Mexico,
                CountryNumeric::Nicaragua,
                CountryNumeric::Panama,
                CountryNumeric::Argentina,
                CountryNumeric::Bolivia,
                CountryNumeric::Bouvet_Island,
                CountryNumeric::Brazil,
                CountryNumeric::Chile,
                CountryNumeric::Colombia,
                CountryNumeric::Ecuador,
                CountryNumeric::Falkland_Islands,
                CountryNumeric::French_Guiana,
                CountryNumeric::Guyana,
                CountryNumeric::Paraguay,
                CountryNumeric::Peru,
                CountryNumeric::South_Georgia_South_Sandwich_Islands,
                CountryNumeric::Suriname,
                CountryNumeric::Uruguay,
                CountryNumeric::Venezuela,
                CountryNumeric::Bermuda,
                CountryNumeric::Canada,
                CountryNumeric::Greenland,
                CountryNumeric::Saint_Pierre_and_Miquelon,
                CountryNumeric::United_States_of_America,
            ],
            GeographicRegion::Americas->getAllSubCountries()
        );
    }
}

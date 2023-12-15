<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\NationalCallPrefix;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;

/**
 * @source https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164C-2011-PDF-E.pdf
 */
enum NationalCallPrefix: string
{
    case None      = '';
    case _0        = '0';
    case _0_082    = '0/082';
    case _01       = '01';
    case _06       = '06';
    case _09_07_05 = '09/07/05';
    case _1        = '1';
    case _1YZ      = '1YZ';
    case _8        = '8';

    public static function forCountry(CountryAlpha2|CountryAlpha3|CountryName|CountryNumeric $country): self
    {
        if ($country instanceof CountryAlpha2 === false) {
            $country = $country->toCountryAlpha2();
        }

        /** @var CountryAlpha2 $country */
        return match($country) {
            CountryAlpha2::Afghanistan                             => NationalCallPrefix::_0,
            CountryAlpha2::Aland_Islands                           => NationalCallPrefix::_0,
            CountryAlpha2::Albania                                 => NationalCallPrefix::_0,
            CountryAlpha2::Algeria                                 => NationalCallPrefix::_0,
            CountryAlpha2::American_Samoa                          => NationalCallPrefix::_1,
            CountryAlpha2::Andorra                                 => NationalCallPrefix::None,
            CountryAlpha2::Angola                                  => NationalCallPrefix::_0,
            CountryAlpha2::Anguilla                                => NationalCallPrefix::_1,
            CountryAlpha2::Antarctica                              => NationalCallPrefix::None,
            CountryAlpha2::Antigua_and_Barbuda                     => NationalCallPrefix::_1,
            CountryAlpha2::Argentina                               => NationalCallPrefix::_0,
            CountryAlpha2::Armenia                                 => NationalCallPrefix::_0,
            CountryAlpha2::Aruba                                   => NationalCallPrefix::None,
            CountryAlpha2::Australia                               => NationalCallPrefix::_0,
            CountryAlpha2::Austria                                 => NationalCallPrefix::_0,
            CountryAlpha2::Azerbaijan                              => NationalCallPrefix::_0,
            CountryAlpha2::Bahamas                                 => NationalCallPrefix::_1,
            CountryAlpha2::Bahrain                                 => NationalCallPrefix::None,
            CountryAlpha2::Bangladesh                              => NationalCallPrefix::_0,
            CountryAlpha2::Barbados                                => NationalCallPrefix::_1,
            CountryAlpha2::Belarus                                 => NationalCallPrefix::_8,
            CountryAlpha2::Belgium                                 => NationalCallPrefix::_0,
            CountryAlpha2::Belize                                  => NationalCallPrefix::None,
            CountryAlpha2::Benin                                   => NationalCallPrefix::None,
            CountryAlpha2::Bermuda                                 => NationalCallPrefix::_1,
            CountryAlpha2::Bhutan                                  => NationalCallPrefix::None,
            CountryAlpha2::Bolivia                                 => NationalCallPrefix::_0,
            CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba         => NationalCallPrefix::_0,
            CountryAlpha2::Bosnia_and_Herzegovina                  => NationalCallPrefix::_0,
            CountryAlpha2::Botswana                                => NationalCallPrefix::None,
            CountryAlpha2::Bouvet_Island                           => NationalCallPrefix::_0,
            CountryAlpha2::Brazil                                  => NationalCallPrefix::_0,
            CountryAlpha2::British_Indian_Ocean_Territory          => NationalCallPrefix::_1,
            CountryAlpha2::Brunei_Darussalam                       => NationalCallPrefix::None,
            CountryAlpha2::Bulgaria                                => NationalCallPrefix::_0,
            CountryAlpha2::Burkina_Faso                            => NationalCallPrefix::None,
            CountryAlpha2::Burundi                                 => NationalCallPrefix::None,
            CountryAlpha2::Cabo_Verde                              => NationalCallPrefix::_0,
            CountryAlpha2::Cambodia                                => NationalCallPrefix::_0,
            CountryAlpha2::Cameroon                                => NationalCallPrefix::None,
            CountryAlpha2::Canada                                  => NationalCallPrefix::_1,
            CountryAlpha2::Cayman_Islands                          => NationalCallPrefix::_1,
            CountryAlpha2::Central_African_Republic                => NationalCallPrefix::None,
            CountryAlpha2::Chad                                    => NationalCallPrefix::None,
            CountryAlpha2::Chile                                   => NationalCallPrefix::_1YZ,
            CountryAlpha2::China                                   => NationalCallPrefix::_0,
            CountryAlpha2::Christmas_Island                        => NationalCallPrefix::_0,
            CountryAlpha2::Cocos_Islands                           => NationalCallPrefix::_0,
            CountryAlpha2::Colombia                                => NationalCallPrefix::_09_07_05,
            CountryAlpha2::Comoros                                 => NationalCallPrefix::None,
            CountryAlpha2::Congo                                   => NationalCallPrefix::None,
            CountryAlpha2::Congo_Democratic_Republic               => NationalCallPrefix::_0,
            CountryAlpha2::Cook_Islands                            => NationalCallPrefix::None,
            CountryAlpha2::Costa_Rica                              => NationalCallPrefix::None,
            CountryAlpha2::Cote_d_Ivoire                           => NationalCallPrefix::None,
            CountryAlpha2::Croatia                                 => NationalCallPrefix::_0,
            CountryAlpha2::Cuba                                    => NationalCallPrefix::_0,
            CountryAlpha2::Curacao                                 => NationalCallPrefix::_0,
            CountryAlpha2::Cyprus                                  => NationalCallPrefix::None,
            CountryAlpha2::Czechia                                 => NationalCallPrefix::None,
            CountryAlpha2::Denmark                                 => NationalCallPrefix::None,
            CountryAlpha2::Djibouti                                => NationalCallPrefix::None,
            CountryAlpha2::Dominica                                => NationalCallPrefix::_1,
            CountryAlpha2::Dominican_Republic                      => NationalCallPrefix::_1,
            CountryAlpha2::Ecuador                                 => NationalCallPrefix::_0,
            CountryAlpha2::Egypt                                   => NationalCallPrefix::_0,
            CountryAlpha2::El_Salvador                             => NationalCallPrefix::None,
            CountryAlpha2::Equatorial_Guinea                       => NationalCallPrefix::None,
            CountryAlpha2::Eritrea                                 => NationalCallPrefix::_0,
            CountryAlpha2::Estonia                                 => NationalCallPrefix::None,
            CountryAlpha2::Eswatini                                => NationalCallPrefix::None,
            CountryAlpha2::Ethiopia                                => NationalCallPrefix::_0,
            CountryAlpha2::Falkland_Islands                        => NationalCallPrefix::None,
            CountryAlpha2::Faroe_Islands                           => NationalCallPrefix::None,
            CountryAlpha2::Fiji                                    => NationalCallPrefix::None,
            CountryAlpha2::Finland                                 => NationalCallPrefix::_0,
            CountryAlpha2::France                                  => NationalCallPrefix::_0,
            CountryAlpha2::French_Guiana                           => NationalCallPrefix::None,
            CountryAlpha2::French_Polynesia                        => NationalCallPrefix::None,
            CountryAlpha2::French_Southern_Territories             => NationalCallPrefix::None,
            CountryAlpha2::Gabon                                   => NationalCallPrefix::None,
            CountryAlpha2::Gambia                                  => NationalCallPrefix::None,
            CountryAlpha2::Georgia                                 => NationalCallPrefix::_0,
            CountryAlpha2::Germany                                 => NationalCallPrefix::_0,
            CountryAlpha2::Ghana                                   => NationalCallPrefix::_0,
            CountryAlpha2::Gibraltar                               => NationalCallPrefix::None,
            CountryAlpha2::Greece                                  => NationalCallPrefix::_0,
            CountryAlpha2::Greenland                               => NationalCallPrefix::None,
            CountryAlpha2::Grenada                                 => NationalCallPrefix::_1,
            CountryAlpha2::Guadeloupe                              => NationalCallPrefix::None,
            CountryAlpha2::Guam                                    => NationalCallPrefix::_1,
            CountryAlpha2::Guatemala                               => NationalCallPrefix::None,
            CountryAlpha2::Guernsey                                => NationalCallPrefix::_0,
            CountryAlpha2::Guinea                                  => NationalCallPrefix::None,
            CountryAlpha2::Guinea_Bissau                           => NationalCallPrefix::None,
            CountryAlpha2::Guyana                                  => NationalCallPrefix::None,
            CountryAlpha2::Haiti                                   => NationalCallPrefix::None,
            CountryAlpha2::Heard_Island_and_McDonald_Islands       => NationalCallPrefix::_0,
            CountryAlpha2::Holy_See                                => NationalCallPrefix::None,
            CountryAlpha2::Honduras                                => NationalCallPrefix::None,
            CountryAlpha2::Hong_Kong                               => NationalCallPrefix::None,
            CountryAlpha2::Hungary                                 => NationalCallPrefix::_06,
            CountryAlpha2::Iceland                                 => NationalCallPrefix::None,
            CountryAlpha2::India                                   => NationalCallPrefix::_0,
            CountryAlpha2::Indonesia                               => NationalCallPrefix::_0,
            CountryAlpha2::Iran                                    => NationalCallPrefix::_0,
            CountryAlpha2::Iraq                                    => NationalCallPrefix::_0,
            CountryAlpha2::Ireland                                 => NationalCallPrefix::_0,
            CountryAlpha2::Isle_of_Man                             => NationalCallPrefix::_0,
            CountryAlpha2::Israel                                  => NationalCallPrefix::_0,
            CountryAlpha2::Italy                                   => NationalCallPrefix::None,
            CountryAlpha2::Jamaica                                 => NationalCallPrefix::_1,
            CountryAlpha2::Japan                                   => NationalCallPrefix::_0,
            CountryAlpha2::Jersey                                  => NationalCallPrefix::_0,
            CountryAlpha2::Jordan                                  => NationalCallPrefix::_0,
            CountryAlpha2::Kazakhstan                              => NationalCallPrefix::_8,
            CountryAlpha2::Kenya                                   => NationalCallPrefix::_0,
            CountryAlpha2::Kiribati                                => NationalCallPrefix::None,
            CountryAlpha2::Korea_Democratic_Peoples_Republic       => NationalCallPrefix::_0_082,
            CountryAlpha2::Korea_Republic                          => NationalCallPrefix::_0_082,
            CountryAlpha2::Kuwait                                  => NationalCallPrefix::None,
            CountryAlpha2::Kyrgyzstan                              => NationalCallPrefix::_0,
            CountryAlpha2::Lao_Peoples_Democratic_Republic         => NationalCallPrefix::_0,
            CountryAlpha2::Latvia                                  => NationalCallPrefix::None,
            CountryAlpha2::Lebanon                                 => NationalCallPrefix::_0,
            CountryAlpha2::Lesotho                                 => NationalCallPrefix::None,
            CountryAlpha2::Liberia                                 => NationalCallPrefix::None,
            CountryAlpha2::Libya                                   => NationalCallPrefix::_0,
            CountryAlpha2::Liechtenstein                           => NationalCallPrefix::None,
            CountryAlpha2::Lithuania                               => NationalCallPrefix::_0,
            CountryAlpha2::Luxembourg                              => NationalCallPrefix::None,
            CountryAlpha2::Macao                                   => NationalCallPrefix::None,
            CountryAlpha2::Madagascar                              => NationalCallPrefix::None,
            CountryAlpha2::Malawi                                  => NationalCallPrefix::None,
            CountryAlpha2::Malaysia                                => NationalCallPrefix::_0,
            CountryAlpha2::Maldives                                => NationalCallPrefix::None,
            CountryAlpha2::Mali                                    => NationalCallPrefix::None,
            CountryAlpha2::Malta                                   => NationalCallPrefix::None,
            CountryAlpha2::Marshall_Islands                        => NationalCallPrefix::_1,
            CountryAlpha2::Martinique                              => NationalCallPrefix::None,
            CountryAlpha2::Mauritania                              => NationalCallPrefix::None,
            CountryAlpha2::Mauritius                               => NationalCallPrefix::None,
            CountryAlpha2::Mayotte                                 => NationalCallPrefix::_0,
            CountryAlpha2::Mexico                                  => NationalCallPrefix::_01,
            CountryAlpha2::Micronesia                              => NationalCallPrefix::_1,
            CountryAlpha2::Moldova                                 => NationalCallPrefix::_0,
            CountryAlpha2::Monaco                                  => NationalCallPrefix::None,
            CountryAlpha2::Mongolia                                => NationalCallPrefix::_0,
            CountryAlpha2::Montenegro                              => NationalCallPrefix::_0,
            CountryAlpha2::Montserrat                              => NationalCallPrefix::_1,
            CountryAlpha2::Morocco                                 => NationalCallPrefix::_0,
            CountryAlpha2::Mozambique                              => NationalCallPrefix::None,
            CountryAlpha2::Myanmar                                 => NationalCallPrefix::_0,
            CountryAlpha2::Namibia                                 => NationalCallPrefix::_0,
            CountryAlpha2::Nauru                                   => NationalCallPrefix::None,
            CountryAlpha2::Nepal                                   => NationalCallPrefix::_0,
            CountryAlpha2::Netherlands                             => NationalCallPrefix::_0,
            CountryAlpha2::New_Caledonia                           => NationalCallPrefix::None,
            CountryAlpha2::New_Zealand                             => NationalCallPrefix::_0,
            CountryAlpha2::Nicaragua                               => NationalCallPrefix::None,
            CountryAlpha2::Niger                                   => NationalCallPrefix::None,
            CountryAlpha2::Nigeria                                 => NationalCallPrefix::_0,
            CountryAlpha2::Niue                                    => NationalCallPrefix::None,
            CountryAlpha2::Norfolk_Island                          => NationalCallPrefix::_0,
            CountryAlpha2::North_Macedonia                         => NationalCallPrefix::_0,
            CountryAlpha2::Northern_Mariana_Islands                => NationalCallPrefix::_1,
            CountryAlpha2::Norway                                  => NationalCallPrefix::None,
            CountryAlpha2::Oman                                    => NationalCallPrefix::None,
            CountryAlpha2::Pakistan                                => NationalCallPrefix::_0,
            CountryAlpha2::Palau                                   => NationalCallPrefix::None,
            CountryAlpha2::Palestine                               => NationalCallPrefix::_0,
            CountryAlpha2::Panama                                  => NationalCallPrefix::None,
            CountryAlpha2::Papua_New_Guinea                        => NationalCallPrefix::None,
            CountryAlpha2::Paraguay                                => NationalCallPrefix::_0,
            CountryAlpha2::Peru                                    => NationalCallPrefix::_0,
            CountryAlpha2::Philippines                             => NationalCallPrefix::_0,
            CountryAlpha2::Pitcairn                                => NationalCallPrefix::_0,
            CountryAlpha2::Poland                                  => NationalCallPrefix::_0,
            CountryAlpha2::Portugal                                => NationalCallPrefix::None,
            CountryAlpha2::Puerto_Rico                             => NationalCallPrefix::_1,
            CountryAlpha2::Qatar                                   => NationalCallPrefix::None,
            CountryAlpha2::Reunion                                 => NationalCallPrefix::_0,
            CountryAlpha2::Romania                                 => NationalCallPrefix::_0,
            CountryAlpha2::Russian_Federation                      => NationalCallPrefix::_8,
            CountryAlpha2::Rwanda                                  => NationalCallPrefix::None,
            CountryAlpha2::Saint_Barthelemy                        => NationalCallPrefix::_0,
            CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha => NationalCallPrefix::None,
            CountryAlpha2::Saint_Kitts_and_Nevis                   => NationalCallPrefix::_1,
            CountryAlpha2::Saint_Lucia                             => NationalCallPrefix::_1,
            CountryAlpha2::Saint_Martin_French_part                => NationalCallPrefix::_0,
            CountryAlpha2::Saint_Pierre_and_Miquelon               => NationalCallPrefix::None,
            CountryAlpha2::Saint_Vincent_and_the_Grenadines        => NationalCallPrefix::_1,
            CountryAlpha2::Samoa                                   => NationalCallPrefix::None,
            CountryAlpha2::San_Marino                              => NationalCallPrefix::None,
            CountryAlpha2::Sao_Tome_and_Principe                   => NationalCallPrefix::None,
            CountryAlpha2::Saudi_Arabia                            => NationalCallPrefix::_0,
            CountryAlpha2::Senegal                                 => NationalCallPrefix::None,
            CountryAlpha2::Serbia                                  => NationalCallPrefix::_0,
            CountryAlpha2::Seychelles                              => NationalCallPrefix::None,
            CountryAlpha2::Sierra_Leone                            => NationalCallPrefix::_0,
            CountryAlpha2::Singapore                               => NationalCallPrefix::None,
            CountryAlpha2::Sint_Maarten_Dutch_part                 => NationalCallPrefix::_1,
            CountryAlpha2::Slovakia                                => NationalCallPrefix::_0,
            CountryAlpha2::Slovenia                                => NationalCallPrefix::_0,
            CountryAlpha2::Solomon_Islands                         => NationalCallPrefix::None,
            CountryAlpha2::Somalia                                 => NationalCallPrefix::None,
            CountryAlpha2::South_Africa                            => NationalCallPrefix::_0,
            CountryAlpha2::South_Georgia_South_Sandwich_Islands    => NationalCallPrefix::_0,
            CountryAlpha2::South_Sudan                             => NationalCallPrefix::_0,
            CountryAlpha2::Spain                                   => NationalCallPrefix::None,
            CountryAlpha2::Sri_Lanka                               => NationalCallPrefix::_0,
            CountryAlpha2::Sudan                                   => NationalCallPrefix::_0,
            CountryAlpha2::Suriname                                => NationalCallPrefix::_0,
            CountryAlpha2::Svalbard_Jan_Mayen                      => NationalCallPrefix::_0,
            CountryAlpha2::Sweden                                  => NationalCallPrefix::_0,
            CountryAlpha2::Switzerland                             => NationalCallPrefix::_0,
            CountryAlpha2::Syrian_Arab_Republic                    => NationalCallPrefix::_0,
            CountryAlpha2::Taiwan_Province_of_China                => NationalCallPrefix::_0,
            CountryAlpha2::Tajikistan                              => NationalCallPrefix::_8,
            CountryAlpha2::Tanzania                                => NationalCallPrefix::_0,
            CountryAlpha2::Thailand                                => NationalCallPrefix::_0,
            CountryAlpha2::Timor_Leste                             => NationalCallPrefix::None,
            CountryAlpha2::Togo                                    => NationalCallPrefix::None,
            CountryAlpha2::Tokelau                                 => NationalCallPrefix::None,
            CountryAlpha2::Tonga                                   => NationalCallPrefix::None,
            CountryAlpha2::Trinidad_and_Tobago                     => NationalCallPrefix::_1,
            CountryAlpha2::Tunisia                                 => NationalCallPrefix::None,
            CountryAlpha2::Turkey                                  => NationalCallPrefix::_0,
            CountryAlpha2::Turkmenistan                            => NationalCallPrefix::_8,
            CountryAlpha2::Turks_and_Caicos_Islands                => NationalCallPrefix::_1,
            CountryAlpha2::Tuvalu                                  => NationalCallPrefix::None,
            CountryAlpha2::Uganda                                  => NationalCallPrefix::_0,
            CountryAlpha2::Ukraine                                 => NationalCallPrefix::_0,
            CountryAlpha2::United_Arab_Emirates                    => NationalCallPrefix::_0,
            CountryAlpha2::United_Kingdom                          => NationalCallPrefix::_0,
            CountryAlpha2::United_States_Outlying_Islands          => NationalCallPrefix::_1,
            CountryAlpha2::United_States_of_America                => NationalCallPrefix::_1,
            CountryAlpha2::Uruguay                                 => NationalCallPrefix::_0,
            CountryAlpha2::Uzbekistan                              => NationalCallPrefix::_8,
            CountryAlpha2::Vanuatu                                 => NationalCallPrefix::None,
            CountryAlpha2::Venezuela                               => NationalCallPrefix::_0,
            CountryAlpha2::Viet_Nam                                => NationalCallPrefix::_0,
            CountryAlpha2::Virgin_Islands_British                  => NationalCallPrefix::_0,
            CountryAlpha2::Virgin_Islands_U_S                      => NationalCallPrefix::_0,
            CountryAlpha2::Wallis_and_Futuna                       => NationalCallPrefix::None,
            CountryAlpha2::Western_Sahara                          => NationalCallPrefix::_0,
            CountryAlpha2::Yemen                                   => NationalCallPrefix::_0,
            CountryAlpha2::Zambia                                  => NationalCallPrefix::_0,
            CountryAlpha2::Zimbabwe                                => NationalCallPrefix::_0,
        };
    }
}
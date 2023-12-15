<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\NumberFormatting;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

enum DigitGroupingIndicator: string
{
    case Space = ' ';
    case Dot = '.';
    case Comma = ',';
    case Arabic_Thousand_Separator = '٬';
    case Ethiopic_Syllable_Wa = 'ወ';
    case Apostrophe = "'";

    public static function forCountryAndLanguage(CountryAlpha2|CountryAlpha3|CountryName|CountryNumeric $country, LanguageAlpha3Bibliographic|LanguageAlpha3Terminology $language): self
    {
        if ($country instanceof CountryAlpha2 === false) {
            $country = $country->toCountryAlpha2();
        }

        if ($language instanceof LanguageAlpha3Terminology === false) {
            $language = $language->toLanguageAlpha3Terminology();
        }

        /** @var CountryAlpha2 $country */
        /** @var LanguageAlpha3Terminology $language */
        return match ([$country, $language]) {
            [CountryAlpha2::Afghanistan, LanguageAlpha3Terminology::Persian] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Afghanistan, LanguageAlpha3Terminology::Pushto_Pashto] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Algeria, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Bahrain, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Botswana, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Botswana, LanguageAlpha3Terminology::Tswana] => self::Space,
            [CountryAlpha2::Burundi, LanguageAlpha3Terminology::Rundi] => self::Dot,
            [CountryAlpha2::Burundi, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Cameroon, LanguageAlpha3Terminology::Fulah] => self::Space,
            [CountryAlpha2::Cameroon, LanguageAlpha3Terminology::Ewondo] => self::Space,
            [CountryAlpha2::Cameroon, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Cameroon, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Canada, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Canada, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Chad, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Comoros, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Djibouti, LanguageAlpha3Terminology::Afar] => self::Comma,
            [CountryAlpha2::Djibouti, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Djibouti, LanguageAlpha3Terminology::Somali] => self::Comma,
            [CountryAlpha2::Ecuador, LanguageAlpha3Terminology::Spanish_Castilian] => self::Dot,
            [CountryAlpha2::Ecuador, LanguageAlpha3Terminology::Quechua] => self::Comma,
            [CountryAlpha2::Egypt, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Eritrea, LanguageAlpha3Terminology::Afar] => self::Comma,
            [CountryAlpha2::Eritrea, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Eritrea, LanguageAlpha3Terminology::Geez] => self::Ethiopic_Syllable_Wa,
            [CountryAlpha2::Eritrea, LanguageAlpha3Terminology::Tigrinya] => self::Comma,
            [CountryAlpha2::Eswatini, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Eswatini, LanguageAlpha3Terminology::Swati] => self::Space,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Afar] => self::Comma,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Amharic] => self::Comma,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Oromo] => self::Comma,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Sidamo] => self::Comma,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Somali] => self::Comma,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Tigrinya] => self::Comma,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Geez] => self::Ethiopic_Syllable_Wa,
            [CountryAlpha2::Ethiopia, LanguageAlpha3Terminology::Wolaitta_Wolaytta] => self::Apostrophe,
            [CountryAlpha2::Ghana, LanguageAlpha3Terminology::Fulah] => self::Space,
            [CountryAlpha2::Ghana, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Ghana, LanguageAlpha3Terminology::Akan] => self::Comma,
            [CountryAlpha2::Ghana, LanguageAlpha3Terminology::Ewe] => self::Comma,
            [CountryAlpha2::Ghana, LanguageAlpha3Terminology::Ga] => self::Comma,
            [CountryAlpha2::Ghana, LanguageAlpha3Terminology::Hausa] => self::Comma,
            [CountryAlpha2::Holy_See, LanguageAlpha3Terminology::Italian] => self::Dot,
            [CountryAlpha2::Holy_See, LanguageAlpha3Terminology::Latin] => self::Space,
            [CountryAlpha2::Iran, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Iran, LanguageAlpha3Terminology::Persian] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Iraq, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Israel, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Jordan, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Kuwait, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Lebanon, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Lesotho, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Lesotho, LanguageAlpha3Terminology::Sotho_Southern] => self::Space,
            [CountryAlpha2::Libya, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Luxembourg, LanguageAlpha3Terminology::German] => self::Dot,
            [CountryAlpha2::Luxembourg, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Macao, LanguageAlpha3Terminology::Chinese] => self::Comma,
            [CountryAlpha2::Macao, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Macao, LanguageAlpha3Terminology::Portuguese] => self::Dot,
            [CountryAlpha2::Mali, LanguageAlpha3Terminology::Bambara] => self::Comma,
            [CountryAlpha2::Mali, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Mali, LanguageAlpha3Terminology::Songhai_languages] => self::Space,
            [CountryAlpha2::Moldova, LanguageAlpha3Terminology::Romanian_Moldavian_Moldovan] => self::Dot,
            [CountryAlpha2::Moldova, LanguageAlpha3Terminology::Russian] => self::Space,
            [CountryAlpha2::Morocco, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Namibia, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Namibia, LanguageAlpha3Terminology::Afrikaans] => self::Space,
            [CountryAlpha2::North_Macedonia, LanguageAlpha3Terminology::Macedonian] => self::Dot,
            [CountryAlpha2::North_Macedonia, LanguageAlpha3Terminology::Albanian] => self::Space,
            [CountryAlpha2::Oman, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Pakistan, LanguageAlpha3Terminology::Persian] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Qatar, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Rwanda, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Rwanda, LanguageAlpha3Terminology::English] => self::Comma,
            [CountryAlpha2::Rwanda, LanguageAlpha3Terminology::Kinyarwanda] => self::Dot,
            [CountryAlpha2::Saudi_Arabia, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Senegal, LanguageAlpha3Terminology::Fulah] => self::Space,
            [CountryAlpha2::Senegal, LanguageAlpha3Terminology::French] => self::Space,
            [CountryAlpha2::Senegal, LanguageAlpha3Terminology::Wolof] => self::Dot,
            [CountryAlpha2::Somalia, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::South_Sudan, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Sudan, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Syrian_Arab_Republic, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Tunisia, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::United_Arab_Emirates, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Western_Sahara, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            [CountryAlpha2::Yemen, LanguageAlpha3Terminology::Arabic] => self::Arabic_Thousand_Separator,
            default => self::forCountry($country),
        };
    }

    public static function forCountry(CountryAlpha2|CountryAlpha3|CountryName|CountryNumeric $country): self
    {
        if ($country instanceof CountryAlpha2 === false) {
            $country = $country->toCountryAlpha2();
        }

        /** @var CountryAlpha2 $country */
        return match($country) {
            CountryAlpha2::Afghanistan                             => self::Comma,
            CountryAlpha2::Aland_Islands                           => self::Space,
            CountryAlpha2::Albania                                 => self::Dot,
            CountryAlpha2::Algeria                                 => self::Dot,
            CountryAlpha2::American_Samoa                          => self::Comma,
            CountryAlpha2::Andorra                                 => self::Dot,
            CountryAlpha2::Angola                                  => self::Dot,
            CountryAlpha2::Anguilla                                => self::Comma,
            CountryAlpha2::Antarctica                              => self::Comma,
            CountryAlpha2::Antigua_and_Barbuda                     => self::Comma,
            CountryAlpha2::Argentina                               => self::Dot,
            CountryAlpha2::Armenia                                 => self::Space,
            CountryAlpha2::Aruba                                   => self::Dot,
            CountryAlpha2::Australia                               => self::Comma,
            CountryAlpha2::Austria                                 => self::Dot,
            CountryAlpha2::Azerbaijan                              => self::Space,
            CountryAlpha2::Bahamas                                 => self::Comma,
            CountryAlpha2::Bahrain                                 => self::Comma,
            CountryAlpha2::Bangladesh                              => self::Comma,
            CountryAlpha2::Barbados                                => self::Comma,
            CountryAlpha2::Belarus                                 => self::Space,
            CountryAlpha2::Belgium                                 => self::Dot,
            CountryAlpha2::Belize                                  => self::Comma,
            CountryAlpha2::Benin                                   => self::Space,
            CountryAlpha2::Bermuda                                 => self::Comma,
            CountryAlpha2::Bhutan                                  => self::Comma,
            CountryAlpha2::Bolivia                                 => self::Dot,
            CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba         => self::Dot,
            CountryAlpha2::Bosnia_and_Herzegovina                  => self::Dot,
            CountryAlpha2::Botswana                                => self::Comma,
            CountryAlpha2::Bouvet_Island                           => self::Comma,
            CountryAlpha2::Brazil                                  => self::Dot,
            CountryAlpha2::British_Indian_Ocean_Territory          => self::Comma,
            CountryAlpha2::Brunei_Darussalam                       => self::Dot,
            CountryAlpha2::Bulgaria                                => self::Space,
            CountryAlpha2::Burkina_Faso                            => self::Space,
            CountryAlpha2::Burundi                                 => self::Dot,
            CountryAlpha2::Cabo_Verde                              => self::Space,
            CountryAlpha2::Cambodia                                => self::Dot,
            CountryAlpha2::Cameroon                                => self::Space,
            CountryAlpha2::Canada                                  => self::Comma,
            CountryAlpha2::Cayman_Islands                          => self::Comma,
            CountryAlpha2::Central_African_Republic                => self::Space,
            CountryAlpha2::Chad                                    => self::Space,
            CountryAlpha2::Chile                                   => self::Dot,
            CountryAlpha2::China                                   => self::Comma,
            CountryAlpha2::Christmas_Island                        => self::Comma,
            CountryAlpha2::Cocos_Islands                           => self::Comma,
            CountryAlpha2::Colombia                                => self::Dot,
            CountryAlpha2::Comoros                                 => self::Space,
            CountryAlpha2::Congo                                   => self::Space,
            CountryAlpha2::Congo_Democratic_Republic               => self::Space,
            CountryAlpha2::Cook_Islands                            => self::Comma,
            CountryAlpha2::Costa_Rica                              => self::Dot,
            CountryAlpha2::Cote_d_Ivoire                           => self::Space,
            CountryAlpha2::Croatia                                 => self::Dot,
            CountryAlpha2::Cuba                                    => self::Comma,
            CountryAlpha2::Curacao                                 => self::Dot,
            CountryAlpha2::Cyprus                                  => self::Dot,
            CountryAlpha2::Czechia                                 => self::Space,
            CountryAlpha2::Denmark                                 => self::Dot,
            CountryAlpha2::Djibouti                                => self::Space,
            CountryAlpha2::Dominica                                => self::Comma,
            CountryAlpha2::Dominican_Republic                      => self::Comma,
            CountryAlpha2::Ecuador                                 => self::Dot,
            CountryAlpha2::Egypt                                   => self::Comma,
            CountryAlpha2::El_Salvador                             => self::Comma,
            CountryAlpha2::Equatorial_Guinea                       => self::Space,
            CountryAlpha2::Eritrea                                 => self::Comma,
            CountryAlpha2::Estonia                                 => self::Space,
            CountryAlpha2::Eswatini                                => self::Comma,
            CountryAlpha2::Ethiopia                                => self::Comma,
            CountryAlpha2::Falkland_Islands                        => self::Comma,
            CountryAlpha2::Faroe_Islands                           => self::Dot,
            CountryAlpha2::Fiji                                    => self::Comma,
            CountryAlpha2::Finland                                 => self::Space,
            CountryAlpha2::France                                  => self::Space,
            CountryAlpha2::French_Guiana                           => self::Space,
            CountryAlpha2::French_Polynesia                        => self::Space,
            CountryAlpha2::French_Southern_Territories             => self::Space,
            CountryAlpha2::Gabon                                   => self::Space,
            CountryAlpha2::Gambia                                  => self::Space,
            CountryAlpha2::Georgia                                 => self::Space,
            CountryAlpha2::Germany                                 => self::Dot,
            CountryAlpha2::Ghana                                   => self::Comma,
            CountryAlpha2::Gibraltar                               => self::Comma,
            CountryAlpha2::Greece                                  => self::Dot,
            CountryAlpha2::Greenland                               => self::Dot,
            CountryAlpha2::Grenada                                 => self::Comma,
            CountryAlpha2::Guadeloupe                              => self::Space,
            CountryAlpha2::Guam                                    => self::Comma,
            CountryAlpha2::Guatemala                               => self::Comma,
            CountryAlpha2::Guernsey                                => self::Comma,
            CountryAlpha2::Guinea                                  => self::Space,
            CountryAlpha2::Guinea_Bissau                           => self::Space,
            CountryAlpha2::Guyana                                  => self::Comma,
            CountryAlpha2::Haiti                                   => self::Space,
            CountryAlpha2::Heard_Island_and_McDonald_Islands       => self::Comma,
            CountryAlpha2::Holy_See                                => self::Dot,
            CountryAlpha2::Honduras                                => self::Comma,
            CountryAlpha2::Hong_Kong                               => self::Comma,
            CountryAlpha2::Hungary                                 => self::Space,
            CountryAlpha2::Iceland                                 => self::Dot,
            CountryAlpha2::India                                   => self::Comma,
            CountryAlpha2::Indonesia                               => self::Dot,
            CountryAlpha2::Iran                                    => self::Comma,
            CountryAlpha2::Iraq                                    => self::Comma,
            CountryAlpha2::Ireland                                 => self::Comma,
            CountryAlpha2::Isle_of_Man                             => self::Comma,
            CountryAlpha2::Israel                                  => self::Comma,
            CountryAlpha2::Italy                                   => self::Dot,
            CountryAlpha2::Jamaica                                 => self::Comma,
            CountryAlpha2::Japan                                   => self::Comma,
            CountryAlpha2::Jersey                                  => self::Comma,
            CountryAlpha2::Jordan                                  => self::Comma,
            CountryAlpha2::Kazakhstan                              => self::Space,
            CountryAlpha2::Kenya                                   => self::Comma,
            CountryAlpha2::Kiribati                                => self::Comma,
            CountryAlpha2::Korea_Democratic_Peoples_Republic       => self::Comma,
            CountryAlpha2::Korea_Republic                          => self::Comma,
            CountryAlpha2::Kuwait                                  => self::Comma,
            CountryAlpha2::Kyrgyzstan                              => self::Space,
            CountryAlpha2::Lao_Peoples_Democratic_Republic         => self::Dot,
            CountryAlpha2::Latvia                                  => self::Space,
            CountryAlpha2::Lebanon                                 => self::Comma,
            CountryAlpha2::Lesotho                                 => self::Comma,
            CountryAlpha2::Liberia                                 => self::Comma,
            CountryAlpha2::Libya                                   => self::Comma,
            CountryAlpha2::Liechtenstein                           => self::Apostrophe,
            CountryAlpha2::Lithuania                               => self::Dot,
            CountryAlpha2::Luxembourg                              => self::Dot,
            CountryAlpha2::Macao                                   => self::Comma,
            CountryAlpha2::Madagascar                              => self::Comma,
            CountryAlpha2::Malawi                                  => self::Comma,
            CountryAlpha2::Malaysia                                => self::Comma,
            CountryAlpha2::Maldives                                => self::Comma,
            CountryAlpha2::Mali                                    => self::Comma,
            CountryAlpha2::Malta                                   => self::Comma,
            CountryAlpha2::Marshall_Islands                        => self::Comma,
            CountryAlpha2::Martinique                              => self::Space,
            CountryAlpha2::Mauritania                              => self::Space,
            CountryAlpha2::Mauritius                               => self::Space,
            CountryAlpha2::Mayotte                                 => self::Space,
            CountryAlpha2::Mexico                                  => self::Comma,
            CountryAlpha2::Micronesia                              => self::Comma,
            CountryAlpha2::Moldova                                 => self::Dot,
            CountryAlpha2::Monaco                                  => self::Space,
            CountryAlpha2::Mongolia                                => self::Space,
            CountryAlpha2::Montenegro                              => self::Dot,
            CountryAlpha2::Montserrat                              => self::Comma,
            CountryAlpha2::Morocco                                 => self::Dot,
            CountryAlpha2::Mozambique                              => self::Space,
            CountryAlpha2::Myanmar                                 => self::Comma,
            CountryAlpha2::Namibia                                 => self::Space,
            CountryAlpha2::Nauru                                   => self::Comma,
            CountryAlpha2::Nepal                                   => self::Comma,
            CountryAlpha2::Netherlands                             => self::Dot,
            CountryAlpha2::New_Caledonia                           => self::Space,
            CountryAlpha2::New_Zealand                             => self::Comma,
            CountryAlpha2::Nicaragua                               => self::Comma,
            CountryAlpha2::Niger                                   => self::Space,
            CountryAlpha2::Nigeria                                 => self::Space,
            CountryAlpha2::Niue                                    => self::Comma,
            CountryAlpha2::Norfolk_Island                          => self::Comma,
            CountryAlpha2::North_Macedonia                         => self::Dot,
            CountryAlpha2::Northern_Mariana_Islands                => self::Comma,
            CountryAlpha2::Norway                                  => self::Space,
            CountryAlpha2::Oman                                    => self::Comma,
            CountryAlpha2::Pakistan                                => self::Comma,
            CountryAlpha2::Palau                                   => self::Comma,
            CountryAlpha2::Palestine                               => self::Comma,
            CountryAlpha2::Panama                                  => self::Comma,
            CountryAlpha2::Papua_New_Guinea                        => self::Comma,
            CountryAlpha2::Paraguay                                => self::Dot,
            CountryAlpha2::Peru                                    => self::Dot,
            CountryAlpha2::Philippines                             => self::Comma,
            CountryAlpha2::Pitcairn                                => self::Comma,
            CountryAlpha2::Poland                                  => self::Space,
            CountryAlpha2::Portugal                                => self::Dot,
            CountryAlpha2::Puerto_Rico                             => self::Comma,
            CountryAlpha2::Qatar                                   => self::Comma,
            CountryAlpha2::Reunion                                 => self::Space,
            CountryAlpha2::Romania                                 => self::Dot,
            CountryAlpha2::Russian_Federation                      => self::Space,
            CountryAlpha2::Rwanda                                  => self::Space,
            CountryAlpha2::Saint_Barthelemy                        => self::Space,
            CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha => self::Comma,
            CountryAlpha2::Saint_Kitts_and_Nevis                   => self::Comma,
            CountryAlpha2::Saint_Lucia                             => self::Comma,
            CountryAlpha2::Saint_Martin_French_part                => self::Space,
            CountryAlpha2::Saint_Pierre_and_Miquelon               => self::Space,
            CountryAlpha2::Saint_Vincent_and_the_Grenadines        => self::Comma,
            CountryAlpha2::Samoa                                   => self::Comma,
            CountryAlpha2::San_Marino                              => self::Dot,
            CountryAlpha2::Sao_Tome_and_Principe                   => self::Space,
            CountryAlpha2::Saudi_Arabia                            => self::Comma,
            CountryAlpha2::Senegal                                 => self::Space,
            CountryAlpha2::Serbia                                  => self::Dot,
            CountryAlpha2::Seychelles                              => self::Space,
            CountryAlpha2::Sierra_Leone                            => self::Space,
            CountryAlpha2::Singapore                               => self::Comma,
            CountryAlpha2::Sint_Maarten_Dutch_part                 => self::Dot,
            CountryAlpha2::Slovakia                                => self::Space,
            CountryAlpha2::Slovenia                                => self::Dot,
            CountryAlpha2::Solomon_Islands                         => self::Comma,
            CountryAlpha2::Somalia                                 => self::Comma,
            CountryAlpha2::South_Africa                            => self::Space,
            CountryAlpha2::South_Georgia_South_Sandwich_Islands    => self::Comma,
            CountryAlpha2::South_Sudan                             => self::Comma,
            CountryAlpha2::Spain                                   => self::Dot,
            CountryAlpha2::Sri_Lanka                               => self::Comma,
            CountryAlpha2::Sudan                                   => self::Comma,
            CountryAlpha2::Suriname                                => self::Dot,
            CountryAlpha2::Svalbard_Jan_Mayen                      => self::Space,
            CountryAlpha2::Sweden                                  => self::Dot,
            CountryAlpha2::Switzerland                             => self::Apostrophe,
            CountryAlpha2::Syrian_Arab_Republic                    => self::Comma,
            CountryAlpha2::Taiwan_Province_of_China                => self::Comma,
            CountryAlpha2::Tajikistan                              => self::Space,
            CountryAlpha2::Tanzania                                => self::Comma,
            CountryAlpha2::Thailand                                => self::Comma,
            CountryAlpha2::Timor_Leste                             => self::Space,
            CountryAlpha2::Togo                                    => self::Space,
            CountryAlpha2::Tokelau                                 => self::Comma,
            CountryAlpha2::Tonga                                   => self::Comma,
            CountryAlpha2::Trinidad_and_Tobago                     => self::Comma,
            CountryAlpha2::Tunisia                                 => self::Comma,
            CountryAlpha2::Turkey                                  => self::Dot,
            CountryAlpha2::Turkmenistan                            => self::Space,
            CountryAlpha2::Turks_and_Caicos_Islands                => self::Comma,
            CountryAlpha2::Tuvalu                                  => self::Comma,
            CountryAlpha2::Uganda                                  => self::Comma,
            CountryAlpha2::Ukraine                                 => self::Space,
            CountryAlpha2::United_Arab_Emirates                    => self::Comma,
            CountryAlpha2::United_Kingdom                          => self::Comma,
            CountryAlpha2::United_States_Outlying_Islands          => self::Comma,
            CountryAlpha2::United_States_of_America                => self::Comma,
            CountryAlpha2::Uruguay                                 => self::Dot,
            CountryAlpha2::Uzbekistan                              => self::Space,
            CountryAlpha2::Vanuatu                                 => self::Space,
            CountryAlpha2::Venezuela                               => self::Dot,
            CountryAlpha2::Viet_Nam                                => self::Dot,
            CountryAlpha2::Virgin_Islands_British                  => self::Comma,
            CountryAlpha2::Virgin_Islands_U_S                      => self::Comma,
            CountryAlpha2::Wallis_and_Futuna                       => self::Space,
            CountryAlpha2::Western_Sahara                          => self::Comma,
            CountryAlpha2::Yemen                                   => self::Comma,
            CountryAlpha2::Zambia                                  => self::Comma,
            CountryAlpha2::Zimbabwe                                => self::Comma,
        };
    }
}

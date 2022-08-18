<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country;

use PrinsFrank\Standards\BackedEnum;

/**
 * @source https://www.iso.org/obp/ui/#search/code/
 */
enum ISO3166_1_Name: string
{
    case Afghanistan                                              = 'Afghanistan';
    case Aland_Islands                                            = 'Åland Islands';
    case Albania                                                  = 'Albania';
    case Algeria                                                  = 'Algeria';
    case American_Samoa                                           = 'American Samoa';
    case Andorra                                                  = 'Andorra';
    case Angola                                                   = 'Angola';
    case Anguilla                                                 = 'Anguilla';
    case Antarctica                                               = 'Antarctica';
    case Antigua_and_Barbuda                                      = 'Antigua and Barbuda';
    case Argentina                                                = 'Argentina';
    case Armenia                                                  = 'Armenia';
    case Aruba                                                    = 'Aruba';
    case Australia                                                = 'Australia';
    case Austria                                                  = 'Austria';
    case Azerbaijan                                               = 'Azerbaijan';
    case Bahamas_the                                              = 'Bahamas (the)';
    case Bahrain                                                  = 'Bahrain';
    case Bangladesh                                               = 'Bangladesh';
    case Barbados                                                 = 'Barbados';
    case Belarus                                                  = 'Belarus';
    case Belgium                                                  = 'Belgium';
    case Belize                                                   = 'Belize';
    case Benin                                                    = 'Benin';
    case Bermuda                                                  = 'Bermuda';
    case Bhutan                                                   = 'Bhutan';
    case Bolivia_Plurinational_State_of                           = 'Bolivia (Plurinational State of)';
    case Bonaire_Sint_Eustatius_and_Saba                          = 'Bonaire, Sint Eustatius and Saba';
    case Bosnia_and_Herzegovina                                   = 'Bosnia and Herzegovina';
    case Botswana                                                 = 'Botswana';
    case Bouvet_Island                                            = 'Bouvet Island';
    case Brazil                                                   = 'Brazil';
    case British_Indian_Ocean_Territory_the                       = 'British Indian Ocean Territory (the)';
    case Brunei_Darussalam                                        = 'Brunei Darussalam';
    case Bulgaria                                                 = 'Bulgaria';
    case Burkina_Faso                                             = 'Burkina Faso';
    case Burundi                                                  = 'Burundi';
    case Cabo_Verde                                               = 'Cabo Verde';
    case Cambodia                                                 = 'Cambodia';
    case Cameroon                                                 = 'Cameroon';
    case Canada                                                   = 'Canada';
    case Cayman_Islands_the                                       = 'Cayman Islands (the)';
    case Central_African_Republic_the                             = 'Central African Republic (the)';
    case Chad                                                     = 'Chad';
    case Chile                                                    = 'Chile';
    case China                                                    = 'China';
    case Christmas_Island                                         = 'Christmas Island';
    case Cocos_Keeling_Islands_the                                = 'Cocos (Keeling) Islands (the)';
    case Colombia                                                 = 'Colombia';
    case Comoros_the                                              = 'Comoros (the)';
    case Congo_the                                                = 'Congo (the)';
    case Congo_the_Democratic_Republic_of_the                     = 'Congo (the Democratic Republic of the)';
    case Cook_Islands_the                                         = 'Cook Islands (the)';
    case Costa_Rica                                               = 'Costa Rica';
    case Cote_d_Ivoire                                            = 'Côte d\'Ivoire';
    case Croatia                                                  = 'Croatia';
    case Cuba                                                     = 'Cuba';
    case Curacao                                                  = 'Curaçao';
    case Cyprus                                                   = 'Cyprus';
    case Czechia                                                  = 'Czechia';
    case Denmark                                                  = 'Denmark';
    case Djibouti                                                 = 'Djibouti';
    case Dominica                                                 = 'Dominica';
    case Dominican_Republic_the                                   = 'Dominican Republic (the)';
    case Ecuador                                                  = 'Ecuador';
    case Egypt                                                    = 'Egypt';
    case El_Salvador                                              = 'El Salvador';
    case Equatorial_Guinea                                        = 'Equatorial Guinea';
    case Eritrea                                                  = 'Eritrea';
    case Estonia                                                  = 'Estonia';
    case Eswatini                                                 = 'Eswatini';
    case Ethiopia                                                 = 'Ethiopia';
    case Falkland_Islands_the_Malvinas                            = 'Falkland Islands (the) [Malvinas]';
    case Faroe_Islands_the                                        = 'Faroe Islands (the)';
    case Fiji                                                     = 'Fiji';
    case Finland                                                  = 'Finland';
    case France                                                   = 'France';
    case French_Guiana                                            = 'French Guiana';
    case French_Polynesia                                         = 'French Polynesia';
    case French_Southern_Territories_the                          = 'French Southern Territories (the)';
    case Gabon                                                    = 'Gabon';
    case Gambia_the                                               = 'Gambia (the)';
    case Georgia                                                  = 'Georgia';
    case Germany                                                  = 'Germany';
    case Ghana                                                    = 'Ghana';
    case Gibraltar                                                = 'Gibraltar';
    case Greece                                                   = 'Greece';
    case Greenland                                                = 'Greenland';
    case Grenada                                                  = 'Grenada';
    case Guadeloupe                                               = 'Guadeloupe';
    case Guam                                                     = 'Guam';
    case Guatemala                                                = 'Guatemala';
    case Guernsey                                                 = 'Guernsey';
    case Guinea                                                   = 'Guinea';
    case Guinea_Bissau                                            = 'Guinea-Bissau';
    case Guyana                                                   = 'Guyana';
    case Haiti                                                    = 'Haiti';
    case Heard_Island_and_McDonald_Islands                        = 'Heard Island and McDonald Islands';
    case Holy_See_the                                             = 'Holy See (the)';
    case Honduras                                                 = 'Honduras';
    case Hong_Kong                                                = 'Hong Kong';
    case Hungary                                                  = 'Hungary';
    case Iceland                                                  = 'Iceland';
    case India                                                    = 'India';
    case Indonesia                                                = 'Indonesia';
    case Iran_Islamic_Republic_of                                 = 'Iran (Islamic Republic of)';
    case Iraq                                                     = 'Iraq';
    case Ireland                                                  = 'Ireland';
    case Isle_of_Man                                              = 'Isle of Man';
    case Israel                                                   = 'Israel';
    case Italy                                                    = 'Italy';
    case Jamaica                                                  = 'Jamaica';
    case Japan                                                    = 'Japan';
    case Jersey                                                   = 'Jersey';
    case Jordan                                                   = 'Jordan';
    case Kazakhstan                                               = 'Kazakhstan';
    case Kenya                                                    = 'Kenya';
    case Kiribati                                                 = 'Kiribati';
    case Korea_the_Democratic_People_s_Republic_of                = 'Korea (the Democratic People\'s Republic of)';
    case Korea_the_Republic_of                                    = 'Korea (the Republic of)';
    case Kuwait                                                   = 'Kuwait';
    case Kyrgyzstan                                               = 'Kyrgyzstan';
    case Lao_People_s_Democratic_Republic_the                     = 'Lao People\'s Democratic Republic (the)';
    case Latvia                                                   = 'Latvia';
    case Lebanon                                                  = 'Lebanon';
    case Lesotho                                                  = 'Lesotho';
    case Liberia                                                  = 'Liberia';
    case Libya                                                    = 'Libya';
    case Liechtenstein                                            = 'Liechtenstein';
    case Lithuania                                                = 'Lithuania';
    case Luxembourg                                               = 'Luxembourg';
    case Macao                                                    = 'Macao';
    case Madagascar                                               = 'Madagascar';
    case Malawi                                                   = 'Malawi';
    case Malaysia                                                 = 'Malaysia';
    case Maldives                                                 = 'Maldives';
    case Mali                                                     = 'Mali';
    case Malta                                                    = 'Malta';
    case Marshall_Islands_the                                     = 'Marshall Islands (the)';
    case Martinique                                               = 'Martinique';
    case Mauritania                                               = 'Mauritania';
    case Mauritius                                                = 'Mauritius';
    case Mayotte                                                  = 'Mayotte';
    case Mexico                                                   = 'Mexico';
    case Micronesia_Federated_States_of                           = 'Micronesia (Federated States of)';
    case Moldova_the_Republic_of                                  = 'Moldova (the Republic of)';
    case Monaco                                                   = 'Monaco';
    case Mongolia                                                 = 'Mongolia';
    case Montenegro                                               = 'Montenegro';
    case Montserrat                                               = 'Montserrat';
    case Morocco                                                  = 'Morocco';
    case Mozambique                                               = 'Mozambique';
    case Myanmar                                                  = 'Myanmar';
    case Namibia                                                  = 'Namibia';
    case Nauru                                                    = 'Nauru';
    case Nepal                                                    = 'Nepal';
    case Netherlands_the                                          = 'Netherlands (the)';
    case New_Caledonia                                            = 'New Caledonia';
    case New_Zealand                                              = 'New Zealand';
    case Nicaragua                                                = 'Nicaragua';
    case Niger_the                                                = 'Niger (the)';
    case Nigeria                                                  = 'Nigeria';
    case Niue                                                     = 'Niue';
    case Norfolk_Island                                           = 'Norfolk Island';
    case North_Macedonia                                          = 'North Macedonia';
    case Northern_Mariana_Islands_the                             = 'Northern Mariana Islands (the)';
    case Norway                                                   = 'Norway';
    case Oman                                                     = 'Oman';
    case Pakistan                                                 = 'Pakistan';
    case Palau                                                    = 'Palau';
    case Palestine_State_of                                       = 'Palestine, State of';
    case Panama                                                   = 'Panama';
    case Papua_New_Guinea                                         = 'Papua New Guinea';
    case Paraguay                                                 = 'Paraguay';
    case Peru                                                     = 'Peru';
    case Philippines_the                                          = 'Philippines (the)';
    case Pitcairn                                                 = 'Pitcairn';
    case Poland                                                   = 'Poland';
    case Portugal                                                 = 'Portugal';
    case Puerto_Rico                                              = 'Puerto Rico';
    case Qatar                                                    = 'Qatar';
    case Reunion                                                  = 'Réunion';
    case Romania                                                  = 'Romania';
    case Russian_Federation_the                                   = 'Russian Federation (the)';
    case Rwanda                                                   = 'Rwanda';
    case Saint_Barthelemy                                         = 'Saint Barthélemy';
    case Saint_Helena_Ascension_and_Tristan_da_Cunha              = 'Saint Helena, Ascension and Tristan da Cunha';
    case Saint_Kitts_and_Nevis                                    = 'Saint Kitts and Nevis';
    case Saint_Lucia                                              = 'Saint Lucia';
    case Saint_Martin_French_part                                 = 'Saint Martin (French part)';
    case Saint_Pierre_and_Miquelon                                = 'Saint Pierre and Miquelon';
    case Saint_Vincent_and_the_Grenadines                         = 'Saint Vincent and the Grenadines';
    case Samoa                                                    = 'Samoa';
    case San_Marino                                               = 'San Marino';
    case Sao_Tome_and_Principe                                    = 'Sao Tome and Principe';
    case Saudi_Arabia                                             = 'Saudi Arabia';
    case Senegal                                                  = 'Senegal';
    case Serbia                                                   = 'Serbia';
    case Seychelles                                               = 'Seychelles';
    case Sierra_Leone                                             = 'Sierra Leone';
    case Singapore                                                = 'Singapore';
    case Sint_Maarten_Dutch_part                                  = 'Sint Maarten (Dutch part)';
    case Slovakia                                                 = 'Slovakia';
    case Slovenia                                                 = 'Slovenia';
    case Solomon_Islands                                          = 'Solomon Islands';
    case Somalia                                                  = 'Somalia';
    case South_Africa                                             = 'South Africa';
    case South_Georgia_and_the_South_Sandwich_Islands             = 'South Georgia and the South Sandwich Islands';
    case South_Sudan                                              = 'South Sudan';
    case Spain                                                    = 'Spain';
    case Sri_Lanka                                                = 'Sri Lanka';
    case Sudan_the                                                = 'Sudan (the)';
    case Suriname                                                 = 'Suriname';
    case Svalbard_and_Jan_Mayen                                   = 'Svalbard and Jan Mayen';
    case Sweden                                                   = 'Sweden';
    case Switzerland                                              = 'Switzerland';
    case Syrian_Arab_Republic_the                                 = 'Syrian Arab Republic (the)';
    case Taiwan_Province_of_China                                 = 'Taiwan (Province of China)';
    case Tajikistan                                               = 'Tajikistan';
    case Tanzania_the_United_Republic_of                          = 'Tanzania, the United Republic of';
    case Thailand                                                 = 'Thailand';
    case Timor_Leste                                              = 'Timor-Leste';
    case Togo                                                     = 'Togo';
    case Tokelau                                                  = 'Tokelau';
    case Tonga                                                    = 'Tonga';
    case Trinidad_and_Tobago                                      = 'Trinidad and Tobago';
    case Tunisia                                                  = 'Tunisia';
    case Turkey                                                   = 'Türkiye';
    case Turkmenistan                                             = 'Turkmenistan';
    case Turks_and_Caicos_Islands_the                             = 'Turks and Caicos Islands (the)';
    case Tuvalu                                                   = 'Tuvalu';
    case Uganda                                                   = 'Uganda';
    case Ukraine                                                  = 'Ukraine';
    case United_Arab_Emirates_the                                 = 'United Arab Emirates (the)';
    case United_Kingdom_of_Great_Britain_and_Northern_Ireland_the = 'United Kingdom of Great Britain and Northern Ireland (the)';
    case United_States_Minor_Outlying_Islands_the                 = 'United States Minor Outlying Islands (the)';
    case United_States_of_America_the                             = 'United States of America (the)';
    case Uruguay                                                  = 'Uruguay';
    case Uzbekistan                                               = 'Uzbekistan';
    case Vanuatu                                                  = 'Vanuatu';
    case Venezuela_Bolivarian_Republic_of                         = 'Venezuela (Bolivarian Republic of)';
    case Viet_Nam                                                 = 'Viet Nam';
    case Virgin_Islands_British                                   = 'Virgin Islands (British)';
    case Virgin_Islands_U_S                                       = 'Virgin Islands (U.S.)';
    case Wallis_and_Futuna                                        = 'Wallis and Futuna';
    case Western_Sahara                                           = 'Western Sahara*';
    case Yemen                                                    = 'Yemen';
    case Zambia                                                   = 'Zambia';
    case Zimbabwe                                                 = 'Zimbabwe';

    public function toISO3166_1_Alpha_2(): ISO3166_1_Alpha_2
    {
        return BackedEnum::fromKey(ISO3166_1_Alpha_2::class, $this->name);
    }

        public function toISO3166_1_Alpha_3(): ISO3166_1_Alpha_3
        {
            return BackedEnum::fromKey(ISO3166_1_Alpha_3::class, $this->name);
        }

        public function toISO3166_1_Numeric(): ISO3166_1_Numeric
        {
            return BackedEnum::fromKey(ISO3166_1_Numeric::class, $this->name);
        }
}

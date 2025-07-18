<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\CountryCallingCode;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryName;
use PrinsFrank\Standards\Country\CountryNumeric;

/**
 * @source https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf
 *
 * @manually-updated
 */
enum CountryCallingCode: int {
    case Afghanistan = 93;
    case Albania_Republic_of = 355;
    case Algeria_Peoples_Democratic_Republic_of = 213;
    case Andorra_Principality_of = 376;
    case Angola_Republic_of = 244;
    case Argentine_Republic = 54;
    case Armenia_Republic_of = 374;
    case Aruba = 297;
    case Australia = 61;
    case Australian_External_territories = 672;
    case Austria = 43;
    case Azerbaijan_Republic_of = 994;
    case Bahrain_Kingdom_of = 973;
    case Bangladesh_Peoples_Republic_of = 880;
    case Belarus_Republic_of = 375;
    case Belgium = 32;
    case Belize = 501;
    case Benin_Republic_of = 229;
    case Bhutan_Kingdom_of = 975;
    case Bolivia_Plurinational_State_of = 591;
    case Bosnia_and_Herzegovina = 387;
    case Botswana_Republic_of = 267;
    case Brazil_Federative_Republic_of = 55;
    case Brunei_Darussalam = 673;
    case Bulgaria_Republic_of = 359;
    case Burkina_Faso = 226;
    case Burundi_Republic_of = 257;
    case Cabo_Verde_Republic_of = 238;
    case Cambodia_Kingdom_of = 855;
    case Cameroon_Republic_of = 237;
    case Central_African_Republic = 236;
    case Chad_Republic_of = 235;
    case Chile = 56;
    case China_Peoples_Republic_of = 86;
    case Colombia_Republic_of = 57;
    case Comoros_Union_of_the = 269;
    case Congo_Republic_of_the = 242;
    case Cook_Islands = 682;
    case Costa_Rica = 506;
    case Cote_dIvoire_Republic_of = 225;
    case Croatia_Republic_of = 385;
    case Cuba = 53;
    case Curacau_Bonaire_Sint_Eustatius_and_Saba = 599;
    case Cyprus_Republic_of = 357;
    case Czech_Republic = 420;
    case Democratic_Peoples_Republic_of_Korea = 850;
    case Democratic_Republic_of_the_Congo = 243;
    case Denmark = 45;
    case Diego_Garcia = 246;
    case Djibouti_Republic_of = 253;
    case Ecuador = 593;
    case Egypt_Arab_Republic_of = 20;
    case El_Salvador_Republic_of = 503;
    case Equatorial_Guinea_Republic_of = 240;
    case Eritrea = 291;
    case Estonia_Republic_of = 372;
    case Ethiopia_Federal_Democratic_Republic_of = 251;
    case Falkland_Islands_Malvinas = 500;
    case Faroe_Islands = 298;
    case Fiji_Republic_of = 679;
    case Finland = 358;
    case France = 33;
    case French_Departments_and_Territories_in_the_Indian_Ocean = 262;
    case French_Guiana_French_Department_of = 594;
    case French_Polynesia_Territoire_francais_doutre_mer = 689;
    case Gabonese_Republic = 241;
    case Gambia_Republic_of_the = 220;
    case Georgia = 995;
    case Germany_Federal_Republic_of = 49;
    case Ghana = 233;
    case Gibraltar = 350;
    case Global_Mobile_Satellite_System_shared_code = 881;
    case Greece = 30;
    case Greenland_Denmark = 299;
    case Group_of_countries_shared_code = 388;
    case Guadeloupe_French_Department_of = 590;
    case Guatemala_Republic_of = 502;
    case Guinea_Bissau_Republic_of = 245;
    case Guinea_Republic_of = 224;
    case Guyana = 592;
    case Haiti_Republic_of = 509;
    case Honduras_Republic_of = 504;
    case Honk_Kong_China = 852;
    case Hungary = 36;
    case Iceland = 354;
    case India_Republic_of = 91;
    case Indonesia_Republic_of = 62;
    case Inmarsat_SNAC = 870;
    case Integrated_numbering_plan = 1;
    case International_Freephone_Service = 800;
    case International_Networks_shared_code = 882;
    case International_Networks_shared_code_2 = 883;
    case International_Premium_Rate_Service = 979;
    case International_Shared_Cost_Service = 808;
    case Iran_Islamic_Republic_of = 98;
    case Iraq_Republic_of = 964;
    case Ireland = 353;
    case Israel_State_of = 972;
    case Italy_Vatican_City = 39;
    case Japan = 81;
    case Jordan_Hashemite_Kingdom_of = 962;
    case Kenya_Republic_of = 254;
    case Kiribati_Republic_of = 686;
    case Korea_Republic_of = 82;
    case Kosovo = 383;
    case Kuwait_State_of = 965;
    case Kyrgyz_Republic = 996;
    case Lao_Peoples_Democratic_Republic = 856;
    case Latvia_Republic_of = 371;
    case Lebanon = 961;
    case Lesotho_Kingdom_of = 266;
    case Liberia_Republic_of = 231;
    case Libya = 218;
    case Liechtenstein_Principality_of = 423;
    case Lithuania_Republic_of = 370;
    case Luxembourg = 352;
    case Macao_China = 853;
    case Madagascar_Republic_of = 261;
    case Malawi = 265;
    case Malaysia = 60;
    case Maldives_Republic_of = 960;
    case Mali_Republic_of = 223;
    case Malta = 356;
    case Marshall_Islands_Republic_of_the = 692;
    case Martinique_French_Department_of = 596;
    case Mauritania_Islamic_Republic_of = 222;
    case Mauritius_Republic_of = 230;
    case Mexico = 52;
    case Micronesia_Federated_States_of = 691;
    case Moldova_Republic_of = 373;
    case Monaco_Principality_of = 377;
    case Mongolia = 976;
    case Montenegro = 382;
    case Morocco_Kingdom_of = 212;
    case Mozambique_Republic_of = 258;
    case Myanmar_the_Republic_of_the_Union_of = 95;
    case Namibia_Republic_of = 264;
    case Nauru_Republic_of = 674;
    case Nepal_Federal_Democratic_Republic_of = 977;
    case Netherlands_Kingdom_of_the = 31;
    case New_Caledonia_Territoire_Francais_doutre_mer = 687;
    case New_Zealand = 64;
    case Nicaragua = 505;
    case Niger_Republic_of_the = 227;
    case Nigeria_Federal_Republic_of = 234;
    case Niue = 683;
    case Norway = 47;
    case Oman_Sultanate_of = 968;
    case Pakistan_Islamic_Republic_of = 92;
    case Palau_Republic_of = 680;
    case Panama_Republic_of = 507;
    case Papua_New_Guinea = 675;
    case Paraguay_Republic_of = 595;
    case Peru = 51;
    case Philippines_Republic_of = 63;
    case Poland_Republic_of = 48;
    case Portugal = 351;
    case Qatar_State_of = 974;
    case Reserved_for_the_Palestinian_Authority = 970;
    case Romania = 40;
    case Russian_Federation_Kazakhstan_Republic_of = 7;
    case Rwanda_Republic_of = 250;
    case Saint_Helena_Ascension_and_Tristan_da_Cunha = 247;
    case Saint_Helena_Ascension_and_Tristan_da_Cunha_2 = 290;
    case Saint_Pierre_and_Miquelon_Collectivite_territoriale_de_la_Republique_francaise = 508;
    case Samoa_Independent_State_of = 685;
    case San_Marino_Republic_of = 378;
    case Sao_Tome_and_Principe_Democratic_Republic_of = 239;
    case Saudi_Arabia_Kingdom_of = 966;
    case Senegal_Republic_of = 221;
    case Serbia_Republic_of = 381;
    case Seychelles_Republic_of = 248;
    case Sierra_Leone = 232;
    case Singapore_Republic_of = 65;
    case Slovak_Republic = 421;
    case Slovenia_Republic_of = 386;
    case Solomon_Islands = 677;
    case Somalia_Federal_Republic_of = 252;
    case South_Africa_Republic_of = 27;
    case South_Sudan_Republic_of = 211;
    case Spain = 34;
    case Sri_Lanka_Democratic_Socialist_Republic_of = 94;
    case Sudan_Republic_of_the = 249;
    case Suriname_Republic_of = 597;
    case Swaziland_Kingdom_of = 268;
    case Sweden = 46;
    case Switzerland_Confederation_of = 41;
    case Syrian_Arab_Republic = 963;
    case Taiwan_China = 886;
    case Tajikistan_Republic_of = 992;
    case Tanzania_United_Republic_of = 255;
    case Telecommunications_for_Disaster_Relief = 888;
    case Thailand = 66;
    case The_Former_Yugoslav_Republic_of_Macedonia = 389;
    case Timor_Leste_Democratic_Republic_of = 670;
    case Togolese_Republic = 228;
    case Tokelau = 690;
    case Tonga_Kingdom_of = 676;
    case Trial_of_a_proposed_new_international_telecommunication_service_shared = 991;
    case Tunisia = 216;
    case Turkey = 90;
    case Turkmenistan = 993;
    case Tuvalu = 688;
    case Uganda_Republic_of = 256;
    case Ukraine = 380;
    case United_Arab_Emirates = 971;
    case United_Kingdom_of_Great_Britain_and_Northern_Ireland = 44;
    case Universal_Personal_Telecommunication_Service = 878;
    case Uruguay_Eastern_Republic_of = 598;
    case Uzbekistan_Republic_of = 998;
    case Vanuata_Republic_of = 678;
    case Vatican_City_State = 379;
    case Venezuela_Bolivarian_Republic_of = 58;
    case Viet_Nam_Socialist_Republic_of = 84;
    case Wallis_and_Futuna_Territoire_francais_doutre_mer = 681;
    case Yemen_Republic_of = 967;
    case Zambia_Republic_of = 260;
    case Zimbabwe_Republic_of = 263;

    /** @return list<self> */
    public static function forCountry(CountryAlpha2|CountryAlpha3|CountryName|CountryNumeric $country): array {
        if ($country instanceof CountryAlpha2 === false) {
            $country = $country->toCountryAlpha2();
        }

        return match ($country) {
            CountryAlpha2::American_Samoa,
            CountryAlpha2::Anguilla,
            CountryAlpha2::Antigua_and_Barbuda,
            CountryAlpha2::Bahamas,
            CountryAlpha2::Barbados,
            CountryAlpha2::Bermuda,
            CountryAlpha2::Virgin_Islands_British,
            CountryAlpha2::Canada,
            CountryAlpha2::Cayman_Islands,
            CountryAlpha2::Dominica,
            CountryAlpha2::Dominican_Republic,
            CountryAlpha2::Grenada,
            CountryAlpha2::Guam,
            CountryAlpha2::Jamaica,
            CountryAlpha2::Montserrat,
            CountryAlpha2::Northern_Mariana_Islands,
            CountryAlpha2::Puerto_Rico,
            CountryAlpha2::Saint_Kitts_and_Nevis,
            CountryAlpha2::Saint_Lucia,
            CountryAlpha2::Saint_Vincent_and_the_Grenadines,
            CountryAlpha2::Sint_Maarten_Dutch_part,
            CountryAlpha2::Trinidad_and_Tobago,
            CountryAlpha2::Turks_and_Caicos_Islands,
            CountryAlpha2::United_States_of_America,
            CountryAlpha2::Virgin_Islands_U_S,
            CountryAlpha2::United_States_Outlying_Islands => [self::Integrated_numbering_plan],
            CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba,
            CountryAlpha2::Curacao => [self::Curacau_Bonaire_Sint_Eustatius_and_Saba],
            CountryAlpha2::Kazakhstan,
            CountryAlpha2::Russian_Federation => [self::Russian_Federation_Kazakhstan_Republic_of],
            CountryAlpha2::Aland_Islands,
            CountryAlpha2::Finland => [self::Finland],
            CountryAlpha2::Christmas_Island,
            CountryAlpha2::Cocos_Islands,
            CountryAlpha2::Australia => [self::Australia],
            CountryAlpha2::Guernsey,
            CountryAlpha2::Jersey,
            CountryAlpha2::Isle_of_Man,
            CountryAlpha2::South_Georgia_South_Sandwich_Islands,
            CountryAlpha2::United_Kingdom => [self::United_Kingdom_of_Great_Britain_and_Northern_Ireland],
            CountryAlpha2::Heard_Island_and_McDonald_Islands,
            CountryAlpha2::Norfolk_Island,
            CountryAlpha2::Antarctica => [self::Australian_External_territories],
            CountryAlpha2::Mayotte,
            CountryAlpha2::Reunion,
            CountryAlpha2::French_Southern_Territories => [self::French_Departments_and_Territories_in_the_Indian_Ocean],
            CountryAlpha2::Bouvet_Island,
            CountryAlpha2::Svalbard_Jan_Mayen,
            CountryAlpha2::Norway => [self::Norway],
            CountryAlpha2::Pitcairn,
            CountryAlpha2::New_Zealand => [self::New_Zealand],
            CountryAlpha2::Saint_Barthelemy,
            CountryAlpha2::Saint_Martin_French_part,
            CountryAlpha2::Guadeloupe => [self::Guadeloupe_French_Department_of],
            CountryAlpha2::Morocco,
            CountryAlpha2::Western_Sahara => [self::Morocco_Kingdom_of],
            CountryAlpha2::Afghanistan => [self::Afghanistan],
            CountryAlpha2::Albania => [self::Albania_Republic_of],
            CountryAlpha2::Algeria => [self::Algeria_Peoples_Democratic_Republic_of],
            CountryAlpha2::Andorra => [self::Andorra_Principality_of],
            CountryAlpha2::Angola => [self::Angola_Republic_of],
            CountryAlpha2::Argentina => [self::Argentine_Republic],
            CountryAlpha2::Armenia => [self::Armenia_Republic_of],
            CountryAlpha2::Aruba => [self::Aruba],
            CountryAlpha2::Austria => [self::Austria],
            CountryAlpha2::Azerbaijan => [self::Azerbaijan_Republic_of],
            CountryAlpha2::Bahrain => [self::Bahrain_Kingdom_of],
            CountryAlpha2::Bangladesh => [self::Bangladesh_Peoples_Republic_of],
            CountryAlpha2::Belarus => [self::Belarus_Republic_of],
            CountryAlpha2::Belgium => [self::Belgium],
            CountryAlpha2::Belize => [self::Belize],
            CountryAlpha2::Benin => [self::Benin_Republic_of],
            CountryAlpha2::Bhutan => [self::Bhutan_Kingdom_of],
            CountryAlpha2::Bolivia => [self::Bolivia_Plurinational_State_of],
            CountryAlpha2::Bosnia_and_Herzegovina => [self::Bosnia_and_Herzegovina],
            CountryAlpha2::Botswana => [self::Botswana_Republic_of],
            CountryAlpha2::Brazil => [self::Brazil_Federative_Republic_of],
            CountryAlpha2::British_Indian_Ocean_Territory => [self::Diego_Garcia],
            CountryAlpha2::Brunei_Darussalam => [self::Brunei_Darussalam],
            CountryAlpha2::Bulgaria => [self::Bulgaria_Republic_of],
            CountryAlpha2::Burkina_Faso => [self::Burkina_Faso],
            CountryAlpha2::Burundi => [self::Burundi_Republic_of],
            CountryAlpha2::Cabo_Verde => [self::Cabo_Verde_Republic_of],
            CountryAlpha2::Cambodia => [self::Cambodia_Kingdom_of],
            CountryAlpha2::Cameroon => [self::Cameroon_Republic_of],
            CountryAlpha2::Central_African_Republic => [self::Central_African_Republic],
            CountryAlpha2::Chad => [self::Chad_Republic_of],
            CountryAlpha2::Chile => [self::Chile],
            CountryAlpha2::China => [self::China_Peoples_Republic_of],
            CountryAlpha2::Colombia => [self::Colombia_Republic_of],
            CountryAlpha2::Comoros => [self::Comoros_Union_of_the],
            CountryAlpha2::Congo => [self::Congo_Republic_of_the],
            CountryAlpha2::Congo_Democratic_Republic => [self::Democratic_Republic_of_the_Congo],
            CountryAlpha2::Cook_Islands => [self::Cook_Islands],
            CountryAlpha2::Costa_Rica => [self::Costa_Rica],
            CountryAlpha2::Cote_d_Ivoire => [self::Cote_dIvoire_Republic_of],
            CountryAlpha2::Croatia => [self::Croatia_Republic_of],
            CountryAlpha2::Cuba => [self::Cuba],
            CountryAlpha2::Cyprus => [self::Cyprus_Republic_of],
            CountryAlpha2::Czechia => [self::Czech_Republic],
            CountryAlpha2::Denmark => [self::Denmark],
            CountryAlpha2::Djibouti => [self::Djibouti_Republic_of],
            CountryAlpha2::Ecuador => [self::Ecuador],
            CountryAlpha2::Egypt => [self::Egypt_Arab_Republic_of],
            CountryAlpha2::El_Salvador => [self::El_Salvador_Republic_of],
            CountryAlpha2::Equatorial_Guinea => [self::Equatorial_Guinea_Republic_of],
            CountryAlpha2::Eritrea => [self::Eritrea],
            CountryAlpha2::Estonia => [self::Estonia_Republic_of],
            CountryAlpha2::Eswatini => [self::Swaziland_Kingdom_of],
            CountryAlpha2::Ethiopia => [self::Ethiopia_Federal_Democratic_Republic_of],
            CountryAlpha2::Falkland_Islands => [self::Falkland_Islands_Malvinas],
            CountryAlpha2::Faroe_Islands => [self::Faroe_Islands],
            CountryAlpha2::Fiji => [self::Fiji_Republic_of],
            CountryAlpha2::France => [self::France],
            CountryAlpha2::French_Guiana => [self::French_Guiana_French_Department_of],
            CountryAlpha2::French_Polynesia => [self::French_Polynesia_Territoire_francais_doutre_mer],
            CountryAlpha2::Gabon => [self::Gabonese_Republic],
            CountryAlpha2::Gambia => [self::Gambia_Republic_of_the],
            CountryAlpha2::Georgia => [self::Georgia],
            CountryAlpha2::Germany => [self::Germany_Federal_Republic_of],
            CountryAlpha2::Ghana => [self::Ghana],
            CountryAlpha2::Gibraltar => [self::Gibraltar],
            CountryAlpha2::Greece => [self::Greece],
            CountryAlpha2::Greenland => [self::Greenland_Denmark],
            CountryAlpha2::Guatemala => [self::Guatemala_Republic_of],
            CountryAlpha2::Guinea => [self::Guinea_Republic_of],
            CountryAlpha2::Guinea_Bissau => [self::Guinea_Bissau_Republic_of],
            CountryAlpha2::Guyana => [self::Guyana],
            CountryAlpha2::Haiti => [self::Haiti_Republic_of],
            CountryAlpha2::Holy_See => [self::Vatican_City_State],
            CountryAlpha2::Honduras => [self::Honduras_Republic_of],
            CountryAlpha2::Hong_Kong => [self::Honk_Kong_China],
            CountryAlpha2::Hungary => [self::Hungary],
            CountryAlpha2::Iceland => [self::Iceland],
            CountryAlpha2::India => [self::India_Republic_of],
            CountryAlpha2::Indonesia => [self::Indonesia_Republic_of],
            CountryAlpha2::Iran => [self::Iran_Islamic_Republic_of],
            CountryAlpha2::Iraq => [self::Iraq_Republic_of],
            CountryAlpha2::Ireland => [self::Ireland],
            CountryAlpha2::Israel => [self::Israel_State_of],
            CountryAlpha2::Italy => [self::Italy_Vatican_City],
            CountryAlpha2::Japan => [self::Japan],
            CountryAlpha2::Jordan => [self::Jordan_Hashemite_Kingdom_of],
            CountryAlpha2::Kenya => [self::Kenya_Republic_of],
            CountryAlpha2::Kiribati => [self::Kiribati_Republic_of],
            CountryAlpha2::Korea_Democratic_Peoples_Republic => [self::Democratic_Peoples_Republic_of_Korea],
            CountryAlpha2::Korea_Republic => [self::Korea_Republic_of],
            CountryAlpha2::Kuwait => [self::Kuwait_State_of],
            CountryAlpha2::Kyrgyzstan => [self::Kyrgyz_Republic],
            CountryAlpha2::Lao_Peoples_Democratic_Republic => [self::Lao_Peoples_Democratic_Republic],
            CountryAlpha2::Latvia => [self::Latvia_Republic_of],
            CountryAlpha2::Lebanon => [self::Lebanon],
            CountryAlpha2::Lesotho => [self::Lesotho_Kingdom_of],
            CountryAlpha2::Liberia => [self::Liberia_Republic_of],
            CountryAlpha2::Libya => [self::Libya],
            CountryAlpha2::Liechtenstein => [self::Liechtenstein_Principality_of],
            CountryAlpha2::Lithuania => [self::Lithuania_Republic_of],
            CountryAlpha2::Luxembourg => [self::Luxembourg],
            CountryAlpha2::Macao => [self::Macao_China],
            CountryAlpha2::Madagascar => [self::Madagascar_Republic_of],
            CountryAlpha2::Malawi => [self::Malawi],
            CountryAlpha2::Malaysia => [self::Malaysia],
            CountryAlpha2::Maldives => [self::Maldives_Republic_of],
            CountryAlpha2::Mali => [self::Mali_Republic_of],
            CountryAlpha2::Malta => [self::Malta],
            CountryAlpha2::Marshall_Islands => [self::Marshall_Islands_Republic_of_the],
            CountryAlpha2::Martinique => [self::Martinique_French_Department_of],
            CountryAlpha2::Mauritania => [self::Mauritania_Islamic_Republic_of],
            CountryAlpha2::Mauritius => [self::Mauritius_Republic_of],
            CountryAlpha2::Mexico => [self::Mexico],
            CountryAlpha2::Micronesia => [self::Micronesia_Federated_States_of],
            CountryAlpha2::Moldova => [self::Moldova_Republic_of],
            CountryAlpha2::Monaco => [self::Monaco_Principality_of],
            CountryAlpha2::Mongolia => [self::Mongolia],
            CountryAlpha2::Montenegro => [self::Montenegro],
            CountryAlpha2::Mozambique => [self::Mozambique_Republic_of],
            CountryAlpha2::Myanmar => [self::Myanmar_the_Republic_of_the_Union_of],
            CountryAlpha2::Namibia => [self::Namibia_Republic_of],
            CountryAlpha2::Nauru => [self::Nauru_Republic_of],
            CountryAlpha2::Nepal => [self::Nepal_Federal_Democratic_Republic_of],
            CountryAlpha2::Netherlands => [self::Netherlands_Kingdom_of_the],
            CountryAlpha2::New_Caledonia => [self::New_Caledonia_Territoire_Francais_doutre_mer],
            CountryAlpha2::Nicaragua => [self::Nicaragua],
            CountryAlpha2::Niger => [self::Niger_Republic_of_the],
            CountryAlpha2::Nigeria => [self::Nigeria_Federal_Republic_of],
            CountryAlpha2::Niue => [self::Niue],
            CountryAlpha2::North_Macedonia => [self::The_Former_Yugoslav_Republic_of_Macedonia],
            CountryAlpha2::Oman => [self::Oman_Sultanate_of],
            CountryAlpha2::Pakistan => [self::Pakistan_Islamic_Republic_of],
            CountryAlpha2::Palau => [self::Palau_Republic_of],
            CountryAlpha2::Palestine => [self::Reserved_for_the_Palestinian_Authority],
            CountryAlpha2::Panama => [self::Panama_Republic_of],
            CountryAlpha2::Papua_New_Guinea => [self::Papua_New_Guinea],
            CountryAlpha2::Paraguay => [self::Paraguay_Republic_of],
            CountryAlpha2::Peru => [self::Peru],
            CountryAlpha2::Philippines => [self::Philippines_Republic_of],
            CountryAlpha2::Poland => [self::Poland_Republic_of],
            CountryAlpha2::Portugal => [self::Portugal],
            CountryAlpha2::Qatar => [self::Qatar_State_of],
            CountryAlpha2::Romania => [self::Romania],
            CountryAlpha2::Rwanda => [self::Rwanda_Republic_of],
            CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha => [
                self::Saint_Helena_Ascension_and_Tristan_da_Cunha,
                self::Saint_Helena_Ascension_and_Tristan_da_Cunha_2
            ],
            CountryAlpha2::Saint_Pierre_and_Miquelon => [self::Saint_Pierre_and_Miquelon_Collectivite_territoriale_de_la_Republique_francaise],
            CountryAlpha2::Samoa => [self::Samoa_Independent_State_of],
            CountryAlpha2::San_Marino => [self::San_Marino_Republic_of],
            CountryAlpha2::Sao_Tome_and_Principe => [self::Sao_Tome_and_Principe_Democratic_Republic_of],
            CountryAlpha2::Saudi_Arabia => [self::Saudi_Arabia_Kingdom_of],
            CountryAlpha2::Senegal => [self::Senegal_Republic_of],
            CountryAlpha2::Serbia => [self::Serbia_Republic_of],
            CountryAlpha2::Seychelles => [self::Seychelles_Republic_of],
            CountryAlpha2::Sierra_Leone => [self::Sierra_Leone],
            CountryAlpha2::Singapore => [self::Singapore_Republic_of],
            CountryAlpha2::Slovakia => [self::Slovak_Republic],
            CountryAlpha2::Slovenia => [self::Slovenia_Republic_of],
            CountryAlpha2::Solomon_Islands => [self::Solomon_Islands],
            CountryAlpha2::Somalia => [self::Somalia_Federal_Republic_of],
            CountryAlpha2::South_Africa => [self::South_Africa_Republic_of],
            CountryAlpha2::South_Sudan => [self::South_Sudan_Republic_of],
            CountryAlpha2::Spain => [self::Spain],
            CountryAlpha2::Sri_Lanka => [self::Sri_Lanka_Democratic_Socialist_Republic_of],
            CountryAlpha2::Sudan => [self::Sudan_Republic_of_the],
            CountryAlpha2::Suriname => [self::Suriname_Republic_of],
            CountryAlpha2::Sweden => [self::Sweden],
            CountryAlpha2::Switzerland => [self::Switzerland_Confederation_of],
            CountryAlpha2::Syrian_Arab_Republic => [self::Syrian_Arab_Republic],
            CountryAlpha2::Taiwan_Province_of_China => [self::Taiwan_China],
            CountryAlpha2::Tajikistan => [self::Tajikistan_Republic_of],
            CountryAlpha2::Tanzania => [self::Tanzania_United_Republic_of],
            CountryAlpha2::Thailand => [self::Thailand],
            CountryAlpha2::Timor_Leste => [self::Timor_Leste_Democratic_Republic_of],
            CountryAlpha2::Togo => [self::Togolese_Republic],
            CountryAlpha2::Tokelau => [self::Tokelau],
            CountryAlpha2::Tonga => [self::Tonga_Kingdom_of],
            CountryAlpha2::Tunisia => [self::Tunisia],
            CountryAlpha2::Turkey => [self::Turkey],
            CountryAlpha2::Turkmenistan => [self::Turkmenistan],
            CountryAlpha2::Tuvalu => [self::Tuvalu],
            CountryAlpha2::Uganda => [self::Uganda_Republic_of],
            CountryAlpha2::Ukraine => [self::Ukraine],
            CountryAlpha2::United_Arab_Emirates => [self::United_Arab_Emirates],
            CountryAlpha2::Uruguay => [self::Uruguay_Eastern_Republic_of],
            CountryAlpha2::Uzbekistan => [self::Uzbekistan_Republic_of],
            CountryAlpha2::Vanuatu => [self::Vanuata_Republic_of],
            CountryAlpha2::Venezuela => [self::Venezuela_Bolivarian_Republic_of],
            CountryAlpha2::Viet_Nam => [self::Viet_Nam_Socialist_Republic_of],
            CountryAlpha2::Wallis_and_Futuna => [self::Wallis_and_Futuna_Territoire_francais_doutre_mer],
            CountryAlpha2::Yemen => [self::Yemen_Republic_of],
            CountryAlpha2::Zambia => [self::Zambia_Republic_of],
            CountryAlpha2::Zimbabwe => [self::Zimbabwe_Republic_of],
        };
    }

    /** @return list<CountryAlpha2> */
    public function getCountriesAlpha2(): array {
        return match($this) {
            self::Integrated_numbering_plan => [
                CountryAlpha2::American_Samoa,
                CountryAlpha2::Anguilla,
                CountryAlpha2::Antigua_and_Barbuda,
                CountryAlpha2::Bahamas,
                CountryAlpha2::Barbados,
                CountryAlpha2::Bermuda,
                CountryAlpha2::Virgin_Islands_British,
                CountryAlpha2::Canada,
                CountryAlpha2::Cayman_Islands,
                CountryAlpha2::Dominica,
                CountryAlpha2::Dominican_Republic,
                CountryAlpha2::Grenada,
                CountryAlpha2::Guam,
                CountryAlpha2::Jamaica,
                CountryAlpha2::Montserrat,
                CountryAlpha2::Northern_Mariana_Islands,
                CountryAlpha2::Puerto_Rico,
                CountryAlpha2::Saint_Kitts_and_Nevis,
                CountryAlpha2::Saint_Lucia,
                CountryAlpha2::Saint_Vincent_and_the_Grenadines,
                CountryAlpha2::Sint_Maarten_Dutch_part,
                CountryAlpha2::Trinidad_and_Tobago,
                CountryAlpha2::Turks_and_Caicos_Islands,
                CountryAlpha2::United_States_of_America,
                CountryAlpha2::Virgin_Islands_U_S,
                CountryAlpha2::United_States_Outlying_Islands,
            ],
            self::Curacau_Bonaire_Sint_Eustatius_and_Saba => [
                CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba,
                CountryAlpha2::Curacao,
            ],
            self::Russian_Federation_Kazakhstan_Republic_of => [
                CountryAlpha2::Kazakhstan,
                CountryAlpha2::Russian_Federation,
            ],
            self::Afghanistan => [CountryAlpha2::Afghanistan],
            self::Albania_Republic_of => [CountryAlpha2::Albania],
            self::Algeria_Peoples_Democratic_Republic_of => [CountryAlpha2::Algeria],
            self::Andorra_Principality_of => [CountryAlpha2::Andorra],
            self::Angola_Republic_of => [CountryAlpha2::Angola],
            self::Argentine_Republic => [CountryAlpha2::Argentina],
            self::Armenia_Republic_of => [CountryAlpha2::Armenia],
            self::Aruba => [CountryAlpha2::Aruba],
            self::Australia => [
                CountryAlpha2::Australia,
                CountryAlpha2::Christmas_Island,
                CountryAlpha2::Cocos_Islands
            ],
            self::Australian_External_territories => [
                CountryAlpha2::Antarctica,
                CountryAlpha2::Heard_Island_and_McDonald_Islands,
                CountryAlpha2::Norfolk_Island,
            ],
            self::Austria => [CountryAlpha2::Austria],
            self::Azerbaijan_Republic_of => [CountryAlpha2::Azerbaijan],
            self::Bahrain_Kingdom_of => [CountryAlpha2::Bahrain],
            self::Bangladesh_Peoples_Republic_of => [CountryAlpha2::Bangladesh],
            self::Belarus_Republic_of => [CountryAlpha2::Belarus],
            self::Belgium => [CountryAlpha2::Belgium],
            self::Belize => [CountryAlpha2::Belize],
            self::Benin_Republic_of => [CountryAlpha2::Benin],
            self::Bhutan_Kingdom_of => [CountryAlpha2::Bhutan],
            self::Bolivia_Plurinational_State_of => [CountryAlpha2::Bolivia],
            self::Bosnia_and_Herzegovina => [CountryAlpha2::Bosnia_and_Herzegovina],
            self::Botswana_Republic_of => [CountryAlpha2::Botswana],
            self::Brazil_Federative_Republic_of => [CountryAlpha2::Brazil],
            self::Diego_Garcia => [CountryAlpha2::British_Indian_Ocean_Territory],
            self::Brunei_Darussalam => [CountryAlpha2::Brunei_Darussalam],
            self::Bulgaria_Republic_of => [CountryAlpha2::Bulgaria],
            self::Burkina_Faso => [CountryAlpha2::Burkina_Faso],
            self::Burundi_Republic_of => [CountryAlpha2::Burundi],
            self::Cabo_Verde_Republic_of => [CountryAlpha2::Cabo_Verde],
            self::Cambodia_Kingdom_of => [CountryAlpha2::Cambodia],
            self::Cameroon_Republic_of => [CountryAlpha2::Cameroon],
            self::Central_African_Republic => [CountryAlpha2::Central_African_Republic],
            self::Chad_Republic_of => [CountryAlpha2::Chad],
            self::Chile => [CountryAlpha2::Chile],
            self::China_Peoples_Republic_of => [CountryAlpha2::China],
            self::Colombia_Republic_of => [CountryAlpha2::Colombia],
            self::Comoros_Union_of_the => [CountryAlpha2::Comoros],
            self::Congo_Republic_of_the => [CountryAlpha2::Congo],
            self::Democratic_Republic_of_the_Congo => [CountryAlpha2::Congo_Democratic_Republic],
            self::Cook_Islands => [CountryAlpha2::Cook_Islands],
            self::Costa_Rica => [CountryAlpha2::Costa_Rica],
            self::Cote_dIvoire_Republic_of => [CountryAlpha2::Cote_d_Ivoire],
            self::Croatia_Republic_of => [CountryAlpha2::Croatia],
            self::Cuba => [CountryAlpha2::Cuba],
            self::Cyprus_Republic_of => [CountryAlpha2::Cyprus],
            self::Czech_Republic => [CountryAlpha2::Czechia],
            self::Denmark => [CountryAlpha2::Denmark],
            self::Djibouti_Republic_of => [CountryAlpha2::Djibouti],
            self::Ecuador => [CountryAlpha2::Ecuador],
            self::Egypt_Arab_Republic_of => [CountryAlpha2::Egypt],
            self::El_Salvador_Republic_of => [CountryAlpha2::El_Salvador],
            self::Equatorial_Guinea_Republic_of => [CountryAlpha2::Equatorial_Guinea],
            self::Eritrea => [CountryAlpha2::Eritrea],
            self::Estonia_Republic_of => [CountryAlpha2::Estonia],
            self::Swaziland_Kingdom_of => [CountryAlpha2::Eswatini],
            self::Ethiopia_Federal_Democratic_Republic_of => [CountryAlpha2::Ethiopia],
            self::Falkland_Islands_Malvinas => [CountryAlpha2::Falkland_Islands],
            self::Faroe_Islands => [CountryAlpha2::Faroe_Islands],
            self::Fiji_Republic_of => [CountryAlpha2::Fiji],
            self::Finland => [
                CountryAlpha2::Finland,
                CountryAlpha2::Aland_Islands
            ],
            self::France => [CountryAlpha2::France],
            self::French_Guiana_French_Department_of => [CountryAlpha2::French_Guiana],
            self::French_Polynesia_Territoire_francais_doutre_mer => [CountryAlpha2::French_Polynesia],
            self::French_Departments_and_Territories_in_the_Indian_Ocean => [
                CountryAlpha2::French_Southern_Territories,
                CountryAlpha2::Mayotte,
                CountryAlpha2::Reunion,
            ],
            self::Gabonese_Republic => [CountryAlpha2::Gabon],
            self::Gambia_Republic_of_the => [CountryAlpha2::Gambia],
            self::Georgia => [CountryAlpha2::Georgia],
            self::Germany_Federal_Republic_of => [CountryAlpha2::Germany],
            self::Ghana => [CountryAlpha2::Ghana],
            self::Gibraltar => [CountryAlpha2::Gibraltar],
            self::Greece => [CountryAlpha2::Greece],
            self::Greenland_Denmark => [CountryAlpha2::Greenland],
            self::Guadeloupe_French_Department_of => [CountryAlpha2::Guadeloupe, CountryAlpha2::Saint_Barthelemy, CountryAlpha2::Saint_Martin_French_part],
            self::Guatemala_Republic_of => [CountryAlpha2::Guatemala],
            self::Guinea_Republic_of => [CountryAlpha2::Guinea],
            self::Guinea_Bissau_Republic_of => [CountryAlpha2::Guinea_Bissau],
            self::Guyana => [CountryAlpha2::Guyana],
            self::Haiti_Republic_of => [CountryAlpha2::Haiti],
            self::Vatican_City_State => [CountryAlpha2::Holy_See],
            self::Honduras_Republic_of => [CountryAlpha2::Honduras],
            self::Honk_Kong_China => [CountryAlpha2::Hong_Kong],
            self::Hungary => [CountryAlpha2::Hungary],
            self::Iceland => [CountryAlpha2::Iceland],
            self::India_Republic_of => [CountryAlpha2::India],
            self::Indonesia_Republic_of => [CountryAlpha2::Indonesia],
            self::Iran_Islamic_Republic_of => [CountryAlpha2::Iran],
            self::Iraq_Republic_of => [CountryAlpha2::Iraq],
            self::Ireland => [CountryAlpha2::Ireland],
            self::Israel_State_of => [CountryAlpha2::Israel],
            self::Italy_Vatican_City => [CountryAlpha2::Italy],
            self::Japan => [CountryAlpha2::Japan],
            self::Jordan_Hashemite_Kingdom_of => [CountryAlpha2::Jordan],
            self::Kenya_Republic_of => [CountryAlpha2::Kenya],
            self::Kiribati_Republic_of => [CountryAlpha2::Kiribati],
            self::Democratic_Peoples_Republic_of_Korea => [CountryAlpha2::Korea_Democratic_Peoples_Republic],
            self::Korea_Republic_of => [CountryAlpha2::Korea_Republic],
            self::Kuwait_State_of => [CountryAlpha2::Kuwait],
            self::Kyrgyz_Republic => [CountryAlpha2::Kyrgyzstan],
            self::Lao_Peoples_Democratic_Republic => [CountryAlpha2::Lao_Peoples_Democratic_Republic],
            self::Latvia_Republic_of => [CountryAlpha2::Latvia],
            self::Lebanon => [CountryAlpha2::Lebanon],
            self::Lesotho_Kingdom_of => [CountryAlpha2::Lesotho],
            self::Liberia_Republic_of => [CountryAlpha2::Liberia],
            self::Libya => [CountryAlpha2::Libya],
            self::Liechtenstein_Principality_of => [CountryAlpha2::Liechtenstein],
            self::Lithuania_Republic_of => [CountryAlpha2::Lithuania],
            self::Luxembourg => [CountryAlpha2::Luxembourg],
            self::Macao_China => [CountryAlpha2::Macao],
            self::Madagascar_Republic_of => [CountryAlpha2::Madagascar],
            self::Malawi => [CountryAlpha2::Malawi],
            self::Malaysia => [CountryAlpha2::Malaysia],
            self::Maldives_Republic_of => [CountryAlpha2::Maldives],
            self::Mali_Republic_of => [CountryAlpha2::Mali],
            self::Malta => [CountryAlpha2::Malta],
            self::Marshall_Islands_Republic_of_the => [CountryAlpha2::Marshall_Islands],
            self::Martinique_French_Department_of => [CountryAlpha2::Martinique],
            self::Mauritania_Islamic_Republic_of => [CountryAlpha2::Mauritania],
            self::Mauritius_Republic_of => [CountryAlpha2::Mauritius],
            self::Mexico => [CountryAlpha2::Mexico],
            self::Micronesia_Federated_States_of => [CountryAlpha2::Micronesia],
            self::Moldova_Republic_of => [CountryAlpha2::Moldova],
            self::Monaco_Principality_of => [CountryAlpha2::Monaco],
            self::Mongolia => [CountryAlpha2::Mongolia],
            self::Montenegro => [CountryAlpha2::Montenegro],
            self::Morocco_Kingdom_of => [
                CountryAlpha2::Morocco,
                CountryAlpha2::Western_Sahara
            ],
            self::Mozambique_Republic_of => [CountryAlpha2::Mozambique],
            self::Myanmar_the_Republic_of_the_Union_of => [CountryAlpha2::Myanmar],
            self::Namibia_Republic_of => [CountryAlpha2::Namibia],
            self::Nauru_Republic_of => [CountryAlpha2::Nauru],
            self::Nepal_Federal_Democratic_Republic_of => [CountryAlpha2::Nepal],
            self::Netherlands_Kingdom_of_the => [CountryAlpha2::Netherlands],
            self::New_Caledonia_Territoire_Francais_doutre_mer => [CountryAlpha2::New_Caledonia],
            self::New_Zealand => [
                CountryAlpha2::New_Zealand,
                CountryAlpha2::Pitcairn,
            ],
            self::Nicaragua => [CountryAlpha2::Nicaragua],
            self::Niger_Republic_of_the => [CountryAlpha2::Niger],
            self::Nigeria_Federal_Republic_of => [CountryAlpha2::Nigeria],
            self::Niue => [CountryAlpha2::Niue],
            self::Norway => [
                CountryAlpha2::Norway,
                CountryAlpha2::Bouvet_Island,
                CountryAlpha2::Svalbard_Jan_Mayen,
            ],
            self::Oman_Sultanate_of => [CountryAlpha2::Oman],
            self::Pakistan_Islamic_Republic_of => [CountryAlpha2::Pakistan],
            self::Palau_Republic_of => [CountryAlpha2::Palau],
            self::Panama_Republic_of => [CountryAlpha2::Panama],
            self::Papua_New_Guinea => [CountryAlpha2::Papua_New_Guinea],
            self::Paraguay_Republic_of => [CountryAlpha2::Paraguay],
            self::Peru => [CountryAlpha2::Peru],
            self::Philippines_Republic_of => [CountryAlpha2::Philippines],
            self::Poland_Republic_of => [CountryAlpha2::Poland],
            self::Portugal => [CountryAlpha2::Portugal],
            self::Qatar_State_of => [CountryAlpha2::Qatar],
            self::Reserved_for_the_Palestinian_Authority => [CountryAlpha2::Palestine],
            self::Romania => [CountryAlpha2::Romania],
            self::Rwanda_Republic_of => [CountryAlpha2::Rwanda],
            self::Saint_Helena_Ascension_and_Tristan_da_Cunha => [CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha],
            self::Saint_Helena_Ascension_and_Tristan_da_Cunha_2 => [CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha],
            self::Saint_Pierre_and_Miquelon_Collectivite_territoriale_de_la_Republique_francaise => [CountryAlpha2::Saint_Pierre_and_Miquelon],
            self::Samoa_Independent_State_of => [CountryAlpha2::Samoa],
            self::San_Marino_Republic_of => [CountryAlpha2::San_Marino],
            self::Sao_Tome_and_Principe_Democratic_Republic_of => [CountryAlpha2::Sao_Tome_and_Principe],
            self::Saudi_Arabia_Kingdom_of => [CountryAlpha2::Saudi_Arabia],
            self::Senegal_Republic_of => [CountryAlpha2::Senegal],
            self::Serbia_Republic_of => [CountryAlpha2::Serbia],
            self::Seychelles_Republic_of => [CountryAlpha2::Seychelles],
            self::Sierra_Leone => [CountryAlpha2::Sierra_Leone],
            self::Singapore_Republic_of => [CountryAlpha2::Singapore],
            self::Slovak_Republic => [CountryAlpha2::Slovakia],
            self::Slovenia_Republic_of => [CountryAlpha2::Slovenia],
            self::Solomon_Islands => [CountryAlpha2::Solomon_Islands],
            self::Somalia_Federal_Republic_of => [CountryAlpha2::Somalia],
            self::South_Africa_Republic_of => [CountryAlpha2::South_Africa],
            self::South_Sudan_Republic_of => [CountryAlpha2::South_Sudan],
            self::Spain => [CountryAlpha2::Spain],
            self::Sri_Lanka_Democratic_Socialist_Republic_of => [CountryAlpha2::Sri_Lanka],
            self::Sudan_Republic_of_the => [CountryAlpha2::Sudan],
            self::Suriname_Republic_of => [CountryAlpha2::Suriname],
            self::Sweden => [CountryAlpha2::Sweden],
            self::Switzerland_Confederation_of => [CountryAlpha2::Switzerland],
            self::Syrian_Arab_Republic => [CountryAlpha2::Syrian_Arab_Republic],
            self::The_Former_Yugoslav_Republic_of_Macedonia => [CountryAlpha2::North_Macedonia],
            self::Taiwan_China => [CountryAlpha2::Taiwan_Province_of_China],
            self::Tajikistan_Republic_of => [CountryAlpha2::Tajikistan],
            self::Tanzania_United_Republic_of => [CountryAlpha2::Tanzania],
            self::Thailand => [CountryAlpha2::Thailand],
            self::Timor_Leste_Democratic_Republic_of => [CountryAlpha2::Timor_Leste],
            self::Togolese_Republic => [CountryAlpha2::Togo],
            self::Tokelau => [CountryAlpha2::Tokelau],
            self::Tonga_Kingdom_of => [CountryAlpha2::Tonga],
            self::Tunisia => [CountryAlpha2::Tunisia],
            self::Turkey => [CountryAlpha2::Turkey],
            self::Turkmenistan => [CountryAlpha2::Turkmenistan],
            self::Tuvalu => [CountryAlpha2::Tuvalu],
            self::Uganda_Republic_of => [CountryAlpha2::Uganda],
            self::Ukraine => [CountryAlpha2::Ukraine],
            self::United_Arab_Emirates => [CountryAlpha2::United_Arab_Emirates],
            self::United_Kingdom_of_Great_Britain_and_Northern_Ireland => [
                CountryAlpha2::United_Kingdom,
                CountryAlpha2::Guernsey,
                CountryAlpha2::Isle_of_Man,
                CountryAlpha2::Jersey,
                CountryAlpha2::South_Georgia_South_Sandwich_Islands,
            ],
            self::Uruguay_Eastern_Republic_of => [CountryAlpha2::Uruguay],
            self::Uzbekistan_Republic_of => [CountryAlpha2::Uzbekistan],
            self::Vanuata_Republic_of => [CountryAlpha2::Vanuatu],
            self::Venezuela_Bolivarian_Republic_of => [CountryAlpha2::Venezuela],
            self::Viet_Nam_Socialist_Republic_of => [CountryAlpha2::Viet_Nam],
            self::Wallis_and_Futuna_Territoire_francais_doutre_mer => [CountryAlpha2::Wallis_and_Futuna],
            self::Yemen_Republic_of => [CountryAlpha2::Yemen],
            self::Zambia_Republic_of => [CountryAlpha2::Zambia],
            self::Zimbabwe_Republic_of => [CountryAlpha2::Zimbabwe],
            default => [],
        };
    }
}

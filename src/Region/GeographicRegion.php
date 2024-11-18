<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Region;

use PrinsFrank\Standards\Country\CountryNumeric;

/**
 * @source https://unstats.un.org/unsd/methodology/m49/
 *
 * @manually-updated
 */
enum GeographicRegion: string {
    case World = '001';
    case Africa = '002';
    case Northern_Africa = '015';
    case Sub_Saharan_Africa = '202';
    case Eastern_Africa = '014';
    case Middle_Africa = '017';
    case Southern_Africa = '018';
    case Western_Africa = '011';
    case Americas = '019';
    case Latin_America_And_The_Caribbean = '419';
    case Caribbean = '029';
    case Central_America = '013';
    case South_America = '005';
    case Northern_America = '021';
    case Asia = '142';
    case Central_Asia = '143';
    case Eastern_Asia = '030';
    case South_Eastern_Asia = '035';
    case Southern_Asia = '034';
    case Western_Asia = '145';
    case Europe = '150';
    case Eastern_Europe = '151';
    case Northern_Europe = '154';
    case Southern_Europe = '039';
    case Western_Europe = '155';
    case Landlocked_Developing_Countries = '432';
    case Least_Developed_Countries = '199';
    case Oceania = '009';
    case Australia_And_New_Zealand = '053';
    case Melanesia = '054';
    case Micronesia = '057';
    case Polynesia = '061';
    case Small_Island_Developing_States = '722';
    case North_America = '003';

    /** @return list<GeographicRegion> */
    public function getDirectSubRegions(): array {
        return match ($this) {
            self::World => [
                self::Africa,
                self::Americas,
                self::Asia,
                self::Europe,
                self::Landlocked_Developing_Countries,
                self::Least_Developed_Countries,
                self::Oceania,
                self::Small_Island_Developing_States,
            ],
            self::Africa => [
                self::Northern_Africa,
                self::Sub_Saharan_Africa,
            ],
            self::Sub_Saharan_Africa => [
                self::Eastern_Africa,
                self::Middle_Africa,
                self::Southern_Africa,
                self::Western_Africa,
            ],
            self::Americas => [
                self::Latin_America_And_The_Caribbean,
                self::Northern_America,
            ],
            self::Latin_America_And_The_Caribbean => [
                self::Caribbean,
                self::Central_America,
                self::South_America,
            ],
            self::Asia => [
                self::Central_Asia,
                self::Eastern_Asia,
                self::South_Eastern_Asia,
                self::Southern_Asia,
                self::Western_Asia,
            ],
            self::Europe => [
                self::Eastern_Europe,
                self::Northern_Europe,
                self::Southern_Europe,
                self::Western_Europe,
            ],
            self::Oceania => [
                self::Australia_And_New_Zealand,
                self::Melanesia,
                self::Micronesia,
                self::Polynesia,
            ],
            self::North_America => [
                self::Northern_America,
                self::Caribbean,
                self::Central_America,
            ],
            default => [],
        };
    }

    /** @return list<GeographicRegion> */
    public function getAllSubRegions(): array {
        $subRegions = [];
        foreach ($this->getDirectSubRegions() as $subRegion) {
            $subRegions[] = $subRegion;
            foreach ($subRegion->getAllSubRegions() as $indirectSubRegion) {
                $subRegions[] = $indirectSubRegion;
            }
        }

        return $subRegions;
    }

    /** @return list<CountryNumeric> */
    public function getDirectSubCountries(): array {
        return match ($this) {
            self::World => [
                CountryNumeric::Antarctica,
            ],
            self::Northern_Africa => [
                CountryNumeric::Algeria,
                CountryNumeric::Egypt,
                CountryNumeric::Libya,
                CountryNumeric::Morocco,
                CountryNumeric::Sudan,
                CountryNumeric::Tunisia,
                CountryNumeric::Western_Sahara,
            ],
            self::Eastern_Africa => [
                CountryNumeric::British_Indian_Ocean_Territory,
                CountryNumeric::Burundi,
                CountryNumeric::Comoros,
                CountryNumeric::Djibouti,
                CountryNumeric::Eritrea,
                CountryNumeric::Ethiopia,
                CountryNumeric::French_Southern_Territories,
                CountryNumeric::Kenya,
                CountryNumeric::Madagascar,
                CountryNumeric::Malawi,
                CountryNumeric::Mauritius,
                CountryNumeric::Mayotte,
                CountryNumeric::Mozambique,
                CountryNumeric::Reunion,
                CountryNumeric::Rwanda,
                CountryNumeric::Seychelles,
                CountryNumeric::Somalia,
                CountryNumeric::South_Sudan,
                CountryNumeric::Uganda,
                CountryNumeric::Tanzania,
                CountryNumeric::Zambia,
                CountryNumeric::Zimbabwe,
            ],
            self::Middle_Africa => [
                CountryNumeric::Angola,
                CountryNumeric::Cameroon,
                CountryNumeric::Central_African_Republic,
                CountryNumeric::Chad,
                CountryNumeric::Congo,
                CountryNumeric::Congo_Democratic_Republic,
                CountryNumeric::Equatorial_Guinea,
                CountryNumeric::Gabon,
                CountryNumeric::Sao_Tome_and_Principe,
            ],
            self::Southern_Africa => [
                CountryNumeric::Botswana,
                CountryNumeric::Eswatini,
                CountryNumeric::Lesotho,
                CountryNumeric::Namibia,
                CountryNumeric::South_Africa,
            ],
            self::Western_Africa => [
                CountryNumeric::Benin,
                CountryNumeric::Burkina_Faso,
                CountryNumeric::Cabo_Verde,
                CountryNumeric::Cote_d_Ivoire,
                CountryNumeric::Gambia,
                CountryNumeric::Ghana,
                CountryNumeric::Guinea,
                CountryNumeric::Guinea_Bissau,
                CountryNumeric::Liberia,
                CountryNumeric::Mali,
                CountryNumeric::Mauritania,
                CountryNumeric::Niger,
                CountryNumeric::Nigeria,
                CountryNumeric::Saint_Helena_Ascension_Tristan_da_Cunha,
                CountryNumeric::Senegal,
                CountryNumeric::Sierra_Leone,
                CountryNumeric::Togo,
            ],
            self::Caribbean => [
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
            ],
            self::Central_America => [
                CountryNumeric::Belize,
                CountryNumeric::Costa_Rica,
                CountryNumeric::El_Salvador,
                CountryNumeric::Guatemala,
                CountryNumeric::Honduras,
                CountryNumeric::Mexico,
                CountryNumeric::Nicaragua,
                CountryNumeric::Panama,
            ],
            self::South_America => [
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
            ],
            self::Northern_America => [
                CountryNumeric::Bermuda,
                CountryNumeric::Canada,
                CountryNumeric::Greenland,
                CountryNumeric::Saint_Pierre_and_Miquelon,
                CountryNumeric::United_States_of_America,
            ],
            self::Central_Asia => [
                CountryNumeric::Kazakhstan,
                CountryNumeric::Kyrgyzstan,
                CountryNumeric::Tajikistan,
                CountryNumeric::Turkmenistan,
                CountryNumeric::Uzbekistan,
            ],
            self::Eastern_Asia => [
                CountryNumeric::China,
                CountryNumeric::Hong_Kong,
                CountryNumeric::Macao,
                CountryNumeric::Korea_Democratic_Peoples_Republic,
                CountryNumeric::Japan,
                CountryNumeric::Mongolia,
                CountryNumeric::Korea_Republic,
            ],
            self::South_Eastern_Asia => [
                CountryNumeric::Brunei_Darussalam,
                CountryNumeric::Cambodia,
                CountryNumeric::Indonesia,
                CountryNumeric::Lao_Peoples_Democratic_Republic,
                CountryNumeric::Malaysia,
                CountryNumeric::Myanmar,
                CountryNumeric::Philippines,
                CountryNumeric::Singapore,
                CountryNumeric::Thailand,
                CountryNumeric::Timor_Leste,
                CountryNumeric::Viet_Nam,
            ],
            self::Southern_Asia => [
                CountryNumeric::Afghanistan,
                CountryNumeric::Bangladesh,
                CountryNumeric::Bhutan,
                CountryNumeric::India,
                CountryNumeric::Iran,
                CountryNumeric::Maldives,
                CountryNumeric::Nepal,
                CountryNumeric::Pakistan,
                CountryNumeric::Sri_Lanka,
            ],
            self::Western_Asia => [
                CountryNumeric::Armenia,
                CountryNumeric::Azerbaijan,
                CountryNumeric::Bahrain,
                CountryNumeric::Cyprus,
                CountryNumeric::Georgia,
                CountryNumeric::Iraq,
                CountryNumeric::Israel,
                CountryNumeric::Jordan,
                CountryNumeric::Kuwait,
                CountryNumeric::Lebanon,
                CountryNumeric::Oman,
                CountryNumeric::Qatar,
                CountryNumeric::Saudi_Arabia,
                CountryNumeric::Palestine,
                CountryNumeric::Syrian_Arab_Republic,
                CountryNumeric::Turkey,
                CountryNumeric::United_Arab_Emirates,
                CountryNumeric::Yemen,
            ],
            self::Eastern_Europe => [
                CountryNumeric::Belarus,
                CountryNumeric::Bulgaria,
                CountryNumeric::Czechia,
                CountryNumeric::Hungary,
                CountryNumeric::Poland,
                CountryNumeric::Moldova,
                CountryNumeric::Romania,
                CountryNumeric::Russian_Federation,
                CountryNumeric::Slovakia,
                CountryNumeric::Ukraine,
            ],
            self::Northern_Europe => [
                CountryNumeric::Aland_Islands,
                CountryNumeric::Denmark,
                CountryNumeric::Estonia,
                CountryNumeric::Faroe_Islands,
                CountryNumeric::Finland,
                CountryNumeric::Guernsey,
                CountryNumeric::Iceland,
                CountryNumeric::Ireland,
                CountryNumeric::Isle_of_Man,
                CountryNumeric::Jersey,
                CountryNumeric::Latvia,
                CountryNumeric::Lithuania,
                CountryNumeric::Norway,
                CountryNumeric::Svalbard_Jan_Mayen,
                CountryNumeric::Sweden,
                CountryNumeric::United_Kingdom,
            ],
            self::Southern_Europe => [
                CountryNumeric::Albania,
                CountryNumeric::Andorra,
                CountryNumeric::Bosnia_and_Herzegovina,
                CountryNumeric::Croatia,
                CountryNumeric::Gibraltar,
                CountryNumeric::Greece,
                CountryNumeric::Holy_See,
                CountryNumeric::Italy,
                CountryNumeric::Malta,
                CountryNumeric::Montenegro,
                CountryNumeric::North_Macedonia,
                CountryNumeric::Portugal,
                CountryNumeric::San_Marino,
                CountryNumeric::Serbia,
                CountryNumeric::Slovenia,
                CountryNumeric::Spain,
            ],
            self::Western_Europe => [
                CountryNumeric::Austria,
                CountryNumeric::Belgium,
                CountryNumeric::France,
                CountryNumeric::Germany,
                CountryNumeric::Liechtenstein,
                CountryNumeric::Luxembourg,
                CountryNumeric::Monaco,
                CountryNumeric::Netherlands,
                CountryNumeric::Switzerland,
            ],
            self::Australia_And_New_Zealand => [
                CountryNumeric::Australia,
                CountryNumeric::Christmas_Island,
                CountryNumeric::Cocos_Islands,
                CountryNumeric::Heard_Island_and_McDonald_Islands,
                CountryNumeric::New_Zealand,
                CountryNumeric::Norfolk_Island,
            ],
            self::Melanesia => [
                CountryNumeric::Fiji,
                CountryNumeric::New_Caledonia,
                CountryNumeric::Papua_New_Guinea,
                CountryNumeric::Solomon_Islands,
                CountryNumeric::Vanuatu,
            ],
            self::Micronesia => [
                CountryNumeric::Guam,
                CountryNumeric::Kiribati,
                CountryNumeric::Marshall_Islands,
                CountryNumeric::Micronesia,
                CountryNumeric::Nauru,
                CountryNumeric::Northern_Mariana_Islands,
                CountryNumeric::Palau,
                CountryNumeric::United_States_Outlying_Islands,
            ],
            self::Polynesia => [
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
            self::Landlocked_Developing_Countries => [
                CountryNumeric::Burundi,
                CountryNumeric::Ethiopia,
                CountryNumeric::Malawi,
                CountryNumeric::Rwanda,
                CountryNumeric::South_Sudan,
                CountryNumeric::Uganda,
                CountryNumeric::Zambia,
                CountryNumeric::Zimbabwe,
                CountryNumeric::Central_African_Republic,
                CountryNumeric::Chad,
                CountryNumeric::Botswana,
                CountryNumeric::Eswatini,
                CountryNumeric::Lesotho,
                CountryNumeric::Burkina_Faso,
                CountryNumeric::Mali,
                CountryNumeric::Niger,
                CountryNumeric::Bolivia,
                CountryNumeric::Paraguay,
                CountryNumeric::Kazakhstan,
                CountryNumeric::Kyrgyzstan,
                CountryNumeric::Tajikistan,
                CountryNumeric::Turkmenistan,
                CountryNumeric::Uzbekistan,
                CountryNumeric::Mongolia,
                CountryNumeric::Lao_Peoples_Democratic_Republic,
                CountryNumeric::Afghanistan,
                CountryNumeric::Bhutan,
                CountryNumeric::Nepal,
                CountryNumeric::Armenia,
                CountryNumeric::Azerbaijan,
                CountryNumeric::Moldova,
                CountryNumeric::North_Macedonia,
            ],
            self::Least_Developed_Countries => [
                CountryNumeric::Sudan,
                CountryNumeric::Burundi,
                CountryNumeric::Comoros,
                CountryNumeric::Djibouti,
                CountryNumeric::Eritrea,
                CountryNumeric::Ethiopia,
                CountryNumeric::Madagascar,
                CountryNumeric::Malawi,
                CountryNumeric::Mozambique,
                CountryNumeric::Rwanda,
                CountryNumeric::Somalia,
                CountryNumeric::South_Sudan,
                CountryNumeric::Uganda,
                CountryNumeric::Tanzania,
                CountryNumeric::Zambia,
                CountryNumeric::Angola,
                CountryNumeric::Central_African_Republic,
                CountryNumeric::Chad,
                CountryNumeric::Congo_Democratic_Republic,
                CountryNumeric::Sao_Tome_and_Principe,
                CountryNumeric::Lesotho,
                CountryNumeric::Benin,
                CountryNumeric::Burkina_Faso,
                CountryNumeric::Gambia,
                CountryNumeric::Guinea,
                CountryNumeric::Guinea_Bissau,
                CountryNumeric::Liberia,
                CountryNumeric::Mali,
                CountryNumeric::Mauritania,
                CountryNumeric::Niger,
                CountryNumeric::Senegal,
                CountryNumeric::Sierra_Leone,
                CountryNumeric::Togo,
                CountryNumeric::Haiti,
                CountryNumeric::Cambodia,
                CountryNumeric::Lao_Peoples_Democratic_Republic,
                CountryNumeric::Myanmar,
                CountryNumeric::Timor_Leste,
                CountryNumeric::Afghanistan,
                CountryNumeric::Bangladesh,
                CountryNumeric::Bhutan,
                CountryNumeric::Nepal,
                CountryNumeric::Yemen,
                CountryNumeric::Solomon_Islands,
                CountryNumeric::Kiribati,
                CountryNumeric::Tuvalu,
            ],
            self::Small_Island_Developing_States => [
                CountryNumeric::Comoros,
                CountryNumeric::Mauritius,
                CountryNumeric::Seychelles,
                CountryNumeric::Sao_Tome_and_Principe,
                CountryNumeric::Cabo_Verde,
                CountryNumeric::Guinea_Bissau,
                CountryNumeric::Anguilla,
                CountryNumeric::Antigua_and_Barbuda,
                CountryNumeric::Aruba,
                CountryNumeric::Bahamas,
                CountryNumeric::Barbados,
                CountryNumeric::Bonaire_Sint_Eustatius_and_Saba,
                CountryNumeric::British_Indian_Ocean_Territory,
                CountryNumeric::Cuba,
                CountryNumeric::Curacao,
                CountryNumeric::Dominica,
                CountryNumeric::Dominican_Republic,
                CountryNumeric::Grenada,
                CountryNumeric::Haiti,
                CountryNumeric::Jamaica,
                CountryNumeric::Montserrat,
                CountryNumeric::Puerto_Rico,
                CountryNumeric::Saint_Kitts_and_Nevis,
                CountryNumeric::Saint_Lucia,
                CountryNumeric::Saint_Vincent_and_the_Grenadines,
                CountryNumeric::Sint_Maarten_Dutch_part,
                CountryNumeric::Trinidad_and_Tobago,
                CountryNumeric::Virgin_Islands_U_S,
                CountryNumeric::Belize,
                CountryNumeric::Guyana,
                CountryNumeric::Suriname,
                CountryNumeric::Singapore,
                CountryNumeric::Timor_Leste,
                CountryNumeric::Maldives,
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
                CountryNumeric::American_Samoa,
                CountryNumeric::Cook_Islands,
                CountryNumeric::French_Polynesia,
                CountryNumeric::Niue,
                CountryNumeric::Samoa,
                CountryNumeric::Tonga,
                CountryNumeric::Tuvalu,
            ],
            default => [],
        };
    }

    /** @return list<CountryNumeric> */
    public function getAllSubCountries(): array {
        $subCountries = [];
        foreach ($this->getDirectSubRegions() as $subRegion) {
            $subCountries = [...$subCountries, ...$subRegion->getDirectSubCountries()];
            foreach ($subRegion->getAllSubRegions() as $indirectSubRegion) {
                $subCountries = [...$subCountries, ...$indirectSubRegion->getDirectSubCountries()];
            }
        }

        return $subCountries;
    }
}

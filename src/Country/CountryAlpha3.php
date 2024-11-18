<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Country\Groups\GroupInterface;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\CountryCallingCode\CountryCallingCode;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\InternationalCallPrefix\InternationalCallPrefix;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\Name\NameOrder;
use PrinsFrank\Standards\NationalCallPrefix\NationalCallPrefix;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;

/**
 * @standard ISO3166_1
 * @source https://www.iso.org/obp/ui/#search/code/
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\CountryMapping
 */
enum CountryAlpha3: string {
    case Afghanistan = 'AFG';
    case Aland_Islands = 'ALA';
    case Albania = 'ALB';
    case Algeria = 'DZA';
    case American_Samoa = 'ASM';
    case Andorra = 'AND';
    case Angola = 'AGO';
    case Anguilla = 'AIA';
    case Antarctica = 'ATA';
    case Antigua_and_Barbuda = 'ATG';
    case Argentina = 'ARG';
    case Armenia = 'ARM';
    case Aruba = 'ABW';
    case Australia = 'AUS';
    case Austria = 'AUT';
    case Azerbaijan = 'AZE';
    case Bahamas = 'BHS';
    case Bahrain = 'BHR';
    case Bangladesh = 'BGD';
    case Barbados = 'BRB';
    case Belarus = 'BLR';
    case Belgium = 'BEL';
    case Belize = 'BLZ';
    case Benin = 'BEN';
    case Bermuda = 'BMU';
    case Bhutan = 'BTN';
    case Bolivia = 'BOL';
    case Bonaire_Sint_Eustatius_and_Saba = 'BES';
    case Bosnia_and_Herzegovina = 'BIH';
    case Botswana = 'BWA';
    case Bouvet_Island = 'BVT';
    case Brazil = 'BRA';
    case British_Indian_Ocean_Territory = 'IOT';
    case Brunei_Darussalam = 'BRN';
    case Bulgaria = 'BGR';
    case Burkina_Faso = 'BFA';
    case Burundi = 'BDI';
    case Cabo_Verde = 'CPV';
    case Cambodia = 'KHM';
    case Cameroon = 'CMR';
    case Canada = 'CAN';
    case Cayman_Islands = 'CYM';
    case Central_African_Republic = 'CAF';
    case Chad = 'TCD';
    case Chile = 'CHL';
    case China = 'CHN';
    case Christmas_Island = 'CXR';
    case Cocos_Islands = 'CCK';
    case Colombia = 'COL';
    case Comoros = 'COM';
    case Congo = 'COG';
    case Congo_Democratic_Republic = 'COD';
    case Cook_Islands = 'COK';
    case Costa_Rica = 'CRI';
    case Cote_d_Ivoire = 'CIV';
    case Croatia = 'HRV';
    case Cuba = 'CUB';
    case Curacao = 'CUW';
    case Cyprus = 'CYP';
    case Czechia = 'CZE';
    case Denmark = 'DNK';
    case Djibouti = 'DJI';
    case Dominica = 'DMA';
    case Dominican_Republic = 'DOM';
    case Ecuador = 'ECU';
    case Egypt = 'EGY';
    case El_Salvador = 'SLV';
    case Equatorial_Guinea = 'GNQ';
    case Eritrea = 'ERI';
    case Estonia = 'EST';
    case Eswatini = 'SWZ';
    case Ethiopia = 'ETH';
    case Falkland_Islands = 'FLK';
    case Faroe_Islands = 'FRO';
    case Fiji = 'FJI';
    case Finland = 'FIN';
    case France = 'FRA';
    case French_Guiana = 'GUF';
    case French_Polynesia = 'PYF';
    case French_Southern_Territories = 'ATF';
    case Gabon = 'GAB';
    case Gambia = 'GMB';
    case Georgia = 'GEO';
    case Germany = 'DEU';
    case Ghana = 'GHA';
    case Gibraltar = 'GIB';
    case Greece = 'GRC';
    case Greenland = 'GRL';
    case Grenada = 'GRD';
    case Guadeloupe = 'GLP';
    case Guam = 'GUM';
    case Guatemala = 'GTM';
    case Guernsey = 'GGY';
    case Guinea = 'GIN';
    case Guinea_Bissau = 'GNB';
    case Guyana = 'GUY';
    case Haiti = 'HTI';
    case Heard_Island_and_McDonald_Islands = 'HMD';
    case Holy_See = 'VAT';
    case Honduras = 'HND';
    case Hong_Kong = 'HKG';
    case Hungary = 'HUN';
    case Iceland = 'ISL';
    case India = 'IND';
    case Indonesia = 'IDN';
    case Iran = 'IRN';
    case Iraq = 'IRQ';
    case Ireland = 'IRL';
    case Isle_of_Man = 'IMN';
    case Israel = 'ISR';
    case Italy = 'ITA';
    case Jamaica = 'JAM';
    case Japan = 'JPN';
    case Jersey = 'JEY';
    case Jordan = 'JOR';
    case Kazakhstan = 'KAZ';
    case Kenya = 'KEN';
    case Kiribati = 'KIR';
    case Korea_Democratic_Peoples_Republic = 'PRK';
    case Korea_Republic = 'KOR';
    case Kuwait = 'KWT';
    case Kyrgyzstan = 'KGZ';
    case Lao_Peoples_Democratic_Republic = 'LAO';
    case Latvia = 'LVA';
    case Lebanon = 'LBN';
    case Lesotho = 'LSO';
    case Liberia = 'LBR';
    case Libya = 'LBY';
    case Liechtenstein = 'LIE';
    case Lithuania = 'LTU';
    case Luxembourg = 'LUX';
    case Macao = 'MAC';
    case Madagascar = 'MDG';
    case Malawi = 'MWI';
    case Malaysia = 'MYS';
    case Maldives = 'MDV';
    case Mali = 'MLI';
    case Malta = 'MLT';
    case Marshall_Islands = 'MHL';
    case Martinique = 'MTQ';
    case Mauritania = 'MRT';
    case Mauritius = 'MUS';
    case Mayotte = 'MYT';
    case Mexico = 'MEX';
    case Micronesia = 'FSM';
    case Moldova = 'MDA';
    case Monaco = 'MCO';
    case Mongolia = 'MNG';
    case Montenegro = 'MNE';
    case Montserrat = 'MSR';
    case Morocco = 'MAR';
    case Mozambique = 'MOZ';
    case Myanmar = 'MMR';
    case Namibia = 'NAM';
    case Nauru = 'NRU';
    case Nepal = 'NPL';
    case Netherlands = 'NLD';
    case New_Caledonia = 'NCL';
    case New_Zealand = 'NZL';
    case Nicaragua = 'NIC';
    case Niger = 'NER';
    case Nigeria = 'NGA';
    case Niue = 'NIU';
    case Norfolk_Island = 'NFK';
    case North_Macedonia = 'MKD';
    case Northern_Mariana_Islands = 'MNP';
    case Norway = 'NOR';
    case Oman = 'OMN';
    case Pakistan = 'PAK';
    case Palau = 'PLW';
    case Palestine = 'PSE';
    case Panama = 'PAN';
    case Papua_New_Guinea = 'PNG';
    case Paraguay = 'PRY';
    case Peru = 'PER';
    case Philippines = 'PHL';
    case Pitcairn = 'PCN';
    case Poland = 'POL';
    case Portugal = 'PRT';
    case Puerto_Rico = 'PRI';
    case Qatar = 'QAT';
    case Reunion = 'REU';
    case Romania = 'ROU';
    case Russian_Federation = 'RUS';
    case Rwanda = 'RWA';
    case Saint_Barthelemy = 'BLM';
    case Saint_Helena_Ascension_Tristan_da_Cunha = 'SHN';
    case Saint_Kitts_and_Nevis = 'KNA';
    case Saint_Lucia = 'LCA';
    case Saint_Martin_French_part = 'MAF';
    case Saint_Pierre_and_Miquelon = 'SPM';
    case Saint_Vincent_and_the_Grenadines = 'VCT';
    case Samoa = 'WSM';
    case San_Marino = 'SMR';
    case Sao_Tome_and_Principe = 'STP';
    case Saudi_Arabia = 'SAU';
    case Senegal = 'SEN';
    case Serbia = 'SRB';
    case Seychelles = 'SYC';
    case Sierra_Leone = 'SLE';
    case Singapore = 'SGP';
    case Sint_Maarten_Dutch_part = 'SXM';
    case Slovakia = 'SVK';
    case Slovenia = 'SVN';
    case Solomon_Islands = 'SLB';
    case Somalia = 'SOM';
    case South_Africa = 'ZAF';
    case South_Georgia_South_Sandwich_Islands = 'SGS';
    case South_Sudan = 'SSD';
    case Spain = 'ESP';
    case Sri_Lanka = 'LKA';
    case Sudan = 'SDN';
    case Suriname = 'SUR';
    case Svalbard_Jan_Mayen = 'SJM';
    case Sweden = 'SWE';
    case Switzerland = 'CHE';
    case Syrian_Arab_Republic = 'SYR';
    case Taiwan_Province_of_China = 'TWN';
    case Tajikistan = 'TJK';
    case Tanzania = 'TZA';
    case Thailand = 'THA';
    case Timor_Leste = 'TLS';
    case Togo = 'TGO';
    case Tokelau = 'TKL';
    case Tonga = 'TON';
    case Trinidad_and_Tobago = 'TTO';
    case Tunisia = 'TUN';
    case Turkey = 'TUR';
    case Turkmenistan = 'TKM';
    case Turks_and_Caicos_Islands = 'TCA';
    case Tuvalu = 'TUV';
    case Uganda = 'UGA';
    case Ukraine = 'UKR';
    case United_Arab_Emirates = 'ARE';
    case United_Kingdom = 'GBR';
    case United_States_Outlying_Islands = 'UMI';
    case United_States_of_America = 'USA';
    case Uruguay = 'URY';
    case Uzbekistan = 'UZB';
    case Vanuatu = 'VUT';
    case Venezuela = 'VEN';
    case Viet_Nam = 'VNM';
    case Virgin_Islands_British = 'VGB';
    case Virgin_Islands_U_S = 'VIR';
    case Wallis_and_Futuna = 'WLF';
    case Western_Sahara = 'ESH';
    case Yemen = 'YEM';
    case Zambia = 'ZMB';
    case Zimbabwe = 'ZWE';

    public function toCountryAlpha2(): CountryAlpha2 {
        return BackedEnum::fromName(CountryAlpha2::class, $this->name);
    }

    public function toCountryNumeric(): CountryNumeric {
        return BackedEnum::fromName(CountryNumeric::class, $this->name);
    }

    /** @deprecated Will be removed in v4. Please use ::getNameInLanguage(LanguageAlpha2::English) instead */
    public function toCountryName(): CountryName {
        return BackedEnum::fromName(CountryName::class, $this->name);
    }

    public function lowerCaseValue(): string {
        return strtolower($this->value);
    }

    public function getNameInLanguage(LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|LanguageAlpha3Extensive $language): ?string {
        return $this->toCountryAlpha2()->getNameInLanguage($language);
    }

    public function formatNumber(float $amount, LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|LanguageAlpha3Extensive $language): ?string {
        return $this->toCountryAlpha2()->formatNumber($amount, $language);
    }

    /**
     * @param class-string<GroupInterface> $groupFQN
     * @throws InvalidArgumentException
     */
    public function isMemberOf(string $groupFQN): bool {
        if (is_a($groupFQN, GroupInterface::class, true) === false || $groupFQN === GroupInterface::class) {
            throw new InvalidArgumentException('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "' . $groupFQN . '" given');
        }

        return in_array($this->toCountryAlpha2(), $groupFQN::allAlpha2(), true);
    }

    /** @return list<CountryCallingCode> */
    public function getCountryCallingCodes(): array {
        return CountryCallingCode::forCountry($this);
    }

    public function getNationalCallPrefix(): NationalCallPrefix {
        return NationalCallPrefix::forCountry($this);
    }

    public function getInternationalCallPrefix(): InternationalCallPrefix {
        return InternationalCallPrefix::forCountry($this);
    }

    /**
     * When displaying this on web pages, keep in mind the default windows fonts don't have a representation for these.
     *
     * @see https://prinsfrank.nl/2021/01/25/Non-existing-flag-emojis-on-windows to make these flag emojis visible for Windows users.
     */
    public function getFlagEmoji(): string {
        return $this->toCountryAlpha2()->getFlagEmoji();
    }

    public function getMostCommonNameOrder(): NameOrder {
        return $this->toCountryAlpha2()->getMostCommonNameOrder();
    }

    /** @return list<CurrencyAlpha3> */
    public function getCurrenciesAlpha3(): array {
        return $this->toCountryAlpha2()->getCurrenciesAlpha3();
    }

    /** @return list<LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Extensive> */
    public function getOfficialAndDeFactoLanguages(): array {
        return $this->toCountryAlpha2()->getOfficialAndDeFactoLanguages();
    }

    public function getCountryCodeTLD(): CountryCodeTLD {
        return $this->toCountryAlpha2()->getCountryCodeTLD();
    }

    /** @return list<CountrySubdivision> */
    public function getSubdivisions(): array {
        return $this->toCountryAlpha2()->getSubdivisions();
    }

    /** @return list<self> */
    public function getSubCountries(): array {
        return array_map(fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->toCountryAlpha3(), $this->toCountryAlpha2()->getSubCountries());
    }

    public function getParentCountry(): ?self {
        return $this->toCountryAlpha2()->getParentCountry()?->toCountryAlpha3();
    }

    /**
     * If users need code elements to represent country names not included in ISO 3166-1, (...) the series AAA to AAZ, QMA to QZZ, XAA to XZZ, and ZZA to ZZZ respectively (...) are available
     *
     * @see https://www.iso.org/glossary-for-iso-3166.html
     */
    public static function isInUserAssignedSpace(string $alpha3): bool {
        if (strlen($alpha3) !== 3) {
            return false;
        }

        $firstChar = substr($alpha3, 0, 1);
        $secondChar = substr($alpha3, 1, 1);
        $thirdChar = substr($alpha3, 2, 1);
        if ($firstChar === 'A'
            && $secondChar === 'A'
            && ord($thirdChar) >= ord('A') && ord($thirdChar) <= ord('Z')) {
            return true;
        }

        if ($firstChar === 'Q'
            && ord($secondChar) >= ord('M') && ord($secondChar) <= ord('Z')
            && ord($thirdChar) >= ord('A') && ord($thirdChar) <= ord('Z')) {
            return true;
        }

        if ($firstChar === 'X'
            && ord($secondChar) >= ord('A') && ord($secondChar) <= ord('Z')
            && ord($thirdChar) >= ord('A') && ord($thirdChar) <= ord('Z')) {
            return true;
        }

        if ($firstChar === 'Z'
            && $secondChar === 'Z'
            && ord($thirdChar) >= ord('A') && ord($thirdChar) <= ord('Z')) {
            return true;
        }

        return false;
    }
}

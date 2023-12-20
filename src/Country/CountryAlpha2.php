<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country;

use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\Country\Groups\GroupInterface;
use PrinsFrank\Standards\CountryCallingCode\CountryCallingCode;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use PrinsFrank\Standards\InternationalCallPrefix\InternationalCallPrefix;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use PrinsFrank\Standards\NationalCallPrefix\NationalCallPrefix;

/**
 * @source https://www.iso.org/obp/ui/#search/code/
 * @standard ISO3166_1
 */
enum CountryAlpha2: string
{
    case Afghanistan                             = 'AF';
    case Aland_Islands                           = 'AX';
    case Albania                                 = 'AL';
    case Algeria                                 = 'DZ';
    case American_Samoa                          = 'AS';
    case Andorra                                 = 'AD';
    case Angola                                  = 'AO';
    case Anguilla                                = 'AI';
    case Antarctica                              = 'AQ';
    case Antigua_and_Barbuda                     = 'AG';
    case Argentina                               = 'AR';
    case Armenia                                 = 'AM';
    case Aruba                                   = 'AW';
    case Australia                               = 'AU';
    case Austria                                 = 'AT';
    case Azerbaijan                              = 'AZ';
    case Bahamas                                 = 'BS';
    case Bahrain                                 = 'BH';
    case Bangladesh                              = 'BD';
    case Barbados                                = 'BB';
    case Belarus                                 = 'BY';
    case Belgium                                 = 'BE';
    case Belize                                  = 'BZ';
    case Benin                                   = 'BJ';
    case Bermuda                                 = 'BM';
    case Bhutan                                  = 'BT';
    case Bolivia                                 = 'BO';
    case Bonaire_Sint_Eustatius_and_Saba         = 'BQ';
    case Bosnia_and_Herzegovina                  = 'BA';
    case Botswana                                = 'BW';
    case Bouvet_Island                           = 'BV';
    case Brazil                                  = 'BR';
    case British_Indian_Ocean_Territory          = 'IO';
    case Brunei_Darussalam                       = 'BN';
    case Bulgaria                                = 'BG';
    case Burkina_Faso                            = 'BF';
    case Burundi                                 = 'BI';
    case Cabo_Verde                              = 'CV';
    case Cambodia                                = 'KH';
    case Cameroon                                = 'CM';
    case Canada                                  = 'CA';
    case Cayman_Islands                          = 'KY';
    case Central_African_Republic                = 'CF';
    case Chad                                    = 'TD';
    case Chile                                   = 'CL';
    case China                                   = 'CN';
    case Christmas_Island                        = 'CX';
    case Cocos_Islands                           = 'CC';
    case Colombia                                = 'CO';
    case Comoros                                 = 'KM';
    case Congo                                   = 'CG';
    case Congo_Democratic_Republic               = 'CD';
    case Cook_Islands                            = 'CK';
    case Costa_Rica                              = 'CR';
    case Cote_d_Ivoire                           = 'CI';
    case Croatia                                 = 'HR';
    case Cuba                                    = 'CU';
    case Curacao                                 = 'CW';
    case Cyprus                                  = 'CY';
    case Czechia                                 = 'CZ';
    case Denmark                                 = 'DK';
    case Djibouti                                = 'DJ';
    case Dominica                                = 'DM';
    case Dominican_Republic                      = 'DO';
    case Ecuador                                 = 'EC';
    case Egypt                                   = 'EG';
    case El_Salvador                             = 'SV';
    case Equatorial_Guinea                       = 'GQ';
    case Eritrea                                 = 'ER';
    case Estonia                                 = 'EE';
    case Eswatini                                = 'SZ';
    case Ethiopia                                = 'ET';
    case Falkland_Islands                        = 'FK';
    case Faroe_Islands                           = 'FO';
    case Fiji                                    = 'FJ';
    case Finland                                 = 'FI';
    case France                                  = 'FR';
    case French_Guiana                           = 'GF';
    case French_Polynesia                        = 'PF';
    case French_Southern_Territories             = 'TF';
    case Gabon                                   = 'GA';
    case Gambia                                  = 'GM';
    case Georgia                                 = 'GE';
    case Germany                                 = 'DE';
    case Ghana                                   = 'GH';
    case Gibraltar                               = 'GI';
    case Greece                                  = 'GR';
    case Greenland                               = 'GL';
    case Grenada                                 = 'GD';
    case Guadeloupe                              = 'GP';
    case Guam                                    = 'GU';
    case Guatemala                               = 'GT';
    case Guernsey                                = 'GG';
    case Guinea                                  = 'GN';
    case Guinea_Bissau                           = 'GW';
    case Guyana                                  = 'GY';
    case Haiti                                   = 'HT';
    case Heard_Island_and_McDonald_Islands       = 'HM';
    case Holy_See                                = 'VA';
    case Honduras                                = 'HN';
    case Hong_Kong                               = 'HK';
    case Hungary                                 = 'HU';
    case Iceland                                 = 'IS';
    case India                                   = 'IN';
    case Indonesia                               = 'ID';
    case Iran                                    = 'IR';
    case Iraq                                    = 'IQ';
    case Ireland                                 = 'IE';
    case Isle_of_Man                             = 'IM';
    case Israel                                  = 'IL';
    case Italy                                   = 'IT';
    case Jamaica                                 = 'JM';
    case Japan                                   = 'JP';
    case Jersey                                  = 'JE';
    case Jordan                                  = 'JO';
    case Kazakhstan                              = 'KZ';
    case Kenya                                   = 'KE';
    case Kiribati                                = 'KI';
    case Korea_Democratic_Peoples_Republic       = 'KP';
    case Korea_Republic                          = 'KR';
    case Kuwait                                  = 'KW';
    case Kyrgyzstan                              = 'KG';
    case Lao_Peoples_Democratic_Republic         = 'LA';
    case Latvia                                  = 'LV';
    case Lebanon                                 = 'LB';
    case Lesotho                                 = 'LS';
    case Liberia                                 = 'LR';
    case Libya                                   = 'LY';
    case Liechtenstein                           = 'LI';
    case Lithuania                               = 'LT';
    case Luxembourg                              = 'LU';
    case Macao                                   = 'MO';
    case Madagascar                              = 'MG';
    case Malawi                                  = 'MW';
    case Malaysia                                = 'MY';
    case Maldives                                = 'MV';
    case Mali                                    = 'ML';
    case Malta                                   = 'MT';
    case Marshall_Islands                        = 'MH';
    case Martinique                              = 'MQ';
    case Mauritania                              = 'MR';
    case Mauritius                               = 'MU';
    case Mayotte                                 = 'YT';
    case Mexico                                  = 'MX';
    case Micronesia                              = 'FM';
    case Moldova                                 = 'MD';
    case Monaco                                  = 'MC';
    case Mongolia                                = 'MN';
    case Montenegro                              = 'ME';
    case Montserrat                              = 'MS';
    case Morocco                                 = 'MA';
    case Mozambique                              = 'MZ';
    case Myanmar                                 = 'MM';
    case Namibia                                 = 'NA';
    case Nauru                                   = 'NR';
    case Nepal                                   = 'NP';
    case Netherlands                             = 'NL';
    case New_Caledonia                           = 'NC';
    case New_Zealand                             = 'NZ';
    case Nicaragua                               = 'NI';
    case Niger                                   = 'NE';
    case Nigeria                                 = 'NG';
    case Niue                                    = 'NU';
    case Norfolk_Island                          = 'NF';
    case North_Macedonia                         = 'MK';
    case Northern_Mariana_Islands                = 'MP';
    case Norway                                  = 'NO';
    case Oman                                    = 'OM';
    case Pakistan                                = 'PK';
    case Palau                                   = 'PW';
    case Palestine                               = 'PS';
    case Panama                                  = 'PA';
    case Papua_New_Guinea                        = 'PG';
    case Paraguay                                = 'PY';
    case Peru                                    = 'PE';
    case Philippines                             = 'PH';
    case Pitcairn                                = 'PN';
    case Poland                                  = 'PL';
    case Portugal                                = 'PT';
    case Puerto_Rico                             = 'PR';
    case Qatar                                   = 'QA';
    case Reunion                                 = 'RE';
    case Romania                                 = 'RO';
    case Russian_Federation                      = 'RU';
    case Rwanda                                  = 'RW';
    case Saint_Barthelemy                        = 'BL';
    case Saint_Helena_Ascension_Tristan_da_Cunha = 'SH';
    case Saint_Kitts_and_Nevis                   = 'KN';
    case Saint_Lucia                             = 'LC';
    case Saint_Martin_French_part                = 'MF';
    case Saint_Pierre_and_Miquelon               = 'PM';
    case Saint_Vincent_and_the_Grenadines        = 'VC';
    case Samoa                                   = 'WS';
    case San_Marino                              = 'SM';
    case Sao_Tome_and_Principe                   = 'ST';
    case Saudi_Arabia                            = 'SA';
    case Senegal                                 = 'SN';
    case Serbia                                  = 'RS';
    case Seychelles                              = 'SC';
    case Sierra_Leone                            = 'SL';
    case Singapore                               = 'SG';
    case Sint_Maarten_Dutch_part                 = 'SX';
    case Slovakia                                = 'SK';
    case Slovenia                                = 'SI';
    case Solomon_Islands                         = 'SB';
    case Somalia                                 = 'SO';
    case South_Africa                            = 'ZA';
    case South_Georgia_South_Sandwich_Islands    = 'GS';
    case South_Sudan                             = 'SS';
    case Spain                                   = 'ES';
    case Sri_Lanka                               = 'LK';
    case Sudan                                   = 'SD';
    case Suriname                                = 'SR';
    case Svalbard_Jan_Mayen                      = 'SJ';
    case Sweden                                  = 'SE';
    case Switzerland                             = 'CH';
    case Syrian_Arab_Republic                    = 'SY';
    case Taiwan_Province_of_China                = 'TW';
    case Tajikistan                              = 'TJ';
    case Tanzania                                = 'TZ';
    case Thailand                                = 'TH';
    case Timor_Leste                             = 'TL';
    case Togo                                    = 'TG';
    case Tokelau                                 = 'TK';
    case Tonga                                   = 'TO';
    case Trinidad_and_Tobago                     = 'TT';
    case Tunisia                                 = 'TN';
    case Turkey                                  = 'TR';
    case Turkmenistan                            = 'TM';
    case Turks_and_Caicos_Islands                = 'TC';
    case Tuvalu                                  = 'TV';
    case Uganda                                  = 'UG';
    case Ukraine                                 = 'UA';
    case United_Arab_Emirates                    = 'AE';
    case United_Kingdom                          = 'GB';
    case United_States_Outlying_Islands          = 'UM';
    case United_States_of_America                = 'US';
    case Uruguay                                 = 'UY';
    case Uzbekistan                              = 'UZ';
    case Vanuatu                                 = 'VU';
    case Venezuela                               = 'VE';
    case Viet_Nam                                = 'VN';
    case Virgin_Islands_British                  = 'VG';
    case Virgin_Islands_U_S                      = 'VI';
    case Wallis_and_Futuna                       = 'WF';
    case Western_Sahara                          = 'EH';
    case Yemen                                   = 'YE';
    case Zambia                                  = 'ZM';
    case Zimbabwe                                = 'ZW';

    public function toCountryAlpha3(): CountryAlpha3
    {
        return BackedEnum::fromKey(CountryAlpha3::class, $this->name);
    }

    public function toCountryNumeric(): CountryNumeric
    {
        return BackedEnum::fromKey(CountryNumeric::class, $this->name);
    }

    public function toCountryName(): CountryName
    {
        return BackedEnum::fromKey(CountryName::class, $this->name);
    }

    public function lowerCaseValue(): string
    {
        return strtolower($this->value);
    }

    public function getNameInLanguage(LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|LanguageAlpha3Extensive $language): ?string
    {
        if ($language instanceof LanguageAlpha3Bibliographic) {
            $language = $language->toLanguageAlpha3Terminology();
        }

        $countryInLanguage = locale_get_display_region('-' . $this->value, $language->value);
        if ($countryInLanguage === false) {
            return null;
        }

        return $countryInLanguage;
    }

    /** @param class-string<GroupInterface> $groupFQN */
    public function isMemberOf(string $groupFQN): bool
    {
        if (is_a($groupFQN, GroupInterface::class, true) === false || $groupFQN === GroupInterface::class) {
            throw new InvalidArgumentException('Argument $groupFQN should be a FQN of a class that implements the groupInterface, "' . $groupFQN . '" given');
        }

        return in_array($this, $groupFQN::allAlpha2(), true);
    }

    /** @return list<CountryCallingCode> */
    public function getCountryCallingCodes(): array
    {
        return CountryCallingCode::forCountry($this);
    }

    public function getNationalCallPrefix(): NationalCallPrefix
    {
        return NationalCallPrefix::forCountry($this);
    }

    public function getInternationalCallPrefix(): InternationalCallPrefix
    {
        return InternationalCallPrefix::forCountry($this);
    }

    /**
     * When displaying this on web pages, keep in mind the default windows fonts don't have a representation for these.
     * @see https://prinsfrank.nl/2021/01/25/Non-existing-flag-emojis-on-windows to make these flag emojis visible for Windows users.
     */
    public function getFlagEmoji(): string
    {
        return implode(
            '',
            array_map(
                static function (string $char) {
                    return mb_chr(mb_ord($char) + (127462 - 65)); // The emoji for region letter 'A' in flags is at code point 127462, the capital letter 'A' itself is at 65
                },
                str_split($this->value)
            )
        );
    }

    /** @return list<LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Extensive> */
    public function getOfficialAndDeFactoLanguages(): array
    {
        return match($this) {
            self::Afghanistan                             => [LanguageAlpha2::Persian, LanguageAlpha2::Pushto_Pashto],
            self::Aland_Islands                           => [LanguageAlpha2::Swedish],
            self::Albania                                 => [LanguageAlpha2::Albanian],
            self::Algeria                                 => [LanguageAlpha2::Arabic],
            self::American_Samoa                          => [LanguageAlpha2::English, LanguageAlpha2::Samoan],
            self::Andorra                                 => [LanguageAlpha2::Catalan_Valencian],
            self::Angola                                  => [LanguageAlpha2::Portuguese],
            self::Anguilla                                => [LanguageAlpha2::English],
            self::Antarctica                              => [LanguageAlpha2::English],
            self::Antigua_and_Barbuda                     => [LanguageAlpha2::English],
            self::Argentina                               => [LanguageAlpha2::Spanish_Castilian],
            self::Armenia                                 => [LanguageAlpha2::Armenian],
            self::Aruba                                   => [LanguageAlpha3Terminology::Papiamento, LanguageAlpha2::Dutch_Flemish],
            self::Australia                               => [LanguageAlpha2::English],
            self::Austria                                 => [LanguageAlpha2::German],
            self::Azerbaijan                              => [LanguageAlpha2::Azerbaijani],
            self::Bahamas                                 => [LanguageAlpha2::English],
            self::Bahrain                                 => [LanguageAlpha2::Arabic],
            self::Bangladesh                              => [LanguageAlpha2::Bengali],
            self::Barbados                                => [LanguageAlpha2::English],
            self::Belarus                                 => [LanguageAlpha2::Belarusian, LanguageAlpha2::Russian],
            self::Belgium                                 => [LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::French, LanguageAlpha2::German],
            self::Belize                                  => [LanguageAlpha2::English],
            self::Benin                                   => [LanguageAlpha2::French],
            self::Bermuda                                 => [LanguageAlpha2::English],
            self::Bhutan                                  => [LanguageAlpha2::Dzongkha],
            self::Bolivia                                 => [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara, LanguageAlpha3Extensive::Araona, LanguageAlpha3Extensive::Baure, LanguageAlpha3Extensive::Chiquitano, LanguageAlpha3Extensive::Canichana, LanguageAlpha3Extensive::Cavinena, LanguageAlpha3Extensive::Cayubaba, LanguageAlpha3Extensive::Chacobo, LanguageAlpha3Extensive::Ese_Ejja, LanguageAlpha2::Guarani, LanguageAlpha3Extensive::Guarayu, LanguageAlpha3Extensive::Itonama, LanguageAlpha3Extensive::Leco, LanguageAlpha3Extensive::Machinere, LanguageAlpha3Extensive::Movima, LanguageAlpha3Extensive::Pacahuara, LanguageAlpha3Extensive::Puquina, LanguageAlpha2::Quechua, LanguageAlpha3Extensive::Siriono, LanguageAlpha3Extensive::Tacana, LanguageAlpha3Extensive::Tapiete, LanguageAlpha3Extensive::Toromono, LanguageAlpha3Extensive::Yuki, LanguageAlpha3Extensive::Yuracare],
            self::Bonaire_Sint_Eustatius_and_Saba         => [LanguageAlpha2::Dutch_Flemish, LanguageAlpha3Terminology::Papiamento],
            self::Bosnia_and_Herzegovina                  => [LanguageAlpha2::Bosnian, LanguageAlpha2::Croatian, LanguageAlpha2::Serbian],
            self::Botswana                                => [LanguageAlpha2::English],
            self::Bouvet_Island                           => [LanguageAlpha2::Norwegian],
            self::Brazil                                  => [LanguageAlpha2::Portuguese],
            self::British_Indian_Ocean_Territory          => [LanguageAlpha2::English],
            self::Brunei_Darussalam                       => [LanguageAlpha2::Malay],
            self::Bulgaria                                => [LanguageAlpha2::Bulgarian],
            self::Burkina_Faso                            => [LanguageAlpha2::French],
            self::Burundi                                 => [LanguageAlpha2::French, LanguageAlpha2::Rundi, LanguageAlpha2::English],
            self::Cabo_Verde                              => [LanguageAlpha2::Portuguese],
            self::Cambodia                                => [LanguageAlpha2::Central_Khmer],
            self::Cameroon                                => [LanguageAlpha2::English, LanguageAlpha2::French],
            self::Canada                                  => [LanguageAlpha2::English, LanguageAlpha2::French],
            self::Cayman_Islands                          => [LanguageAlpha2::English],
            self::Central_African_Republic                => [LanguageAlpha2::French, LanguageAlpha2::Sango],
            self::Chad                                    => [LanguageAlpha2::Arabic, LanguageAlpha2::French],
            self::Chile                                   => [LanguageAlpha2::Spanish_Castilian],
            self::China                                   => [LanguageAlpha2::Chinese],
            self::Christmas_Island                        => [LanguageAlpha2::English, LanguageAlpha2::Chinese, LanguageAlpha2::Malay],
            self::Cocos_Islands                           => [LanguageAlpha2::English, LanguageAlpha2::Malay],
            self::Colombia                                => [LanguageAlpha2::Spanish_Castilian],
            self::Comoros                                 => [LanguageAlpha2::Arabic, LanguageAlpha2::French],
            self::Congo                                   => [LanguageAlpha2::French],
            self::Congo_Democratic_Republic               => [LanguageAlpha2::French],
            self::Cook_Islands                            => [LanguageAlpha2::English, LanguageAlpha2::Maori],
            self::Costa_Rica                              => [LanguageAlpha2::Spanish_Castilian],
            self::Cote_d_Ivoire                           => [LanguageAlpha2::French],
            self::Croatia                                 => [LanguageAlpha2::Croatian],
            self::Cuba                                    => [LanguageAlpha2::Spanish_Castilian],
            self::Curacao                                 => [LanguageAlpha3Terminology::Papiamento, LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::English],
            self::Cyprus                                  => [LanguageAlpha2::Greek_Modern_1453, LanguageAlpha2::Turkish],
            self::Czechia                                 => [LanguageAlpha2::Czech, LanguageAlpha2::Slovak],
            self::Denmark                                 => [LanguageAlpha2::Danish],
            self::Djibouti                                => [LanguageAlpha2::Arabic, LanguageAlpha2::French],
            self::Dominica                                => [LanguageAlpha2::English],
            self::Dominican_Republic                      => [LanguageAlpha2::Spanish_Castilian],
            self::Ecuador                                 => [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Quechua],
            self::Egypt                                   => [LanguageAlpha2::Arabic],
            self::El_Salvador                             => [LanguageAlpha2::Spanish_Castilian],
            self::Equatorial_Guinea                       => [LanguageAlpha2::French, LanguageAlpha2::Portuguese, LanguageAlpha2::Spanish_Castilian],
            self::Eritrea                                 => [LanguageAlpha2::Tigrinya],
            self::Estonia                                 => [LanguageAlpha2::Estonian],
            self::Eswatini                                => [LanguageAlpha2::English, LanguageAlpha2::Swati],
            self::Ethiopia                                => [LanguageAlpha2::Afar, LanguageAlpha2::Amharic, LanguageAlpha2::Oromo, LanguageAlpha2::Somali, LanguageAlpha2::Tigrinya],
            self::Falkland_Islands                        => [LanguageAlpha2::English],
            self::Faroe_Islands                           => [LanguageAlpha2::Faroese],
            self::Fiji                                    => [LanguageAlpha2::English, LanguageAlpha2::Fijian, LanguageAlpha3Extensive::Fiji_Hindi],
            self::Finland                                 => [LanguageAlpha2::Finnish, LanguageAlpha2::Swedish],
            self::France                                  => [LanguageAlpha2::French],
            self::French_Guiana                           => [LanguageAlpha2::French],
            self::French_Polynesia                        => [LanguageAlpha2::French],
            self::French_Southern_Territories             => [LanguageAlpha2::French],
            self::Gabon                                   => [LanguageAlpha2::French],
            self::Gambia                                  => [LanguageAlpha2::English],
            self::Georgia                                 => [LanguageAlpha2::Georgian],
            self::Germany                                 => [LanguageAlpha2::German],
            self::Ghana                                   => [LanguageAlpha2::English],
            self::Gibraltar                               => [LanguageAlpha2::English],
            self::Greece                                  => [LanguageAlpha2::Greek_Modern_1453],
            self::Greenland                               => [LanguageAlpha2::Kalaallisut_Greenlandic, LanguageAlpha2::Danish],
            self::Grenada                                 => [LanguageAlpha2::English],
            self::Guadeloupe                              => [LanguageAlpha2::French],
            self::Guam                                    => [LanguageAlpha2::Chamorro, LanguageAlpha2::English],
            self::Guatemala                               => [LanguageAlpha2::Spanish_Castilian],
            self::Guernsey                                => [LanguageAlpha2::English],
            self::Guinea                                  => [LanguageAlpha2::French],
            self::Guinea_Bissau                           => [LanguageAlpha2::Portuguese],
            self::Guyana                                  => [LanguageAlpha2::English],
            self::Haiti                                   => [LanguageAlpha2::French, LanguageAlpha2::Haitian_Haitian_Creole],
            self::Heard_Island_and_McDonald_Islands       => [LanguageAlpha2::English],
            self::Holy_See                                => [LanguageAlpha2::Latin, LanguageAlpha2::Italian],
            self::Honduras                                => [LanguageAlpha2::Spanish_Castilian],
            self::Hong_Kong                               => [LanguageAlpha2::Chinese, LanguageAlpha2::English],
            self::Hungary                                 => [LanguageAlpha2::Hungarian],
            self::Iceland                                 => [LanguageAlpha2::Icelandic, LanguageAlpha3Extensive::Icelandic_Sign_Language],
            self::India                                   => [LanguageAlpha2::Hindi, LanguageAlpha2::English],
            self::Indonesia                               => [LanguageAlpha2::Indonesian],
            self::Iran                                    => [LanguageAlpha2::Persian],
            self::Iraq                                    => [LanguageAlpha2::Arabic, LanguageAlpha2::Kurdish],
            self::Ireland                                 => [LanguageAlpha2::Irish, LanguageAlpha2::English],
            self::Isle_of_Man                             => [LanguageAlpha2::Manx, LanguageAlpha2::English],
            self::Israel                                  => [LanguageAlpha2::Hebrew],
            self::Italy                                   => [LanguageAlpha2::Italian],
            self::Jamaica                                 => [LanguageAlpha2::English],
            self::Japan                                   => [LanguageAlpha2::Japanese],
            self::Jersey                                  => [LanguageAlpha2::English, LanguageAlpha2::French],
            self::Jordan                                  => [LanguageAlpha2::Arabic],
            self::Kazakhstan                              => [LanguageAlpha2::Kazakh, LanguageAlpha2::Russian],
            self::Kenya                                   => [LanguageAlpha2::English, LanguageAlpha2::Swahili],
            self::Kiribati                                => [LanguageAlpha2::English, LanguageAlpha3Terminology::Gilbertese],
            self::Korea_Democratic_Peoples_Republic       => [LanguageAlpha2::Korean],
            self::Korea_Republic                          => [LanguageAlpha2::Korean, LanguageAlpha3Extensive::Korean_Sign_Language],
            self::Kuwait                                  => [LanguageAlpha2::Arabic],
            self::Kyrgyzstan                              => [LanguageAlpha2::Kirghiz_Kyrgyz, LanguageAlpha2::Russian],
            self::Lao_Peoples_Democratic_Republic         => [LanguageAlpha2::Lao],
            self::Latvia                                  => [LanguageAlpha2::Latvian],
            self::Lebanon                                 => [LanguageAlpha2::Arabic],
            self::Lesotho                                 => [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English],
            self::Liberia                                 => [LanguageAlpha2::English],
            self::Libya                                   => [LanguageAlpha2::Arabic],
            self::Liechtenstein                           => [LanguageAlpha2::German],
            self::Lithuania                               => [LanguageAlpha2::Lithuanian],
            self::Luxembourg                              => [LanguageAlpha2::French, LanguageAlpha2::German, LanguageAlpha2::Luxembourgish_Letzeburgesch],
            self::Macao                                   => [LanguageAlpha2::Chinese, LanguageAlpha2::Portuguese],
            self::Madagascar                              => [LanguageAlpha2::French, LanguageAlpha2::Malagasy],
            self::Malawi                                  => [LanguageAlpha2::English, LanguageAlpha2::Chichewa_Chewa_Nyanja],
            self::Malaysia                                => [LanguageAlpha2::Malay],
            self::Maldives                                => [LanguageAlpha2::Divehi_Dhivehi_Maldivian],
            self::Mali                                    => [LanguageAlpha2::Bambara, LanguageAlpha2::Fulah, LanguageAlpha3Terminology::Songhai_languages, LanguageAlpha3Terminology::Soninke, LanguageAlpha3Terminology::Tamashek],
            self::Malta                                   => [LanguageAlpha2::Maltese],
            self::Marshall_Islands                        => [LanguageAlpha2::English, LanguageAlpha2::Marshallese],
            self::Martinique                              => [LanguageAlpha2::French],
            self::Mauritania                              => [LanguageAlpha2::Arabic],
            self::Mauritius                               => [LanguageAlpha2::English],
            self::Mayotte                                 => [LanguageAlpha2::French],
            self::Mexico                                  => [LanguageAlpha2::Spanish_Castilian],
            self::Micronesia                              => [LanguageAlpha2::English],
            self::Moldova                                 => [LanguageAlpha2::Romanian_Moldavian_Moldovan],
            self::Monaco                                  => [LanguageAlpha2::French],
            self::Mongolia                                => [LanguageAlpha2::Mongolian],
            self::Montenegro                              => [LanguageAlpha3Terminology::Montenegrin],
            self::Montserrat                              => [LanguageAlpha2::English],
            self::Morocco                                 => [LanguageAlpha2::Arabic, LanguageAlpha3Terminology::Berber_languages],
            self::Mozambique                              => [LanguageAlpha2::Portuguese],
            self::Myanmar                                 => [LanguageAlpha2::Burmese],
            self::Namibia                                 => [LanguageAlpha2::English],
            self::Nauru                                   => [LanguageAlpha2::English, LanguageAlpha2::Nauru],
            self::Nepal                                   => [LanguageAlpha2::Nepali],
            self::Netherlands                             => [LanguageAlpha2::Dutch_Flemish],
            self::New_Caledonia                           => [LanguageAlpha2::French],
            self::New_Zealand                             => [LanguageAlpha2::English, LanguageAlpha2::Maori, LanguageAlpha3Extensive::New_Zealand_Sign_Language],
            self::Nicaragua                               => [LanguageAlpha2::Spanish_Castilian],
            self::Niger                                   => [LanguageAlpha2::French],
            self::Nigeria                                 => [LanguageAlpha2::English],
            self::Niue                                    => [LanguageAlpha2::English, LanguageAlpha3Terminology::Niuean],
            self::Norfolk_Island                          => [LanguageAlpha2::English, LanguageAlpha3Extensive::Pitcairn_Norfolk],
            self::North_Macedonia                         => [LanguageAlpha2::Macedonian, LanguageAlpha2::Albanian],
            self::Northern_Mariana_Islands                => [LanguageAlpha2::English, LanguageAlpha2::Chamorro, LanguageAlpha3Extensive::Carolinian],
            self::Norway                                  => [LanguageAlpha2::Norwegian, LanguageAlpha2::Northern_Sami],
            self::Oman                                    => [LanguageAlpha2::Arabic],
            self::Pakistan                                => [LanguageAlpha2::Urdu, LanguageAlpha2::English],
            self::Palau                                   => [LanguageAlpha2::English, LanguageAlpha3Terminology::Palauan],
            self::Palestine                               => [LanguageAlpha2::Arabic],
            self::Panama                                  => [LanguageAlpha2::Spanish_Castilian],
            self::Papua_New_Guinea                        => [LanguageAlpha2::English, LanguageAlpha2::Hiri_Motu, LanguageAlpha3Extensive::Papua_New_Guinean_Sign_Language, LanguageAlpha3Terminology::Tok_Pisin],
            self::Paraguay                                => [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Guarani],
            self::Peru                                    => [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Quechua, LanguageAlpha2::Aymara, LanguageAlpha3Extensive::Ashaninka],
            self::Philippines                             => [LanguageAlpha3Terminology::Filipino_Pilipino, LanguageAlpha2::English],
            self::Pitcairn                                => [LanguageAlpha3Extensive::Pitcairn_Norfolk, LanguageAlpha2::English],
            self::Poland                                  => [LanguageAlpha2::Polish],
            self::Portugal                                => [LanguageAlpha2::Portuguese],
            self::Puerto_Rico                             => [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::English],
            self::Qatar                                   => [LanguageAlpha2::Arabic],
            self::Reunion                                 => [LanguageAlpha2::French],
            self::Romania                                 => [LanguageAlpha2::Romanian_Moldavian_Moldovan],
            self::Russian_Federation                      => [LanguageAlpha2::Russian],
            self::Rwanda                                  => [LanguageAlpha2::English, LanguageAlpha2::French, LanguageAlpha2::Kinyarwanda, LanguageAlpha2::Swahili],
            self::Saint_Barthelemy                        => [LanguageAlpha2::French],
            self::Saint_Helena_Ascension_Tristan_da_Cunha => [LanguageAlpha2::English],
            self::Saint_Kitts_and_Nevis                   => [LanguageAlpha2::English],
            self::Saint_Lucia                             => [LanguageAlpha2::English],
            self::Saint_Martin_French_part                => [LanguageAlpha2::French],
            self::Saint_Pierre_and_Miquelon               => [LanguageAlpha2::French],
            self::Saint_Vincent_and_the_Grenadines        => [LanguageAlpha2::English],
            self::Samoa                                   => [LanguageAlpha2::English, LanguageAlpha2::Samoan],
            self::San_Marino                              => [LanguageAlpha2::Italian],
            self::Sao_Tome_and_Principe                   => [LanguageAlpha2::Portuguese],
            self::Saudi_Arabia                            => [LanguageAlpha2::Arabic],
            self::Senegal                                 => [LanguageAlpha2::French],
            self::Serbia                                  => [LanguageAlpha2::Serbian],
            self::Seychelles                              => [LanguageAlpha2::English, LanguageAlpha2::French],
            self::Sierra_Leone                            => [LanguageAlpha2::English],
            self::Singapore                               => [LanguageAlpha2::English, LanguageAlpha2::Malay, LanguageAlpha3Extensive::Mandarin_Chinese, LanguageAlpha2::Tamil],
            self::Sint_Maarten_Dutch_part                 => [LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::English],
            self::Slovakia                                => [LanguageAlpha2::Slovak],
            self::Slovenia                                => [LanguageAlpha2::Slovenian],
            self::Solomon_Islands                         => [LanguageAlpha2::English],
            self::Somalia                                 => [LanguageAlpha2::Somali, LanguageAlpha2::Arabic],
            self::South_Africa                            => [LanguageAlpha2::Afrikaans, LanguageAlpha2::English, LanguageAlpha2::Ndebele_South_South_Ndebele, LanguageAlpha2::Sotho_Southern, LanguageAlpha2::Swati, LanguageAlpha2::Tsonga, LanguageAlpha2::Tswana, LanguageAlpha2::Venda, LanguageAlpha2::Xhosa, LanguageAlpha2::Zulu],
            self::South_Georgia_South_Sandwich_Islands    => [LanguageAlpha2::Ossetian_Ossetic, LanguageAlpha2::Russian],
            self::South_Sudan                             => [LanguageAlpha2::English],
            self::Spain                                   => [LanguageAlpha2::Spanish_Castilian],
            self::Sri_Lanka                               => [LanguageAlpha2::Sinhala_Sinhalese, LanguageAlpha2::Tamil],
            self::Sudan                                   => [LanguageAlpha2::Arabic, LanguageAlpha2::English],
            self::Suriname                                => [LanguageAlpha2::Dutch_Flemish],
            self::Svalbard_Jan_Mayen                      => [LanguageAlpha2::Norwegian],
            self::Sweden                                  => [LanguageAlpha2::Swedish],
            self::Switzerland                             => [LanguageAlpha2::French, LanguageAlpha2::German, LanguageAlpha2::Italian, LanguageAlpha2::Romansh],
            self::Syrian_Arab_Republic                    => [LanguageAlpha2::Arabic],
            self::Taiwan_Province_of_China                => [LanguageAlpha3Extensive::Mandarin_Chinese],
            self::Tajikistan                              => [LanguageAlpha2::Tajik],
            self::Tanzania                                => [LanguageAlpha2::Swahili, LanguageAlpha2::English],
            self::Thailand                                => [LanguageAlpha2::Thai],
            self::Timor_Leste                             => [LanguageAlpha2::Portuguese, LanguageAlpha3Terminology::Tetum],
            self::Togo                                    => [LanguageAlpha2::French],
            self::Tokelau                                 => [LanguageAlpha3Terminology::Tokelau, LanguageAlpha2::Samoan, LanguageAlpha2::English],
            self::Tonga                                   => [LanguageAlpha2::English, LanguageAlpha2::Tonga_Tonga_Islands],
            self::Trinidad_and_Tobago                     => [LanguageAlpha2::English],
            self::Tunisia                                 => [LanguageAlpha2::Arabic],
            self::Turkey                                  => [LanguageAlpha2::Turkish],
            self::Turkmenistan                            => [LanguageAlpha2::Turkmen],
            self::Turks_and_Caicos_Islands                => [LanguageAlpha2::English],
            self::Tuvalu                                  => [LanguageAlpha3Terminology::Tuvalu, LanguageAlpha2::English],
            self::Uganda                                  => [LanguageAlpha2::English, LanguageAlpha2::Swahili],
            self::Ukraine                                 => [LanguageAlpha2::Ukrainian],
            self::United_Arab_Emirates                    => [LanguageAlpha2::Arabic],
            self::United_Kingdom                          => [LanguageAlpha2::English],
            self::United_States_Outlying_Islands          => [LanguageAlpha2::English],
            self::United_States_of_America                => [LanguageAlpha2::English],
            self::Uruguay                                 => [LanguageAlpha2::Spanish_Castilian],
            self::Uzbekistan                              => [LanguageAlpha2::Uzbek],
            self::Vanuatu                                 => [LanguageAlpha2::English, LanguageAlpha2::French, LanguageAlpha2::Bislama],
            self::Venezuela                               => [LanguageAlpha2::Spanish_Castilian],
            self::Viet_Nam                                => [LanguageAlpha2::Vietnamese],
            self::Virgin_Islands_British                  => [LanguageAlpha2::English],
            self::Virgin_Islands_U_S                      => [LanguageAlpha2::English],
            self::Wallis_and_Futuna                       => [LanguageAlpha2::French],
            self::Western_Sahara                          => [LanguageAlpha2::Arabic],
            self::Yemen                                   => [LanguageAlpha2::Arabic],
            self::Zambia                                  => [LanguageAlpha2::English],
            self::Zimbabwe                                => [LanguageAlpha2::English],
        };
    }

    /** @return list<CurrencyAlpha3> */
    public function getCurrenciesAlpha3(): array
    {
        return match($this) {
            self::Afghanistan         => [CurrencyAlpha3::Afghani],
            self::Aland_Islands       => [CurrencyAlpha3::Euro],
            self::Albania             => [CurrencyAlpha3::Lek],
            self::Algeria             => [CurrencyAlpha3::Algerian_Dinar],
            self::American_Samoa      => [CurrencyAlpha3::US_Dollar],
            self::Andorra             => [CurrencyAlpha3::Euro],
            self::Angola              => [CurrencyAlpha3::Kwanza],
            self::Anguilla            => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Antigua_and_Barbuda => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Argentina           => [CurrencyAlpha3::Argentine_Peso],
            self::Armenia             => [CurrencyAlpha3::Armenian_Dram],
            self::Aruba               => [CurrencyAlpha3::Aruban_Florin],
            self::Australia           => [CurrencyAlpha3::Australian_Dollar],
            self::Austria             => [CurrencyAlpha3::Euro],
            self::Azerbaijan          => [CurrencyAlpha3::Azerbaijan_Manat],
            self::Bahamas             => [CurrencyAlpha3::Bahamian_Dollar],
            self::Bahrain             => [CurrencyAlpha3::Bahraini_Dinar],
            self::Bangladesh          => [CurrencyAlpha3::Taka],
            self::Barbados            => [CurrencyAlpha3::Barbados_Dollar],
            self::Belarus             => [CurrencyAlpha3::Belarusian_Ruble],
            self::Belgium             => [CurrencyAlpha3::Euro],
            self::Belize              => [CurrencyAlpha3::Belize_Dollar],
            self::Benin               => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Bermuda             => [CurrencyAlpha3::Bermudian_Dollar],
            self::Bhutan              => [
                CurrencyAlpha3::Indian_Rupee,
                CurrencyAlpha3::Ngultrum
            ],
            self::Bolivia => [
                CurrencyAlpha3::Boliviano,
                CurrencyAlpha3::Mvdol
            ],
            self::Bonaire_Sint_Eustatius_and_Saba => [CurrencyAlpha3::US_Dollar],
            self::Bosnia_and_Herzegovina          => [CurrencyAlpha3::Convertible_Mark],
            self::Botswana                        => [CurrencyAlpha3::Pula],
            self::Bouvet_Island                   => [CurrencyAlpha3::Norwegian_Krone],
            self::Brazil                          => [CurrencyAlpha3::Brazilian_Real],
            self::British_Indian_Ocean_Territory  => [CurrencyAlpha3::US_Dollar],
            self::Brunei_Darussalam               => [CurrencyAlpha3::Brunei_Dollar],
            self::Bulgaria                        => [CurrencyAlpha3::Bulgarian_Lev],
            self::Burkina_Faso                    => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Burundi                         => [CurrencyAlpha3::Burundi_Franc],
            self::Cabo_Verde                      => [CurrencyAlpha3::Cabo_Verde_Escudo],
            self::Cambodia                        => [CurrencyAlpha3::Riel],
            self::Cameroon                        => [CurrencyAlpha3::CFA_Franc_BEAC],
            self::Canada                          => [CurrencyAlpha3::Canadian_Dollar],
            self::Cayman_Islands                  => [CurrencyAlpha3::Cayman_Islands_Dollar],
            self::Central_African_Republic        => [CurrencyAlpha3::CFA_Franc_BEAC],
            self::Chad                            => [CurrencyAlpha3::CFA_Franc_BEAC],
            self::Chile                           => [
                CurrencyAlpha3::Chilean_Peso,
                CurrencyAlpha3::Unidad_de_Fomento
            ],
            self::China            => [CurrencyAlpha3::Yuan_Renminbi],
            self::Christmas_Island => [CurrencyAlpha3::Australian_Dollar],
            self::Cocos_Islands    => [CurrencyAlpha3::Australian_Dollar],
            self::Colombia         => [
                CurrencyAlpha3::Colombian_Peso,
                CurrencyAlpha3::Unidad_de_Valor_Real
            ],
            self::Comoros                   => [CurrencyAlpha3::Comorian_Franc],
            self::Congo                     => [CurrencyAlpha3::CFA_Franc_BEAC],
            self::Congo_Democratic_Republic => [CurrencyAlpha3::Congolese_Franc],
            self::Cook_Islands              => [CurrencyAlpha3::New_Zealand_Dollar],
            self::Costa_Rica                => [CurrencyAlpha3::Costa_Rican_Colon],
            self::Cote_d_Ivoire             => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Croatia                   => [CurrencyAlpha3::Euro],
            self::Cuba                      => [
                CurrencyAlpha3::Cuban_Peso,
                CurrencyAlpha3::Peso_Convertible
            ],
            self::Curacao            => [CurrencyAlpha3::Netherlands_Antillean_Guilder],
            self::Cyprus             => [CurrencyAlpha3::Euro],
            self::Czechia            => [CurrencyAlpha3::Czech_Koruna],
            self::Denmark            => [CurrencyAlpha3::Danish_Krone],
            self::Djibouti           => [CurrencyAlpha3::Djibouti_Franc],
            self::Dominica           => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Dominican_Republic => [CurrencyAlpha3::Dominican_Peso],
            self::Ecuador            => [CurrencyAlpha3::US_Dollar],
            self::Egypt              => [CurrencyAlpha3::Egyptian_Pound],
            self::El_Salvador        => [
                CurrencyAlpha3::El_Salvador_Colon,
                CurrencyAlpha3::US_Dollar
            ],
            self::Equatorial_Guinea           => [CurrencyAlpha3::CFA_Franc_BEAC],
            self::Eritrea                     => [CurrencyAlpha3::Nakfa],
            self::Estonia                     => [CurrencyAlpha3::Euro],
            self::Eswatini                    => [CurrencyAlpha3::Lilangeni],
            self::Ethiopia                    => [CurrencyAlpha3::Ethiopian_Birr],
            self::Falkland_Islands            => [CurrencyAlpha3::Falkland_Islands_Pound],
            self::Faroe_Islands               => [CurrencyAlpha3::Danish_Krone],
            self::Fiji                        => [CurrencyAlpha3::Fiji_Dollar],
            self::Finland                     => [CurrencyAlpha3::Euro],
            self::France                      => [CurrencyAlpha3::Euro],
            self::French_Guiana               => [CurrencyAlpha3::Euro],
            self::French_Polynesia            => [CurrencyAlpha3::CFP_Franc],
            self::French_Southern_Territories => [CurrencyAlpha3::Euro],
            self::Gabon                       => [CurrencyAlpha3::CFA_Franc_BEAC],
            self::Gambia                      => [CurrencyAlpha3::Dalasi],
            self::Georgia                     => [CurrencyAlpha3::Lari],
            self::Germany                     => [CurrencyAlpha3::Euro],
            self::Ghana                       => [CurrencyAlpha3::Ghana_Cedi],
            self::Gibraltar                   => [CurrencyAlpha3::Gibraltar_Pound],
            self::Greece                      => [CurrencyAlpha3::Euro],
            self::Greenland                   => [CurrencyAlpha3::Danish_Krone],
            self::Grenada                     => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Guadeloupe                  => [CurrencyAlpha3::Euro],
            self::Guam                        => [CurrencyAlpha3::US_Dollar],
            self::Guatemala                   => [CurrencyAlpha3::Quetzal],
            self::Guernsey                    => [CurrencyAlpha3::Pound_Sterling],
            self::Guinea                      => [CurrencyAlpha3::Guinean_Franc],
            self::Guinea_Bissau               => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Guyana                      => [CurrencyAlpha3::Guyana_Dollar],
            self::Haiti                       => [
                CurrencyAlpha3::Gourde,
                CurrencyAlpha3::US_Dollar
            ],
            self::Heard_Island_and_McDonald_Islands => [CurrencyAlpha3::Australian_Dollar],
            self::Holy_See                          => [CurrencyAlpha3::Euro],
            self::Honduras                          => [CurrencyAlpha3::Lempira],
            self::Hong_Kong                         => [CurrencyAlpha3::Hong_Kong_Dollar],
            self::Hungary                           => [CurrencyAlpha3::Forint],
            self::Iceland                           => [CurrencyAlpha3::Iceland_Krona],
            self::India                             => [CurrencyAlpha3::Indian_Rupee],
            self::Indonesia                         => [CurrencyAlpha3::Rupiah],
            self::Iran                              => [CurrencyAlpha3::Iranian_Rial],
            self::Iraq                              => [CurrencyAlpha3::Iraqi_Dinar],
            self::Ireland                           => [CurrencyAlpha3::Euro],
            self::Isle_of_Man                       => [CurrencyAlpha3::Pound_Sterling],
            self::Israel                            => [CurrencyAlpha3::New_Israeli_Sheqel],
            self::Italy                             => [CurrencyAlpha3::Euro],
            self::Jamaica                           => [CurrencyAlpha3::Jamaican_Dollar],
            self::Japan                             => [CurrencyAlpha3::Yen],
            self::Jersey                            => [CurrencyAlpha3::Pound_Sterling],
            self::Jordan                            => [CurrencyAlpha3::Jordanian_Dinar],
            self::Kazakhstan                        => [CurrencyAlpha3::Tenge],
            self::Kenya                             => [CurrencyAlpha3::Kenyan_Shilling],
            self::Kiribati                          => [CurrencyAlpha3::Australian_Dollar],
            self::Korea_Democratic_Peoples_Republic => [CurrencyAlpha3::North_Korean_Won],
            self::Korea_Republic                    => [CurrencyAlpha3::Won],
            self::Kuwait                            => [CurrencyAlpha3::Kuwaiti_Dinar],
            self::Kyrgyzstan                        => [CurrencyAlpha3::Som],
            self::Lao_Peoples_Democratic_Republic   => [CurrencyAlpha3::Lao_Kip],
            self::Latvia                            => [CurrencyAlpha3::Euro],
            self::Lebanon                           => [CurrencyAlpha3::Lebanese_Pound],
            self::Lesotho                           => [
                CurrencyAlpha3::Loti,
                CurrencyAlpha3::Rand
            ],
            self::Liberia          => [CurrencyAlpha3::Liberian_Dollar],
            self::Libya            => [CurrencyAlpha3::Libyan_Dinar],
            self::Liechtenstein    => [CurrencyAlpha3::Swiss_Franc],
            self::Lithuania        => [CurrencyAlpha3::Euro],
            self::Luxembourg       => [CurrencyAlpha3::Euro],
            self::Macao            => [CurrencyAlpha3::Pataca],
            self::Madagascar       => [CurrencyAlpha3::Malagasy_Ariary],
            self::Malawi           => [CurrencyAlpha3::Malawi_Kwacha],
            self::Malaysia         => [CurrencyAlpha3::Malaysian_Ringgit],
            self::Maldives         => [CurrencyAlpha3::Rufiyaa],
            self::Mali             => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Malta            => [CurrencyAlpha3::Euro],
            self::Marshall_Islands => [CurrencyAlpha3::US_Dollar],
            self::Martinique       => [CurrencyAlpha3::Euro],
            self::Mauritania       => [CurrencyAlpha3::Ouguiya],
            self::Mauritius        => [CurrencyAlpha3::Mauritius_Rupee],
            self::Mayotte          => [CurrencyAlpha3::Euro],
            self::Mexico           => [
                CurrencyAlpha3::Mexican_Peso,
                CurrencyAlpha3::Mexican_Unidad_de_Inversion_UDI
            ],
            self::Micronesia => [CurrencyAlpha3::US_Dollar],
            self::Moldova    => [CurrencyAlpha3::Moldovan_Leu],
            self::Monaco     => [CurrencyAlpha3::Euro],
            self::Mongolia   => [CurrencyAlpha3::Tugrik],
            self::Montenegro => [CurrencyAlpha3::Euro],
            self::Montserrat => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Morocco    => [CurrencyAlpha3::Moroccan_Dirham],
            self::Mozambique => [CurrencyAlpha3::Mozambique_Metical],
            self::Myanmar    => [CurrencyAlpha3::Kyat],
            self::Namibia    => [
                CurrencyAlpha3::Namibia_Dollar,
                CurrencyAlpha3::Rand
            ],
            self::Nauru                    => [CurrencyAlpha3::Australian_Dollar],
            self::Nepal                    => [CurrencyAlpha3::Nepalese_Rupee],
            self::Netherlands              => [CurrencyAlpha3::Euro],
            self::New_Caledonia            => [CurrencyAlpha3::CFP_Franc],
            self::New_Zealand              => [CurrencyAlpha3::New_Zealand_Dollar],
            self::Nicaragua                => [CurrencyAlpha3::Cordoba_Oro],
            self::Niger                    => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Nigeria                  => [CurrencyAlpha3::Naira],
            self::Niue                     => [CurrencyAlpha3::New_Zealand_Dollar],
            self::Norfolk_Island           => [CurrencyAlpha3::Australian_Dollar],
            self::North_Macedonia          => [CurrencyAlpha3::Denar],
            self::Northern_Mariana_Islands => [CurrencyAlpha3::US_Dollar],
            self::Norway                   => [CurrencyAlpha3::Norwegian_Krone],
            self::Oman                     => [CurrencyAlpha3::Rial_Omani],
            self::Pakistan                 => [CurrencyAlpha3::Pakistan_Rupee],
            self::Palau                    => [CurrencyAlpha3::US_Dollar],
            self::Panama                   => [
                CurrencyAlpha3::Balboa,
                CurrencyAlpha3::US_Dollar
            ],
            self::Papua_New_Guinea                        => [CurrencyAlpha3::Kina],
            self::Paraguay                                => [CurrencyAlpha3::Guarani],
            self::Peru                                    => [CurrencyAlpha3::Sol],
            self::Philippines                             => [CurrencyAlpha3::Philippine_Peso],
            self::Pitcairn                                => [CurrencyAlpha3::New_Zealand_Dollar],
            self::Poland                                  => [CurrencyAlpha3::Zloty],
            self::Portugal                                => [CurrencyAlpha3::Euro],
            self::Puerto_Rico                             => [CurrencyAlpha3::US_Dollar],
            self::Qatar                                   => [CurrencyAlpha3::Qatari_Rial],
            self::Reunion                                 => [CurrencyAlpha3::Euro],
            self::Romania                                 => [CurrencyAlpha3::Romanian_Leu],
            self::Russian_Federation                      => [CurrencyAlpha3::Russian_Ruble],
            self::Rwanda                                  => [CurrencyAlpha3::Rwanda_Franc],
            self::Saint_Barthelemy                        => [CurrencyAlpha3::Euro],
            self::Saint_Helena_Ascension_Tristan_da_Cunha => [CurrencyAlpha3::Saint_Helena_Pound],
            self::Saint_Kitts_and_Nevis                   => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Saint_Lucia                             => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Saint_Martin_French_part                => [CurrencyAlpha3::Euro],
            self::Saint_Pierre_and_Miquelon               => [CurrencyAlpha3::Euro],
            self::Saint_Vincent_and_the_Grenadines        => [CurrencyAlpha3::East_Caribbean_Dollar],
            self::Samoa                                   => [CurrencyAlpha3::Tala],
            self::San_Marino                              => [CurrencyAlpha3::Euro],
            self::Sao_Tome_and_Principe                   => [CurrencyAlpha3::Dobra],
            self::Saudi_Arabia                            => [CurrencyAlpha3::Saudi_Riyal],
            self::Senegal                                 => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Serbia                                  => [CurrencyAlpha3::Serbian_Dinar],
            self::Seychelles                              => [CurrencyAlpha3::Seychelles_Rupee],
            self::Sierra_Leone                            => [
                CurrencyAlpha3::Leone,
                CurrencyAlpha3::Leone_Old
            ],
            self::Singapore               => [CurrencyAlpha3::Singapore_Dollar],
            self::Sint_Maarten_Dutch_part => [CurrencyAlpha3::Netherlands_Antillean_Guilder],
            self::Slovakia                => [CurrencyAlpha3::Euro],
            self::Slovenia                => [CurrencyAlpha3::Euro],
            self::Solomon_Islands         => [CurrencyAlpha3::Solomon_Islands_Dollar],
            self::Somalia                 => [CurrencyAlpha3::Somali_Shilling],
            self::South_Africa            => [CurrencyAlpha3::Rand],
            self::South_Sudan             => [CurrencyAlpha3::South_Sudanese_Pound],
            self::Spain                   => [CurrencyAlpha3::Euro],
            self::Sri_Lanka               => [CurrencyAlpha3::Sri_Lanka_Rupee],
            self::Sudan                   => [CurrencyAlpha3::Sudanese_Pound],
            self::Suriname                => [CurrencyAlpha3::Surinam_Dollar],
            self::Svalbard_Jan_Mayen      => [CurrencyAlpha3::Norwegian_Krone],
            self::Sweden                  => [CurrencyAlpha3::Swedish_Krona],
            self::Switzerland             => [
                CurrencyAlpha3::Swiss_Franc,
                CurrencyAlpha3::WIR_Euro,
                CurrencyAlpha3::WIR_Franc
            ],
            self::Syrian_Arab_Republic           => [CurrencyAlpha3::Syrian_Pound],
            self::Taiwan_Province_of_China       => [CurrencyAlpha3::New_Taiwan_Dollar],
            self::Tajikistan                     => [CurrencyAlpha3::Somoni],
            self::Tanzania                       => [CurrencyAlpha3::Tanzanian_Shilling],
            self::Thailand                       => [CurrencyAlpha3::Baht],
            self::Timor_Leste                    => [CurrencyAlpha3::US_Dollar],
            self::Togo                           => [CurrencyAlpha3::CFA_Franc_BCEAO],
            self::Tokelau                        => [CurrencyAlpha3::New_Zealand_Dollar],
            self::Tonga                          => [CurrencyAlpha3::Pa_anga],
            self::Trinidad_and_Tobago            => [CurrencyAlpha3::Trinidad_and_Tobago_Dollar],
            self::Tunisia                        => [CurrencyAlpha3::Tunisian_Dinar],
            self::Turkey                         => [CurrencyAlpha3::Turkish_Lira],
            self::Turkmenistan                   => [CurrencyAlpha3::Turkmenistan_New_Manat],
            self::Turks_and_Caicos_Islands       => [CurrencyAlpha3::US_Dollar],
            self::Tuvalu                         => [CurrencyAlpha3::Australian_Dollar],
            self::Uganda                         => [CurrencyAlpha3::Uganda_Shilling],
            self::Ukraine                        => [CurrencyAlpha3::Hryvnia],
            self::United_Arab_Emirates           => [CurrencyAlpha3::UAE_Dirham],
            self::United_Kingdom                 => [CurrencyAlpha3::Pound_Sterling],
            self::United_States_Outlying_Islands => [CurrencyAlpha3::US_Dollar],
            self::United_States_of_America       => [
                CurrencyAlpha3::US_Dollar,
                CurrencyAlpha3::US_Dollar_Next_day
            ],
            self::Uruguay => [
                CurrencyAlpha3::Peso_Uruguayo,
                CurrencyAlpha3::Unidad_Previsional,
                CurrencyAlpha3::Uruguay_Peso_en_Unidades_Indexadas_UI
            ],
            self::Uzbekistan => [CurrencyAlpha3::Uzbekistan_Sum],
            self::Vanuatu    => [CurrencyAlpha3::Vatu],
            self::Venezuela  => [
                CurrencyAlpha3::Bolivar_Soberano,
                CurrencyAlpha3::Bolivar_Soberano_Old
            ],
            self::Viet_Nam               => [CurrencyAlpha3::Dong],
            self::Virgin_Islands_British => [CurrencyAlpha3::US_Dollar],
            self::Virgin_Islands_U_S     => [CurrencyAlpha3::US_Dollar],
            self::Wallis_and_Futuna      => [CurrencyAlpha3::CFP_Franc],
            self::Western_Sahara         => [CurrencyAlpha3::Moroccan_Dirham],
            self::Yemen                  => [CurrencyAlpha3::Yemeni_Rial],
            self::Zambia                 => [CurrencyAlpha3::Zambian_Kwacha],
            self::Zimbabwe               => [CurrencyAlpha3::Zimbabwe_Dollar],
            default                      => []
        };
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

use PrinsFrank\Standards\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;

/**
 * @source https://www.iso.org/iso-4217-currency-codes.html
 * @source https://www.six-group.com/en/products-services/financial-information/data-standards.html
 * @source https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list_one.xml
 * @standard ISO4217
 */
enum CurrencyAlpha3: string
{
    case ADB_Unit_of_Account                                               = 'XUA';
    case Afghani                                                           = 'AFN';
    case Algerian_Dinar                                                    = 'DZD';
    case Argentine_Peso                                                    = 'ARS';
    case Armenian_Dram                                                     = 'AMD';
    case Aruban_Florin                                                     = 'AWG';
    case Australian_Dollar                                                 = 'AUD';
    case Azerbaijan_Manat                                                  = 'AZN';
    case Bahamian_Dollar                                                   = 'BSD';
    case Bahraini_Dinar                                                    = 'BHD';
    case Baht                                                              = 'THB';
    case Balboa                                                            = 'PAB';
    case Barbados_Dollar                                                   = 'BBD';
    case Belarusian_Ruble                                                  = 'BYN';
    case Belize_Dollar                                                     = 'BZD';
    case Bermudian_Dollar                                                  = 'BMD';
    case Bolivar_Soberano                                                  = 'VED';
    case Bolivar_Soberano_Old                                              = 'VES';
    case Boliviano                                                         = 'BOB';
    case Bond_Markets_Unit_European_Composite_Unit_EURCO                   = 'XBA';
    case Bond_Markets_Unit_European_Monetary_Unit_E_M_U_6                  = 'XBB';
    case Bond_Markets_Unit_European_Unit_of_Account_17_E_U_A_17            = 'XBD';
    case Bond_Markets_Unit_European_Unit_of_Account_9_E_U_A_9              = 'XBC';
    case Brazilian_Real                                                    = 'BRL';
    case Brunei_Dollar                                                     = 'BND';
    case Bulgarian_Lev                                                     = 'BGN';
    case Burundi_Franc                                                     = 'BIF';
    case CFA_Franc_BCEAO                                                   = 'XOF';
    case CFA_Franc_BEAC                                                    = 'XAF';
    case CFP_Franc                                                         = 'XPF';
    case Cabo_Verde_Escudo                                                 = 'CVE';
    case Canadian_Dollar                                                   = 'CAD';
    case Cayman_Islands_Dollar                                             = 'KYD';
    case Chilean_Peso                                                      = 'CLP';
    case Codes_specifically_reserved_for_testing_purposes                  = 'XTS';
    case Colombian_Peso                                                    = 'COP';
    case Comorian_Franc                                                    = 'KMF';
    case Congolese_Franc                                                   = 'CDF';
    case Convertible_Mark                                                  = 'BAM';
    case Cordoba_Oro                                                       = 'NIO';
    case Costa_Rican_Colon                                                 = 'CRC';
    case Cuban_Peso                                                        = 'CUP';
    case Czech_Koruna                                                      = 'CZK';
    case Dalasi                                                            = 'GMD';
    case Danish_Krone                                                      = 'DKK';
    case Denar                                                             = 'MKD';
    case Djibouti_Franc                                                    = 'DJF';
    case Dobra                                                             = 'STN';
    case Dominican_Peso                                                    = 'DOP';
    case Dong                                                              = 'VND';
    case East_Caribbean_Dollar                                             = 'XCD';
    case Egyptian_Pound                                                    = 'EGP';
    case El_Salvador_Colon                                                 = 'SVC';
    case Ethiopian_Birr                                                    = 'ETB';
    case Euro                                                              = 'EUR';
    case Falkland_Islands_Pound                                            = 'FKP';
    case Fiji_Dollar                                                       = 'FJD';
    case Forint                                                            = 'HUF';
    case Ghana_Cedi                                                        = 'GHS';
    case Gibraltar_Pound                                                   = 'GIP';
    case Gold                                                              = 'XAU';
    case Gourde                                                            = 'HTG';
    case Guarani                                                           = 'PYG';
    case Guinean_Franc                                                     = 'GNF';
    case Guyana_Dollar                                                     = 'GYD';
    case Hong_Kong_Dollar                                                  = 'HKD';
    case Hryvnia                                                           = 'UAH';
    case Iceland_Krona                                                     = 'ISK';
    case Indian_Rupee                                                      = 'INR';
    case Iranian_Rial                                                      = 'IRR';
    case Iraqi_Dinar                                                       = 'IQD';
    case Jamaican_Dollar                                                   = 'JMD';
    case Jordanian_Dinar                                                   = 'JOD';
    case Kenyan_Shilling                                                   = 'KES';
    case Kina                                                              = 'PGK';
    case Kuwaiti_Dinar                                                     = 'KWD';
    case Kwanza                                                            = 'AOA';
    case Kyat                                                              = 'MMK';
    case Lao_Kip                                                           = 'LAK';
    case Lari                                                              = 'GEL';
    case Lebanese_Pound                                                    = 'LBP';
    case Lek                                                               = 'ALL';
    case Lempira                                                           = 'HNL';
    case Leone                                                             = 'SLE';
    case Leone_Old                                                         = 'SLL';
    case Liberian_Dollar                                                   = 'LRD';
    case Libyan_Dinar                                                      = 'LYD';
    case Lilangeni                                                         = 'SZL';
    case Loti                                                              = 'LSL';
    case Malagasy_Ariary                                                   = 'MGA';
    case Malawi_Kwacha                                                     = 'MWK';
    case Malaysian_Ringgit                                                 = 'MYR';
    case Mauritius_Rupee                                                   = 'MUR';
    case Mexican_Peso                                                      = 'MXN';
    case Mexican_Unidad_de_Inversion_UDI                                   = 'MXV';
    case Moldovan_Leu                                                      = 'MDL';
    case Moroccan_Dirham                                                   = 'MAD';
    case Mozambique_Metical                                                = 'MZN';
    case Mvdol                                                             = 'BOV';
    case Naira                                                             = 'NGN';
    case Nakfa                                                             = 'ERN';
    case Namibia_Dollar                                                    = 'NAD';
    case Nepalese_Rupee                                                    = 'NPR';
    case Netherlands_Antillean_Guilder                                     = 'ANG';
    case New_Israeli_Sheqel                                                = 'ILS';
    case New_Taiwan_Dollar                                                 = 'TWD';
    case New_Zealand_Dollar                                                = 'NZD';
    case Ngultrum                                                          = 'BTN';
    case North_Korean_Won                                                  = 'KPW';
    case Norwegian_Krone                                                   = 'NOK';
    case Ouguiya                                                           = 'MRU';
    case Pa_anga                                                           = 'TOP';
    case Pakistan_Rupee                                                    = 'PKR';
    case Palladium                                                         = 'XPD';
    case Pataca                                                            = 'MOP';
    case Peso_Convertible                                                  = 'CUC';
    case Peso_Uruguayo                                                     = 'UYU';
    case Philippine_Peso                                                   = 'PHP';
    case Platinum                                                          = 'XPT';
    case Pound_Sterling                                                    = 'GBP';
    case Pula                                                              = 'BWP';
    case Qatari_Rial                                                       = 'QAR';
    case Quetzal                                                           = 'GTQ';
    case Rand                                                              = 'ZAR';
    case Rial_Omani                                                        = 'OMR';
    case Riel                                                              = 'KHR';
    case Romanian_Leu                                                      = 'RON';
    case Rufiyaa                                                           = 'MVR';
    case Rupiah                                                            = 'IDR';
    case Russian_Ruble                                                     = 'RUB';
    case Rwanda_Franc                                                      = 'RWF';
    case SDR_Special_Drawing_Right                                         = 'XDR';
    case Saint_Helena_Pound                                                = 'SHP';
    case Saudi_Riyal                                                       = 'SAR';
    case Serbian_Dinar                                                     = 'RSD';
    case Seychelles_Rupee                                                  = 'SCR';
    case Silver                                                            = 'XAG';
    case Singapore_Dollar                                                  = 'SGD';
    case Sol                                                               = 'PEN';
    case Solomon_Islands_Dollar                                            = 'SBD';
    case Som                                                               = 'KGS';
    case Somali_Shilling                                                   = 'SOS';
    case Somoni                                                            = 'TJS';
    case South_Sudanese_Pound                                              = 'SSP';
    case Sri_Lanka_Rupee                                                   = 'LKR';
    case Sucre                                                             = 'XSU';
    case Sudanese_Pound                                                    = 'SDG';
    case Surinam_Dollar                                                    = 'SRD';
    case Swedish_Krona                                                     = 'SEK';
    case Swiss_Franc                                                       = 'CHF';
    case Syrian_Pound                                                      = 'SYP';
    case Taka                                                              = 'BDT';
    case Tala                                                              = 'WST';
    case Tanzanian_Shilling                                                = 'TZS';
    case Tenge                                                             = 'KZT';
    case The_codes_assigned_for_transactions_where_no_currency_is_involved = 'XXX';
    case Trinidad_and_Tobago_Dollar                                        = 'TTD';
    case Tugrik                                                            = 'MNT';
    case Tunisian_Dinar                                                    = 'TND';
    case Turkish_Lira                                                      = 'TRY';
    case Turkmenistan_New_Manat                                            = 'TMT';
    case UAE_Dirham                                                        = 'AED';
    case US_Dollar                                                         = 'USD';
    case US_Dollar_Next_day                                                = 'USN';
    case Uganda_Shilling                                                   = 'UGX';
    case Unidad_Previsional                                                = 'UYW';
    case Unidad_de_Fomento                                                 = 'CLF';
    case Unidad_de_Valor_Real                                              = 'COU';
    case Uruguay_Peso_en_Unidades_Indexadas_UI                             = 'UYI';
    case Uzbekistan_Sum                                                    = 'UZS';
    case Vatu                                                              = 'VUV';
    case WIR_Euro                                                          = 'CHE';
    case WIR_Franc                                                         = 'CHW';
    case Won                                                               = 'KRW';
    case Yemeni_Rial                                                       = 'YER';
    case Yen                                                               = 'JPY';
    case Yuan_Renminbi                                                     = 'CNY';
    case Zambian_Kwacha                                                    = 'ZMW';
    case Zimbabwe_Dollar                                                   = 'ZWL';
    case Zloty                                                             = 'PLN';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Kuna = 'HRK';

    public function toCurrencyNumeric(): CurrencyNumeric
    {
        return BackedEnum::fromKey(CurrencyNumeric::class, $this->name);
    }

    public function toCurrencyName(): CurrencyName
    {
        return BackedEnum::fromKey(CurrencyName::class, $this->name);
    }

    public function getSymbol(): ?CurrencySymbol
    {
        return CurrencySymbol::forCurrency($this);
    }

    public function lowerCaseValue(): string
    {
        return strtolower($this->value);
    }

    /** @return list<CountryAlpha2> */
    public function getCountriesAlpha2(): array
    {
        return match($this) {
            self::Afghani => [CountryAlpha2::Afghanistan],
            self::Euro    => [
                CountryAlpha2::Aland_Islands,
                CountryAlpha2::Andorra,
                CountryAlpha2::Austria,
                CountryAlpha2::Belgium,
                CountryAlpha2::Croatia,
                CountryAlpha2::Cyprus,
                CountryAlpha2::Estonia,
                CountryAlpha2::Austria,
                CountryAlpha2::Belgium,
                CountryAlpha2::Croatia,
                CountryAlpha2::Cyprus,
                CountryAlpha2::Estonia,
                CountryAlpha2::Finland,
                CountryAlpha2::France,
                CountryAlpha2::Germany,
                CountryAlpha2::Greece,
                CountryAlpha2::Ireland,
                CountryAlpha2::Italy,
                CountryAlpha2::Latvia,
                CountryAlpha2::Lithuania,
                CountryAlpha2::Luxembourg,
                CountryAlpha2::Malta,
                CountryAlpha2::Netherlands,
                CountryAlpha2::Portugal,
                CountryAlpha2::Slovakia,
                CountryAlpha2::Slovenia,
                CountryAlpha2::Spain,
                CountryAlpha2::Finland,
                CountryAlpha2::France,
                CountryAlpha2::French_Guiana,
                CountryAlpha2::French_Southern_Territories,
                CountryAlpha2::Germany,
                CountryAlpha2::Greece,
                CountryAlpha2::Guadeloupe,
                CountryAlpha2::Holy_See,
                CountryAlpha2::Ireland,
                CountryAlpha2::Italy,
                CountryAlpha2::Latvia,
                CountryAlpha2::Lithuania,
                CountryAlpha2::Luxembourg,
                CountryAlpha2::Malta,
                CountryAlpha2::Martinique,
                CountryAlpha2::Mayotte,
                CountryAlpha2::Monaco,
                CountryAlpha2::Montenegro,
                CountryAlpha2::Netherlands,
                CountryAlpha2::Portugal,
                CountryAlpha2::Reunion,
                CountryAlpha2::Saint_Barthelemy,
                CountryAlpha2::Saint_Martin_French_part,
                CountryAlpha2::Saint_Pierre_and_Miquelon,
                CountryAlpha2::San_Marino,
                CountryAlpha2::Slovakia,
                CountryAlpha2::Slovenia,
                CountryAlpha2::Spain
            ],
            self::Lek            => [CountryAlpha2::Albania],
            self::Algerian_Dinar => [CountryAlpha2::Algeria],
            self::US_Dollar      => [
                CountryAlpha2::American_Samoa,
                CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba,
                CountryAlpha2::British_Indian_Ocean_Territory,
                CountryAlpha2::Ecuador,
                CountryAlpha2::El_Salvador,
                CountryAlpha2::Guam,
                CountryAlpha2::Haiti,
                CountryAlpha2::Marshall_Islands,
                CountryAlpha2::Micronesia,
                CountryAlpha2::Northern_Mariana_Islands,
                CountryAlpha2::Palau,
                CountryAlpha2::Panama,
                CountryAlpha2::Puerto_Rico,
                CountryAlpha2::Timor_Leste,
                CountryAlpha2::Turks_and_Caicos_Islands,
                CountryAlpha2::United_States_Outlying_Islands,
                CountryAlpha2::United_States_of_America,
                CountryAlpha2::Virgin_Islands_British,
                CountryAlpha2::Virgin_Islands_U_S
            ],
            self::Kwanza                => [CountryAlpha2::Angola],
            self::East_Caribbean_Dollar => [
                CountryAlpha2::Anguilla,
                CountryAlpha2::Antigua_and_Barbuda,
                CountryAlpha2::Dominica,
                CountryAlpha2::Grenada,
                CountryAlpha2::Montserrat,
                CountryAlpha2::Saint_Kitts_and_Nevis,
                CountryAlpha2::Saint_Lucia,
                CountryAlpha2::Saint_Vincent_and_the_Grenadines
            ],
            self::Argentine_Peso    => [CountryAlpha2::Argentina],
            self::Armenian_Dram     => [CountryAlpha2::Armenia],
            self::Aruban_Florin     => [CountryAlpha2::Aruba],
            self::Australian_Dollar => [
                CountryAlpha2::Australia,
                CountryAlpha2::Christmas_Island,
                CountryAlpha2::Cocos_Islands,
                CountryAlpha2::Heard_Island_and_McDonald_Islands,
                CountryAlpha2::Kiribati,
                CountryAlpha2::Nauru,
                CountryAlpha2::Norfolk_Island,
                CountryAlpha2::Tuvalu
            ],
            self::Azerbaijan_Manat => [CountryAlpha2::Azerbaijan],
            self::Bahamian_Dollar  => [CountryAlpha2::Bahamas],
            self::Bahraini_Dinar   => [CountryAlpha2::Bahrain],
            self::Taka             => [CountryAlpha2::Bangladesh],
            self::Barbados_Dollar  => [CountryAlpha2::Barbados],
            self::Belarusian_Ruble => [CountryAlpha2::Belarus],
            self::Belize_Dollar    => [CountryAlpha2::Belize],
            self::CFA_Franc_BCEAO  => [
                CountryAlpha2::Benin,
                CountryAlpha2::Burkina_Faso,
                CountryAlpha2::Cote_d_Ivoire,
                CountryAlpha2::Guinea_Bissau,
                CountryAlpha2::Mali,
                CountryAlpha2::Niger,
                CountryAlpha2::Senegal,
                CountryAlpha2::Togo
            ],
            self::Bermudian_Dollar => [CountryAlpha2::Bermuda],
            self::Indian_Rupee     => [
                CountryAlpha2::Bhutan,
                CountryAlpha2::India
            ],
            self::Ngultrum         => [CountryAlpha2::Bhutan],
            self::Boliviano        => [CountryAlpha2::Bolivia],
            self::Mvdol            => [CountryAlpha2::Bolivia],
            self::Convertible_Mark => [CountryAlpha2::Bosnia_and_Herzegovina],
            self::Pula             => [CountryAlpha2::Botswana],
            self::Norwegian_Krone  => [
                CountryAlpha2::Bouvet_Island,
                CountryAlpha2::Norway,
                CountryAlpha2::Svalbard_Jan_Mayen
            ],
            self::Brazilian_Real    => [CountryAlpha2::Brazil],
            self::Brunei_Dollar     => [CountryAlpha2::Brunei_Darussalam],
            self::Bulgarian_Lev     => [CountryAlpha2::Bulgaria],
            self::Burundi_Franc     => [CountryAlpha2::Burundi],
            self::Cabo_Verde_Escudo => [CountryAlpha2::Cabo_Verde],
            self::Riel              => [CountryAlpha2::Cambodia],
            self::CFA_Franc_BEAC    => [
                CountryAlpha2::Cameroon,
                CountryAlpha2::Central_African_Republic,
                CountryAlpha2::Chad,
                CountryAlpha2::Congo,
                CountryAlpha2::Equatorial_Guinea,
                CountryAlpha2::Gabon
            ],
            self::Canadian_Dollar       => [CountryAlpha2::Canada],
            self::Cayman_Islands_Dollar => [CountryAlpha2::Cayman_Islands],
            self::Chilean_Peso          => [CountryAlpha2::Chile],
            self::Unidad_de_Fomento     => [CountryAlpha2::Chile],
            self::Yuan_Renminbi         => [CountryAlpha2::China],
            self::Colombian_Peso        => [CountryAlpha2::Colombia],
            self::Unidad_de_Valor_Real  => [CountryAlpha2::Colombia],
            self::Comorian_Franc        => [CountryAlpha2::Comoros],
            self::Congolese_Franc       => [CountryAlpha2::Congo_Democratic_Republic],
            self::New_Zealand_Dollar    => [
                CountryAlpha2::Cook_Islands,
                CountryAlpha2::New_Zealand,
                CountryAlpha2::Niue,
                CountryAlpha2::Pitcairn,
                CountryAlpha2::Tokelau
            ],
            self::Costa_Rican_Colon             => [CountryAlpha2::Costa_Rica],
            self::Cuban_Peso                    => [CountryAlpha2::Cuba],
            self::Peso_Convertible              => [CountryAlpha2::Cuba],
            self::Netherlands_Antillean_Guilder => [
                CountryAlpha2::Curacao,
                CountryAlpha2::Sint_Maarten_Dutch_part
            ],
            self::Czech_Koruna => [CountryAlpha2::Czechia],
            self::Danish_Krone => [
                CountryAlpha2::Denmark,
                CountryAlpha2::Faroe_Islands,
                CountryAlpha2::Greenland
            ],
            self::Djibouti_Franc         => [CountryAlpha2::Djibouti],
            self::Dominican_Peso         => [CountryAlpha2::Dominican_Republic],
            self::Egyptian_Pound         => [CountryAlpha2::Egypt],
            self::El_Salvador_Colon      => [CountryAlpha2::El_Salvador],
            self::Nakfa                  => [CountryAlpha2::Eritrea],
            self::Lilangeni              => [CountryAlpha2::Eswatini],
            self::Ethiopian_Birr         => [CountryAlpha2::Ethiopia],
            self::Falkland_Islands_Pound => [CountryAlpha2::Falkland_Islands],
            self::Fiji_Dollar            => [CountryAlpha2::Fiji],
            self::CFP_Franc              => [
                CountryAlpha2::French_Polynesia,
                CountryAlpha2::New_Caledonia,
                CountryAlpha2::Wallis_and_Futuna
            ],
            self::Dalasi          => [CountryAlpha2::Gambia],
            self::Lari            => [CountryAlpha2::Georgia],
            self::Ghana_Cedi      => [CountryAlpha2::Ghana],
            self::Gibraltar_Pound => [CountryAlpha2::Gibraltar],
            self::Quetzal         => [CountryAlpha2::Guatemala],
            self::Pound_Sterling  => [
                CountryAlpha2::Guernsey,
                CountryAlpha2::Isle_of_Man,
                CountryAlpha2::Jersey,
                CountryAlpha2::United_Kingdom
            ],
            self::Guinean_Franc      => [CountryAlpha2::Guinea],
            self::Guyana_Dollar      => [CountryAlpha2::Guyana],
            self::Gourde             => [CountryAlpha2::Haiti],
            self::Lempira            => [CountryAlpha2::Honduras],
            self::Hong_Kong_Dollar   => [CountryAlpha2::Hong_Kong],
            self::Forint             => [CountryAlpha2::Hungary],
            self::Iceland_Krona      => [CountryAlpha2::Iceland],
            self::Rupiah             => [CountryAlpha2::Indonesia],
            self::Iranian_Rial       => [CountryAlpha2::Iran],
            self::Iraqi_Dinar        => [CountryAlpha2::Iraq],
            self::New_Israeli_Sheqel => [CountryAlpha2::Israel],
            self::Jamaican_Dollar    => [CountryAlpha2::Jamaica],
            self::Yen                => [CountryAlpha2::Japan],
            self::Jordanian_Dinar    => [CountryAlpha2::Jordan],
            self::Tenge              => [CountryAlpha2::Kazakhstan],
            self::Kenyan_Shilling    => [CountryAlpha2::Kenya],
            self::North_Korean_Won   => [CountryAlpha2::Korea_Democratic_Peoples_Republic],
            self::Won                => [CountryAlpha2::Korea_Republic],
            self::Kuwaiti_Dinar      => [CountryAlpha2::Kuwait],
            self::Som                => [CountryAlpha2::Kyrgyzstan],
            self::Lao_Kip            => [CountryAlpha2::Lao_Peoples_Democratic_Republic],
            self::Lebanese_Pound     => [CountryAlpha2::Lebanon],
            self::Loti               => [CountryAlpha2::Lesotho],
            self::Rand               => [
                CountryAlpha2::Lesotho,
                CountryAlpha2::Namibia,
                CountryAlpha2::South_Africa
            ],
            self::Liberian_Dollar => [CountryAlpha2::Liberia],
            self::Libyan_Dinar    => [CountryAlpha2::Libya],
            self::Swiss_Franc     => [
                CountryAlpha2::Liechtenstein,
                CountryAlpha2::Switzerland
            ],
            self::Pataca                          => [CountryAlpha2::Macao],
            self::Denar                           => [CountryAlpha2::North_Macedonia],
            self::Malagasy_Ariary                 => [CountryAlpha2::Madagascar],
            self::Malawi_Kwacha                   => [CountryAlpha2::Malawi],
            self::Malaysian_Ringgit               => [CountryAlpha2::Malaysia],
            self::Rufiyaa                         => [CountryAlpha2::Maldives],
            self::Ouguiya                         => [CountryAlpha2::Mauritania],
            self::Mauritius_Rupee                 => [CountryAlpha2::Mauritius],
            self::Mexican_Peso                    => [CountryAlpha2::Mexico],
            self::Mexican_Unidad_de_Inversion_UDI => [CountryAlpha2::Mexico],
            self::Moldovan_Leu                    => [CountryAlpha2::Moldova],
            self::Tugrik                          => [CountryAlpha2::Mongolia],
            self::Moroccan_Dirham                 => [
                CountryAlpha2::Morocco,
                CountryAlpha2::Western_Sahara
            ],
            self::Mozambique_Metical                    => [CountryAlpha2::Mozambique],
            self::Kyat                                  => [CountryAlpha2::Myanmar],
            self::Namibia_Dollar                        => [CountryAlpha2::Namibia],
            self::Nepalese_Rupee                        => [CountryAlpha2::Nepal],
            self::Cordoba_Oro                           => [CountryAlpha2::Nicaragua],
            self::Naira                                 => [CountryAlpha2::Nigeria],
            self::Rial_Omani                            => [CountryAlpha2::Oman],
            self::Pakistan_Rupee                        => [CountryAlpha2::Pakistan],
            self::Balboa                                => [CountryAlpha2::Panama],
            self::Kina                                  => [CountryAlpha2::Papua_New_Guinea],
            self::Guarani                               => [CountryAlpha2::Paraguay],
            self::Sol                                   => [CountryAlpha2::Peru],
            self::Philippine_Peso                       => [CountryAlpha2::Philippines],
            self::Zloty                                 => [CountryAlpha2::Poland],
            self::Qatari_Rial                           => [CountryAlpha2::Qatar],
            self::Romanian_Leu                          => [CountryAlpha2::Romania],
            self::Russian_Ruble                         => [CountryAlpha2::Russian_Federation],
            self::Rwanda_Franc                          => [CountryAlpha2::Rwanda],
            self::Saint_Helena_Pound                    => [CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha],
            self::Tala                                  => [CountryAlpha2::Samoa],
            self::Dobra                                 => [CountryAlpha2::Sao_Tome_and_Principe],
            self::Saudi_Riyal                           => [CountryAlpha2::Saudi_Arabia],
            self::Serbian_Dinar                         => [CountryAlpha2::Serbia],
            self::Seychelles_Rupee                      => [CountryAlpha2::Seychelles],
            self::Leone_Old                             => [CountryAlpha2::Sierra_Leone],
            self::Leone                                 => [CountryAlpha2::Sierra_Leone],
            self::Singapore_Dollar                      => [CountryAlpha2::Singapore],
            self::Solomon_Islands_Dollar                => [CountryAlpha2::Solomon_Islands],
            self::Somali_Shilling                       => [CountryAlpha2::Somalia],
            self::South_Sudanese_Pound                  => [CountryAlpha2::South_Sudan],
            self::Sri_Lanka_Rupee                       => [CountryAlpha2::Sri_Lanka],
            self::Sudanese_Pound                        => [CountryAlpha2::Sudan],
            self::Surinam_Dollar                        => [CountryAlpha2::Suriname],
            self::Swedish_Krona                         => [CountryAlpha2::Sweden],
            self::WIR_Euro                              => [CountryAlpha2::Switzerland],
            self::WIR_Franc                             => [CountryAlpha2::Switzerland],
            self::Syrian_Pound                          => [CountryAlpha2::Syrian_Arab_Republic],
            self::New_Taiwan_Dollar                     => [CountryAlpha2::Taiwan_Province_of_China],
            self::Somoni                                => [CountryAlpha2::Tajikistan],
            self::Tanzanian_Shilling                    => [CountryAlpha2::Tanzania],
            self::Baht                                  => [CountryAlpha2::Thailand],
            self::Pa_anga                               => [CountryAlpha2::Tonga],
            self::Trinidad_and_Tobago_Dollar            => [CountryAlpha2::Trinidad_and_Tobago],
            self::Tunisian_Dinar                        => [CountryAlpha2::Tunisia],
            self::Turkish_Lira                          => [CountryAlpha2::Turkey],
            self::Turkmenistan_New_Manat                => [CountryAlpha2::Turkmenistan],
            self::Uganda_Shilling                       => [CountryAlpha2::Uganda],
            self::Hryvnia                               => [CountryAlpha2::Ukraine],
            self::UAE_Dirham                            => [CountryAlpha2::United_Arab_Emirates],
            self::US_Dollar_Next_day                    => [CountryAlpha2::United_States_of_America],
            self::Peso_Uruguayo                         => [CountryAlpha2::Uruguay],
            self::Uruguay_Peso_en_Unidades_Indexadas_UI => [CountryAlpha2::Uruguay],
            self::Unidad_Previsional                    => [CountryAlpha2::Uruguay],
            self::Uzbekistan_Sum                        => [CountryAlpha2::Uzbekistan],
            self::Vatu                                  => [CountryAlpha2::Vanuatu],
            self::Bolivar_Soberano_Old                  => [CountryAlpha2::Venezuela],
            self::Bolivar_Soberano                      => [CountryAlpha2::Venezuela],
            self::Dong                                  => [CountryAlpha2::Viet_Nam],
            self::Yemeni_Rial                           => [CountryAlpha2::Yemen],
            self::Zambian_Kwacha                        => [CountryAlpha2::Zambia],
            self::Zimbabwe_Dollar                       => [CountryAlpha2::Zimbabwe],
            default                                     => []
        };
    }
}

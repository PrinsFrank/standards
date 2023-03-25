<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

use PrinsFrank\Standards\BackedEnum;

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

    public function lowerCaseValue(): string
    {
        return strtolower($this->value);
    }
}

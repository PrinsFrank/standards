<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

use PrinsFrank\Standards\BackedEnum;

enum ISO4217_Numeric: string
{
    case ADB_Unit_of_Account                     = '965';
    case Afghan_afghani                          = '971';
    case Albanian_lek                            = '008';
    case Algerian_dinar                          = '012';
    case Angolan_kwanza                          = '973';
    case Argentine_peso                          = '032';
    case Armenian_dram                           = '051';
    case Aruban_florin                           = '533';
    case Australian_dollar                       = '036';
    case Azerbaijani_manat                       = '944';
    case Bahamian_dollar                         = '044';
    case Bahraini_dinar                          = '048';
    case Bangladeshi_taka                        = '050';
    case Barbados_dollar                         = '052';
    case Belarusian_ruble                        = '933';
    case Belize_dollar                           = '084';
    case Bermudian_dollar                        = '060';
    case Bhutanese_ngultrum                      = '064';
    case Bolivian_Mvdol                          = '984';
    case Boliviano                               = '068';
    case Bosnia_and_Herzegovina_convertible_mark = '977';
    case Botswana_pula                           = '072';
    case Brazilian_real                          = '986';
    case Brunei_dollar                           = '096';
    case Bulgarian_lev                           = '975';
    case Burundian_franc                         = '108';
    case Cambodian_riel                          = '116';
    case Canadian_dollar                         = '124';
    case Cape_Verdean_escudo                     = '132';
    case Cayman_Islands_dollar                   = '136';
    case CFA_franc_BCEAO                         = '952';
    case CFA_franc_BEAC                          = '950';
    case CFP_franc_franc_Pacifique               = '953';
    case Chilean_peso                            = '152';
    case Chinese_yuan                            = '156';
    case Code_reserved_for_testing               = '963';
    case Colombian_peso                          = '170';
    case Comoro_franc                            = '174';
    case Congolese_franc                         = '976';
    case Costa_Rican_colon                       = '188';
    case Croatian_kuna                           = '191';
    case Cuban_convertible_peso                  = '931';
    case Cuban_peso                              = '192';
    case Czech_koruna                            = '203';
    case Danish_krone                            = '208';
    case Djiboutian_franc                        = '262';
    case Dominican_peso                          = '214';
    case East_Caribbean_dollar                   = '951';
    case Egyptian_pound                          = '818';
    case Eritrean_nakfa                          = '232';
    case Ethiopian_birr                          = '230';
    case Euro                                    = '978';
    case European_Composite_Unit                 = '955';
    case European_Monetary_Unit                  = '956';
    case European_Unit_of_Account_9              = '957';
    case European_Unit_of_Account_17             = '958';
    case Falkland_Islands_pound                  = '238';
    case Fiji_dollar                             = '242';
    case Gambian_dalasi                          = '270';
    case Georgian_lari                           = '981';
    case Ghanaian_cedi                           = '936';
    case Gibraltar_pound                         = '292';
    case Gold_one_troy_ounce                     = '959';
    case Guatemalan_quetzal                      = '320';
    case Guinean_franc                           = '324';
    case Guyanese_dollar                         = '328';
    case Haitian_gourde                          = '332';
    case Honduran_lempira                        = '340';
    case Hong_Kong_dollar                        = '344';
    case Hungarian_forint                        = '348';
    case Icelandic_krona                         = '352';
    case Indian_rupee                            = '356';
    case Indonesian_rupiah                       = '360';
    case Iranian_rial                            = '364';
    case Iraqi_dinar                             = '368';
    case Israeli_new_shekel                      = '376';
    case Jamaican_dollar                         = '388';
    case Japanese_yen                            = '392';
    case Jordanian_dinar                         = '400';
    case Kazakhstani_tenge                       = '398';
    case Kenyan_shilling                         = '404';
    case Kuwaiti_dinar                           = '414';
    case Kyrgyzstani_som                         = '417';
    case Lao_kip                                 = '418';
    case Lebanese_pound                          = '422';
    case Lesotho_loti                            = '426';
    case Liberian_dollar                         = '430';
    case Libyan_dinar                            = '434';
    case Macanese_pataca                         = '446';
    case Macedonian_denar                        = '807';
    case Malagasy_ariary                         = '969';
    case Malawian_kwacha                         = '454';
    case Malaysian_ringgit                       = '458';
    case Maldivian_rufiyaa                       = '462';
    case Mauritanian_ouguiya                     = '929';
    case Mauritian_rupee                         = '480';
    case Mexican_peso                            = '484';
    case Mexican_Unidad_de_Inversion             = '979';
    case Moldovan_leu                            = '498';
    case Mongolian_togrog                        = '496';
    case Moroccan_dirham                         = '504';
    case Mozambican_metical                      = '943';
    case Myanmar_kyat                            = '104';
    case Namibian_dollar                         = '516';
    case Nepalese_rupee                          = '524';
    case Netherlands_Antillean_guilder           = '532';
    case New_Taiwan_dollar                       = '901';
    case New_Zealand_dollar                      = '554';
    case Nicaraguan_cordoba                      = '558';
    case Nigerian_naira                          = '566';
    case No_currency                             = '999';
    case North_Korean_won                        = '408';
    case Norwegian_krone                         = '578';
    case Omani_rial                              = '512';
    case Pakistani_rupee                         = '586';
    case Palladium_one_troy_ounce                = '964';
    case Panamanian_balboa                       = '590';
    case Papua_New_Guinean_kina                  = '598';
    case Paraguayan_guarani                      = '600';
    case Peruvian_sol                            = '604';
    case Philippine_peso                         = '608';
    case Platinum_one_troy_ounce                 = '962';
    case Polish_zloty                            = '985';
    case Pound_sterling                          = '826';
    case Qatari_riyal                            = '634';
    case Romanian_leu                            = '946';
    case Russian_ruble                           = '643';
    case Rwandan_franc                           = '646';
    case Saint_Helena_pound                      = '654';
    case Salvadoran_colon                        = '222';
    case Samoan_tala                             = '882';
    case Saudi_riyal                             = '682';
    case Serbian_dinar                           = '941';
    case Seychelles_rupee                        = '690';
    case Sierra_Leonean_leone                    = '694';
    case Silver_one_troy_ounce                   = '961';
    case Singapore_dollar                        = '702';
    case Solomon_Islands_dollar                  = '090';
    case Somali_shilling                         = '706';
    case South_African_rand                      = '710';
    case South_Korean_won                        = '410';
    case South_Sudanese_pound                    = '728';
    case Special_drawing_rights                  = '960';
    case Sri_Lankan_rupee                        = '144';
    case SUCRE                                   = '994';
    case Sudanese_pound                          = '938';
    case Surinamese_dollar                       = '968';
    case Swazi_lilangeni                         = '748';
    case Swedish_krona                           = '752';
    case Swiss_franc                             = '756';
    case Syrian_pound                            = '760';
    case Tajikistani_somoni                      = '972';
    case Tanzanian_shilling                      = '834';
    case Thai_baht                               = '764';
    case Tongan_pa_anga                          = '776';
    case Trinidad_and_Tobago_dollar              = '780';
    case Tunisian_dinar                          = '788';
    case Turkish_lira                            = '949';
    case Turkmenistan_manat                      = '934';
    case Ugandan_shilling                        = '800';
    case Ukrainian_hryvnia                       = '980';
    case Unidad_de_Fomento                       = '990';
    case Unidad_de_Valor_Real                    = '970';
    case Unidad_previsional                      = '927';
    case United_Arab_Emirates_dirham             = '784';
    case United_States_dollar                    = '840';
    case United_States_dollar_next_day           = '997';
    case Uruguay_Peso_en_Unidades_Indexadas      = '940';
    case Uruguayan_peso                          = '858';
    case Uzbekistan_som                          = '860';
    case Vanuatu_vatu                            = '548';
    case Venezuelan_bolivar_digital              = '926';
    case Venezuelan_bolivar_soberano             = '928';
    case Vietnamese_dong                         = '704';
    case WIR_euro                                = '947';
    case WIR_franc                               = '948';
    case Yemeni_rial                             = '886';
    case Zambian_kwacha                          = '967';
    case Zimbabwean_dollar                       = '932';

    public static function fromInt(int $from): self
    {
        return self::from(str_pad((string) $from, 3, '0', STR_PAD_LEFT));
    }

    public static function tryFromInt(int $from): ?self
    {
        return self::tryFrom(str_pad((string) $from, 3, '0', STR_PAD_LEFT));
    }

    public function toISO4217_Alpha_3(): ISO4217_Alpha_3
    {
        return BackedEnum::fromKey(ISO4217_Alpha_3::class, $this->name);
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

/**
 * @no-official-source
 *
 * @manually-updated
 */
enum CurrencySymbol: string {
    case Afghani = '؋';
    case Ar = 'Ar';
    case Arabic_Dal_Ain_With_Dots = '.د.ع';
    case Arabic_Dal_Alef_with_Dot = 'د.ا';
    case Arabic_Dal_Alef_With_Hamza_With_Dots = '.د.إ';
    case Arabic_Dal_Beh_With_Dots = '.د.ب';
    case Arabic_Dal_Jeem = 'دج';
    case Arabic_Dal_Kaf_With_Dot = 'د.ك';
    case Arabic_Dal_Meem_With_Dots = '.د.م';
    case Arabic_Dal_Teh_With_Dot = 'د.ت';
    case Arabic_Jeem_Meem_With_Dots = '.ج.م';
    case Arabic_Lam_Lam_With_Dots = '.ل.ل';
    case Arabic_Reh_Ain_With_Dots = '.ر.ع';
    case Arabic_Reh_Qaf_With_Dots = '.ر.ق';
    case Arabic_Reh_Seen_With_Dots = '.ر.س';
    case Arabic_Reh_Yeh_With_Dots = '.ر.ي';
    case Armenian_Dram = '֏';
    case B_Dollar = 'B$';
    case B_Slash_Dot = 'B/.';
    case Baht = '฿';
    case Bengali_Rupee = '৳';
    case Br = 'Br';
    case Bs = 'Bs';
    case Bs_dot = 'Bs.';
    case C_Dollar = 'C$';
    case Cedi = '₵';
    case CF = 'CF';
    case Cg = 'Cg';
    case Colon = '₡';
    case com = 'сом';
    case Cyrillic_Capital_De_Small_Ie_En = 'Ден';
    case Cyrillic_Capital_El_Small_Ve = 'Лв';
    case D = 'D';
    case Db = 'Db';
    case Devanagari_Ra_U = 'रु';
    case DIN = 'DIN';
    case Dollar = '$';
    case Dong = '₫';
    case Ethiopian_Be_Re = 'ብር';
    case Euro = '€';
    case f_With_Hook = 'ƒ';
    case FBu = 'FBu';
    case FC = 'FC';
    case Fdj = 'Fdj';
    case FG = 'FG';
    case fr_Dot = 'fr.';
    case FRw = 'FRw';
    case Ft = 'Ft';
    case G = 'G';
    case Guarani = '₲';
    case Hryvnia = '₴';
    case Indian_Rupee = '₹';
    case Iranian_Rial = '﷼';
    case K = 'K';
    case K_c_With_Caron = 'Kč';
    case KM = 'KM';
    case kn = 'kn';
    case Kr = 'kr';
    case Kr_Dot = 'Kr.';
    case Ks_Dot = 'Ks.';
    case KSh = 'KSh';
    case Kz = 'Kz';
    case L = 'L';
    case Lao_Kip = '₭';
    case Lari = '₾';
    case LD = 'LD';
    case Le = 'Le';
    case LS = 'LS';
    case m = 'm';
    case Manat = '₼';
    case MT = 'MT';
    case NA_F_With_Hook = 'NAƒ';
    case Naira = '₦';
    case New_Israeli_Sheqel = '₪';
    case NT_Dollar = 'NT$';
    case Nu_Dot = 'Nu.';
    case P = 'P';
    case Peso = '₱';
    case Pound = '£';
    case Q = 'Q';
    case R = 'R';
    case R_Dollar = 'R$';
    case Re = 'Re';
    case Riel = '៛';
    case RM = 'RM';
    case Rp = 'Rp';
    case Rs_Dot = 'Rs.';
    case Ruble = '₽';
    case Sh_Dot_So = 'Sh.So';
    case SM = 'SM';
    case SVC = 'SVC';
    case T_Dollar = 'T$';
    case Tenge = '₸';
    case Thaana_Raa = 'ރ';
    case TSh = 'TSh';
    case Tugrik = '₮';
    case Turkish_Lira = '₺';
    case UM = 'UM';
    case USh = 'USh';
    case VT = 'VT';
    case Won = '₩';
    case Yen = '¥';
    case zl_With_Stroke = 'zł';
    case ZiG = 'ZiG';

    public static function forCurrency(CurrencyAlpha3|CurrencyName|CurrencyNumeric $currency): ?self {
        if ($currency instanceof CurrencyAlpha3 === false) {
            $currency = $currency->toCurrencyAlpha3();
        }

        return match ($currency) {
            CurrencyAlpha3::ADB_Unit_of_Account => null,
            CurrencyAlpha3::Afghani => self::Afghani,
            CurrencyAlpha3::Algerian_Dinar => self::Arabic_Dal_Jeem,
            CurrencyAlpha3::Arab_Accounting_Dinar => null,
            CurrencyAlpha3::Argentine_Peso => self::Dollar,
            CurrencyAlpha3::Armenian_Dram => self::Armenian_Dram,
            CurrencyAlpha3::Aruban_Florin => self::f_With_Hook,
            CurrencyAlpha3::Australian_Dollar => self::Dollar,
            CurrencyAlpha3::Azerbaijan_Manat => self::Manat,
            CurrencyAlpha3::Bahamian_Dollar => self::Dollar,
            CurrencyAlpha3::Bahraini_Dinar => self::Arabic_Dal_Beh_With_Dots,
            CurrencyAlpha3::Baht => self::Baht,
            CurrencyAlpha3::Balboa => self::B_Slash_Dot,
            CurrencyAlpha3::Barbados_Dollar => self::Dollar,
            CurrencyAlpha3::Belarusian_Ruble => self::Br,
            CurrencyAlpha3::Belize_Dollar => self::Dollar,
            CurrencyAlpha3::Bermudian_Dollar => self::Dollar,
            CurrencyAlpha3::Bolivar_Soberano,
            CurrencyAlpha3::Bolivar_Soberano_Old => self::Bs_dot,
            CurrencyAlpha3::Boliviano => self::Bs,
            CurrencyAlpha3::Bond_Markets_Unit_European_Composite_Unit_EURCO => null,
            CurrencyAlpha3::Bond_Markets_Unit_European_Monetary_Unit_E_M_U_6 => null,
            CurrencyAlpha3::Bond_Markets_Unit_European_Unit_of_Account_17_E_U_A_17 => null,
            CurrencyAlpha3::Bond_Markets_Unit_European_Unit_of_Account_9_E_U_A_9 => null,
            CurrencyAlpha3::Brazilian_Real => self::R_Dollar,
            CurrencyAlpha3::Brunei_Dollar => self::B_Dollar,
            CurrencyAlpha3::Bulgarian_Lev => self::Cyrillic_Capital_El_Small_Ve,
            CurrencyAlpha3::Burundi_Franc => self::FBu,
            CurrencyAlpha3::CFA_Franc_BCEAO => null,
            CurrencyAlpha3::CFA_Franc_BEAC => null,
            CurrencyAlpha3::CFP_Franc => null,
            CurrencyAlpha3::Cabo_Verde_Escudo => self::Dollar,
            CurrencyAlpha3::Canadian_Dollar => self::Dollar,
            CurrencyAlpha3::Caribbean_Guilder => self::Cg,
            CurrencyAlpha3::Cayman_Islands_Dollar => self::Dollar,
            CurrencyAlpha3::Chilean_Peso => self::Dollar,
            CurrencyAlpha3::Codes_specifically_reserved_for_testing_purposes => null,
            CurrencyAlpha3::Colombian_Peso => self::Dollar,
            CurrencyAlpha3::Comorian_Franc => self::CF,
            CurrencyAlpha3::Congolese_Franc => self::FC,
            CurrencyAlpha3::Convertible_Mark => self::KM,
            CurrencyAlpha3::Cordoba_Oro => self::C_Dollar,
            CurrencyAlpha3::Costa_Rican_Colon => self::Colon,
            CurrencyAlpha3::Cuban_Peso => self::Dollar,
            CurrencyAlpha3::Czech_Koruna => self::K_c_With_Caron,
            CurrencyAlpha3::Dalasi => self::D,
            CurrencyAlpha3::Danish_Krone => self::Kr_Dot,
            CurrencyAlpha3::Denar => self::Cyrillic_Capital_De_Small_Ie_En,
            CurrencyAlpha3::Djibouti_Franc => self::Fdj,
            CurrencyAlpha3::Dobra => self::Db,
            CurrencyAlpha3::Dominican_Peso => self::Dollar,
            CurrencyAlpha3::Dong => self::Dong,
            CurrencyAlpha3::East_Caribbean_Dollar => self::Dollar,
            CurrencyAlpha3::Egyptian_Pound => self::Arabic_Jeem_Meem_With_Dots,
            CurrencyAlpha3::El_Salvador_Colon => self::SVC,
            CurrencyAlpha3::Ethiopian_Birr => self::Ethiopian_Be_Re,
            CurrencyAlpha3::Euro => self::Euro,
            CurrencyAlpha3::Falkland_Islands_Pound => self::Pound,
            CurrencyAlpha3::Fiji_Dollar => self::Dollar,
            CurrencyAlpha3::Forint => self::Ft,
            CurrencyAlpha3::Ghana_Cedi => self::Cedi,
            CurrencyAlpha3::Gibraltar_Pound => self::Pound,
            CurrencyAlpha3::Gold => null,
            CurrencyAlpha3::Gourde => self::G,
            CurrencyAlpha3::Guarani => self::Guarani,
            CurrencyAlpha3::Guinean_Franc => self::FG,
            CurrencyAlpha3::Guyana_Dollar => self::Dollar,
            CurrencyAlpha3::Hong_Kong_Dollar => self::Dollar,
            CurrencyAlpha3::Hryvnia => self::Hryvnia,
            CurrencyAlpha3::Iceland_Krona => self::Kr,
            CurrencyAlpha3::Indian_Rupee => self::Indian_Rupee,
            CurrencyAlpha3::Iranian_Rial => self::Iranian_Rial,
            CurrencyAlpha3::Iraqi_Dinar => self::Arabic_Dal_Ain_With_Dots,
            CurrencyAlpha3::Jamaican_Dollar => self::Dollar,
            CurrencyAlpha3::Jordanian_Dinar => self::Arabic_Dal_Alef_with_Dot,
            CurrencyAlpha3::Kenyan_Shilling => self::KSh,
            CurrencyAlpha3::Kina => self::K,
            CurrencyAlpha3::Kuwaiti_Dinar => self::Arabic_Dal_Kaf_With_Dot,
            CurrencyAlpha3::Kwanza => self::Kz,
            CurrencyAlpha3::Kyat => self::Ks_Dot,
            CurrencyAlpha3::Lao_Kip => self::Lao_Kip,
            CurrencyAlpha3::Lari => self::Lari,
            CurrencyAlpha3::Lebanese_Pound => self::Arabic_Lam_Lam_With_Dots,
            CurrencyAlpha3::Lek => self::L,
            CurrencyAlpha3::Lempira => self::L,
            CurrencyAlpha3::Leone,
            CurrencyAlpha3::Leone_Old => self::Le,
            CurrencyAlpha3::Liberian_Dollar => self::Dollar,
            CurrencyAlpha3::Libyan_Dinar => self::LD,
            CurrencyAlpha3::Lilangeni => self::L,
            CurrencyAlpha3::Loti => self::L,
            CurrencyAlpha3::Malagasy_Ariary => self::Ar,
            CurrencyAlpha3::Malawi_Kwacha => self::K,
            CurrencyAlpha3::Malaysian_Ringgit => self::RM,
            CurrencyAlpha3::Mauritius_Rupee => self::Re,
            CurrencyAlpha3::Mexican_Peso => self::Dollar,
            CurrencyAlpha3::Mexican_Unidad_de_Inversion_UDI => null,
            CurrencyAlpha3::Moldovan_Leu => self::L,
            CurrencyAlpha3::Moroccan_Dirham => self::Arabic_Dal_Meem_With_Dots,
            CurrencyAlpha3::Mozambique_Metical => self::MT,
            CurrencyAlpha3::Mvdol => null,
            CurrencyAlpha3::Naira => self::Naira,
            CurrencyAlpha3::Nakfa => null,
            CurrencyAlpha3::Namibia_Dollar => self::Dollar,
            CurrencyAlpha3::Nepalese_Rupee => self::Devanagari_Ra_U,
            CurrencyAlpha3::Netherlands_Antillean_Guilder => self::NA_F_With_Hook,
            CurrencyAlpha3::New_Israeli_Sheqel => self::New_Israeli_Sheqel,
            CurrencyAlpha3::New_Taiwan_Dollar => self::NT_Dollar,
            CurrencyAlpha3::New_Zealand_Dollar => self::Dollar,
            CurrencyAlpha3::Ngultrum => self::Nu_Dot,
            CurrencyAlpha3::North_Korean_Won => self::Won,
            CurrencyAlpha3::Norwegian_Krone => self::Kr,
            CurrencyAlpha3::Ouguiya => self::UM,
            CurrencyAlpha3::Pa_anga => self::T_Dollar,
            CurrencyAlpha3::Pakistan_Rupee => self::Rs_Dot,
            CurrencyAlpha3::Palladium => null,
            CurrencyAlpha3::Pataca => self::Dollar,
            CurrencyAlpha3::Peso_Convertible => null,
            CurrencyAlpha3::Peso_Uruguayo => self::Dollar,
            CurrencyAlpha3::Philippine_Peso => self::Peso,
            CurrencyAlpha3::Platinum => null,
            CurrencyAlpha3::Pound_Sterling => self::Pound,
            CurrencyAlpha3::Pula => self::P,
            CurrencyAlpha3::Qatari_Rial => self::Arabic_Reh_Qaf_With_Dots,
            CurrencyAlpha3::Quetzal => self::Q,
            CurrencyAlpha3::Rand => self::R,
            CurrencyAlpha3::Rial_Omani => self::Arabic_Reh_Ain_With_Dots,
            CurrencyAlpha3::Riel => self::Riel,
            CurrencyAlpha3::Romanian_Leu => null,
            CurrencyAlpha3::Rufiyaa => self::Thaana_Raa,
            CurrencyAlpha3::Rupiah => self::Rp,
            CurrencyAlpha3::Russian_Ruble => self::Ruble,
            CurrencyAlpha3::Rwanda_Franc => self::FRw,
            CurrencyAlpha3::SDR_Special_Drawing_Right => null,
            CurrencyAlpha3::Saint_Helena_Pound => self::Pound,
            CurrencyAlpha3::Saudi_Riyal => self::Arabic_Reh_Seen_With_Dots,
            CurrencyAlpha3::Serbian_Dinar => self::DIN,
            CurrencyAlpha3::Seychelles_Rupee => self::Re,
            CurrencyAlpha3::Silver => null,
            CurrencyAlpha3::Singapore_Dollar => self::Dollar,
            CurrencyAlpha3::Sol => null,
            CurrencyAlpha3::Solomon_Islands_Dollar => self::Dollar,
            CurrencyAlpha3::Som => self::com,
            CurrencyAlpha3::Somali_Shilling => self::Sh_Dot_So,
            CurrencyAlpha3::Somoni => self::SM,
            CurrencyAlpha3::South_Sudanese_Pound => self::Pound,
            CurrencyAlpha3::Sri_Lanka_Rupee => self::Re,
            CurrencyAlpha3::Sucre => null,
            CurrencyAlpha3::Sudanese_Pound => self::LS,
            CurrencyAlpha3::Surinam_Dollar => self::Dollar,
            CurrencyAlpha3::Swedish_Krona => self::Kr,
            CurrencyAlpha3::Swiss_Franc => self::fr_Dot,
            CurrencyAlpha3::Syrian_Pound => self::LS,
            CurrencyAlpha3::Taka => self::Bengali_Rupee,
            CurrencyAlpha3::Tala => self::Dollar,
            CurrencyAlpha3::Tanzanian_Shilling => self::TSh,
            CurrencyAlpha3::Tenge => self::Tenge,
            CurrencyAlpha3::The_codes_assigned_for_transactions_where_no_currency_is_involved => null,
            CurrencyAlpha3::Trinidad_and_Tobago_Dollar => self::Dollar,
            CurrencyAlpha3::Tugrik => self::Tugrik,
            CurrencyAlpha3::Tunisian_Dinar => self::Arabic_Dal_Teh_With_Dot,
            CurrencyAlpha3::Turkish_Lira => self::Turkish_Lira,
            CurrencyAlpha3::Turkmenistan_New_Manat => self::m,
            CurrencyAlpha3::UAE_Dirham => self::Arabic_Dal_Alef_With_Hamza_With_Dots,
            CurrencyAlpha3::US_Dollar => self::Dollar,
            CurrencyAlpha3::US_Dollar_Next_day => self::Dollar,
            CurrencyAlpha3::Uganda_Shilling => self::USh,
            CurrencyAlpha3::Unidad_Previsional => null,
            CurrencyAlpha3::Unidad_de_Fomento => null,
            CurrencyAlpha3::Unidad_de_Valor_Real => null,
            CurrencyAlpha3::Uruguay_Peso_en_Unidades_Indexadas_UI => self::Dollar,
            CurrencyAlpha3::Uzbekistan_Sum => null,
            CurrencyAlpha3::Vatu => self::VT,
            CurrencyAlpha3::WIR_Euro => null,
            CurrencyAlpha3::WIR_Franc => null,
            CurrencyAlpha3::Won => self::Won,
            CurrencyAlpha3::Yemeni_Rial => self::Arabic_Reh_Yeh_With_Dots,
            CurrencyAlpha3::Yen => self::Yen,
            CurrencyAlpha3::Yuan_Renminbi => self::Yen,
            CurrencyAlpha3::Zambian_Kwacha => self::K,
            CurrencyAlpha3::Zimbabwe_Dollar => self::Dollar,
            CurrencyAlpha3::Zimbabwe_Gold => self::ZiG,
            CurrencyAlpha3::Zloty => self::zl_With_Stroke,
            CurrencyAlpha3::Kuna => self::kn,
        };
    }
}

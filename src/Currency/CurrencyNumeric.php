<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\Currency\MinorUnits\CurrencyMinorLowerLastAlpha3;
use PrinsFrank\Standards\Currency\MinorUnits\CurrencyMinorUpperXAlpha3;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Bibliographic;
use PrinsFrank\Standards\Language\LanguageAlpha3Extensive;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;
use TypeError;
use ValueError;

/**
 * @standard ISO4217
 * @source https://www.iso.org/iso-4217-currency-codes.html
 * @source https://www.six-group.com/en/products-services/financial-information/data-standards.html
 * @source https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list_one.xml
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\CurrencyMapping
 */
enum CurrencyNumeric: string {
    case ADB_Unit_of_Account = '965';
    case Afghani = '971';
    case Algerian_Dinar = '012';
    case Arab_Accounting_Dinar = '396';
    case Argentine_Peso = '032';
    case Armenian_Dram = '051';
    case Aruban_Florin = '533';
    case Australian_Dollar = '036';
    case Azerbaijan_Manat = '944';
    case Bahamian_Dollar = '044';
    case Bahraini_Dinar = '048';
    case Baht = '764';
    case Balboa = '590';
    case Barbados_Dollar = '052';
    case Belarusian_Ruble = '933';
    case Belize_Dollar = '084';
    case Bermudian_Dollar = '060';
    case Bolivar_Soberano = '926';
    case Bolivar_Soberano_Old = '928';
    case Boliviano = '068';
    case Bond_Markets_Unit_European_Composite_Unit_EURCO = '955';
    case Bond_Markets_Unit_European_Monetary_Unit_E_M_U_6 = '956';
    case Bond_Markets_Unit_European_Unit_of_Account_17_E_U_A_17 = '958';
    case Bond_Markets_Unit_European_Unit_of_Account_9_E_U_A_9 = '957';
    case Brazilian_Real = '986';
    case Brunei_Dollar = '096';
    case Bulgarian_Lev = '975';
    case Burundi_Franc = '108';
    case CFA_Franc_BCEAO = '952';
    case CFA_Franc_BEAC = '950';
    case CFP_Franc = '953';
    case Cabo_Verde_Escudo = '132';
    case Canadian_Dollar = '124';
    case Cayman_Islands_Dollar = '136';
    case Chilean_Peso = '152';
    case Codes_specifically_reserved_for_testing_purposes = '963';
    case Colombian_Peso = '170';
    case Comorian_Franc = '174';
    case Congolese_Franc = '976';
    case Convertible_Mark = '977';
    case Cordoba_Oro = '558';
    case Costa_Rican_Colon = '188';
    case Cuban_Peso = '192';
    case Czech_Koruna = '203';
    case Dalasi = '270';
    case Danish_Krone = '208';
    case Denar = '807';
    case Djibouti_Franc = '262';
    case Dobra = '930';
    case Dominican_Peso = '214';
    case Dong = '704';
    case East_Caribbean_Dollar = '951';
    case Egyptian_Pound = '818';
    case El_Salvador_Colon = '222';
    case Ethiopian_Birr = '230';
    case Euro = '978';
    case Falkland_Islands_Pound = '238';
    case Fiji_Dollar = '242';
    case Forint = '348';
    case Ghana_Cedi = '936';
    case Gibraltar_Pound = '292';
    case Gold = '959';
    case Gourde = '332';
    case Guarani = '600';
    case Guinean_Franc = '324';
    case Guyana_Dollar = '328';
    case Hong_Kong_Dollar = '344';
    case Hryvnia = '980';
    case Iceland_Krona = '352';
    case Indian_Rupee = '356';
    case Iranian_Rial = '364';
    case Iraqi_Dinar = '368';
    case Jamaican_Dollar = '388';
    case Jordanian_Dinar = '400';
    case Kenyan_Shilling = '404';
    case Kina = '598';
    case Kuwaiti_Dinar = '414';
    case Kwanza = '973';
    case Kyat = '104';
    case Lao_Kip = '418';
    case Lari = '981';
    case Lebanese_Pound = '422';
    case Lek = '008';
    case Lempira = '340';
    case Leone = '925';
    case Liberian_Dollar = '430';
    case Libyan_Dinar = '434';
    case Lilangeni = '748';
    case Loti = '426';
    case Malagasy_Ariary = '969';
    case Malawi_Kwacha = '454';
    case Malaysian_Ringgit = '458';
    case Mauritius_Rupee = '480';
    case Mexican_Peso = '484';
    case Mexican_Unidad_de_Inversion_UDI = '979';
    case Moldovan_Leu = '498';
    case Moroccan_Dirham = '504';
    case Mozambique_Metical = '943';
    case Mvdol = '984';
    case Naira = '566';
    case Nakfa = '232';
    case Namibia_Dollar = '516';
    case Nepalese_Rupee = '524';
    case Netherlands_Antillean_Guilder = '532';
    case New_Israeli_Sheqel = '376';
    case New_Taiwan_Dollar = '901';
    case New_Zealand_Dollar = '554';
    case Ngultrum = '064';
    case North_Korean_Won = '408';
    case Norwegian_Krone = '578';
    case Ouguiya = '929';
    case Pa_anga = '776';
    case Pakistan_Rupee = '586';
    case Palladium = '964';
    case Pataca = '446';
    case Peso_Uruguayo = '858';
    case Philippine_Peso = '608';
    case Platinum = '962';
    case Pound_Sterling = '826';
    case Pula = '072';
    case Qatari_Rial = '634';
    case Quetzal = '320';
    case Rand = '710';
    case Rial_Omani = '512';
    case Riel = '116';
    case Romanian_Leu = '946';
    case Rufiyaa = '462';
    case Rupiah = '360';
    case Russian_Ruble = '643';
    case Rwanda_Franc = '646';
    case SDR_Special_Drawing_Right = '960';
    case Saint_Helena_Pound = '654';
    case Saudi_Riyal = '682';
    case Serbian_Dinar = '941';
    case Seychelles_Rupee = '690';
    case Silver = '961';
    case Singapore_Dollar = '702';
    case Sol = '604';
    case Solomon_Islands_Dollar = '090';
    case Som = '417';
    case Somali_Shilling = '706';
    case Somoni = '972';
    case South_Sudanese_Pound = '728';
    case Sri_Lanka_Rupee = '144';
    case Sucre = '994';
    case Sudanese_Pound = '938';
    case Surinam_Dollar = '968';
    case Swedish_Krona = '752';
    case Swiss_Franc = '756';
    case Syrian_Pound = '760';
    case Taka = '050';
    case Tala = '882';
    case Tanzanian_Shilling = '834';
    case Tenge = '398';
    case The_codes_assigned_for_transactions_where_no_currency_is_involved = '999';
    case Trinidad_and_Tobago_Dollar = '780';
    case Tugrik = '496';
    case Tunisian_Dinar = '788';
    case Turkish_Lira = '949';
    case Turkmenistan_New_Manat = '934';
    case UAE_Dirham = '784';
    case US_Dollar = '840';
    case US_Dollar_Next_day = '997';
    case Uganda_Shilling = '800';
    case Unidad_Previsional = '927';
    case Unidad_de_Fomento = '990';
    case Unidad_de_Valor_Real = '970';
    case Uruguay_Peso_en_Unidades_Indexadas_UI = '940';
    case Uzbekistan_Sum = '860';
    case Vatu = '548';
    case WIR_Euro = '947';
    case WIR_Franc = '948';
    case Won = '410';
    case Yemeni_Rial = '886';
    case Yen = '392';
    case Yuan_Renminbi = '156';
    case Zambian_Kwacha = '967';
    case Zimbabwe_Gold = '924';
    case Zloty = '985';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Kuna = '191';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Leone_Old = '694';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Peso_Convertible = '931';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Zimbabwe_Dollar = '932';

    public static function tryFromInt(int $from): ?self {
        return self::tryFrom(str_pad((string) $from, 3, '0', STR_PAD_LEFT));
    }

    /**
     * @throws TypeError
     * @throws ValueError
     */
    public static function fromInt(int $from): self {
        return self::from(str_pad((string) $from, 3, '0', STR_PAD_LEFT));
    }

    public function toCurrencyAlpha3(): CurrencyAlpha3 {
        return BackedEnum::fromName(CurrencyAlpha3::class, $this->name);
    }

    public function toCurrencyName(): CurrencyName {
        return BackedEnum::fromName(CurrencyName::class, $this->name);
    }

    public function getSymbol(): ?CurrencySymbol {
        return CurrencySymbol::forCurrency($this);
    }

    public function getCurrencyMinorLowerLastAlpha3(): ?CurrencyMinorLowerLastAlpha3 {
        return $this->toCurrencyAlpha3()->getCurrencyMinorLowerLastAlpha3();
    }

    public function getCurrencyMinorUpperXAlpha3(): ?CurrencyMinorUpperXAlpha3 {
        return $this->toCurrencyAlpha3()->getCurrencyMinorUpperXAlpha3();
    }

    public function valueAsInt(): int {
        return (int) $this->value;
    }

    public function format(float $amount, LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|LanguageAlpha3Extensive $language, CountryAlpha2|CountryAlpha3|CountryNumeric|null $country = null): ?string {
        return $this->toCurrencyAlpha3()->format($amount, $language, $country);
    }

    public function getMinorUnits(): ?int {
        return $this->toCurrencyAlpha3()->getMinorUnits();
    }

    /** @return list<CountryAlpha2> */
    public function getCountriesAlpha2(): array {
        return $this->toCurrencyAlpha3()->getCountriesAlpha2();
    }
}

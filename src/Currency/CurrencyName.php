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

/**
 * @standard ISO4217
 * @source https://www.iso.org/iso-4217-currency-codes.html
 * @source https://www.six-group.com/en/products-services/financial-information/data-standards.html
 * @source https://www.six-group.com/dam/download/financial-information/data-center/iso-currrency/lists/list_one.xml
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\CurrencyMapping
 */
enum CurrencyName: string {
    case ADB_Unit_of_Account = 'ADB Unit of Account';
    case Afghani = 'Afghani';
    case Algerian_Dinar = 'Algerian Dinar';
    case Arab_Accounting_Dinar = 'Arab Accounting Dinar';
    case Argentine_Peso = 'Argentine Peso';
    case Armenian_Dram = 'Armenian Dram';
    case Aruban_Florin = 'Aruban Florin';
    case Australian_Dollar = 'Australian Dollar';
    case Azerbaijan_Manat = 'Azerbaijan Manat';
    case Bahamian_Dollar = 'Bahamian Dollar';
    case Bahraini_Dinar = 'Bahraini Dinar';
    case Baht = 'Baht';
    case Balboa = 'Balboa';
    case Barbados_Dollar = 'Barbados Dollar';
    case Belarusian_Ruble = 'Belarusian Ruble';
    case Belize_Dollar = 'Belize Dollar';
    case Bermudian_Dollar = 'Bermudian Dollar';
    case Bolivar_Soberano = 'Bolívar Soberano';
    case Bolivar_Soberano_Old = 'Bolívar Soberano_Old';
    case Boliviano = 'Boliviano';
    case Bond_Markets_Unit_European_Composite_Unit_EURCO = 'Bond Markets Unit European Composite Unit (EURCO)';
    case Bond_Markets_Unit_European_Monetary_Unit_E_M_U_6 = 'Bond Markets Unit European Monetary Unit (E.M.U.-6)';
    case Bond_Markets_Unit_European_Unit_of_Account_17_E_U_A_17 = 'Bond Markets Unit European Unit of Account 17 (E.U.A.-17)';
    case Bond_Markets_Unit_European_Unit_of_Account_9_E_U_A_9 = 'Bond Markets Unit European Unit of Account 9 (E.U.A.-9)';
    case Brazilian_Real = 'Brazilian Real';
    case Brunei_Dollar = 'Brunei Dollar';
    case Bulgarian_Lev = 'Bulgarian Lev';
    case Burundi_Franc = 'Burundi Franc';
    case CFA_Franc_BCEAO = 'CFA Franc BCEAO';
    case CFA_Franc_BEAC = 'CFA Franc BEAC';
    case CFP_Franc = 'CFP Franc';
    case Cabo_Verde_Escudo = 'Cabo Verde Escudo';
    case Canadian_Dollar = 'Canadian Dollar';
    case Caribbean_Guilder = 'Caribbean Guilder';
    case Cayman_Islands_Dollar = 'Cayman Islands Dollar';
    case Chilean_Peso = 'Chilean Peso';
    case Codes_specifically_reserved_for_testing_purposes = 'Codes specifically reserved for testing purposes';
    case Colombian_Peso = 'Colombian Peso';
    case Comorian_Franc = 'Comorian Franc ';
    case Congolese_Franc = 'Congolese Franc';
    case Convertible_Mark = 'Convertible Mark';
    case Cordoba_Oro = 'Cordoba Oro';
    case Costa_Rican_Colon = 'Costa Rican Colon';
    case Cuban_Peso = 'Cuban Peso';
    case Czech_Koruna = 'Czech Koruna';
    case Dalasi = 'Dalasi';
    case Danish_Krone = 'Danish Krone';
    case Denar = 'Denar';
    case Djibouti_Franc = 'Djibouti Franc';
    case Dobra = 'Dobra';
    case Dominican_Peso = 'Dominican Peso';
    case Dong = 'Dong';
    case East_Caribbean_Dollar = 'East Caribbean Dollar';
    case Egyptian_Pound = 'Egyptian Pound';
    case El_Salvador_Colon = 'El Salvador Colon';
    case Ethiopian_Birr = 'Ethiopian Birr';
    case Euro = 'Euro';
    case Falkland_Islands_Pound = 'Falkland Islands Pound';
    case Fiji_Dollar = 'Fiji Dollar';
    case Forint = 'Forint';
    case Ghana_Cedi = 'Ghana Cedi';
    case Gibraltar_Pound = 'Gibraltar Pound';
    case Gold = 'Gold';
    case Gourde = 'Gourde';
    case Guarani = 'Guarani';
    case Guinean_Franc = 'Guinean Franc';
    case Guyana_Dollar = 'Guyana Dollar';
    case Hong_Kong_Dollar = 'Hong Kong Dollar';
    case Hryvnia = 'Hryvnia';
    case Iceland_Krona = 'Iceland Krona';
    case Indian_Rupee = 'Indian Rupee';
    case Iranian_Rial = 'Iranian Rial';
    case Iraqi_Dinar = 'Iraqi Dinar';
    case Jamaican_Dollar = 'Jamaican Dollar';
    case Jordanian_Dinar = 'Jordanian Dinar';
    case Kenyan_Shilling = 'Kenyan Shilling';
    case Kina = 'Kina';
    case Kuwaiti_Dinar = 'Kuwaiti Dinar';
    case Kwanza = 'Kwanza';
    case Kyat = 'Kyat';
    case Lao_Kip = 'Lao Kip';
    case Lari = 'Lari';
    case Lebanese_Pound = 'Lebanese Pound';
    case Lek = 'Lek';
    case Lempira = 'Lempira';
    case Leone = 'Leone';
    case Liberian_Dollar = 'Liberian Dollar';
    case Libyan_Dinar = 'Libyan Dinar';
    case Lilangeni = 'Lilangeni';
    case Loti = 'Loti';
    case Malagasy_Ariary = 'Malagasy Ariary';
    case Malawi_Kwacha = 'Malawi Kwacha';
    case Malaysian_Ringgit = 'Malaysian Ringgit';
    case Mauritius_Rupee = 'Mauritius Rupee';
    case Mexican_Peso = 'Mexican Peso';
    case Mexican_Unidad_de_Inversion_UDI = 'Mexican Unidad de Inversion (UDI)';
    case Moldovan_Leu = 'Moldovan Leu';
    case Moroccan_Dirham = 'Moroccan Dirham';
    case Mozambique_Metical = 'Mozambique Metical';
    case Mvdol = 'Mvdol';
    case Naira = 'Naira';
    case Nakfa = 'Nakfa';
    case Namibia_Dollar = 'Namibia Dollar';
    case Nepalese_Rupee = 'Nepalese Rupee';
    case New_Israeli_Sheqel = 'New Israeli Sheqel';
    case New_Taiwan_Dollar = 'New Taiwan Dollar';
    case New_Zealand_Dollar = 'New Zealand Dollar';
    case Ngultrum = 'Ngultrum';
    case North_Korean_Won = 'North Korean Won';
    case Norwegian_Krone = 'Norwegian Krone';
    case Ouguiya = 'Ouguiya';
    case Pa_anga = 'Pa’anga';
    case Pakistan_Rupee = 'Pakistan Rupee';
    case Palladium = 'Palladium';
    case Pataca = 'Pataca';
    case Peso_Uruguayo = 'Peso Uruguayo';
    case Philippine_Peso = 'Philippine Peso';
    case Platinum = 'Platinum';
    case Pound_Sterling = 'Pound Sterling';
    case Pula = 'Pula';
    case Qatari_Rial = 'Qatari Rial';
    case Quetzal = 'Quetzal';
    case Rand = 'Rand';
    case Rial_Omani = 'Rial Omani';
    case Riel = 'Riel';
    case Romanian_Leu = 'Romanian Leu';
    case Rufiyaa = 'Rufiyaa';
    case Rupiah = 'Rupiah';
    case Russian_Ruble = 'Russian Ruble';
    case Rwanda_Franc = 'Rwanda Franc';
    case SDR_Special_Drawing_Right = 'SDR (Special Drawing Right)';
    case Saint_Helena_Pound = 'Saint Helena Pound';
    case Saudi_Riyal = 'Saudi Riyal';
    case Serbian_Dinar = 'Serbian Dinar';
    case Seychelles_Rupee = 'Seychelles Rupee';
    case Silver = 'Silver';
    case Singapore_Dollar = 'Singapore Dollar';
    case Sol = 'Sol';
    case Solomon_Islands_Dollar = 'Solomon Islands Dollar';
    case Som = 'Som';
    case Somali_Shilling = 'Somali Shilling';
    case Somoni = 'Somoni';
    case South_Sudanese_Pound = 'South Sudanese Pound';
    case Sri_Lanka_Rupee = 'Sri Lanka Rupee';
    case Sucre = 'Sucre';
    case Sudanese_Pound = 'Sudanese Pound';
    case Surinam_Dollar = 'Surinam Dollar';
    case Swedish_Krona = 'Swedish Krona';
    case Swiss_Franc = 'Swiss Franc';
    case Syrian_Pound = 'Syrian Pound';
    case Taka = 'Taka';
    case Tala = 'Tala';
    case Tanzanian_Shilling = 'Tanzanian Shilling';
    case Tenge = 'Tenge';
    case The_codes_assigned_for_transactions_where_no_currency_is_involved = 'The codes assigned for transactions where no currency is involved';
    case Trinidad_and_Tobago_Dollar = 'Trinidad and Tobago Dollar';
    case Tugrik = 'Tugrik';
    case Tunisian_Dinar = 'Tunisian Dinar';
    case Turkish_Lira = 'Turkish Lira';
    case Turkmenistan_New_Manat = 'Turkmenistan New Manat';
    case UAE_Dirham = 'UAE Dirham';
    case US_Dollar = 'US Dollar';
    case US_Dollar_Next_day = 'US Dollar (Next day)';
    case Uganda_Shilling = 'Uganda Shilling';
    case Unidad_Previsional = 'Unidad Previsional';
    case Unidad_de_Fomento = 'Unidad de Fomento';
    case Unidad_de_Valor_Real = 'Unidad de Valor Real';
    case Uruguay_Peso_en_Unidades_Indexadas_UI = 'Uruguay Peso en Unidades Indexadas (UI)';
    case Uzbekistan_Sum = 'Uzbekistan Sum';
    case Vatu = 'Vatu';
    case WIR_Euro = 'WIR Euro';
    case WIR_Franc = 'WIR Franc';
    case Won = 'Won';
    case Yemeni_Rial = 'Yemeni Rial';
    case Yen = 'Yen';
    case Yuan_Renminbi = 'Yuan Renminbi';
    case Zambian_Kwacha = 'Zambian Kwacha';
    case Zimbabwe_Gold = 'Zimbabwe Gold';
    case Zloty = 'Zloty';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Kuna = 'Kuna';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Leone_Old = 'Leone_Old';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Netherlands_Antillean_Guilder = 'Netherlands Antillean Guilder';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Peso_Convertible = 'Peso Convertible';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Zimbabwe_Dollar = 'Zimbabwe Dollar';

    public function toCurrencyAlpha3(): CurrencyAlpha3 {
        return BackedEnum::fromName(CurrencyAlpha3::class, $this->name);
    }

    public function toCurrencyNumeric(): CurrencyNumeric {
        if ($this === self::Caribbean_Guilder) {
            return CurrencyNumeric::Netherlands_Antillean_Guilder; // Cannot be renamed to be BC
        }

        return BackedEnum::fromName(CurrencyNumeric::class, $this->name);
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

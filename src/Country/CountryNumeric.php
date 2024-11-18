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
use TypeError;
use ValueError;

/**
 * @standard ISO3166_1
 * @source https://www.iso.org/obp/ui/#search/code/
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\CountryMapping
 */
enum CountryNumeric: string {
    case Afghanistan = '004';
    case Aland_Islands = '248';
    case Albania = '008';
    case Algeria = '012';
    case American_Samoa = '016';
    case Andorra = '020';
    case Angola = '024';
    case Anguilla = '660';
    case Antarctica = '010';
    case Antigua_and_Barbuda = '028';
    case Argentina = '032';
    case Armenia = '051';
    case Aruba = '533';
    case Australia = '036';
    case Austria = '040';
    case Azerbaijan = '031';
    case Bahamas = '044';
    case Bahrain = '048';
    case Bangladesh = '050';
    case Barbados = '052';
    case Belarus = '112';
    case Belgium = '056';
    case Belize = '084';
    case Benin = '204';
    case Bermuda = '060';
    case Bhutan = '064';
    case Bolivia = '068';
    case Bonaire_Sint_Eustatius_and_Saba = '535';
    case Bosnia_and_Herzegovina = '070';
    case Botswana = '072';
    case Bouvet_Island = '074';
    case Brazil = '076';
    case British_Indian_Ocean_Territory = '086';
    case Brunei_Darussalam = '096';
    case Bulgaria = '100';
    case Burkina_Faso = '854';
    case Burundi = '108';
    case Cabo_Verde = '132';
    case Cambodia = '116';
    case Cameroon = '120';
    case Canada = '124';
    case Cayman_Islands = '136';
    case Central_African_Republic = '140';
    case Chad = '148';
    case Chile = '152';
    case China = '156';
    case Christmas_Island = '162';
    case Cocos_Islands = '166';
    case Colombia = '170';
    case Comoros = '174';
    case Congo = '178';
    case Congo_Democratic_Republic = '180';
    case Cook_Islands = '184';
    case Costa_Rica = '188';
    case Cote_d_Ivoire = '384';
    case Croatia = '191';
    case Cuba = '192';
    case Curacao = '531';
    case Cyprus = '196';
    case Czechia = '203';
    case Denmark = '208';
    case Djibouti = '262';
    case Dominica = '212';
    case Dominican_Republic = '214';
    case Ecuador = '218';
    case Egypt = '818';
    case El_Salvador = '222';
    case Equatorial_Guinea = '226';
    case Eritrea = '232';
    case Estonia = '233';
    case Eswatini = '748';
    case Ethiopia = '231';
    case Falkland_Islands = '238';
    case Faroe_Islands = '234';
    case Fiji = '242';
    case Finland = '246';
    case France = '250';
    case French_Guiana = '254';
    case French_Polynesia = '258';
    case French_Southern_Territories = '260';
    case Gabon = '266';
    case Gambia = '270';
    case Georgia = '268';
    case Germany = '276';
    case Ghana = '288';
    case Gibraltar = '292';
    case Greece = '300';
    case Greenland = '304';
    case Grenada = '308';
    case Guadeloupe = '312';
    case Guam = '316';
    case Guatemala = '320';
    case Guernsey = '831';
    case Guinea = '324';
    case Guinea_Bissau = '624';
    case Guyana = '328';
    case Haiti = '332';
    case Heard_Island_and_McDonald_Islands = '334';
    case Holy_See = '336';
    case Honduras = '340';
    case Hong_Kong = '344';
    case Hungary = '348';
    case Iceland = '352';
    case India = '356';
    case Indonesia = '360';
    case Iran = '364';
    case Iraq = '368';
    case Ireland = '372';
    case Isle_of_Man = '833';
    case Israel = '376';
    case Italy = '380';
    case Jamaica = '388';
    case Japan = '392';
    case Jersey = '832';
    case Jordan = '400';
    case Kazakhstan = '398';
    case Kenya = '404';
    case Kiribati = '296';
    case Korea_Democratic_Peoples_Republic = '408';
    case Korea_Republic = '410';
    case Kuwait = '414';
    case Kyrgyzstan = '417';
    case Lao_Peoples_Democratic_Republic = '418';
    case Latvia = '428';
    case Lebanon = '422';
    case Lesotho = '426';
    case Liberia = '430';
    case Libya = '434';
    case Liechtenstein = '438';
    case Lithuania = '440';
    case Luxembourg = '442';
    case Macao = '446';
    case Madagascar = '450';
    case Malawi = '454';
    case Malaysia = '458';
    case Maldives = '462';
    case Mali = '466';
    case Malta = '470';
    case Marshall_Islands = '584';
    case Martinique = '474';
    case Mauritania = '478';
    case Mauritius = '480';
    case Mayotte = '175';
    case Mexico = '484';
    case Micronesia = '583';
    case Moldova = '498';
    case Monaco = '492';
    case Mongolia = '496';
    case Montenegro = '499';
    case Montserrat = '500';
    case Morocco = '504';
    case Mozambique = '508';
    case Myanmar = '104';
    case Namibia = '516';
    case Nauru = '520';
    case Nepal = '524';
    case Netherlands = '528';
    case New_Caledonia = '540';
    case New_Zealand = '554';
    case Nicaragua = '558';
    case Niger = '562';
    case Nigeria = '566';
    case Niue = '570';
    case Norfolk_Island = '574';
    case North_Macedonia = '807';
    case Northern_Mariana_Islands = '580';
    case Norway = '578';
    case Oman = '512';
    case Pakistan = '586';
    case Palau = '585';
    case Palestine = '275';
    case Panama = '591';
    case Papua_New_Guinea = '598';
    case Paraguay = '600';
    case Peru = '604';
    case Philippines = '608';
    case Pitcairn = '612';
    case Poland = '616';
    case Portugal = '620';
    case Puerto_Rico = '630';
    case Qatar = '634';
    case Reunion = '638';
    case Romania = '642';
    case Russian_Federation = '643';
    case Rwanda = '646';
    case Saint_Barthelemy = '652';
    case Saint_Helena_Ascension_Tristan_da_Cunha = '654';
    case Saint_Kitts_and_Nevis = '659';
    case Saint_Lucia = '662';
    case Saint_Martin_French_part = '663';
    case Saint_Pierre_and_Miquelon = '666';
    case Saint_Vincent_and_the_Grenadines = '670';
    case Samoa = '882';
    case San_Marino = '674';
    case Sao_Tome_and_Principe = '678';
    case Saudi_Arabia = '682';
    case Senegal = '686';
    case Serbia = '688';
    case Seychelles = '690';
    case Sierra_Leone = '694';
    case Singapore = '702';
    case Sint_Maarten_Dutch_part = '534';
    case Slovakia = '703';
    case Slovenia = '705';
    case Solomon_Islands = '090';
    case Somalia = '706';
    case South_Africa = '710';
    case South_Georgia_South_Sandwich_Islands = '239';
    case South_Sudan = '728';
    case Spain = '724';
    case Sri_Lanka = '144';
    case Sudan = '729';
    case Suriname = '740';
    case Svalbard_Jan_Mayen = '744';
    case Sweden = '752';
    case Switzerland = '756';
    case Syrian_Arab_Republic = '760';
    case Taiwan_Province_of_China = '158';
    case Tajikistan = '762';
    case Tanzania = '834';
    case Thailand = '764';
    case Timor_Leste = '626';
    case Togo = '768';
    case Tokelau = '772';
    case Tonga = '776';
    case Trinidad_and_Tobago = '780';
    case Tunisia = '788';
    case Turkey = '792';
    case Turkmenistan = '795';
    case Turks_and_Caicos_Islands = '796';
    case Tuvalu = '798';
    case Uganda = '800';
    case Ukraine = '804';
    case United_Arab_Emirates = '784';
    case United_Kingdom = '826';
    case United_States_Outlying_Islands = '581';
    case United_States_of_America = '840';
    case Uruguay = '858';
    case Uzbekistan = '860';
    case Vanuatu = '548';
    case Venezuela = '862';
    case Viet_Nam = '704';
    case Virgin_Islands_British = '092';
    case Virgin_Islands_U_S = '850';
    case Wallis_and_Futuna = '876';
    case Western_Sahara = '732';
    case Yemen = '887';
    case Zambia = '894';
    case Zimbabwe = '716';

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

    public function toCountryAlpha2(): CountryAlpha2 {
        return BackedEnum::fromName(CountryAlpha2::class, $this->name);
    }

    public function toCountryAlpha3(): CountryAlpha3 {
        return BackedEnum::fromName(CountryAlpha3::class, $this->name);
    }

    /** @deprecated Will be removed in v4. Please use ::getNameInLanguage(LanguageAlpha2::English) instead */
    public function toCountryName(): CountryName {
        return BackedEnum::fromName(CountryName::class, $this->name);
    }

    public function valueAsInt(): int {
        return (int) $this->value;
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
        return array_map(fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->toCountryNumeric(), $this->toCountryAlpha2()->getSubCountries());
    }

    public function getParentCountry(): ?self {
        return $this->toCountryAlpha2()->getParentCountry()?->toCountryNumeric();
    }

    /**
     * If users need code elements to represent country names not included in ISO 3166-1, (...) the series of numbers 900 to 999 are available
     *
     * @see https://www.iso.org/glossary-for-iso-3166.html
     */
    public static function isInUserAssignedSpace(int|string $code): bool {
        if (is_string($code)) { // As this spec is backed by strings due to leading zeros, this method also accepts strings
            $code = (int) $code;
        }

        return $code >= 900 && $code <= 999;
    }
}

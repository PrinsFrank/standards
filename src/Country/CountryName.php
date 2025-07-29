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

/**
 * @deprecated Will be removed in v4. Please use ::getNameInLanguage(LanguageAlpha2::English) instead
 *
 * @standard ISO3166_1
 * @source https://www.iso.org/obp/ui/#search/code/
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\CountryMapping
 */
enum CountryName: string {
    case Afghanistan = 'Afghanistan';
    case Aland_Islands = 'Åland Islands';
    case Albania = 'Albania';
    case Algeria = 'Algeria';
    case American_Samoa = 'American Samoa';
    case Andorra = 'Andorra';
    case Angola = 'Angola';
    case Anguilla = 'Anguilla';
    case Antarctica = 'Antarctica';
    case Antigua_and_Barbuda = 'Antigua and Barbuda';
    case Argentina = 'Argentina';
    case Armenia = 'Armenia';
    case Aruba = 'Aruba';
    case Australia = 'Australia';
    case Austria = 'Austria';
    case Azerbaijan = 'Azerbaijan';
    case Bahamas = 'Bahamas (The)';
    case Bahrain = 'Bahrain';
    case Bangladesh = 'Bangladesh';
    case Barbados = 'Barbados';
    case Belarus = 'Belarus';
    case Belgium = 'Belgium';
    case Belize = 'Belize';
    case Benin = 'Benin';
    case Bermuda = 'Bermuda';
    case Bhutan = 'Bhutan';
    case Bolivia = 'Bolivia (Plurinational State of)';
    case Bonaire_Sint_Eustatius_and_Saba = 'Bonaire, Sint Eustatius and Saba';
    case Bosnia_and_Herzegovina = 'Bosnia and Herzegovina';
    case Botswana = 'Botswana';
    case Bouvet_Island = 'Bouvet Island';
    case Brazil = 'Brazil';
    case British_Indian_Ocean_Territory = 'British Indian Ocean Territory (the)';
    case Brunei_Darussalam = 'Brunei Darussalam';
    case Bulgaria = 'Bulgaria';
    case Burkina_Faso = 'Burkina Faso';
    case Burundi = 'Burundi';
    case Cabo_Verde = 'Cabo Verde';
    case Cambodia = 'Cambodia';
    case Cameroon = 'Cameroon';
    case Canada = 'Canada';
    case Cayman_Islands = 'Cayman Islands (the)';
    case Central_African_Republic = 'Central African Republic (the)';
    case Chad = 'Chad';
    case Chile = 'Chile';
    case China = 'China';
    case Christmas_Island = 'Christmas Island';
    case Cocos_Islands = 'Cocos (Keeling) Islands (the)';
    case Colombia = 'Colombia';
    case Comoros = 'Comoros (the)';
    case Congo = 'Congo (the)';
    case Congo_Democratic_Republic = 'Congo (the Democratic Republic of the)';
    case Cook_Islands = 'Cook Islands (the)';
    case Costa_Rica = 'Costa Rica';
    case Cote_d_Ivoire = 'Côte d\'Ivoire';
    case Croatia = 'Croatia';
    case Cuba = 'Cuba';
    case Curacao = 'Curaçao';
    case Cyprus = 'Cyprus';
    case Czechia = 'Czechia';
    case Denmark = 'Denmark';
    case Djibouti = 'Djibouti';
    case Dominica = 'Dominica';
    case Dominican_Republic = 'Dominican Republic (the)';
    case Ecuador = 'Ecuador';
    case Egypt = 'Egypt';
    case El_Salvador = 'El Salvador';
    case Equatorial_Guinea = 'Equatorial Guinea';
    case Eritrea = 'Eritrea';
    case Estonia = 'Estonia';
    case Eswatini = 'Eswatini';
    case Ethiopia = 'Ethiopia';
    case Falkland_Islands = 'Falkland Islands (the) [Malvinas]';
    case Faroe_Islands = 'Faroe Islands (the)';
    case Fiji = 'Fiji';
    case Finland = 'Finland';
    case France = 'France';
    case French_Guiana = 'French Guiana';
    case French_Polynesia = 'French Polynesia';
    case French_Southern_Territories = 'French Southern Territories (the)';
    case Gabon = 'Gabon';
    case Gambia = 'Gambia (the)';
    case Georgia = 'Georgia';
    case Germany = 'Germany';
    case Ghana = 'Ghana';
    case Gibraltar = 'Gibraltar';
    case Greece = 'Greece';
    case Greenland = 'Greenland';
    case Grenada = 'Grenada';
    case Guadeloupe = 'Guadeloupe';
    case Guam = 'Guam';
    case Guatemala = 'Guatemala';
    case Guernsey = 'Guernsey';
    case Guinea = 'Guinea';
    case Guinea_Bissau = 'Guinea-Bissau';
    case Guyana = 'Guyana';
    case Haiti = 'Haiti';
    case Heard_Island_and_McDonald_Islands = 'Heard Island and McDonald Islands';
    case Holy_See = 'Holy See (the)';
    case Honduras = 'Honduras';
    case Hong_Kong = 'Hong Kong';
    case Hungary = 'Hungary';
    case Iceland = 'Iceland';
    case India = 'India';
    case Indonesia = 'Indonesia';
    case Iran = 'Iran (Islamic Republic of)';
    case Iraq = 'Iraq';
    case Ireland = 'Ireland';
    case Isle_of_Man = 'Isle of Man';
    case Israel = 'Israel';
    case Italy = 'Italy';
    case Jamaica = 'Jamaica';
    case Japan = 'Japan';
    case Jersey = 'Jersey';
    case Jordan = 'Jordan';
    case Kazakhstan = 'Kazakhstan';
    case Kenya = 'Kenya';
    case Kiribati = 'Kiribati';
    case Korea_Democratic_Peoples_Republic = 'Korea (the Democratic People\'s Republic of)';
    case Korea_Republic = 'Korea (the Republic of)';
    case Kuwait = 'Kuwait';
    case Kyrgyzstan = 'Kyrgyzstan';
    case Lao_Peoples_Democratic_Republic = 'Lao People\'s Democratic Republic (the)';
    case Latvia = 'Latvia';
    case Lebanon = 'Lebanon';
    case Lesotho = 'Lesotho';
    case Liberia = 'Liberia';
    case Libya = 'Libya';
    case Liechtenstein = 'Liechtenstein';
    case Lithuania = 'Lithuania';
    case Luxembourg = 'Luxembourg';
    case Macao = 'Macao';
    case Madagascar = 'Madagascar';
    case Malawi = 'Malawi';
    case Malaysia = 'Malaysia';
    case Maldives = 'Maldives';
    case Mali = 'Mali';
    case Malta = 'Malta';
    case Marshall_Islands = 'Marshall Islands (the)';
    case Martinique = 'Martinique';
    case Mauritania = 'Mauritania';
    case Mauritius = 'Mauritius';
    case Mayotte = 'Mayotte';
    case Mexico = 'Mexico';
    case Micronesia = 'Micronesia (Federated States of)';
    case Moldova = 'Moldova (the Republic of)';
    case Monaco = 'Monaco';
    case Mongolia = 'Mongolia';
    case Montenegro = 'Montenegro';
    case Montserrat = 'Montserrat';
    case Morocco = 'Morocco';
    case Mozambique = 'Mozambique';
    case Myanmar = 'Myanmar';
    case Namibia = 'Namibia';
    case Nauru = 'Nauru';
    case Nepal = 'Nepal';
    case Netherlands = 'Netherlands (Kingdom of the)';
    case New_Caledonia = 'New Caledonia';
    case New_Zealand = 'New Zealand';
    case Nicaragua = 'Nicaragua';
    case Niger = 'Niger (the)';
    case Nigeria = 'Nigeria';
    case Niue = 'Niue';
    case Norfolk_Island = 'Norfolk Island';
    case North_Macedonia = 'North Macedonia';
    case Northern_Mariana_Islands = 'Northern Mariana Islands (the)';
    case Norway = 'Norway';
    case Oman = 'Oman';
    case Pakistan = 'Pakistan';
    case Palau = 'Palau';
    case Palestine = 'Palestine, State of';
    case Panama = 'Panama';
    case Papua_New_Guinea = 'Papua New Guinea';
    case Paraguay = 'Paraguay';
    case Peru = 'Peru';
    case Philippines = 'Philippines (the)';
    case Pitcairn = 'Pitcairn';
    case Poland = 'Poland';
    case Portugal = 'Portugal';
    case Puerto_Rico = 'Puerto Rico';
    case Qatar = 'Qatar';
    case Reunion = 'Réunion';
    case Romania = 'Romania';
    case Russian_Federation = 'Russian Federation (the)';
    case Rwanda = 'Rwanda';
    case Saint_Barthelemy = 'Saint Barthélemy';
    case Saint_Helena_Ascension_Tristan_da_Cunha = 'Saint Helena, Ascension and Tristan da Cunha';
    case Saint_Kitts_and_Nevis = 'Saint Kitts and Nevis';
    case Saint_Lucia = 'Saint Lucia';
    case Saint_Martin_French_part = 'Saint Martin (French part)';
    case Saint_Pierre_and_Miquelon = 'Saint Pierre and Miquelon';
    case Saint_Vincent_and_the_Grenadines = 'Saint Vincent and the Grenadines';
    case Samoa = 'Samoa';
    case San_Marino = 'San Marino';
    case Sao_Tome_and_Principe = 'Sao Tome and Principe';
    case Saudi_Arabia = 'Saudi Arabia';
    case Senegal = 'Senegal';
    case Serbia = 'Serbia';
    case Seychelles = 'Seychelles';
    case Sierra_Leone = 'Sierra Leone';
    case Singapore = 'Singapore';
    case Sint_Maarten_Dutch_part = 'Sint Maarten (Dutch part)';
    case Slovakia = 'Slovakia';
    case Slovenia = 'Slovenia';
    case Solomon_Islands = 'Solomon Islands';
    case Somalia = 'Somalia';
    case South_Africa = 'South Africa';
    case South_Georgia_South_Sandwich_Islands = 'South Georgia and the South Sandwich Islands';
    case South_Sudan = 'South Sudan';
    case Spain = 'Spain';
    case Sri_Lanka = 'Sri Lanka';
    case Sudan = 'Sudan (the)';
    case Suriname = 'Suriname';
    case Svalbard_Jan_Mayen = 'Svalbard and Jan Mayen';
    case Sweden = 'Sweden';
    case Switzerland = 'Switzerland';
    case Syrian_Arab_Republic = 'Syrian Arab Republic (the)';
    case Taiwan_Province_of_China = 'Taiwan (Province of China)';
    case Tajikistan = 'Tajikistan';
    case Tanzania = 'Tanzania, the United Republic of';
    case Thailand = 'Thailand';
    case Timor_Leste = 'Timor-Leste';
    case Togo = 'Togo';
    case Tokelau = 'Tokelau';
    case Tonga = 'Tonga';
    case Trinidad_and_Tobago = 'Trinidad and Tobago';
    case Tunisia = 'Tunisia';
    case Turkey = 'Türkiye';
    case Turkmenistan = 'Turkmenistan';
    case Turks_and_Caicos_Islands = 'Turks and Caicos Islands (the)';
    case Tuvalu = 'Tuvalu';
    case Uganda = 'Uganda';
    case Ukraine = 'Ukraine';
    case United_Arab_Emirates = 'United Arab Emirates (the)';
    case United_Kingdom = 'United Kingdom of Great Britain and Northern Ireland (the)';
    case United_States_Outlying_Islands = 'United States Minor Outlying Islands (the)';
    case United_States_of_America = 'United States of America (the)';
    case Uruguay = 'Uruguay';
    case Uzbekistan = 'Uzbekistan';
    case Vanuatu = 'Vanuatu';
    case Venezuela = 'Venezuela (Bolivarian Republic of)';
    case Viet_Nam = 'Viet Nam';
    case Virgin_Islands_British = 'Virgin Islands (British)';
    case Virgin_Islands_U_S = 'Virgin Islands (U.S.)';
    case Wallis_and_Futuna = 'Wallis and Futuna';
    case Western_Sahara = 'Western Sahara*';
    case Yemen = 'Yemen';
    case Zambia = 'Zambia';
    case Zimbabwe = 'Zimbabwe';

    public function toCountryAlpha2(): CountryAlpha2 {
        return BackedEnum::fromName(CountryAlpha2::class, $this->name);
    }

    public function toCountryAlpha3(): CountryAlpha3 {
        return BackedEnum::fromName(CountryAlpha3::class, $this->name);
    }

    public function toCountryNumeric(): CountryNumeric {
        return BackedEnum::fromName(CountryNumeric::class, $this->name);
    }

    public function getNameInLanguage(LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|LanguageAlpha3Extensive $language): ?string {
        return $this->toCountryAlpha2()->getNameInLanguage($language);
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

    /** @return list<CountrySubdivision> */
    public function getSubdivisions(): array {
        return $this->toCountryAlpha2()->getSubdivisions();
    }

    /** @return list<self> */
    public function getSubCountries(): array {
        return array_map(fn (CountryAlpha2 $countryAlpha2) => $countryAlpha2->toCountryName(), $this->toCountryAlpha2()->getSubCountries());
    }

    public function getParentCountry(): ?self {
        return $this->toCountryAlpha2()->getParentCountry()?->toCountryName();
    }
}

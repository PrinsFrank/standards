<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use NumberFormatter;
use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\LanguageTag\LanguageTag;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use PrinsFrank\Standards\LanguageTag\PrivateUseRegionSubtag;
use PrinsFrank\Standards\Region\GeographicRegion;
use PrinsFrank\Standards\Scripts\ScriptCode;

/**
 * @standard ISO639_1
 * @source https://www.iso.org/iso-639-language-codes.html
 * @source http://www.loc.gov/standards/iso639-2/php/code_list.php
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\LanguageMapping
 */
enum LanguageAlpha3Terminology: string {
    case Abkhazian = 'abk';
    case Achinese = 'ace';
    case Acoli = 'ach';
    case Adangme = 'ada';
    case Adyghe_Adygei = 'ady';
    case Afar = 'aar';
    case Afrihili = 'afh';
    case Afrikaans = 'afr';
    case Afro_Asiatic_languages = 'afa';
    case Ainu = 'ain';
    case Akan = 'aka';
    case Akkadian = 'akk';
    case Albanian = 'sqi';
    case Aleut = 'ale';
    case Algonquian_languages = 'alg';
    case Altaic_languages = 'tut';
    case Amharic = 'amh';
    case Angika = 'anp';
    case Apache_languages = 'apa';
    case Arabic = 'ara';
    case Aragonese = 'arg';
    case Arapaho = 'arp';
    case Arawak = 'arw';
    case Armenian = 'hye';
    case Aromanian_Arumanian_Macedo_Romanian = 'rup';
    case Artificial_languages = 'art';
    case Assamese = 'asm';
    case Asturian_Bable_Leonese_Asturleonese = 'ast';
    case Athapascan_languages = 'ath';
    case Australian_languages = 'aus';
    case Austronesian_languages = 'map';
    case Avaric = 'ava';
    case Avestan = 'ave';
    case Awadhi = 'awa';
    case Aymara = 'aym';
    case Azerbaijani = 'aze';
    case Balinese = 'ban';
    case Baltic_languages = 'bat';
    case Baluchi = 'bal';
    case Bambara = 'bam';
    case Bamileke_languages = 'bai';
    case Banda_languages = 'bad';
    case Bantu_languages = 'bnt';
    case Basa = 'bas';
    case Bashkir = 'bak';
    case Basque = 'eus';
    case Batak_languages = 'btk';
    case Beja_Bedawiyet = 'bej';
    case Belarusian = 'bel';
    case Bemba = 'bem';
    case Bengali = 'ben';
    case Berber_languages = 'ber';
    case Bhojpuri = 'bho';
    case Bihari_languages = 'bih';
    case Bikol = 'bik';
    case Bini_Edo = 'bin';
    case Bislama = 'bis';
    case Blin_Bilin = 'byn';
    case Blissymbols_Blissymbolics_Bliss = 'zbl';
    case Bokmal_Norwegian_Norwegian_Bokmal = 'nob';
    case Bosnian = 'bos';
    case Braj = 'bra';
    case Breton = 'bre';
    case Buginese = 'bug';
    case Bulgarian = 'bul';
    case Buriat = 'bua';
    case Burmese = 'mya';
    case Caddo = 'cad';
    case Catalan_Valencian = 'cat';
    case Caucasian_languages = 'cau';
    case Cebuano = 'ceb';
    case Celtic_languages = 'cel';
    case Central_American_Indian_languages = 'cai';
    case Central_Khmer = 'khm';
    case Chagatai = 'chg';
    case Chamic_languages = 'cmc';
    case Chamorro = 'cha';
    case Chechen = 'che';
    case Cherokee = 'chr';
    case Cheyenne = 'chy';
    case Chibcha = 'chb';
    case Chichewa_Chewa_Nyanja = 'nya';
    case Chinese = 'zho';
    case Chinook_jargon = 'chn';
    case Chipewyan_Dene_Suline = 'chp';
    case Choctaw = 'cho';
    case Church_Slavic_Old_Slavonic_Church_Slavonic_Old_Bulgarian_Old_Church_Slavonic = 'chu';
    case Chuukese = 'chk';
    case Chuvash = 'chv';
    case Classical_Newari_Old_Newari_Classical_Nepal_Bhasa = 'nwc';
    case Classical_Syriac = 'syc';
    case Coptic = 'cop';
    case Cornish = 'cor';
    case Corsican = 'cos';
    case Cree = 'cre';
    case Creek = 'mus';
    case Creoles_and_pidgins = 'crp';
    case Creoles_and_pidgins_English_based = 'cpe';
    case Creoles_and_pidgins_French_based = 'cpf';
    case Creoles_and_pidgins_Portuguese_based = 'cpp';
    case Crimean_Tatar_Crimean_Turkish = 'crh';
    case Croatian = 'hrv';
    case Cushitic_languages = 'cus';
    case Czech = 'ces';
    case Dakota = 'dak';
    case Danish = 'dan';
    case Dargwa = 'dar';
    case Delaware = 'del';
    case Dinka = 'din';
    case Divehi_Dhivehi_Maldivian = 'div';
    case Dogri = 'doi';
    case Dogrib = 'dgr';
    case Dravidian_languages = 'dra';
    case Duala = 'dua';
    case Dutch_Flemish = 'nld';
    case Dutch_Middle_ca_1050_1350 = 'dum';
    case Dyula = 'dyu';
    case Dzongkha = 'dzo';
    case Eastern_Frisian = 'frs';
    case Efik = 'efi';
    case Egyptian_Ancient = 'egy';
    case Ekajuk = 'eka';
    case Elamite = 'elx';
    case English = 'eng';
    case English_Middle_1100_1500 = 'enm';
    case English_Old_ca_450_1100 = 'ang';
    case Erzya = 'myv';
    case Esperanto = 'epo';
    case Estonian = 'est';
    case Ewe = 'ewe';
    case Ewondo = 'ewo';
    case Fang = 'fan';
    case Fanti = 'fat';
    case Faroese = 'fao';
    case Fijian = 'fij';
    case Filipino_Pilipino = 'fil';
    case Finnish = 'fin';
    case Finno_Ugrian_languages = 'fiu';
    case Fon = 'fon';
    case French = 'fra';
    case French_Middle_ca_1400_1600 = 'frm';
    case French_Old_842_ca_1400 = 'fro';
    case Friulian = 'fur';
    case Fulah = 'ful';
    case Ga = 'gaa';
    case Gaelic_Scottish_Gaelic = 'gla';
    case Galibi_Carib = 'car';
    case Galician = 'glg';
    case Ganda = 'lug';
    case Gayo = 'gay';
    case Gbaya = 'gba';
    case Geez = 'gez';
    case Georgian = 'kat';
    case German = 'deu';
    case German_Middle_High_ca_1050_1500 = 'gmh';
    case German_Old_High_ca_750_1050 = 'goh';
    case Germanic_languages = 'gem';
    case Gilbertese = 'gil';
    case Gondi = 'gon';
    case Gorontalo = 'gor';
    case Gothic = 'got';
    case Grebo = 'grb';
    case Greek_Ancient_to_1453 = 'grc';
    case Greek_Modern_1453 = 'ell';
    case Guarani = 'grn';
    case Gujarati = 'guj';
    case Gwich_in = 'gwi';
    case Haida = 'hai';
    case Haitian_Haitian_Creole = 'hat';
    case Hausa = 'hau';
    case Hawaiian = 'haw';
    case Hebrew = 'heb';
    case Herero = 'her';
    case Hiligaynon = 'hil';
    case Himachali_languages_Western_Pahari_languages = 'him';
    case Hindi = 'hin';
    case Hiri_Motu = 'hmo';
    case Hittite = 'hit';
    case Hmong_Mong = 'hmn';
    case Hungarian = 'hun';
    case Hupa = 'hup';
    case Iban = 'iba';
    case Icelandic = 'isl';
    case Ido = 'ido';
    case Igbo = 'ibo';
    case Ijo_languages = 'ijo';
    case Iloko = 'ilo';
    case Inari_Sami = 'smn';
    case Indic_languages = 'inc';
    case Indo_European_languages = 'ine';
    case Indonesian = 'ind';
    case Ingush = 'inh';
    case Interlingua_International_Auxiliary_Language_Association = 'ina';
    case Interlingue_Occidental = 'ile';
    case Inuktitut = 'iku';
    case Inupiaq = 'ipk';
    case Iranian_languages = 'ira';
    case Irish = 'gle';
    case Irish_Middle_900_1200 = 'mga';
    case Irish_Old_to_900 = 'sga';
    case Iroquoian_languages = 'iro';
    case Italian = 'ita';
    case Japanese = 'jpn';
    case Javanese = 'jav';
    case Judeo_Arabic = 'jrb';
    case Judeo_Persian = 'jpr';
    case Kabardian = 'kbd';
    case Kabyle = 'kab';
    case Kachin_Jingpho = 'kac';
    case Kalaallisut_Greenlandic = 'kal';
    case Kalmyk_Oirat = 'xal';
    case Kamba = 'kam';
    case Kannada = 'kan';
    case Kanuri = 'kau';
    case Kara_Kalpak = 'kaa';
    case Karachay_Balkar = 'krc';
    case Karelian = 'krl';
    case Karen_languages = 'kar';
    case Kashmiri = 'kas';
    case Kashubian = 'csb';
    case Kawi = 'kaw';
    case Kazakh = 'kaz';
    case Khasi = 'kha';
    case Khoisan_languages = 'khi';
    case Khotanese_Sakan = 'kho';
    case Kikuyu_Gikuyu = 'kik';
    case Kimbundu = 'kmb';
    case Kinyarwanda = 'kin';
    case Kirghiz_Kyrgyz = 'kir';
    case Klingon_tlhIngan_Hol = 'tlh';
    case Komi = 'kom';
    case Kongo = 'kon';
    case Konkani = 'kok';
    case Korean = 'kor';
    case Kosraean = 'kos';
    case Kpelle = 'kpe';
    case Kru_languages = 'kro';
    case Kuanyama_Kwanyama = 'kua';
    case Kumyk = 'kum';
    case Kurdish = 'kur';
    case Kurukh = 'kru';
    case Kutenai = 'kut';
    case Ladino = 'lad';
    case Lahnda = 'lah';
    case Lamba = 'lam';
    case Land_Dayak_languages = 'day';
    case Lao = 'lao';
    case Latin = 'lat';
    case Latvian = 'lav';
    case Lezghian = 'lez';
    case Limburgan_Limburger_Limburgish = 'lim';
    case Lingala = 'lin';
    case Lithuanian = 'lit';
    case Lojban = 'jbo';
    case Low_German_Low_Saxon_German_Low_Saxon_Low = 'nds';
    case Lower_Sorbian = 'dsb';
    case Lozi = 'loz';
    case Luba_Katanga = 'lub';
    case Luba_Lulua = 'lua';
    case Luiseno = 'lui';
    case Lule_Sami = 'smj';
    case Lunda = 'lun';
    case Luo_Kenya_and_Tanzania = 'luo';
    case Lushai = 'lus';
    case Luxembourgish_Letzeburgesch = 'ltz';
    case Macedonian = 'mkd';
    case Madurese = 'mad';
    case Magahi = 'mag';
    case Maithili = 'mai';
    case Makasar = 'mak';
    case Malagasy = 'mlg';
    case Malay = 'msa';
    case Malayalam = 'mal';
    case Maltese = 'mlt';
    case Manchu = 'mnc';
    case Mandar = 'mdr';
    case Mandingo = 'man';
    case Manipuri = 'mni';
    case Manobo_languages = 'mno';
    case Manx = 'glv';
    case Maori = 'mri';
    case Mapudungun_Mapuche = 'arn';
    case Marathi = 'mar';
    case Mari = 'chm';
    case Marshallese = 'mah';
    case Marwari = 'mwr';
    case Masai = 'mas';
    case Mayan_languages = 'myn';
    case Mende = 'men';
    case Mi_kmaq_Micmac = 'mic';
    case Minangkabau = 'min';
    case Mirandese = 'mwl';
    case Mohawk = 'moh';
    case Moksha = 'mdf';
    case Mon_Khmer_languages = 'mkh';
    case Mongo = 'lol';
    case Mongolian = 'mon';
    case Montenegrin = 'cnr';
    case Mossi = 'mos';
    case Multiple_languages = 'mul';
    case Munda_languages = 'mun';
    case N_Ko = 'nqo';
    case Nahuatl_languages = 'nah';
    case Nauru = 'nau';
    case Navajo_Navaho = 'nav';
    case Ndebele_North_North_Ndebele = 'nde';
    case Ndebele_South_South_Ndebele = 'nbl';
    case Ndonga = 'ndo';
    case Neapolitan = 'nap';
    case Nepal_Bhasa_Newari = 'new';
    case Nepali = 'nep';
    case Nias = 'nia';
    case Niger_Kordofanian_languages = 'nic';
    case Nilo_Saharan_languages = 'ssa';
    case Niuean = 'niu';
    case No_linguistic_content_Not_applicable = 'zxx';
    case Nogai = 'nog';
    case Norse_Old = 'non';
    case North_American_Indian_languages = 'nai';
    case Northern_Frisian = 'frr';
    case Northern_Sami = 'sme';
    case Norwegian = 'nor';
    case Norwegian_Nynorsk_Nynorsk_Norwegian = 'nno';
    case Nubian_languages = 'nub';
    case Nyamwezi = 'nym';
    case Nyankole = 'nyn';
    case Nyoro = 'nyo';
    case Nzima = 'nzi';
    case Occitan_post_1500 = 'oci';
    case Official_Aramaic_700_300_BCE_Imperial_Aramaic_700_300_BCE = 'arc';
    case Ojibwa = 'oji';
    case Oriya = 'ori';
    case Oromo = 'orm';
    case Osage = 'osa';
    case Ossetian_Ossetic = 'oss';
    case Otomian_languages = 'oto';
    case Pahlavi = 'pal';
    case Palauan = 'pau';
    case Pali = 'pli';
    case Pampanga_Kapampangan = 'pam';
    case Pangasinan = 'pag';
    case Panjabi_Punjabi = 'pan';
    case Papiamento = 'pap';
    case Papuan_languages = 'paa';
    case Pedi_Sepedi_Northern_Sotho = 'nso';
    case Persian = 'fas';
    case Persian_Old_ca_600_400_B_C = 'peo';
    case Philippine_languages = 'phi';
    case Phoenician = 'phn';
    case Pohnpeian = 'pon';
    case Polish = 'pol';
    case Portuguese = 'por';
    case Prakrit_languages = 'pra';
    case Provencal_Old_to_1500_Occitan_Old_to_1500 = 'pro';
    case Pushto_Pashto = 'pus';
    case Quechua = 'que';
    case Rajasthani = 'raj';
    case Rapanui = 'rap';
    case Rarotongan_Cook_Islands_Maori = 'rar';
    case Romance_languages = 'roa';
    case Romanian_Moldavian_Moldovan = 'ron';
    case Romansh = 'roh';
    case Romany = 'rom';
    case Rundi = 'run';
    case Russian = 'rus';
    case Salishan_languages = 'sal';
    case Samaritan_Aramaic = 'sam';
    case Sami_languages = 'smi';
    case Samoan = 'smo';
    case Sandawe = 'sad';
    case Sango = 'sag';
    case Sanskrit = 'san';
    case Santali = 'sat';
    case Sardinian = 'srd';
    case Sasak = 'sas';
    case Scots = 'sco';
    case Selkup = 'sel';
    case Semitic_languages = 'sem';
    case Serbian = 'srp';
    case Serer = 'srr';
    case Shan = 'shn';
    case Shona = 'sna';
    case Sichuan_Yi_Nuosu = 'iii';
    case Sicilian = 'scn';
    case Sidamo = 'sid';
    case Sign_Languages = 'sgn';
    case Siksika = 'bla';
    case Sindhi = 'snd';
    case Sinhala_Sinhalese = 'sin';
    case Sino_Tibetan_languages = 'sit';
    case Siouan_languages = 'sio';
    case Skolt_Sami = 'sms';
    case Slave_Athapascan = 'den';
    case Slavic_languages = 'sla';
    case Slovak = 'slk';
    case Slovenian = 'slv';
    case Sogdian = 'sog';
    case Somali = 'som';
    case Songhai_languages = 'son';
    case Soninke = 'snk';
    case Sorbian_languages = 'wen';
    case Sotho_Southern = 'sot';
    case South_American_Indian_languages = 'sai';
    case Southern_Altai = 'alt';
    case Southern_Sami = 'sma';
    case Spanish_Castilian = 'spa';
    case Sranan_Tongo = 'srn';
    case Standard_Moroccan_Tamazight = 'zgh';
    case Sukuma = 'suk';
    case Sumerian = 'sux';
    case Sundanese = 'sun';
    case Susu = 'sus';
    case Swahili = 'swa';
    case Swati = 'ssw';
    case Swedish = 'swe';
    case Swiss_German_Alemannic_Alsatian = 'gsw';
    case Syriac = 'syr';
    case Tagalog = 'tgl';
    case Tahitian = 'tah';
    case Tai_languages = 'tai';
    case Tajik = 'tgk';
    case Tamashek = 'tmh';
    case Tamil = 'tam';
    case Tatar = 'tat';
    case Telugu = 'tel';
    case Tereno = 'ter';
    case Tetum = 'tet';
    case Thai = 'tha';
    case Tibetan = 'bod';
    case Tigre = 'tig';
    case Tigrinya = 'tir';
    case Timne = 'tem';
    case Tiv = 'tiv';
    case Tlingit = 'tli';
    case Tok_Pisin = 'tpi';
    case Tokelau = 'tkl';
    case Tonga_Nyasa = 'tog';
    case Tonga_Tonga_Islands = 'ton';
    case Tsimshian = 'tsi';
    case Tsonga = 'tso';
    case Tswana = 'tsn';
    case Tumbuka = 'tum';
    case Tupi_languages = 'tup';
    case Turkish = 'tur';
    case Turkish_Ottoman_1500_1928 = 'ota';
    case Turkmen = 'tuk';
    case Tuvalu = 'tvl';
    case Tuvinian = 'tyv';
    case Twi = 'twi';
    case Udmurt = 'udm';
    case Ugaritic = 'uga';
    case Uighur_Uyghur = 'uig';
    case Ukrainian = 'ukr';
    case Umbundu = 'umb';
    case Uncoded_languages = 'mis';
    case Undetermined = 'und';
    case Upper_Sorbian = 'hsb';
    case Urdu = 'urd';
    case Uzbek = 'uzb';
    case Vai = 'vai';
    case Venda = 'ven';
    case Vietnamese = 'vie';
    case Volapuk = 'vol';
    case Votic = 'vot';
    case Wakashan_languages = 'wak';
    case Walloon = 'wln';
    case Waray = 'war';
    case Washo = 'was';
    case Welsh = 'cym';
    case Western_Frisian = 'fry';
    case Wolaitta_Wolaytta = 'wal';
    case Wolof = 'wol';
    case Xhosa = 'xho';
    case Yakut = 'sah';
    case Yao = 'yao';
    case Yapese = 'yap';
    case Yiddish = 'yid';
    case Yoruba = 'yor';
    case Yupik_languages = 'ypk';
    case Zande_languages = 'znd';
    case Zapotec = 'zap';
    case Zaza_Dimili_Dimli_Kirdki_Kirmanjki_Zazaki = 'zza';
    case Zenaga = 'zen';
    case Zhuang_Chuang = 'zha';
    case Zulu = 'zul';
    case Zuni = 'zun';

    public function toLanguageAlpha3Bibliographic(): LanguageAlpha3Bibliographic {
        return BackedEnum::fromName(LanguageAlpha3Bibliographic::class, $this->name);
    }

    public function toLanguageAlpha2(): LanguageAlpha2|null {
        return BackedEnum::tryFromName(LanguageAlpha2::class, $this->name);
    }

    /** @deprecated Will be removed in v4. Please use ::getNameInLanguage(LanguageAlpha2::English) instead */
    public function toLanguageName(): LanguageName {
        return BackedEnum::fromName(LanguageName::class, $this->name);
    }

    public function upperCaseValue(): string {
        return strtoupper($this->value);
    }

    public function getNameInLanguage(LanguageAlpha2|LanguageAlpha3Terminology|LanguageAlpha3Bibliographic|LanguageAlpha3Extensive $language): ?string {
        if ($language instanceof LanguageAlpha3Bibliographic) {
            $language = $language->toLanguageAlpha3Terminology();
        }

        $languageNameInLanguage = locale_get_display_language($this->value, $language->value);
        if ($languageNameInLanguage === false) {
            // @codeCoverageIgnoreStart
            return null;
            // @codeCoverageIgnoreEnd
        }

        return $languageNameInLanguage;
    }

    public function formatNumber(float $amount, CountryAlpha2|CountryAlpha3|CountryNumeric|null $country = null): ?string {
        if ($country !== null && $country instanceof CountryAlpha2 === false) {
            $country = $country->toCountryAlpha2();
        }

        $formattedNumber = (new NumberFormatter($this->value . ($country !== null ? '-' . $country->value : ''), NumberFormatter::DECIMAL))
            ->format($amount);

        return $formattedNumber === false ? null : $formattedNumber;
    }

    public function getNameForCountry(CountryAlpha2 $country): ?string {
        return $country->getNameInLanguage($this);
    }

    /**
     * @param list<LanguageTagVariant> $variantSubtag ,
     * @param list<string> $extensionSubtag
     * @throws InvalidArgumentException
     */
    public function toLanguageTag(
        LanguageAlpha3Terminology|LanguageAlpha3Extensive|null     $extendedLanguageSubtag = null,
        ScriptCode|null                                            $scriptSubtag = null,
        CountryAlpha2|GeographicRegion|PrivateUseRegionSubtag|null $regionSubtag = null,
        array                                                      $variantSubtag = [],
        array                                                      $extensionSubtag = [],
        string|null                                                $privateUseSubtag = null,
    ): LanguageTag {
        return new LanguageTag(
            $this,
            $extendedLanguageSubtag,
            $scriptSubtag,
            $regionSubtag,
            $variantSubtag,
            $extensionSubtag,
            $privateUseSubtag,
        );
    }
}

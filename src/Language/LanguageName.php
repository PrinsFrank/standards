<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Language;

use PrinsFrank\Enums\BackedEnum;

/**
 * @deprecated Will be removed in v4. Please use ::getNameInLanguage(LanguageAlpha2::English) instead
 *
 * @standard ISO639_1
 * @source https://www.iso.org/iso-639-language-codes.html
 * @source http://www.loc.gov/standards/iso639-2/php/code_list.php
 */
enum LanguageName: string
{
    case Abkhazian = 'Abkhazian';
    case Achinese = 'Achinese';
    case Acoli = 'Acoli';
    case Adangme = 'Adangme';
    case Adyghe_Adygei = 'Adyghe; Adygei';
    case Afar = 'Afar';
    case Afrihili = 'Afrihili';
    case Afrikaans = 'Afrikaans';
    case Afro_Asiatic_languages = 'Afro-Asiatic languages';
    case Ainu = 'Ainu';
    case Akan = 'Akan';
    case Akkadian = 'Akkadian';
    case Albanian = 'Albanian';
    case Aleut = 'Aleut';
    case Algonquian_languages = 'Algonquian languages';
    case Altaic_languages = 'Altaic languages';
    case Amharic = 'Amharic';
    case Angika = 'Angika';
    case Apache_languages = 'Apache languages';
    case Arabic = 'Arabic';
    case Aragonese = 'Aragonese';
    case Arapaho = 'Arapaho';
    case Arawak = 'Arawak';
    case Armenian = 'Armenian';
    case Aromanian_Arumanian_Macedo_Romanian = 'Aromanian; Arumanian; Macedo-Romanian';
    case Artificial_languages = 'Artificial languages';
    case Assamese = 'Assamese';
    case Asturian_Bable_Leonese_Asturleonese = 'Asturian; Bable; Leonese; Asturleonese';
    case Athapascan_languages = 'Athapascan languages';
    case Australian_languages = 'Australian languages';
    case Austronesian_languages = 'Austronesian languages';
    case Avaric = 'Avaric';
    case Avestan = 'Avestan';
    case Awadhi = 'Awadhi';
    case Aymara = 'Aymara';
    case Azerbaijani = 'Azerbaijani';
    case Balinese = 'Balinese';
    case Baltic_languages = 'Baltic languages';
    case Baluchi = 'Baluchi';
    case Bambara = 'Bambara';
    case Bamileke_languages = 'Bamileke languages';
    case Banda_languages = 'Banda languages';
    case Bantu_languages = 'Bantu languages';
    case Basa = 'Basa';
    case Bashkir = 'Bashkir';
    case Basque = 'Basque';
    case Batak_languages = 'Batak languages';
    case Beja_Bedawiyet = 'Beja; Bedawiyet';
    case Belarusian = 'Belarusian';
    case Bemba = 'Bemba';
    case Bengali = 'Bengali';
    case Berber_languages = 'Berber languages';
    case Bhojpuri = 'Bhojpuri';
    case Bihari_languages = 'Bihari languages';
    case Bikol = 'Bikol';
    case Bini_Edo = 'Bini; Edo';
    case Bislama = 'Bislama';
    case Blin_Bilin = 'Blin; Bilin';
    case Blissymbols_Blissymbolics_Bliss = 'Blissymbols; Blissymbolics; Bliss';
    case Bokmal_Norwegian_Norwegian_Bokmal = 'Bokmål, Norwegian; Norwegian Bokmål';
    case Bosnian = 'Bosnian';
    case Braj = 'Braj';
    case Breton = 'Breton';
    case Buginese = 'Buginese';
    case Bulgarian = 'Bulgarian';
    case Buriat = 'Buriat';
    case Burmese = 'Burmese';
    case Caddo = 'Caddo';
    case Catalan_Valencian = 'Catalan; Valencian';
    case Caucasian_languages = 'Caucasian languages';
    case Cebuano = 'Cebuano';
    case Celtic_languages = 'Celtic languages';
    case Central_American_Indian_languages = 'Central American Indian languages';
    case Central_Khmer = 'Central Khmer';
    case Chagatai = 'Chagatai';
    case Chamic_languages = 'Chamic languages';
    case Chamorro = 'Chamorro';
    case Chechen = 'Chechen';
    case Cherokee = 'Cherokee';
    case Cheyenne = 'Cheyenne';
    case Chibcha = 'Chibcha';
    case Chichewa_Chewa_Nyanja = 'Chichewa; Chewa; Nyanja';
    case Chinese = 'Chinese';
    case Chinook_jargon = 'Chinook jargon';
    case Chipewyan_Dene_Suline = 'Chipewyan; Dene Suline';
    case Choctaw = 'Choctaw';
    case Church_Slavic_Old_Slavonic_Church_Slavonic_Old_Bulgarian_Old_Church_Slavonic = 'Church Slavic; Old Slavonic; Church Slavonic; Old Bulgarian; Old Church Slavonic';
    case Chuukese = 'Chuukese';
    case Chuvash = 'Chuvash';
    case Classical_Newari_Old_Newari_Classical_Nepal_Bhasa = 'Classical Newari; Old Newari; Classical Nepal Bhasa';
    case Classical_Syriac = 'Classical Syriac';
    case Coptic = 'Coptic';
    case Cornish = 'Cornish';
    case Corsican = 'Corsican';
    case Cree = 'Cree';
    case Creek = 'Creek';
    case Creoles_and_pidgins = 'Creoles and pidgins';
    case Creoles_and_pidgins_English_based = 'Creoles and pidgins, English based';
    case Creoles_and_pidgins_French_based = 'Creoles and pidgins, French-based';
    case Creoles_and_pidgins_Portuguese_based = 'Creoles and pidgins, Portuguese-based';
    case Crimean_Tatar_Crimean_Turkish = 'Crimean Tatar; Crimean Turkish';
    case Croatian = 'Croatian';
    case Cushitic_languages = 'Cushitic languages';
    case Czech = 'Czech';
    case Dakota = 'Dakota';
    case Danish = 'Danish';
    case Dargwa = 'Dargwa';
    case Delaware = 'Delaware';
    case Dinka = 'Dinka';
    case Divehi_Dhivehi_Maldivian = 'Divehi; Dhivehi; Maldivian';
    case Dogri = 'Dogri';
    case Dravidian_languages = 'Dravidian languages';
    case Duala = 'Duala';
    case Dutch_Flemish = 'Dutch; Flemish';
    case Dutch_Middle_ca_1050_1350 = 'Dutch, Middle (ca.1050-1350)';
    case Dyula = 'Dyula';
    case Dzongkha = 'Dzongkha';
    case Eastern_Frisian = 'Eastern Frisian';
    case Efik = 'Efik';
    case Egyptian_Ancient = 'Egyptian (Ancient)';
    case Ekajuk = 'Ekajuk';
    case Elamite = 'Elamite';
    case English = 'English';
    case English_Middle_1100_1500 = 'English, Middle (1100-1500)';
    case English_Old_ca_450_1100 = 'English, Old (ca.450-1100)';
    case Erzya = 'Erzya';
    case Esperanto = 'Esperanto';
    case Estonian = 'Estonian';
    case Ewe = 'Ewe';
    case Ewondo = 'Ewondo';
    case Fang = 'Fang';
    case Fanti = 'Fanti';
    case Faroese = 'Faroese';
    case Fijian = 'Fijian';
    case Filipino_Pilipino = 'Filipino; Pilipino';
    case Finnish = 'Finnish';
    case Finno_Ugrian_languages = 'Finno-Ugrian languages';
    case Fon = 'Fon';
    case French = 'French';
    case French_Middle_ca_1400_1600 = 'French, Middle (ca.1400-1600)';
    case French_Old_842_ca_1400 = 'French, Old (842-ca.1400)';
    case Friulian = 'Friulian';
    case Fulah = 'Fulah';
    case Ga = 'Ga';
    case Gaelic_Scottish_Gaelic = 'Gaelic; Scottish Gaelic';
    case Galibi_Carib = 'Galibi Carib';
    case Galician = 'Galician';
    case Ganda = 'Ganda';
    case Gayo = 'Gayo';
    case Gbaya = 'Gbaya';
    case Geez = 'Geez';
    case Georgian = 'Georgian';
    case German = 'German';
    case German_Middle_High_ca_1050_1500 = 'German, Middle High (ca.1050-1500)';
    case German_Old_High_ca_750_1050 = 'German, Old High (ca.750-1050)';
    case Germanic_languages = 'Germanic languages';
    case Gilbertese = 'Gilbertese';
    case Gondi = 'Gondi';
    case Gorontalo = 'Gorontalo';
    case Gothic = 'Gothic';
    case Grebo = 'Grebo';
    case Greek_Ancient_to_1453 = 'Greek, Ancient (to 1453)';
    case Greek_Modern_1453 = 'Greek, Modern (1453-)';
    case Guarani = 'Guarani';
    case Gujarati = 'Gujarati';
    case Gwich_in = 'Gwich\'in';
    case Haida = 'Haida';
    case Haitian_Haitian_Creole = 'Haitian; Haitian Creole';
    case Hausa = 'Hausa';
    case Hawaiian = 'Hawaiian';
    case Hebrew = 'Hebrew';
    case Herero = 'Herero';
    case Hiligaynon = 'Hiligaynon';
    case Himachali_languages_Western_Pahari_languages = 'Himachali languages; Western Pahari languages';
    case Hindi = 'Hindi';
    case Hiri_Motu = 'Hiri Motu';
    case Hittite = 'Hittite';
    case Hmong_Mong = 'Hmong; Mong';
    case Hungarian = 'Hungarian';
    case Hupa = 'Hupa';
    case Iban = 'Iban';
    case Icelandic = 'Icelandic';
    case Ido = 'Ido';
    case Igbo = 'Igbo';
    case Ijo_languages = 'Ijo languages';
    case Iloko = 'Iloko';
    case Inari_Sami = 'Inari Sami';
    case Indic_languages = 'Indic languages';
    case Indo_European_languages = 'Indo-European languages';
    case Indonesian = 'Indonesian';
    case Ingush = 'Ingush';
    case Interlingua_International_Auxiliary_Language_Association = 'Interlingua (International Auxiliary Language Association)';
    case Interlingue_Occidental = 'Interlingue; Occidental';
    case Inuktitut = 'Inuktitut';
    case Inupiaq = 'Inupiaq';
    case Iranian_languages = 'Iranian languages';
    case Irish = 'Irish';
    case Irish_Middle_900_1200 = 'Irish, Middle (900-1200)';
    case Irish_Old_to_900 = 'Irish, Old (to 900)';
    case Iroquoian_languages = 'Iroquoian languages';
    case Italian = 'Italian';
    case Japanese = 'Japanese';
    case Javanese = 'Javanese';
    case Judeo_Arabic = 'Judeo-Arabic';
    case Judeo_Persian = 'Judeo-Persian';
    case Kabardian = 'Kabardian';
    case Kabyle = 'Kabyle';
    case Kachin_Jingpho = 'Kachin; Jingpho';
    case Kalaallisut_Greenlandic = 'Kalaallisut; Greenlandic';
    case Kalmyk_Oirat = 'Kalmyk; Oirat';
    case Kamba = 'Kamba';
    case Kannada = 'Kannada';
    case Kanuri = 'Kanuri';
    case Kara_Kalpak = 'Kara-Kalpak';
    case Karachay_Balkar = 'Karachay-Balkar';
    case Karelian = 'Karelian';
    case Karen_languages = 'Karen languages';
    case Kashmiri = 'Kashmiri';
    case Kashubian = 'Kashubian';
    case Kawi = 'Kawi';
    case Kazakh = 'Kazakh';
    case Khasi = 'Khasi';
    case Khoisan_languages = 'Khoisan languages';
    case Khotanese_Sakan = 'Khotanese; Sakan';
    case Kikuyu_Gikuyu = 'Kikuyu; Gikuyu';
    case Kimbundu = 'Kimbundu';
    case Kinyarwanda = 'Kinyarwanda';
    case Kirghiz_Kyrgyz = 'Kirghiz; Kyrgyz';
    case Klingon_tlhIngan_Hol = 'Klingon; tlhIngan-Hol';
    case Komi = 'Komi';
    case Kongo = 'Kongo';
    case Konkani = 'Konkani';
    case Korean = 'Korean';
    case Kosraean = 'Kosraean';
    case Kpelle = 'Kpelle';
    case Kru_languages = 'Kru languages';
    case Kuanyama_Kwanyama = 'Kuanyama; Kwanyama';
    case Kumyk = 'Kumyk';
    case Kurdish = 'Kurdish';
    case Kurukh = 'Kurukh';
    case Kutenai = 'Kutenai';
    case Ladino = 'Ladino';
    case Lahnda = 'Lahnda';
    case Lamba = 'Lamba';
    case Land_Dayak_languages = 'Land Dayak languages';
    case Lao = 'Lao';
    case Latin = 'Latin';
    case Latvian = 'Latvian';
    case Lezghian = 'Lezghian';
    case Limburgan_Limburger_Limburgish = 'Limburgan; Limburger; Limburgish';
    case Lingala = 'Lingala';
    case Lithuanian = 'Lithuanian';
    case Lojban = 'Lojban';
    case Low_German_Low_Saxon_German_Low_Saxon_Low = 'Low German; Low Saxon; German, Low; Saxon, Low';
    case Lower_Sorbian = 'Lower Sorbian';
    case Lozi = 'Lozi';
    case Luba_Katanga = 'Luba-Katanga';
    case Luba_Lulua = 'Luba-Lulua';
    case Luiseno = 'Luiseno';
    case Lule_Sami = 'Lule Sami';
    case Lunda = 'Lunda';
    case Luo_Kenya_and_Tanzania = 'Luo (Kenya and Tanzania)';
    case Lushai = 'Lushai';
    case Luxembourgish_Letzeburgesch = 'Luxembourgish; Letzeburgesch';
    case Macedonian = 'Macedonian';
    case Madurese = 'Madurese';
    case Magahi = 'Magahi';
    case Maithili = 'Maithili';
    case Makasar = 'Makasar';
    case Malagasy = 'Malagasy';
    case Malay = 'Malay';
    case Malayalam = 'Malayalam';
    case Maltese = 'Maltese';
    case Manchu = 'Manchu';
    case Mandar = 'Mandar';
    case Mandingo = 'Mandingo';
    case Manipuri = 'Manipuri';
    case Manobo_languages = 'Manobo languages';
    case Manx = 'Manx';
    case Maori = 'Maori';
    case Mapudungun_Mapuche = 'Mapudungun; Mapuche';
    case Marathi = 'Marathi';
    case Mari = 'Mari';
    case Marshallese = 'Marshallese';
    case Marwari = 'Marwari';
    case Masai = 'Masai';
    case Mayan_languages = 'Mayan languages';
    case Mende = 'Mende';
    case Mi_kmaq_Micmac = 'Mi\'kmaq; Micmac';
    case Minangkabau = 'Minangkabau';
    case Mirandese = 'Mirandese';
    case Mohawk = 'Mohawk';
    case Moksha = 'Moksha';
    case Mon_Khmer_languages = 'Mon-Khmer languages';
    case Mongo = 'Mongo';
    case Mongolian = 'Mongolian';
    case Montenegrin = 'Montenegrin';
    case Mossi = 'Mossi';
    case Multiple_languages = 'Multiple languages';
    case Munda_languages = 'Munda languages';
    case N_Ko = 'N\'Ko';
    case Nahuatl_languages = 'Nahuatl languages';
    case Nauru = 'Nauru';
    case Navajo_Navaho = 'Navajo; Navaho';
    case Ndebele_North_North_Ndebele = 'Ndebele, North; North Ndebele';
    case Ndebele_South_South_Ndebele = 'Ndebele, South; South Ndebele';
    case Ndonga = 'Ndonga';
    case Neapolitan = 'Neapolitan';
    case Nepal_Bhasa_Newari = 'Nepal Bhasa; Newari';
    case Nepali = 'Nepali';
    case Nias = 'Nias';
    case Niger_Kordofanian_languages = 'Niger-Kordofanian languages';
    case Nilo_Saharan_languages = 'Nilo-Saharan languages';
    case Niuean = 'Niuean';
    case No_linguistic_content_Not_applicable = 'No linguistic content; Not applicable';
    case Nogai = 'Nogai';
    case Norse_Old = 'Norse, Old';
    case North_American_Indian_languages = 'North American Indian languages';
    case Northern_Frisian = 'Northern Frisian';
    case Northern_Sami = 'Northern Sami';
    case Norwegian = 'Norwegian';
    case Norwegian_Nynorsk_Nynorsk_Norwegian = 'Norwegian Nynorsk; Nynorsk, Norwegian';
    case Nubian_languages = 'Nubian languages';
    case Nyamwezi = 'Nyamwezi';
    case Nyankole = 'Nyankole';
    case Nyoro = 'Nyoro';
    case Nzima = 'Nzima';
    case Occitan_post_1500 = 'Occitan (post 1500)';
    case Official_Aramaic_700_300_BCE_Imperial_Aramaic_700_300_BCE = 'Official Aramaic (700-300 BCE); Imperial Aramaic (700-300 BCE)';
    case Ojibwa = 'Ojibwa';
    case Oriya = 'Oriya';
    case Oromo = 'Oromo';
    case Osage = 'Osage';
    case Ossetian_Ossetic = 'Ossetian; Ossetic';
    case Otomian_languages = 'Otomian languages';
    case Pahlavi = 'Pahlavi';
    case Palauan = 'Palauan';
    case Pali = 'Pali';
    case Pampanga_Kapampangan = 'Pampanga; Kapampangan';
    case Pangasinan = 'Pangasinan';
    case Panjabi_Punjabi = 'Panjabi; Punjabi';
    case Papiamento = 'Papiamento';
    case Papuan_languages = 'Papuan languages';
    case Pedi_Sepedi_Northern_Sotho = 'Pedi; Sepedi; Northern Sotho';
    case Persian = 'Persian';
    case Persian_Old_ca_600_400_B_C = 'Persian, Old (ca.600-400 B.C.)';
    case Philippine_languages = 'Philippine languages';
    case Phoenician = 'Phoenician';
    case Pohnpeian = 'Pohnpeian';
    case Polish = 'Polish';
    case Portuguese = 'Portuguese';
    case Prakrit_languages = 'Prakrit languages';
    case Provencal_Old_to_1500_Occitan_Old_to_1500 = 'Provençal, Old (to 1500);Occitan, Old (to 1500)';
    case Pushto_Pashto = 'Pushto; Pashto';
    case Quechua = 'Quechua';
    case Rajasthani = 'Rajasthani';
    case Rapanui = 'Rapanui';
    case Rarotongan_Cook_Islands_Maori = 'Rarotongan; Cook Islands Maori';
    case Romance_languages = 'Romance languages';
    case Romanian_Moldavian_Moldovan = 'Romanian; Moldavian; Moldovan';
    case Romansh = 'Romansh';
    case Romany = 'Romany';
    case Rundi = 'Rundi';
    case Russian = 'Russian';
    case Salishan_languages = 'Salishan languages';
    case Samaritan_Aramaic = 'Samaritan Aramaic';
    case Sami_languages = 'Sami languages';
    case Samoan = 'Samoan';
    case Sandawe = 'Sandawe';
    case Sango = 'Sango';
    case Sanskrit = 'Sanskrit';
    case Santali = 'Santali';
    case Sardinian = 'Sardinian';
    case Sasak = 'Sasak';
    case Scots = 'Scots';
    case Selkup = 'Selkup';
    case Semitic_languages = 'Semitic languages';
    case Serbian = 'Serbian';
    case Serer = 'Serer';
    case Shan = 'Shan';
    case Shona = 'Shona';
    case Sichuan_Yi_Nuosu = 'Sichuan Yi; Nuosu';
    case Sicilian = 'Sicilian';
    case Sidamo = 'Sidamo';
    case Sign_Languages = 'Sign Languages';
    case Siksika = 'Siksika';
    case Sindhi = 'Sindhi';
    case Sinhala_Sinhalese = 'Sinhala; Sinhalese';
    case Sino_Tibetan_languages = 'Sino-Tibetan languages';
    case Siouan_languages = 'Siouan languages';
    case Skolt_Sami = 'Skolt Sami';
    case Slave_Athapascan = 'Slave (Athapascan)';
    case Slavic_languages = 'Slavic languages';
    case Slovak = 'Slovak';
    case Slovenian = 'Slovenian';
    case Sogdian = 'Sogdian';
    case Somali = 'Somali';
    case Songhai_languages = 'Songhai languages';
    case Soninke = 'Soninke';
    case Sorbian_languages = 'Sorbian languages';
    case Sotho_Southern = 'Sotho, Southern';
    case South_American_Indian_languages = 'South American Indian languages';
    case Southern_Altai = 'Southern Altai';
    case Southern_Sami = 'Southern Sami';
    case Spanish_Castilian = 'Spanish; Castilian';
    case Sranan_Tongo = 'Sranan Tongo';
    case Standard_Moroccan_Tamazight = 'Standard Moroccan Tamazight';
    case Sukuma = 'Sukuma';
    case Sumerian = 'Sumerian';
    case Sundanese = 'Sundanese';
    case Susu = 'Susu';
    case Swahili = 'Swahili';
    case Swati = 'Swati';
    case Swedish = 'Swedish';
    case Swiss_German_Alemannic_Alsatian = 'Swiss German; Alemannic; Alsatian';
    case Syriac = 'Syriac';
    case Tagalog = 'Tagalog';
    case Tahitian = 'Tahitian';
    case Tai_languages = 'Tai languages';
    case Tajik = 'Tajik';
    case Tamashek = 'Tamashek';
    case Tamil = 'Tamil';
    case Tatar = 'Tatar';
    case Telugu = 'Telugu';
    case Tereno = 'Tereno';
    case Tetum = 'Tetum';
    case Thai = 'Thai';
    case Tibetan = 'Tibetan';
    case Tigre = 'Tigre';
    case Tigrinya = 'Tigrinya';
    case Timne = 'Timne';
    case Tiv = 'Tiv';
    case Dogrib = 'Tlicho; Dogrib';
    case Tlingit = 'Tlingit';
    case Tok_Pisin = 'Tok Pisin';
    case Tokelau = 'Tokelau';
    case Tonga_Nyasa = 'Tonga (Nyasa)';
    case Tonga_Tonga_Islands = 'Tonga (Tonga Islands)';
    case Tsimshian = 'Tsimshian';
    case Tsonga = 'Tsonga';
    case Tswana = 'Tswana';
    case Tumbuka = 'Tumbuka';
    case Tupi_languages = 'Tupi languages';
    case Turkish = 'Turkish';
    case Turkish_Ottoman_1500_1928 = 'Turkish, Ottoman (1500-1928)';
    case Turkmen = 'Turkmen';
    case Tuvalu = 'Tuvalu';
    case Tuvinian = 'Tuvinian';
    case Twi = 'Twi';
    case Udmurt = 'Udmurt';
    case Ugaritic = 'Ugaritic';
    case Uighur_Uyghur = 'Uighur; Uyghur';
    case Ukrainian = 'Ukrainian';
    case Umbundu = 'Umbundu';
    case Uncoded_languages = 'Uncoded languages';
    case Undetermined = 'Undetermined';
    case Upper_Sorbian = 'Upper Sorbian';
    case Urdu = 'Urdu';
    case Uzbek = 'Uzbek';
    case Vai = 'Vai';
    case Venda = 'Venda';
    case Vietnamese = 'Vietnamese';
    case Volapuk = 'Volapük';
    case Votic = 'Votic';
    case Wakashan_languages = 'Wakashan languages';
    case Walloon = 'Walloon';
    case Waray = 'Waray';
    case Washo = 'Washo';
    case Welsh = 'Welsh';
    case Western_Frisian = 'Western Frisian';
    case Wolaitta_Wolaytta = 'Wolaitta; Wolaytta';
    case Wolof = 'Wolof';
    case Xhosa = 'Xhosa';
    case Yakut = 'Yakut';
    case Yao = 'Yao';
    case Yapese = 'Yapese';
    case Yiddish = 'Yiddish';
    case Yoruba = 'Yoruba';
    case Yupik_languages = 'Yupik languages';
    case Zande_languages = 'Zande languages';
    case Zapotec = 'Zapotec';
    case Zaza_Dimili_Dimli_Kirdki_Kirmanjki_Zazaki = 'Zaza; Dimili; Dimli; Kirdki; Kirmanjki; Zazaki';
    case Zenaga = 'Zenaga';
    case Zhuang_Chuang = 'Zhuang; Chuang';
    case Zulu = 'Zulu';
    case Zuni = 'Zuni';

    public function toLanguageAlpha2(): LanguageAlpha2|null
    {
        return BackedEnum::tryFromName(LanguageAlpha2::class, $this->name);
    }

    public function toLanguageAlpha3Bibliographic(): ?LanguageAlpha3Bibliographic
    {
        return BackedEnum::tryFromName(LanguageAlpha3Bibliographic::class, $this->name);
    }

    public function toLanguageAlpha3Terminology(): ?LanguageAlpha3Terminology
    {
        return BackedEnum::tryFromName(LanguageAlpha3Terminology::class, $this->name);
    }
}

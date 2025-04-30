<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Scripts;

use PrinsFrank\Enums\BackedEnum;

/**
 * @standard ISO-15924
 * @source https://www.unicode.org/iso15924/iso15924-codes.html
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\ScriptMapping
 */
enum ScriptCode: string {
    case Adlam = 'Adlm';
    case Afaka = 'Afak';
    case Ahom_Tai_Ahom = 'Ahom';
    case Anatolian_Hieroglyphs_Luwian_Hieroglyphs_Hittite_Hieroglyphs = 'Hluw';
    case Arabic = 'Arab';
    case Arabic_Nastaliq_variant = 'Aran';
    case Armenian = 'Armn';
    case Avestan = 'Avst';
    case Balinese = 'Bali';
    case Bamum = 'Bamu';
    case Bassa_Vah = 'Bass';
    case Batak = 'Batk';
    case Bengali_Bangla = 'Beng';
    case Beria_Erfe = 'Berf';
    case Bhaiksuki = 'Bhks';
    case Blissymbols = 'Blis';
    case Book_Pahlavi = 'Phlv';
    case Bopomofo = 'Bopo';
    case Brahmi = 'Brah';
    case Braille = 'Brai';
    case Buginese = 'Bugi';
    case Buhid = 'Buhd';
    case Carian = 'Cari';
    case Caucasian_Albanian = 'Aghb';
    case Chakma = 'Cakm';
    case Cham = 'Cham';
    case Cherokee = 'Cher';
    case Chisoi = 'Chis';
    case Chorasmian = 'Chrs';
    case Cirth = 'Cirt';
    case Code_for_inherited_script = 'Zinh';
    case Code_for_uncoded_script = 'Zzzz';
    case Code_for_undetermined_script = 'Zyyy';
    case Code_for_unwritten_documents = 'Zxxx';
    case Coptic = 'Copt';
    case Cuneiform_Sumero_Akkadian = 'Xsux';
    case Cypriot_syllabary = 'Cprt';
    case Cypro_Minoan = 'Cpmn';
    case Cyrillic = 'Cyrl';
    case Cyrillic_Old_Church_Slavonic_variant = 'Cyrs';
    case Deseret_Mormon = 'Dsrt';
    case Devanagari_Nagari = 'Deva';
    case Dives_Akuru = 'Diak';
    case Dogra = 'Dogr';
    case Duployan_shorthand_Duployan_stenography = 'Dupl';
    case Egyptian_demotic = 'Egyd';
    case Egyptian_hieratic = 'Egyh';
    case Egyptian_hieroglyphs = 'Egyp';
    case Elbasan = 'Elba';
    case Elymaic = 'Elym';
    case Ethiopic_Ge_ez = 'Ethi';
    case Garay = 'Gara';
    case Georgian_Mkhedruli_and_Mtavruli = 'Geor';
    case Glagolitic = 'Glag';
    case Gothic = 'Goth';
    case Grantha = 'Gran';
    case Greek = 'Grek';
    case Gujarati = 'Gujr';
    case Gunjala_Gondi = 'Gong';
    case Gurmukhi = 'Guru';
    case Gurung_Khema = 'Gukh';
    case Han_Hanzi_Kanji_Hanja = 'Hani';
    case Han_Simplified_variant = 'Hans';
    case Han_Traditional_variant = 'Hant';
    case Han_Traditional_variant_with_Latin_alias_for_Hant_Latn = 'Hntl';
    case Han_with_Bopomofo_alias_for_Han_Bopomofo = 'Hanb';
    case Hangul_Hangul_Hangeul = 'Hang';
    case Hanifi_Rohingya = 'Rohg';
    case Hanunoo_Hanunoo = 'Hano';
    case Hatran = 'Hatr';
    case Hebrew = 'Hebr';
    case Hiragana = 'Hira';
    case Imperial_Aramaic = 'Armi';
    case Indus_Harappan = 'Inds';
    case Inscriptional_Pahlavi = 'Phli';
    case Inscriptional_Parthian = 'Prti';
    case Jamo_alias_for_Jamo_subset_of_Hangul = 'Jamo';
    case Japanese_alias_for_Han_Hiragana_Katakana = 'Jpan';
    case Japanese_syllabaries_alias_for_Hiragana_Katakana = 'Hrkt';
    case Javanese = 'Java';
    case Jurchen = 'Jurc';
    case Kaithi = 'Kthi';
    case Kannada = 'Knda';
    case Katakana = 'Kana';
    case Kawi = 'Kawi';
    case Kayah_Li = 'Kali';
    case Kharoshthi = 'Khar';
    case Khitan_large_script = 'Kitl';
    case Khitan_small_script = 'Kits';
    case Khmer = 'Khmr';
    case Khojki = 'Khoj';
    case Khudawadi_Sindhi = 'Sind';
    case Khutsuri_Asomtavruli_and_Nuskhuri = 'Geok';
    case Kirat_Rai = 'Krai';
    case Klingon_KLI_pIqaD = 'Piqd';
    case Korean_alias_for_Hangul_Han = 'Kore';
    case Kpelle = 'Kpel';
    case Lao = 'Laoo';
    case Latin = 'Latn';
    case Latin_Fraktur_variant = 'Latf';
    case Latin_Gaelic_variant = 'Latg';
    case Leke = 'Leke';
    case Lepcha_Rong = 'Lepc';
    case Limbu = 'Limb';
    case Linear_A = 'Lina';
    case Linear_B = 'Linb';
    case Lisu_Fraser = 'Lisu';
    case Loma = 'Loma';
    case Lycian = 'Lyci';
    case Lydian = 'Lydi';
    case Mahajani = 'Mahj';
    case Makasar = 'Maka';
    case Malayalam = 'Mlym';
    case Mandaic_Mandaean = 'Mand';
    case Manichaean = 'Mani';
    case Marchen = 'Marc';
    case Masaram_Gondi = 'Gonm';
    case Mathematical_notation = 'Zmth';
    case Mayan_hieroglyphs = 'Maya';
    case Medefaidrin_Oberi_Okaime_Oberi_Okaime = 'Medf';
    case Meitei_Mayek_Meithei_Meetei = 'Mtei';
    case Mende_Kikakui = 'Mend';
    case Meroitic_Cursive = 'Merc';
    case Meroitic_Hieroglyphs = 'Mero';
    case Miao_Pollard = 'Plrd';
    case Modi_Modi = 'Modi';
    case Mongolian = 'Mong';
    case Moon_Moon_code_Moon_script_Moon_type = 'Moon';
    case Mro_Mru = 'Mroo';
    case Multani = 'Mult';
    case Myanmar_Burmese = 'Mymr';
    case N_Ko = 'Nkoo';
    case Nabataean = 'Nbat';
    case Nag_Mundari = 'Nagm';
    case Nandinagari = 'Nand';
    case Naxi_Dongba_naci_toba_Nakhi_Tomba = 'Nkdb';
    case Naxi_Geba_naci_geba_Na_Khi_Ggo_baw_Nakhi_Geba = 'Nkgb';
    case New_Tai_Lue = 'Talu';
    case Newa_Newar_Newari_Nepala_lipi = 'Newa';
    case Nushu = 'Nshu';
    case Nyiakeng_Puachue_Hmong = 'Hmnp';
    case Ogham = 'Ogam';
    case Ol_Chiki_Ol_Cemet_Ol_Santali = 'Olck';
    case Ol_Onal = 'Onao';
    case Old_Hungarian_Hungarian_Runic = 'Hung';
    case Old_Italic_Etruscan_Oscan_etc = 'Ital';
    case Old_North_Arabian_Ancient_North_Arabian = 'Narb';
    case Old_Permic = 'Perm';
    case Old_Persian = 'Xpeo';
    case Old_Sogdian = 'Sogo';
    case Old_South_Arabian = 'Sarb';
    case Old_Turkic_Orkhon_Runic = 'Orkh';
    case Old_Uyghur = 'Ougr';
    case Oriya_Odia = 'Orya';
    case Osage = 'Osge';
    case Osmanya = 'Osma';
    case Pahawh_Hmong = 'Hmng';
    case Palmyrene = 'Palm';
    case Pau_Cin_Hau = 'Pauc';
    case Phags_pa = 'Phag';
    case Phoenician = 'Phnx';
    case Proto_Cuneiform = 'Pcun';
    case Proto_Elamite = 'Pelm';
    case Proto_Sinaitic = 'Psin';
    case Psalter_Pahlavi = 'Phlp';
    case Ranjana = 'Ranj';
    case Rejang_Redjang_Kaganga = 'Rjng';
    case Reserved_for_private_use_end = 'Qabx';
    case Reserved_for_private_use_start = 'Qaaa';
    case Rongorongo = 'Roro';
    case Runic = 'Runr';
    case Samaritan = 'Samr';
    case Sarati = 'Sara';
    case Saurashtra = 'Saur';
    case Sharada_Sarada = 'Shrd';
    case Shavian_Shaw = 'Shaw';
    case Shuishu = 'Shui';
    case Siddham_Siddham_Siddhamatrka = 'Sidd';
    case Sidetic = 'Sidt';
    case SignWriting = 'Sgnw';
    case Sinhala = 'Sinh';
    case Small_Seal = 'Seal';
    case Sogdian = 'Sogd';
    case Sora_Sompeng = 'Sora';
    case Soyombo = 'Soyo';
    case Sundanese = 'Sund';
    case Sunuwar = 'Sunu';
    case Syloti_Nagri = 'Sylo';
    case Symbols = 'Zsym';
    case Symbols_Emoji_variant = 'Zsye';
    case Syriac = 'Syrc';
    case Syriac_Eastern_variant = 'Syrn';
    case Syriac_Estrangelo_variant = 'Syre';
    case Syriac_Western_variant = 'Syrj';
    case Tagalog_Baybayin_Alibata = 'Tglg';
    case Tagbanwa = 'Tagb';
    case Tai_Le = 'Tale';
    case Tai_Tham_Lanna = 'Lana';
    case Tai_Viet = 'Tavt';
    case Tai_Yo = 'Tayo';
    case Takri_Takri_Tankri = 'Takr';
    case Tamil = 'Taml';
    case Tangsa = 'Tnsa';
    case Tangut = 'Tang';
    case Telugu = 'Telu';
    case Tengwar = 'Teng';
    case Thaana = 'Thaa';
    case Thai = 'Thai';
    case Tibetan = 'Tibt';
    case Tifinagh_Berber = 'Tfng';
    case Tirhuta = 'Tirh';
    case Todhri = 'Todr';
    case Tolong_Siki = 'Tols';
    case Toto = 'Toto';
    case Tulu_Tigalari = 'Tutg';
    case Ugaritic = 'Ugar';
    case Unified_Canadian_Aboriginal_Syllabics = 'Cans';
    case Vai = 'Vaii';
    case Visible_Speech = 'Visp';
    case Vithkuqi = 'Vith';
    case Wancho = 'Wcho';
    case Warang_Citi_Varang_Kshiti = 'Wara';
    case Woleai = 'Wole';
    case Yezidi = 'Yezi';
    case Yi = 'Yiii';
    case Zanabazar_Square_Zanabazarin_Dorboljin_Useg_Xewtee_Dorboljin_Bicig_Horizontal_Square_Script = 'Zanb';

    public function toScriptAlias(): ?ScriptAlias {
        return BackedEnum::tryFromName(ScriptAlias::class, $this->name);
    }

    public function toScriptNumber(): ScriptNumber {
        return BackedEnum::fromName(ScriptNumber::class, $this->name);
    }

    public function toScriptName(): ScriptName {
        return BackedEnum::fromName(ScriptName::class, $this->name);
    }

    /**
     * @return ($string is non-empty-string ? non-empty-array<ScriptCode> : array{}) in order of most matched multibyte characters
     *
     * Please note that not all Scripts are supported, only the ones that have the 'SupportedByPHPRegex' attribute.
     * For all other scripts, self::Code_for_undetermined_script will be returned
     */
    public static function allForString(string $string): array {
        return array_map(fn (ScriptAlias $scriptAlias) => $scriptAlias->toScriptCode(), ScriptAlias::allForString($string));
    }

    /** @return ($string is non-empty-string ? bool : false) */
    public static function hasMultipleForString(string $string): bool {
        return ScriptAlias::hasMultipleForString($string);
    }

    /** @return ($string is non-empty-string ? self : null) */
    public static function mostCommonInString(string $string): ?self {
        return self::allForString($string)[0] ?? null;
    }
}

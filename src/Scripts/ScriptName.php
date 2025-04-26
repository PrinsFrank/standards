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
enum ScriptName: string {
    case Adlam = 'Adlam';
    case Afaka = 'Afaka';
    case Ahom_Tai_Ahom = 'Ahom, Tai Ahom';
    case Anatolian_Hieroglyphs_Luwian_Hieroglyphs_Hittite_Hieroglyphs = 'Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs)';
    case Arabic = 'Arabic';
    case Arabic_Nastaliq_variant = 'Arabic (Nastaliq variant)';
    case Armenian = 'Armenian';
    case Avestan = 'Avestan';
    case Balinese = 'Balinese';
    case Bamum = 'Bamum';
    case Bassa_Vah = 'Bassa Vah';
    case Batak = 'Batak';
    case Bengali_Bangla = 'Bengali (Bangla)';
    case Beria_Erfe = 'Beria Erfe';
    case Bhaiksuki = 'Bhaiksuki';
    case Blissymbols = 'Blissymbols';
    case Book_Pahlavi = 'Book Pahlavi';
    case Bopomofo = 'Bopomofo';
    case Brahmi = 'Brahmi';
    case Braille = 'Braille';
    case Buginese = 'Buginese';
    case Buhid = 'Buhid';
    case Carian = 'Carian';
    case Caucasian_Albanian = 'Caucasian Albanian';
    case Chakma = 'Chakma';
    case Cham = 'Cham';
    case Cherokee = 'Cherokee';
    case Chisoi = 'Chisoi';
    case Chorasmian = 'Chorasmian';
    case Cirth = 'Cirth';
    case Code_for_inherited_script = 'Code for inherited script';
    case Code_for_uncoded_script = 'Code for uncoded script';
    case Code_for_undetermined_script = 'Code for undetermined script';
    case Code_for_unwritten_documents = 'Code for unwritten documents';
    case Coptic = 'Coptic';
    case Cuneiform_Sumero_Akkadian = 'Cuneiform, Sumero-Akkadian';
    case Cypriot_syllabary = 'Cypriot syllabary';
    case Cypro_Minoan = 'Cypro-Minoan';
    case Cyrillic = 'Cyrillic';
    case Cyrillic_Old_Church_Slavonic_variant = 'Cyrillic (Old Church Slavonic variant)';
    case Deseret_Mormon = 'Deseret (Mormon)';
    case Devanagari_Nagari = 'Devanagari (Nagari)';
    case Dives_Akuru = 'Dives Akuru';
    case Dogra = 'Dogra';
    case Duployan_shorthand_Duployan_stenography = 'Duployan shorthand, Duployan stenography';
    case Egyptian_demotic = 'Egyptian demotic';
    case Egyptian_hieratic = 'Egyptian hieratic';
    case Egyptian_hieroglyphs = 'Egyptian hieroglyphs';
    case Elbasan = 'Elbasan';
    case Elymaic = 'Elymaic';
    case Ethiopic_Ge_ez = 'Ethiopic (Geʻez)';
    case Garay = 'Garay';
    case Georgian_Mkhedruli_and_Mtavruli = 'Georgian (Mkhedruli and Mtavruli)';
    case Glagolitic = 'Glagolitic';
    case Gothic = 'Gothic';
    case Grantha = 'Grantha';
    case Greek = 'Greek';
    case Gujarati = 'Gujarati';
    case Gunjala_Gondi = 'Gunjala Gondi';
    case Gurmukhi = 'Gurmukhi';
    case Gurung_Khema = 'Gurung Khema';
    case Han_Hanzi_Kanji_Hanja = 'Han (Hanzi, Kanji, Hanja)';
    case Han_Simplified_variant = 'Han (Simplified variant)';
    case Han_Traditional_variant = 'Han (Traditional variant)';
    case Han_Traditional_variant_with_Latin_alias_for_Hant_Latn = 'Han (Traditional variant) with Latin (alias for Hant + Latn)';
    case Han_with_Bopomofo_alias_for_Han_Bopomofo = 'Han with Bopomofo (alias for Han + Bopomofo)';
    case Hangul_Hangul_Hangeul = 'Hangul (Hangŭl, Hangeul)';
    case Hanifi_Rohingya = 'Hanifi Rohingya';
    case Hanunoo_Hanunoo = 'Hanunoo (Hanunóo)';
    case Hatran = 'Hatran';
    case Hebrew = 'Hebrew';
    case Hiragana = 'Hiragana';
    case Imperial_Aramaic = 'Imperial Aramaic';
    case Indus_Harappan = 'Indus (Harappan)';
    case Inscriptional_Pahlavi = 'Inscriptional Pahlavi';
    case Inscriptional_Parthian = 'Inscriptional Parthian';
    case Jamo_alias_for_Jamo_subset_of_Hangul = 'Jamo (alias for Jamo subset of Hangul)';
    case Japanese_alias_for_Han_Hiragana_Katakana = 'Japanese (alias for Han + Hiragana + Katakana)';
    case Japanese_syllabaries_alias_for_Hiragana_Katakana = 'Japanese syllabaries (alias for Hiragana + Katakana)';
    case Javanese = 'Javanese';
    case Jurchen = 'Jurchen';
    case Kaithi = 'Kaithi';
    case Kannada = 'Kannada';
    case Katakana = 'Katakana';
    case Kawi = 'Kawi';
    case Kayah_Li = 'Kayah Li';
    case Kharoshthi = 'Kharoshthi';
    case Khitan_large_script = 'Khitan large script';
    case Khitan_small_script = 'Khitan small script';
    case Khmer = 'Khmer';
    case Khojki = 'Khojki';
    case Khudawadi_Sindhi = 'Khudawadi, Sindhi';
    case Khutsuri_Asomtavruli_and_Nuskhuri = 'Khutsuri (Asomtavruli and Nuskhuri)';
    case Kirat_Rai = 'Kirat Rai';
    case Klingon_KLI_pIqaD = 'Klingon (KLI pIqaD)';
    case Korean_alias_for_Hangul_Han = 'Korean (alias for Hangul + Han)';
    case Kpelle = 'Kpelle';
    case Lao = 'Lao';
    case Latin = 'Latin';
    case Latin_Fraktur_variant = 'Latin (Fraktur variant)';
    case Latin_Gaelic_variant = 'Latin (Gaelic variant)';
    case Leke = 'Leke';
    case Lepcha_Rong = 'Lepcha (Róng)';
    case Limbu = 'Limbu';
    case Linear_A = 'Linear A';
    case Linear_B = 'Linear B';
    case Lisu_Fraser = 'Lisu (Fraser)';
    case Loma = 'Loma';
    case Lycian = 'Lycian';
    case Lydian = 'Lydian';
    case Mahajani = 'Mahajani';
    case Makasar = 'Makasar';
    case Malayalam = 'Malayalam';
    case Mandaic_Mandaean = 'Mandaic, Mandaean';
    case Manichaean = 'Manichaean';
    case Marchen = 'Marchen';
    case Masaram_Gondi = 'Masaram Gondi';
    case Mathematical_notation = 'Mathematical notation';
    case Mayan_hieroglyphs = 'Mayan hieroglyphs';
    case Medefaidrin_Oberi_Okaime_Oberi_Okaime = 'Medefaidrin (Oberi Okaime, Oberi Ɔkaimɛ)';
    case Meitei_Mayek_Meithei_Meetei = 'Meitei Mayek (Meithei, Meetei)';
    case Mende_Kikakui = 'Mende Kikakui';
    case Meroitic_Cursive = 'Meroitic Cursive';
    case Meroitic_Hieroglyphs = 'Meroitic Hieroglyphs';
    case Miao_Pollard = 'Miao (Pollard)';
    case Modi_Modi = 'Modi, Moḍī';
    case Mongolian = 'Mongolian';
    case Moon_Moon_code_Moon_script_Moon_type = 'Moon (Moon code, Moon script, Moon type)';
    case Mro_Mru = 'Mro, Mru';
    case Multani = 'Multani';
    case Myanmar_Burmese = 'Myanmar (Burmese)';
    case N_Ko = 'N’Ko';
    case Nabataean = 'Nabataean';
    case Nag_Mundari = 'Nag Mundari';
    case Nandinagari = 'Nandinagari';
    case Naxi_Dongba_naci_toba_Nakhi_Tomba = 'Naxi Dongba (na²¹ɕi³³ to³³ba²¹, Nakhi Tomba)';
    case Naxi_Geba_naci_geba_Na_Khi_Ggo_baw_Nakhi_Geba = 'Naxi Geba (na²¹ɕi³³ gʌ²¹ba²¹, \'Na-\'Khi ²Ggŏ-¹baw, Nakhi Geba)';
    case New_Tai_Lue = 'New Tai Lue';
    case Newa_Newar_Newari_Nepala_lipi = 'Newa, Newar, Newari, Nepāla lipi';
    case Nushu = 'Nüshu';
    case Nyiakeng_Puachue_Hmong = 'Nyiakeng Puachue Hmong';
    case Ogham = 'Ogham';
    case Ol_Chiki_Ol_Cemet_Ol_Santali = 'Ol Chiki (Ol Cemet’, Ol, Santali)';
    case Ol_Onal = 'Ol Onal';
    case Old_Hungarian_Hungarian_Runic = 'Old Hungarian (Hungarian Runic)';
    case Old_Italic_Etruscan_Oscan_etc = 'Old Italic (Etruscan, Oscan, etc.)';
    case Old_North_Arabian_Ancient_North_Arabian = 'Old North Arabian (Ancient North Arabian)';
    case Old_Permic = 'Old Permic';
    case Old_Persian = 'Old Persian';
    case Old_Sogdian = 'Old Sogdian';
    case Old_South_Arabian = 'Old South Arabian';
    case Old_Turkic_Orkhon_Runic = 'Old Turkic, Orkhon Runic';
    case Old_Uyghur = 'Old Uyghur';
    case Oriya_Odia = 'Oriya (Odia)';
    case Osage = 'Osage';
    case Osmanya = 'Osmanya';
    case Pahawh_Hmong = 'Pahawh Hmong';
    case Palmyrene = 'Palmyrene';
    case Pau_Cin_Hau = 'Pau Cin Hau';
    case Phags_pa = 'Phags-pa';
    case Phoenician = 'Phoenician';
    case Proto_Cuneiform = 'Proto-Cuneiform';
    case Proto_Elamite = 'Proto-Elamite';
    case Proto_Sinaitic = 'Proto-Sinaitic';
    case Psalter_Pahlavi = 'Psalter Pahlavi';
    case Ranjana = 'Ranjana';
    case Rejang_Redjang_Kaganga = 'Rejang (Redjang, Kaganga)';
    case Reserved_for_private_use_end = 'Reserved for private use (end)';
    case Reserved_for_private_use_start = 'Reserved for private use (start)';
    case Rongorongo = 'Rongorongo';
    case Runic = 'Runic';
    case Samaritan = 'Samaritan';
    case Sarati = 'Sarati';
    case Saurashtra = 'Saurashtra';
    case Sharada_Sarada = 'Sharada, Śāradā';
    case Shavian_Shaw = 'Shavian (Shaw)';
    case Shuishu = 'Shuishu';
    case Siddham_Siddham_Siddhamatrka = 'Siddham, Siddhaṃ, Siddhamātṛkā';
    case Sidetic = 'Sidetic';
    case SignWriting = 'SignWriting';
    case Sinhala = 'Sinhala';
    case Small_Seal = '(Small) Seal';
    case Sogdian = 'Sogdian';
    case Sora_Sompeng = 'Sora Sompeng';
    case Soyombo = 'Soyombo';
    case Sundanese = 'Sundanese';
    case Sunuwar = 'Sunuwar';
    case Syloti_Nagri = 'Syloti Nagri';
    case Symbols = 'Symbols';
    case Symbols_Emoji_variant = 'Symbols (Emoji variant)';
    case Syriac = 'Syriac';
    case Syriac_Eastern_variant = 'Syriac (Eastern variant)';
    case Syriac_Estrangelo_variant = 'Syriac (Estrangelo variant)';
    case Syriac_Western_variant = 'Syriac (Western variant)';
    case Tagalog_Baybayin_Alibata = 'Tagalog (Baybayin, Alibata)';
    case Tagbanwa = 'Tagbanwa';
    case Tai_Le = 'Tai Le';
    case Tai_Tham_Lanna = 'Tai Tham (Lanna)';
    case Tai_Viet = 'Tai Viet';
    case Tai_Yo = 'Tai Yo';
    case Takri_Takri_Tankri = 'Takri, Ṭākrī, Ṭāṅkrī';
    case Tamil = 'Tamil';
    case Tangsa = 'Tangsa';
    case Tangut = 'Tangut';
    case Telugu = 'Telugu';
    case Tengwar = 'Tengwar';
    case Thaana = 'Thaana';
    case Thai = 'Thai';
    case Tibetan = 'Tibetan';
    case Tifinagh_Berber = 'Tifinagh (Berber)';
    case Tirhuta = 'Tirhuta';
    case Todhri = 'Todhri';
    case Tolong_Siki = 'Tolong Siki';
    case Toto = 'Toto';
    case Tulu_Tigalari = 'Tulu-Tigalari';
    case Ugaritic = 'Ugaritic';
    case Unified_Canadian_Aboriginal_Syllabics = 'Unified Canadian Aboriginal Syllabics';
    case Vai = 'Vai';
    case Visible_Speech = 'Visible Speech';
    case Vithkuqi = 'Vithkuqi';
    case Wancho = 'Wancho';
    case Warang_Citi_Varang_Kshiti = 'Warang Citi (Varang Kshiti)';
    case Woleai = 'Woleai';
    case Yezidi = 'Yezidi';
    case Yi = 'Yi';
    case Zanabazar_Square_Zanabazarin_Dorboljin_Useg_Xewtee_Dorboljin_Bicig_Horizontal_Square_Script = 'Zanabazar Square (Zanabazarin Dörböljin Useg, Xewtee Dörböljin Bicig, Horizontal Square Script)';

    public function toScriptAlias(): ?ScriptAlias {
        return BackedEnum::tryFromName(ScriptAlias::class, $this->name);
    }

    public function toScriptNumber(): ScriptNumber {
        return BackedEnum::fromName(ScriptNumber::class, $this->name);
    }

    public function toScriptCode(): ScriptCode {
        return BackedEnum::fromName(ScriptCode::class, $this->name);
    }

    /**
     * @return ($string is non-empty-string ? non-empty-array<ScriptName> : array{}) in order of most matched multibyte characters
     *
     * Please note that not all Scripts are supported, only the ones that have the 'SupportedByPHPRegex' attribute.
     * For all other scripts, self::Code_for_undetermined_script will be returned
     */
    public static function allForString(string $string): array {
        return array_map(fn (ScriptAlias $scriptAlias) => $scriptAlias->toScriptName(), ScriptAlias::allForString($string));
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

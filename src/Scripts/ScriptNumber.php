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
enum ScriptNumber: string {
    case Adlam = '166';
    case Afaka = '439';
    case Ahom_Tai_Ahom = '338';
    case Anatolian_Hieroglyphs_Luwian_Hieroglyphs_Hittite_Hieroglyphs = '080';
    case Arabic = '160';
    case Arabic_Nastaliq_variant = '161';
    case Armenian = '230';
    case Avestan = '134';
    case Balinese = '360';
    case Bamum = '435';
    case Bassa_Vah = '259';
    case Batak = '365';
    case Bengali_Bangla = '325';
    case Beria_Erfe = '258';
    case Bhaiksuki = '334';
    case Blissymbols = '550';
    case Book_Pahlavi = '133';
    case Bopomofo = '285';
    case Brahmi = '300';
    case Braille = '570';
    case Buginese = '367';
    case Buhid = '372';
    case Carian = '201';
    case Caucasian_Albanian = '239';
    case Chakma = '349';
    case Cham = '358';
    case Cherokee = '445';
    case Chisoi = '298';
    case Chorasmian = '109';
    case Cirth = '291';
    case Code_for_inherited_script = '994';
    case Code_for_uncoded_script = '999';
    case Code_for_undetermined_script = '998';
    case Code_for_unwritten_documents = '997';
    case Coptic = '204';
    case Cuneiform_Sumero_Akkadian = '020';
    case Cypriot_syllabary = '403';
    case Cypro_Minoan = '402';
    case Cyrillic = '220';
    case Cyrillic_Old_Church_Slavonic_variant = '221';
    case Deseret_Mormon = '250';
    case Devanagari_Nagari = '315';
    case Dives_Akuru = '342';
    case Dogra = '328';
    case Duployan_shorthand_Duployan_stenography = '755';
    case Egyptian_demotic = '070';
    case Egyptian_hieratic = '060';
    case Egyptian_hieroglyphs = '050';
    case Elbasan = '226';
    case Elymaic = '128';
    case Ethiopic_Ge_ez = '430';
    case Garay = '164';
    case Georgian_Mkhedruli_and_Mtavruli = '240';
    case Glagolitic = '225';
    case Gothic = '206';
    case Grantha = '343';
    case Greek = '200';
    case Gujarati = '320';
    case Gunjala_Gondi = '312';
    case Gurmukhi = '310';
    case Gurung_Khema = '397';
    case Han_Hanzi_Kanji_Hanja = '500';
    case Han_Simplified_variant = '501';
    case Han_Traditional_variant = '502';
    case Han_Traditional_variant_with_Latin_alias_for_Hant_Latn = '504';
    case Han_with_Bopomofo_alias_for_Han_Bopomofo = '503';
    case Hangul_Hangul_Hangeul = '286';
    case Hanifi_Rohingya = '167';
    case Hanunoo_Hanunoo = '371';
    case Hatran = '127';
    case Hebrew = '125';
    case Hiragana = '410';
    case Imperial_Aramaic = '124';
    case Indus_Harappan = '610';
    case Inscriptional_Pahlavi = '131';
    case Inscriptional_Parthian = '130';
    case Jamo_alias_for_Jamo_subset_of_Hangul = '284';
    case Japanese_alias_for_Han_Hiragana_Katakana = '413';
    case Japanese_syllabaries_alias_for_Hiragana_Katakana = '412';
    case Javanese = '361';
    case Jurchen = '510';
    case Kaithi = '317';
    case Kannada = '345';
    case Katakana = '411';
    case Kawi = '368';
    case Kayah_Li = '357';
    case Kharoshthi = '305';
    case Khitan_large_script = '505';
    case Khitan_small_script = '288';
    case Khmer = '355';
    case Khojki = '322';
    case Khudawadi_Sindhi = '318';
    case Khutsuri_Asomtavruli_and_Nuskhuri = '241';
    case Kirat_Rai = '396';
    case Klingon_KLI_pIqaD = '293';
    case Korean_alias_for_Hangul_Han = '287';
    case Kpelle = '436';
    case Lao = '356';
    case Latin = '215';
    case Latin_Fraktur_variant = '217';
    case Latin_Gaelic_variant = '216';
    case Leke = '364';
    case Lepcha_Rong = '335';
    case Limbu = '336';
    case Linear_A = '400';
    case Linear_B = '401';
    case Lisu_Fraser = '399';
    case Loma = '437';
    case Lycian = '202';
    case Lydian = '116';
    case Mahajani = '314';
    case Makasar = '366';
    case Malayalam = '347';
    case Mandaic_Mandaean = '140';
    case Manichaean = '139';
    case Marchen = '332';
    case Masaram_Gondi = '313';
    case Mathematical_notation = '995';
    case Mayan_hieroglyphs = '090';
    case Medefaidrin_Oberi_Okaime_Oberi_Okaime = '265';
    case Meitei_Mayek_Meithei_Meetei = '337';
    case Mende_Kikakui = '438';
    case Meroitic_Cursive = '101';
    case Meroitic_Hieroglyphs = '100';
    case Miao_Pollard = '282';
    case Modi_Modi = '324';
    case Mongolian = '145';
    case Moon_Moon_code_Moon_script_Moon_type = '218';
    case Mro_Mru = '264';
    case Multani = '323';
    case Myanmar_Burmese = '350';
    case N_Ko = '165';
    case Nabataean = '159';
    case Nag_Mundari = '295';
    case Nandinagari = '311';
    case Naxi_Dongba_naci_toba_Nakhi_Tomba = '085';
    case Naxi_Geba_naci_geba_Na_Khi_Ggo_baw_Nakhi_Geba = '420';
    case New_Tai_Lue = '354';
    case Newa_Newar_Newari_Nepala_lipi = '333';
    case Nushu = '499';
    case Nyiakeng_Puachue_Hmong = '451';
    case Ogham = '212';
    case Ol_Chiki_Ol_Cemet_Ol_Santali = '261';
    case Ol_Onal = '296';
    case Old_Hungarian_Hungarian_Runic = '176';
    case Old_Italic_Etruscan_Oscan_etc = '210';
    case Old_North_Arabian_Ancient_North_Arabian = '106';
    case Old_Permic = '227';
    case Old_Persian = '030';
    case Old_Sogdian = '142';
    case Old_South_Arabian = '105';
    case Old_Turkic_Orkhon_Runic = '175';
    case Old_Uyghur = '143';
    case Oriya_Odia = '327';
    case Osage = '219';
    case Osmanya = '260';
    case Pahawh_Hmong = '450';
    case Palmyrene = '126';
    case Pau_Cin_Hau = '263';
    case Phags_pa = '331';
    case Phoenician = '115';
    case Proto_Cuneiform = '015';
    case Proto_Elamite = '016';
    case Proto_Sinaitic = '103';
    case Psalter_Pahlavi = '132';
    case Ranjana = '303';
    case Rejang_Redjang_Kaganga = '363';
    case Reserved_for_private_use_end = '949';
    case Reserved_for_private_use_start = '900';
    case Rongorongo = '620';
    case Runic = '211';
    case Samaritan = '123';
    case Sarati = '292';
    case Saurashtra = '344';
    case Sharada_Sarada = '319';
    case Shavian_Shaw = '281';
    case Shuishu = '530';
    case Siddham_Siddham_Siddhamatrka = '302';
    case Sidetic = '180';
    case SignWriting = '095';
    case Sinhala = '348';
    case Small_Seal = '590';
    case Sogdian = '141';
    case Sora_Sompeng = '398';
    case Soyombo = '329';
    case Sundanese = '362';
    case Sunuwar = '274';
    case Syloti_Nagri = '316';
    case Symbols = '996';
    case Symbols_Emoji_variant = '993';
    case Syriac = '135';
    case Syriac_Eastern_variant = '136';
    case Syriac_Estrangelo_variant = '138';
    case Syriac_Western_variant = '137';
    case Tagalog_Baybayin_Alibata = '370';
    case Tagbanwa = '373';
    case Tai_Le = '353';
    case Tai_Tham_Lanna = '351';
    case Tai_Viet = '359';
    case Tai_Yo = '380';
    case Takri_Takri_Tankri = '321';
    case Tamil = '346';
    case Tangsa = '275';
    case Tangut = '520';
    case Telugu = '340';
    case Tengwar = '290';
    case Thaana = '170';
    case Thai = '352';
    case Tibetan = '330';
    case Tifinagh_Berber = '120';
    case Tirhuta = '326';
    case Todhri = '229';
    case Tolong_Siki = '299';
    case Toto = '294';
    case Tulu_Tigalari = '341';
    case Ugaritic = '040';
    case Unified_Canadian_Aboriginal_Syllabics = '440';
    case Vai = '470';
    case Visible_Speech = '280';
    case Vithkuqi = '228';
    case Wancho = '283';
    case Warang_Citi_Varang_Kshiti = '262';
    case Woleai = '480';
    case Yezidi = '192';
    case Yi = '460';
    case Zanabazar_Square_Zanabazarin_Dorboljin_Useg_Xewtee_Dorboljin_Bicig_Horizontal_Square_Script = '339';

    public function toScriptAlias(): ?ScriptAlias {
        return BackedEnum::tryFromName(ScriptAlias::class, $this->name);
    }

    public function toScriptName(): ScriptName {
        return BackedEnum::fromName(ScriptName::class, $this->name);
    }

    public function toScriptCode(): ScriptCode {
        return BackedEnum::fromName(ScriptCode::class, $this->name);
    }

    /**
     * @return ($string is non-empty-string ? non-empty-array<ScriptNumber> : array{}) in order of most matched multibyte characters
     *
     * Please note that not all Scripts are supported, only the ones that have the 'SupportedByPHPRegex' attribute.
     * For all other scripts, self::Code_for_undetermined_script will be returned
     */
    public static function allForString(string $string): array {
        return array_map(fn (ScriptAlias $scriptAlias) => $scriptAlias->toScriptNumber(), ScriptAlias::allForString($string));
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

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Scripts;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Scripts\Attributes\SupportedByPHPRegex;
use PrinsFrank\Standards\ShouldNotHappenException;

/**
 * @standard ISO-15924
 * @source https://www.unicode.org/iso15924/iso15924-codes.html
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\ScriptMapping
 */
enum ScriptAlias: string {
    case Adlam = 'Adlam';
    case Ahom_Tai_Ahom = 'Ahom';
    case Anatolian_Hieroglyphs_Luwian_Hieroglyphs_Hittite_Hieroglyphs = 'Anatolian_Hieroglyphs';

    #[SupportedByPHPRegex]
    case Arabic = 'Arabic';

    #[SupportedByPHPRegex]
    case Armenian = 'Armenian';

    #[SupportedByPHPRegex]
    case Avestan = 'Avestan';

    #[SupportedByPHPRegex]
    case Balinese = 'Balinese';

    #[SupportedByPHPRegex]
    case Bamum = 'Bamum';
    case Bassa_Vah = 'Bassa_Vah';

    #[SupportedByPHPRegex]
    case Batak = 'Batak';

    #[SupportedByPHPRegex]
    case Bengali_Bangla = 'Bengali';
    case Bhaiksuki = 'Bhaiksuki';

    #[SupportedByPHPRegex]
    case Bopomofo = 'Bopomofo';

    #[SupportedByPHPRegex]
    case Brahmi = 'Brahmi';

    #[SupportedByPHPRegex]
    case Braille = 'Braille';

    #[SupportedByPHPRegex]
    case Buginese = 'Buginese';

    #[SupportedByPHPRegex]
    case Buhid = 'Buhid';

    #[SupportedByPHPRegex]
    case Carian = 'Carian';
    case Caucasian_Albanian = 'Caucasian_Albanian';

    #[SupportedByPHPRegex]
    case Chakma = 'Chakma';

    #[SupportedByPHPRegex]
    case Cham = 'Cham';

    #[SupportedByPHPRegex]
    case Cherokee = 'Cherokee';
    case Chorasmian = 'Chorasmian';

    #[SupportedByPHPRegex]
    case Code_for_inherited_script = 'Inherited';
    case Code_for_uncoded_script = 'Unknown';

    #[SupportedByPHPRegex]
    case Code_for_undetermined_script = 'Common';

    #[SupportedByPHPRegex]
    case Coptic = 'Coptic';

    #[SupportedByPHPRegex]
    case Cuneiform_Sumero_Akkadian = 'Cuneiform';

    #[SupportedByPHPRegex]
    case Cypriot_syllabary = 'Cypriot';
    case Cypro_Minoan = 'Cypro_Minoan';

    #[SupportedByPHPRegex]
    case Cyrillic = 'Cyrillic';

    #[SupportedByPHPRegex]
    case Deseret_Mormon = 'Deseret';

    #[SupportedByPHPRegex]
    case Devanagari_Nagari = 'Devanagari';
    case Dives_Akuru = 'Dives_Akuru';
    case Dogra = 'Dogra';
    case Duployan_shorthand_Duployan_stenography = 'Duployan';

    #[SupportedByPHPRegex]
    case Egyptian_hieroglyphs = 'Egyptian_Hieroglyphs';
    case Elbasan = 'Elbasan';
    case Elymaic = 'Elymaic';

    #[SupportedByPHPRegex]
    case Ethiopic_Ge_ez = 'Ethiopic';
    case Garay = 'Garay';

    #[SupportedByPHPRegex]
    case Georgian_Mkhedruli_and_Mtavruli = 'Georgian';

    #[SupportedByPHPRegex]
    case Glagolitic = 'Glagolitic';

    #[SupportedByPHPRegex]
    case Gothic = 'Gothic';
    case Grantha = 'Grantha';

    #[SupportedByPHPRegex]
    case Greek = 'Greek';

    #[SupportedByPHPRegex]
    case Gujarati = 'Gujarati';
    case Gunjala_Gondi = 'Gunjala_Gondi';

    #[SupportedByPHPRegex]
    case Gurmukhi = 'Gurmukhi';
    case Gurung_Khema = 'Gurung_Khema';

    #[SupportedByPHPRegex]
    case Han_Hanzi_Kanji_Hanja = 'Han';

    #[SupportedByPHPRegex]
    case Hangul_Hangul_Hangeul = 'Hangul';
    case Hanifi_Rohingya = 'Hanifi_Rohingya';

    #[SupportedByPHPRegex]
    case Hanunoo_Hanunoo = 'Hanunoo';
    case Hatran = 'Hatran';

    #[SupportedByPHPRegex]
    case Hebrew = 'Hebrew';

    #[SupportedByPHPRegex]
    case Hiragana = 'Hiragana';

    #[SupportedByPHPRegex]
    case Imperial_Aramaic = 'Imperial_Aramaic';

    #[SupportedByPHPRegex]
    case Inscriptional_Pahlavi = 'Inscriptional_Pahlavi';

    #[SupportedByPHPRegex]
    case Inscriptional_Parthian = 'Inscriptional_Parthian';
    case Japanese_syllabaries_alias_for_Hiragana_Katakana = 'Katakana_Or_Hiragana';

    #[SupportedByPHPRegex]
    case Javanese = 'Javanese';

    #[SupportedByPHPRegex]
    case Kaithi = 'Kaithi';

    #[SupportedByPHPRegex]
    case Kannada = 'Kannada';

    #[SupportedByPHPRegex]
    case Katakana = 'Katakana';
    case Kawi = 'Kawi';

    #[SupportedByPHPRegex]
    case Kayah_Li = 'Kayah_Li';

    #[SupportedByPHPRegex]
    case Kharoshthi = 'Kharoshthi';
    case Khitan_small_script = 'Khitan_Small_Script';

    #[SupportedByPHPRegex]
    case Khmer = 'Khmer';
    case Khojki = 'Khojki';
    case Khudawadi_Sindhi = 'Khudawadi';
    case Kirat_Rai = 'Kirat_Rai';

    #[SupportedByPHPRegex]
    case Lao = 'Lao';

    #[SupportedByPHPRegex]
    case Latin = 'Latin';

    #[SupportedByPHPRegex]
    case Lepcha_Rong = 'Lepcha';

    #[SupportedByPHPRegex]
    case Limbu = 'Limbu';
    case Linear_A = 'Linear_A';

    #[SupportedByPHPRegex]
    case Linear_B = 'Linear_B';

    #[SupportedByPHPRegex]
    case Lisu_Fraser = 'Lisu';

    #[SupportedByPHPRegex]
    case Lycian = 'Lycian';

    #[SupportedByPHPRegex]
    case Lydian = 'Lydian';
    case Mahajani = 'Mahajani';
    case Makasar = 'Makasar';

    #[SupportedByPHPRegex]
    case Malayalam = 'Malayalam';

    #[SupportedByPHPRegex]
    case Mandaic_Mandaean = 'Mandaic';
    case Manichaean = 'Manichaean';
    case Marchen = 'Marchen';
    case Masaram_Gondi = 'Masaram_Gondi';
    case Medefaidrin_Oberi_Okaime_Oberi_Okaime = 'Medefaidrin';

    #[SupportedByPHPRegex]
    case Meitei_Mayek_Meithei_Meetei = 'Meetei_Mayek';
    case Mende_Kikakui = 'Mende_Kikakui';

    #[SupportedByPHPRegex]
    case Meroitic_Cursive = 'Meroitic_Cursive';

    #[SupportedByPHPRegex]
    case Meroitic_Hieroglyphs = 'Meroitic_Hieroglyphs';

    #[SupportedByPHPRegex]
    case Miao_Pollard = 'Miao';
    case Modi_Modi = 'Modi';

    #[SupportedByPHPRegex]
    case Mongolian = 'Mongolian';
    case Mro_Mru = 'Mro';
    case Multani = 'Multani';

    #[SupportedByPHPRegex]
    case Myanmar_Burmese = 'Myanmar';

    #[SupportedByPHPRegex]
    case N_Ko = 'Nko';
    case Nabataean = 'Nabataean';
    case Nag_Mundari = 'Nag_Mundari';
    case Nandinagari = 'Nandinagari';

    #[SupportedByPHPRegex]
    case New_Tai_Lue = 'New_Tai_Lue';
    case Newa_Newar_Newari_Nepala_lipi = 'Newa';
    case Nushu = 'Nushu';
    case Nyiakeng_Puachue_Hmong = 'Nyiakeng_Puachue_Hmong';

    #[SupportedByPHPRegex]
    case Ogham = 'Ogham';

    #[SupportedByPHPRegex]
    case Ol_Chiki_Ol_Cemet_Ol_Santali = 'Ol_Chiki';
    case Ol_Onal = 'Ol_Onal';
    case Old_Hungarian_Hungarian_Runic = 'Old_Hungarian';

    #[SupportedByPHPRegex]
    case Old_Italic_Etruscan_Oscan_etc = 'Old_Italic';
    case Old_North_Arabian_Ancient_North_Arabian = 'Old_North_Arabian';
    case Old_Permic = 'Old_Permic';

    #[SupportedByPHPRegex]
    case Old_Persian = 'Old_Persian';
    case Old_Sogdian = 'Old_Sogdian';

    #[SupportedByPHPRegex]
    case Old_South_Arabian = 'Old_South_Arabian';

    #[SupportedByPHPRegex]
    case Old_Turkic_Orkhon_Runic = 'Old_Turkic';
    case Old_Uyghur = 'Old_Uyghur';

    #[SupportedByPHPRegex]
    case Oriya_Odia = 'Oriya';
    case Osage = 'Osage';

    #[SupportedByPHPRegex]
    case Osmanya = 'Osmanya';
    case Pahawh_Hmong = 'Pahawh_Hmong';
    case Palmyrene = 'Palmyrene';
    case Pau_Cin_Hau = 'Pau_Cin_Hau';

    #[SupportedByPHPRegex]
    case Phags_pa = 'Phags_Pa';

    #[SupportedByPHPRegex]
    case Phoenician = 'Phoenician';
    case Psalter_Pahlavi = 'Psalter_Pahlavi';

    #[SupportedByPHPRegex]
    case Rejang_Redjang_Kaganga = 'Rejang';

    #[SupportedByPHPRegex]
    case Runic = 'Runic';

    #[SupportedByPHPRegex]
    case Samaritan = 'Samaritan';

    #[SupportedByPHPRegex]
    case Saurashtra = 'Saurashtra';

    #[SupportedByPHPRegex]
    case Sharada_Sarada = 'Sharada';

    #[SupportedByPHPRegex]
    case Shavian_Shaw = 'Shavian';
    case Siddham_Siddham_Siddhamatrka = 'Siddham';
    case SignWriting = 'SignWriting';

    #[SupportedByPHPRegex]
    case Sinhala = 'Sinhala';
    case Sogdian = 'Sogdian';

    #[SupportedByPHPRegex]
    case Sora_Sompeng = 'Sora_Sompeng';
    case Soyombo = 'Soyombo';

    #[SupportedByPHPRegex]
    case Sundanese = 'Sundanese';
    case Sunuwar = 'Sunuwar';

    #[SupportedByPHPRegex]
    case Syloti_Nagri = 'Syloti_Nagri';

    #[SupportedByPHPRegex]
    case Syriac = 'Syriac';

    #[SupportedByPHPRegex]
    case Tagalog_Baybayin_Alibata = 'Tagalog';

    #[SupportedByPHPRegex]
    case Tagbanwa = 'Tagbanwa';

    #[SupportedByPHPRegex]
    case Tai_Le = 'Tai_Le';

    #[SupportedByPHPRegex]
    case Tai_Tham_Lanna = 'Tai_Tham';

    #[SupportedByPHPRegex]
    case Tai_Viet = 'Tai_Viet';

    #[SupportedByPHPRegex]
    case Takri_Takri_Tankri = 'Takri';

    #[SupportedByPHPRegex]
    case Tamil = 'Tamil';
    case Tangsa = 'Tangsa';
    case Tangut = 'Tangut';

    #[SupportedByPHPRegex]
    case Telugu = 'Telugu';

    #[SupportedByPHPRegex]
    case Thaana = 'Thaana';

    #[SupportedByPHPRegex]
    case Thai = 'Thai';

    #[SupportedByPHPRegex]
    case Tibetan = 'Tibetan';

    #[SupportedByPHPRegex]
    case Tifinagh_Berber = 'Tifinagh';
    case Tirhuta = 'Tirhuta';
    case Todhri = 'Todhri';
    case Toto = 'Toto';
    case Tulu_Tigalari = 'Tulu_Tigalari';

    #[SupportedByPHPRegex]
    case Ugaritic = 'Ugaritic';

    #[SupportedByPHPRegex]
    case Unified_Canadian_Aboriginal_Syllabics = 'Canadian_Aboriginal';

    #[SupportedByPHPRegex]
    case Vai = 'Vai';
    case Vithkuqi = 'Vithkuqi';
    case Wancho = 'Wancho';
    case Warang_Citi_Varang_Kshiti = 'Warang_Citi';
    case Yezidi = 'Yezidi';

    #[SupportedByPHPRegex]
    case Yi = 'Yi';
    case Zanabazar_Square_Zanabazarin_Dorboljin_Useg_Xewtee_Dorboljin_Bicig_Horizontal_Square_Script = 'Zanabazar_Square';

    public function toScriptNumber(): ScriptNumber {
        return BackedEnum::fromName(ScriptNumber::class, $this->name);
    }

    public function toScriptName(): ScriptName {
        return BackedEnum::fromName(ScriptName::class, $this->name);
    }

    public function toScriptCode(): ScriptCode {
        return BackedEnum::fromName(ScriptCode::class, $this->name);
    }

    public function isSupportedByPHPRegex(): bool {
        return BackedEnum::hasCaseAttribute($this, SupportedByPHPRegex::class);
    }

    /**
     * @return ($string is non-empty-string ? non-empty-array<ScriptAlias> : array{}) in order of most matched multibyte characters
     *
     * Please note that not all Scripts are supported, only the ones that have the 'SupportedByPHPRegex' attribute.
     * For all other scripts, self::Code_for_undetermined_script will be returned
     */
    public static function allForString(string $string): array {
        $supportedScripts = array_filter(self::cases(), fn (self $case) => $case->isSupportedByPHPRegex());
        if (preg_match_all('/' . implode('|', array_map(fn (self $case) => sprintf('(?P<%s>\p{%s}+)', $case->value, $case->value), $supportedScripts)) . '/u', $string, $matches, PREG_UNMATCHED_AS_NULL) === false) {
            // @codeCoverageIgnoreStart
            throw new ShouldNotHappenException(sprintf('preg_match_all returned error code %d with message %s', preg_last_error(), preg_last_error_msg()));
            // @codeCoverageIgnoreEnd
        }

        $scripts = [];
        foreach ($matches as $scriptName => $scriptMatchesArray) {
            if (is_int($scriptName) || array_diff($scriptMatchesArray, [null]) === []) {
                continue;
            }

            $scripts[$scriptName] ??= 0;
            /** @phpstan-ignore offsetAccess.notFound */
            $scripts[$scriptName] += array_sum(array_map(fn (string|null $scriptMatchChars) => mb_strlen($scriptMatchChars ?? ''), $scriptMatchesArray));
        }

        arsort($scripts);
        /** @phpstan-ignore missingType.checkedException, missingType.checkedException */
        return array_map(fn (string $scriptString) => self::from($scriptString), array_keys($scripts));
    }

    /** @return ($string is non-empty-string ? bool : false) */
    public static function hasMultipleForString(string $string): bool {
        return count(self::allForString($string)) > 1;
    }

    /** @return ($string is non-empty-string ? self : null) */
    public static function mostCommonInString(string $string): ?self {
        return self::allForString($string)[0] ?? null;
    }
}

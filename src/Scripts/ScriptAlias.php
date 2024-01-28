<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Scripts;

use PrinsFrank\Enums\BackedEnum;

/**
 * @standard ISO-15924
 * @source https://www.unicode.org/iso15924/iso15924-codes.html
 */
enum ScriptAlias: string
{
    case Adlam = 'Adlam';
    case Ahom_Tai_Ahom = 'Ahom';
    case Anatolian_Hieroglyphs_Luwian_Hieroglyphs_Hittite_Hieroglyphs = 'Anatolian_Hieroglyphs';
    case Arabic = 'Arabic';
    case Armenian = 'Armenian';
    case Avestan = 'Avestan';
    case Balinese = 'Balinese';
    case Bamum = 'Bamum';
    case Bassa_Vah = 'Bassa_Vah';
    case Batak = 'Batak';
    case Bengali_Bangla = 'Bengali';
    case Bhaiksuki = 'Bhaiksuki';
    case Bopomofo = 'Bopomofo';
    case Brahmi = 'Brahmi';
    case Braille = 'Braille';
    case Buginese = 'Buginese';
    case Buhid = 'Buhid';
    case Carian = 'Carian';
    case Caucasian_Albanian = 'Caucasian_Albanian';
    case Chakma = 'Chakma';
    case Cham = 'Cham';
    case Cherokee = 'Cherokee';
    case Chorasmian = 'Chorasmian';
    case Code_for_inherited_script = 'Inherited';
    case Code_for_uncoded_script = 'Unknown';
    case Code_for_undetermined_script = 'Common';
    case Coptic = 'Coptic';
    case Cuneiform_Sumero_Akkadian = 'Cuneiform';
    case Cypriot_syllabary = 'Cypriot';
    case Cypro_Minoan = 'Cypro_Minoan';
    case Cyrillic = 'Cyrillic';
    case Deseret_Mormon = 'Deseret';
    case Devanagari_Nagari = 'Devanagari';
    case Dives_Akuru = 'Dives_Akuru';
    case Dogra = 'Dogra';
    case Duployan_shorthand_Duployan_stenography = 'Duployan';
    case Egyptian_hieroglyphs = 'Egyptian_Hieroglyphs';
    case Elbasan = 'Elbasan';
    case Elymaic = 'Elymaic';
    case Ethiopic_Ge_ez = 'Ethiopic';
    case Georgian_Mkhedruli_and_Mtavruli = 'Georgian';
    case Glagolitic = 'Glagolitic';
    case Gothic = 'Gothic';
    case Grantha = 'Grantha';
    case Greek = 'Greek';
    case Gujarati = 'Gujarati';
    case Gunjala_Gondi = 'Gunjala_Gondi';
    case Gurmukhi = 'Gurmukhi';
    case Han_Hanzi_Kanji_Hanja = 'Han';
    case Hangul_Hangul_Hangeul = 'Hangul';
    case Hanifi_Rohingya = 'Hanifi_Rohingya';
    case Hanunoo_Hanunoo = 'Hanunoo';
    case Hatran = 'Hatran';
    case Hebrew = 'Hebrew';
    case Hiragana = 'Hiragana';
    case Imperial_Aramaic = 'Imperial_Aramaic';
    case Inscriptional_Pahlavi = 'Inscriptional_Pahlavi';
    case Inscriptional_Parthian = 'Inscriptional_Parthian';
    case Japanese_syllabaries_alias_for_Hiragana_Katakana = 'Katakana_Or_Hiragana';
    case Javanese = 'Javanese';
    case Kaithi = 'Kaithi';
    case Kannada = 'Kannada';
    case Katakana = 'Katakana';
    case Kawi = 'Kawi';
    case Kayah_Li = 'Kayah_Li';
    case Kharoshthi = 'Kharoshthi';
    case Khitan_small_script = 'Khitan_Small_Script';
    case Khmer = 'Khmer';
    case Khojki = 'Khojki';
    case Khudawadi_Sindhi = 'Khudawadi';
    case Lao = 'Lao';
    case Latin = 'Latin';
    case Lepcha_Rong = 'Lepcha';
    case Limbu = 'Limbu';
    case Linear_A = 'Linear_A';
    case Linear_B = 'Linear_B';
    case Lisu_Fraser = 'Lisu';
    case Lycian = 'Lycian';
    case Lydian = 'Lydian';
    case Mahajani = 'Mahajani';
    case Makasar = 'Makasar';
    case Malayalam = 'Malayalam';
    case Mandaic_Mandaean = 'Mandaic';
    case Manichaean = 'Manichaean';
    case Marchen = 'Marchen';
    case Masaram_Gondi = 'Masaram_Gondi';
    case Medefaidrin_Oberi_Okaime_Oberi_Okaime = 'Medefaidrin';
    case Meitei_Mayek_Meithei_Meetei = 'Meetei_Mayek';
    case Mende_Kikakui = 'Mende_Kikakui';
    case Meroitic_Cursive = 'Meroitic_Cursive';
    case Meroitic_Hieroglyphs = 'Meroitic_Hieroglyphs';
    case Miao_Pollard = 'Miao';
    case Modi_Modi = 'Modi';
    case Mongolian = 'Mongolian';
    case Mro_Mru = 'Mro';
    case Multani = 'Multani';
    case Myanmar_Burmese = 'Myanmar';
    case N_Ko = 'Nko';
    case Nabataean = 'Nabataean';
    case Nag_Mundari = 'Nag_Mundari';
    case Nandinagari = 'Nandinagari';
    case New_Tai_Lue = 'New_Tai_Lue';
    case Newa_Newar_Newari_Nepala_lipi = 'Newa';
    case Nushu = 'Nushu';
    case Nyiakeng_Puachue_Hmong = 'Nyiakeng_Puachue_Hmong';
    case Ogham = 'Ogham';
    case Ol_Chiki_Ol_Cemet_Ol_Santali = 'Ol_Chiki';
    case Old_Hungarian_Hungarian_Runic = 'Old_Hungarian';
    case Old_Italic_Etruscan_Oscan_etc = 'Old_Italic';
    case Old_North_Arabian_Ancient_North_Arabian = 'Old_North_Arabian';
    case Old_Permic = 'Old_Permic';
    case Old_Persian = 'Old_Persian';
    case Old_Sogdian = 'Old_Sogdian';
    case Old_South_Arabian = 'Old_South_Arabian';
    case Old_Turkic_Orkhon_Runic = 'Old_Turkic';
    case Old_Uyghur = 'Old_Uyghur';
    case Oriya_Odia = 'Oriya';
    case Osage = 'Osage';
    case Osmanya = 'Osmanya';
    case Pahawh_Hmong = 'Pahawh_Hmong';
    case Palmyrene = 'Palmyrene';
    case Pau_Cin_Hau = 'Pau_Cin_Hau';
    case Phags_pa = 'Phags_Pa';
    case Phoenician = 'Phoenician';
    case Psalter_Pahlavi = 'Psalter_Pahlavi';
    case Rejang_Redjang_Kaganga = 'Rejang';
    case Runic = 'Runic';
    case Samaritan = 'Samaritan';
    case Saurashtra = 'Saurashtra';
    case Sharada_Sarada = 'Sharada';
    case Shavian_Shaw = 'Shavian';
    case Siddham_Siddham_Siddhamatrka = 'Siddham';
    case SignWriting = 'SignWriting';
    case Sinhala = 'Sinhala';
    case Sogdian = 'Sogdian';
    case Sora_Sompeng = 'Sora_Sompeng';
    case Soyombo = 'Soyombo';
    case Sundanese = 'Sundanese';
    case Syloti_Nagri = 'Syloti_Nagri';
    case Syriac = 'Syriac';
    case Tagalog_Baybayin_Alibata = 'Tagalog';
    case Tagbanwa = 'Tagbanwa';
    case Tai_Le = 'Tai_Le';
    case Tai_Tham_Lanna = 'Tai_Tham';
    case Tai_Viet = 'Tai_Viet';
    case Takri_Takri_Tankri = 'Takri';
    case Tamil = 'Tamil';
    case Tangsa = 'Tangsa';
    case Tangut = 'Tangut';
    case Telugu = 'Telugu';
    case Thaana = 'Thaana';
    case Thai = 'Thai';
    case Tibetan = 'Tibetan';
    case Tifinagh_Berber = 'Tifinagh';
    case Tirhuta = 'Tirhuta';
    case Toto = 'Toto';
    case Ugaritic = 'Ugaritic';
    case Unified_Canadian_Aboriginal_Syllabics = 'Canadian_Aboriginal';
    case Vai = 'Vai';
    case Vithkuqi = 'Vithkuqi';
    case Wancho = 'Wancho';
    case Warang_Citi_Varang_Kshiti = 'Warang_Citi';
    case Yezidi = 'Yezidi';
    case Yi = 'Yi';
    case Zanabazar_Square_Zanabazarin_Dorboljin_Useg_Xewtee_Dorboljin_Bicig_Horizontal_Square_Script = 'Zanabazar_Square';

    public function toScriptNumber(): ScriptNumber
    {
        return BackedEnum::fromName(ScriptNumber::class, $this->name);
    }

    public function toScriptName(): ScriptName
    {
        return BackedEnum::fromName(ScriptName::class, $this->name);
    }

    public function toScriptCode(): ScriptCode
    {
        return BackedEnum::fromName(ScriptCode::class, $this->name);
    }
}

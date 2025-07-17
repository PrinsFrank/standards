<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

/**
 * @source https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\LanguageSubTagMapping
 */
enum LanguageTagVariant: string {
    case ALA_LC_Romanization_1997_edition = 'alalc97';
    case Academic_governmental_variant_of_Belarusian_as = '1959acad';
    case Akhmimic_dialect_of_Coptic = 'akhmimic';
    case Akuapem_Twi = 'akuapem';
    case Allattaasitaamut = 'kleinsch';
    case Americanist_Phonetic_Notation = 'fonnapa';
    case Ancient_Egyptian_hieroglyphs_encoded_in_Manuel_de_Codage = 'mdcegyp';
    case Ancient_Egyptian_in_Leiden_Unified_Transliteration = 'leidentr';
    case Ancient_Egyptian_transliteration_encoded_in_Manuel_de = 'mdctrans';
    case Anglo_Cornish = 'cornu';
    case Anpezo_standard_of_Ladin = 'anpezo';
    case Aranese = 'aranes';
    case Arkaika_Esperanto = 'arkaika';
    case Ashanti_Twi = 'asante';
    case Aukan_dialect = 'ndyuka';
    case Auvergnat = 'auvern';
    case BCI_Blissymbolics = 'bcizbl';
    case BCI_Blissymbolics_AV = 'bciav';
    case Basic_English = 'basiceng';
    case Belarusian_in_Taraskievica_orthography = 'tarask';
    case Biscayan_dialect_of_Basque = 'biscayan';
    case Black_American_Sign_Language_dialect = 'blasl';
    case Bohairic_dialect_of_Coptic = 'bohairic';
    case Boni_dialect = 'aluku';
    case Boontling = 'boont';
    case Bornholmsk = 'bornholm';
    case Buddhist_Hybrid_Sanskrit = 'bauddha';
    case Bulgarian_in_1899_orthography = 'ivanchov';
    case Cisalpine = 'cisaup';
    case Classic_Volapuk = 'rigik';
    case Classical_Occitan_orthography = 'grclass';
    case Common_Cornish_orthography_of_Revived_Cornish = 'kkcor';
    case Early_Modern_English_1500_1700 = 'emodeng';
    case Early_Modern_French = '1694acad';
    case Epic_Sanskrit = 'itihasa';
    case Fascia_standard_of_Ladin = 'fascia';
    case Fayyumic_dialect_of_Coptic = 'fayyumic';
    case Fodom_standard_of_Ladin = 'fodom';
    case Gallo = 'gallo';
    case Gascon = 'gascon';
    case German_orthography_of_1996 = '1996';
    case Gherdeina_standard_of_Ladin = 'gherd';
    case Hepburn_romanization = 'hepburn';
    case Interlingua_de_Peano = 'peano';
    case International_Phonetic_Alphabet = 'fonipa';
    case Italian_inspired_Occitan_orthography = 'grital';
    case Jauer_dialect_of_Romansh = 'jauer';
    case Jyutping_Cantonese_Romanization = 'jyutping';
    case Kernowek_Standard = 'kscor';
    case Kirshenbaum_Phonetic_Alphabet = 'fonkirsh';
    case Languedocien = 'lengadoc';
    case Late_Middle_French_to_1606 = '1606nict';
    case Latvian_orthography_used_before_1920s_veca_druka = 'vecdruka';
    case Limousin = 'lemosin';
    case Lycopolitan_alias_Subakhmimic_dialect_of_Coptic = 'lycopol';
    case Mesokemic_alias_Oxyrhynchite_dialect_of_Coptic = 'mesokem';
    case Mistralian_or_Mistralian_inspired_Occitan_orthography = 'grmistr';
    case Modern_Volapuk = 'nulik';
    case Monotonic_Greek = 'monoton';
    case Nadiza_dialect = 'nedis';
    case Newfoundland_English = 'newfound';
    case Nicard = 'nicard';
    case Norwegian_in_Hognorsk_High_Norwegian_orthography = 'hognorsk';
    case Occitan_variants_of_the_Croissant_area = 'creiss';
    case Orthographic_formulation_of_1943_Official_in_Brazil = 'abl1943';
    case Ostgronlandsk = 'tunumiit';
    case Oxford_English_Dictionary_spelling = 'oxendict';
    case Pahawh_Hmong_Final_Version_orthography = 'pahawh4';
    case Pahawh_Hmong_Second_Stage_Reduced_orthography = 'pahawh2';
    case Pahawh_Hmong_Third_Stage_Reduced_orthography = 'pahawh3';
    case Pamaka_dialect = 'pamaka';
    case Peh_oe_ji_orthography_romanization = 'pehoeji';
    case Petrine_orthography = 'petr1708';
    case Pinyin_romanization = 'pinyin';
    case Polytonic_Greek = 'polyton';
    case Portuguese_Brazilian_Orthographic_Convention_of_1945 = 'colb1945';
    case Portuguese_Language_Orthographic_Agreement_of_1990_Acordo = 'ao1990';
    case Post_1917_Russian_orthography = 'luna1918';
    case Provencal = 'provenc';
    case Puter_idiom_of_Romansh = 'puter';
    case Rezijan = 'rozaj';
    case Rumantsch_Grischun = 'rumgr';
    case Sahidic_dialect_of_Coptic = 'sahidic';
    case Scottish_Standard_English = 'scotland';
    case Scouse = 'scouse';
    case Serbian_with_Ekavian_pronunciation = 'ekavsk';
    case Serbian_with_Ijekavian_pronunciation = 'ijekavsk';
    case Simplified_form = 'simple';
    case Slovene_in_Bohoric_alphabet = 'bohoric';
    case Slovene_in_Dajnko_alphabet = 'dajnko';
    case Slovene_in_Metelko_alphabet = 'metelko';
    case South_Jutish = 'synnejyl';
    case Spanglish = 'spanglis';
    case Standard_H_system_orthographic_fallback_for_spelling = 'hsistemo';
    case Standard_X_system_orthographic_fallback_for_spelling = 'xsistemo';
    case Standardized_Resian_orthography = '1994';
    case Surmiran_idiom_of_Romansh = 'surmiran';
    case Sursilvan_idiom_of_Romansh = 'sursilv';
    case Sutsilvan_idiom_of_Romansh = 'sutsilv';
    case Tai_lo_orthography_romanization = 'tailo';
    case The_Balanka_dialect_of_Anii = 'balanka';
    case The_Barlavento_dialect_group_of_Kabuverdianu = 'barla';
    case The_Bila_dialect_of_Resian = 'biske';
    case The_Ha_Noi_variant_of_Vietnamese = 'hanoi';
    case The_Hue_province_Thua_Thien_variant_of_Vietnamese = 'huett';
    case The_Kociewie_dialect_of_Polish = 'kociewie';
    case The_Latgalian_language_orthography_codified_in_1929 = 'ltg1929';
    case The_Latgalian_language_orthography_codified_in_the_language = 'ltg2007';
    case The_Lipovec_dialect_of_Resian = 'lipaw';
    case The_Njiva_dialect_of_Resian = 'njiva';
    case The_Osojane_dialect_of_Resian = 'osojs';
    case The_Sai_Gon_variant_of_Vietnamese = 'saigon';
    case The_Solbica_dialect_of_Resian = 'solba';
    case The_Sotavento_dialect_group_of_Kabuverdianu = 'sotav';
    case The_Viennese_dialect_of_German = 'viennese';
    case Tongyong_Pinyin_romanization = 'tongyong';
    case Traditional_German_orthography = '1901';
    case Ulster_dialect_of_Scots = 'ulster';
    case Unified_Cornish_Revised_orthography_of_Revived_Cornish = 'ucrcor';
    case Unified_Cornish_orthography_of_Revived_Cornish = 'uccor';
    case Unified_Turkic_Latin_Alphabet_Historical = 'baku1926';
    case Unifon_phonetic_alphabet = 'unifon';
    case Uralic_Phonetic_Alphabet = 'fonupa';
    case Val_Badia_standard_of_Ladin = 'valbadia';
    case Valencian = 'valencia';
    case Vallader_idiom_of_Romansh = 'vallader';
    case Vivaro_Alpine = 'vivaraup';
    case Wade_Giles_romanization = 'wadegile';
    case X_SAMPA_transcription = 'fonxsamp';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Classical_Sanskrit = 'laukika';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Eastern_Armenian = 'arevela';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Hepburn_romanization_Library_of_Congress_method = 'heploc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Vedic_Sanskrit = 'vaidika';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case Western_Armenian = 'arevmda';
}

<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Country\Subdivision;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Subdivision\Attributes\Name;
use PrinsFrank\Standards\Country\Subdivision\Attributes\SameAsCountry;
use PrinsFrank\Standards\Language\LanguageAlpha2;

/**
 * @standard ISO3166_1
 * @source https://www.iso.org/obp/ui/#search/code/
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\CountryMapping
 */
enum CountrySubdivision: string {
    #[Name('Badakhshān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Badakhshan = 'AF-BDS';

    #[Name('Bādghīs', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Badghis = 'AF-BDG';

    #[Name('Baghlān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Baghlan = 'AF-BGL';

    #[Name('Balkh', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Balkh = 'AF-BAL';

    #[Name('Bāmyān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Bamyan = 'AF-BAM';

    #[Name('Dāykundī', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Daykundi = 'AF-DAY';

    #[Name('Farāh', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Farah = 'AF-FRA';

    #[Name('Fāryāb', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Faryab = 'AF-FYB';

    #[Name('Ghaznī', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Ghazni = 'AF-GHA';

    #[Name('Ghōr', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Ghor = 'AF-GHO';

    #[Name('Helmand', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Helmand = 'AF-HEL';

    #[Name('Herāt', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Herat = 'AF-HER';

    #[Name('Jowzjān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Jowzjan = 'AF-JOW';

    #[Name('Kābul', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Kabul = 'AF-KAB';

    #[Name('Kandahār', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Kandahar = 'AF-KAN';

    #[Name('Kāpīsā', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Kapisa = 'AF-KAP';

    #[Name('Khōst', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Khost = 'AF-KHO';

    #[Name('Kunaṟ', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Kunar = 'AF-KNR';

    #[Name('Kunduz', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Kunduz = 'AF-KDZ';

    #[Name('Laghmān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Laghman = 'AF-LAG';

    #[Name('Lōgar', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Logar = 'AF-LOG';

    #[Name('Nangarhār', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Nangarhar = 'AF-NAN';

    #[Name('Nīmrōz', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Nimroz = 'AF-NIM';

    #[Name('Nūristān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Nuristan = 'AF-NUR';

    #[Name('Paktīkā', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Paktika = 'AF-PKA';

    #[Name('Paktiyā', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Paktiya = 'AF-PIA';

    #[Name('Panjshayr', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Panjshayr = 'AF-PAN';

    #[Name('Parwān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Parwan = 'AF-PAR';

    #[Name('Samangān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Samangan = 'AF-SAM';

    #[Name('Sar-e Pul', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Sar_e_Pul = 'AF-SAR';

    #[Name('Takhār', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Takhar = 'AF-TAK';

    #[Name('Uruzgān', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Uruzgan = 'AF-URU';

    #[Name('Wardak', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Wardak = 'AF-WAR';

    #[Name('Zābul', [LanguageAlpha2::Pushto_Pashto, LanguageAlpha2::Persian], 'BGN/PCGN 2007', null)]
    case Afghanistan_province_Zabul = 'AF-ZAB';

    #[Name('Berat', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Berat = 'AL-01';

    #[Name('Dibër', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Diber = 'AL-09';

    #[Name('Durrës', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Durres = 'AL-02';

    #[Name('Elbasan', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Elbasan = 'AL-03';

    #[Name('Fier', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Fier = 'AL-04';

    #[Name('Gjirokastër', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Gjirokaster = 'AL-05';

    #[Name('Korçë', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Korce = 'AL-06';

    #[Name('Kukës', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Kukes = 'AL-07';

    #[Name('Lezhë', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Lezhe = 'AL-08';

    #[Name('Shkodër', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Shkoder = 'AL-10';

    #[Name('Tiranë', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Tirane = 'AL-11';

    #[Name('Vlorë', [LanguageAlpha2::Albanian], null, null)]
    case Albania_county_Vlore = 'AL-12';

    #[Name('Adrar', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Adrar = 'DZ-01';

    #[Name('Aïn Defla', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Ain_Defla = 'DZ-44';

    #[Name('Aïn Témouchent', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Ain_Temouchent = 'DZ-46';

    #[Name('Alger', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Alger = 'DZ-16';

    #[Name('Annaba', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Annaba = 'DZ-23';

    #[Name('Batna', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Batna = 'DZ-05';

    #[Name('Béchar', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Bechar = 'DZ-08';

    #[Name('Béjaïa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Bejaia = 'DZ-06';

    #[Name('Béni Abbès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Beni_Abbes = 'DZ-52';

    #[Name('Biskra', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Biskra = 'DZ-07';

    #[Name('Blida', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Blida = 'DZ-09';

    #[Name('Bordj Badji Mokhtar', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Bordj_Badji_Mokhtar = 'DZ-50';

    #[Name('Bordj Bou Arréridj', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Bordj_Bou_Arreridj = 'DZ-34';

    #[Name('Bouira', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Bouira = 'DZ-10';

    #[Name('Boumerdès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Boumerdes = 'DZ-35';

    #[Name('Chlef', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Chlef = 'DZ-02';

    #[Name('Constantine', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Constantine = 'DZ-25';

    #[Name('Djanet', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Djanet = 'DZ-56';

    #[Name('Djelfa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Djelfa = 'DZ-17';

    #[Name('El Bayadh', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_El_Bayadh = 'DZ-32';

    #[Name('El Meghaier', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_El_Meghaier = 'DZ-57';

    #[Name('El Meniaa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_El_Meniaa = 'DZ-58';

    #[Name('El Oued', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_El_Oued = 'DZ-39';

    #[Name('El Tarf', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_El_Tarf = 'DZ-36';

    #[Name('Ghardaïa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Ghardaia = 'DZ-47';

    #[Name('Guelma', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Guelma = 'DZ-24';

    #[Name('Illizi', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Illizi = 'DZ-33';

    #[Name('In Guezzam', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_In_Guezzam = 'DZ-54';

    #[Name('In Salah', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_In_Salah = 'DZ-53';

    #[Name('Jijel', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Jijel = 'DZ-18';

    #[Name('Khenchela', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Khenchela = 'DZ-40';

    #[Name('Laghouat', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Laghouat = 'DZ-03';

    #[Name('M\'sila', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_M_sila = 'DZ-28';

    #[Name('Mascara', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Mascara = 'DZ-29';

    #[Name('Médéa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Medea = 'DZ-26';

    #[Name('Mila', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Mila = 'DZ-43';

    #[Name('Mostaganem', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Mostaganem = 'DZ-27';

    #[Name('Naama', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Naama = 'DZ-45';

    #[Name('Oran', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Oran = 'DZ-31';

    #[Name('Ouargla', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Ouargla = 'DZ-30';

    #[Name('Ouled Djellal', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Ouled_Djellal = 'DZ-51';

    #[Name('Oum el Bouaghi', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Oum_el_Bouaghi = 'DZ-04';

    #[Name('Relizane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Relizane = 'DZ-48';

    #[Name('Saïda', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Saida = 'DZ-20';

    #[Name('Sétif', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Setif = 'DZ-19';

    #[Name('Sidi Bel Abbès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Sidi_Bel_Abbes = 'DZ-22';

    #[Name('Skikda', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Skikda = 'DZ-21';

    #[Name('Souk Ahras', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Souk_Ahras = 'DZ-41';

    #[Name('Tamanrasset', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tamanrasset = 'DZ-11';

    #[Name('Tébessa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tebessa = 'DZ-12';

    #[Name('Tiaret', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tiaret = 'DZ-14';

    #[Name('Timimoun', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Timimoun = 'DZ-49';

    #[Name('Tindouf', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tindouf = 'DZ-37';

    #[Name('Tipaza', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tipaza = 'DZ-42';

    #[Name('Tissemsilt', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tissemsilt = 'DZ-38';

    #[Name('Tizi Ouzou', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tizi_Ouzou = 'DZ-15';

    #[Name('Tlemcen', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Tlemcen = 'DZ-13';

    #[Name('Touggourt', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Algeria_province_Touggourt = 'DZ-55';

    #[Name('Andorra la Vella', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_Andorra_la_Vella = 'AD-07';

    #[Name('Canillo', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_Canillo = 'AD-02';

    #[Name('Encamp', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_Encamp = 'AD-03';

    #[Name('Escaldes-Engordany', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_Escaldes_Engordany = 'AD-08';

    #[Name('La Massana', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_La_Massana = 'AD-04';

    #[Name('Ordino', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_Ordino = 'AD-05';

    #[Name('Sant Julià de Lòria', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Andorra_parish_Sant_Julia_de_Loria = 'AD-06';

    #[Name('Bengo', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Bengo = 'AO-BGO';

    #[Name('Benguela', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Benguela = 'AO-BGU';

    #[Name('Bié', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Bie = 'AO-BIE';

    #[Name('Cabinda', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Cabinda = 'AO-CAB';

    #[Name('Cuando Cubango', [LanguageAlpha2::Portuguese], null, 'Kuando Kubango')]
    case Angola_province_Cuando_Cubango = 'AO-CCU';

    #[Name('Cuanza-Norte', [LanguageAlpha2::Portuguese], null, 'Kwanza Norte')]
    case Angola_province_Cuanza_Norte = 'AO-CNO';

    #[Name('Cuanza-Sul', [LanguageAlpha2::Portuguese], null, 'Kwanza Sul')]
    case Angola_province_Cuanza_Sul = 'AO-CUS';

    #[Name('Cunene', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Cunene = 'AO-CNN';

    #[Name('Huambo', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Huambo = 'AO-HUA';

    #[Name('Huíla', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Huila = 'AO-HUI';

    #[Name('Luanda', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Luanda = 'AO-LUA';

    #[Name('Lunda-Norte', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Lunda_Norte = 'AO-LNO';

    #[Name('Lunda-Sul', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Lunda_Sul = 'AO-LSU';

    #[Name('Malange', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Malange = 'AO-MAL';

    #[Name('Moxico', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Moxico = 'AO-MOX';

    #[Name('Namibe', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Namibe = 'AO-NAM';

    #[Name('Uíge', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Uige = 'AO-UIG';

    #[Name('Zaire', [LanguageAlpha2::Portuguese], null, null)]
    case Angola_province_Zaire = 'AO-ZAI';

    #[Name('Barbuda', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_dependency_Barbuda = 'AG-10';

    #[Name('Redonda', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_dependency_Redonda = 'AG-11';

    #[Name('Saint George', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_parish_Saint_George = 'AG-03';

    #[Name('Saint John', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_parish_Saint_John = 'AG-04';

    #[Name('Saint Mary', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_parish_Saint_Mary = 'AG-05';

    #[Name('Saint Paul', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_parish_Saint_Paul = 'AG-06';

    #[Name('Saint Peter', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_parish_Saint_Peter = 'AG-07';

    #[Name('Saint Philip', [LanguageAlpha2::English], null, null)]
    case Antigua_Barbuda_parish_Saint_Philip = 'AG-08';

    #[Name('Ciudad Autónoma de Buenos Aires', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_city_Ciudad_Autonoma_de_Buenos_Aires = 'AR-C';

    #[Name('Buenos Aires', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Buenos_Aires = 'AR-B';

    #[Name('Catamarca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Catamarca = 'AR-K';

    #[Name('Chaco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Chaco = 'AR-H';

    #[Name('Chubut', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Chubut = 'AR-U';

    #[Name('Córdoba', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Cordoba = 'AR-X';

    #[Name('Corrientes', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Corrientes = 'AR-W';

    #[Name('Entre Ríos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Entre_Rios = 'AR-E';

    #[Name('Formosa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Formosa = 'AR-P';

    #[Name('Jujuy', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Jujuy = 'AR-Y';

    #[Name('La Pampa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_La_Pampa = 'AR-L';

    #[Name('La Rioja', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_La_Rioja = 'AR-F';

    #[Name('Mendoza', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Mendoza = 'AR-M';

    #[Name('Misiones', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Misiones = 'AR-N';

    #[Name('Neuquén', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Neuquen = 'AR-Q';

    #[Name('Río Negro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Rio_Negro = 'AR-R';

    #[Name('Salta', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Salta = 'AR-A';

    #[Name('San Juan', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_San_Juan = 'AR-J';

    #[Name('San Luis', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_San_Luis = 'AR-D';

    #[Name('Santa Cruz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Santa_Cruz = 'AR-Z';

    #[Name('Santa Fe', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Santa_Fe = 'AR-S';

    #[Name('Santiago del Estero', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Santiago_del_Estero = 'AR-G';

    #[Name('Tierra del Fuego', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Tierra_del_Fuego = 'AR-V';

    #[Name('Tucumán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Argentina_province_Tucuman = 'AR-T';

    #[Name('Erevan', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_city_Erevan = 'AM-ER';

    #[Name('Aragac̣otn', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Aragacotn = 'AM-AG';

    #[Name('Ararat', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Ararat = 'AM-AR';

    #[Name('Armavir', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Armavir = 'AM-AV';

    #[Name('Geġark\'unik\'', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Gegark_unik = 'AM-GR';

    #[Name('Kotayk\'', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Kotayk = 'AM-KT';

    #[Name('Loṙi', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Lori = 'AM-LO';

    #[Name('Širak', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Sirak = 'AM-SH';

    #[Name('Syunik\'', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Syunik = 'AM-SU';

    #[Name('Tavuš', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Tavus = 'AM-TV';

    #[Name('Vayoć Jor', [LanguageAlpha2::Armenian], 'ISO 9985:1996', null)]
    case Armenia_region_Vayoc_Jor = 'AM-VD';

    #[Name('New South Wales', [LanguageAlpha2::English], null, null)]
    case Australia_state_New_South_Wales = 'AU-NSW';

    #[Name('Queensland', [LanguageAlpha2::English], null, null)]
    case Australia_state_Queensland = 'AU-QLD';

    #[Name('South Australia', [LanguageAlpha2::English], null, null)]
    case Australia_state_South_Australia = 'AU-SA';

    #[Name('Tasmania', [LanguageAlpha2::English], null, null)]
    case Australia_state_Tasmania = 'AU-TAS';

    #[Name('Victoria', [LanguageAlpha2::English], null, null)]
    case Australia_state_Victoria = 'AU-VIC';

    #[Name('Western Australia', [LanguageAlpha2::English], null, null)]
    case Australia_state_Western_Australia = 'AU-WA';

    #[Name('Australian Capital Territory', [LanguageAlpha2::English], null, null)]
    case Australia_territory_Australian_Capital_Territory = 'AU-ACT';

    #[Name('Northern Territory', [LanguageAlpha2::English], null, null)]
    case Australia_territory_Northern_Territory = 'AU-NT';

    #[Name('Burgenland', [LanguageAlpha2::German], null, null)]
    case Austria_state_Burgenland = 'AT-1';

    #[Name('Kärnten', [LanguageAlpha2::German], null, null)]
    case Austria_state_Karnten = 'AT-2';

    #[Name('Niederösterreich', [LanguageAlpha2::German], null, null)]
    case Austria_state_Niederosterreich = 'AT-3';

    #[Name('Oberösterreich', [LanguageAlpha2::German], null, null)]
    case Austria_state_Oberosterreich = 'AT-4';

    #[Name('Salzburg', [LanguageAlpha2::German], null, null)]
    case Austria_state_Salzburg = 'AT-5';

    #[Name('Steiermark', [LanguageAlpha2::German], null, null)]
    case Austria_state_Steiermark = 'AT-6';

    #[Name('Tirol', [LanguageAlpha2::German], null, null)]
    case Austria_state_Tirol = 'AT-7';

    #[Name('Vorarlberg', [LanguageAlpha2::German], null, null)]
    case Austria_state_Vorarlberg = 'AT-8';

    #[Name('Wien', [LanguageAlpha2::German], null, null)]
    case Austria_state_Wien = 'AT-9';

    #[Name('Naxçıvan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_autonomous_republic_Naxcivan = 'AZ-NX';

    #[Name('Bakı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Baki = 'AZ-BA';

    #[Name('Gəncə', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Gnc = 'AZ-GA';

    #[Name('Lənkəran', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Lnkran = 'AZ-LA';

    #[Name('Mingəçevir', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Mingcevir = 'AZ-MI';

    #[Name('Naftalan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Naftalan = 'AZ-NA';

    #[Name('Naxçıvan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Naxcivan = 'AZ-NV';

    #[Name('Şirvan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Sirvan = 'AZ-SR';

    #[Name('Şəki', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Ski = 'AZ-SA';

    #[Name('Sumqayıt', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Sumqayit = 'AZ-SM';

    #[Name('Xankəndi', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Xankndi = 'AZ-XA';

    #[Name('Yevlax', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_municipality_Yevlax = 'AZ-YE';

    #[Name('Abşeron', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Abseron = 'AZ-ABS';

    #[Name('Ağcabədi', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Agcabdi = 'AZ-AGC';

    #[Name('Ağdam', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Agdam = 'AZ-AGM';

    #[Name('Ağdaş', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Agdas = 'AZ-AGS';

    #[Name('Ağstafa', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Agstafa = 'AZ-AGA';

    #[Name('Ağsu', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Agsu = 'AZ-AGU';

    #[Name('Astara', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Astara = 'AZ-AST';

    #[Name('Babək', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Babk = 'AZ-BAB';

    #[Name('Balakən', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Balakn = 'AZ-BAL';

    #[Name('Beyləqan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Beylqan = 'AZ-BEY';

    #[Name('Biləsuvar', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Bilsuvar = 'AZ-BIL';

    #[Name('Bərdə', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Brd = 'AZ-BAR';

    #[Name('Cəbrayıl', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Cbrayil = 'AZ-CAB';

    #[Name('Cəlilabad', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Clilabad = 'AZ-CAL';

    #[Name('Culfa', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Culfa = 'AZ-CUL';

    #[Name('Daşkəsən', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Dasksn = 'AZ-DAS';

    #[Name('Füzuli', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Fuzuli = 'AZ-FUZ';

    #[Name('Gədəbəy', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Gdby = 'AZ-GAD';

    #[Name('Goranboy', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Goranboy = 'AZ-GOR';

    #[Name('Göyçay', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Goycay = 'AZ-GOY';

    #[Name('Göygöl', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Goygol = 'AZ-GYG';

    #[Name('Hacıqabul', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Haciqabul = 'AZ-HAC';

    #[Name('İmişli', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Imisli = 'AZ-IMI';

    #[Name('İsmayıllı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Ismayilli = 'AZ-ISM';

    #[Name('Kəlbəcər', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Klbcr = 'AZ-KAL';

    #[Name('Kǝngǝrli', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Kngrli = 'AZ-KAN';

    #[Name('Kürdəmir', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Kurdmir = 'AZ-KUR';

    #[Name('Laçın', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Lacin = 'AZ-LAC';

    #[Name('Lerik', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Lerik = 'AZ-LER';

    #[Name('Lənkəran', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Lnkran = 'AZ-LAN';

    #[Name('Masallı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Masalli = 'AZ-MAS';

    #[Name('Neftçala', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Neftcala = 'AZ-NEF';

    #[Name('Oğuz', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Oguz = 'AZ-OGU';

    #[Name('Ordubad', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Ordubad = 'AZ-ORD';

    #[Name('Qax', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Qax = 'AZ-QAX';

    #[Name('Qazax', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Qazax = 'AZ-QAZ';

    #[Name('Qəbələ', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Qbl = 'AZ-QAB';

    #[Name('Qobustan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Qobustan = 'AZ-QOB';

    #[Name('Quba', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Quba = 'AZ-QBA';

    #[Name('Qubadlı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Qubadli = 'AZ-QBI';

    #[Name('Qusar', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Qusar = 'AZ-QUS';

    #[Name('Saatlı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Saatli = 'AZ-SAT';

    #[Name('Sabirabad', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Sabirabad = 'AZ-SAB';

    #[Name('Şabran', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Sabran = 'AZ-SBN';

    #[Name('Şahbuz', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Sahbuz = 'AZ-SAH';

    #[Name('Salyan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Salyan = 'AZ-SAL';

    #[Name('Şamaxı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Samaxi = 'AZ-SMI';

    #[Name('Samux', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Samux = 'AZ-SMX';

    #[Name('Sədərək', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Sdrk = 'AZ-SAD';

    #[Name('Siyəzən', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Siyzn = 'AZ-SIY';

    #[Name('Şəki', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Ski = 'AZ-SAK';

    #[Name('Şəmkir', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Smkir = 'AZ-SKR';

    #[Name('Şərur', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Srur = 'AZ-SAR';

    #[Name('Şuşa', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Susa = 'AZ-SUS';

    #[Name('Tovuz', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Tovuz = 'AZ-TOV';

    #[Name('Tərtər', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Trtr = 'AZ-TAR';

    #[Name('Ucar', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Ucar = 'AZ-UCA';

    #[Name('Xaçmaz', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Xacmaz = 'AZ-XAC';

    #[Name('Xızı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Xizi = 'AZ-XIZ';

    #[Name('Xocalı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Xocali = 'AZ-XCI';

    #[Name('Xocavənd', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Xocavnd = 'AZ-XVD';

    #[Name('Yardımlı', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Yardimli = 'AZ-YAR';

    #[Name('Yevlax', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Yevlax = 'AZ-YEV';

    #[Name('Zaqatala', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Zaqatala = 'AZ-ZAQ';

    #[Name('Zəngilan', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Zngilan = 'AZ-ZAN';

    #[Name('Zərdab', [LanguageAlpha2::Azerbaijani], null, null)]
    case Azerbaijan_rayon_Zrdab = 'AZ-ZAR';

    #[Name('Acklins', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Acklins = 'BS-AK';

    #[Name('Berry Islands', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Berry_Islands = 'BS-BY';

    #[Name('Bimini', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Bimini = 'BS-BI';

    #[Name('Black Point', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Black_Point = 'BS-BP';

    #[Name('Cat Island', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Cat_Island = 'BS-CI';

    #[Name('Central Abaco', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Central_Abaco = 'BS-CO';

    #[Name('Central Andros', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Central_Andros = 'BS-CS';

    #[Name('Central Eleuthera', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Central_Eleuthera = 'BS-CE';

    #[Name('City of Freeport', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_City_of_Freeport = 'BS-FP';

    #[Name('Crooked Island and Long Cay', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Crooked_Island_and_Long_Cay = 'BS-CK';

    #[Name('East Grand Bahama', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_East_Grand_Bahama = 'BS-EG';

    #[Name('Exuma', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Exuma = 'BS-EX';

    #[Name('Grand Cay', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Grand_Cay = 'BS-GC';

    #[Name('Harbour Island', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Harbour_Island = 'BS-HI';

    #[Name('Hope Town', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Hope_Town = 'BS-HT';

    #[Name('Inagua', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Inagua = 'BS-IN';

    #[Name('Long Island', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Long_Island = 'BS-LI';

    #[Name('Mangrove Cay', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Mangrove_Cay = 'BS-MC';

    #[Name('Mayaguana', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Mayaguana = 'BS-MG';

    #[Name('Moore\'s Island', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Moore_s_Island = 'BS-MI';

    #[Name('North Abaco', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_North_Abaco = 'BS-NO';

    #[Name('North Andros', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_North_Andros = 'BS-NS';

    #[Name('North Eleuthera', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_North_Eleuthera = 'BS-NE';

    #[Name('Ragged Island', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Ragged_Island = 'BS-RI';

    #[Name('Rum Cay', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Rum_Cay = 'BS-RC';

    #[Name('San Salvador', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_San_Salvador = 'BS-SS';

    #[Name('South Abaco', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_South_Abaco = 'BS-SO';

    #[Name('South Andros', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_South_Andros = 'BS-SA';

    #[Name('South Eleuthera', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_South_Eleuthera = 'BS-SE';

    #[Name('Spanish Wells', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_Spanish_Wells = 'BS-SW';

    #[Name('West Grand Bahama', [LanguageAlpha2::English], null, null)]
    case Bahamas_district_West_Grand_Bahama = 'BS-WG';

    #[Name('New Providence', [LanguageAlpha2::English], null, null)]
    case Bahamas_island_New_Providence = 'BS-NP';

    #[Name('Al ‘Āşimah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Al Manāmah')]
    case Bahrain_governorate_Al_Asimah = 'BH-13';

    #[Name('Al Janūbīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Bahrain_governorate_Al_Janubiyah = 'BH-14';

    #[Name('Al Muḩarraq', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Bahrain_governorate_Al_Muharraq = 'BH-15';

    #[Name('Ash Shamālīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Bahrain_governorate_Ash_Shamaliyah = 'BH-17';

    #[Name('Bagerhat', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Bagerhat = 'BD-05';

    #[Name('Bandarban', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Bandarban = 'BD-01';

    #[Name('Barguna', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Barguna = 'BD-02';

    #[Name('Barishal', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Barishal = 'BD-06';

    #[Name('Bhola', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Bhola = 'BD-07';

    #[Name('Bogura', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Bogura = 'BD-03';

    #[Name('Brahmanbaria', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Brahmanbaria = 'BD-04';

    #[Name('Chandpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Chandpur = 'BD-09';

    #[Name('Chapai Nawabganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Chapai_Nawabganj = 'BD-45';

    #[Name('Chattogram', [LanguageAlpha2::Bengali], 'conventional names', 'Chittagong')]
    case Bangladesh_district_Chattogram = 'BD-10';

    #[Name('Chuadanga', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Chuadanga = 'BD-12';

    #[Name('Cox\'s Bazar', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Cox_s_Bazar = 'BD-11';

    #[Name('Cumilla', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Cumilla = 'BD-08';

    #[Name('Dhaka', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Dhaka = 'BD-13';

    #[Name('Dinajpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Dinajpur = 'BD-14';

    #[Name('Faridpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Faridpur = 'BD-15';

    #[Name('Feni', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Feni = 'BD-16';

    #[Name('Gaibandha', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Gaibandha = 'BD-19';

    #[Name('Gazipur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Gazipur = 'BD-18';

    #[Name('Gopalganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Gopalganj = 'BD-17';

    #[Name('Habiganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Habiganj = 'BD-20';

    #[Name('Jamalpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Jamalpur = 'BD-21';

    #[Name('Jashore', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Jashore = 'BD-22';

    #[Name('Jhalakathi', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Jhalakathi = 'BD-25';

    #[Name('Jhenaidah', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Jhenaidah = 'BD-23';

    #[Name('Joypurhat', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Joypurhat = 'BD-24';

    #[Name('Khagrachhari', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Khagrachhari = 'BD-29';

    #[Name('Khulna', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Khulna = 'BD-27';

    #[Name('Kishoreganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Kishoreganj = 'BD-26';

    #[Name('Kurigram', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Kurigram = 'BD-28';

    #[Name('Kushtia', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Kushtia = 'BD-30';

    #[Name('Lakshmipur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Lakshmipur = 'BD-31';

    #[Name('Lalmonirhat', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Lalmonirhat = 'BD-32';

    #[Name('Madaripur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Madaripur = 'BD-36';

    #[Name('Magura', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Magura = 'BD-37';

    #[Name('Manikganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Manikganj = 'BD-33';

    #[Name('Meherpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Meherpur = 'BD-39';

    #[Name('Moulvibazar', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Moulvibazar = 'BD-38';

    #[Name('Munshiganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Munshiganj = 'BD-35';

    #[Name('Mymensingh', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Mymensingh = 'BD-34';

    #[Name('Naogaon', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Naogaon = 'BD-48';

    #[Name('Narail', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Narail = 'BD-43';

    #[Name('Narayanganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Narayanganj = 'BD-40';

    #[Name('Narsingdi', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Narsingdi = 'BD-42';

    #[Name('Natore', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Natore = 'BD-44';

    #[Name('Netrakona', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Netrakona = 'BD-41';

    #[Name('Nilphamari', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Nilphamari = 'BD-46';

    #[Name('Noakhali', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Noakhali = 'BD-47';

    #[Name('Pabna', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Pabna = 'BD-49';

    #[Name('Panchagarh', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Panchagarh = 'BD-52';

    #[Name('Patuakhali', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Patuakhali = 'BD-51';

    #[Name('Pirojpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Pirojpur = 'BD-50';

    #[Name('Rajbari', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Rajbari = 'BD-53';

    #[Name('Rajshahi', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Rajshahi = 'BD-54';

    #[Name('Rangamati', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Rangamati = 'BD-56';

    #[Name('Rangpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Rangpur = 'BD-55';

    #[Name('Satkhira', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Satkhira = 'BD-58';

    #[Name('Shariatpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Shariatpur = 'BD-62';

    #[Name('Sherpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Sherpur = 'BD-57';

    #[Name('Sirajganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Sirajganj = 'BD-59';

    #[Name('Sunamganj', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Sunamganj = 'BD-61';

    #[Name('Sylhet', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Sylhet = 'BD-60';

    #[Name('Tangail', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Tangail = 'BD-63';

    #[Name('Thakurgaon', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_district_Thakurgaon = 'BD-64';

    #[Name('Barishal', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Barishal = 'BD-A';

    #[Name('Chattogram', [LanguageAlpha2::Bengali], 'conventional names', 'Chittagong')]
    case Bangladesh_division_Chattogram = 'BD-B';

    #[Name('Dhaka', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Dhaka = 'BD-C';

    #[Name('Khulna', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Khulna = 'BD-D';

    #[Name('Mymensingh', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Mymensingh = 'BD-H';

    #[Name('Rajshahi', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Rajshahi = 'BD-E';

    #[Name('Rangpur', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Rangpur = 'BD-F';

    #[Name('Sylhet', [LanguageAlpha2::Bengali], 'conventional names', null)]
    case Bangladesh_division_Sylhet = 'BD-G';

    #[Name('Christ Church', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Christ_Church = 'BB-01';

    #[Name('Saint Andrew', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Andrew = 'BB-02';

    #[Name('Saint George', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_George = 'BB-03';

    #[Name('Saint James', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_James = 'BB-04';

    #[Name('Saint John', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_John = 'BB-05';

    #[Name('Saint Joseph', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Joseph = 'BB-06';

    #[Name('Saint Lucy', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Lucy = 'BB-07';

    #[Name('Saint Michael', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Michael = 'BB-08';

    #[Name('Saint Peter', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Peter = 'BB-09';

    #[Name('Saint Philip', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Philip = 'BB-10';

    #[Name('Saint Thomas', [LanguageAlpha2::English], null, null)]
    case Barbados_parish_Saint_Thomas = 'BB-11';

    #[Name('Gorod Minsk', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Gorod Minsk', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Horad Minsk', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Horad Minsk', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    case Belarus_city_Gorod_Minsk = 'BY-HM';

    #[Name('Bresckaja voblasć', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Brestskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Brestskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Brestskaya voblasts\'', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    case Belarus_oblast_Bresckaja_voblasc = 'BY-BR';

    #[Name('Gomel\'skaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Gomel\'skaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Homieĺskaja voblasć', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Homyel\'skaya voblasts\'', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    case Belarus_oblast_Gomel_skaja_oblast = 'BY-HO';

    #[Name('Grodnenskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Grodnenskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Hrodzienskaja voblasć', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Hrodzyenskaya voblasts\'', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    case Belarus_oblast_Grodnenskaja_oblast = 'BY-HR';

    #[Name('Mahilioŭskaja voblasć', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Mahilyowskaya voblasts\'', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    #[Name('Mogilevskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Mogilevskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Belarus_oblast_Mahiliouskaja_voblasc = 'BY-MA';

    #[Name('Minskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Minskaja voblasć', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Minskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Minskaya voblasts\'', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    case Belarus_oblast_Minskaja_oblast = 'BY-MI';

    #[Name('Viciebskaja voblasć', [LanguageAlpha2::Belarusian], 'UN X/6 2012', null)]
    #[Name('Vitebskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Vitebskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Vitsyebskaya voblasts\'', [LanguageAlpha2::Belarusian], 'BGN/PCGN 1979', null)]
    case Belarus_oblast_Viciebskaja_voblasc = 'BY-VI';

    #[Name('Antwerpen', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Belgium_province_Antwerpen = 'BE-VAN';

    #[Name('Brabant wallon', [LanguageAlpha2::French], null, null)]
    case Belgium_province_Brabant_wallon = 'BE-WBR';

    #[Name('Hainaut', [LanguageAlpha2::French], null, null)]
    case Belgium_province_Hainaut = 'BE-WHT';

    #[Name('Liège', [LanguageAlpha2::French], null, null)]
    case Belgium_province_Liege = 'BE-WLG';

    #[Name('Limburg', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Belgium_province_Limburg = 'BE-VLI';

    #[Name('Luxembourg', [LanguageAlpha2::French], null, null)]
    case Belgium_province_Luxembourg = 'BE-WLX';

    #[Name('Namur', [LanguageAlpha2::French], null, null)]
    case Belgium_province_Namur = 'BE-WNA';

    #[Name('Oost-Vlaanderen', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Belgium_province_Oost_Vlaanderen = 'BE-VOV';

    #[Name('Vlaams-Brabant', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Belgium_province_Vlaams_Brabant = 'BE-VBR';

    #[Name('West-Vlaanderen', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Belgium_province_West_Vlaanderen = 'BE-VWV';

    #[Name('Brussels Hoofdstedelijk Gewest', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[Name('Bruxelles-Capitale, Région de', [LanguageAlpha2::French], null, null)]
    case Belgium_region_Brussels_Hoofdstedelijk_Gewest = 'BE-BRU';

    #[Name('Vlaams Gewest', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Belgium_region_Vlaams_Gewest = 'BE-VLG';

    #[Name('wallonne, Région', [LanguageAlpha2::French], null, null)]
    case Belgium_region_wallonne_Region = 'BE-WAL';

    #[Name('Belize', [LanguageAlpha2::English], null, null)]
    case Belize_district_Belize = 'BZ-BZ';

    #[Name('Cayo', [LanguageAlpha2::English], null, null)]
    case Belize_district_Cayo = 'BZ-CY';

    #[Name('Corozal', [LanguageAlpha2::English], null, null)]
    case Belize_district_Corozal = 'BZ-CZL';

    #[Name('Orange Walk', [LanguageAlpha2::English], null, null)]
    case Belize_district_Orange_Walk = 'BZ-OW';

    #[Name('Stann Creek', [LanguageAlpha2::English], null, null)]
    case Belize_district_Stann_Creek = 'BZ-SC';

    #[Name('Toledo', [LanguageAlpha2::English], null, null)]
    case Belize_district_Toledo = 'BZ-TOL';

    #[Name('Alibori', [LanguageAlpha2::French], null, null)]
    case Benin_department_Alibori = 'BJ-AL';

    #[Name('Atacora', [LanguageAlpha2::French], null, null)]
    case Benin_department_Atacora = 'BJ-AK';

    #[Name('Atlantique', [LanguageAlpha2::French], null, null)]
    case Benin_department_Atlantique = 'BJ-AQ';

    #[Name('Borgou', [LanguageAlpha2::French], null, null)]
    case Benin_department_Borgou = 'BJ-BO';

    #[Name('Collines', [LanguageAlpha2::French], null, null)]
    case Benin_department_Collines = 'BJ-CO';

    #[Name('Couffo', [LanguageAlpha2::French], null, null)]
    case Benin_department_Couffo = 'BJ-KO';

    #[Name('Donga', [LanguageAlpha2::French], null, null)]
    case Benin_department_Donga = 'BJ-DO';

    #[Name('Littoral', [LanguageAlpha2::French], null, null)]
    case Benin_department_Littoral = 'BJ-LI';

    #[Name('Mono', [LanguageAlpha2::French], null, null)]
    case Benin_department_Mono = 'BJ-MO';

    #[Name('Ouémé', [LanguageAlpha2::French], null, null)]
    case Benin_department_Oueme = 'BJ-OU';

    #[Name('Plateau', [LanguageAlpha2::French], null, null)]
    case Benin_department_Plateau = 'BJ-PL';

    #[Name('Zou', [LanguageAlpha2::French], null, null)]
    case Benin_department_Zou = 'BJ-ZO';

    #[Name('Bumthang', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Bumthang = 'BT-33';

    #[Name('Chhukha', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Chhukha = 'BT-12';

    #[Name('Dagana', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Dagana = 'BT-22';

    #[Name('Gasa', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Gasa = 'BT-GA';

    #[Name('Haa', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Haa = 'BT-13';

    #[Name('Lhuentse', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Lhuentse = 'BT-44';

    #[Name('Monggar', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Monggar = 'BT-42';

    #[Name('Paro', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Paro = 'BT-11';

    #[Name('Pema Gatshel', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Pema_Gatshel = 'BT-43';

    #[Name('Punakha', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Punakha = 'BT-23';

    #[Name('Samdrup Jongkhar', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Samdrup_Jongkhar = 'BT-45';

    #[Name('Samtse', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Samtse = 'BT-14';

    #[Name('Sarpang', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Sarpang = 'BT-31';

    #[Name('Thimphu', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Thimphu = 'BT-15';

    #[Name('Trashi Yangtse', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Trashi_Yangtse = 'BT-TY';

    #[Name('Trashigang', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Trashigang = 'BT-41';

    #[Name('Trongsa', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Trongsa = 'BT-32';

    #[Name('Tsirang', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Tsirang = 'BT-21';

    #[Name('Wangdue Phodrang', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Wangdue_Phodrang = 'BT-24';

    #[Name('Zhemgang', [LanguageAlpha2::Dzongkha], 'National 1997', null)]
    case Bhutan_district_Zhemgang = 'BT-34';

    #[Name('Chuquisaca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Chuquisaca = 'BO-H';

    #[Name('Cochabamba', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Cochabamba = 'BO-C';

    #[Name('El Beni', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_El_Beni = 'BO-B';

    #[Name('La Paz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_La_Paz = 'BO-L';

    #[Name('Oruro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Oruro = 'BO-O';

    #[Name('Pando', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Pando = 'BO-N';

    #[Name('Potosí', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Potosi = 'BO-P';

    #[Name('Santa Cruz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Santa_Cruz = 'BO-S';

    #[Name('Tarija', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Bolivia_department_Tarija = 'BO-T';

    #[Name('Brčko distrikt', [LanguageAlpha2::Croatian, LanguageAlpha2::Bosnian], null, null)]
    #[Name('Brčko distrikt', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Bosnia_Herzegovina_district_with_special_status_Brcko_distrikt = 'BA-BRC';

    #[Name('Federacija Bosne i Hercegovine', [LanguageAlpha2::Croatian, LanguageAlpha2::Bosnian], null, null)]
    #[Name('Federacija Bosne i Hercegovine', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Bosnia_Herzegovina_entity_Federacija_Bosne_i_Hercegovine = 'BA-BIH';

    #[Name('Republika Srpska', [LanguageAlpha2::Croatian, LanguageAlpha2::Bosnian], null, null)]
    #[Name('Republika Srpska', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Bosnia_Herzegovina_entity_Republika_Srpska = 'BA-SRP';

    #[Name('Francistown', [LanguageAlpha2::English], null, null)]
    case Botswana_city_Francistown = 'BW-FR';

    #[Name('Gaborone', [LanguageAlpha2::English], null, null)]
    case Botswana_city_Gaborone = 'BW-GA';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Central = 'BW-CE';

    #[Name('Chobe', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Chobe = 'BW-CH';

    #[Name('Ghanzi', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Ghanzi = 'BW-GH';

    #[Name('Kgalagadi', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Kgalagadi = 'BW-KG';

    #[Name('Kgatleng', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Kgatleng = 'BW-KL';

    #[Name('Kweneng', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Kweneng = 'BW-KW';

    #[Name('North East', [LanguageAlpha2::English], null, null)]
    case Botswana_district_North_East = 'BW-NE';

    #[Name('North West', [LanguageAlpha2::English], null, null)]
    case Botswana_district_North_West = 'BW-NW';

    #[Name('South East', [LanguageAlpha2::English], null, null)]
    case Botswana_district_South_East = 'BW-SE';

    #[Name('Southern', [LanguageAlpha2::English], null, null)]
    case Botswana_district_Southern = 'BW-SO';

    #[Name('Jwaneng', [LanguageAlpha2::English], null, null)]
    case Botswana_town_Jwaneng = 'BW-JW';

    #[Name('Lobatse', [LanguageAlpha2::English], null, null)]
    case Botswana_town_Lobatse = 'BW-LO';

    #[Name('Selibe Phikwe', [LanguageAlpha2::English], null, null)]
    case Botswana_town_Selibe_Phikwe = 'BW-SP';

    #[Name('Sowa Town', [LanguageAlpha2::English], null, null)]
    case Botswana_town_Sowa_Town = 'BW-ST';

    #[Name('Distrito Federal', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_federal_district_Distrito_Federal = 'BR-DF';

    #[Name('Acre', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Acre = 'BR-AC';

    #[Name('Alagoas', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Alagoas = 'BR-AL';

    #[Name('Amapá', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Amapa = 'BR-AP';

    #[Name('Amazonas', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Amazonas = 'BR-AM';

    #[Name('Bahia', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Bahia = 'BR-BA';

    #[Name('Ceará', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Ceara = 'BR-CE';

    #[Name('Espírito Santo', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Espirito_Santo = 'BR-ES';

    #[Name('Goiás', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Goias = 'BR-GO';

    #[Name('Maranhão', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Maranhao = 'BR-MA';

    #[Name('Mato Grosso', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Mato_Grosso = 'BR-MT';

    #[Name('Mato Grosso do Sul', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Mato_Grosso_do_Sul = 'BR-MS';

    #[Name('Minas Gerais', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Minas_Gerais = 'BR-MG';

    #[Name('Pará', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Para = 'BR-PA';

    #[Name('Paraíba', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Paraiba = 'BR-PB';

    #[Name('Paraná', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Parana = 'BR-PR';

    #[Name('Pernambuco', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Pernambuco = 'BR-PE';

    #[Name('Piauí', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Piaui = 'BR-PI';

    #[Name('Rio Grande do Norte', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Rio_Grande_do_Norte = 'BR-RN';

    #[Name('Rio Grande do Sul', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Rio_Grande_do_Sul = 'BR-RS';

    #[Name('Rio de Janeiro', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Rio_de_Janeiro = 'BR-RJ';

    #[Name('Rondônia', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Rondonia = 'BR-RO';

    #[Name('Roraima', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Roraima = 'BR-RR';

    #[Name('Santa Catarina', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Santa_Catarina = 'BR-SC';

    #[Name('São Paulo', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Sao_Paulo = 'BR-SP';

    #[Name('Sergipe', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Sergipe = 'BR-SE';

    #[Name('Tocantins', [LanguageAlpha2::Portuguese], null, null)]
    case Brazil_state_Tocantins = 'BR-TO';

    #[Name('Belait', [LanguageAlpha2::Malay, LanguageAlpha2::English], null, null)]
    case Brunei_district_Belait = 'BN-BE';

    #[Name('Brunei dan Muara', [LanguageAlpha2::Malay], null, null)]
    #[Name('Brunei-Muara', [LanguageAlpha2::English], null, null)]
    case Brunei_district_Brunei_dan_Muara = 'BN-BM';

    #[Name('Temburong', [LanguageAlpha2::Malay, LanguageAlpha2::English], null, null)]
    case Brunei_district_Temburong = 'BN-TE';

    #[Name('Tutong', [LanguageAlpha2::Malay, LanguageAlpha2::English], null, null)]
    case Brunei_district_Tutong = 'BN-TU';

    #[Name('Blagoevgrad', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Blagoevgrad = 'BG-01';

    #[Name('Burgas', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Burgas = 'BG-02';

    #[Name('Dobrich', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Dobrich = 'BG-08';

    #[Name('Gabrovo', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Gabrovo = 'BG-07';

    #[Name('Haskovo', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Haskovo = 'BG-26';

    #[Name('Kardzhali', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Kardzhali = 'BG-09';

    #[Name('Kyustendil', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Kyustendil = 'BG-10';

    #[Name('Lovech', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Lovech = 'BG-11';

    #[Name('Montana', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Montana = 'BG-12';

    #[Name('Pazardzhik', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Pazardzhik = 'BG-13';

    #[Name('Pernik', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Pernik = 'BG-14';

    #[Name('Pleven', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Pleven = 'BG-15';

    #[Name('Plovdiv', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Plovdiv = 'BG-16';

    #[Name('Razgrad', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Razgrad = 'BG-17';

    #[Name('Ruse', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Ruse = 'BG-18';

    #[Name('Shumen', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Shumen = 'BG-27';

    #[Name('Silistra', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Silistra = 'BG-19';

    #[Name('Sliven', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Sliven = 'BG-20';

    #[Name('Smolyan', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Smolyan = 'BG-21';

    #[Name('Sofia', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Sofia = 'BG-23';

    #[Name('Sofia (stolitsa)', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Sofia_stolitsa = 'BG-22';

    #[Name('Stara Zagora', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Stara_Zagora = 'BG-24';

    #[Name('Targovishte', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Targovishte = 'BG-25';

    #[Name('Varna', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Varna = 'BG-03';

    #[Name('Veliko Tarnovo', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Veliko_Tarnovo = 'BG-04';

    #[Name('Vidin', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Vidin = 'BG-05';

    #[Name('Vratsa', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Vratsa = 'BG-06';

    #[Name('Yambol', [LanguageAlpha2::Bulgarian], 'National 1999 = UN X/7 2012', null)]
    case Bulgaria_district_Yambol = 'BG-28';

    #[Name('Balé', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Bale = 'BF-BAL';

    #[Name('Bam', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Bam = 'BF-BAM';

    #[Name('Banwa', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Banwa = 'BF-BAN';

    #[Name('Bazèga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Bazega = 'BF-BAZ';

    #[Name('Bougouriba', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Bougouriba = 'BF-BGR';

    #[Name('Boulgou', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Boulgou = 'BF-BLG';

    #[Name('Boulkiemdé', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Boulkiemde = 'BF-BLK';

    #[Name('Comoé', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Comoe = 'BF-COM';

    #[Name('Ganzourgou', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Ganzourgou = 'BF-GAN';

    #[Name('Gnagna', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Gnagna = 'BF-GNA';

    #[Name('Gourma', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Gourma = 'BF-GOU';

    #[Name('Houet', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Houet = 'BF-HOU';

    #[Name('Ioba', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Ioba = 'BF-IOB';

    #[Name('Kadiogo', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Kadiogo = 'BF-KAD';

    #[Name('Kénédougou', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Kenedougou = 'BF-KEN';

    #[Name('Komondjari', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Komondjari = 'BF-KMD';

    #[Name('Kompienga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Kompienga = 'BF-KMP';

    #[Name('Kossi', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Kossi = 'BF-KOS';

    #[Name('Koulpélogo', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Koulpelogo = 'BF-KOP';

    #[Name('Kouritenga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Kouritenga = 'BF-KOT';

    #[Name('Kourwéogo', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Kourweogo = 'BF-KOW';

    #[Name('Léraba', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Leraba = 'BF-LER';

    #[Name('Loroum', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Loroum = 'BF-LOR';

    #[Name('Mouhoun', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Mouhoun = 'BF-MOU';

    #[Name('Nahouri', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Nahouri = 'BF-NAO';

    #[Name('Namentenga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Namentenga = 'BF-NAM';

    #[Name('Nayala', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Nayala = 'BF-NAY';

    #[Name('Noumbiel', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Noumbiel = 'BF-NOU';

    #[Name('Oubritenga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Oubritenga = 'BF-OUB';

    #[Name('Oudalan', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Oudalan = 'BF-OUD';

    #[Name('Passoré', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Passore = 'BF-PAS';

    #[Name('Poni', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Poni = 'BF-PON';

    #[Name('Sanguié', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Sanguie = 'BF-SNG';

    #[Name('Sanmatenga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Sanmatenga = 'BF-SMT';

    #[Name('Séno', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Seno = 'BF-SEN';

    #[Name('Sissili', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Sissili = 'BF-SIS';

    #[Name('Soum', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Soum = 'BF-SOM';

    #[Name('Sourou', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Sourou = 'BF-SOR';

    #[Name('Tapoa', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Tapoa = 'BF-TAP';

    #[Name('Tuy', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Tuy = 'BF-TUI';

    #[Name('Yagha', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Yagha = 'BF-YAG';

    #[Name('Yatenga', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Yatenga = 'BF-YAT';

    #[Name('Ziro', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Ziro = 'BF-ZIR';

    #[Name('Zondoma', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Zondoma = 'BF-ZON';

    #[Name('Zoundwéogo', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_province_Zoundweogo = 'BF-ZOU';

    #[Name('Boucle du Mouhoun', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Boucle_du_Mouhoun = 'BF-01';

    #[Name('Cascades', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Cascades = 'BF-02';

    #[Name('Centre', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Centre = 'BF-03';

    #[Name('Centre-Est', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Centre_Est = 'BF-04';

    #[Name('Centre-Nord', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Centre_Nord = 'BF-05';

    #[Name('Centre-Ouest', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Centre_Ouest = 'BF-06';

    #[Name('Centre-Sud', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Centre_Sud = 'BF-07';

    #[Name('Est', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Est = 'BF-08';

    #[Name('Hauts-Bassins', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Hauts_Bassins = 'BF-09';

    #[Name('Nord', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Nord = 'BF-10';

    #[Name('Plateau-Central', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Plateau_Central = 'BF-11';

    #[Name('Sahel', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Sahel = 'BF-12';

    #[Name('Sud-Ouest', [LanguageAlpha2::French], null, null)]
    case Burkina_Faso_region_Sud_Ouest = 'BF-13';

    #[Name('Bubanza', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Bubanza = 'BI-BB';

    #[Name('Bujumbura Mairie', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Bujumbura_Mairie = 'BI-BM';

    #[Name('Bujumbura Rural', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Bujumbura_Rural = 'BI-BL';

    #[Name('Bururi', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Bururi = 'BI-BR';

    #[Name('Cankuzo', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Cankuzo = 'BI-CA';

    #[Name('Cibitoke', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Cibitoke = 'BI-CI';

    #[Name('Gitega', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Gitega = 'BI-GI';

    #[Name('Karuzi', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Karuzi = 'BI-KR';

    #[Name('Kayanza', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Kayanza = 'BI-KY';

    #[Name('Kirundo', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Kirundo = 'BI-KI';

    #[Name('Makamba', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Makamba = 'BI-MA';

    #[Name('Muramvya', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Muramvya = 'BI-MU';

    #[Name('Muyinga', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Muyinga = 'BI-MY';

    #[Name('Mwaro', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Mwaro = 'BI-MW';

    #[Name('Ngozi', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Ngozi = 'BI-NG';

    #[Name('Rumonge', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Rumonge = 'BI-RM';

    #[Name('Rutana', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Rutana = 'BI-RT';

    #[Name('Ruyigi', [LanguageAlpha2::Rundi, LanguageAlpha2::French], null, null)]
    case Burundi_province_Ruyigi = 'BI-RY';

    #[Name('Phnom Penh', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Phnum Pénh', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_autonomous_municipality_Phnom_Penh = 'KH-12';

    #[Name('Baat Dambang', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Battambang')]
    #[Name('Bătdâmbâng', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Baat_Dambang = 'KH-2';

    #[Name('Banteay Mean Choăy', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Banteay Meanchey')]
    #[Name('Bântéay Méan Choăy', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Banteay_Mean_Choay = 'KH-1';

    #[Name('Kaeb', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Kep')]
    #[Name('Kêb', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kaeb = 'KH-23';

    #[Name('Kampong Chaam', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Kampong Cham')]
    #[Name('Kâmpóng Cham', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kampong_Chaam = 'KH-3';

    #[Name('Kampong Chhnang', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Kâmpóng Chhnăng', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kampong_Chhnang = 'KH-4';

    #[Name('Kampong Spueu', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Kampong Speu')]
    #[Name('Kâmpóng Spœ', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kampong_Spueu = 'KH-5';

    #[Name('Kampong Thum', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Kampong Thom')]
    #[Name('Kâmpóng Thum', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kampong_Thum = 'KH-6';

    #[Name('Kampot', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Kâmpôt', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kampot = 'KH-7';

    #[Name('Kandaal', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Kandal')]
    #[Name('Kândal', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kandaal = 'KH-8';

    #[Name('Kaoh Kong', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Koh Kong')]
    #[Name('Kaôh Kŏng', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kaoh_Kong = 'KH-9';

    #[Name('Kracheh', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Kratie')]
    #[Name('Krâchéh', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Kracheh = 'KH-10';

    #[Name('Mondol Kiri', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Mondolkiri')]
    #[Name('Môndól Kiri', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Mondol_Kiri = 'KH-11';

    #[Name('Otdar Mean Chey', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Oddar Meanchey')]
    #[Name('Ŏtdâr Méan Choăy', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Otdar_Mean_Chey = 'KH-22';

    #[Name('Pailin', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Pailĭn', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Pailin = 'KH-24';

    #[Name('Pousaat', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Pursat')]
    #[Name('Poŭthĭsăt', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Pousaat = 'KH-15';

    #[Name('Preah Sihanouk', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Sihanoukville')]
    #[Name('Preăh Seihânŭ', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Preah_Sihanouk = 'KH-18';

    #[Name('Preah Vihear', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Preăh Vihéar', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Preah_Vihear = 'KH-13';

    #[Name('Prey Veaeng', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Prey Vêng', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', 'Prey Veng')]
    case Cambodia_province_Prey_Veaeng = 'KH-14';

    #[Name('Rotanak Kiri', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Ratanakiri')]
    #[Name('Rôtânôkiri', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Rotanak_Kiri = 'KH-16';

    #[Name('Siem Reab', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Siem Reap')]
    #[Name('Siĕmréab', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Siem_Reab = 'KH-17';

    #[Name('Stoĕng Trêng', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    #[Name('Stueng Traeng', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Stung Treng')]
    case Cambodia_province_Stoeng_Treng = 'KH-19';

    #[Name('Svaay Rieng', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Svay Rieng')]
    #[Name('Svay Riĕng', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Svaay_Rieng = 'KH-20';

    #[Name('Taakaev', [LanguageAlpha2::Central_Khmer], 'National draft 1997', 'Takeo')]
    #[Name('Takêv', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Taakaev = 'KH-21';

    #[Name('Tbong Khmum', [LanguageAlpha2::Central_Khmer], 'National draft 1997', null)]
    #[Name('Tbong Khmŭm', [LanguageAlpha2::Central_Khmer], 'BGN/PCGN 1972', null)]
    case Cambodia_province_Tbong_Khmum = 'KH-25';

    #[Name('Adamaoua', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Cameroon_region_Adamaoua = 'CM-AD';

    #[Name('Centre', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Cameroon_region_Centre = 'CM-CE';

    #[Name('East', [LanguageAlpha2::English], null, null)]
    #[Name('Est', [LanguageAlpha2::French], null, null)]
    case Cameroon_region_East = 'CM-ES';

    #[Name('Extrême-Nord', [LanguageAlpha2::French], null, null)]
    #[Name('Far North', [LanguageAlpha2::English], null, null)]
    case Cameroon_region_Extreme_Nord = 'CM-EN';

    #[Name('Littoral', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Cameroon_region_Littoral = 'CM-LT';

    #[Name('Nord', [LanguageAlpha2::French], null, null)]
    #[Name('North', [LanguageAlpha2::English], null, null)]
    case Cameroon_region_Nord = 'CM-NO';

    #[Name('Nord-Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('North-West', [LanguageAlpha2::English], null, null)]
    case Cameroon_region_Nord_Ouest = 'CM-NW';

    #[Name('Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('West', [LanguageAlpha2::English], null, null)]
    case Cameroon_region_Ouest = 'CM-OU';

    #[Name('South', [LanguageAlpha2::English], null, null)]
    #[Name('Sud', [LanguageAlpha2::French], null, null)]
    case Cameroon_region_South = 'CM-SU';

    #[Name('South-West', [LanguageAlpha2::English], null, null)]
    #[Name('Sud-Ouest', [LanguageAlpha2::French], null, null)]
    case Cameroon_region_South_West = 'CM-SW';

    #[Name('Alberta', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Canada_province_Alberta = 'CA-AB';

    #[Name('British Columbia', [LanguageAlpha2::English], null, null)]
    #[Name('Colombie-Britannique', [LanguageAlpha2::French], null, null)]
    case Canada_province_British_Columbia = 'CA-BC';

    #[Name('Manitoba', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Canada_province_Manitoba = 'CA-MB';

    #[Name('New Brunswick', [LanguageAlpha2::English], null, null)]
    #[Name('Nouveau-Brunswick', [LanguageAlpha2::French], null, null)]
    case Canada_province_New_Brunswick = 'CA-NB';

    #[Name('Newfoundland and Labrador', [LanguageAlpha2::English], null, null)]
    #[Name('Terre-Neuve-et-Labrador', [LanguageAlpha2::French], null, null)]
    case Canada_province_Newfoundland_and_Labrador = 'CA-NL';

    #[Name('Nouvelle-Écosse', [LanguageAlpha2::French], null, null)]
    #[Name('Nova Scotia', [LanguageAlpha2::English], null, null)]
    case Canada_province_Nouvelle_Ecosse = 'CA-NS';

    #[Name('Ontario', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Canada_province_Ontario = 'CA-ON';

    #[Name('Prince Edward Island', [LanguageAlpha2::English], null, null)]
    #[Name('Île-du-Prince-Édouard', [LanguageAlpha2::French], null, null)]
    case Canada_province_Prince_Edward_Island = 'CA-PE';

    #[Name('Quebec', [LanguageAlpha2::English], null, null)]
    #[Name('Québec', [LanguageAlpha2::French], null, null)]
    case Canada_province_Quebec = 'CA-QC';

    #[Name('Saskatchewan', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Canada_province_Saskatchewan = 'CA-SK';

    #[Name('Northwest Territories', [LanguageAlpha2::English], null, null)]
    #[Name('Territoires du Nord-Ouest', [LanguageAlpha2::French], null, null)]
    case Canada_territory_Northwest_Territories = 'CA-NT';

    #[Name('Nunavut', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Canada_territory_Nunavut = 'CA-NU';

    #[Name('Yukon', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Canada_territory_Yukon = 'CA-YT';

    #[Name('Ilhas de Barlavento', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_geographical_region_Ilhas_de_Barlavento = 'CV-B';

    #[Name('Ilhas de Sotavento', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_geographical_region_Ilhas_de_Sotavento = 'CV-S';

    #[Name('Boa Vista', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Boa_Vista = 'CV-BV';

    #[Name('Brava', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Brava = 'CV-BR';

    #[Name('Maio', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Maio = 'CV-MA';

    #[Name('Mosteiros', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Mosteiros = 'CV-MO';

    #[Name('Paul', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Paul = 'CV-PA';

    #[Name('Porto Novo', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Porto_Novo = 'CV-PN';

    #[Name('Praia', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Praia = 'CV-PR';

    #[Name('Ribeira Brava', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Ribeira_Brava = 'CV-RB';

    #[Name('Ribeira Grande', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Ribeira_Grande = 'CV-RG';

    #[Name('Ribeira Grande de Santiago', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Ribeira_Grande_de_Santiago = 'CV-RS';

    #[Name('Sal', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sal = 'CV-SL';

    #[Name('Santa Catarina', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Santa_Catarina = 'CV-CA';

    #[Name('Santa Catarina do Fogo', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Santa_Catarina_do_Fogo = 'CV-CF';

    #[Name('Santa Cruz', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Santa_Cruz = 'CV-CR';

    #[Name('São Domingos', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sao_Domingos = 'CV-SD';

    #[Name('São Filipe', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sao_Filipe = 'CV-SF';

    #[Name('São Lourenço dos Órgãos', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sao_Lourenco_dos_Orgaos = 'CV-SO';

    #[Name('São Miguel', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sao_Miguel = 'CV-SM';

    #[Name('São Salvador do Mundo', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sao_Salvador_do_Mundo = 'CV-SS';

    #[Name('São Vicente', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Sao_Vicente = 'CV-SV';

    #[Name('Tarrafal', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Tarrafal = 'CV-TA';

    #[Name('Tarrafal de São Nicolau', [LanguageAlpha2::Portuguese], null, null)]
    case Cape_Verde_municipality_Tarrafal_de_Sao_Nicolau = 'CV-TS';

    #[Name('Bonaire', [LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::English], null, null)]
    #[Name('Boneiru', [], null, null)]
    case Caribbean_Netherlands_special_municipality_Bonaire = 'BQ-BO';

    #[Name('Saba', [LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::English], null, null)]
    case Caribbean_Netherlands_special_municipality_Saba = 'BQ-SA';

    #[Name('Sint Eustatius', [LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::English], null, null)]
    case Caribbean_Netherlands_special_municipality_Sint_Eustatius = 'BQ-SE';

    #[Name('Bangui', [LanguageAlpha2::French], null, null)]
    #[Name('Bangî', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_commune_Bangui = 'CF-BGF';

    #[Name('Gribingui', [LanguageAlpha2::French], null, null)]
    #[Name('Gïrïbïngï', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_economic_prefecture_Gribingui = 'CF-KB';

    #[Name('Sangha', [LanguageAlpha2::French], null, null)]
    #[Name('Sangä', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_economic_prefecture_Sangha = 'CF-SE';

    #[Name('Bamingui-Bangoran', [LanguageAlpha2::French], null, null)]
    #[Name('Bamïngï-Bangoran', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Bamingui_Bangoran = 'CF-BB';

    #[Name('Basse-Kotto', [LanguageAlpha2::French], null, null)]
    #[Name('Do-Kötö', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Basse_Kotto = 'CF-BK';

    #[Name('Haut-Mbomou', [LanguageAlpha2::French], null, null)]
    #[Name('Tö-Mbömü', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Haut_Mbomou = 'CF-HM';

    #[Name('Haute-Kotto', [LanguageAlpha2::French], null, null)]
    #[Name('Tö-Kötö', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Haute_Kotto = 'CF-HK';

    #[Name('Haute-Sangha / Mambéré-Kadéï', [LanguageAlpha2::French], null, null)]
    #[Name('Tö-Sangä / Mbaere-Kadeï', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Haute_Sangha_Mambere_Kadei = 'CF-HS';

    #[Name('Kemö-Gïrïbïngï', [LanguageAlpha2::Sango], null, null)]
    #[Name('Kémo-Gribingui', [LanguageAlpha2::French], null, null)]
    case Central_African_Republic_prefecture_Kemo_Giribingi = 'CF-KG';

    #[Name('Lobaye', [LanguageAlpha2::French], null, null)]
    #[Name('Lobâye', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Lobaye = 'CF-LB';

    #[Name('Mbomou', [LanguageAlpha2::French], null, null)]
    #[Name('Mbömü', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Mbomou = 'CF-MB';

    #[Name('Nana-Mambéré', [LanguageAlpha2::French], null, null)]
    #[Name('Nanä-Mbaere', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Nana_Mambere = 'CF-NM';

    #[Name('Ombella-Mpoko', [LanguageAlpha2::French], null, null)]
    #[Name('Ömbëlä-Pökö', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Ombella_Mpoko = 'CF-MP';

    #[Name('Ouaka', [LanguageAlpha2::French], null, null)]
    #[Name('Wäkä', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Ouaka = 'CF-UK';

    #[Name('Ouham', [LanguageAlpha2::French], null, null)]
    #[Name('Wâmo', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Ouham = 'CF-AC';

    #[Name('Ouham-Pendé', [LanguageAlpha2::French], null, null)]
    #[Name('Wâmo-Pendë', [LanguageAlpha2::Sango], null, null)]
    case Central_African_Republic_prefecture_Ouham_Pende = 'CF-OP';

    #[Name('Vakaga', [LanguageAlpha2::Sango, LanguageAlpha2::French], null, null)]
    case Central_African_Republic_prefecture_Vakaga = 'CF-VK';

    #[Name('Al Baţḩā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Batha', [LanguageAlpha2::French], null, null)]
    case Chad_province_Al_Batha = 'TD-BA';

    #[Name('Al Buḩayrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Lac', [LanguageAlpha2::French], null, null)]
    case Chad_province_Al_Buhayrah = 'TD-LC';

    #[Name('Bahr el Ghazal', [LanguageAlpha2::French], null, 'Barh-el-Ghazal')]
    #[Name('Baḩr al Ghazāl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Bahr_el_Ghazal = 'TD-BG';

    #[Name('Borkou', [LanguageAlpha2::French], null, null)]
    #[Name('Būrkū', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Borkou = 'TD-BO';

    #[Name('Chari-Baguirmi', [LanguageAlpha2::French], null, null)]
    #[Name('Shārī Bāqirmī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Chari_Baguirmi = 'TD-CB';

    #[Name('Ennedi-Est', [LanguageAlpha2::French], null, null)]
    #[Name('Inīdī ash Sharqī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Ennedi_Est = 'TD-EE';

    #[Name('Ennedi-Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('Inīdī al Gharbī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Ennedi_Ouest = 'TD-EO';

    #[Name('Guéra', [LanguageAlpha2::French], null, null)]
    #[Name('Qīrā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Guera = 'TD-GR';

    #[Name('Hadjer Lamis', [LanguageAlpha2::French], null, null)]
    #[Name('Ḩajjar Lamīs', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Hadjer_Lamis = 'TD-HL';

    #[Name('Kanem', [LanguageAlpha2::French], null, null)]
    #[Name('Kānim', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Kanem = 'TD-KA';

    #[Name('Logone-Occidental', [LanguageAlpha2::French], null, null)]
    #[Name('Lūghūn al Gharbī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Logone_Occidental = 'TD-LO';

    #[Name('Logone-Oriental', [LanguageAlpha2::French], null, null)]
    #[Name('Lūghūn ash Sharqī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Logone_Oriental = 'TD-LR';

    #[Name('Madīnat Injamīnā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Ville de Ndjamena', [LanguageAlpha2::French], null, null)]
    case Chad_province_Madinat_Injamina = 'TD-ND';

    #[Name('Mandoul', [LanguageAlpha2::French], null, null)]
    #[Name('Māndūl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Mandoul = 'TD-MA';

    #[Name('Mayo-Kebbi-Est', [LanguageAlpha2::French], null, null)]
    #[Name('Māyū Kībbī ash Sharqī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Mayo_Kebbi_Est = 'TD-ME';

    #[Name('Mayo-Kebbi-Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('Māyū Kībbī al Gharbī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Mayo_Kebbi_Ouest = 'TD-MO';

    #[Name('Moyen-Chari', [LanguageAlpha2::French], null, null)]
    #[Name('Shārī al Awsaţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Moyen_Chari = 'TD-MC';

    #[Name('Ouaddaï', [LanguageAlpha2::French], null, null)]
    #[Name('Waddāy', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Ouaddai = 'TD-OD';

    #[Name('Salamat', [LanguageAlpha2::French], null, null)]
    #[Name('Salāmāt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Salamat = 'TD-SA';

    #[Name('Sila', [LanguageAlpha2::French], null, null)]
    #[Name('Sīlā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Sila = 'TD-SI';

    #[Name('Tandjilé', [LanguageAlpha2::French], null, null)]
    #[Name('Tānjīlī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Tandjile = 'TD-TA';

    #[Name('Tibastī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Tibesti', [LanguageAlpha2::French], null, null)]
    case Chad_province_Tibasti = 'TD-TI';

    #[Name('Wadi Fira', [LanguageAlpha2::French], null, null)]
    #[Name('Wādī Fīrā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Chad_province_Wadi_Fira = 'TD-WF';

    #[Name('Aisén del General Carlos Ibañez del Campo', [LanguageAlpha2::Spanish_Castilian], null, 'Aysén, Aisén')]
    case Chile_region_Aisen_del_General_Carlos_Ibanez_del_Campo = 'CL-AI';

    #[Name('Antofagasta', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Antofagasta = 'CL-AN';

    #[Name('Arica y Parinacota', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Arica_y_Parinacota = 'CL-AP';

    #[Name('Atacama', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Atacama = 'CL-AT';

    #[Name('Biobío', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Biobio = 'CL-BI';

    #[Name('Coquimbo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Coquimbo = 'CL-CO';

    #[Name('La Araucanía', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_La_Araucania = 'CL-AR';

    #[Name('Libertador General Bernardo O\'Higgins', [LanguageAlpha2::Spanish_Castilian], null, 'O\'Higgins')]
    case Chile_region_Libertador_General_Bernardo_O_Higgins = 'CL-LI';

    #[Name('Los Lagos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Los_Lagos = 'CL-LL';

    #[Name('Los Ríos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Los_Rios = 'CL-LR';

    #[Name('Magallanes', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Magallanes = 'CL-MA';

    #[Name('Maule', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Maule = 'CL-ML';

    #[Name('Ñuble', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Nuble = 'CL-NB';

    #[Name('Región Metropolitana de Santiago', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Region_Metropolitana_de_Santiago = 'CL-RM';

    #[Name('Tarapacá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Tarapaca = 'CL-TA';

    #[Name('Valparaíso', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Chile_region_Valparaiso = 'CL-VS';

    #[Name('Guangxi Zhuangzu Zizhiqu', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_autonomous_region_Guangxi_Zhuangzu_Zizhiqu = 'CN-GX';

    #[Name('Nei Mongol Zizhiqu', [LanguageAlpha2::Chinese], null, null)]
    case China_autonomous_region_Nei_Mongol_Zizhiqu = 'CN-NM';

    #[Name('Ningxia Huizu Zizhiqu', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_autonomous_region_Ningxia_Huizu_Zizhiqu = 'CN-NX';

    #[Name('Xinjiang Uygur Zizhiqu', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_autonomous_region_Xinjiang_Uygur_Zizhiqu = 'CN-XJ';

    #[Name('Xizang Zizhiqu', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_autonomous_region_Xizang_Zizhiqu = 'CN-XZ';

    #[Name('Beijing Shi', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_municipality_Beijing_Shi = 'CN-BJ';

    #[Name('Chongqing Shi', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_municipality_Chongqing_Shi = 'CN-CQ';

    #[Name('Shanghai Shi', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_municipality_Shanghai_Shi = 'CN-SH';

    #[Name('Tianjin Shi', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_municipality_Tianjin_Shi = 'CN-TJ';

    #[Name('Anhui Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Anhui_Sheng = 'CN-AH';

    #[Name('Fujian Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Fujian_Sheng = 'CN-FJ';

    #[Name('Gansu Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Gansu_Sheng = 'CN-GS';

    #[Name('Guangdong Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Guangdong_Sheng = 'CN-GD';

    #[Name('Guizhou Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Guizhou_Sheng = 'CN-GZ';

    #[Name('Hainan Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Hainan_Sheng = 'CN-HI';

    #[Name('Hebei Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Hebei_Sheng = 'CN-HE';

    #[Name('Heilongjiang Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Heilongjiang_Sheng = 'CN-HL';

    #[Name('Henan Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Henan_Sheng = 'CN-HA';

    #[Name('Hubei Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Hubei_Sheng = 'CN-HB';

    #[Name('Hunan Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Hunan_Sheng = 'CN-HN';

    #[Name('Jiangsu Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Jiangsu_Sheng = 'CN-JS';

    #[Name('Jiangxi Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Jiangxi_Sheng = 'CN-JX';

    #[Name('Jilin Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Jilin_Sheng = 'CN-JL';

    #[Name('Liaoning Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Liaoning_Sheng = 'CN-LN';

    #[Name('Qinghai Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Qinghai_Sheng = 'CN-QH';

    #[Name('Shaanxi Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Shaanxi_Sheng = 'CN-SN';

    #[Name('Shandong Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Shandong_Sheng = 'CN-SD';

    #[Name('Shanxi Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Shanxi_Sheng = 'CN-SX';

    #[Name('Sichuan Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Sichuan_Sheng = 'CN-SC';

    #[Name('Taiwan Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    #[SameAsCountry(CountryAlpha2::Taiwan_Province_of_China)]
    case China_province_Taiwan_Sheng = 'CN-TW';

    #[Name('Yunnan Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Yunnan_Sheng = 'CN-YN';

    #[Name('Zhejiang Sheng', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    case China_province_Zhejiang_Sheng = 'CN-ZJ';

    #[Name('Aomen Tebiexingzhengqu', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    #[Name('Macao SAR', [LanguageAlpha2::English], null, null)]
    #[Name('Macau SAR', [LanguageAlpha2::Portuguese], null, null)]
    #[SameAsCountry(CountryAlpha2::Macao)]
    case China_special_administrative_region_Aomen_Tebiexingzhengqu = 'CN-MO';

    #[Name('Hong Kong SAR', [LanguageAlpha2::English], null, null)]
    #[Name('Xianggang Tebiexingzhengqu', [LanguageAlpha2::Chinese], 'National 1958 = ISO 7098:2015 = UN III/8 1977', null)]
    #[SameAsCountry(CountryAlpha2::Hong_Kong)]
    case China_special_administrative_region_Hong_Kong_SAR = 'CN-HK';

    #[Name('Distrito Capital de Bogotá', [LanguageAlpha2::Spanish_Castilian], null, 'Distrito Capital')]
    case Colombia_capital_district_Distrito_Capital_de_Bogota = 'CO-DC';

    #[Name('Amazonas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Amazonas = 'CO-AMA';

    #[Name('Antioquia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Antioquia = 'CO-ANT';

    #[Name('Arauca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Arauca = 'CO-ARA';

    #[Name('Atlántico', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Atlantico = 'CO-ATL';

    #[Name('Bolívar', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Bolivar = 'CO-BOL';

    #[Name('Boyacá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Boyaca = 'CO-BOY';

    #[Name('Caldas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Caldas = 'CO-CAL';

    #[Name('Caquetá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Caqueta = 'CO-CAQ';

    #[Name('Casanare', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Casanare = 'CO-CAS';

    #[Name('Cauca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Cauca = 'CO-CAU';

    #[Name('Cesar', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Cesar = 'CO-CES';

    #[Name('Chocó', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Choco = 'CO-CHO';

    #[Name('Córdoba', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Cordoba = 'CO-COR';

    #[Name('Cundinamarca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Cundinamarca = 'CO-CUN';

    #[Name('Guainía', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Guainia = 'CO-GUA';

    #[Name('Guaviare', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Guaviare = 'CO-GUV';

    #[Name('Huila', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Huila = 'CO-HUI';

    #[Name('La Guajira', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_La_Guajira = 'CO-LAG';

    #[Name('Magdalena', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Magdalena = 'CO-MAG';

    #[Name('Meta', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Meta = 'CO-MET';

    #[Name('Nariño', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Narino = 'CO-NAR';

    #[Name('Norte de Santander', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Norte_de_Santander = 'CO-NSA';

    #[Name('Putumayo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Putumayo = 'CO-PUT';

    #[Name('Quindío', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Quindio = 'CO-QUI';

    #[Name('Risaralda', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Risaralda = 'CO-RIS';

    #[Name('San Andrés, Providencia y Santa Catalina', [LanguageAlpha2::Spanish_Castilian], null, 'San Andrés')]
    case Colombia_department_San_Andres_Providencia_y_Santa_Catalina = 'CO-SAP';

    #[Name('Santander', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Santander = 'CO-SAN';

    #[Name('Sucre', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Sucre = 'CO-SUC';

    #[Name('Tolima', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Tolima = 'CO-TOL';

    #[Name('Valle del Cauca', [LanguageAlpha2::Spanish_Castilian], null, 'Valle')]
    case Colombia_department_Valle_del_Cauca = 'CO-VAC';

    #[Name('Vaupés', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Vaupes = 'CO-VAU';

    #[Name('Vichada', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Colombia_department_Vichada = 'CO-VID';

    #[Name('Andjazîdja', [LanguageAlpha2::Arabic], 'conventional names', null)]
    #[Name('Anjazījah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Grande Comore', [LanguageAlpha2::French], null, null)]
    #[Name('Ngazidja', [], null, null)]
    case Comoros_island_Andjazidja = 'KM-G';

    #[Name('Andjouân', [LanguageAlpha2::Arabic], 'conventional names', null)]
    #[Name('Anjouan', [LanguageAlpha2::French], null, null)]
    #[Name('Anjwān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Ndzuwani', [], null, null)]
    case Comoros_island_Andjouan = 'KM-A';

    #[Name('Mohéli', [LanguageAlpha2::French], null, null)]
    #[Name('Moûhîlî', [LanguageAlpha2::Arabic], 'conventional names', null)]
    #[Name('Mwali', [], null, null)]
    #[Name('Mūhīlī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Comoros_island_Moheli = 'KM-M';

    #[Name('Bouenza', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Bouenza = 'CG-11';

    #[Name('Brazzaville', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Brazzaville = 'CG-BZV';

    #[Name('Cuvette', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Cuvette = 'CG-8';

    #[Name('Cuvette-Ouest', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Cuvette_Ouest = 'CG-15';

    #[Name('Kouilou', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Kouilou = 'CG-5';

    #[Name('Lékoumou', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Lekoumou = 'CG-2';

    #[Name('Likouala', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Likouala = 'CG-7';

    #[Name('Niari', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Niari = 'CG-9';

    #[Name('Plateaux', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Plateaux = 'CG-14';

    #[Name('Pointe-Noire', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Pointe_Noire = 'CG-16';

    #[Name('Pool', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Pool = 'CG-12';

    #[Name('Sangha', [LanguageAlpha2::French], null, null)]
    case Congo_Brazzaville_department_Sangha = 'CG-13';

    #[Name('Kinshasa', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_city_Kinshasa = 'CD-KN';

    #[Name('Bas-Uélé', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Bas_Uele = 'CD-BU';

    #[Name('Équateur', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Equateur = 'CD-EQ';

    #[Name('Haut-Katanga', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Haut_Katanga = 'CD-HK';

    #[Name('Haut-Lomami', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Haut_Lomami = 'CD-HL';

    #[Name('Haut-Uélé', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Haut_Uele = 'CD-HU';

    #[Name('Ituri', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Ituri = 'CD-IT';

    #[Name('Kasaï', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Kasai = 'CD-KS';

    #[Name('Kasaï Central', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Kasai_Central = 'CD-KC';

    #[Name('Kasaï Oriental', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Kasai_Oriental = 'CD-KE';

    #[Name('Kongo Central', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Kongo_Central = 'CD-BC';

    #[Name('Kwango', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Kwango = 'CD-KG';

    #[Name('Kwilu', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Kwilu = 'CD-KL';

    #[Name('Lomami', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Lomami = 'CD-LO';

    #[Name('Lualaba', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Lualaba = 'CD-LU';

    #[Name('Mai-Ndombe', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Mai_Ndombe = 'CD-MN';

    #[Name('Maniema', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Maniema = 'CD-MA';

    #[Name('Mongala', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Mongala = 'CD-MO';

    #[Name('Nord-Kivu', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Nord_Kivu = 'CD-NK';

    #[Name('Nord-Ubangi', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Nord_Ubangi = 'CD-NU';

    #[Name('Sankuru', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Sankuru = 'CD-SA';

    #[Name('Sud-Kivu', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Sud_Kivu = 'CD-SK';

    #[Name('Sud-Ubangi', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Sud_Ubangi = 'CD-SU';

    #[Name('Tanganyika', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Tanganyika = 'CD-TA';

    #[Name('Tshopo', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Tshopo = 'CD-TO';

    #[Name('Tshuapa', [LanguageAlpha2::French], null, null)]
    case Congo_Kinshasa_province_Tshuapa = 'CD-TU';

    #[Name('Alajuela', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_Alajuela = 'CR-A';

    #[Name('Cartago', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_Cartago = 'CR-C';

    #[Name('Guanacaste', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_Guanacaste = 'CR-G';

    #[Name('Heredia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_Heredia = 'CR-H';

    #[Name('Limón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_Limon = 'CR-L';

    #[Name('Puntarenas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_Puntarenas = 'CR-P';

    #[Name('San José', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Costa_Rica_province_San_Jose = 'CR-SJ';

    #[Name('Abidjan', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_autonomous_district_Abidjan = 'CI-AB';

    #[Name('Yamoussoukro', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_autonomous_district_Yamoussoukro = 'CI-YM';

    #[Name('Bas-Sassandra', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Bas_Sassandra = 'CI-BS';

    #[Name('Comoé', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Comoe = 'CI-CM';

    #[Name('Denguélé', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Denguele = 'CI-DN';

    #[Name('Gôh-Djiboua', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Goh_Djiboua = 'CI-GD';

    #[Name('Lacs', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Lacs = 'CI-LC';

    #[Name('Lagunes', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Lagunes = 'CI-LG';

    #[Name('Montagnes', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Montagnes = 'CI-MG';

    #[Name('Sassandra-Marahoué', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Sassandra_Marahoue = 'CI-SM';

    #[Name('Savanes', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Savanes = 'CI-SV';

    #[Name('Vallée du Bandama', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Vallee_du_Bandama = 'CI-VB';

    #[Name('Woroba', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Woroba = 'CI-WR';

    #[Name('Zanzan', [LanguageAlpha2::French], null, null)]
    case Cote_d_Ivoire_district_Zanzan = 'CI-ZZ';

    #[Name('Grad Zagreb', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_city_Grad_Zagreb = 'HR-21';

    #[Name('Bjelovarsko-bilogorska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Bjelovarsko_bilogorska_zupanija = 'HR-07';

    #[Name('Brodsko-posavska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Brodsko_posavska_zupanija = 'HR-12';

    #[Name('Dubrovačko-neretvanska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Dubrovacko_neretvanska_zupanija = 'HR-19';

    #[Name('Istarska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Istarska_zupanija = 'HR-18';

    #[Name('Karlovačka županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Karlovacka_zupanija = 'HR-04';

    #[Name('Koprivničko-križevačka županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Koprivnicko_krizevacka_zupanija = 'HR-06';

    #[Name('Krapinsko-zagorska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Krapinsko_zagorska_zupanija = 'HR-02';

    #[Name('Ličko-senjska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Licko_senjska_zupanija = 'HR-09';

    #[Name('Međimurska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Medimurska_zupanija = 'HR-20';

    #[Name('Osječko-baranjska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Osjecko_baranjska_zupanija = 'HR-14';

    #[Name('Požeško-slavonska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Pozesko_slavonska_zupanija = 'HR-11';

    #[Name('Primorsko-goranska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Primorsko_goranska_zupanija = 'HR-08';

    #[Name('Šibensko-kninska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Sibensko_kninska_zupanija = 'HR-15';

    #[Name('Sisačko-moslavačka županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Sisacko_moslavacka_zupanija = 'HR-03';

    #[Name('Splitsko-dalmatinska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Splitsko_dalmatinska_zupanija = 'HR-17';

    #[Name('Varaždinska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Varazdinska_zupanija = 'HR-05';

    #[Name('Virovitičko-podravska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Viroviticko_podravska_zupanija = 'HR-10';

    #[Name('Vukovarsko-srijemska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Vukovarsko_srijemska_zupanija = 'HR-16';

    #[Name('Zadarska županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Zadarska_zupanija = 'HR-13';

    #[Name('Zagrebačka županija', [LanguageAlpha2::Croatian], null, null)]
    case Croatia_county_Zagrebacka_zupanija = 'HR-01';

    #[Name('Artemisa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Artemisa = 'CU-15';

    #[Name('Camagüey', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Camaguey = 'CU-09';

    #[Name('Ciego de Ávila', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Ciego_de_Avila = 'CU-08';

    #[Name('Cienfuegos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Cienfuegos = 'CU-06';

    #[Name('Granma', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Granma = 'CU-12';

    #[Name('Guantánamo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Guantanamo = 'CU-14';

    #[Name('Holguín', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Holguin = 'CU-11';

    #[Name('La Habana', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_La_Habana = 'CU-03';

    #[Name('Las Tunas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Las_Tunas = 'CU-10';

    #[Name('Matanzas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Matanzas = 'CU-04';

    #[Name('Mayabeque', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Mayabeque = 'CU-16';

    #[Name('Pinar del Río', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Pinar_del_Rio = 'CU-01';

    #[Name('Sancti Spíritus', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Sancti_Spiritus = 'CU-07';

    #[Name('Santiago de Cuba', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Santiago_de_Cuba = 'CU-13';

    #[Name('Villa Clara', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_province_Villa_Clara = 'CU-05';

    #[Name('Isla de la Juventud', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Cuba_special_municipality_Isla_de_la_Juventud = 'CU-99';

    #[Name('Ammochostos', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    #[Name('Mağusa', [LanguageAlpha2::Turkish], null, null)]
    case Cyprus_district_Ammochostos = 'CY-04';

    #[Name('Baf', [LanguageAlpha2::Turkish], null, null)]
    #[Name('Pafos', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Cyprus_district_Baf = 'CY-05';

    #[Name('Girne', [LanguageAlpha2::Turkish], null, null)]
    #[Name('Keryneia', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Cyprus_district_Girne = 'CY-06';

    #[Name('Larnaka', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    #[Name('Larnaka', [LanguageAlpha2::Turkish], null, null)]
    case Cyprus_district_Larnaka = 'CY-03';

    #[Name('Lefkosia', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    #[Name('Lefkoşa', [LanguageAlpha2::Turkish], null, null)]
    case Cyprus_district_Lefkosia = 'CY-01';

    #[Name('Lemesos', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    #[Name('Leymasun', [LanguageAlpha2::Turkish], null, null)]
    case Cyprus_district_Lemesos = 'CY-02';

    #[Name('Praha, Hlavní město', [LanguageAlpha2::Czech], null, null)]
    case Czechia_capital_city_Praha_Hlavni_mesto = 'CZ-10';

    #[Name('Benešov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Benesov = 'CZ-201';

    #[Name('Beroun', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Beroun = 'CZ-202';

    #[Name('Blansko', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Blansko = 'CZ-641';

    #[Name('Břeclav', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Breclav = 'CZ-644';

    #[Name('Brno-město', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Brno_mesto = 'CZ-642';

    #[Name('Brno-venkov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Brno_venkov = 'CZ-643';

    #[Name('Bruntál', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Bruntal = 'CZ-801';

    #[Name('Česká Lípa', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Ceska_Lipa = 'CZ-511';

    #[Name('České Budějovice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Ceske_Budejovice = 'CZ-311';

    #[Name('Český Krumlov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Cesky_Krumlov = 'CZ-312';

    #[Name('Cheb', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Cheb = 'CZ-411';

    #[Name('Chomutov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Chomutov = 'CZ-422';

    #[Name('Chrudim', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Chrudim = 'CZ-531';

    #[Name('Děčín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Decin = 'CZ-421';

    #[Name('Domažlice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Domazlice = 'CZ-321';

    #[Name('Frýdek-Místek', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Frydek_Mistek = 'CZ-802';

    #[Name('Havlíčkův Brod', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Havlickuv_Brod = 'CZ-631';

    #[Name('Hodonín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Hodonin = 'CZ-645';

    #[Name('Hradec Králové', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Hradec_Kralove = 'CZ-521';

    #[Name('Jablonec nad Nisou', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Jablonec_nad_Nisou = 'CZ-512';

    #[Name('Jeseník', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Jesenik = 'CZ-711';

    #[Name('Jičín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Jicin = 'CZ-522';

    #[Name('Jihlava', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Jihlava = 'CZ-632';

    #[Name('Jindřichův Hradec', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Jindrichuv_Hradec = 'CZ-313';

    #[Name('Karlovy Vary', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Karlovy_Vary = 'CZ-412';

    #[Name('Karviná', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Karvina = 'CZ-803';

    #[Name('Kladno', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Kladno = 'CZ-203';

    #[Name('Klatovy', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Klatovy = 'CZ-322';

    #[Name('Kolín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Kolin = 'CZ-204';

    #[Name('Kroměříž', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Kromeriz = 'CZ-721';

    #[Name('Kutná Hora', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Kutna_Hora = 'CZ-205';

    #[Name('Liberec', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Liberec = 'CZ-513';

    #[Name('Litoměřice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Litomerice = 'CZ-423';

    #[Name('Louny', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Louny = 'CZ-424';

    #[Name('Mělník', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Melnik = 'CZ-206';

    #[Name('Mladá Boleslav', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Mlada_Boleslav = 'CZ-207';

    #[Name('Most', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Most = 'CZ-425';

    #[Name('Náchod', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Nachod = 'CZ-523';

    #[Name('Nový Jičín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Novy_Jicin = 'CZ-804';

    #[Name('Nymburk', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Nymburk = 'CZ-208';

    #[Name('Olomouc', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Olomouc = 'CZ-712';

    #[Name('Opava', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Opava = 'CZ-805';

    #[Name('Ostrava-město', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Ostrava_mesto = 'CZ-806';

    #[Name('Pardubice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Pardubice = 'CZ-532';

    #[Name('Pelhřimov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Pelhrimov = 'CZ-633';

    #[Name('Písek', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Pisek = 'CZ-314';

    #[Name('Plzeň-jih', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Plzen_jih = 'CZ-324';

    #[Name('Plzeň-město', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Plzen_mesto = 'CZ-323';

    #[Name('Plzeň-sever', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Plzen_sever = 'CZ-325';

    #[Name('Prachatice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Prachatice = 'CZ-315';

    #[Name('Praha-východ', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Praha_vychod = 'CZ-209';

    #[Name('Praha-západ', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Praha_zapad = 'CZ-20A';

    #[Name('Přerov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Prerov = 'CZ-714';

    #[Name('Příbram', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Pribram = 'CZ-20B';

    #[Name('Prostějov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Prostejov = 'CZ-713';

    #[Name('Rakovník', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Rakovnik = 'CZ-20C';

    #[Name('Rokycany', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Rokycany = 'CZ-326';

    #[Name('Rychnov nad Kněžnou', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Rychnov_nad_Kneznou = 'CZ-524';

    #[Name('Semily', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Semily = 'CZ-514';

    #[Name('Sokolov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Sokolov = 'CZ-413';

    #[Name('Strakonice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Strakonice = 'CZ-316';

    #[Name('Šumperk', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Sumperk = 'CZ-715';

    #[Name('Svitavy', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Svitavy = 'CZ-533';

    #[Name('Tábor', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Tabor = 'CZ-317';

    #[Name('Tachov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Tachov = 'CZ-327';

    #[Name('Teplice', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Teplice = 'CZ-426';

    #[Name('Třebíč', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Trebic = 'CZ-634';

    #[Name('Trutnov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Trutnov = 'CZ-525';

    #[Name('Uherské Hradiště', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Uherske_Hradiste = 'CZ-722';

    #[Name('Ústí nad Labem', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Usti_nad_Labem = 'CZ-427';

    #[Name('Ústí nad Orlicí', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Usti_nad_Orlici = 'CZ-534';

    #[Name('Vsetín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Vsetin = 'CZ-723';

    #[Name('Vyškov', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Vyskov = 'CZ-646';

    #[Name('Žďár nad Sázavou', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Zdar_nad_Sazavou = 'CZ-635';

    #[Name('Zlín', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Zlin = 'CZ-724';

    #[Name('Znojmo', [LanguageAlpha2::Czech], null, null)]
    case Czechia_district_Znojmo = 'CZ-647';

    #[Name('Jihočeský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Jihocesky_kraj = 'CZ-31';

    #[Name('Jihomoravský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Jihomoravsky_kraj = 'CZ-64';

    #[Name('Karlovarský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Karlovarsky_kraj = 'CZ-41';

    #[Name('Kraj Vysočina', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Kraj_Vysocina = 'CZ-63';

    #[Name('Královéhradecký kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Kralovehradecky_kraj = 'CZ-52';

    #[Name('Liberecký kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Liberecky_kraj = 'CZ-51';

    #[Name('Moravskoslezský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Moravskoslezsky_kraj = 'CZ-80';

    #[Name('Olomoucký kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Olomoucky_kraj = 'CZ-71';

    #[Name('Pardubický kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Pardubicky_kraj = 'CZ-53';

    #[Name('Plzeňský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Plzensky_kraj = 'CZ-32';

    #[Name('Středočeský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Stredocesky_kraj = 'CZ-20';

    #[Name('Ústecký kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Ustecky_kraj = 'CZ-42';

    #[Name('Zlínský kraj', [LanguageAlpha2::Czech], null, null)]
    case Czechia_region_Zlinsky_kraj = 'CZ-72';

    #[Name('Hovedstaden', [LanguageAlpha2::Danish], null, null)]
    case Denmark_region_Hovedstaden = 'DK-84';

    #[Name('Midtjylland', [LanguageAlpha2::Danish], null, null)]
    case Denmark_region_Midtjylland = 'DK-82';

    #[Name('Nordjylland', [LanguageAlpha2::Danish], null, null)]
    case Denmark_region_Nordjylland = 'DK-81';

    #[Name('Sjælland', [LanguageAlpha2::Danish], null, null)]
    case Denmark_region_Sjaelland = 'DK-85';

    #[Name('Syddanmark', [LanguageAlpha2::Danish], null, null)]
    case Denmark_region_Syddanmark = 'DK-83';

    #[Name('Djibouti', [LanguageAlpha2::French], null, null)]
    #[Name('Jībūtī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Djibouti_city_Djibouti = 'DJ-DJ';

    #[Name('Ali Sabieh', [LanguageAlpha2::French], null, null)]
    #[Name('‘Alī Şabīḩ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Djibouti_region_Ali_Sabieh = 'DJ-AS';

    #[Name('Arta', [LanguageAlpha2::French], null, null)]
    #[Name('‘Artā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Djibouti_region_Arta = 'DJ-AR';

    #[Name('Awbūk', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Obock', [LanguageAlpha2::French], null, null)]
    case Djibouti_region_Awbuk = 'DJ-OB';

    #[Name('Dikhil', [LanguageAlpha2::French], null, null)]
    #[Name('Dikhīl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Djibouti_region_Dikhil = 'DJ-DI';

    #[Name('Tadjourah', [LanguageAlpha2::French], null, null)]
    #[Name('Tājūrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Djibouti_region_Tadjourah = 'DJ-TA';

    #[Name('Saint Andrew', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Andrew = 'DM-02';

    #[Name('Saint David', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_David = 'DM-03';

    #[Name('Saint George', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_George = 'DM-04';

    #[Name('Saint John', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_John = 'DM-05';

    #[Name('Saint Joseph', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Joseph = 'DM-06';

    #[Name('Saint Luke', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Luke = 'DM-07';

    #[Name('Saint Mark', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Mark = 'DM-08';

    #[Name('Saint Patrick', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Patrick = 'DM-09';

    #[Name('Saint Paul', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Paul = 'DM-10';

    #[Name('Saint Peter', [LanguageAlpha2::English], null, null)]
    case Dominica_parish_Saint_Peter = 'DM-11';

    #[Name('Distrito Nacional (Santo Domingo)', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_district_Distrito_Nacional_Santo_Domingo = 'DO-01';

    #[Name('Azua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Azua = 'DO-02';

    #[Name('Baoruco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Baoruco = 'DO-03';

    #[Name('Barahona', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Barahona = 'DO-04';

    #[Name('Dajabón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Dajabon = 'DO-05';

    #[Name('Duarte', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Duarte = 'DO-06';

    #[Name('El Seibo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_El_Seibo = 'DO-08';

    #[Name('Elías Piña', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Elias_Pina = 'DO-07';

    #[Name('Espaillat', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Espaillat = 'DO-09';

    #[Name('Hato Mayor', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Hato_Mayor = 'DO-30';

    #[Name('Hermanas Mirabal', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Hermanas_Mirabal = 'DO-19';

    #[Name('Independencia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Independencia = 'DO-10';

    #[Name('La Altagracia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_La_Altagracia = 'DO-11';

    #[Name('La Romana', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_La_Romana = 'DO-12';

    #[Name('La Vega', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_La_Vega = 'DO-13';

    #[Name('María Trinidad Sánchez', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Maria_Trinidad_Sanchez = 'DO-14';

    #[Name('Monseñor Nouel', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Monsenor_Nouel = 'DO-28';

    #[Name('Monte Cristi', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Monte_Cristi = 'DO-15';

    #[Name('Monte Plata', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Monte_Plata = 'DO-29';

    #[Name('Pedernales', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Pedernales = 'DO-16';

    #[Name('Peravia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Peravia = 'DO-17';

    #[Name('Puerto Plata', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Puerto_Plata = 'DO-18';

    #[Name('Samaná', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Samana = 'DO-20';

    #[Name('San Cristóbal', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_San_Cristobal = 'DO-21';

    #[Name('San José de Ocoa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_San_Jose_de_Ocoa = 'DO-31';

    #[Name('San Juan', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_San_Juan = 'DO-22';

    #[Name('San Pedro de Macorís', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_San_Pedro_de_Macoris = 'DO-23';

    #[Name('Sánchez Ramírez', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Sanchez_Ramirez = 'DO-24';

    #[Name('Santiago', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Santiago = 'DO-25';

    #[Name('Santiago Rodríguez', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Santiago_Rodriguez = 'DO-26';

    #[Name('Santo Domingo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Santo_Domingo = 'DO-32';

    #[Name('Valverde', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_province_Valverde = 'DO-27';

    #[Name('Cibao Nordeste', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Cibao_Nordeste = 'DO-33';

    #[Name('Cibao Noroeste', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Cibao_Noroeste = 'DO-34';

    #[Name('Cibao Norte', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Cibao_Norte = 'DO-35';

    #[Name('Cibao Sur', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Cibao_Sur = 'DO-36';

    #[Name('El Valle', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_El_Valle = 'DO-37';

    #[Name('Enriquillo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Enriquillo = 'DO-38';

    #[Name('Higuamo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Higuamo = 'DO-39';

    #[Name('Ozama', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Ozama = 'DO-40';

    #[Name('Valdesia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Valdesia = 'DO-41';

    #[Name('Yuma', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Dominican_Republic_region_Yuma = 'DO-42';

    #[Name('Azuay', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Azuay = 'EC-A';

    #[Name('Bolívar', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Bolivar = 'EC-B';

    #[Name('Cañar', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Canar = 'EC-F';

    #[Name('Carchi', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Carchi = 'EC-C';

    #[Name('Chimborazo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Chimborazo = 'EC-H';

    #[Name('Cotopaxi', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Cotopaxi = 'EC-X';

    #[Name('El Oro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_El_Oro = 'EC-O';

    #[Name('Esmeraldas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Esmeraldas = 'EC-E';

    #[Name('Galápagos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Galapagos = 'EC-W';

    #[Name('Guayas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Guayas = 'EC-G';

    #[Name('Imbabura', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Imbabura = 'EC-I';

    #[Name('Loja', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Loja = 'EC-L';

    #[Name('Los Ríos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Los_Rios = 'EC-R';

    #[Name('Manabí', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Manabi = 'EC-M';

    #[Name('Morona Santiago', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Morona_Santiago = 'EC-S';

    #[Name('Napo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Napo = 'EC-N';

    #[Name('Orellana', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Orellana = 'EC-D';

    #[Name('Pastaza', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Pastaza = 'EC-Y';

    #[Name('Pichincha', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Pichincha = 'EC-P';

    #[Name('Santa Elena', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Santa_Elena = 'EC-SE';

    #[Name('Santo Domingo de los Tsáchilas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Santo_Domingo_de_los_Tsachilas = 'EC-SD';

    #[Name('Sucumbíos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Sucumbios = 'EC-U';

    #[Name('Tungurahua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Tungurahua = 'EC-T';

    #[Name('Zamora Chinchipe', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Ecuador_province_Zamora_Chinchipe = 'EC-Z';

    #[Name('Ad Daqahlīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Ad_Daqahliyah = 'EG-DK';

    #[Name('Al Baḩr al Aḩmar', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Red Sea')]
    case Egypt_governorate_Al_Bahr_al_Ahmar = 'EG-BA';

    #[Name('Al Buḩayrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Buhayrah = 'EG-BH';

    #[Name('Al Fayyūm', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Fayyum = 'EG-FYM';

    #[Name('Al Gharbīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Gharbiyah = 'EG-GH';

    #[Name('Al Iskandarīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Alexandria')]
    case Egypt_governorate_Al_Iskandariyah = 'EG-ALX';

    #[Name('Al Ismā\'īlīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Isma_iliyah = 'EG-IS';

    #[Name('Al Jīzah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Giza')]
    case Egypt_governorate_Al_Jizah = 'EG-GZ';

    #[Name('Al Minūfīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Minufiyah = 'EG-MNF';

    #[Name('Al Minyā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Minya = 'EG-MN';

    #[Name('Al Qāhirah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Cairo')]
    case Egypt_governorate_Al_Qahirah = 'EG-C';

    #[Name('Al Qalyūbīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Al_Qalyubiyah = 'EG-KB';

    #[Name('Al Uqşur', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Luxor')]
    case Egypt_governorate_Al_Uqsur = 'EG-LX';

    #[Name('Al Wādī al Jadīd', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'New Valley')]
    case Egypt_governorate_Al_Wadi_al_Jadid = 'EG-WAD';

    #[Name('As Suways', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Suez')]
    case Egypt_governorate_As_Suways = 'EG-SUZ';

    #[Name('Ash Sharqīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Ash_Sharqiyah = 'EG-SHR';

    #[Name('Aswān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Aswan = 'EG-ASN';

    #[Name('Asyūţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Asyut = 'EG-AST';

    #[Name('Banī Suwayf', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Bani_Suwayf = 'EG-BNS';

    #[Name('Būr Sa‘īd', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Port Said')]
    case Egypt_governorate_Bur_Sa_id = 'EG-PTS';

    #[Name('Dumyāţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Damietta')]
    case Egypt_governorate_Dumyat = 'EG-DT';

    #[Name('Janūb Sīnā\'', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'South Sinai')]
    case Egypt_governorate_Janub_Sina = 'EG-JS';

    #[Name('Kafr ash Shaykh', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Kafr_ash_Shaykh = 'EG-KFS';

    #[Name('Maţrūḩ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Matruh = 'EG-MT';

    #[Name('Qinā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Egypt_governorate_Qina = 'EG-KN';

    #[Name('Shamāl Sīnā\'', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'North Sinai')]
    case Egypt_governorate_Shamal_Sina = 'EG-SIN';

    #[Name('Sūhāj', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Sohag')]
    case Egypt_governorate_Suhaj = 'EG-SHG';

    #[Name('Ahuachapán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Ahuachapan = 'SV-AH';

    #[Name('Cabañas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Cabanas = 'SV-CA';

    #[Name('Chalatenango', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Chalatenango = 'SV-CH';

    #[Name('Cuscatlán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Cuscatlan = 'SV-CU';

    #[Name('La Libertad', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_La_Libertad = 'SV-LI';

    #[Name('La Paz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_La_Paz = 'SV-PA';

    #[Name('La Unión', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_La_Union = 'SV-UN';

    #[Name('Morazán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Morazan = 'SV-MO';

    #[Name('San Miguel', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_San_Miguel = 'SV-SM';

    #[Name('San Salvador', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_San_Salvador = 'SV-SS';

    #[Name('San Vicente', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_San_Vicente = 'SV-SV';

    #[Name('Santa Ana', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Santa_Ana = 'SV-SA';

    #[Name('Sonsonate', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Sonsonate = 'SV-SO';

    #[Name('Usulután', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case El_Salvador_department_Usulutan = 'SV-US';

    #[Name('Annobon', [LanguageAlpha2::French], null, null)]
    #[Name('Annobón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Ano Bom', [LanguageAlpha2::Portuguese], null, null)]
    case Equatorial_Guinea_province_Annobon = 'GQ-AN';

    #[Name('Bioko Nord', [LanguageAlpha2::French], null, null)]
    #[Name('Bioko Norte', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Portuguese], null, null)]
    case Equatorial_Guinea_province_Bioko_Nord = 'GQ-BN';

    #[Name('Bioko Sud', [LanguageAlpha2::French], null, null)]
    #[Name('Bioko Sul', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Bioko Sur', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Equatorial_Guinea_province_Bioko_Sud = 'GQ-BS';

    #[Name('Centro Sud', [LanguageAlpha2::French], null, null)]
    #[Name('Centro Sul', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Centro Sur', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Equatorial_Guinea_province_Centro_Sud = 'GQ-CS';

    #[Name('Djibloho', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Portuguese, LanguageAlpha2::French], null, null)]
    case Equatorial_Guinea_province_Djibloho = 'GQ-DJ';

    #[Name('Kié-Ntem', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Portuguese, LanguageAlpha2::French], null, null)]
    case Equatorial_Guinea_province_Kie_Ntem = 'GQ-KN';

    #[Name('Litoral', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Portuguese], null, null)]
    #[Name('Littoral', [LanguageAlpha2::French], null, null)]
    case Equatorial_Guinea_province_Litoral = 'GQ-LI';

    #[Name('Wele-Nzas', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Portuguese, LanguageAlpha2::French], null, null)]
    case Equatorial_Guinea_province_Wele_Nzas = 'GQ-WN';

    #[Name('Região Continental', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Región Continental', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Région Continentale', [LanguageAlpha2::French], null, null)]
    case Equatorial_Guinea_region_Regiao_Continental = 'GQ-C';

    #[Name('Região Insular', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Región Insular', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Région Insulaire', [LanguageAlpha2::French], null, null)]
    case Equatorial_Guinea_region_Regiao_Insular = 'GQ-I';

    #[Name('Al Awsaţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Ma’ĭkel', [LanguageAlpha2::Tigrinya], 'BGN/PCGN 2007', null)]
    case Eritrea_region_Al_Awsat = 'ER-MA';

    #[Name('Al Janūbī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Debub', [LanguageAlpha2::Tigrinya], 'BGN/PCGN 2007', null)]
    case Eritrea_region_Al_Janubi = 'ER-DU';

    #[Name('Ansabā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('‘Anseba', [LanguageAlpha2::Tigrinya], 'BGN/PCGN 2007', null)]
    case Eritrea_region_Ansaba = 'ER-AN';

    #[Name('Debubawi K’eyyĭḥ Baḥri', [LanguageAlpha2::Tigrinya], 'BGN/PCGN 2007', null)]
    #[Name('Janūbī al Baḩrī al Aḩmar', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Eritrea_region_Debubawi_K_eyyih_Bahri = 'ER-DK';

    #[Name('Gash-Barka', [LanguageAlpha2::Tigrinya], 'BGN/PCGN 2007', null)]
    #[Name('Qāsh-Barkah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Eritrea_region_Gash_Barka = 'ER-GB';

    #[Name('Semienawi K’eyyĭḥ Baḥri', [LanguageAlpha2::Tigrinya], 'BGN/PCGN 2007', null)]
    #[Name('Shimālī al Baḩrī al Aḩmar', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Eritrea_region_Semienawi_K_eyyih_Bahri = 'ER-SK';

    #[Name('Harjumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Harjumaa = 'EE-37';

    #[Name('Hiiumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Hiiumaa = 'EE-39';

    #[Name('Ida-Virumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Ida_Virumaa = 'EE-45';

    #[Name('Järvamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Jarvamaa = 'EE-52';

    #[Name('Jõgevamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Jogevamaa = 'EE-50';

    #[Name('Lääne-Virumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Laane_Virumaa = 'EE-60';

    #[Name('Läänemaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Laanemaa = 'EE-56';

    #[Name('Pärnumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Parnumaa = 'EE-68';

    #[Name('Põlvamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Polvamaa = 'EE-64';

    #[Name('Raplamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Raplamaa = 'EE-71';

    #[Name('Saaremaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Saaremaa = 'EE-74';

    #[Name('Tartumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Tartumaa = 'EE-79';

    #[Name('Valgamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Valgamaa = 'EE-81';

    #[Name('Viljandimaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Viljandimaa = 'EE-84';

    #[Name('Võrumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_county_Vorumaa = 'EE-87';

    #[Name('Alutaguse', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Alutaguse = 'EE-130';

    #[Name('Anija', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Anija = 'EE-141';

    #[Name('Antsla', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Antsla = 'EE-142';

    #[Name('Elva', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Elva = 'EE-171';

    #[Name('Häädemeeste', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Haademeeste = 'EE-214';

    #[Name('Haljala', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Haljala = 'EE-191';

    #[Name('Harku', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Harku = 'EE-198';

    #[Name('Hiiumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Hiiumaa = 'EE-205';

    #[Name('Järva', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Jarva = 'EE-255';

    #[Name('Jõelähtme', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Joelahtme = 'EE-245';

    #[Name('Jõgeva', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Jogeva = 'EE-247';

    #[Name('Jõhvi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Johvi = 'EE-251';

    #[Name('Kadrina', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kadrina = 'EE-272';

    #[Name('Kambja', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kambja = 'EE-283';

    #[Name('Kanepi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kanepi = 'EE-284';

    #[Name('Kastre', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kastre = 'EE-291';

    #[Name('Kehtna', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kehtna = 'EE-293';

    #[Name('Kihnu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kihnu = 'EE-303';

    #[Name('Kiili', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kiili = 'EE-305';

    #[Name('Kohila', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kohila = 'EE-317';

    #[Name('Kose', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kose = 'EE-338';

    #[Name('Kuusalu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Kuusalu = 'EE-353';

    #[Name('Lääne-Harju', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Laane_Harju = 'EE-431';

    #[Name('Lääne-Nigula', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Laane_Nigula = 'EE-441';

    #[Name('Lääneranna', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Laaneranna = 'EE-430';

    #[Name('Lüganuse', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Luganuse = 'EE-442';

    #[Name('Luunja', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Luunja = 'EE-432';

    #[Name('Märjamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Marjamaa = 'EE-503';

    #[Name('Muhu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Muhu = 'EE-478';

    #[Name('Mulgi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Mulgi = 'EE-480';

    #[Name('Mustvee', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Mustvee = 'EE-486';

    #[Name('Nõo', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Noo = 'EE-528';

    #[Name('Otepää', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Otepaa = 'EE-557';

    #[Name('Peipsiääre', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Peipsiaare = 'EE-586';

    #[Name('Põhja-Pärnumaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Pohja_Parnumaa = 'EE-638';

    #[Name('Põhja-Sakala', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Pohja_Sakala = 'EE-615';

    #[Name('Põltsamaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Poltsamaa = 'EE-618';

    #[Name('Põlva', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Polva = 'EE-622';

    #[Name('Raasiku', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Raasiku = 'EE-651';

    #[Name('Rae', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Rae = 'EE-653';

    #[Name('Rakvere', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Rakvere = 'EE-661';

    #[Name('Räpina', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Rapina = 'EE-708';

    #[Name('Rapla', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Rapla = 'EE-668';

    #[Name('Rõuge', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Rouge = 'EE-698';

    #[Name('Ruhnu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Ruhnu = 'EE-689';

    #[Name('Saarde', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Saarde = 'EE-712';

    #[Name('Saaremaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Saaremaa = 'EE-714';

    #[Name('Saku', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Saku = 'EE-719';

    #[Name('Saue', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Saue = 'EE-726';

    #[Name('Setomaa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Setomaa = 'EE-732';

    #[Name('Tapa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Tapa = 'EE-792';

    #[Name('Tartu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Tartu = 'EE-796';

    #[Name('Toila', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Toila = 'EE-803';

    #[Name('Tori', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Tori = 'EE-809';

    #[Name('Tõrva', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Torva = 'EE-824';

    #[Name('Türi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Turi = 'EE-834';

    #[Name('Väike-Maarja', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Vaike_Maarja = 'EE-928';

    #[Name('Valga', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Valga = 'EE-855';

    #[Name('Viimsi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Viimsi = 'EE-890';

    #[Name('Viljandi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Viljandi = 'EE-899';

    #[Name('Vinni', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Vinni = 'EE-901';

    #[Name('Viru-Nigula', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Viru_Nigula = 'EE-903';

    #[Name('Vormsi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Vormsi = 'EE-907';

    #[Name('Võru', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_rural_municipality_Voru = 'EE-917';

    #[Name('Haapsalu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Haapsalu = 'EE-184';

    #[Name('Keila', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Keila = 'EE-296';

    #[Name('Kohtla-Järve', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Kohtla_Jarve = 'EE-321';

    #[Name('Loksa', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Loksa = 'EE-424';

    #[Name('Maardu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Maardu = 'EE-446';

    #[Name('Narva', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Narva = 'EE-511';

    #[Name('Narva-Jõesuu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Narva_Joesuu = 'EE-514';

    #[Name('Paide', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Paide = 'EE-567';

    #[Name('Pärnu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Parnu = 'EE-624';

    #[Name('Rakvere', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Rakvere = 'EE-663';

    #[Name('Sillamäe', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Sillamae = 'EE-735';

    #[Name('Tallinn', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Tallinn = 'EE-784';

    #[Name('Tartu', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Tartu = 'EE-793';

    #[Name('Viljandi', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Viljandi = 'EE-897';

    #[Name('Võru', [LanguageAlpha2::Estonian], null, null)]
    case Estonia_urban_municipality_Voru = 'EE-919';

    #[Name('Hhohho', [LanguageAlpha2::Swati, LanguageAlpha2::English], null, null)]
    case Eswatini_region_Hhohho = 'SZ-HH';

    #[Name('Lubombo', [LanguageAlpha2::Swati, LanguageAlpha2::English], null, null)]
    case Eswatini_region_Lubombo = 'SZ-LU';

    #[Name('Manzini', [LanguageAlpha2::Swati, LanguageAlpha2::English], null, null)]
    case Eswatini_region_Manzini = 'SZ-MA';

    #[Name('Shiselweni', [LanguageAlpha2::Swati, LanguageAlpha2::English], null, null)]
    case Eswatini_region_Shiselweni = 'SZ-SH';

    #[Name('Addis Ababa', [LanguageAlpha2::English], null, null)]
    #[Name('Ādīs Ābeba', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_administration_Addis_Ababa = 'ET-AA';

    #[Name('Dire Dawa', [LanguageAlpha2::English], null, null)]
    #[Name('Dirē Dawa', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_administration_Dire_Dawa = 'ET-DD';

    #[Name('Afar', [LanguageAlpha2::English], null, null)]
    #[Name('Āfar', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Afar = 'ET-AF';

    #[Name('Amara', [LanguageAlpha2::English], null, null)]
    #[Name('Āmara', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Amara = 'ET-AM';

    #[Name('Benshangul-Gumaz', [LanguageAlpha2::English], null, null)]
    #[Name('Bīnshangul Gumuz', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Benshangul_Gumaz = 'ET-BE';

    #[Name('Gambela Peoples', [LanguageAlpha2::English], null, null)]
    #[Name('Gambēla Hizboch', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Gambela_Peoples = 'ET-GA';

    #[Name('Harari People', [LanguageAlpha2::English], null, null)]
    #[Name('Hārerī Hizb', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Harari_People = 'ET-HA';

    #[Name('Oromia', [LanguageAlpha2::English], null, null)]
    #[Name('Oromīya', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Oromia = 'ET-OR';

    #[Name('Sidama', [LanguageAlpha2::English], null, null)]
    #[Name('Sīdama', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Sidama = 'ET-SI';

    #[Name('Somali', [LanguageAlpha2::English], null, null)]
    #[Name('Sumalē', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Somali = 'ET-SO';

    #[Name('Southern Nations, Nationalities and Peoples', [LanguageAlpha2::English], null, null)]
    #[Name('YeDebub Bihēroch Bihēreseboch na Hizboch', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Southern_Nations_Nationalities_and_Peoples = 'ET-SN';

    #[Name('Southwest Ethiopia Peoples', [LanguageAlpha2::English], null, null)]
    #[Name('YeDebub M‘irab Ītyop’iya Hizboch', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Southwest_Ethiopia_Peoples = 'ET-SW';

    #[Name('Tigrai', [LanguageAlpha2::English], null, null)]
    #[Name('Tigray', [LanguageAlpha2::Amharic], 'BGN/PCGN 1967', null)]
    case Ethiopia_regional_state_Tigrai = 'ET-TI';

    #[Name('Rotuma', [LanguageAlpha2::English], null, null)]
    case Fiji_dependency_Rotuma = 'FJ-R';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Fiji_division_Central = 'FJ-C';

    #[Name('Eastern', [LanguageAlpha2::English], null, null)]
    case Fiji_division_Eastern = 'FJ-E';

    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Fiji_division_Northern = 'FJ-N';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Fiji_division_Western = 'FJ-W';

    #[Name('Ba', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Ba = 'FJ-01';

    #[Name('Bua', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Bua = 'FJ-02';

    #[Name('Cakaudrove', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Cakaudrove = 'FJ-03';

    #[Name('Kadavu', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Kadavu = 'FJ-04';

    #[Name('Lau', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Lau = 'FJ-05';

    #[Name('Lomaiviti', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Lomaiviti = 'FJ-06';

    #[Name('Macuata', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Macuata = 'FJ-07';

    #[Name('Nadroga and Navosa', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Nadroga_and_Navosa = 'FJ-08';

    #[Name('Naitasiri', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Naitasiri = 'FJ-09';

    #[Name('Namosi', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Namosi = 'FJ-10';

    #[Name('Ra', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Ra = 'FJ-11';

    #[Name('Rewa', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Rewa = 'FJ-12';

    #[Name('Serua', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Serua = 'FJ-13';

    #[Name('Tailevu', [LanguageAlpha2::English], null, null)]
    case Fiji_province_Tailevu = 'FJ-14';

    #[Name('Ahvenanmaan maakunta', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Landskapet Åland', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Ahvenanmaan_maakunta = 'FI-01';

    #[Name('Birkaland', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Pirkanmaa', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Birkaland = 'FI-11';

    #[Name('Egentliga Finland', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Varsinais-Suomi', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Egentliga_Finland = 'FI-19';

    #[Name('Egentliga Tavastland', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Kanta-Häme', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Egentliga_Tavastland = 'FI-06';

    #[Name('Etelä-Karjala', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Södra Karelen', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Etela_Karjala = 'FI-02';

    #[Name('Etelä-Pohjanmaa', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Södra Österbotten', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Etela_Pohjanmaa = 'FI-03';

    #[Name('Etelä-Savo', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Södra Savolax', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Etela_Savo = 'FI-04';

    #[Name('Kainuu', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Kajanaland', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Kainuu = 'FI-05';

    #[Name('Keski-Pohjanmaa', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Mellersta Österbotten', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Keski_Pohjanmaa = 'FI-07';

    #[Name('Keski-Suomi', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Mellersta Finland', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Keski_Suomi = 'FI-08';

    #[Name('Kymenlaakso', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Kymmenedalen', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Kymenlaakso = 'FI-09';

    #[Name('Lappi', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Lappland', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Lappi = 'FI-10';

    #[Name('Norra Karelen', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Pohjois-Karjala', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Norra_Karelen = 'FI-13';

    #[Name('Norra Österbotten', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Pohjois-Pohjanmaa', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Norra_Osterbotten = 'FI-14';

    #[Name('Norra Savolax', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Pohjois-Savo', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Norra_Savolax = 'FI-15';

    #[Name('Nyland', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Uusimaa', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Nyland = 'FI-18';

    #[Name('Päijänne-Tavastland', [LanguageAlpha2::Swedish], null, null)]
    #[Name('Päijät-Häme', [LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Paijanne_Tavastland = 'FI-16';

    #[Name('Pohjanmaa', [LanguageAlpha2::Finnish], null, null)]
    #[Name('Österbotten', [LanguageAlpha2::Swedish], null, null)]
    case Finland_region_Pohjanmaa = 'FI-12';

    #[Name('Satakunta', [LanguageAlpha2::Swedish, LanguageAlpha2::Finnish], null, null)]
    case Finland_region_Satakunta = 'FI-17';

    #[Name('Alsace', [LanguageAlpha2::French], null, null)]
    case France_European_collectivity_Alsace = 'FR-6AE';

    #[Name('Clipperton', [LanguageAlpha2::French], null, null)]
    case France_dependency_Clipperton = 'FR-CP';

    #[Name('Corse', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_collectivity_with_special_status_Corse = 'FR-20R';

    #[Name('Métropole de Lyon', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_collectivity_with_special_status_Metropole_de_Lyon = 'FR-69M';

    #[Name('Paris', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_collectivity_with_special_status_Paris = 'FR-75C';

    #[Name('Ain', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Ain = 'FR-01';

    #[Name('Aisne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Aisne = 'FR-02';

    #[Name('Allier', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Allier = 'FR-03';

    #[Name('Alpes-Maritimes', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Alpes_Maritimes = 'FR-06';

    #[Name('Alpes-de-Haute-Provence', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Alpes_de_Haute_Provence = 'FR-04';

    #[Name('Ardèche', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Ardeche = 'FR-07';

    #[Name('Ardennes', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Ardennes = 'FR-08';

    #[Name('Ariège', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Ariege = 'FR-09';

    #[Name('Aube', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Aube = 'FR-10';

    #[Name('Aude', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Aude = 'FR-11';

    #[Name('Aveyron', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Aveyron = 'FR-12';

    #[Name('Bas-Rhin', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Bas_Rhin = 'FR-67';

    #[Name('Bouches-du-Rhône', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Bouches_du_Rhone = 'FR-13';

    #[Name('Calvados', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Calvados = 'FR-14';

    #[Name('Cantal', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Cantal = 'FR-15';

    #[Name('Charente', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Charente = 'FR-16';

    #[Name('Charente-Maritime', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Charente_Maritime = 'FR-17';

    #[Name('Cher', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Cher = 'FR-18';

    #[Name('Corrèze', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Correze = 'FR-19';

    #[Name('Corse-du-Sud', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Corse_du_Sud = 'FR-2A';

    #[Name('Côte-d\'Or', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Cote_d_Or = 'FR-21';

    #[Name('Côtes-d\'Armor', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Cotes_d_Armor = 'FR-22';

    #[Name('Creuse', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Creuse = 'FR-23';

    #[Name('Deux-Sèvres', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Deux_Sevres = 'FR-79';

    #[Name('Dordogne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Dordogne = 'FR-24';

    #[Name('Doubs', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Doubs = 'FR-25';

    #[Name('Drôme', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Drome = 'FR-26';

    #[Name('Essonne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Essonne = 'FR-91';

    #[Name('Eure', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Eure = 'FR-27';

    #[Name('Eure-et-Loir', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Eure_et_Loir = 'FR-28';

    #[Name('Finistère', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Finistere = 'FR-29';

    #[Name('Gard', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Gard = 'FR-30';

    #[Name('Gers', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Gers = 'FR-32';

    #[Name('Gironde', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Gironde = 'FR-33';

    #[Name('Haut-Rhin', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haut_Rhin = 'FR-68';

    #[Name('Haute-Corse', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Corse = 'FR-2B';

    #[Name('Haute-Garonne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Garonne = 'FR-31';

    #[Name('Haute-Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Loire = 'FR-43';

    #[Name('Haute-Marne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Marne = 'FR-52';

    #[Name('Haute-Saône', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Saone = 'FR-70';

    #[Name('Haute-Savoie', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Savoie = 'FR-74';

    #[Name('Haute-Vienne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Haute_Vienne = 'FR-87';

    #[Name('Hautes-Alpes', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Hautes_Alpes = 'FR-05';

    #[Name('Hautes-Pyrénées', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Hautes_Pyrenees = 'FR-65';

    #[Name('Hauts-de-Seine', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Hauts_de_Seine = 'FR-92';

    #[Name('Hérault', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Herault = 'FR-34';

    #[Name('Ille-et-Vilaine', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Ille_et_Vilaine = 'FR-35';

    #[Name('Indre', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Indre = 'FR-36';

    #[Name('Indre-et-Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Indre_et_Loire = 'FR-37';

    #[Name('Isère', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Isere = 'FR-38';

    #[Name('Jura', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Jura = 'FR-39';

    #[Name('Landes', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Landes = 'FR-40';

    #[Name('Loir-et-Cher', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Loir_et_Cher = 'FR-41';

    #[Name('Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Loire = 'FR-42';

    #[Name('Loire-Atlantique', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Loire_Atlantique = 'FR-44';

    #[Name('Loiret', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Loiret = 'FR-45';

    #[Name('Lot', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Lot = 'FR-46';

    #[Name('Lot-et-Garonne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Lot_et_Garonne = 'FR-47';

    #[Name('Lozère', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Lozere = 'FR-48';

    #[Name('Maine-et-Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Maine_et_Loire = 'FR-49';

    #[Name('Manche', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Manche = 'FR-50';

    #[Name('Marne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Marne = 'FR-51';

    #[Name('Mayenne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Mayenne = 'FR-53';

    #[Name('Meurthe-et-Moselle', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Meurthe_et_Moselle = 'FR-54';

    #[Name('Meuse', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Meuse = 'FR-55';

    #[Name('Morbihan', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Morbihan = 'FR-56';

    #[Name('Moselle', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Moselle = 'FR-57';

    #[Name('Nièvre', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Nievre = 'FR-58';

    #[Name('Nord', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Nord = 'FR-59';

    #[Name('Oise', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Oise = 'FR-60';

    #[Name('Orne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Orne = 'FR-61';

    #[Name('Pas-de-Calais', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Pas_de_Calais = 'FR-62';

    #[Name('Puy-de-Dôme', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Puy_de_Dome = 'FR-63';

    #[Name('Pyrénées-Atlantiques', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Pyrenees_Atlantiques = 'FR-64';

    #[Name('Pyrénées-Orientales', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Pyrenees_Orientales = 'FR-66';

    #[Name('Rhône', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Rhone = 'FR-69';

    #[Name('Saône-et-Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Saone_et_Loire = 'FR-71';

    #[Name('Sarthe', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Sarthe = 'FR-72';

    #[Name('Savoie', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Savoie = 'FR-73';

    #[Name('Seine-Maritime', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Seine_Maritime = 'FR-76';

    #[Name('Seine-Saint-Denis', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Seine_Saint_Denis = 'FR-93';

    #[Name('Seine-et-Marne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Seine_et_Marne = 'FR-77';

    #[Name('Somme', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Somme = 'FR-80';

    #[Name('Tarn', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Tarn = 'FR-81';

    #[Name('Tarn-et-Garonne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Tarn_et_Garonne = 'FR-82';

    #[Name('Territoire de Belfort', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Territoire_de_Belfort = 'FR-90';

    #[Name('Val-d\'Oise', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Val_d_Oise = 'FR-95';

    #[Name('Val-de-Marne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Val_de_Marne = 'FR-94';

    #[Name('Var', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Var = 'FR-83';

    #[Name('Vaucluse', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Vaucluse = 'FR-84';

    #[Name('Vendée', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Vendee = 'FR-85';

    #[Name('Vienne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Vienne = 'FR-86';

    #[Name('Vosges', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Vosges = 'FR-88';

    #[Name('Yonne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Yonne = 'FR-89';

    #[Name('Yvelines', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_department_Yvelines = 'FR-78';

    #[Name('Auvergne-Rhône-Alpes', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Auvergne_Rhone_Alpes = 'FR-ARA';

    #[Name('Bourgogne-Franche-Comté', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Bourgogne_Franche_Comte = 'FR-BFC';

    #[Name('Bretagne', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Bretagne = 'FR-BRE';

    #[Name('Centre-Val de Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Centre_Val_de_Loire = 'FR-CVL';

    #[Name('Grand-Est', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Grand_Est = 'FR-GES';

    #[Name('Hauts-de-France', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Hauts_de_France = 'FR-HDF';

    #[Name('Île-de-France', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Ile_de_France = 'FR-IDF';

    #[Name('Normandie', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Normandie = 'FR-NOR';

    #[Name('Nouvelle-Aquitaine', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Nouvelle_Aquitaine = 'FR-NAQ';

    #[Name('Occitanie', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Occitanie = 'FR-OCC';

    #[Name('Pays-de-la-Loire', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Pays_de_la_Loire = 'FR-PDL';

    #[Name('Provence-Alpes-Côte-d’Azur', [LanguageAlpha2::French], null, null)]
    case France_metropolitan_region_Provence_Alpes_Cote_d_Azur = 'FR-PAC';

    #[Name('Polynésie française', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::French_Polynesia)]
    case France_overseas_collectivity_Polynesie_francaise = 'FR-PF';

    #[Name('Saint-Barthélemy', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Saint_Barthelemy)]
    case France_overseas_collectivity_Saint_Barthelemy = 'FR-BL';

    #[Name('Saint-Martin', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Saint_Martin_French_part)]
    case France_overseas_collectivity_Saint_Martin = 'FR-MF';

    #[Name('Saint-Pierre-et-Miquelon', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Saint_Pierre_and_Miquelon)]
    case France_overseas_collectivity_Saint_Pierre_et_Miquelon = 'FR-PM';

    #[Name('Wallis-et-Futuna', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Wallis_and_Futuna)]
    case France_overseas_collectivity_Wallis_et_Futuna = 'FR-WF';

    #[Name('Nouvelle-Calédonie', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::New_Caledonia)]
    case France_overseas_collectivity_with_special_status_Nouvelle_Caledonie = 'FR-NC';

    #[Name('Guadeloupe', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Guadeloupe)]
    case France_overseas_departmental_collectivity_Guadeloupe = 'FR-971';

    #[Name('La Réunion', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Reunion)]
    case France_overseas_departmental_collectivity_La_Reunion = 'FR-974';

    #[Name('Mayotte', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Mayotte)]
    case France_overseas_departmental_collectivity_Mayotte = 'FR-976';

    #[Name('Terres australes françaises', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::French_Southern_Territories)]
    case France_overseas_territory_Terres_australes_francaises = 'FR-TF';

    #[Name('Guyane (française)', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::French_Guiana)]
    case France_overseas_unique_territorial_collectivity_Guyane_francaise = 'FR-973';

    #[Name('Martinique', [LanguageAlpha2::French], null, null)]
    #[SameAsCountry(CountryAlpha2::Martinique)]
    case France_overseas_unique_territorial_collectivity_Martinique = 'FR-972';

    #[Name('Estuaire', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Estuaire = 'GA-1';

    #[Name('Haut-Ogooué', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Haut_Ogooue = 'GA-2';

    #[Name('Moyen-Ogooué', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Moyen_Ogooue = 'GA-3';

    #[Name('Ngounié', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Ngounie = 'GA-4';

    #[Name('Nyanga', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Nyanga = 'GA-5';

    #[Name('Ogooué-Ivindo', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Ogooue_Ivindo = 'GA-6';

    #[Name('Ogooué-Lolo', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Ogooue_Lolo = 'GA-7';

    #[Name('Ogooué-Maritime', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Ogooue_Maritime = 'GA-8';

    #[Name('Woleu-Ntem', [LanguageAlpha2::French], null, null)]
    case Gabon_province_Woleu_Ntem = 'GA-9';

    #[Name('Banjul', [LanguageAlpha2::English], null, null)]
    case Gambia_city_Banjul = 'GM-B';

    #[Name('Central River', [LanguageAlpha2::English], null, null)]
    case Gambia_division_Central_River = 'GM-M';

    #[Name('Lower River', [LanguageAlpha2::English], null, null)]
    case Gambia_division_Lower_River = 'GM-L';

    #[Name('North Bank', [LanguageAlpha2::English], null, null)]
    case Gambia_division_North_Bank = 'GM-N';

    #[Name('Upper River', [LanguageAlpha2::English], null, null)]
    case Gambia_division_Upper_River = 'GM-U';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Gambia_division_Western = 'GM-W';

    #[Name('Abkhazia', [LanguageAlpha2::Georgian], 'National draft 2002', 'Apkhazeti')]
    case Georgia_autonomous_republic_Abkhazia = 'GE-AB';

    #[Name('Ajaria', [LanguageAlpha2::Georgian], 'National draft 2002', 'Ach\'ara')]
    case Georgia_autonomous_republic_Ajaria = 'GE-AJ';

    #[Name('Tbilisi', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_city_Tbilisi = 'GE-TB';

    #[Name('Guria', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Guria = 'GE-GU';

    #[Name('Imereti', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Imereti = 'GE-IM';

    #[Name('K\'akheti', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_K_akheti = 'GE-KA';

    #[Name('Kvemo Kartli', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Kvemo_Kartli = 'GE-KK';

    #[Name('Mtskheta-Mtianeti', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Mtskheta_Mtianeti = 'GE-MM';

    #[Name('Rach\'a-Lechkhumi-Kvemo Svaneti', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Rach_a_Lechkhumi_Kvemo_Svaneti = 'GE-RL';

    #[Name('Samegrelo-Zemo Svaneti', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Samegrelo_Zemo_Svaneti = 'GE-SZ';

    #[Name('Samtskhe-Javakheti', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Samtskhe_Javakheti = 'GE-SJ';

    #[Name('Shida Kartli', [LanguageAlpha2::Georgian], 'National draft 2002', null)]
    case Georgia_region_Shida_Kartli = 'GE-SK';

    #[Name('Baden-Württemberg', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Baden_Wurttemberg = 'DE-BW';

    #[Name('Bayern', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Bayern = 'DE-BY';

    #[Name('Berlin', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Berlin = 'DE-BE';

    #[Name('Brandenburg', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Brandenburg = 'DE-BB';

    #[Name('Bremen', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Bremen = 'DE-HB';

    #[Name('Hamburg', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Hamburg = 'DE-HH';

    #[Name('Hessen', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Hessen = 'DE-HE';

    #[Name('Mecklenburg-Vorpommern', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Mecklenburg_Vorpommern = 'DE-MV';

    #[Name('Niedersachsen', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Niedersachsen = 'DE-NI';

    #[Name('Nordrhein-Westfalen', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Nordrhein_Westfalen = 'DE-NW';

    #[Name('Rheinland-Pfalz', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Rheinland_Pfalz = 'DE-RP';

    #[Name('Saarland', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Saarland = 'DE-SL';

    #[Name('Sachsen', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Sachsen = 'DE-SN';

    #[Name('Sachsen-Anhalt', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Sachsen_Anhalt = 'DE-ST';

    #[Name('Schleswig-Holstein', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Schleswig_Holstein = 'DE-SH';

    #[Name('Thüringen', [LanguageAlpha2::German], null, null)]
    case Germany_Land_Thuringen = 'DE-TH';

    #[Name('Ahafo', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Ahafo = 'GH-AF';

    #[Name('Ashanti', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Ashanti = 'GH-AH';

    #[Name('Bono', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Bono = 'GH-BO';

    #[Name('Bono East', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Bono_East = 'GH-BE';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Central = 'GH-CP';

    #[Name('Eastern', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Eastern = 'GH-EP';

    #[Name('Greater Accra', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Greater_Accra = 'GH-AA';

    #[Name('North East', [LanguageAlpha2::English], null, null)]
    case Ghana_region_North_East = 'GH-NE';

    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Northern = 'GH-NP';

    #[Name('Oti', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Oti = 'GH-OT';

    #[Name('Savannah', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Savannah = 'GH-SV';

    #[Name('Upper East', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Upper_East = 'GH-UE';

    #[Name('Upper West', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Upper_West = 'GH-UW';

    #[Name('Volta', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Volta = 'GH-TV';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Western = 'GH-WP';

    #[Name('Western North', [LanguageAlpha2::English], null, null)]
    case Ghana_region_Western_North = 'GH-WN';

    #[Name('Anatolikí Makedonía kai Thráki', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Anatoliki_Makedonia_kai_Thraki = 'GR-A';

    #[Name('Attikí', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Attiki = 'GR-I';

    #[Name('Dytikí Elláda', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Dytiki_Ellada = 'GR-G';

    #[Name('Dytikí Makedonía', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Dytiki_Makedonia = 'GR-C';

    #[Name('Ionía Nísia', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Ionia_Nisia = 'GR-F';

    #[Name('Ípeiros', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Ipeiros = 'GR-D';

    #[Name('Kentrikí Makedonía', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Kentriki_Makedonia = 'GR-B';

    #[Name('Kríti', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Kriti = 'GR-M';

    #[Name('Nótio Aigaío', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Notio_Aigaio = 'GR-L';

    #[Name('Pelopónnisos', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Peloponnisos = 'GR-J';

    #[Name('Stereá Elláda', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Sterea_Ellada = 'GR-H';

    #[Name('Thessalía', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Thessalia = 'GR-E';

    #[Name('Vóreio Aigaío', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_administrative_region_Voreio_Aigaio = 'GR-K';

    #[Name('Ágion Óros', [LanguageAlpha2::Greek_Modern_1453], 'ELOT 743:1982 = ISO 843:1997 = UN V/19 1987', null)]
    case Greece_self_governed_part_Agion_Oros = 'GR-69';

    #[Name('Avannaata Kommunia', [LanguageAlpha2::Kalaallisut_Greenlandic], null, null)]
    case Greenland_municipality_Avannaata_Kommunia = 'GL-AV';

    #[Name('Kommune Kujalleq', [LanguageAlpha2::Kalaallisut_Greenlandic], null, null)]
    case Greenland_municipality_Kommune_Kujalleq = 'GL-KU';

    #[Name('Kommune Qeqertalik', [LanguageAlpha2::Kalaallisut_Greenlandic], null, null)]
    case Greenland_municipality_Kommune_Qeqertalik = 'GL-QT';

    #[Name('Kommuneqarfik Sermersooq', [LanguageAlpha2::Kalaallisut_Greenlandic], null, null)]
    case Greenland_municipality_Kommuneqarfik_Sermersooq = 'GL-SM';

    #[Name('Qeqqata Kommunia', [LanguageAlpha2::Kalaallisut_Greenlandic], null, null)]
    case Greenland_municipality_Qeqqata_Kommunia = 'GL-QE';

    #[Name('Southern Grenadine Islands', [LanguageAlpha2::English], null, 'Carriacou')]
    case Grenada_dependency_Southern_Grenadine_Islands = 'GD-10';

    #[Name('Saint Andrew', [LanguageAlpha2::English], null, null)]
    case Grenada_parish_Saint_Andrew = 'GD-01';

    #[Name('Saint David', [LanguageAlpha2::English], null, null)]
    case Grenada_parish_Saint_David = 'GD-02';

    #[Name('Saint George', [LanguageAlpha2::English], null, null)]
    case Grenada_parish_Saint_George = 'GD-03';

    #[Name('Saint John', [LanguageAlpha2::English], null, null)]
    case Grenada_parish_Saint_John = 'GD-04';

    #[Name('Saint Mark', [LanguageAlpha2::English], null, null)]
    case Grenada_parish_Saint_Mark = 'GD-05';

    #[Name('Saint Patrick', [LanguageAlpha2::English], null, null)]
    case Grenada_parish_Saint_Patrick = 'GD-06';

    #[Name('Alta Verapaz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Alta_Verapaz = 'GT-16';

    #[Name('Baja Verapaz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Baja_Verapaz = 'GT-15';

    #[Name('Chimaltenango', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Chimaltenango = 'GT-04';

    #[Name('Chiquimula', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Chiquimula = 'GT-20';

    #[Name('El Progreso', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_El_Progreso = 'GT-02';

    #[Name('Escuintla', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Escuintla = 'GT-05';

    #[Name('Guatemala', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Guatemala = 'GT-01';

    #[Name('Huehuetenango', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Huehuetenango = 'GT-13';

    #[Name('Izabal', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Izabal = 'GT-18';

    #[Name('Jalapa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Jalapa = 'GT-21';

    #[Name('Jutiapa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Jutiapa = 'GT-22';

    #[Name('Petén', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Peten = 'GT-17';

    #[Name('Quetzaltenango', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Quetzaltenango = 'GT-09';

    #[Name('Quiché', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Quiche = 'GT-14';

    #[Name('Retalhuleu', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Retalhuleu = 'GT-11';

    #[Name('Sacatepéquez', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Sacatepequez = 'GT-03';

    #[Name('San Marcos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_San_Marcos = 'GT-12';

    #[Name('Santa Rosa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Santa_Rosa = 'GT-06';

    #[Name('Sololá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Solola = 'GT-07';

    #[Name('Suchitepéquez', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Suchitepequez = 'GT-10';

    #[Name('Totonicapán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Totonicapan = 'GT-08';

    #[Name('Zacapa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Guatemala_department_Zacapa = 'GT-19';

    #[Name('Bissau', [LanguageAlpha2::Portuguese], null, 'SAB')]
    case Guinea_Bissau_autonomous_sector_Bissau = 'GW-BS';

    #[Name('Leste', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_province_Leste = 'GW-L';

    #[Name('Norte', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_province_Norte = 'GW-N';

    #[Name('Sul', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_province_Sul = 'GW-S';

    #[Name('Bafatá', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Bafata = 'GW-BA';

    #[Name('Biombo', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Biombo = 'GW-BM';

    #[Name('Bolama / Bijagós', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Bolama_Bijagos = 'GW-BL';

    #[Name('Cacheu', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Cacheu = 'GW-CA';

    #[Name('Gabú', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Gabu = 'GW-GA';

    #[Name('Oio', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Oio = 'GW-OI';

    #[Name('Quinara', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Quinara = 'GW-QU';

    #[Name('Tombali', [LanguageAlpha2::Portuguese], null, null)]
    case Guinea_Bissau_region_Tombali = 'GW-TO';

    #[Name('Boké', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Boke = 'GN-B';

    #[Name('Faranah', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Faranah = 'GN-F';

    #[Name('Kankan', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Kankan = 'GN-K';

    #[Name('Kindia', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Kindia = 'GN-D';

    #[Name('Labé', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Labe = 'GN-L';

    #[Name('Mamou', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Mamou = 'GN-M';

    #[Name('Nzérékoré', [LanguageAlpha2::French], null, null)]
    case Guinea_administrative_region_Nzerekore = 'GN-N';

    #[Name('Conakry', [LanguageAlpha2::French], null, null)]
    case Guinea_governorate_Conakry = 'GN-C';

    #[Name('Beyla', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Beyla = 'GN-BE';

    #[Name('Boffa', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Boffa = 'GN-BF';

    #[Name('Boké', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Boke = 'GN-BK';

    #[Name('Coyah', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Coyah = 'GN-CO';

    #[Name('Dabola', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Dabola = 'GN-DB';

    #[Name('Dalaba', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Dalaba = 'GN-DL';

    #[Name('Dinguiraye', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Dinguiraye = 'GN-DI';

    #[Name('Dubréka', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Dubreka = 'GN-DU';

    #[Name('Faranah', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Faranah = 'GN-FA';

    #[Name('Forécariah', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Forecariah = 'GN-FO';

    #[Name('Fria', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Fria = 'GN-FR';

    #[Name('Gaoual', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Gaoual = 'GN-GA';

    #[Name('Guékédou', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Guekedou = 'GN-GU';

    #[Name('Kankan', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Kankan = 'GN-KA';

    #[Name('Kérouané', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Kerouane = 'GN-KE';

    #[Name('Kindia', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Kindia = 'GN-KD';

    #[Name('Kissidougou', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Kissidougou = 'GN-KS';

    #[Name('Koubia', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Koubia = 'GN-KB';

    #[Name('Koundara', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Koundara = 'GN-KN';

    #[Name('Kouroussa', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Kouroussa = 'GN-KO';

    #[Name('Labé', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Labe = 'GN-LA';

    #[Name('Lélouma', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Lelouma = 'GN-LE';

    #[Name('Lola', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Lola = 'GN-LO';

    #[Name('Macenta', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Macenta = 'GN-MC';

    #[Name('Mali', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Mali = 'GN-ML';

    #[Name('Mamou', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Mamou = 'GN-MM';

    #[Name('Mandiana', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Mandiana = 'GN-MD';

    #[Name('Nzérékoré', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Nzerekore = 'GN-NZ';

    #[Name('Pita', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Pita = 'GN-PI';

    #[Name('Siguiri', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Siguiri = 'GN-SI';

    #[Name('Télimélé', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Telimele = 'GN-TE';

    #[Name('Tougué', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Tougue = 'GN-TO';

    #[Name('Yomou', [LanguageAlpha2::French], null, null)]
    case Guinea_prefecture_Yomou = 'GN-YO';

    #[Name('Barima-Waini', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Barima_Waini = 'GY-BA';

    #[Name('Cuyuni-Mazaruni', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Cuyuni_Mazaruni = 'GY-CU';

    #[Name('Demerara-Mahaica', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Demerara_Mahaica = 'GY-DE';

    #[Name('East Berbice-Corentyne', [LanguageAlpha2::English], null, null)]
    case Guyana_region_East_Berbice_Corentyne = 'GY-EB';

    #[Name('Essequibo Islands-West Demerara', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Essequibo_Islands_West_Demerara = 'GY-ES';

    #[Name('Mahaica-Berbice', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Mahaica_Berbice = 'GY-MA';

    #[Name('Pomeroon-Supenaam', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Pomeroon_Supenaam = 'GY-PM';

    #[Name('Potaro-Siparuni', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Potaro_Siparuni = 'GY-PT';

    #[Name('Upper Demerara-Berbice', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Upper_Demerara_Berbice = 'GY-UD';

    #[Name('Upper Takutu-Upper Essequibo', [LanguageAlpha2::English], null, null)]
    case Guyana_region_Upper_Takutu_Upper_Essequibo = 'GY-UT';

    #[Name('Artibonite', [LanguageAlpha2::French], null, null)]
    #[Name('Latibonit', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    case Haiti_department_Artibonite = 'HT-AR';

    #[Name('Centre', [LanguageAlpha2::French], null, null)]
    #[Name('Sant', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    case Haiti_department_Centre = 'HT-CE';

    #[Name('Grandans', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    #[Name('Grande’Anse', [LanguageAlpha2::French], null, null)]
    case Haiti_department_Grandans = 'HT-GA';

    #[Name('Lwès', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    #[Name('Ouest', [LanguageAlpha2::French], null, null)]
    case Haiti_department_Lwes = 'HT-OU';

    #[Name('Nip', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    #[Name('Nippes', [LanguageAlpha2::French], null, null)]
    case Haiti_department_Nip = 'HT-NI';

    #[Name('Nord', [LanguageAlpha2::French], null, null)]
    #[Name('Nò', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    case Haiti_department_Nord = 'HT-ND';

    #[Name('Nord-Est', [LanguageAlpha2::French], null, null)]
    #[Name('Nòdès', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    case Haiti_department_Nord_Est = 'HT-NE';

    #[Name('Nord-Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('Nòdwès', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    case Haiti_department_Nord_Ouest = 'HT-NO';

    #[Name('Sid', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    #[Name('Sud', [LanguageAlpha2::French], null, null)]
    case Haiti_department_Sid = 'HT-SD';

    #[Name('Sidès', [LanguageAlpha2::Haitian_Haitian_Creole], null, null)]
    #[Name('Sud-Est', [LanguageAlpha2::French], null, null)]
    case Haiti_department_Sides = 'HT-SE';

    #[Name('Atlántida', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Atlantida = 'HN-AT';

    #[Name('Choluteca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Choluteca = 'HN-CH';

    #[Name('Colón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Colon = 'HN-CL';

    #[Name('Comayagua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Comayagua = 'HN-CM';

    #[Name('Copán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Copan = 'HN-CP';

    #[Name('Cortés', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Cortes = 'HN-CR';

    #[Name('El Paraíso', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_El_Paraiso = 'HN-EP';

    #[Name('Francisco Morazán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Francisco_Morazan = 'HN-FM';

    #[Name('Gracias a Dios', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Gracias_a_Dios = 'HN-GD';

    #[Name('Intibucá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Intibuca = 'HN-IN';

    #[Name('Islas de la Bahía', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Islas_de_la_Bahia = 'HN-IB';

    #[Name('La Paz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_La_Paz = 'HN-LP';

    #[Name('Lempira', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Lempira = 'HN-LE';

    #[Name('Ocotepeque', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Ocotepeque = 'HN-OC';

    #[Name('Olancho', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Olancho = 'HN-OL';

    #[Name('Santa Bárbara', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Santa_Barbara = 'HN-SB';

    #[Name('Valle', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Valle = 'HN-VA';

    #[Name('Yoro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Honduras_department_Yoro = 'HN-YO';

    #[Name('Budapest', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_capital_city_Budapest = 'HU-BU';

    #[Name('Békéscsaba', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Bekescsaba = 'HU-BC';

    #[Name('Debrecen', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Debrecen = 'HU-DE';

    #[Name('Dunaújváros', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Dunaujvaros = 'HU-DU';

    #[Name('Eger', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Eger = 'HU-EG';

    #[Name('Érd', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Erd = 'HU-ER';

    #[Name('Győr', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Gyor = 'HU-GY';

    #[Name('Hódmezővásárhely', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Hodmezovasarhely = 'HU-HV';

    #[Name('Kaposvár', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Kaposvar = 'HU-KV';

    #[Name('Kecskemét', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Kecskemet = 'HU-KM';

    #[Name('Miskolc', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Miskolc = 'HU-MI';

    #[Name('Nagykanizsa', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Nagykanizsa = 'HU-NK';

    #[Name('Nyíregyháza', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Nyiregyhaza = 'HU-NY';

    #[Name('Pécs', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Pecs = 'HU-PS';

    #[Name('Salgótarján', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Salgotarjan = 'HU-ST';

    #[Name('Sopron', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Sopron = 'HU-SN';

    #[Name('Szeged', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Szeged = 'HU-SD';

    #[Name('Székesfehérvár', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Szekesfehervar = 'HU-SF';

    #[Name('Szekszárd', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Szekszard = 'HU-SS';

    #[Name('Szolnok', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Szolnok = 'HU-SK';

    #[Name('Szombathely', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Szombathely = 'HU-SH';

    #[Name('Tatabánya', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Tatabanya = 'HU-TB';

    #[Name('Veszprém', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Veszprem = 'HU-VM';

    #[Name('Zalaegerszeg', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_city_with_county_rights_Zalaegerszeg = 'HU-ZE';

    #[Name('Bács-Kiskun', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Bacs_Kiskun = 'HU-BK';

    #[Name('Baranya', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Baranya = 'HU-BA';

    #[Name('Békés', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Bekes = 'HU-BE';

    #[Name('Borsod-Abaúj-Zemplén', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Borsod_Abauj_Zemplen = 'HU-BZ';

    #[Name('Csongrád-Csanád', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Csongrad_Csanad = 'HU-CS';

    #[Name('Fejér', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Fejer = 'HU-FE';

    #[Name('Győr-Moson-Sopron', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Gyor_Moson_Sopron = 'HU-GS';

    #[Name('Hajdú-Bihar', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Hajdu_Bihar = 'HU-HB';

    #[Name('Heves', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Heves = 'HU-HE';

    #[Name('Jász-Nagykun-Szolnok', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Jasz_Nagykun_Szolnok = 'HU-JN';

    #[Name('Komárom-Esztergom', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Komarom_Esztergom = 'HU-KE';

    #[Name('Nógrád', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Nograd = 'HU-NO';

    #[Name('Pest', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Pest = 'HU-PE';

    #[Name('Somogy', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Somogy = 'HU-SO';

    #[Name('Szabolcs-Szatmár-Bereg', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Szabolcs_Szatmar_Bereg = 'HU-SZ';

    #[Name('Tolna', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Tolna = 'HU-TO';

    #[Name('Vas', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Vas = 'HU-VA';

    #[Name('Veszprém', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Veszprem = 'HU-VE';

    #[Name('Zala', [LanguageAlpha2::Hungarian], null, null)]
    case Hungary_county_Zala = 'HU-ZA';

    #[Name('Akraneskaupstaður', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Akraneskaupstadur = 'IS-AKN';

    #[Name('Akureyrarbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Akureyrarbaer = 'IS-AKU';

    #[Name('Árneshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Arneshreppur = 'IS-ARN';

    #[Name('Ásahreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Asahreppur = 'IS-ASA';

    #[Name('Bláskógabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Blaskogabyggd = 'IS-BLA';

    #[Name('Bolungarvíkurkaupstaður', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Bolungarvikurkaupstadur = 'IS-BOL';

    #[Name('Borgarbyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Borgarbyggd = 'IS-BOG';

    #[Name('Dalabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Dalabyggd = 'IS-DAB';

    #[Name('Dalvíkurbyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Dalvikurbyggd = 'IS-DAV';

    #[Name('Eyja- og Miklaholtshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Eyja_og_Miklaholtshreppur = 'IS-EOM';

    #[Name('Eyjafjarðarsveit', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Eyjafjardarsveit = 'IS-EYF';

    #[Name('Fjallabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Fjallabyggd = 'IS-FJL';

    #[Name('Fjarðabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Fjardabyggd = 'IS-FJD';

    #[Name('Fljótsdalshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Fljotsdalshreppur = 'IS-FLR';

    #[Name('Flóahreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Floahreppur = 'IS-FLA';

    #[Name('Garðabær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Gardabaer = 'IS-GAR';

    #[Name('Grímsnes- og Grafningshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Grimsnes_og_Grafningshreppur = 'IS-GOG';

    #[Name('Grindavíkurbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Grindavikurbaer = 'IS-GRN';

    #[Name('Grundarfjarðarbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Grundarfjardarbaer = 'IS-GRU';

    #[Name('Grýtubakkahreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Grytubakkahreppur = 'IS-GRY';

    #[Name('Hafnarfjarðarkaupstaður', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Hafnarfjardarkaupstadur = 'IS-HAF';

    #[Name('Hörgársveit', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Horgarsveit = 'IS-HRG';

    #[Name('Hrunamannahreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Hrunamannahreppur = 'IS-HRU';

    #[Name('Húnabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Hunabyggd = 'IS-HUG';

    #[Name('Húnaþing vestra', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Hunathing_vestra = 'IS-HUV';

    #[Name('Hvalfjarðarsveit', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Hvalfjardarsveit = 'IS-HVA';

    #[Name('Hveragerðisbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Hveragerdisbaer = 'IS-HVE';

    #[Name('Ísafjarðarbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Isafjardarbaer = 'IS-ISA';

    #[Name('Kaldrananeshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Kaldrananeshreppur = 'IS-KAL';

    #[Name('Kjósarhreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Kjosarhreppur = 'IS-KJO';

    #[Name('Kópavogsbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Kopavogsbaer = 'IS-KOP';

    #[Name('Langanesbyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Langanesbyggd = 'IS-LAN';

    #[Name('Mosfellsbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Mosfellsbaer = 'IS-MOS';

    #[Name('Múlaþing', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Mulathing = 'IS-MUL';

    #[Name('Mýrdalshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Myrdalshreppur = 'IS-MYR';

    #[Name('Norðurþing', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Nordurthing = 'IS-NOR';

    #[Name('Rangárþing eystra', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Rangarthing_eystra = 'IS-RGE';

    #[Name('Rangárþing ytra', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Rangarthing_ytra = 'IS-RGY';

    #[Name('Reykhólahreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Reykholahreppur = 'IS-RHH';

    #[Name('Reykjanesbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Reykjanesbaer = 'IS-RKN';

    #[Name('Reykjavíkurborg', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Reykjavikurborg = 'IS-RKV';

    #[Name('Seltjarnarnesbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Seltjarnarnesbaer = 'IS-SEL';

    #[Name('Skaftárhreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Skaftarhreppur = 'IS-SKF';

    #[Name('Skagabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Skagabyggd = 'IS-SKG';

    #[Name('Skagafjörður', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Skagafjordur = 'IS-SKR';

    #[Name('Skeiða- og Gnúpverjahreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Skeida_og_Gnupverjahreppur = 'IS-SOG';

    #[Name('Skorradalshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Skorradalshreppur = 'IS-SKO';

    #[Name('Snæfellsbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Snaefellsbaer = 'IS-SNF';

    #[Name('Strandabyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Strandabyggd = 'IS-STR';

    #[Name('Stykkishólmsbær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Stykkisholmsbaer = 'IS-STY';

    #[Name('Súðavíkurhreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sudavikurhreppur = 'IS-SDV';

    #[Name('Suðurnesjabær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sudurnesjabaer = 'IS-SDN';

    #[Name('Svalbarðsstrandarhreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Svalbardsstrandarhreppur = 'IS-SBT';

    #[Name('Sveitarfélagið Árborg', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sveitarfelagid_Arborg = 'IS-SFA';

    #[Name('Sveitarfélagið Hornafjörður', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sveitarfelagid_Hornafjordur = 'IS-SHF';

    #[Name('Sveitarfélagið Ölfus', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sveitarfelagid_Olfus = 'IS-SOL';

    #[Name('Sveitarfélagið Skagaströnd', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sveitarfelagid_Skagastrond = 'IS-SSS';

    #[Name('Sveitarfélagið Vogar', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Sveitarfelagid_Vogar = 'IS-SVG';

    #[Name('Þingeyjarsveit', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_THingeyjarsveit = 'IS-THG';

    #[Name('Tálknafjarðarhreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Talknafjardarhreppur = 'IS-TAL';

    #[Name('Tjörneshreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Tjorneshreppur = 'IS-TJO';

    #[Name('Vestmannaeyjabær', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Vestmannaeyjabaer = 'IS-VEM';

    #[Name('Vesturbyggð', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Vesturbyggd = 'IS-VER';

    #[Name('Vopnafjarðarhreppur', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_municipality_Vopnafjardarhreppur = 'IS-VOP';

    #[Name('Austurland', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Austurland = 'IS-7';

    #[Name('Höfuðborgarsvæði', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Hofudborgarsvaedi = 'IS-1';

    #[Name('Norðurland eystra', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Nordurland_eystra = 'IS-6';

    #[Name('Norðurland vestra', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Nordurland_vestra = 'IS-5';

    #[Name('Suðurland', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Sudurland = 'IS-8';

    #[Name('Suðurnes', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Sudurnes = 'IS-2';

    #[Name('Vestfirðir', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Vestfirdir = 'IS-4';

    #[Name('Vesturland', [LanguageAlpha2::Icelandic], null, null)]
    case Iceland_region_Vesturland = 'IS-3';

    #[Name('Andaman and Nicobar Islands', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Andaman_and_Nicobar_Islands = 'IN-AN';

    #[Name('Chandīgarh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Chandigarh = 'IN-CH';

    #[Name('Dādra and Nagar Haveli and Damān and Diu', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Dadra_and_Nagar_Haveli_and_Daman_and_Diu = 'IN-DH';

    #[Name('Delhi', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Delhi = 'IN-DL';

    #[Name('Jammu and Kashmīr', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Jammu_and_Kashmir = 'IN-JK';

    #[Name('Ladākh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Ladakh = 'IN-LA';

    #[Name('Lakshadweep', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_Union_territory_Lakshadweep = 'IN-LD';

    #[Name('Puducherry', [LanguageAlpha2::English], 'Indian System of Transliteration', 'Pondicherry')]
    case India_Union_territory_Puducherry = 'IN-PY';

    #[Name('Andhra Pradesh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Andhra_Pradesh = 'IN-AP';

    #[Name('Arunāchal Pradesh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Arunachal_Pradesh = 'IN-AR';

    #[Name('Assam', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Assam = 'IN-AS';

    #[Name('Bihār', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Bihar = 'IN-BR';

    #[Name('Chhattīsgarh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Chhattisgarh = 'IN-CG';

    #[Name('Goa', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Goa = 'IN-GA';

    #[Name('Gujarāt', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Gujarat = 'IN-GJ';

    #[Name('Haryāna', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Haryana = 'IN-HR';

    #[Name('Himāchal Pradesh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Himachal_Pradesh = 'IN-HP';

    #[Name('Jhārkhand', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Jharkhand = 'IN-JH';

    #[Name('Karnātaka', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Karnataka = 'IN-KA';

    #[Name('Kerala', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Kerala = 'IN-KL';

    #[Name('Madhya Pradesh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Madhya_Pradesh = 'IN-MP';

    #[Name('Mahārāshtra', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Maharashtra = 'IN-MH';

    #[Name('Manipur', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Manipur = 'IN-MN';

    #[Name('Meghālaya', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Meghalaya = 'IN-ML';

    #[Name('Mizoram', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Mizoram = 'IN-MZ';

    #[Name('Nāgāland', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Nagaland = 'IN-NL';

    #[Name('Odisha', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Odisha = 'IN-OD';

    #[Name('Punjab', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Punjab = 'IN-PB';

    #[Name('Rājasthān', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Rajasthan = 'IN-RJ';

    #[Name('Sikkim', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Sikkim = 'IN-SK';

    #[Name('Tamil Nādu', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Tamil_Nadu = 'IN-TN';

    #[Name('Telangāna', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Telangana = 'IN-TS';

    #[Name('Tripura', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Tripura = 'IN-TR';

    #[Name('Uttar Pradesh', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Uttar_Pradesh = 'IN-UP';

    #[Name('Uttarākhand', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_Uttarakhand = 'IN-UK';

    #[Name('West Bengal', [LanguageAlpha2::English], 'Indian System of Transliteration', null)]
    case India_state_West_Bengal = 'IN-WB';

    #[Name('Jakarta Raya', [LanguageAlpha2::Indonesian], null, 'DKI Jakarta; DKI')]
    case Indonesia_capital_district_Jakarta_Raya = 'ID-JK';

    #[Name('Jawa', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Jawa = 'ID-JW';

    #[Name('Kalimantan', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Kalimantan = 'ID-KA';

    #[Name('Maluku', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Maluku = 'ID-ML';

    #[Name('Nusa Tenggara', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Nusa_Tenggara = 'ID-NU';

    #[Name('Papua', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Papua = 'ID-PP';

    #[Name('Sulawesi', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Sulawesi = 'ID-SL';

    #[Name('Sumatera', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_geographical_unit_Sumatera = 'ID-SM';

    #[Name('Aceh', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Aceh = 'ID-AC';

    #[Name('Bali', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Bali = 'ID-BA';

    #[Name('Banten', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Banten = 'ID-BT';

    #[Name('Bengkulu', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Bengkulu = 'ID-BE';

    #[Name('Gorontalo', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Gorontalo = 'ID-GO';

    #[Name('Jambi', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Jambi = 'ID-JA';

    #[Name('Jawa Barat', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Jawa_Barat = 'ID-JB';

    #[Name('Jawa Tengah', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Jawa_Tengah = 'ID-JT';

    #[Name('Jawa Timur', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Jawa_Timur = 'ID-JI';

    #[Name('Kalimantan Barat', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kalimantan_Barat = 'ID-KB';

    #[Name('Kalimantan Selatan', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kalimantan_Selatan = 'ID-KS';

    #[Name('Kalimantan Tengah', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kalimantan_Tengah = 'ID-KT';

    #[Name('Kalimantan Timur', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kalimantan_Timur = 'ID-KI';

    #[Name('Kalimantan Utara', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kalimantan_Utara = 'ID-KU';

    #[Name('Kepulauan Bangka Belitung', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kepulauan_Bangka_Belitung = 'ID-BB';

    #[Name('Kepulauan Riau', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Kepulauan_Riau = 'ID-KR';

    #[Name('Lampung', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Lampung = 'ID-LA';

    #[Name('Maluku', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Maluku = 'ID-MA';

    #[Name('Maluku Utara', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Maluku_Utara = 'ID-MU';

    #[Name('Nusa Tenggara Barat', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Nusa_Tenggara_Barat = 'ID-NB';

    #[Name('Nusa Tenggara Timur', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Nusa_Tenggara_Timur = 'ID-NT';

    #[Name('Papua', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Papua = 'ID-PA';

    #[Name('Papua Barat', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Papua_Barat = 'ID-PB';

    #[Name('Papua Barat Daya', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Papua_Barat_Daya = 'ID-PD';

    #[Name('Papua Pengunungan', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Papua_Pengunungan = 'ID-PE';

    #[Name('Papua Selatan', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Papua_Selatan = 'ID-PS';

    #[Name('Papua Tengah', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Papua_Tengah = 'ID-PT';

    #[Name('Riau', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Riau = 'ID-RI';

    #[Name('Sulawesi Barat', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sulawesi_Barat = 'ID-SR';

    #[Name('Sulawesi Selatan', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sulawesi_Selatan = 'ID-SN';

    #[Name('Sulawesi Tengah', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sulawesi_Tengah = 'ID-ST';

    #[Name('Sulawesi Tenggara', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sulawesi_Tenggara = 'ID-SG';

    #[Name('Sulawesi Utara', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sulawesi_Utara = 'ID-SA';

    #[Name('Sumatera Barat', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sumatera_Barat = 'ID-SB';

    #[Name('Sumatera Selatan', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sumatera_Selatan = 'ID-SS';

    #[Name('Sumatera Utara', [LanguageAlpha2::Indonesian], null, null)]
    case Indonesia_province_Sumatera_Utara = 'ID-SU';

    #[Name('Yogyakarta', [LanguageAlpha2::Indonesian], null, 'DI Yogya; DIY')]
    case Indonesia_special_region_Yogyakarta = 'ID-YO';

    #[Name('Alborz', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Alborz = 'IR-30';

    #[Name('Ardabīl', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Ardabil = 'IR-24';

    #[Name('Āz̄ārbāyjān-e Ghārbī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Azarbayjan_e_Gharbi = 'IR-04';

    #[Name('Āz̄ārbāyjān-e Shārqī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Azarbayjan_e_Sharqi = 'IR-03';

    #[Name('Būshehr', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Bushehr = 'IR-18';

    #[Name('Chahār Maḩāl va Bakhtīārī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Chahar_Mahal_va_Bakhtiari = 'IR-14';

    #[Name('Eşfahān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Esfahan = 'IR-10';

    #[Name('Fārs', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Fars = 'IR-07';

    #[Name('Gīlān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Gilan = 'IR-01';

    #[Name('Golestān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Golestan = 'IR-27';

    #[Name('Hamadān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Hamadan = 'IR-13';

    #[Name('Hormozgān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Hormozgan = 'IR-22';

    #[Name('Īlām', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Ilam = 'IR-16';

    #[Name('Kermān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Kerman = 'IR-08';

    #[Name('Kermānshāh', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Kermanshah = 'IR-05';

    #[Name('Khorāsān-e Jonūbī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Khorasan_e_Jonubi = 'IR-29';

    #[Name('Khorāsān-e Raẕavī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Khorasan_e_Razavi = 'IR-09';

    #[Name('Khorāsān-e Shomālī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Khorasan_e_Shomali = 'IR-28';

    #[Name('Khūzestān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Khuzestan = 'IR-06';

    #[Name('Kohgīlūyeh va Bowyer Aḩmad', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Kohgiluyeh_va_Bowyer_Ahmad = 'IR-17';

    #[Name('Kordestān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Kordestan = 'IR-12';

    #[Name('Lorestān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Lorestan = 'IR-15';

    #[Name('Markazī', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Markazi = 'IR-00';

    #[Name('Māzandarān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Mazandaran = 'IR-02';

    #[Name('Qazvīn', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Qazvin = 'IR-26';

    #[Name('Qom', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Qom = 'IR-25';

    #[Name('Semnān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Semnan = 'IR-20';

    #[Name('Sīstān va Balūchestān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Sistan_va_Baluchestan = 'IR-11';

    #[Name('Tehrān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Tehran = 'IR-23';

    #[Name('Yazd', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Yazd = 'IR-21';

    #[Name('Zanjān', [LanguageAlpha2::Persian], 'BGN/PCGN 1958', null)]
    case Iran_province_Zanjan = 'IR-19';

    #[Name('Al Anbār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Al_Anbar = 'IQ-AN';

    #[Name('Al Başrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Al_Basrah = 'IQ-BA';

    #[Name('Al Muthanná', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Al_Muthanna = 'IQ-MU';

    #[Name('Al Qādisīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Al_Qadisiyah = 'IQ-QA';

    #[Name('An Najaf', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_An_Najaf = 'IQ-NA';

    #[Name('Arbīl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Hewlêr', [LanguageAlpha2::Kurdish], 'BGN/PCGN 2007', null)]
    case Iraq_governorate_Arbil = 'IQ-AR';

    #[Name('As Sulaymānīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Slêmanî', [LanguageAlpha2::Kurdish], 'BGN/PCGN 2007', null)]
    case Iraq_governorate_As_Sulaymaniyah = 'IQ-SU';

    #[Name('Bābil', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Babil = 'IQ-BB';

    #[Name('Baghdād', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Baghdad = 'IQ-BG';

    #[Name('Dahūk', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Dihok', [LanguageAlpha2::Kurdish], 'BGN/PCGN 2007', null)]
    case Iraq_governorate_Dahuk = 'IQ-DA';

    #[Name('Dhī Qār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Dhi_Qar = 'IQ-DQ';

    #[Name('Diyālá', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Diyala = 'IQ-DI';

    #[Name('Karbalā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Karbala = 'IQ-KA';

    #[Name('Kirkūk', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Kirkuk = 'IQ-KI';

    #[Name('Maysān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Maysan = 'IQ-MA';

    #[Name('Nīnawá', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Ninawa = 'IQ-NI';

    #[Name('Şalāḩ ad Dīn', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Salah_ad_Din = 'IQ-SD';

    #[Name('Wāsiţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_governorate_Wasit = 'IQ-WA';

    #[Name('Herêm-î Kurdistan', [LanguageAlpha2::Kurdish], 'BGN/PCGN 2007', null)]
    #[Name('Iqlīm Kūrdistān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Iraq_region_Herem_i_Kurdistan = 'IQ-KR';

    #[Name('An Cabhán', [LanguageAlpha2::Irish], null, null)]
    #[Name('Cavan', [LanguageAlpha2::English], null, null)]
    case Ireland_county_An_Cabhan = 'IE-CN';

    #[Name('An Clár', [LanguageAlpha2::Irish], null, null)]
    #[Name('Clare', [LanguageAlpha2::English], null, null)]
    case Ireland_county_An_Clar = 'IE-CE';

    #[Name('An Iarmhí', [LanguageAlpha2::Irish], null, null)]
    #[Name('Westmeath', [LanguageAlpha2::English], null, null)]
    case Ireland_county_An_Iarmhi = 'IE-WH';

    #[Name('An Longfort', [LanguageAlpha2::Irish], null, null)]
    #[Name('Longford', [LanguageAlpha2::English], null, null)]
    case Ireland_county_An_Longfort = 'IE-LD';

    #[Name('An Mhí', [LanguageAlpha2::Irish], null, null)]
    #[Name('Meath', [LanguageAlpha2::English], null, null)]
    case Ireland_county_An_Mhi = 'IE-MH';

    #[Name('Baile Átha Cliath', [LanguageAlpha2::Irish], null, null)]
    #[Name('Dublin', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Baile_Atha_Cliath = 'IE-D';

    #[Name('Carlow', [LanguageAlpha2::English], null, null)]
    #[Name('Ceatharlach', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Carlow = 'IE-CW';

    #[Name('Ciarraí', [LanguageAlpha2::Irish], null, null)]
    #[Name('Kerry', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Ciarrai = 'IE-KY';

    #[Name('Cill Chainnigh', [LanguageAlpha2::Irish], null, null)]
    #[Name('Kilkenny', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Cill_Chainnigh = 'IE-KK';

    #[Name('Cill Dara', [LanguageAlpha2::Irish], null, null)]
    #[Name('Kildare', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Cill_Dara = 'IE-KE';

    #[Name('Cill Mhantáin', [LanguageAlpha2::Irish], null, null)]
    #[Name('Wicklow', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Cill_Mhantain = 'IE-WW';

    #[Name('Corcaigh', [LanguageAlpha2::Irish], null, null)]
    #[Name('Cork', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Corcaigh = 'IE-CO';

    #[Name('Donegal', [LanguageAlpha2::English], null, null)]
    #[Name('Dún na nGall', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Donegal = 'IE-DL';

    #[Name('Gaillimh', [LanguageAlpha2::Irish], null, null)]
    #[Name('Galway', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Gaillimh = 'IE-G';

    #[Name('Laois', [LanguageAlpha2::Irish, LanguageAlpha2::English], null, null)]
    case Ireland_county_Laois = 'IE-LS';

    #[Name('Leitrim', [LanguageAlpha2::English], null, null)]
    #[Name('Liatroim', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Leitrim = 'IE-LM';

    #[Name('Limerick', [LanguageAlpha2::English], null, null)]
    #[Name('Luimneach', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Limerick = 'IE-LK';

    #[Name('Loch Garman', [LanguageAlpha2::Irish], null, null)]
    #[Name('Wexford', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Loch_Garman = 'IE-WX';

    #[Name('Louth', [LanguageAlpha2::English], null, null)]
    #[Name('Lú', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Louth = 'IE-LH';

    #[Name('Maigh Eo', [LanguageAlpha2::Irish], null, null)]
    #[Name('Mayo', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Maigh_Eo = 'IE-MO';

    #[Name('Monaghan', [LanguageAlpha2::English], null, null)]
    #[Name('Muineachán', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Monaghan = 'IE-MN';

    #[Name('Offaly', [LanguageAlpha2::English], null, null)]
    #[Name('Uíbh Fhailí', [LanguageAlpha2::Irish], null, null)]
    case Ireland_county_Offaly = 'IE-OY';

    #[Name('Port Láirge', [LanguageAlpha2::Irish], null, null)]
    #[Name('Waterford', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Port_Lairge = 'IE-WD';

    #[Name('Ros Comáin', [LanguageAlpha2::Irish], null, null)]
    #[Name('Roscommon', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Ros_Comain = 'IE-RN';

    #[Name('Sligeach', [LanguageAlpha2::Irish], null, null)]
    #[Name('Sligo', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Sligeach = 'IE-SO';

    #[Name('Tiobraid Árann', [LanguageAlpha2::Irish], null, null)]
    #[Name('Tipperary', [LanguageAlpha2::English], null, null)]
    case Ireland_county_Tiobraid_Arann = 'IE-TA';

    #[Name('An Mhumhain', [LanguageAlpha2::Irish], null, null)]
    #[Name('Munster', [LanguageAlpha2::English], null, null)]
    case Ireland_province_An_Mhumhain = 'IE-M';

    #[Name('Connacht', [LanguageAlpha2::Irish], null, null)]
    #[Name('Connaught', [LanguageAlpha2::English], null, null)]
    case Ireland_province_Connacht = 'IE-C';

    #[Name('Laighin', [LanguageAlpha2::Irish], null, null)]
    #[Name('Leinster', [LanguageAlpha2::English], null, null)]
    case Ireland_province_Laighin = 'IE-L';

    #[Name('Ulaidh', [LanguageAlpha2::Irish], null, null)]
    #[Name('Ulster', [LanguageAlpha2::English], null, null)]
    case Ireland_province_Ulaidh = 'IE-U';

    #[Name('Al Awsaţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'El Awsaṭ')]
    #[Name('HaMerkaz', [LanguageAlpha2::Hebrew], 'National 2006 = UN IX/9 2007', 'Central')]
    case Israel_district_Al_Awsat = 'IL-M';

    #[Name('Al Janūbī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'El Janūbī')]
    #[Name('HaDarom', [LanguageAlpha2::Hebrew], 'National 2006 = UN IX/9 2007', 'Southern')]
    case Israel_district_Al_Janubi = 'IL-D';

    #[Name('Al Quds', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'El Quds')]
    #[Name('Yerushalayim', [LanguageAlpha2::Hebrew], 'National 2006 = UN IX/9 2007', 'Jerusalem')]
    case Israel_district_Al_Quds = 'IL-JM';

    #[Name('Ash Shamālī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Esh Shamālī')]
    #[Name('HaTsafon', [LanguageAlpha2::Hebrew], 'National 2006 = UN IX/9 2007', 'Northern')]
    case Israel_district_Ash_Shamali = 'IL-Z';

    #[Name('H̱efa', [LanguageAlpha2::Hebrew], 'National 2006 = UN IX/9 2007', 'Haifa')]
    #[Name('Ḩayfā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Ḥeifa')]
    case Israel_district_Hefa = 'IL-HA';

    #[Name('Tall Abīb', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Tell Abīb')]
    #[Name('Tel Aviv', [LanguageAlpha2::Hebrew], 'National 2006 = UN IX/9 2007', null)]
    case Israel_district_Tall_Abib = 'IL-TA';

    #[Name('Bolzano', [LanguageAlpha2::Italian], null, null)]
    #[Name('Bozen', [LanguageAlpha2::German], null, null)]
    case Italy_autonomous_province_Bolzano = 'IT-BZ';

    #[Name('Trento', [LanguageAlpha2::Italian], null, null)]
    case Italy_autonomous_province_Trento = 'IT-TN';

    #[Name('Friuli Venezia Giulia', [LanguageAlpha2::Italian], null, null)]
    case Italy_autonomous_region_Friuli_Venezia_Giulia = 'IT-36';

    #[Name('Sardegna', [LanguageAlpha2::Italian], null, null)]
    case Italy_autonomous_region_Sardegna = 'IT-88';

    #[Name('Sicilia', [LanguageAlpha2::Italian], null, null)]
    case Italy_autonomous_region_Sicilia = 'IT-82';

    #[Name('Trentino-Alto Adige', [LanguageAlpha2::Italian], null, null)]
    #[Name('Trentino-Südtirol', [LanguageAlpha2::German], null, null)]
    case Italy_autonomous_region_Trentino_Alto_Adige = 'IT-32';

    #[Name('Val d\'Aoste', [LanguageAlpha2::French], null, null)]
    #[Name('Valle d\'Aosta', [LanguageAlpha2::Italian], null, null)]
    case Italy_autonomous_region_Val_d_Aoste = 'IT-23';

    #[Name('Gorizia', [LanguageAlpha2::Italian], null, null)]
    case Italy_decentralized_regional_entity_Gorizia = 'IT-GO';

    #[Name('Pordenone', [LanguageAlpha2::Italian], null, null)]
    case Italy_decentralized_regional_entity_Pordenone = 'IT-PN';

    #[Name('Trieste', [LanguageAlpha2::Italian], null, null)]
    case Italy_decentralized_regional_entity_Trieste = 'IT-TS';

    #[Name('Udine', [LanguageAlpha2::Italian], null, null)]
    case Italy_decentralized_regional_entity_Udine = 'IT-UD';

    #[Name('Agrigento', [LanguageAlpha2::Italian], null, null)]
    case Italy_free_municipal_consortium_Agrigento = 'IT-AG';

    #[Name('Caltanissetta', [LanguageAlpha2::Italian], null, null)]
    case Italy_free_municipal_consortium_Caltanissetta = 'IT-CL';

    #[Name('Enna', [LanguageAlpha2::Italian], null, null)]
    case Italy_free_municipal_consortium_Enna = 'IT-EN';

    #[Name('Ragusa', [LanguageAlpha2::Italian], null, null)]
    case Italy_free_municipal_consortium_Ragusa = 'IT-RG';

    #[Name('Siracusa', [LanguageAlpha2::Italian], null, null)]
    case Italy_free_municipal_consortium_Siracusa = 'IT-SR';

    #[Name('Trapani', [LanguageAlpha2::Italian], null, null)]
    case Italy_free_municipal_consortium_Trapani = 'IT-TP';

    #[Name('Bari', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Bari = 'IT-BA';

    #[Name('Bologna', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Bologna = 'IT-BO';

    #[Name('Cagliari', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Cagliari = 'IT-CA';

    #[Name('Catania', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Catania = 'IT-CT';

    #[Name('Firenze', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Firenze = 'IT-FI';

    #[Name('Genova', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Genova = 'IT-GE';

    #[Name('Messina', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Messina = 'IT-ME';

    #[Name('Milano', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Milano = 'IT-MI';

    #[Name('Napoli', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Napoli = 'IT-NA';

    #[Name('Palermo', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Palermo = 'IT-PA';

    #[Name('Reggio Calabria', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Reggio_Calabria = 'IT-RC';

    #[Name('Roma', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Roma = 'IT-RM';

    #[Name('Torino', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Torino = 'IT-TO';

    #[Name('Venezia', [LanguageAlpha2::Italian], null, null)]
    case Italy_metropolitan_city_Venezia = 'IT-VE';

    #[Name('Alessandria', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Alessandria = 'IT-AL';

    #[Name('Ancona', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Ancona = 'IT-AN';

    #[Name('Arezzo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Arezzo = 'IT-AR';

    #[Name('Ascoli Piceno', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Ascoli_Piceno = 'IT-AP';

    #[Name('Asti', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Asti = 'IT-AT';

    #[Name('Avellino', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Avellino = 'IT-AV';

    #[Name('Barletta-Andria-Trani', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Barletta_Andria_Trani = 'IT-BT';

    #[Name('Belluno', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Belluno = 'IT-BL';

    #[Name('Benevento', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Benevento = 'IT-BN';

    #[Name('Bergamo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Bergamo = 'IT-BG';

    #[Name('Biella', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Biella = 'IT-BI';

    #[Name('Brescia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Brescia = 'IT-BS';

    #[Name('Brindisi', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Brindisi = 'IT-BR';

    #[Name('Campobasso', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Campobasso = 'IT-CB';

    #[Name('Caserta', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Caserta = 'IT-CE';

    #[Name('Catanzaro', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Catanzaro = 'IT-CZ';

    #[Name('Chieti', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Chieti = 'IT-CH';

    #[Name('Como', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Como = 'IT-CO';

    #[Name('Cosenza', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Cosenza = 'IT-CS';

    #[Name('Cremona', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Cremona = 'IT-CR';

    #[Name('Crotone', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Crotone = 'IT-KR';

    #[Name('Cuneo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Cuneo = 'IT-CN';

    #[Name('Fermo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Fermo = 'IT-FM';

    #[Name('Ferrara', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Ferrara = 'IT-FE';

    #[Name('Foggia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Foggia = 'IT-FG';

    #[Name('Forlì-Cesena', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Forli_Cesena = 'IT-FC';

    #[Name('Frosinone', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Frosinone = 'IT-FR';

    #[Name('Grosseto', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Grosseto = 'IT-GR';

    #[Name('Imperia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Imperia = 'IT-IM';

    #[Name('Isernia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Isernia = 'IT-IS';

    #[Name('L\'Aquila', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_L_Aquila = 'IT-AQ';

    #[Name('La Spezia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_La_Spezia = 'IT-SP';

    #[Name('Latina', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Latina = 'IT-LT';

    #[Name('Lecce', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Lecce = 'IT-LE';

    #[Name('Lecco', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Lecco = 'IT-LC';

    #[Name('Livorno', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Livorno = 'IT-LI';

    #[Name('Lodi', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Lodi = 'IT-LO';

    #[Name('Lucca', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Lucca = 'IT-LU';

    #[Name('Macerata', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Macerata = 'IT-MC';

    #[Name('Mantova', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Mantova = 'IT-MN';

    #[Name('Massa-Carrara', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Massa_Carrara = 'IT-MS';

    #[Name('Matera', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Matera = 'IT-MT';

    #[Name('Modena', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Modena = 'IT-MO';

    #[Name('Monza e Brianza', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Monza_e_Brianza = 'IT-MB';

    #[Name('Novara', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Novara = 'IT-NO';

    #[Name('Nuoro', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Nuoro = 'IT-NU';

    #[Name('Oristano', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Oristano = 'IT-OR';

    #[Name('Padova', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Padova = 'IT-PD';

    #[Name('Parma', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Parma = 'IT-PR';

    #[Name('Pavia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Pavia = 'IT-PV';

    #[Name('Perugia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Perugia = 'IT-PG';

    #[Name('Pesaro e Urbino', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Pesaro_e_Urbino = 'IT-PU';

    #[Name('Pescara', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Pescara = 'IT-PE';

    #[Name('Piacenza', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Piacenza = 'IT-PC';

    #[Name('Pisa', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Pisa = 'IT-PI';

    #[Name('Pistoia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Pistoia = 'IT-PT';

    #[Name('Potenza', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Potenza = 'IT-PZ';

    #[Name('Prato', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Prato = 'IT-PO';

    #[Name('Ravenna', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Ravenna = 'IT-RA';

    #[Name('Reggio Emilia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Reggio_Emilia = 'IT-RE';

    #[Name('Rieti', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Rieti = 'IT-RI';

    #[Name('Rimini', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Rimini = 'IT-RN';

    #[Name('Rovigo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Rovigo = 'IT-RO';

    #[Name('Salerno', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Salerno = 'IT-SA';

    #[Name('Sassari', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Sassari = 'IT-SS';

    #[Name('Savona', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Savona = 'IT-SV';

    #[Name('Siena', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Siena = 'IT-SI';

    #[Name('Sondrio', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Sondrio = 'IT-SO';

    #[Name('Sud Sardegna', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Sud_Sardegna = 'IT-SU';

    #[Name('Taranto', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Taranto = 'IT-TA';

    #[Name('Teramo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Teramo = 'IT-TE';

    #[Name('Terni', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Terni = 'IT-TR';

    #[Name('Treviso', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Treviso = 'IT-TV';

    #[Name('Varese', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Varese = 'IT-VA';

    #[Name('Verbano-Cusio-Ossola', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Verbano_Cusio_Ossola = 'IT-VB';

    #[Name('Vercelli', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Vercelli = 'IT-VC';

    #[Name('Verona', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Verona = 'IT-VR';

    #[Name('Vibo Valentia', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Vibo_Valentia = 'IT-VV';

    #[Name('Vicenza', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Vicenza = 'IT-VI';

    #[Name('Viterbo', [LanguageAlpha2::Italian], null, null)]
    case Italy_province_Viterbo = 'IT-VT';

    #[Name('Abruzzo', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Abruzzo = 'IT-65';

    #[Name('Basilicata', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Basilicata = 'IT-77';

    #[Name('Calabria', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Calabria = 'IT-78';

    #[Name('Campania', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Campania = 'IT-72';

    #[Name('Emilia-Romagna', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Emilia_Romagna = 'IT-45';

    #[Name('Lazio', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Lazio = 'IT-62';

    #[Name('Liguria', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Liguria = 'IT-42';

    #[Name('Lombardia', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Lombardia = 'IT-25';

    #[Name('Marche', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Marche = 'IT-57';

    #[Name('Molise', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Molise = 'IT-67';

    #[Name('Piemonte', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Piemonte = 'IT-21';

    #[Name('Puglia', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Puglia = 'IT-75';

    #[Name('Toscana', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Toscana = 'IT-52';

    #[Name('Umbria', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Umbria = 'IT-55';

    #[Name('Veneto', [LanguageAlpha2::Italian], null, null)]
    case Italy_region_Veneto = 'IT-34';

    #[Name('Clarendon', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Clarendon = 'JM-13';

    #[Name('Hanover', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Hanover = 'JM-09';

    #[Name('Kingston', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Kingston = 'JM-01';

    #[Name('Manchester', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Manchester = 'JM-12';

    #[Name('Portland', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Portland = 'JM-04';

    #[Name('Saint Andrew', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_Andrew = 'JM-02';

    #[Name('Saint Ann', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_Ann = 'JM-06';

    #[Name('Saint Catherine', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_Catherine = 'JM-14';

    #[Name('Saint Elizabeth', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_Elizabeth = 'JM-11';

    #[Name('Saint James', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_James = 'JM-08';

    #[Name('Saint Mary', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_Mary = 'JM-05';

    #[Name('Saint Thomas', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Saint_Thomas = 'JM-03';

    #[Name('Trelawny', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Trelawny = 'JM-07';

    #[Name('Westmoreland', [LanguageAlpha2::English], null, null)]
    case Jamaica_parish_Westmoreland = 'JM-10';

    #[Name('Aichi', [LanguageAlpha2::English], null, null)]
    #[Name('Aiti', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Aichi = 'JP-23';

    #[Name('Akita', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Akita = 'JP-05';

    #[Name('Aomori', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Aomori = 'JP-02';

    #[Name('Chiba', [LanguageAlpha2::English], null, null)]
    #[Name('Tiba', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Chiba = 'JP-12';

    #[Name('Ehime', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Ehime = 'JP-38';

    #[Name('Fukui', [LanguageAlpha2::English], null, null)]
    #[Name('Hukui', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Fukui = 'JP-18';

    #[Name('Fukuoka', [LanguageAlpha2::English], null, null)]
    #[Name('Hukuoka', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Fukuoka = 'JP-40';

    #[Name('Fukushima', [LanguageAlpha2::English], null, null)]
    #[Name('Hukusima', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Fukushima = 'JP-07';

    #[Name('Gifu', [LanguageAlpha2::English], null, null)]
    #[Name('Gihu', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Gifu = 'JP-21';

    #[Name('Gunma', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Gunma = 'JP-10';

    #[Name('Hiroshima', [LanguageAlpha2::English], null, null)]
    #[Name('Hirosima', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Hiroshima = 'JP-34';

    #[Name('Hokkaido', [LanguageAlpha2::English], null, null)]
    #[Name('Hokkaidô', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Hokkaido = 'JP-01';

    #[Name('Hyogo', [LanguageAlpha2::English], null, null)]
    #[Name('Hyôgo', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Hyogo = 'JP-28';

    #[Name('Ibaraki', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Ibaraki = 'JP-08';

    #[Name('Ishikawa', [LanguageAlpha2::English], null, null)]
    #[Name('Isikawa', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Ishikawa = 'JP-17';

    #[Name('Iwate', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Iwate = 'JP-03';

    #[Name('Kagawa', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Kagawa = 'JP-37';

    #[Name('Kagoshima', [LanguageAlpha2::English], null, null)]
    #[Name('Kagosima', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Kagoshima = 'JP-46';

    #[Name('Kanagawa', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Kanagawa = 'JP-14';

    #[Name('Kochi', [LanguageAlpha2::English], null, null)]
    #[Name('Kôti', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Kochi = 'JP-39';

    #[Name('Kumamoto', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Kumamoto = 'JP-43';

    #[Name('Kyoto', [LanguageAlpha2::English], null, null)]
    #[Name('Kyôto', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Kyoto = 'JP-26';

    #[Name('Mie', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Mie = 'JP-24';

    #[Name('Miyagi', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Miyagi = 'JP-04';

    #[Name('Miyazaki', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Miyazaki = 'JP-45';

    #[Name('Nagano', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Nagano = 'JP-20';

    #[Name('Nagasaki', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Nagasaki = 'JP-42';

    #[Name('Nara', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Nara = 'JP-29';

    #[Name('Niigata', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Niigata = 'JP-15';

    #[Name('Oita', [LanguageAlpha2::English], null, null)]
    #[Name('Ôita', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Oita = 'JP-44';

    #[Name('Okayama', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Okayama = 'JP-33';

    #[Name('Okinawa', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Okinawa = 'JP-47';

    #[Name('Osaka', [LanguageAlpha2::English], null, null)]
    #[Name('Ôsaka', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Osaka = 'JP-27';

    #[Name('Saga', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Saga = 'JP-41';

    #[Name('Saitama', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Saitama = 'JP-11';

    #[Name('Shiga', [LanguageAlpha2::English], null, null)]
    #[Name('Siga', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Shiga = 'JP-25';

    #[Name('Shimane', [LanguageAlpha2::English], null, null)]
    #[Name('Simane', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Shimane = 'JP-32';

    #[Name('Shizuoka', [LanguageAlpha2::English], null, null)]
    #[Name('Sizuoka', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Shizuoka = 'JP-22';

    #[Name('Tochigi', [LanguageAlpha2::English], null, null)]
    #[Name('Totigi', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Tochigi = 'JP-09';

    #[Name('Tokushima', [LanguageAlpha2::English], null, null)]
    #[Name('Tokusima', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Tokushima = 'JP-36';

    #[Name('Tokyo', [LanguageAlpha2::English], null, null)]
    #[Name('Tôkyô', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Tokyo = 'JP-13';

    #[Name('Tottori', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Tottori = 'JP-31';

    #[Name('Toyama', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Toyama = 'JP-16';

    #[Name('Wakayama', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Wakayama = 'JP-30';

    #[Name('Yamagata', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Yamagata = 'JP-06';

    #[Name('Yamaguchi', [LanguageAlpha2::English], null, null)]
    #[Name('Yamaguti', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Yamaguchi = 'JP-35';

    #[Name('Yamanashi', [LanguageAlpha2::English], null, null)]
    #[Name('Yamanasi', [LanguageAlpha2::Japanese], 'ISO 3602:1989', null)]
    case Japan_prefecture_Yamanashi = 'JP-19';

    #[Name('‘Ajlūn', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Ajlun = 'JO-AJ';

    #[Name('Al ‘Aqabah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Aqaba')]
    case Jordan_governorate_Al_Aqabah = 'JO-AQ';

    #[Name('Al ‘A̅şimah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', '‘Ammān')]
    case Jordan_governorate_Al_Asimah = 'JO-AM';

    #[Name('Al Balqā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Al_Balqa = 'JO-BA';

    #[Name('Al Karak', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Al_Karak = 'JO-KA';

    #[Name('Al Mafraq', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Al_Mafraq = 'JO-MA';

    #[Name('Aţ Ţafīlah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_At_Tafilah = 'JO-AT';

    #[Name('Az Zarqā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Az_Zarqa = 'JO-AZ';

    #[Name('Irbid', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Irbid = 'JO-IR';

    #[Name('Jarash', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Jarash = 'JO-JA';

    #[Name('Ma‘ān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Ma_an = 'JO-MN';

    #[Name('Mādabā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Jordan_governorate_Madaba = 'JO-MD';

    #[Name('Almaty', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Almaty', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Almaty', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kazakhstan_city_Almaty = 'KZ-75';

    #[Name('Astana', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Astana', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Astana', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kazakhstan_city_Astana = 'KZ-71';

    #[Name('Shymkent', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Shymkent', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Šimkent', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kazakhstan_city_Shymkent = 'KZ-79';

    #[Name('Abajskaja oblast’', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Abay oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Abayskaya oblast’', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kazakhstan_region_Abajskaja_oblast = 'KZ-10';

    #[Name('Akmolinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Akmolinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Aqmola oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Akmolinskaja_oblast = 'KZ-11';

    #[Name('Aktjubinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Aktyubinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Aqtöbe oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Aktjubinskaja_oblast = 'KZ-15';

    #[Name('Almatinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Almatinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Almaty oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Almatinskaja_oblast = 'KZ-19';

    #[Name('Atyrauskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Atyrauskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Atyraū oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Atyrauskaja_oblast = 'KZ-23';

    #[Name('Batys Qazaqstan oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Zapadno-Kazahstanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Zapadno-Kazakhstanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kazakhstan_region_Batys_Qazaqstan_oblysy = 'KZ-27';

    #[Name('Karagandinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Karagandinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Qaraghandy oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Karagandinskaja_oblast = 'KZ-35';

    #[Name('Kostanajskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kostanayskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Qostanay oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Kostanajskaja_oblast = 'KZ-39';

    #[Name('Kyzylordinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kyzylordinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Qyzylorda oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Kyzylordinskaja_oblast = 'KZ-43';

    #[Name('Mangghystaū oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Mangistauskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Mangystauskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kazakhstan_region_Mangghystau_oblysy = 'KZ-47';

    #[Name('Pavlodar oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Pavlodarskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Pavlodarskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kazakhstan_region_Pavlodar_oblysy = 'KZ-55';

    #[Name('Severo-Kazahstanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Severo-Kazakhstanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Soltüstik Qazaqstan oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Severo_Kazahstanskaja_oblast = 'KZ-59';

    #[Name('Shyghys Qazaqstan oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Vostochno-Kazakhstanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Vostočno-Kazahstanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kazakhstan_region_Shyghys_Qazaqstan_oblysy = 'KZ-63';

    #[Name('Turkestankaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Turkestanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Türkistan oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Turkestankaya_oblast = 'KZ-61';

    #[Name('Ulytauskaja oblast’', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Ulytauskaya oblast’', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Ulytaū oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    case Kazakhstan_region_Ulytauskaja_oblast = 'KZ-62';

    #[Name('Zhambyl oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Zhambylskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Žambylskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kazakhstan_region_Zhambyl_oblysy = 'KZ-31';

    #[Name('Zhetisū oblysy', [LanguageAlpha2::Kazakh], 'BGN/PCGN 1979', null)]
    #[Name('Zhetysuskaya oblast’', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Žetysuskaja oblast’', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kazakhstan_region_Zhetisu_oblysy = 'KZ-33';

    #[Name('Baringo', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Baringo = 'KE-01';

    #[Name('Bomet', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Bomet = 'KE-02';

    #[Name('Bungoma', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Bungoma = 'KE-03';

    #[Name('Busia', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Busia = 'KE-04';

    #[Name('Elgeyo/Marakwet', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Elgeyo_Marakwet = 'KE-05';

    #[Name('Embu', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Embu = 'KE-06';

    #[Name('Garissa', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Garissa = 'KE-07';

    #[Name('Homa Bay', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Homa_Bay = 'KE-08';

    #[Name('Isiolo', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Isiolo = 'KE-09';

    #[Name('Kajiado', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kajiado = 'KE-10';

    #[Name('Kakamega', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kakamega = 'KE-11';

    #[Name('Kericho', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kericho = 'KE-12';

    #[Name('Kiambu', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kiambu = 'KE-13';

    #[Name('Kilifi', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kilifi = 'KE-14';

    #[Name('Kirinyaga', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kirinyaga = 'KE-15';

    #[Name('Kisii', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kisii = 'KE-16';

    #[Name('Kisumu', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kisumu = 'KE-17';

    #[Name('Kitui', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kitui = 'KE-18';

    #[Name('Kwale', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Kwale = 'KE-19';

    #[Name('Laikipia', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Laikipia = 'KE-20';

    #[Name('Lamu', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Lamu = 'KE-21';

    #[Name('Machakos', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Machakos = 'KE-22';

    #[Name('Makueni', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Makueni = 'KE-23';

    #[Name('Mandera', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Mandera = 'KE-24';

    #[Name('Marsabit', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Marsabit = 'KE-25';

    #[Name('Meru', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Meru = 'KE-26';

    #[Name('Migori', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Migori = 'KE-27';

    #[Name('Mombasa', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Mombasa = 'KE-28';

    #[Name('Murang\'a', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Murang_a = 'KE-29';

    #[Name('Nairobi City', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Nairobi_City = 'KE-30';

    #[Name('Nakuru', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Nakuru = 'KE-31';

    #[Name('Nandi', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Nandi = 'KE-32';

    #[Name('Narok', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Narok = 'KE-33';

    #[Name('Nyamira', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Nyamira = 'KE-34';

    #[Name('Nyandarua', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Nyandarua = 'KE-35';

    #[Name('Nyeri', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Nyeri = 'KE-36';

    #[Name('Samburu', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Samburu = 'KE-37';

    #[Name('Siaya', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Siaya = 'KE-38';

    #[Name('Taita/Taveta', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Taita_Taveta = 'KE-39';

    #[Name('Tana River', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Tana_River = 'KE-40';

    #[Name('Tharaka-Nithi', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Tharaka_Nithi = 'KE-41';

    #[Name('Trans Nzoia', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Trans_Nzoia = 'KE-42';

    #[Name('Turkana', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Turkana = 'KE-43';

    #[Name('Uasin Gishu', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Uasin_Gishu = 'KE-44';

    #[Name('Vihiga', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Vihiga = 'KE-45';

    #[Name('Wajir', [LanguageAlpha2::English], null, null)]
    case Kenya_county_Wajir = 'KE-46';

    #[Name('West Pokot', [LanguageAlpha2::English], null, null)]
    case Kenya_county_West_Pokot = 'KE-47';

    #[Name('Gilbert Islands', [LanguageAlpha2::English], null, null)]
    case Kiribati_group_of_islands_20_inhabited_islands_Gilbert_Islands = 'KI-G';

    #[Name('Line Islands', [LanguageAlpha2::English], null, null)]
    case Kiribati_group_of_islands_20_inhabited_islands_Line_Islands = 'KI-L';

    #[Name('Phoenix Islands', [LanguageAlpha2::English], null, null)]
    case Kiribati_group_of_islands_20_inhabited_islands_Phoenix_Islands = 'KI-P';

    #[Name('Al Aḩmadī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Kuwait_governorate_Al_Ahmadi = 'KW-AH';

    #[Name('Al ‘Āşimah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Al Kuwayt')]
    case Kuwait_governorate_Al_Asimah = 'KW-KU';

    #[Name('Al Farwānīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Kuwait_governorate_Al_Farwaniyah = 'KW-FA';

    #[Name('Al Jahrā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Kuwait_governorate_Al_Jahra = 'KW-JA';

    #[Name('Ḩawallī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Kuwait_governorate_Hawalli = 'KW-HA';

    #[Name('Mubārak al Kabīr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Kuwait_governorate_Mubarak_al_Kabir = 'KW-MU';

    #[Name('Bishkek Shaary', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    #[Name('Gorod Bishkek', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Gorod Biškek', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kyrgyzstan_city_Bishkek_Shaary = 'KG-GB';

    #[Name('Gorod Osh', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Gorod Oš', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Osh Shaary', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    case Kyrgyzstan_city_Gorod_Osh = 'KG-GO';

    #[Name('Batken', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    #[Name('Batkenskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Batkenskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kyrgyzstan_region_Batken = 'KG-B';

    #[Name('Chuyskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Chüy', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    #[Name('Čujskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kyrgyzstan_region_Chuyskaya_oblast = 'KG-C';

    #[Name('Dzhalal-Abadskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Džalal-Abadskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Jalal-Abad', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    case Kyrgyzstan_region_Dzhalal_Abadskaya_oblast = 'KG-J';

    #[Name('Issyk-Kul\'skaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Issyk-Kul\'skaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Ysyk-Köl', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    case Kyrgyzstan_region_Issyk_Kul_skaja_oblast = 'KG-Y';

    #[Name('Naryn', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    #[Name('Narynskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Narynskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kyrgyzstan_region_Naryn = 'KG-N';

    #[Name('Osh', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    #[Name('Oshskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Ošskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Kyrgyzstan_region_Osh = 'KG-O';

    #[Name('Talas', [LanguageAlpha2::Kirghiz_Kyrgyz], 'BGN/PCGN 1979', null)]
    #[Name('Talasskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Talasskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Kyrgyzstan_region_Talas = 'KG-T';

    #[Name('Viangchan', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Vientiane')]
    case Laos_prefecture_Viangchan = 'LA-VT';

    #[Name('Attapu', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Attapeu')]
    case Laos_province_Attapu = 'LA-AT';

    #[Name('Bokèo', [LanguageAlpha2::Lao], 'LAO CNT 1965', null)]
    case Laos_province_Bokeo = 'LA-BK';

    #[Name('Bolikhamxai', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Borikhamxay')]
    case Laos_province_Bolikhamxai = 'LA-BL';

    #[Name('Champasak', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Champasack')]
    case Laos_province_Champasak = 'LA-CH';

    #[Name('Houaphan', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Huaphanh')]
    case Laos_province_Houaphan = 'LA-HO';

    #[Name('Khammouan', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Khammuane')]
    case Laos_province_Khammouan = 'LA-KH';

    #[Name('Louang Namtha', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Luangnamtha')]
    case Laos_province_Louang_Namtha = 'LA-LM';

    #[Name('Louangphabang', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Luangprabang')]
    case Laos_province_Louangphabang = 'LA-LP';

    #[Name('Oudômxai', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Oudomxay')]
    case Laos_province_Oudomxai = 'LA-OU';

    #[Name('Phôngsali', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Phongsaly')]
    case Laos_province_Phongsali = 'LA-PH';

    #[Name('Salavan', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Saravane')]
    case Laos_province_Salavan = 'LA-SL';

    #[Name('Savannakhét', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Savannakhet')]
    case Laos_province_Savannakhet = 'LA-SV';

    #[Name('Viangchan', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Vientiane')]
    case Laos_province_Viangchan = 'LA-VI';

    #[Name('Xaignabouli', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Xayabury')]
    case Laos_province_Xaignabouli = 'LA-XA';

    #[Name('Xaisômboun', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Xaysomboon')]
    case Laos_province_Xaisomboun = 'LA-XS';

    #[Name('Xékong', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Sekong')]
    case Laos_province_Xekong = 'LA-XE';

    #[Name('Xiangkhouang', [LanguageAlpha2::Lao], 'LAO CNT 1965', 'Xiengkhuang')]
    case Laos_province_Xiangkhouang = 'LA-XI';

    #[Name('Ādažu novads', [LanguageAlpha2::Latvian], null, 'Ādaži')]
    case Latvia_municipality_Adazu_novads = 'LV-011';

    #[Name('Aizkraukles novads', [LanguageAlpha2::Latvian], null, 'Aizkraukle')]
    case Latvia_municipality_Aizkraukles_novads = 'LV-002';

    #[Name('Alūksnes novads', [LanguageAlpha2::Latvian], null, 'Alūksne')]
    case Latvia_municipality_Aluksnes_novads = 'LV-007';

    #[Name('Augšdaugavas novads', [LanguageAlpha2::Latvian], null, 'Augšdaugava')]
    case Latvia_municipality_Augsdaugavas_novads = 'LV-111';

    #[Name('Balvu novads', [LanguageAlpha2::Latvian], null, 'Balvi')]
    case Latvia_municipality_Balvu_novads = 'LV-015';

    #[Name('Bauskas novads', [LanguageAlpha2::Latvian], null, 'Bauska')]
    case Latvia_municipality_Bauskas_novads = 'LV-016';

    #[Name('Cēsu novads', [LanguageAlpha2::Latvian], null, 'Cēsis')]
    case Latvia_municipality_Cesu_novads = 'LV-022';

    #[Name('Dienvidkurzemes Novads', [LanguageAlpha2::Latvian], null, 'Dienvidkurzeme')]
    case Latvia_municipality_Dienvidkurzemes_Novads = 'LV-112';

    #[Name('Dobeles novads', [LanguageAlpha2::Latvian], null, 'Dobele')]
    case Latvia_municipality_Dobeles_novads = 'LV-026';

    #[Name('Gulbenes novads', [LanguageAlpha2::Latvian], null, 'Gulbene')]
    case Latvia_municipality_Gulbenes_novads = 'LV-033';

    #[Name('Jēkabpils novads', [LanguageAlpha2::Latvian], null, 'Jēkabpils')]
    case Latvia_municipality_Jekabpils_novads = 'LV-042';

    #[Name('Jelgavas novads', [LanguageAlpha2::Latvian], null, 'Jelgava')]
    case Latvia_municipality_Jelgavas_novads = 'LV-041';

    #[Name('Ķekavas novads', [LanguageAlpha2::Latvian], null, 'Ķekava')]
    case Latvia_municipality_Kekavas_novads = 'LV-052';

    #[Name('Krāslavas novads', [LanguageAlpha2::Latvian], null, 'Krāslava')]
    case Latvia_municipality_Kraslavas_novads = 'LV-047';

    #[Name('Kuldīgas novads', [LanguageAlpha2::Latvian], null, 'Kuldīga')]
    case Latvia_municipality_Kuldigas_novads = 'LV-050';

    #[Name('Limbažu novads', [LanguageAlpha2::Latvian], null, 'Limbaži')]
    case Latvia_municipality_Limbazu_novads = 'LV-054';

    #[Name('Līvānu novads', [LanguageAlpha2::Latvian], null, 'Līvāni')]
    case Latvia_municipality_Livanu_novads = 'LV-056';

    #[Name('Ludzas novads', [LanguageAlpha2::Latvian], null, 'Ludza')]
    case Latvia_municipality_Ludzas_novads = 'LV-058';

    #[Name('Madonas novads', [LanguageAlpha2::Latvian], null, 'Madona')]
    case Latvia_municipality_Madonas_novads = 'LV-059';

    #[Name('Mārupes novads', [LanguageAlpha2::Latvian], null, 'Mārupe')]
    case Latvia_municipality_Marupes_novads = 'LV-062';

    #[Name('Ogres novads', [LanguageAlpha2::Latvian], null, 'Ogre')]
    case Latvia_municipality_Ogres_novads = 'LV-067';

    #[Name('Olaines novads', [LanguageAlpha2::Latvian], null, 'Olaine')]
    case Latvia_municipality_Olaines_novads = 'LV-068';

    #[Name('Preiļu novads', [LanguageAlpha2::Latvian], null, 'Preiļi')]
    case Latvia_municipality_Preilu_novads = 'LV-073';

    #[Name('Rēzeknes novads', [LanguageAlpha2::Latvian], null, 'Rēzekne')]
    case Latvia_municipality_Rezeknes_novads = 'LV-077';

    #[Name('Ropažu novads', [LanguageAlpha2::Latvian], null, 'Ropaži')]
    case Latvia_municipality_Ropazu_novads = 'LV-080';

    #[Name('Salaspils novads', [LanguageAlpha2::Latvian], null, 'Salaspils')]
    case Latvia_municipality_Salaspils_novads = 'LV-087';

    #[Name('Saldus novads', [LanguageAlpha2::Latvian], null, 'Saldus')]
    case Latvia_municipality_Saldus_novads = 'LV-088';

    #[Name('Saulkrastu novads', [LanguageAlpha2::Latvian], null, 'Saulkrasti')]
    case Latvia_municipality_Saulkrastu_novads = 'LV-089';

    #[Name('Siguldas novads', [LanguageAlpha2::Latvian], null, 'Sigulda')]
    case Latvia_municipality_Siguldas_novads = 'LV-091';

    #[Name('Smiltenes novads', [LanguageAlpha2::Latvian], null, 'Smiltene')]
    case Latvia_municipality_Smiltenes_novads = 'LV-094';

    #[Name('Talsu novads', [LanguageAlpha2::Latvian], null, 'Talsi')]
    case Latvia_municipality_Talsu_novads = 'LV-097';

    #[Name('Tukuma novads', [LanguageAlpha2::Latvian], null, 'Tukums')]
    case Latvia_municipality_Tukuma_novads = 'LV-099';

    #[Name('Valkas novads', [LanguageAlpha2::Latvian], null, 'Valka')]
    case Latvia_municipality_Valkas_novads = 'LV-101';

    #[Name('Valmieras Novads', [LanguageAlpha2::Latvian], null, 'Valmiera')]
    case Latvia_municipality_Valmieras_Novads = 'LV-113';

    #[Name('Varakļānu novads', [LanguageAlpha2::Latvian], null, 'Varakļāni')]
    case Latvia_municipality_Varaklanu_novads = 'LV-102';

    #[Name('Ventspils novads', [LanguageAlpha2::Latvian], null, 'Ventspils')]
    case Latvia_municipality_Ventspils_novads = 'LV-106';

    #[Name('Daugavpils', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Daugavpils = 'LV-DGV';

    #[Name('Jelgava', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Jelgava = 'LV-JEL';

    #[Name('Jūrmala', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Jurmala = 'LV-JUR';

    #[Name('Liepāja', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Liepaja = 'LV-LPX';

    #[Name('Rēzekne', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Rezekne = 'LV-REZ';

    #[Name('Rīga', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Riga = 'LV-RIX';

    #[Name('Ventspils', [LanguageAlpha2::Latvian], null, null)]
    case Latvia_state_city_Ventspils = 'LV-VEN';

    #[Name('Aakkâr', [LanguageAlpha2::Arabic], 'conventional names', null)]
    #[Name('‘Akkār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Lebanon_governorate_Aakkar = 'LB-AK';

    #[Name('Al Biqā‘', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Béqaa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Lebanon_governorate_Al_Biqa = 'LB-BI';

    #[Name('Al Janūb', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Liban-Sud', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Lebanon_governorate_Al_Janub = 'LB-JA';

    #[Name('An Nabaţīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Nabatîyé', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Lebanon_governorate_An_Nabatiyah = 'LB-NA';

    #[Name('Ash Shimāl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Liban-Nord', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Lebanon_governorate_Ash_Shimal = 'LB-AS';

    #[Name('Baalbek-Hermel', [LanguageAlpha2::Arabic], 'conventional names', null)]
    #[Name('B‘alabak-Al Hirmil', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Lebanon_governorate_Baalbek_Hermel = 'LB-BH';

    #[Name('Bayrūt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Beyrouth', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Lebanon_governorate_Bayrut = 'LB-BA';

    #[Name('Jabal Lubnān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Mont-Liban', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Lebanon_governorate_Jabal_Lubnan = 'LB-JL';

    #[Name('Berea', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Berea = 'LS-D';

    #[Name('Botha-Bothe', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, 'Butha-Buthe')]
    case Lesotho_district_Botha_Bothe = 'LS-B';

    #[Name('Leribe', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Leribe = 'LS-C';

    #[Name('Mafeteng', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Mafeteng = 'LS-E';

    #[Name('Maseru', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Maseru = 'LS-A';

    #[Name('Mohale\'s Hoek', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Mohale_s_Hoek = 'LS-F';

    #[Name('Mokhotlong', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Mokhotlong = 'LS-J';

    #[Name('Qacha\'s Nek', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Qacha_s_Nek = 'LS-H';

    #[Name('Quthing', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Quthing = 'LS-G';

    #[Name('Thaba-Tseka', [LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English], null, null)]
    case Lesotho_district_Thaba_Tseka = 'LS-K';

    #[Name('Bomi', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Bomi = 'LR-BM';

    #[Name('Bong', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Bong = 'LR-BG';

    #[Name('Gbarpolu', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Gbarpolu = 'LR-GP';

    #[Name('Grand Bassa', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Grand_Bassa = 'LR-GB';

    #[Name('Grand Cape Mount', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Grand_Cape_Mount = 'LR-CM';

    #[Name('Grand Gedeh', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Grand_Gedeh = 'LR-GG';

    #[Name('Grand Kru', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Grand_Kru = 'LR-GK';

    #[Name('Lofa', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Lofa = 'LR-LO';

    #[Name('Margibi', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Margibi = 'LR-MG';

    #[Name('Maryland', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Maryland = 'LR-MY';

    #[Name('Montserrado', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Montserrado = 'LR-MO';

    #[Name('Nimba', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Nimba = 'LR-NI';

    #[Name('River Cess', [LanguageAlpha2::English], null, 'Rivercess')]
    case Liberia_county_River_Cess = 'LR-RI';

    #[Name('River Gee', [LanguageAlpha2::English], null, null)]
    case Liberia_county_River_Gee = 'LR-RG';

    #[Name('Sinoe', [LanguageAlpha2::English], null, null)]
    case Liberia_county_Sinoe = 'LR-SI';

    #[Name('Al Buţnān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Butnan = 'LY-BU';

    #[Name('Al Jabal al Akhḑar', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Jabal_al_Akhdar = 'LY-JA';

    #[Name('Al Jabal al Gharbī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Jabal_al_Gharbi = 'LY-JG';

    #[Name('Al Jafārah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Jafarah = 'LY-JI';

    #[Name('Al Jufrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Jufrah = 'LY-JU';

    #[Name('Al Kufrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Kufrah = 'LY-KF';

    #[Name('Al Marj', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Marj = 'LY-MJ';

    #[Name('Al Marqab', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Marqab = 'LY-MB';

    #[Name('Al Wāḩāt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Al_Wahat = 'LY-WA';

    #[Name('An Nuqāţ al Khams', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_An_Nuqat_al_Khams = 'LY-NQ';

    #[Name('Az Zāwiyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Az_Zawiyah = 'LY-ZA';

    #[Name('Banghāzī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Banghazi = 'LY-BA';

    #[Name('Darnah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Darnah = 'LY-DR';

    #[Name('Ghāt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Ghat = 'LY-GT';

    #[Name('Mişrātah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Misratah = 'LY-MI';

    #[Name('Murzuq', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Murzuq = 'LY-MQ';

    #[Name('Nālūt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Nalut = 'LY-NL';

    #[Name('Sabhā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Sabha = 'LY-SB';

    #[Name('Surt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Surt = 'LY-SR';

    #[Name('Ţarābulus', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Tarabulus = 'LY-TB';

    #[Name('Wādī al Ḩayāt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Wadi_al_Hayat = 'LY-WD';

    #[Name('Wādī ash Shāţi’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Libya_popularate_Wadi_ash_Shati = 'LY-WS';

    #[Name('Balzers', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Balzers = 'LI-01';

    #[Name('Eschen', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Eschen = 'LI-02';

    #[Name('Gamprin', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Gamprin = 'LI-03';

    #[Name('Mauren', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Mauren = 'LI-04';

    #[Name('Planken', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Planken = 'LI-05';

    #[Name('Ruggell', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Ruggell = 'LI-06';

    #[Name('Schaan', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Schaan = 'LI-07';

    #[Name('Schellenberg', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Schellenberg = 'LI-08';

    #[Name('Triesen', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Triesen = 'LI-09';

    #[Name('Triesenberg', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Triesenberg = 'LI-10';

    #[Name('Vaduz', [LanguageAlpha2::German], null, null)]
    case Liechtenstein_commune_Vaduz = 'LI-11';

    #[Name('Alytaus miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Alytaus_miestas = 'LT-02';

    #[Name('Kauno miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Kauno_miestas = 'LT-15';

    #[Name('Klaipėdos miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Klaipedos_miestas = 'LT-20';

    #[Name('Palangos miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Palangos_miestas = 'LT-31';

    #[Name('Panevėžio miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Panevezio_miestas = 'LT-32';

    #[Name('Šiaulių miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Siauliu_miestas = 'LT-43';

    #[Name('Vilniaus miestas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_city_municipality_Vilniaus_miestas = 'LT-57';

    #[Name('Alytaus apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Alytaus_apskritis = 'LT-AL';

    #[Name('Kauno apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Kauno_apskritis = 'LT-KU';

    #[Name('Klaipėdos apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Klaipedos_apskritis = 'LT-KL';

    #[Name('Marijampolės apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Marijampoles_apskritis = 'LT-MR';

    #[Name('Panevėžio apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Panevezio_apskritis = 'LT-PN';

    #[Name('Šiaulių apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Siauliu_apskritis = 'LT-SA';

    #[Name('Tauragės apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Taurages_apskritis = 'LT-TA';

    #[Name('Telšių apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Telsiu_apskritis = 'LT-TE';

    #[Name('Utenos apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Utenos_apskritis = 'LT-UT';

    #[Name('Vilniaus apskritis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_county_Vilniaus_apskritis = 'LT-VL';

    #[Name('Akmenė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Akmene = 'LT-01';

    #[Name('Alytus', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Alytus = 'LT-03';

    #[Name('Anykščiai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Anyksciai = 'LT-04';

    #[Name('Biržai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Birzai = 'LT-06';

    #[Name('Ignalina', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Ignalina = 'LT-09';

    #[Name('Jonava', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Jonava = 'LT-10';

    #[Name('Joniškis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Joniskis = 'LT-11';

    #[Name('Jurbarkas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Jurbarkas = 'LT-12';

    #[Name('Kaišiadorys', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Kaisiadorys = 'LT-13';

    #[Name('Kaunas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Kaunas = 'LT-16';

    #[Name('Kėdainiai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Kedainiai = 'LT-18';

    #[Name('Kelmė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Kelme = 'LT-19';

    #[Name('Klaipėda', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Klaipeda = 'LT-21';

    #[Name('Kretinga', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Kretinga = 'LT-22';

    #[Name('Kupiškis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Kupiskis = 'LT-23';

    #[Name('Lazdijai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Lazdijai = 'LT-24';

    #[Name('Marijampolė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Marijampole = 'LT-25';

    #[Name('Mažeikiai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Mazeikiai = 'LT-26';

    #[Name('Molėtai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Moletai = 'LT-27';

    #[Name('Pakruojis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Pakruojis = 'LT-30';

    #[Name('Panevėžys', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Panevezys = 'LT-33';

    #[Name('Pasvalys', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Pasvalys = 'LT-34';

    #[Name('Plungė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Plunge = 'LT-35';

    #[Name('Prienai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Prienai = 'LT-36';

    #[Name('Radviliškis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Radviliskis = 'LT-37';

    #[Name('Raseiniai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Raseiniai = 'LT-38';

    #[Name('Rokiškis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Rokiskis = 'LT-40';

    #[Name('Šakiai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Sakiai = 'LT-41';

    #[Name('Šalčininkai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Salcininkai = 'LT-42';

    #[Name('Šiauliai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Siauliai = 'LT-44';

    #[Name('Šilalė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Silale = 'LT-45';

    #[Name('Šilutė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Silute = 'LT-46';

    #[Name('Širvintos', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Sirvintos = 'LT-47';

    #[Name('Skuodas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Skuodas = 'LT-48';

    #[Name('Švenčionys', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Svencionys = 'LT-49';

    #[Name('Tauragė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Taurage = 'LT-50';

    #[Name('Telšiai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Telsiai = 'LT-51';

    #[Name('Trakai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Trakai = 'LT-52';

    #[Name('Ukmergė', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Ukmerge = 'LT-53';

    #[Name('Utena', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Utena = 'LT-54';

    #[Name('Varėna', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Varena = 'LT-55';

    #[Name('Vilkaviškis', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Vilkaviskis = 'LT-56';

    #[Name('Vilnius', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Vilnius = 'LT-58';

    #[Name('Zarasai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_district_municipality_Zarasai = 'LT-60';

    #[Name('Birštonas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Birstonas = 'LT-05';

    #[Name('Druskininkai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Druskininkai = 'LT-07';

    #[Name('Elektrėnai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Elektrenai = 'LT-08';

    #[Name('Kalvarija', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Kalvarija = 'LT-14';

    #[Name('Kazlų Rūdos', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Kazlu_Rudos = 'LT-17';

    #[Name('Neringa', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Neringa = 'LT-28';

    #[Name('Pagėgiai', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Pagegiai = 'LT-29';

    #[Name('Rietavas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Rietavas = 'LT-39';

    #[Name('Visaginas', [LanguageAlpha2::Lithuanian], null, null)]
    case Lithuania_municipality_Visaginas = 'LT-59';

    #[Name('Capellen', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Kapellen', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Capellen = 'LU-CA';

    #[Name('Clerf', [LanguageAlpha2::German], null, null)]
    #[Name('Clervaux', [LanguageAlpha2::French], null, null)]
    #[Name('Klierf', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Clerf = 'LU-CL';

    #[Name('Diekirch', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Diekrech', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Diekirch = 'LU-DI';

    #[Name('Echternach', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Iechternach', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Echternach = 'LU-EC';

    #[Name('Esch an der Alzette', [LanguageAlpha2::German], null, null)]
    #[Name('Esch-Uelzecht', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    #[Name('Esch-sur-Alzette', [LanguageAlpha2::French], null, null)]
    case Luxembourg_canton_Esch_an_der_Alzette = 'LU-ES';

    #[Name('Grevenmacher', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Gréivemaacher', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Grevenmacher = 'LU-GR';

    #[Name('Luxembourg', [LanguageAlpha2::French], null, null)]
    #[Name('Luxemburg', [LanguageAlpha2::German], null, null)]
    #[Name('Lëtzebuerg', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Luxembourg = 'LU-LU';

    #[Name('Mersch', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Miersch', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Mersch = 'LU-ME';

    #[Name('Redange', [LanguageAlpha2::French], null, null)]
    #[Name('Redingen', [LanguageAlpha2::German], null, null)]
    #[Name('Réiden-Atert', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Redange = 'LU-RD';

    #[Name('Remich', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Réimech', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Remich = 'LU-RM';

    #[Name('Veianen', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    #[Name('Vianden', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    case Luxembourg_canton_Veianen = 'LU-VD';

    #[Name('Wiltz', [LanguageAlpha2::French, LanguageAlpha2::German], null, null)]
    #[Name('Wolz', [LanguageAlpha2::Luxembourgish_Letzeburgesch], null, null)]
    case Luxembourg_canton_Wiltz = 'LU-WI';

    #[Name('Antananarivo', [LanguageAlpha2::Malagasy], null, null)]
    case Madagascar_province_Antananarivo = 'MG-T';

    #[Name('Antsiranana', [LanguageAlpha2::Malagasy], null, null)]
    case Madagascar_province_Antsiranana = 'MG-D';

    #[Name('Fianarantsoa', [LanguageAlpha2::Malagasy], null, null)]
    case Madagascar_province_Fianarantsoa = 'MG-F';

    #[Name('Mahajanga', [LanguageAlpha2::Malagasy], null, null)]
    case Madagascar_province_Mahajanga = 'MG-M';

    #[Name('Toamasina', [LanguageAlpha2::Malagasy], null, null)]
    case Madagascar_province_Toamasina = 'MG-A';

    #[Name('Toliara', [LanguageAlpha2::Malagasy], null, null)]
    case Madagascar_province_Toliara = 'MG-U';

    #[Name('Balaka', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Balaka = 'MW-BA';

    #[Name('Blantyre', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Blantyre = 'MW-BL';

    #[Name('Chikwawa', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Chikwawa = 'MW-CK';

    #[Name('Chiradzulu', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Chiradzulu = 'MW-CR';

    #[Name('Chitipa', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Chitipa = 'MW-CT';

    #[Name('Dedza', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Dedza = 'MW-DE';

    #[Name('Dowa', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Dowa = 'MW-DO';

    #[Name('Karonga', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Karonga = 'MW-KR';

    #[Name('Kasungu', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Kasungu = 'MW-KS';

    #[Name('Likoma', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Likoma = 'MW-LK';

    #[Name('Lilongwe', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Lilongwe = 'MW-LI';

    #[Name('Machinga', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Machinga = 'MW-MH';

    #[Name('Mangochi', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Mangochi = 'MW-MG';

    #[Name('Mchinji', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Mchinji = 'MW-MC';

    #[Name('Mulanje', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Mulanje = 'MW-MU';

    #[Name('Mwanza', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Mwanza = 'MW-MW';

    #[Name('Mzimba', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Mzimba = 'MW-MZ';

    #[Name('Neno', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Neno = 'MW-NE';

    #[Name('Nkhata Bay', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Nkhata_Bay = 'MW-NB';

    #[Name('Nkhotakota', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Nkhotakota = 'MW-NK';

    #[Name('Nsanje', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Nsanje = 'MW-NS';

    #[Name('Ntcheu', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Ntcheu = 'MW-NU';

    #[Name('Ntchisi', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Ntchisi = 'MW-NI';

    #[Name('Phalombe', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Phalombe = 'MW-PH';

    #[Name('Rumphi', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Rumphi = 'MW-RU';

    #[Name('Salima', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Salima = 'MW-SA';

    #[Name('Thyolo', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Thyolo = 'MW-TH';

    #[Name('Zomba', [LanguageAlpha2::Chichewa_Chewa_Nyanja, LanguageAlpha2::English], null, null)]
    case Malawi_district_Zomba = 'MW-ZO';

    #[Name('Central Region', [LanguageAlpha2::English], null, null)]
    #[Name('Chapakati', [LanguageAlpha2::Chichewa_Chewa_Nyanja], null, null)]
    case Malawi_region_Central_Region = 'MW-C';

    #[Name('Chakumpoto', [LanguageAlpha2::Chichewa_Chewa_Nyanja], null, null)]
    #[Name('Northern Region', [LanguageAlpha2::English], null, null)]
    case Malawi_region_Chakumpoto = 'MW-N';

    #[Name('Chakumwera', [LanguageAlpha2::Chichewa_Chewa_Nyanja], null, null)]
    #[Name('Southern Region', [LanguageAlpha2::English], null, null)]
    case Malawi_region_Chakumwera = 'MW-S';

    #[Name('Wilayah Persekutuan Kuala Lumpur', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_federal_territory_Wilayah_Persekutuan_Kuala_Lumpur = 'MY-14';

    #[Name('Wilayah Persekutuan Labuan', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_federal_territory_Wilayah_Persekutuan_Labuan = 'MY-15';

    #[Name('Wilayah Persekutuan Putrajaya', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_federal_territory_Wilayah_Persekutuan_Putrajaya = 'MY-16';

    #[Name('Johor', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Johor = 'MY-01';

    #[Name('Kedah', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Kedah = 'MY-02';

    #[Name('Kelantan', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Kelantan = 'MY-03';

    #[Name('Melaka', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Melaka = 'MY-04';

    #[Name('Negeri Sembilan', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Negeri_Sembilan = 'MY-05';

    #[Name('Pahang', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Pahang = 'MY-06';

    #[Name('Perak', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Perak = 'MY-08';

    #[Name('Perlis', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Perlis = 'MY-09';

    #[Name('Pulau Pinang', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Pulau_Pinang = 'MY-07';

    #[Name('Sabah', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Sabah = 'MY-12';

    #[Name('Sarawak', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Sarawak = 'MY-13';

    #[Name('Selangor', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Selangor = 'MY-10';

    #[Name('Terengganu', [LanguageAlpha2::Malay], null, null)]
    case Malaysia_state_Terengganu = 'MY-11';

    #[Name('Ariatholhu Dhekunuburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Alifu Dhaalu')]
    #[Name('South Ari Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Ariatholhu_Dhekunuburi = 'MV-00';

    #[Name('Ariatholhu Uthuruburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Alifu Alifu')]
    #[Name('North Ari Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Ariatholhu_Uthuruburi = 'MV-02';

    #[Name('Faadhippolhu', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Lhaviyani')]
    #[Name('Faadhippolhu', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Faadhippolhu = 'MV-03';

    #[Name('Felidheatholhu', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Vaavu')]
    #[Name('Felidhu Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Felidheatholhu = 'MV-04';

    #[Name('Fuvammulah', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Gnaviyani')]
    #[Name('Fuvammulah', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Fuvammulah = 'MV-29';

    #[Name('Hahdhunmathi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Laamu')]
    #[Name('Hahdhunmathi', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Hahdhunmathi = 'MV-05';

    #[Name('Huvadhuatholhu Dhekunuburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Gaafu Dhaalu')]
    #[Name('South Huvadhu Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Huvadhuatholhu_Dhekunuburi = 'MV-28';

    #[Name('Huvadhuatholhu Uthuruburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Gaafu Alifu')]
    #[Name('North Huvadhu Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Huvadhuatholhu_Uthuruburi = 'MV-27';

    #[Name('Kolhumadulu', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Thaa')]
    #[Name('Kolhumadulu', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Kolhumadulu = 'MV-08';

    #[Name('Maaleatholhu', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Kaafu')]
    #[Name('Male Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Maaleatholhu = 'MV-26';

    #[Name('Maalhosmadulu Dhekunuburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Baa')]
    #[Name('South Maalhosmadulu', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Maalhosmadulu_Dhekunuburi = 'MV-20';

    #[Name('Maalhosmadulu Uthuruburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Raa')]
    #[Name('North Maalhosmadulu', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Maalhosmadulu_Uthuruburi = 'MV-13';

    #[Name('Miladhunmadulu Dhekunuburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Noonu')]
    #[Name('South Miladhunmadulu', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Miladhunmadulu_Dhekunuburi = 'MV-25';

    #[Name('Miladhunmadulu Uthuruburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Shaviyani')]
    #[Name('North Miladhunmadulu', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Miladhunmadulu_Uthuruburi = 'MV-24';

    #[Name('Mulakatholhu', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Meemu')]
    #[Name('Mulaku Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Mulakatholhu = 'MV-12';

    #[Name('Nilandheatholhu Dhekunuburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Dhaalu')]
    #[Name('South Nilandhe Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Nilandheatholhu_Dhekunuburi = 'MV-17';

    #[Name('Nilandheatholhu Uthuruburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Faafu')]
    #[Name('North Nilandhe Atoll', [LanguageAlpha2::English], null, null)]
    case Maldives_administrative_atoll_Nilandheatholhu_Uthuruburi = 'MV-14';

    #[Name('North Thiladhunmathi', [LanguageAlpha2::English], null, null)]
    #[Name('Thiladhunmathee Uthuruburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Haa Alifu')]
    case Maldives_administrative_atoll_North_Thiladhunmathi = 'MV-07';

    #[Name('South Thiladhunmathi', [LanguageAlpha2::English], null, null)]
    #[Name('Thiladhunmathee Dhekunuburi', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Haa Dhaalu')]
    case Maldives_administrative_atoll_South_Thiladhunmathi = 'MV-23';

    #[Name('Addu', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', 'Seenu')]
    #[Name('Addu City', [LanguageAlpha2::English], null, null)]
    case Maldives_city_Addu = 'MV-01';

    #[Name('Maale', [LanguageAlpha2::Divehi_Dhivehi_Maldivian], 'BGN/PCGN 1988', null)]
    #[Name('Male', [LanguageAlpha2::English], null, null)]
    case Maldives_city_Maale = 'MV-MLE';

    #[Name('Bamako', [LanguageAlpha2::French], null, null)]
    case Mali_district_Bamako = 'ML-BKO';

    #[Name('Gao', [LanguageAlpha2::French], null, null)]
    case Mali_region_Gao = 'ML-7';

    #[Name('Kayes', [LanguageAlpha2::French], null, null)]
    case Mali_region_Kayes = 'ML-1';

    #[Name('Kidal', [LanguageAlpha2::French], null, null)]
    case Mali_region_Kidal = 'ML-8';

    #[Name('Koulikoro', [LanguageAlpha2::French], null, null)]
    case Mali_region_Koulikoro = 'ML-2';

    #[Name('Ménaka', [LanguageAlpha2::French], null, null)]
    case Mali_region_Menaka = 'ML-9';

    #[Name('Mopti', [LanguageAlpha2::French], null, null)]
    case Mali_region_Mopti = 'ML-5';

    #[Name('Ségou', [LanguageAlpha2::French], null, null)]
    case Mali_region_Segou = 'ML-4';

    #[Name('Sikasso', [LanguageAlpha2::French], null, null)]
    case Mali_region_Sikasso = 'ML-3';

    #[Name('Taoudénit', [LanguageAlpha2::French], null, 'Taoudenni; Taoudéni')]
    case Mali_region_Taoudenit = 'ML-10';

    #[Name('Tombouctou', [LanguageAlpha2::French], null, null)]
    case Mali_region_Tombouctou = 'ML-6';

    #[Name('Attard', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Attard = 'MT-01';

    #[Name('Balzan', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Balzan = 'MT-02';

    #[Name('Birgu', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Birgu = 'MT-03';

    #[Name('Birkirkara', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Birkirkara = 'MT-04';

    #[Name('Birżebbuġa', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Birzebbuga = 'MT-05';

    #[Name('Bormla', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Bormla = 'MT-06';

    #[Name('Dingli', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Dingli = 'MT-07';

    #[Name('Fgura', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Fgura = 'MT-08';

    #[Name('Floriana', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Floriana = 'MT-09';

    #[Name('Fontana', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Fontana = 'MT-10';

    #[Name('Għajnsielem', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Ghajnsielem = 'MT-13';

    #[Name('Għarb', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Gharb = 'MT-14';

    #[Name('Għargħur', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Gharghur = 'MT-15';

    #[Name('Għasri', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Ghasri = 'MT-16';

    #[Name('Għaxaq', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Ghaxaq = 'MT-17';

    #[Name('Gudja', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Gudja = 'MT-11';

    #[Name('Gżira', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Gzira = 'MT-12';

    #[Name('Ħamrun', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Hamrun = 'MT-18';

    #[Name('Iklin', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Iklin = 'MT-19';

    #[Name('Isla', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Isla = 'MT-20';

    #[Name('Kalkara', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Kalkara = 'MT-21';

    #[Name('Kerċem', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Kercem = 'MT-22';

    #[Name('Kirkop', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Kirkop = 'MT-23';

    #[Name('Lija', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Lija = 'MT-24';

    #[Name('Luqa', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Luqa = 'MT-25';

    #[Name('Marsa', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Marsa = 'MT-26';

    #[Name('Marsaskala', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Marsaskala = 'MT-27';

    #[Name('Marsaxlokk', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Marsaxlokk = 'MT-28';

    #[Name('Mdina', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Mdina = 'MT-29';

    #[Name('Mellieħa', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Mellieha = 'MT-30';

    #[Name('Mġarr', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Mgarr = 'MT-31';

    #[Name('Mosta', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Mosta = 'MT-32';

    #[Name('Mqabba', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Mqabba = 'MT-33';

    #[Name('Msida', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Msida = 'MT-34';

    #[Name('Mtarfa', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Mtarfa = 'MT-35';

    #[Name('Munxar', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Munxar = 'MT-36';

    #[Name('Nadur', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Nadur = 'MT-37';

    #[Name('Naxxar', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Naxxar = 'MT-38';

    #[Name('Paola', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Paola = 'MT-39';

    #[Name('Pembroke', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Pembroke = 'MT-40';

    #[Name('Pietà', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Pieta = 'MT-41';

    #[Name('Qala', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Qala = 'MT-42';

    #[Name('Qormi', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Qormi = 'MT-43';

    #[Name('Qrendi', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Qrendi = 'MT-44';

    #[Name('Rabat Gozo', [LanguageAlpha2::English], null, null)]
    #[Name('Rabat Għawdex', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Rabat_Gozo = 'MT-45';

    #[Name('Rabat Malta', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Rabat_Malta = 'MT-46';

    #[Name('Safi', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Safi = 'MT-47';

    #[Name('Saint John', [LanguageAlpha2::English], null, null)]
    #[Name('San Ġwann', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Saint_John = 'MT-49';

    #[Name('Saint Julian\'s', [LanguageAlpha2::English], null, null)]
    #[Name('San Ġiljan', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Saint_Julian_s = 'MT-48';

    #[Name('Saint Lawrence', [LanguageAlpha2::English], null, null)]
    #[Name('San Lawrenz', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Saint_Lawrence = 'MT-50';

    #[Name('Saint Lucia\'s', [LanguageAlpha2::English], null, null)]
    #[Name('Santa Luċija', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Saint_Lucia_s = 'MT-53';

    #[Name('Saint Paul\'s Bay', [LanguageAlpha2::English], null, null)]
    #[Name('San Pawl il-Baħar', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Saint_Paul_s_Bay = 'MT-51';

    #[Name('Sannat', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Sannat = 'MT-52';

    #[Name('Santa Venera', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Santa_Venera = 'MT-54';

    #[Name('Siġġiewi', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Siggiewi = 'MT-55';

    #[Name('Sliema', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Sliema = 'MT-56';

    #[Name('Swieqi', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Swieqi = 'MT-57';

    #[Name('Ta\' Xbiex', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Ta_Xbiex = 'MT-58';

    #[Name('Tarxien', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Tarxien = 'MT-59';

    #[Name('Valletta', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Valletta = 'MT-60';

    #[Name('Xagħra', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Xaghra = 'MT-61';

    #[Name('Xewkija', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Xewkija = 'MT-62';

    #[Name('Xgħajra', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Xghajra = 'MT-63';

    #[Name('Żabbar', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Zabbar = 'MT-64';

    #[Name('Żebbuġ Gozo', [LanguageAlpha2::English], null, null)]
    #[Name('Żebbuġ Għawdex', [LanguageAlpha2::Maltese], null, null)]
    case Malta_local_council_Zebbug_Gozo = 'MT-65';

    #[Name('Żebbuġ Malta', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Zebbug_Malta = 'MT-66';

    #[Name('Żejtun', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Zejtun = 'MT-67';

    #[Name('Żurrieq', [LanguageAlpha2::Maltese, LanguageAlpha2::English], null, null)]
    case Malta_local_council_Zurrieq = 'MT-68';

    #[Name('Ralik chain', [LanguageAlpha2::Marshallese, LanguageAlpha2::English], null, null)]
    case Marshall_Islands_chain_of_islands_Ralik_chain = 'MH-L';

    #[Name('Ratak chain', [LanguageAlpha2::Marshallese, LanguageAlpha2::English], null, null)]
    case Marshall_Islands_chain_of_islands_Ratak_chain = 'MH-T';

    #[Name('Aelok', [LanguageAlpha2::Marshallese], null, null)]
    #[Name('Ailuk', [LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Aelok = 'MH-ALK';

    #[Name('Aelōn̄ḷapḷap', [LanguageAlpha2::Marshallese], null, null)]
    #[Name('Ailinglaplap', [LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Aelonlaplap = 'MH-ALL';

    #[Name('Arno', [LanguageAlpha2::English], null, null)]
    #[Name('Arṇo', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Arno = 'MH-ARN';

    #[Name('Aur', [LanguageAlpha2::Marshallese, LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Aur = 'MH-AUR';

    #[Name('Bikini & Kili', [LanguageAlpha2::English], null, null)]
    #[Name('Pikinni & Kōle', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Bikini_Kili = 'MH-KIL';

    #[Name('Ebon', [LanguageAlpha2::English], null, null)]
    #[Name('Epoon', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Ebon = 'MH-EBO';

    #[Name('Ellep', [LanguageAlpha2::Marshallese], null, null)]
    #[Name('Lib', [LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Ellep = 'MH-LIB';

    #[Name('Enewetak & Ujelang', [LanguageAlpha2::English], null, null)]
    #[Name('Ānewetak & Wūjlan̄', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Enewetak_Ujelang = 'MH-ENI';

    #[Name('Jabat', [LanguageAlpha2::English], null, null)]
    #[Name('Jebat', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Jabat = 'MH-JAB';

    #[Name('Jaluit', [LanguageAlpha2::English], null, null)]
    #[Name('Jālwōj', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Jaluit = 'MH-JAL';

    #[Name('Kuwajleen', [LanguageAlpha2::Marshallese], null, null)]
    #[Name('Kwajalein', [LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Kuwajleen = 'MH-KWA';

    #[Name('Lae', [LanguageAlpha2::Marshallese, LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Lae = 'MH-LAE';

    #[Name('Likiep', [LanguageAlpha2::Marshallese, LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Likiep = 'MH-LIK';

    #[Name('Majuro', [LanguageAlpha2::English], null, null)]
    #[Name('Mājro', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Majuro = 'MH-MAJ';

    #[Name('Maloelap', [LanguageAlpha2::English], null, null)]
    #[Name('Ṃaḷoeḷap', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Maloelap = 'MH-MAL';

    #[Name('Mejit', [LanguageAlpha2::English], null, null)]
    #[Name('Mājej', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Mejit = 'MH-MEJ';

    #[Name('Mile', [LanguageAlpha2::Marshallese], null, null)]
    #[Name('Mili', [LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Mile = 'MH-MIL';

    #[Name('Namdrik', [LanguageAlpha2::English], null, null)]
    #[Name('Naṃdik', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Namdrik = 'MH-NMK';

    #[Name('Namu', [LanguageAlpha2::English], null, null)]
    #[Name('Naṃo', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Namu = 'MH-NMU';

    #[Name('Rongelap', [LanguageAlpha2::English], null, null)]
    #[Name('Ron̄ḷap', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Rongelap = 'MH-RON';

    #[Name('Ujae', [LanguageAlpha2::Marshallese, LanguageAlpha2::English], null, null)]
    case Marshall_Islands_municipality_Ujae = 'MH-UJA';

    #[Name('Utrik', [LanguageAlpha2::English], null, null)]
    #[Name('Utrōk', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Utrik = 'MH-UTI';

    #[Name('Wotho', [LanguageAlpha2::English], null, null)]
    #[Name('Wōtto', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Wotho = 'MH-WTH';

    #[Name('Wotje', [LanguageAlpha2::English], null, null)]
    #[Name('Wōjjā', [LanguageAlpha2::Marshallese], null, null)]
    case Marshall_Islands_municipality_Wotje = 'MH-WTJ';

    #[Name('Adrar', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Adrar = 'MR-07';

    #[Name('Assaba', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Assaba = 'MR-03';

    #[Name('Brakna', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Brakna = 'MR-05';

    #[Name('Dakhlet Nouâdhibou', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Dakhlet_Nouadhibou = 'MR-08';

    #[Name('Gorgol', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Gorgol = 'MR-04';

    #[Name('Guidimaka', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Guidimaka = 'MR-10';

    #[Name('Hodh ech Chargui', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Hodh_ech_Chargui = 'MR-01';

    #[Name('Hodh el Gharbi', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Hodh_el_Gharbi = 'MR-02';

    #[Name('Inchiri', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Inchiri = 'MR-12';

    #[Name('Nouakchott Nord', [LanguageAlpha2::French], null, null)]
    #[Name('Nuwākshūţ ash Shamālīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Mauritania_region_Nouakchott_Nord = 'MR-14';

    #[Name('Nouakchott Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('Nuwākshūţ al Gharbīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Mauritania_region_Nouakchott_Ouest = 'MR-13';

    #[Name('Nouakchott Sud', [LanguageAlpha2::French], null, null)]
    #[Name('Nuwākshūţ al Janūbīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Mauritania_region_Nouakchott_Sud = 'MR-15';

    #[Name('Tagant', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Tagant = 'MR-09';

    #[Name('Tiris Zemmour', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Tiris_Zemmour = 'MR-11';

    #[Name('Trarza', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Mauritania_region_Trarza = 'MR-06';

    #[Name('Agalega Islands', [LanguageAlpha2::English], null, null)]
    case Mauritius_dependency_Agalega_Islands = 'MU-AG';

    #[Name('Cargados Carajos Shoals', [LanguageAlpha2::English], null, 'Saint Brandon Islands')]
    case Mauritius_dependency_Cargados_Carajos_Shoals = 'MU-CC';

    #[Name('Rodrigues Island', [LanguageAlpha2::English], null, null)]
    case Mauritius_dependency_Rodrigues_Island = 'MU-RO';

    #[Name('Black River', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Black_River = 'MU-BL';

    #[Name('Flacq', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Flacq = 'MU-FL';

    #[Name('Grand Port', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Grand_Port = 'MU-GP';

    #[Name('Moka', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Moka = 'MU-MO';

    #[Name('Pamplemousses', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Pamplemousses = 'MU-PA';

    #[Name('Plaines Wilhems', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Plaines_Wilhems = 'MU-PW';

    #[Name('Port Louis', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Port_Louis = 'MU-PL';

    #[Name('Rivière du Rempart', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Riviere_du_Rempart = 'MU-RR';

    #[Name('Savanne', [LanguageAlpha2::English], null, null)]
    case Mauritius_district_Savanne = 'MU-SA';

    #[Name('Ciudad de México', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_federal_entity_Ciudad_de_Mexico = 'MX-CMX';

    #[Name('Aguascalientes', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Aguascalientes = 'MX-AGU';

    #[Name('Baja California', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Baja_California = 'MX-BCN';

    #[Name('Baja California Sur', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Baja_California_Sur = 'MX-BCS';

    #[Name('Campeche', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Campeche = 'MX-CAM';

    #[Name('Chiapas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Chiapas = 'MX-CHP';

    #[Name('Chihuahua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Chihuahua = 'MX-CHH';

    #[Name('Coahuila de Zaragoza', [LanguageAlpha2::Spanish_Castilian], null, 'Coahuila')]
    case Mexico_state_Coahuila_de_Zaragoza = 'MX-COA';

    #[Name('Colima', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Colima = 'MX-COL';

    #[Name('Durango', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Durango = 'MX-DUR';

    #[Name('Guanajuato', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Guanajuato = 'MX-GUA';

    #[Name('Guerrero', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Guerrero = 'MX-GRO';

    #[Name('Hidalgo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Hidalgo = 'MX-HID';

    #[Name('Jalisco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Jalisco = 'MX-JAL';

    #[Name('México', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Mexico = 'MX-MEX';

    #[Name('Michoacán de Ocampo', [LanguageAlpha2::Spanish_Castilian], null, 'Michoacán')]
    case Mexico_state_Michoacan_de_Ocampo = 'MX-MIC';

    #[Name('Morelos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Morelos = 'MX-MOR';

    #[Name('Nayarit', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Nayarit = 'MX-NAY';

    #[Name('Nuevo León', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Nuevo_Leon = 'MX-NLE';

    #[Name('Oaxaca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Oaxaca = 'MX-OAX';

    #[Name('Puebla', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Puebla = 'MX-PUE';

    #[Name('Querétaro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Queretaro = 'MX-QUE';

    #[Name('Quintana Roo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Quintana_Roo = 'MX-ROO';

    #[Name('San Luis Potosí', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_San_Luis_Potosi = 'MX-SLP';

    #[Name('Sinaloa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Sinaloa = 'MX-SIN';

    #[Name('Sonora', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Sonora = 'MX-SON';

    #[Name('Tabasco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Tabasco = 'MX-TAB';

    #[Name('Tamaulipas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Tamaulipas = 'MX-TAM';

    #[Name('Tlaxcala', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Tlaxcala = 'MX-TLA';

    #[Name('Veracruz de Ignacio de la Llave', [LanguageAlpha2::Spanish_Castilian], null, 'Veracruz')]
    case Mexico_state_Veracruz_de_Ignacio_de_la_Llave = 'MX-VER';

    #[Name('Yucatán', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Yucatan = 'MX-YUC';

    #[Name('Zacatecas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Mexico_state_Zacatecas = 'MX-ZAC';

    #[Name('Chuuk', [LanguageAlpha2::English], null, null)]
    case Micronesia_state_Chuuk = 'FM-TRK';

    #[Name('Kosrae', [LanguageAlpha2::English], null, null)]
    case Micronesia_state_Kosrae = 'FM-KSA';

    #[Name('Pohnpei', [LanguageAlpha2::English], null, null)]
    case Micronesia_state_Pohnpei = 'FM-PNI';

    #[Name('Yap', [LanguageAlpha2::English], null, null)]
    case Micronesia_state_Yap = 'FM-YAP';

    #[Name('Găgăuzia, Unitatea teritorială autonomă (UTAG)', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_autonomous_territorial_unit_Gagauzia_Unitatea_teritoriala_autonoma_UTAG = 'MD-GA';

    #[Name('Bălți', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_city_Balti = 'MD-BA';

    #[Name('Bender [Tighina]', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_city_Bender_Tighina = 'MD-BD';

    #[Name('Chișinău', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_city_Chisinau = 'MD-CU';

    #[Name('Anenii Noi', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Anenii_Noi = 'MD-AN';

    #[Name('Basarabeasca', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Basarabeasca = 'MD-BS';

    #[Name('Briceni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Briceni = 'MD-BR';

    #[Name('Cahul', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Cahul = 'MD-CA';

    #[Name('Călărași', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Calarasi = 'MD-CL';

    #[Name('Cantemir', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Cantemir = 'MD-CT';

    #[Name('Căușeni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Causeni = 'MD-CS';

    #[Name('Cimișlia', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Cimislia = 'MD-CM';

    #[Name('Criuleni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Criuleni = 'MD-CR';

    #[Name('Dondușeni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Donduseni = 'MD-DO';

    #[Name('Drochia', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Drochia = 'MD-DR';

    #[Name('Dubăsari', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Dubasari = 'MD-DU';

    #[Name('Edineț', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Edinet = 'MD-ED';

    #[Name('Fălești', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Falesti = 'MD-FA';

    #[Name('Florești', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Floresti = 'MD-FL';

    #[Name('Glodeni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Glodeni = 'MD-GL';

    #[Name('Hîncești', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Hincesti = 'MD-HI';

    #[Name('Ialoveni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Ialoveni = 'MD-IA';

    #[Name('Leova', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Leova = 'MD-LE';

    #[Name('Nisporeni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Nisporeni = 'MD-NI';

    #[Name('Ocnița', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Ocnita = 'MD-OC';

    #[Name('Orhei', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Orhei = 'MD-OR';

    #[Name('Rezina', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Rezina = 'MD-RE';

    #[Name('Rîșcani', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Riscani = 'MD-RI';

    #[Name('Sîngerei', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Singerei = 'MD-SI';

    #[Name('Șoldănești', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Soldanesti = 'MD-SD';

    #[Name('Soroca', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Soroca = 'MD-SO';

    #[Name('Ștefan Vodă', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Stefan_Voda = 'MD-SV';

    #[Name('Strășeni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Straseni = 'MD-ST';

    #[Name('Taraclia', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Taraclia = 'MD-TA';

    #[Name('Telenești', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Telenesti = 'MD-TE';

    #[Name('Ungheni', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_district_Ungheni = 'MD-UN';

    #[Name('Stînga Nistrului, unitatea teritorială din', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Moldova_territorial_unit_Stinga_Nistrului_unitatea_teritoriala_din = 'MD-SN';

    #[Name('Fontvieille', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Fontvieille = 'MC-FO';

    #[Name('Jardin Exotique', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Jardin_Exotique = 'MC-JE';

    #[Name('La Colle', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_La_Colle = 'MC-CL';

    #[Name('La Condamine', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_La_Condamine = 'MC-CO';

    #[Name('La Gare', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_La_Gare = 'MC-GA';

    #[Name('La Source', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_La_Source = 'MC-SO';

    #[Name('Larvotto', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Larvotto = 'MC-LA';

    #[Name('Malbousquet', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Malbousquet = 'MC-MA';

    #[Name('Monaco-Ville', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Monaco_Ville = 'MC-MO';

    #[Name('Moneghetti', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Moneghetti = 'MC-MG';

    #[Name('Monte-Carlo', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Monte_Carlo = 'MC-MC';

    #[Name('Moulins', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Moulins = 'MC-MU';

    #[Name('Port-Hercule', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Port_Hercule = 'MC-PH';

    #[Name('Saint-Roman', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Saint_Roman = 'MC-SR';

    #[Name('Sainte-Dévote', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Sainte_Devote = 'MC-SD';

    #[Name('Spélugues', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Spelugues = 'MC-SP';

    #[Name('Vallon de la Rousse', [LanguageAlpha2::French], null, null)]
    case Monaco_quarter_Vallon_de_la_Rousse = 'MC-VR';

    #[Name('Ulaanbaatar', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_capital_city_Ulaanbaatar = 'MN-1';

    #[Name('Arhangay', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Arhangay = 'MN-073';

    #[Name('Bayan-Ölgiy', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Bayan_Olgiy = 'MN-071';

    #[Name('Bayanhongor', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Bayanhongor = 'MN-069';

    #[Name('Bulgan', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Bulgan = 'MN-067';

    #[Name('Darhan uul', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Darhan_uul = 'MN-037';

    #[Name('Dornod', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Dornod = 'MN-061';

    #[Name('Dornogovĭ', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Dornogovi = 'MN-063';

    #[Name('Dundgovĭ', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Dundgovi = 'MN-059';

    #[Name('Dzavhan', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Dzavhan = 'MN-057';

    #[Name('Govĭ-Altay', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Govi_Altay = 'MN-065';

    #[Name('Govĭ-Sümber', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Govi_Sumber = 'MN-064';

    #[Name('Hentiy', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Hentiy = 'MN-039';

    #[Name('Hovd', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Hovd = 'MN-043';

    #[Name('Hövsgöl', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Hovsgol = 'MN-041';

    #[Name('Ömnögovĭ', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Omnogovi = 'MN-053';

    #[Name('Orhon', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Orhon = 'MN-035';

    #[Name('Övörhangay', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Ovorhangay = 'MN-055';

    #[Name('Selenge', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Selenge = 'MN-049';

    #[Name('Sühbaatar', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Suhbaatar = 'MN-051';

    #[Name('Töv', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Tov = 'MN-047';

    #[Name('Uvs', [LanguageAlpha2::Mongolian], 'BGN/PCGN 1964', null)]
    case Mongolia_province_Uvs = 'MN-046';

    #[Name('Andrijevica', [], null, null)]
    case Montenegro_municipality_Andrijevica = 'ME-01';

    #[Name('Bar', [], null, null)]
    case Montenegro_municipality_Bar = 'ME-02';

    #[Name('Berane', [], null, null)]
    case Montenegro_municipality_Berane = 'ME-03';

    #[Name('Bijelo Polje', [], null, null)]
    case Montenegro_municipality_Bijelo_Polje = 'ME-04';

    #[Name('Budva', [], null, null)]
    case Montenegro_municipality_Budva = 'ME-05';

    #[Name('Cetinje', [], null, null)]
    case Montenegro_municipality_Cetinje = 'ME-06';

    #[Name('Danilovgrad', [], null, null)]
    case Montenegro_municipality_Danilovgrad = 'ME-07';

    #[Name('Gusinje', [], null, null)]
    case Montenegro_municipality_Gusinje = 'ME-22';

    #[Name('Herceg-Novi', [], null, null)]
    case Montenegro_municipality_Herceg_Novi = 'ME-08';

    #[Name('Kolašin', [], null, null)]
    case Montenegro_municipality_Kolasin = 'ME-09';

    #[Name('Kotor', [], null, null)]
    case Montenegro_municipality_Kotor = 'ME-10';

    #[Name('Mojkovac', [], null, null)]
    case Montenegro_municipality_Mojkovac = 'ME-11';

    #[Name('Nikšić', [], null, null)]
    case Montenegro_municipality_Niksic = 'ME-12';

    #[Name('Petnjica', [], null, null)]
    case Montenegro_municipality_Petnjica = 'ME-23';

    #[Name('Plav', [], null, null)]
    case Montenegro_municipality_Plav = 'ME-13';

    #[Name('Pljevlja', [], null, null)]
    case Montenegro_municipality_Pljevlja = 'ME-14';

    #[Name('Plužine', [], null, null)]
    case Montenegro_municipality_Pluzine = 'ME-15';

    #[Name('Podgorica', [], null, null)]
    case Montenegro_municipality_Podgorica = 'ME-16';

    #[Name('Rožaje', [], null, null)]
    case Montenegro_municipality_Rozaje = 'ME-17';

    #[Name('Šavnik', [], null, null)]
    case Montenegro_municipality_Savnik = 'ME-18';

    #[Name('Tivat', [], null, null)]
    case Montenegro_municipality_Tivat = 'ME-19';

    #[Name('Tuzi', [], null, null)]
    case Montenegro_municipality_Tuzi = 'ME-24';

    #[Name('Ulcinj', [], null, null)]
    case Montenegro_municipality_Ulcinj = 'ME-20';

    #[Name('Žabljak', [], null, null)]
    case Montenegro_municipality_Zabljak = 'ME-21';

    #[Name('Zeta', [], null, null)]
    case Montenegro_municipality_Zeta = 'ME-25';

    #[Name('Agadir-Ida-Ou-Tanane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Agadir_Ida_Ou_Tanane = 'MA-AGD';

    #[Name('Casablanca', [LanguageAlpha2::Arabic], 'conventional names', 'Dar el Beïda')]
    case Morocco_prefecture_Casablanca = 'MA-CAS';

    #[Name('Fès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Fes = 'MA-FES';

    #[Name('Inezgane-Ait Melloul', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Inezgane_Ait_Melloul = 'MA-INE';

    #[Name('M’diq-Fnideq', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_M_diq_Fnideq = 'MA-MDF';

    #[Name('Marrakech', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Marrakech = 'MA-MAR';

    #[Name('Meknès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Meknes = 'MA-MEK';

    #[Name('Mohammadia', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Mohammadia = 'MA-MOH';

    #[Name('Oujda-Angad', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Oujda_Angad = 'MA-OUJ';

    #[Name('Rabat', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Rabat = 'MA-RAB';

    #[Name('Salé', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Sale = 'MA-SAL';

    #[Name('Skhirate-Témara', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Skhirate_Temara = 'MA-SKH';

    #[Name('Tanger-Assilah', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_prefecture_Tanger_Assilah = 'MA-TNG';

    #[Name('Al Haouz', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Al_Haouz = 'MA-HAO';

    #[Name('Al Hoceïma', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Al_Hoceima = 'MA-HOC';

    #[Name('Aousserd (EH)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Aousserd_EH = 'MA-AOU';

    #[Name('Assa-Zag (EH-partial)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Assa_Zag_EH_partial = 'MA-ASZ';

    #[Name('Azilal', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Azilal = 'MA-AZI';

    #[Name('Béni Mellal', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Beni_Mellal = 'MA-BEM';

    #[Name('Benslimane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Benslimane = 'MA-BES';

    #[Name('Berkane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Berkane = 'MA-BER';

    #[Name('Berrechid', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Berrechid = 'MA-BRR';

    #[Name('Boujdour (EH)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Boujdour_EH = 'MA-BOD';

    #[Name('Boulemane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Boulemane = 'MA-BOM';

    #[Name('Chefchaouen', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Chefchaouen = 'MA-CHE';

    #[Name('Chichaoua', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Chichaoua = 'MA-CHI';

    #[Name('Chtouka-Ait Baha', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Chtouka_Ait_Baha = 'MA-CHT';

    #[Name('Driouch', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Driouch = 'MA-DRI';

    #[Name('El Hajeb', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_El_Hajeb = 'MA-HAJ';

    #[Name('El Jadida', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_El_Jadida = 'MA-JDI';

    #[Name('El Kelâa des Sraghna', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_El_Kelaa_des_Sraghna = 'MA-KES';

    #[Name('Errachidia', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Errachidia = 'MA-ERR';

    #[Name('Es-Semara (EH-partial)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Es_Semara_EH_partial = 'MA-ESM';

    #[Name('Essaouira', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Essaouira = 'MA-ESI';

    #[Name('Fahs-Anjra', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Fahs_Anjra = 'MA-FAH';

    #[Name('Figuig', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Figuig = 'MA-FIG';

    #[Name('Fquih Ben Salah', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Fquih_Ben_Salah = 'MA-FQH';

    #[Name('Guelmim', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Guelmim = 'MA-GUE';

    #[Name('Guercif', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Guercif = 'MA-GUF';

    #[Name('Ifrane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Ifrane = 'MA-IFR';

    #[Name('Jerada', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Jerada = 'MA-JRA';

    #[Name('Kénitra', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Kenitra = 'MA-KEN';

    #[Name('Khémisset', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Khemisset = 'MA-KHE';

    #[Name('Khénifra', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Khenifra = 'MA-KHN';

    #[Name('Khouribga', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Khouribga = 'MA-KHO';

    #[Name('Laâyoune (EH)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Laayoune_EH = 'MA-LAA';

    #[Name('Larache', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Larache = 'MA-LAR';

    #[Name('Médiouna', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Mediouna = 'MA-MED';

    #[Name('Midelt', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Midelt = 'MA-MID';

    #[Name('Moulay Yacoub', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Moulay_Yacoub = 'MA-MOU';

    #[Name('Nador', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Nador = 'MA-NAD';

    #[Name('Nouaceur', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Nouaceur = 'MA-NOU';

    #[Name('Ouarzazate', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Ouarzazate = 'MA-OUA';

    #[Name('Oued Ed-Dahab (EH)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Oued_Ed_Dahab_EH = 'MA-OUD';

    #[Name('Ouezzane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Ouezzane = 'MA-OUZ';

    #[Name('Rehamna', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Rehamna = 'MA-REH';

    #[Name('Safi', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Safi = 'MA-SAF';

    #[Name('Sefrou', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Sefrou = 'MA-SEF';

    #[Name('Settat', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Settat = 'MA-SET';

    #[Name('Sidi Bennour', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Sidi_Bennour = 'MA-SIB';

    #[Name('Sidi Ifni', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Sidi_Ifni = 'MA-SIF';

    #[Name('Sidi Kacem', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Sidi_Kacem = 'MA-SIK';

    #[Name('Sidi Slimane', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Sidi_Slimane = 'MA-SIL';

    #[Name('Tan-Tan (EH-partial)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Tan_Tan_EH_partial = 'MA-TNT';

    #[Name('Taounate', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Taounate = 'MA-TAO';

    #[Name('Taourirt', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Taourirt = 'MA-TAI';

    #[Name('Tarfaya (EH-partial)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Tarfaya_EH_partial = 'MA-TAF';

    #[Name('Taroudannt', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Taroudannt = 'MA-TAR';

    #[Name('Tata', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Tata = 'MA-TAT';

    #[Name('Taza', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Taza = 'MA-TAZ';

    #[Name('Tétouan', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Tetouan = 'MA-TET';

    #[Name('Tinghir', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Tinghir = 'MA-TIN';

    #[Name('Tiznit', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Tiznit = 'MA-TIZ';

    #[Name('Youssoufia', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Youssoufia = 'MA-YUS';

    #[Name('Zagora', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_province_Zagora = 'MA-ZAG';

    #[Name('Béni Mellal-Khénifra', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Beni_Mellal_Khenifra = 'MA-05';

    #[Name('Casablanca-Settat', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Casablanca_Settat = 'MA-06';

    #[Name('Dakhla-Oued Ed-Dahab (EH)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Dakhla_Oued_Ed_Dahab_EH = 'MA-12';

    #[Name('Drâa-Tafilalet', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Draa_Tafilalet = 'MA-08';

    #[Name('Fès-Meknès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Fes_Meknes = 'MA-03';

    #[Name('Guelmim-Oued Noun (EH-partial)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Guelmim_Oued_Noun_EH_partial = 'MA-10';

    #[Name('L\'Oriental', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_L_Oriental = 'MA-02';

    #[Name('Laâyoune-Sakia El Hamra (EH-partial)', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Laayoune_Sakia_El_Hamra_EH_partial = 'MA-11';

    #[Name('Marrakech-Safi', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Marrakech_Safi = 'MA-07';

    #[Name('Rabat-Salé-Kénitra', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Rabat_Sale_Kenitra = 'MA-04';

    #[Name('Souss-Massa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Souss_Massa = 'MA-09';

    #[Name('Tanger-Tétouan-Al Hoceïma', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Morocco_region_Tanger_Tetouan_Al_Hoceima = 'MA-01';

    #[Name('Maputo', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_city_Maputo = 'MZ-MPM';

    #[Name('Cabo Delgado', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Cabo_Delgado = 'MZ-P';

    #[Name('Gaza', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Gaza = 'MZ-G';

    #[Name('Inhambane', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Inhambane = 'MZ-I';

    #[Name('Manica', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Manica = 'MZ-B';

    #[Name('Maputo', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Maputo = 'MZ-L';

    #[Name('Nampula', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Nampula = 'MZ-N';

    #[Name('Niassa', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Niassa = 'MZ-A';

    #[Name('Sofala', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Sofala = 'MZ-S';

    #[Name('Tete', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Tete = 'MZ-T';

    #[Name('Zambézia', [LanguageAlpha2::Portuguese], null, null)]
    case Mozambique_province_Zambezia = 'MZ-Q';

    #[Name('Ayeyarwady', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Ayeyarwady = 'MM-07';

    #[Name('Bago', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Bago = 'MM-02';

    #[Name('Magway', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Magway = 'MM-03';

    #[Name('Mandalay', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Mandalay = 'MM-04';

    #[Name('Sagaing', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Sagaing = 'MM-01';

    #[Name('Tanintharyi', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Tanintharyi = 'MM-05';

    #[Name('Yangon', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_region_Yangon = 'MM-06';

    #[Name('Chin', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Chin = 'MM-14';

    #[Name('Kachin', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Kachin = 'MM-11';

    #[Name('Kayah', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Kayah = 'MM-12';

    #[Name('Kayin', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Kayin = 'MM-13';

    #[Name('Mon', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Mon = 'MM-15';

    #[Name('Rakhine', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Rakhine = 'MM-16';

    #[Name('Shan', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_state_Shan = 'MM-17';

    #[Name('Nay Pyi Taw', [LanguageAlpha2::Burmese], 'conventional names', null)]
    case Myanmar_Burma_union_territory_Nay_Pyi_Taw = 'MM-18';

    #[Name('Erongo', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Erongo = 'NA-ER';

    #[Name('Hardap', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Hardap = 'NA-HA';

    #[Name('//Karas', [LanguageAlpha2::English], null, 'Karas; !Karas')]
    case Namibia_region_Karas = 'NA-KA';

    #[Name('Kavango East', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Kavango_East = 'NA-KE';

    #[Name('Kavango West', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Kavango_West = 'NA-KW';

    #[Name('Khomas', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Khomas = 'NA-KH';

    #[Name('Kunene', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Kunene = 'NA-KU';

    #[Name('Ohangwena', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Ohangwena = 'NA-OW';

    #[Name('Omaheke', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Omaheke = 'NA-OH';

    #[Name('Omusati', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Omusati = 'NA-OS';

    #[Name('Oshana', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Oshana = 'NA-ON';

    #[Name('Oshikoto', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Oshikoto = 'NA-OT';

    #[Name('Otjozondjupa', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Otjozondjupa = 'NA-OD';

    #[Name('Zambezi', [LanguageAlpha2::English], null, null)]
    case Namibia_region_Zambezi = 'NA-CA';

    #[Name('Aiwo', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Aiwo = 'NR-01';

    #[Name('Anabar', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Anabar = 'NR-02';

    #[Name('Anetan', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Anetan = 'NR-03';

    #[Name('Anibare', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Anibare = 'NR-04';

    #[Name('Baitsi', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, 'Baiti')]
    case Nauru_district_Baitsi = 'NR-05';

    #[Name('Boe', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Boe = 'NR-06';

    #[Name('Buada', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Buada = 'NR-07';

    #[Name('Denigomodu', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Denigomodu = 'NR-08';

    #[Name('Ewa', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Ewa = 'NR-09';

    #[Name('Ijuw', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Ijuw = 'NR-10';

    #[Name('Meneng', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Meneng = 'NR-11';

    #[Name('Nibok', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Nibok = 'NR-12';

    #[Name('Uaboe', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Uaboe = 'NR-13';

    #[Name('Yaren', [LanguageAlpha2::Nauru, LanguageAlpha2::English], null, null)]
    case Nauru_district_Yaren = 'NR-14';

    #[Name('Bagmati', [LanguageAlpha2::English], null, 'Province 3')]
    #[Name('Bāgmatī', [LanguageAlpha2::Nepali], 'conventional names', 'Pradesh 3')]
    case Nepal_province_Bagmati = 'NP-P3';

    #[Name('Gandaki', [LanguageAlpha2::English], null, 'Province 4')]
    #[Name('Gaṇḍakī', [LanguageAlpha2::Nepali], 'conventional names', 'Pradesh 4')]
    case Nepal_province_Gandaki = 'NP-P4';

    #[Name('Karnali', [LanguageAlpha2::English], null, 'Province 6')]
    #[Name('Karṇālī', [LanguageAlpha2::Nepali], 'conventional names', 'Pradesh 6')]
    case Nepal_province_Karnali = 'NP-P6';

    #[Name('Koshi', [LanguageAlpha2::English], null, 'Province 1')]
    #[Name('Koshī', [LanguageAlpha2::Nepali], 'conventional names', 'Pradesh 1')]
    case Nepal_province_Koshi = 'NP-P1';

    #[Name('Lumbini', [LanguageAlpha2::English], null, 'Province 5')]
    #[Name('Lumbinī', [LanguageAlpha2::Nepali], 'conventional names', 'Pradesh 5')]
    case Nepal_province_Lumbini = 'NP-P5';

    #[Name('Madhesh', [LanguageAlpha2::English], null, 'Province 2')]
    #[Name('Madhesh', [LanguageAlpha2::Nepali], 'conventional names', 'Pradesh 2')]
    case Nepal_province_Madhesh = 'NP-P2';

    #[Name('Sudurpashchim', [LanguageAlpha2::English], null, 'Sudūr Pashchim; Province 7')]
    #[Name('Sudūrpashchim', [LanguageAlpha2::Nepali], 'conventional names', 'Sudūr Pashchim; Pradesh 7')]
    case Nepal_province_Sudurpashchim = 'NP-P7';

    #[Name('Aruba', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[SameAsCountry(CountryAlpha2::Aruba)]
    case Netherlands_country_Aruba = 'NL-AW';

    #[Name('Curaçao', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[SameAsCountry(CountryAlpha2::Curacao)]
    case Netherlands_country_Curacao = 'NL-CW';

    #[Name('Sint Maarten', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[SameAsCountry(CountryAlpha2::Sint_Maarten_Dutch_part)]
    case Netherlands_country_Sint_Maarten = 'NL-SX';

    #[Name('Drenthe', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Drenthe = 'NL-DR';

    #[Name('Flevoland', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Flevoland = 'NL-FL';

    #[Name('Fryslân', [LanguageAlpha2::Western_Frisian], null, null)]
    case Netherlands_province_Fryslan = 'NL-FR';

    #[Name('Gelderland', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Gelderland = 'NL-GE';

    #[Name('Groningen', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Groningen = 'NL-GR';

    #[Name('Limburg', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Limburg = 'NL-LI';

    #[Name('Noord-Brabant', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Noord_Brabant = 'NL-NB';

    #[Name('Noord-Holland', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Noord_Holland = 'NL-NH';

    #[Name('Overijssel', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Overijssel = 'NL-OV';

    #[Name('Utrecht', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Utrecht = 'NL-UT';

    #[Name('Zeeland', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Zeeland = 'NL-ZE';

    #[Name('Zuid-Holland', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Netherlands_province_Zuid_Holland = 'NL-ZH';

    #[Name('Bonaire', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[SameAsCountry(CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba)]
    case Netherlands_special_municipality_Bonaire = 'NL-BQ1';

    #[Name('Saba', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[SameAsCountry(CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba)]
    case Netherlands_special_municipality_Saba = 'NL-BQ2';

    #[Name('Sint Eustatius', [LanguageAlpha2::Dutch_Flemish], null, null)]
    #[SameAsCountry(CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba)]
    case Netherlands_special_municipality_Sint_Eustatius = 'NL-BQ3';

    #[Name('Auckland', [LanguageAlpha2::English], null, null)]
    #[Name('Tāmaki-Makaurau', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Auckland = 'NZ-AUK';

    #[Name('Bay of Plenty', [LanguageAlpha2::English], null, null)]
    #[Name('Toi Moana', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Bay_of_Plenty = 'NZ-BOP';

    #[Name('Canterbury', [LanguageAlpha2::English], null, null)]
    #[Name('Waitaha', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Canterbury = 'NZ-CAN';

    #[Name('Gisborne', [LanguageAlpha2::English], null, null)]
    #[Name('Te Tairāwhiti', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Gisborne = 'NZ-GIS';

    #[Name('Greater Wellington', [LanguageAlpha2::English], null, null)]
    #[Name('Te Pane Matua Taiao', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Greater_Wellington = 'NZ-WGN';

    #[Name('Hawke\'s Bay', [LanguageAlpha2::English], null, null)]
    #[Name('Te Matau-a-Māui', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Hawke_s_Bay = 'NZ-HKB';

    #[Name('Manawatū Whanganui', [LanguageAlpha2::Maori], null, null)]
    #[Name('Manawatū-Whanganui', [LanguageAlpha2::English], null, null)]
    case New_Zealand_region_Manawatu_Whanganui = 'NZ-MWT';

    #[Name('Marlborough', [LanguageAlpha2::English], null, null)]
    case New_Zealand_region_Marlborough = 'NZ-MBH';

    #[Name('Nelson', [LanguageAlpha2::English], null, null)]
    #[Name('Whakatū', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Nelson = 'NZ-NSN';

    #[Name('Northland', [LanguageAlpha2::English], null, null)]
    #[Name('Te Taitokerau', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Northland = 'NZ-NTL';

    #[Name('Otago', [LanguageAlpha2::English], null, null)]
    #[Name('Ō Tākou', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Otago = 'NZ-OTA';

    #[Name('Southland', [LanguageAlpha2::English], null, null)]
    #[Name('Te Taiao Tonga', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Southland = 'NZ-STL';

    #[Name('Taranaki', [LanguageAlpha2::Maori, LanguageAlpha2::English], null, null)]
    case New_Zealand_region_Taranaki = 'NZ-TKI';

    #[Name('Tasman', [LanguageAlpha2::English], null, null)]
    #[Name('Te tai o Aorere', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_region_Tasman = 'NZ-TAS';

    #[Name('Te Tai o Poutini', [LanguageAlpha2::Maori], null, null)]
    #[Name('West Coast', [LanguageAlpha2::English], null, null)]
    case New_Zealand_region_Te_Tai_o_Poutini = 'NZ-WTC';

    #[Name('Waikato', [LanguageAlpha2::Maori, LanguageAlpha2::English], null, null)]
    case New_Zealand_region_Waikato = 'NZ-WKO';

    #[Name('Chatham Islands Territory', [LanguageAlpha2::English], null, null)]
    #[Name('Wharekauri', [LanguageAlpha2::Maori], null, null)]
    case New_Zealand_special_island_authority_Chatham_Islands_Territory = 'NZ-CIT';

    #[Name('Costa Caribe Norte', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_autonomous_region_Costa_Caribe_Norte = 'NI-AN';

    #[Name('Costa Caribe Sur', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_autonomous_region_Costa_Caribe_Sur = 'NI-AS';

    #[Name('Boaco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Boaco = 'NI-BO';

    #[Name('Carazo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Carazo = 'NI-CA';

    #[Name('Chinandega', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Chinandega = 'NI-CI';

    #[Name('Chontales', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Chontales = 'NI-CO';

    #[Name('Estelí', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Esteli = 'NI-ES';

    #[Name('Granada', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Granada = 'NI-GR';

    #[Name('Jinotega', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Jinotega = 'NI-JI';

    #[Name('León', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Leon = 'NI-LE';

    #[Name('Madriz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Madriz = 'NI-MD';

    #[Name('Managua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Managua = 'NI-MN';

    #[Name('Masaya', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Masaya = 'NI-MS';

    #[Name('Matagalpa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Matagalpa = 'NI-MT';

    #[Name('Nueva Segovia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Nueva_Segovia = 'NI-NS';

    #[Name('Río San Juan', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Rio_San_Juan = 'NI-SJ';

    #[Name('Rivas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Nicaragua_department_Rivas = 'NI-RI';

    #[Name('Agadez', [LanguageAlpha2::French], null, null)]
    case Niger_region_Agadez = 'NE-1';

    #[Name('Diffa', [LanguageAlpha2::French], null, null)]
    case Niger_region_Diffa = 'NE-2';

    #[Name('Dosso', [LanguageAlpha2::French], null, null)]
    case Niger_region_Dosso = 'NE-3';

    #[Name('Maradi', [LanguageAlpha2::French], null, null)]
    case Niger_region_Maradi = 'NE-4';

    #[Name('Tahoua', [LanguageAlpha2::French], null, null)]
    case Niger_region_Tahoua = 'NE-5';

    #[Name('Tillabéri', [LanguageAlpha2::French], null, null)]
    case Niger_region_Tillaberi = 'NE-6';

    #[Name('Zinder', [LanguageAlpha2::French], null, null)]
    case Niger_region_Zinder = 'NE-7';

    #[Name('Niamey', [LanguageAlpha2::French], null, null)]
    case Niger_urban_community_Niamey = 'NE-8';

    #[Name('Abuja Federal Capital Territory', [LanguageAlpha2::English], null, null)]
    case Nigeria_capital_territory_Abuja_Federal_Capital_Territory = 'NG-FC';

    #[Name('Abia', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Abia = 'NG-AB';

    #[Name('Adamawa', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Adamawa = 'NG-AD';

    #[Name('Akwa Ibom', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Akwa_Ibom = 'NG-AK';

    #[Name('Anambra', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Anambra = 'NG-AN';

    #[Name('Bauchi', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Bauchi = 'NG-BA';

    #[Name('Bayelsa', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Bayelsa = 'NG-BY';

    #[Name('Benue', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Benue = 'NG-BE';

    #[Name('Borno', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Borno = 'NG-BO';

    #[Name('Cross River', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Cross_River = 'NG-CR';

    #[Name('Delta', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Delta = 'NG-DE';

    #[Name('Ebonyi', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Ebonyi = 'NG-EB';

    #[Name('Edo', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Edo = 'NG-ED';

    #[Name('Ekiti', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Ekiti = 'NG-EK';

    #[Name('Enugu', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Enugu = 'NG-EN';

    #[Name('Gombe', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Gombe = 'NG-GO';

    #[Name('Imo', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Imo = 'NG-IM';

    #[Name('Jigawa', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Jigawa = 'NG-JI';

    #[Name('Kaduna', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Kaduna = 'NG-KD';

    #[Name('Kano', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Kano = 'NG-KN';

    #[Name('Katsina', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Katsina = 'NG-KT';

    #[Name('Kebbi', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Kebbi = 'NG-KE';

    #[Name('Kogi', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Kogi = 'NG-KO';

    #[Name('Kwara', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Kwara = 'NG-KW';

    #[Name('Lagos', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Lagos = 'NG-LA';

    #[Name('Nasarawa', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Nasarawa = 'NG-NA';

    #[Name('Niger', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Niger = 'NG-NI';

    #[Name('Ogun', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Ogun = 'NG-OG';

    #[Name('Ondo', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Ondo = 'NG-ON';

    #[Name('Osun', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Osun = 'NG-OS';

    #[Name('Oyo', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Oyo = 'NG-OY';

    #[Name('Plateau', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Plateau = 'NG-PL';

    #[Name('Rivers', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Rivers = 'NG-RI';

    #[Name('Sokoto', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Sokoto = 'NG-SO';

    #[Name('Taraba', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Taraba = 'NG-TA';

    #[Name('Yobe', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Yobe = 'NG-YO';

    #[Name('Zamfara', [LanguageAlpha2::English], null, null)]
    case Nigeria_state_Zamfara = 'NG-ZA';

    #[Name('P\'yǒngyang', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Phyeongyang', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_capital_city_P_yongyang = 'KP-01';

    #[Name('Kaeseong', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    #[Name('Kaesŏng', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    case North_Korea_metropolitan_city_Kaeseong = 'KP-15';

    #[Name('Nampho', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    #[Name('Namp’o', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    case North_Korea_metropolitan_city_Nampho = 'KP-14';

    #[Name('Chagang-do', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Jakangto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_Chagang_do = 'KP-04';

    #[Name('Hamgyǒng-bukto', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Hamkyeongpukto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_Hamgyong_bukto = 'KP-09';

    #[Name('Hamgyǒng-namdo', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Hamkyeongnamto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_Hamgyong_namdo = 'KP-08';

    #[Name('Hwanghae-bukto', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Hwanghaipukto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_Hwanghae_bukto = 'KP-06';

    #[Name('Hwanghae-namdo', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Hwanghainamto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_Hwanghae_namdo = 'KP-05';

    #[Name('Kangweonto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    #[Name('Kangwǒn-do', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    case North_Korea_province_Kangweonto = 'KP-07';

    #[Name('P\'yǒngan-bukto', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Phyeonganpukto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_P_yongan_bukto = 'KP-03';

    #[Name('P\'yǒngan-namdo', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Phyeongannamto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_P_yongan_namdo = 'KP-02';

    #[Name('Ryanggang-do', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', null)]
    #[Name('Ryangkangto', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    case North_Korea_province_Ryanggang_do = 'KP-10';

    #[Name('Raseon', [LanguageAlpha2::Korean], 'KPS 11080:2002', null)]
    #[Name('Rasǒn', [LanguageAlpha2::Korean], 'McCune-Reischauer 1939', 'Najin Sǒnbong')]
    case North_Korea_special_city_Raseon = 'KP-13';

    #[Name('Aerodrom †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Aerodrom = 'MK-801';

    #[Name('Aračinovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Aracinovo = 'MK-802';

    #[Name('Berovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Berovo = 'MK-201';

    #[Name('Bitola', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Bitola = 'MK-501';

    #[Name('Bogdanci', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Bogdanci = 'MK-401';

    #[Name('Bogovinje', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Bogovinje = 'MK-601';

    #[Name('Bosilovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Bosilovo = 'MK-402';

    #[Name('Brvenica', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Brvenica = 'MK-602';

    #[Name('Butel †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Butel = 'MK-803';

    #[Name('Čair †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Cair = 'MK-815';

    #[Name('Čaška', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Caska = 'MK-109';

    #[Name('Centar †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Centar = 'MK-814';

    #[Name('Centar Župa', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Centar_Zupa = 'MK-313';

    #[Name('Češinovo-Obleševo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Cesinovo_Oblesevo = 'MK-210';

    #[Name('Čučer-Sandevo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Cucer_Sandevo = 'MK-816';

    #[Name('Debar', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Debar = 'MK-303';

    #[Name('Debrca', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Debrca = 'MK-304';

    #[Name('Delčevo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Delcevo = 'MK-203';

    #[Name('Demir Hisar', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Demir_Hisar = 'MK-502';

    #[Name('Demir Kapija', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Demir_Kapija = 'MK-103';

    #[Name('Dojran', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Dojran = 'MK-406';

    #[Name('Dolneni', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Dolneni = 'MK-503';

    #[Name('Gazi Baba †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Gazi_Baba = 'MK-804';

    #[Name('Gevgelija', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Gevgelija = 'MK-405';

    #[Name('Gjorče Petrov †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Gjorce_Petrov = 'MK-805';

    #[Name('Gostivar', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Gostivar = 'MK-604';

    #[Name('Gradsko', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Gradsko = 'MK-102';

    #[Name('Ilinden', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Ilinden = 'MK-807';

    #[Name('Jegunovce', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Jegunovce = 'MK-606';

    #[Name('Karbinci', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Karbinci = 'MK-205';

    #[Name('Karpoš †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Karpos = 'MK-808';

    #[Name('Kavadarci', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kavadarci = 'MK-104';

    #[Name('Kičevo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kicevo = 'MK-307';

    #[Name('Kisela Voda †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kisela_Voda = 'MK-809';

    #[Name('Kočani', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kocani = 'MK-206';

    #[Name('Konče', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Konce = 'MK-407';

    #[Name('Kratovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kratovo = 'MK-701';

    #[Name('Kriva Palanka', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kriva_Palanka = 'MK-702';

    #[Name('Krivogaštani', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Krivogastani = 'MK-504';

    #[Name('Kruševo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Krusevo = 'MK-505';

    #[Name('Kumanovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Kumanovo = 'MK-703';

    #[Name('Lipkovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Lipkovo = 'MK-704';

    #[Name('Lozovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Lozovo = 'MK-105';

    #[Name('Makedonska Kamenica', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Makedonska_Kamenica = 'MK-207';

    #[Name('Makedonski Brod', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Makedonski_Brod = 'MK-308';

    #[Name('Mavrovo i Rostuše', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Mavrovo_i_Rostuse = 'MK-607';

    #[Name('Mogila', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Mogila = 'MK-506';

    #[Name('Negotino', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Negotino = 'MK-106';

    #[Name('Novaci', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Novaci = 'MK-507';

    #[Name('Novo Selo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Novo_Selo = 'MK-408';

    #[Name('Ohrid', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Ohrid = 'MK-310';

    #[Name('Pehčevo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Pehcevo = 'MK-208';

    #[Name('Petrovec', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Petrovec = 'MK-810';

    #[Name('Plasnica', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Plasnica = 'MK-311';

    #[Name('Prilep', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Prilep = 'MK-508';

    #[Name('Probištip', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Probistip = 'MK-209';

    #[Name('Radoviš', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Radovis = 'MK-409';

    #[Name('Rankovce', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Rankovce = 'MK-705';

    #[Name('Resen', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Resen = 'MK-509';

    #[Name('Rosoman', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Rosoman = 'MK-107';

    #[Name('Saraj †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Saraj = 'MK-811';

    #[Name('Sopište', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Sopiste = 'MK-812';

    #[Name('Staro Nagoričane', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Staro_Nagoricane = 'MK-706';

    #[Name('Štip', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Stip = 'MK-211';

    #[Name('Struga', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Struga = 'MK-312';

    #[Name('Strumica', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Strumica = 'MK-410';

    #[Name('Studeničani', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Studenicani = 'MK-813';

    #[Name('Šuto Orizari †', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Suto_Orizari = 'MK-817';

    #[Name('Sveti Nikole', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Sveti_Nikole = 'MK-108';

    #[Name('Tearce', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Tearce = 'MK-608';

    #[Name('Tetovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Tetovo = 'MK-609';

    #[Name('Valandovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Valandovo = 'MK-403';

    #[Name('Vasilevo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Vasilevo = 'MK-404';

    #[Name('Veles', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Veles = 'MK-101';

    #[Name('Vevčani', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Vevcani = 'MK-301';

    #[Name('Vinica', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Vinica = 'MK-202';

    #[Name('Vrapčište', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Vrapciste = 'MK-603';

    #[Name('Zelenikovo', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Zelenikovo = 'MK-806';

    #[Name('Želino', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Zelino = 'MK-605';

    #[Name('Zrnovci', [LanguageAlpha2::Macedonian], 'BGN/PCGN 2013', null)]
    case North_Macedonia_municipality_Zrnovci = 'MK-204';

    #[Name('Jan Mayen (Arctic Region)', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    #[SameAsCountry(CountryAlpha2::Svalbard_Jan_Mayen)]
    case Norway_arctic_region_Jan_Mayen_Arctic_Region = 'NO-22';

    #[Name('Svalbard (Arctic Region)', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    #[SameAsCountry(CountryAlpha2::Svalbard_Jan_Mayen)]
    case Norway_arctic_region_Svalbard_Arctic_Region = 'NO-21';

    #[Name('Agder', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Agder = 'NO-42';

    #[Name('Innlandet', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Innlandet = 'NO-34';

    #[Name('Møre og Romsdal', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_More_og_Romsdal = 'NO-15';

    #[Name('Nordland', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Nordland = 'NO-18';

    #[Name('Oslo', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Oslo = 'NO-03';

    #[Name('Rogaland', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Rogaland = 'NO-11';

    #[Name('Romssa ja Finnmárkku', [LanguageAlpha2::Northern_Sami], null, null)]
    #[Name('Troms og Finnmark', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    #[Name('Tromssan ja Finmarkun', [], null, null)]
    case Norway_county_Romssa_ja_Finnmarkku = 'NO-54';

    #[Name('Trööndelage', [], null, null)]
    #[Name('Trøndelag', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Troondelage = 'NO-50';

    #[Name('Vestfold og Telemark', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Vestfold_og_Telemark = 'NO-38';

    #[Name('Vestland', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Vestland = 'NO-46';

    #[Name('Viken', [LanguageAlpha2::Bokmal_Norwegian_Norwegian_Bokmal, LanguageAlpha2::Norwegian_Nynorsk_Nynorsk_Norwegian], null, null)]
    case Norway_county_Viken = 'NO-30';

    #[Name('Ad Dākhilīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Ad_Dakhiliyah = 'OM-DA';

    #[Name('Al Buraymī', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Al_Buraymi = 'OM-BU';

    #[Name('Al Wusţá', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Al_Wusta = 'OM-WU';

    #[Name('Az̧ Z̧āhirah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Az_Zahirah = 'OM-ZA';

    #[Name('Janūb al Bāţinah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Janub_al_Batinah = 'OM-BJ';

    #[Name('Janūb ash Sharqīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Janub_ash_Sharqiyah = 'OM-SJ';

    #[Name('Masqaţ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Muscat')]
    case Oman_governorate_Masqat = 'OM-MA';

    #[Name('Musandam', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Musandam = 'OM-MU';

    #[Name('Shamāl al Bāţinah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Shamal_al_Batinah = 'OM-BS';

    #[Name('Shamāl ash Sharqīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Oman_governorate_Shamal_ash_Sharqiyah = 'OM-SS';

    #[Name('Z̧ufār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Dhofar')]
    case Oman_governorate_Zufar = 'OM-ZU';

    #[Name('Azad Jammu and Kashmir', [LanguageAlpha2::English], null, 'AJ&K')]
    #[Name('Āzād Jammūñ o Kashmīr', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    case Pakistan_Pakistan_administered_area_Azad_Jammu_and_Kashmir = 'PK-JK';

    #[Name('Gilgit-Baltistan', [LanguageAlpha2::English], null, null)]
    #[Name('Gilgit-Baltistān', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    case Pakistan_Pakistan_administered_area_Gilgit_Baltistan = 'PK-GB';

    #[Name('Islamabad', [LanguageAlpha2::English], null, null)]
    #[Name('Islāmābād', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    case Pakistan_federal_capital_territory_Islamabad = 'PK-IS';

    #[Name('Balochistan', [LanguageAlpha2::English], null, null)]
    #[Name('Balōchistān', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    case Pakistan_province_Balochistan = 'PK-BA';

    #[Name('Khaībar Pakhtūnkhwā', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    #[Name('Khyber Pakhtunkhwa', [LanguageAlpha2::English], null, null)]
    case Pakistan_province_Khaibar_Pakhtunkhwa = 'PK-KP';

    #[Name('Panjāb', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    #[Name('Punjab', [LanguageAlpha2::English], null, null)]
    case Pakistan_province_Panjab = 'PK-PB';

    #[Name('Sindh', [LanguageAlpha2::English], null, null)]
    #[Name('Sindh', [LanguageAlpha2::Urdu], 'BGN/PCGN 2007', null)]
    case Pakistan_province_Sindh = 'PK-SD';

    #[Name('Aimeliik', [LanguageAlpha2::English], null, null)]
    case Palau_state_Aimeliik = 'PW-002';

    #[Name('Airai', [LanguageAlpha2::English], null, null)]
    case Palau_state_Airai = 'PW-004';

    #[Name('Angaur', [LanguageAlpha2::English], null, null)]
    case Palau_state_Angaur = 'PW-010';

    #[Name('Hatohobei', [LanguageAlpha2::English], null, null)]
    case Palau_state_Hatohobei = 'PW-050';

    #[Name('Kayangel', [LanguageAlpha2::English], null, null)]
    case Palau_state_Kayangel = 'PW-100';

    #[Name('Koror', [LanguageAlpha2::English], null, null)]
    case Palau_state_Koror = 'PW-150';

    #[Name('Melekeok', [LanguageAlpha2::English], null, null)]
    case Palau_state_Melekeok = 'PW-212';

    #[Name('Ngaraard', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngaraard = 'PW-214';

    #[Name('Ngarchelong', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngarchelong = 'PW-218';

    #[Name('Ngardmau', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngardmau = 'PW-222';

    #[Name('Ngatpang', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngatpang = 'PW-224';

    #[Name('Ngchesar', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngchesar = 'PW-226';

    #[Name('Ngeremlengui', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngeremlengui = 'PW-227';

    #[Name('Ngiwal', [LanguageAlpha2::English], null, null)]
    case Palau_state_Ngiwal = 'PW-228';

    #[Name('Peleliu', [LanguageAlpha2::English], null, null)]
    case Palau_state_Peleliu = 'PW-350';

    #[Name('Sonsorol', [LanguageAlpha2::English], null, null)]
    case Palau_state_Sonsorol = 'PW-370';

    #[Name('Al Khalīl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Hebron', [LanguageAlpha2::English], null, null)]
    case Palestinian_Territories_governorate_Al_Khalil = 'PS-HBN';

    #[Name('Al Quds', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Jerusalem', [LanguageAlpha2::English], null, null)]
    case Palestinian_Territories_governorate_Al_Quds = 'PS-JEM';

    #[Name('Arīḩā wal Aghwār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Jericho and Al Aghwar', [LanguageAlpha2::English], null, null)]
    case Palestinian_Territories_governorate_Ariha_wal_Aghwar = 'PS-JRH';

    #[Name('Bayt Laḩm', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Bethlehem', [LanguageAlpha2::English], null, null)]
    case Palestinian_Territories_governorate_Bayt_Lahm = 'PS-BTH';

    #[Name('Dayr al Balaḩ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Deir El Balah', [LanguageAlpha2::English], null, null)]
    case Palestinian_Territories_governorate_Dayr_al_Balah = 'PS-DEB';

    #[Name('Gaza', [LanguageAlpha2::English], null, null)]
    #[Name('Ghazzah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Gaza = 'PS-GZA';

    #[Name('Janīn', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Jenin', [LanguageAlpha2::English], null, null)]
    case Palestinian_Territories_governorate_Janin = 'PS-JEN';

    #[Name('Khan Yunis', [LanguageAlpha2::English], null, null)]
    #[Name('Khān Yūnis', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Khan_Yunis = 'PS-KYS';

    #[Name('Nablus', [LanguageAlpha2::English], null, null)]
    #[Name('Nāblus', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Nablus = 'PS-NBS';

    #[Name('North Gaza', [LanguageAlpha2::English], null, null)]
    #[Name('Shamāl Ghazzah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_North_Gaza = 'PS-NGZ';

    #[Name('Qalqilya', [LanguageAlpha2::English], null, null)]
    #[Name('Qalqīlyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Qalqilya = 'PS-QQA';

    #[Name('Rafah', [LanguageAlpha2::English], null, null)]
    #[Name('Rafaḩ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Rafah = 'PS-RFH';

    #[Name('Ramallah', [LanguageAlpha2::English], null, null)]
    #[Name('Rām Allāh wal Bīrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Ramallah = 'PS-RBH';

    #[Name('Salfit', [LanguageAlpha2::English], null, null)]
    #[Name('Salfīt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Salfit = 'PS-SLT';

    #[Name('Tubas', [LanguageAlpha2::English], null, null)]
    #[Name('Ţūbās', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Tubas = 'PS-TBS';

    #[Name('Tulkarm', [LanguageAlpha2::English], null, null)]
    #[Name('Ţūlkarm', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Palestinian_Territories_governorate_Tulkarm = 'PS-TKM';

    #[Name('Emberá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_indigenous_region_Embera = 'PA-EM';

    #[Name('Guna Yala', [LanguageAlpha2::Spanish_Castilian], null, 'Kuna Yala')]
    case Panama_indigenous_region_Guna_Yala = 'PA-KY';

    #[Name('Naso Tjër Di', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_indigenous_region_Naso_Tjer_Di = 'PA-NT';

    #[Name('Ngäbe-Buglé', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_indigenous_region_Ngabe_Bugle = 'PA-NB';

    #[Name('Bocas del Toro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Bocas_del_Toro = 'PA-1';

    #[Name('Chiriquí', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Chiriqui = 'PA-4';

    #[Name('Coclé', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Cocle = 'PA-2';

    #[Name('Colón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Colon = 'PA-3';

    #[Name('Darién', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Darien = 'PA-5';

    #[Name('Herrera', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Herrera = 'PA-6';

    #[Name('Los Santos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Los_Santos = 'PA-7';

    #[Name('Panamá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Panama = 'PA-8';

    #[Name('Panamá Oeste', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Panama_Oeste = 'PA-10';

    #[Name('Veraguas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Panama_province_Veraguas = 'PA-9';

    #[Name('Bougainville', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_autonomous_region_Bougainville = 'PG-NSB';

    #[Name('National Capital District (Port Moresby)', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_district_National_Capital_District_Port_Moresby = 'PG-NCD';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Central = 'PG-CPM';

    #[Name('Chimbu', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Chimbu = 'PG-CPK';

    #[Name('East New Britain', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_East_New_Britain = 'PG-EBR';

    #[Name('East Sepik', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_East_Sepik = 'PG-ESW';

    #[Name('Eastern Highlands', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Eastern_Highlands = 'PG-EHG';

    #[Name('Enga', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Enga = 'PG-EPW';

    #[Name('Gulf', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Gulf = 'PG-GPK';

    #[Name('Hela', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Hela = 'PG-HLA';

    #[Name('Jiwaka', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Jiwaka = 'PG-JWK';

    #[Name('Madang', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Madang = 'PG-MPM';

    #[Name('Manus', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Manus = 'PG-MRL';

    #[Name('Milne Bay', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Milne_Bay = 'PG-MBA';

    #[Name('Morobe', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Morobe = 'PG-MPL';

    #[Name('New Ireland', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_New_Ireland = 'PG-NIK';

    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Northern = 'PG-NPP';

    #[Name('Southern Highlands', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Southern_Highlands = 'PG-SHM';

    #[Name('West New Britain', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_West_New_Britain = 'PG-WBK';

    #[Name('West Sepik', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_West_Sepik = 'PG-SAN';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Western = 'PG-WPD';

    #[Name('Western Highlands', [LanguageAlpha2::English], null, null)]
    case Papua_New_Guinea_province_Western_Highlands = 'PG-WHM';

    #[Name('Asunción', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_capital_Asuncion = 'PY-ASU';

    #[Name('Alto Paraguay', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Alto_Paraguay = 'PY-16';

    #[Name('Alto Paraná', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Alto_Parana = 'PY-10';

    #[Name('Amambay', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Amambay = 'PY-13';

    #[Name('Boquerón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Boqueron = 'PY-19';

    #[Name('Caaguazú', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Caaguazu = 'PY-5';

    #[Name('Caazapá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Caazapa = 'PY-6';

    #[Name('Canindeyú', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Canindeyu = 'PY-14';

    #[Name('Central', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Central = 'PY-11';

    #[Name('Concepción', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Concepcion = 'PY-1';

    #[Name('Cordillera', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Cordillera = 'PY-3';

    #[Name('Guairá', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Guaira = 'PY-4';

    #[Name('Itapúa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Itapua = 'PY-7';

    #[Name('Misiones', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Misiones = 'PY-8';

    #[Name('Ñeembucú', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Neembucu = 'PY-12';

    #[Name('Paraguarí', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Paraguari = 'PY-9';

    #[Name('Presidente Hayes', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_Presidente_Hayes = 'PY-15';

    #[Name('San Pedro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Paraguay_department_San_Pedro = 'PY-2';

    #[Name('Lima hatun llaqta', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Lima llaqta suyu', [LanguageAlpha2::Quechua], null, null)]
    #[Name('Municipalidad Metropolitana de Lima', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Peru_municipality_Lima_hatun_llaqta = 'PE-LMA';

    #[Name('Amarumayu', [LanguageAlpha2::Quechua], null, null)]
    #[Name('Amasunu', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Amazonas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Peru_region_Amarumayu = 'PE-AMA';

    #[Name('Ancash', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Ankashu', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Anqash', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Ancash = 'PE-ANC';

    #[Name('Apurimaq', [LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    #[Name('Apurímac', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Peru_region_Apurimaq = 'PE-APU';

    #[Name('Arequipa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Arikipa', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Ariqipa', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Arequipa = 'PE-ARE';

    #[Name('Ayacucho', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Ayakuchu', [LanguageAlpha2::Quechua], null, null)]
    #[Name('Ayaquchu', [LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Ayacucho = 'PE-AYA';

    #[Name('Cajamarca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Kashamarka', [LanguageAlpha2::Quechua], null, null)]
    #[Name('Qajamarka', [LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Cajamarca = 'PE-CAJ';

    #[Name('Cusco', [LanguageAlpha2::Spanish_Castilian], null, 'Cuzco')]
    #[Name('Kusku', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Qusqu', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Cusco = 'PE-CUS';

    #[Name('El Callao', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Kallao', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Qallaw', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_El_Callao = 'PE-CAL';

    #[Name('Huancavelica', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Wankawelika', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Wankawillka', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Huancavelica = 'PE-HUV';

    #[Name('Huánuco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Wanuku', [LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Huanuco = 'PE-HUC';

    #[Name('Hunin', [LanguageAlpha2::Quechua], null, null)]
    #[Name('Junin', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Junín', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Peru_region_Hunin = 'PE-JUN';

    #[Name('Ica', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Ika', [LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Ica = 'PE-ICA';

    #[Name('La Libertad', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    #[Name('Qispi kay', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_La_Libertad = 'PE-LAL';

    #[Name('Lambayeque', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    #[Name('Lampalliqi', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Lambayeque = 'PE-LAM';

    #[Name('Lima', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Lima = 'PE-LIM';

    #[Name('Loreto', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Luritu', [LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Loreto = 'PE-LOR';

    #[Name('Madre de Dios', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    #[Name('Mayutata', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Madre_de_Dios = 'PE-MDD';

    #[Name('Moquegua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Moqwegwa', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Muqiwa', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Moquegua = 'PE-MOQ';

    #[Name('Pasco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Pasqu', [LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Pasco = 'PE-PAS';

    #[Name('Piura', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    #[Name('Piwra', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Piura = 'PE-PIU';

    #[Name('Puno', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    #[Name('Punu', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Puno = 'PE-PUN';

    #[Name('San Martin', [LanguageAlpha2::Quechua], null, null)]
    #[Name('San Martín', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_San_Martin = 'PE-SAM';

    #[Name('Tacna', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Takna', [LanguageAlpha2::Aymara], null, null)]
    #[Name('Taqna', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Tacna = 'PE-TAC';

    #[Name('Tumbes', [LanguageAlpha2::Spanish_Castilian, LanguageAlpha2::Aymara], null, null)]
    #[Name('Tumpis', [LanguageAlpha2::Quechua], null, null)]
    case Peru_region_Tumbes = 'PE-TUM';

    #[Name('Ucayali', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Ukayali', [LanguageAlpha2::Quechua, LanguageAlpha2::Aymara], null, null)]
    case Peru_region_Ucayali = 'PE-UCA';

    #[Name('Abra', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Abra = 'PH-ABR';

    #[Name('Agusan del Norte', [LanguageAlpha2::English], null, null)]
    #[Name('Hilagang Agusan', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Agusan_del_Norte = 'PH-AGN';

    #[Name('Agusan del Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Agusan', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Agusan_del_Sur = 'PH-AGS';

    #[Name('Aklan', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Aklan = 'PH-AKL';

    #[Name('Albay', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Albay = 'PH-ALB';

    #[Name('Antike', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Antique', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Antike = 'PH-ANT';

    #[Name('Apayao', [LanguageAlpha2::English], null, null)]
    #[Name('Apayaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Apayao = 'PH-APA';

    #[Name('Aurora', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Aurora = 'PH-AUR';

    #[Name('Basilan', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Basilan = 'PH-BAS';

    #[Name('Bataan', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Bataan = 'PH-BAN';

    #[Name('Batanes', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Batanes = 'PH-BTN';

    #[Name('Batangas', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Batangas = 'PH-BTG';

    #[Name('Benget', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Benguet', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Benget = 'PH-BEN';

    #[Name('Biliran', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Biliran = 'PH-BIL';

    #[Name('Bohol', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Bohol = 'PH-BOH';

    #[Name('Bukidnon', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Bukidnon = 'PH-BUK';

    #[Name('Bulacan', [LanguageAlpha2::English], null, null)]
    #[Name('Bulakan', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Bulacan = 'PH-BUL';

    #[Name('Cagayan', [LanguageAlpha2::English], null, null)]
    #[Name('Kagayan', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Cagayan = 'PH-CAG';

    #[Name('Camarines Norte', [LanguageAlpha2::English], null, null)]
    #[Name('Hilagang Kamarines', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Camarines_Norte = 'PH-CAN';

    #[Name('Camarines Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Kamarines', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Camarines_Sur = 'PH-CAS';

    #[Name('Camiguin', [LanguageAlpha2::English], null, null)]
    #[Name('Kamigin', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Camiguin = 'PH-CAM';

    #[Name('Capiz', [LanguageAlpha2::English], null, null)]
    #[Name('Kapis', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Capiz = 'PH-CAP';

    #[Name('Catanduanes', [LanguageAlpha2::English], null, null)]
    #[Name('Katanduwanes', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Catanduanes = 'PH-CAT';

    #[Name('Cavite', [LanguageAlpha2::English], null, null)]
    #[Name('Kabite', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Cavite = 'PH-CAV';

    #[Name('Cebu', [LanguageAlpha2::English], null, null)]
    #[Name('Sebu', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Cebu = 'PH-CEB';

    #[Name('Cotabato', [LanguageAlpha2::English], null, null)]
    #[Name('Kotabato', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Cotabato = 'PH-NCO';

    #[Name('Davao Occidental', [LanguageAlpha2::English], null, null)]
    #[Name('Kanlurang Dabaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Davao_Occidental = 'PH-DVO';

    #[Name('Davao Oriental', [LanguageAlpha2::English], null, null)]
    #[Name('Silangang Dabaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Davao_Oriental = 'PH-DAO';

    #[Name('Davao de Oro', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Davao_de_Oro = 'PH-COM';

    #[Name('Davao del Norte', [LanguageAlpha2::English], null, null)]
    #[Name('Hilagang Dabaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Davao_del_Norte = 'PH-DAV';

    #[Name('Davao del Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Dabaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Davao_del_Sur = 'PH-DAS';

    #[Name('Dinagat Islands', [LanguageAlpha2::English], null, null)]
    #[Name('Pulo ng Dinagat', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Dinagat_Islands = 'PH-DIN';

    #[Name('Eastern Samar', [LanguageAlpha2::English], null, null)]
    #[Name('Silangang Samar', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Eastern_Samar = 'PH-EAS';

    #[Name('Gimaras', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Guimaras', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Gimaras = 'PH-GUI';

    #[Name('Hilagang Iloko', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Ilocos Norte', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Hilagang_Iloko = 'PH-ILN';

    #[Name('Hilagang Lanaw', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Lanao del Norte', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Hilagang_Lanaw = 'PH-LAN';

    #[Name('Hilagang Magindanaw', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Maguindanao del Norte', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Hilagang_Magindanaw = 'PH-MGN';

    #[Name('Hilagang Samar', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Northern Samar', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Hilagang_Samar = 'PH-NSA';

    #[Name('Hilagang Sambuwangga', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Zamboanga del Norte', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Hilagang_Sambuwangga = 'PH-ZAN';

    #[Name('Hilagang Surigaw', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Surigao del Norte', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Hilagang_Surigaw = 'PH-SUN';

    #[Name('Ifugao', [LanguageAlpha2::English], null, null)]
    #[Name('Ipugaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Ifugao = 'PH-IFU';

    #[Name('Ilocos Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Iloko', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Ilocos_Sur = 'PH-ILS';

    #[Name('Iloilo', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Iloilo = 'PH-ILI';

    #[Name('Isabela', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Isabela = 'PH-ISA';

    #[Name('Kalinga', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Kalinga = 'PH-KAL';

    #[Name('Kanlurang Mindoro', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Mindoro Occidental', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Kanlurang_Mindoro = 'PH-MDC';

    #[Name('Kanlurang Misamis', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Misamis Occidental', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Kanlurang_Misamis = 'PH-MSC';

    #[Name('Kanlurang Negros', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Negros Occidental', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Kanlurang_Negros = 'PH-NEC';

    #[Name('Katimogang Leyte', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Southern Leyte', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Katimogang_Leyte = 'PH-SLE';

    #[Name('Keson', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Quezon', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Keson = 'PH-QUE';

    #[Name('Kirino', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Quirino', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Kirino = 'PH-QUI';

    #[Name('La Union', [LanguageAlpha2::English], null, null)]
    #[Name('La Unyon', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_La_Union = 'PH-LUN';

    #[Name('Laguna', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Laguna = 'PH-LAG';

    #[Name('Lalawigang Bulubundukin', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Mountain Province', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Lalawigang_Bulubundukin = 'PH-MOU';

    #[Name('Lanao del Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Lanaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Lanao_del_Sur = 'PH-LAS';

    #[Name('Leyte', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Leyte = 'PH-LEY';

    #[Name('Maguindanao del Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Magindanaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Maguindanao_del_Sur = 'PH-MGS';

    #[Name('Marinduke', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Marinduque', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Marinduke = 'PH-MAD';

    #[Name('Masbate', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Masbate = 'PH-MAS';

    #[Name('Mindoro Oriental', [LanguageAlpha2::English], null, null)]
    #[Name('Silangang Mindoro', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Mindoro_Oriental = 'PH-MDR';

    #[Name('Misamis Oriental', [LanguageAlpha2::English], null, null)]
    #[Name('Silangang Misamis', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Misamis_Oriental = 'PH-MSR';

    #[Name('Negros Oriental', [LanguageAlpha2::English], null, null)]
    #[Name('Silangang Negros', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Negros_Oriental = 'PH-NER';

    #[Name('Nueva Ecija', [LanguageAlpha2::English], null, null)]
    #[Name('Nuweva Esiha', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Nueva_Ecija = 'PH-NUE';

    #[Name('Nueva Vizcaya', [LanguageAlpha2::English], null, null)]
    #[Name('Nuweva Biskaya', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Nueva_Vizcaya = 'PH-NUV';

    #[Name('Palawan', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Palawan = 'PH-PLW';

    #[Name('Pampanga', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Pampanga = 'PH-PAM';

    #[Name('Pangasinan', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Pangasinan = 'PH-PAN';

    #[Name('Risal', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Rizal', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Risal = 'PH-RIZ';

    #[Name('Romblon', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Romblon = 'PH-ROM';

    #[Name('Samar', [LanguageAlpha2::English], null, 'Western Samar')]
    #[Name('Samar', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Samar = 'PH-WSA';

    #[Name('Sambales', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Zambales', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Sambales = 'PH-ZMB';

    #[Name('Sambuwangga Sibugay', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Zamboanga Sibugay', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Sambuwangga_Sibugay = 'PH-ZSI';

    #[Name('Sarangani', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Sarangani = 'PH-SAR';

    #[Name('Sikihor', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Siquijor', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Sikihor = 'PH-SIG';

    #[Name('Sorsogon', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Sorsogon = 'PH-SOR';

    #[Name('South Cotabato', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Kotabato', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_South_Cotabato = 'PH-SCO';

    #[Name('Sultan Kudarat', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Sultan_Kudarat = 'PH-SUK';

    #[Name('Sulu', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Sulu = 'PH-SLU';

    #[Name('Surigao del Sur', [LanguageAlpha2::English], null, null)]
    #[Name('Timog Surigaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Surigao_del_Sur = 'PH-SUR';

    #[Name('Tarlac', [LanguageAlpha2::English], null, null)]
    #[Name('Tarlak', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_province_Tarlac = 'PH-TAR';

    #[Name('Tawi-Tawi', [LanguageAlpha2::Tagalog, LanguageAlpha2::English], null, null)]
    case Philippines_province_Tawi_Tawi = 'PH-TAW';

    #[Name('Timog Sambuwangga', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Zamboanga del Sur', [LanguageAlpha2::English], null, null)]
    case Philippines_province_Timog_Sambuwangga = 'PH-ZAS';

    #[Name('Autonomous Region in Muslim Mindanao (ARMM)', [LanguageAlpha2::English], null, null)]
    #[Name('Nagsasariling Rehiyon ng Muslim sa Mindanaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Autonomous_Region_in_Muslim_Mindanao_ARMM = 'PH-14';

    #[Name('Bicol (Region V)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Bikol', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Bicol_Region_V = 'PH-05';

    #[Name('Cagayan Valley (Region II)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Lambak ng Kagayan', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Cagayan_Valley_Region_II = 'PH-02';

    #[Name('Calabarzon (Region IV-A)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Calabarzon', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Calabarzon_Region_IV_A = 'PH-40';

    #[Name('Caraga (Region XIII)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Karaga', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Caraga_Region_XIII = 'PH-13';

    #[Name('Central Luzon (Region III)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Gitnang Luson', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Central_Luzon_Region_III = 'PH-03';

    #[Name('Central Visayas (Region VII)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Gitnang Bisaya', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Central_Visayas_Region_VII = 'PH-07';

    #[Name('Cordillera Administrative Region (CAR)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Administratibo ng Kordilyera', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Cordillera_Administrative_Region_CAR = 'PH-15';

    #[Name('Davao (Region XI)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Dabaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Davao_Region_XI = 'PH-11';

    #[Name('Eastern Visayas (Region VIII)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Silangang Bisaya', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Eastern_Visayas_Region_VIII = 'PH-08';

    #[Name('Ilocos (Region I)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Iloko', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Ilocos_Region_I = 'PH-01';

    #[Name('Mimaropa (Region IV-B)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Mimaropa', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Mimaropa_Region_IV_B = 'PH-41';

    #[Name('National Capital Region', [LanguageAlpha2::English], null, null)]
    #[Name('Pambansang Punong Rehiyon', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_National_Capital_Region = 'PH-00';

    #[Name('Northern Mindanao (Region X)', [LanguageAlpha2::English], null, null)]
    #[Name('Rehiyon ng Hilagang Mindanaw', [LanguageAlpha2::Tagalog], null, null)]
    case Philippines_region_Northern_Mindanao_Region_X = 'PH-10';

    #[Name('Rehiyon ng Kanlurang Bisaya', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Western Visayas (Region VI)', [LanguageAlpha2::English], null, null)]
    case Philippines_region_Rehiyon_ng_Kanlurang_Bisaya = 'PH-06';

    #[Name('Rehiyon ng Soccsksargen', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Soccsksargen (Region XII)', [LanguageAlpha2::English], null, null)]
    case Philippines_region_Rehiyon_ng_Soccsksargen = 'PH-12';

    #[Name('Rehiyon ng Tangway ng Sambuwangga', [LanguageAlpha2::Tagalog], null, null)]
    #[Name('Zamboanga Peninsula (Region IX)', [LanguageAlpha2::English], null, null)]
    case Philippines_region_Rehiyon_ng_Tangway_ng_Sambuwangga = 'PH-09';

    #[Name('Dolnośląskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Dolnoslaskie = 'PL-02';

    #[Name('Kujawsko-Pomorskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Kujawsko_Pomorskie = 'PL-04';

    #[Name('Łódzkie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Lodzkie = 'PL-10';

    #[Name('Lubelskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Lubelskie = 'PL-06';

    #[Name('Lubuskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Lubuskie = 'PL-08';

    #[Name('Małopolskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Malopolskie = 'PL-12';

    #[Name('Mazowieckie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Mazowieckie = 'PL-14';

    #[Name('Opolskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Opolskie = 'PL-16';

    #[Name('Podkarpackie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Podkarpackie = 'PL-18';

    #[Name('Podlaskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Podlaskie = 'PL-20';

    #[Name('Pomorskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Pomorskie = 'PL-22';

    #[Name('Śląskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Slaskie = 'PL-24';

    #[Name('Świętokrzyskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Swietokrzyskie = 'PL-26';

    #[Name('Warmińsko-Mazurskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Warminsko_Mazurskie = 'PL-28';

    #[Name('Wielkopolskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Wielkopolskie = 'PL-30';

    #[Name('Zachodniopomorskie', [LanguageAlpha2::Polish], null, null)]
    case Poland_voivodship_Zachodniopomorskie = 'PL-32';

    #[Name('Região Autónoma da Madeira', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_autonomous_region_Regiao_Autonoma_da_Madeira = 'PT-30';

    #[Name('Região Autónoma dos Açores', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_autonomous_region_Regiao_Autonoma_dos_Acores = 'PT-20';

    #[Name('Aveiro', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Aveiro = 'PT-01';

    #[Name('Beja', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Beja = 'PT-02';

    #[Name('Braga', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Braga = 'PT-03';

    #[Name('Bragança', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Braganca = 'PT-04';

    #[Name('Castelo Branco', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Castelo_Branco = 'PT-05';

    #[Name('Coimbra', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Coimbra = 'PT-06';

    #[Name('Évora', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Evora = 'PT-07';

    #[Name('Faro', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Faro = 'PT-08';

    #[Name('Guarda', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Guarda = 'PT-09';

    #[Name('Leiria', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Leiria = 'PT-10';

    #[Name('Lisboa', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Lisboa = 'PT-11';

    #[Name('Portalegre', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Portalegre = 'PT-12';

    #[Name('Porto', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Porto = 'PT-13';

    #[Name('Santarém', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Santarem = 'PT-14';

    #[Name('Setúbal', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Setubal = 'PT-15';

    #[Name('Viana do Castelo', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Viana_do_Castelo = 'PT-16';

    #[Name('Vila Real', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Vila_Real = 'PT-17';

    #[Name('Viseu', [LanguageAlpha2::Portuguese], null, null)]
    case Portugal_district_Viseu = 'PT-18';

    #[Name('Ad Dawḩah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Ad_Dawhah = 'QA-DA';

    #[Name('Al Khawr wa adh Dhakhīrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Al_Khawr_wa_adh_Dhakhirah = 'QA-KH';

    #[Name('Al Wakrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Al_Wakrah = 'QA-WA';

    #[Name('Ar Rayyān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Ar_Rayyan = 'QA-RA';

    #[Name('Ash Shamāl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Ash_Shamal = 'QA-MS';

    #[Name('Ash Shīḩānīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Ash_Shihaniyah = 'QA-SH';

    #[Name('Az̧ Z̧a‘āyin', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Az_Za_ayin = 'QA-ZA';

    #[Name('Umm Şalāl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Qatar_municipality_Umm_Salal = 'QA-US';

    #[Name('Alba', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Alba = 'RO-AB';

    #[Name('Arad', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Arad = 'RO-AR';

    #[Name('Argeș', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Arges = 'RO-AG';

    #[Name('Bacău', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Bacau = 'RO-BC';

    #[Name('Bihor', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Bihor = 'RO-BH';

    #[Name('Bistrița-Năsăud', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Bistrita_Nasaud = 'RO-BN';

    #[Name('Botoșani', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Botosani = 'RO-BT';

    #[Name('Brăila', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Braila = 'RO-BR';

    #[Name('Brașov', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Brasov = 'RO-BV';

    #[Name('Buzău', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Buzau = 'RO-BZ';

    #[Name('Călărași', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Calarasi = 'RO-CL';

    #[Name('Caraș-Severin', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Caras_Severin = 'RO-CS';

    #[Name('Cluj', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Cluj = 'RO-CJ';

    #[Name('Constanța', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Constanta = 'RO-CT';

    #[Name('Covasna', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Covasna = 'RO-CV';

    #[Name('Dâmbovița', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Dambovita = 'RO-DB';

    #[Name('Dolj', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Dolj = 'RO-DJ';

    #[Name('Galați', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Galati = 'RO-GL';

    #[Name('Giurgiu', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Giurgiu = 'RO-GR';

    #[Name('Gorj', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Gorj = 'RO-GJ';

    #[Name('Harghita', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Harghita = 'RO-HR';

    #[Name('Hunedoara', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Hunedoara = 'RO-HD';

    #[Name('Ialomița', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Ialomita = 'RO-IL';

    #[Name('Iași', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Iasi = 'RO-IS';

    #[Name('Ilfov', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Ilfov = 'RO-IF';

    #[Name('Maramureș', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Maramures = 'RO-MM';

    #[Name('Mehedinți', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Mehedinti = 'RO-MH';

    #[Name('Mureș', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Mures = 'RO-MS';

    #[Name('Neamț', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Neamt = 'RO-NT';

    #[Name('Olt', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Olt = 'RO-OT';

    #[Name('Prahova', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Prahova = 'RO-PH';

    #[Name('Sălaj', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Salaj = 'RO-SJ';

    #[Name('Satu Mare', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Satu_Mare = 'RO-SM';

    #[Name('Sibiu', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Sibiu = 'RO-SB';

    #[Name('Suceava', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Suceava = 'RO-SV';

    #[Name('Teleorman', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Teleorman = 'RO-TR';

    #[Name('Timiș', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Timis = 'RO-TM';

    #[Name('Tulcea', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Tulcea = 'RO-TL';

    #[Name('Vâlcea', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Valcea = 'RO-VL';

    #[Name('Vaslui', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Vaslui = 'RO-VS';

    #[Name('Vrancea', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_department_Vrancea = 'RO-VN';

    #[Name('București', [LanguageAlpha2::Romanian_Moldavian_Moldovan], null, null)]
    case Romania_municipality_Bucuresti = 'RO-B';

    #[Name('Amurskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Amurskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Amurskaja_oblast = 'RU-AMU';

    #[Name('Arhangel\'skaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Arkhangel\'skaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Arhangel_skaja_oblast = 'RU-ARK';

    #[Name('Astrahanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Astrakhanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Astrahanskaja_oblast = 'RU-AST';

    #[Name('Belgorodskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Belgorodskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Belgorodskaja_oblast = 'RU-BEL';

    #[Name('Brjanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Bryanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Brjanskaja_oblast = 'RU-BRY';

    #[Name('Chelyabinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Čeljabinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_administrative_region_Chelyabinskaya_oblast = 'RU-CHE';

    #[Name('Irkutskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Irkutskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Irkutskaja_oblast = 'RU-IRK';

    #[Name('Ivanovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Ivanovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Ivanovskaja_oblast = 'RU-IVA';

    #[Name('Jaroslavskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Yaroslavskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Jaroslavskaja_oblast = 'RU-YAR';

    #[Name('Kaliningradskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kaliningradskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Kaliningradskaja_oblast = 'RU-KGD';

    #[Name('Kaluzhskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Kalužskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_administrative_region_Kaluzhskaya_oblast = 'RU-KLU';

    #[Name('Kemerovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kemerovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Kemerovskaja_oblast = 'RU-KEM';

    #[Name('Kirovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kirovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Kirovskaja_oblast = 'RU-KIR';

    #[Name('Kostromskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kostromskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Kostromskaja_oblast = 'RU-KOS';

    #[Name('Kurganskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kurganskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Kurganskaja_oblast = 'RU-KGN';

    #[Name('Kurskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kurskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Kurskaja_oblast = 'RU-KRS';

    #[Name('Leningradskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Leningradskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Leningradskaja_oblast = 'RU-LEN';

    #[Name('Lipeckaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Lipetskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Lipeckaja_oblast = 'RU-LIP';

    #[Name('Magadanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Magadanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Magadanskaja_oblast = 'RU-MAG';

    #[Name('Moskovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Moskovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Moskovskaja_oblast = 'RU-MOS';

    #[Name('Murmanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Murmanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Murmanskaja_oblast = 'RU-MUR';

    #[Name('Nizhegorodskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Nižegorodskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_administrative_region_Nizhegorodskaya_oblast = 'RU-NIZ';

    #[Name('Novgorodskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Novgorodskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Novgorodskaja_oblast = 'RU-NGR';

    #[Name('Novosibirskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Novosibirskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Novosibirskaja_oblast = 'RU-NVS';

    #[Name('Omskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Omskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Omskaja_oblast = 'RU-OMS';

    #[Name('Orenburgskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Orenburgskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Orenburgskaja_oblast = 'RU-ORE';

    #[Name('Orlovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Orlovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Orlovskaja_oblast = 'RU-ORL';

    #[Name('Penzenskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Penzenskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Penzenskaja_oblast = 'RU-PNZ';

    #[Name('Pskovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Pskovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Pskovskaja_oblast = 'RU-PSK';

    #[Name('Rjazanskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Ryazanskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Rjazanskaja_oblast = 'RU-RYA';

    #[Name('Rostovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Rostovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Rostovskaja_oblast = 'RU-ROS';

    #[Name('Sahalinskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Sakhalinskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Sahalinskaja_oblast = 'RU-SAK';

    #[Name('Samarskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Samarskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Samarskaja_oblast = 'RU-SAM';

    #[Name('Saratovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Saratovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Saratovskaja_oblast = 'RU-SAR';

    #[Name('Smolenskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Smolenskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Smolenskaja_oblast = 'RU-SMO';

    #[Name('Sverdlovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Sverdlovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Sverdlovskaja_oblast = 'RU-SVE';

    #[Name('Tambovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Tambovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Tambovskaja_oblast = 'RU-TAM';

    #[Name('Tjumenskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Tyumenskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Tjumenskaja_oblast = 'RU-TYU';

    #[Name('Tomskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Tomskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Tomskaja_oblast = 'RU-TOM';

    #[Name('Tul\'skaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Tul\'skaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Tul_skaja_oblast = 'RU-TUL';

    #[Name('Tverskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Tverskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Tverskaja_oblast = 'RU-TVE';

    #[Name('Ul\'janovskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Ul\'yanovskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Ul_janovskaja_oblast = 'RU-ULY';

    #[Name('Vladimirskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Vladimirskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Vladimirskaja_oblast = 'RU-VLA';

    #[Name('Volgogradskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Volgogradskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Volgogradskaja_oblast = 'RU-VGG';

    #[Name('Vologodskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Vologodskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_region_Vologodskaja_oblast = 'RU-VLG';

    #[Name('Voronezhskaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Voronežskaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_administrative_region_Voronezhskaya_oblast = 'RU-VOR';

    #[Name('Altajskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Altayskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Altajskij_kraj = 'RU-ALT';

    #[Name('Habarovskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Khabarovskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Habarovskij_kraj = 'RU-KHA';

    #[Name('Kamchatskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Kamčatskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_administrative_territory_Kamchatskiy_kray = 'RU-KAM';

    #[Name('Krasnodarskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Krasnodarskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Krasnodarskij_kraj = 'RU-KDA';

    #[Name('Krasnojarskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Krasnoyarskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Krasnojarskij_kraj = 'RU-KYA';

    #[Name('Permskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Permskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Permskij_kraj = 'RU-PER';

    #[Name('Primorskij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Primorskiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Primorskij_kraj = 'RU-PRI';

    #[Name('Stavropol\'skij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Stavropol\'skiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Stavropol_skij_kraj = 'RU-STA';

    #[Name('Zabajkal\'skij kraj', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Zabaykal\'skiy kray', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_administrative_territory_Zabajkal_skij_kraj = 'RU-ZAB';

    #[Name('Moskva', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Moskva', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_autonomous_city_Moskva = 'RU-MOW';

    #[Name('Sankt-Peterburg', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Sankt-Peterburg', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_autonomous_city_Sankt_Peterburg = 'RU-SPE';

    #[Name('Chukotskiy avtonomnyy okrug', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Čukotskij avtonomnyj okrug', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_autonomous_district_Chukotskiy_avtonomnyy_okrug = 'RU-CHU';

    #[Name('Hanty-Mansijskij avtonomnyj okrug', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', 'Jugra')]
    #[Name('Khanty-Mansiyskiy avtonomnyy okrug', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', 'Yugra')]
    case Russia_autonomous_district_Hanty_Mansijskij_avtonomnyj_okrug = 'RU-KHM';

    #[Name('Jamalo-Neneckij avtonomnyj okrug', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Yamalo-Nenetskiy avtonomnyy okrug', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_autonomous_district_Jamalo_Neneckij_avtonomnyj_okrug = 'RU-YAN';

    #[Name('Neneckij avtonomnyj okrug', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Nenetskiy avtonomnyy okrug', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_autonomous_district_Neneckij_avtonomnyj_okrug = 'RU-NEN';

    #[Name('Evrejskaja avtonomnaja oblast\'', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Yevreyskaya avtonomnaya oblast\'', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_autonomous_region_Evrejskaja_avtonomnaja_oblast = 'RU-YEV';

    #[Name('Adygeja, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Adygeya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Adygeja_Respublika = 'RU-AD';

    #[Name('Altaj, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Altay, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Altaj_Respublika = 'RU-AL';

    #[Name('Bashkortostan, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Baškortostan, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Bashkortostan_Respublika = 'RU-BA';

    #[Name('Burjatija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Buryatiya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Burjatija_Respublika = 'RU-BU';

    #[Name('Chechenskaya Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Čečenskaja Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Chechenskaya_Respublika = 'RU-CE';

    #[Name('Chuvashskaya Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Čuvašskaja Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Chuvashskaya_Respublika = 'RU-CU';

    #[Name('Dagestan, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Dagestan, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Dagestan_Respublika = 'RU-DA';

    #[Name('Hakasija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Khakasiya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Hakasija_Respublika = 'RU-KK';

    #[Name('Ingushetiya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Ingušetija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Ingushetiya_Respublika = 'RU-IN';

    #[Name('Kabardino-Balkarskaja Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kabardino-Balkarskaya Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Kabardino_Balkarskaja_Respublika = 'RU-KB';

    #[Name('Kalmykija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kalmykiya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Kalmykija_Respublika = 'RU-KL';

    #[Name('Karachayevo-Cherkesskaya Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Karačaevo-Čerkesskaja Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Karachayevo_Cherkesskaya_Respublika = 'RU-KC';

    #[Name('Karelija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Kareliya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Karelija_Respublika = 'RU-KR';

    #[Name('Komi, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Komi, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Komi_Respublika = 'RU-KO';

    #[Name('Marij Èl, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Mariy El, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Marij_El_Respublika = 'RU-ME';

    #[Name('Mordovija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Mordoviya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Mordovija_Respublika = 'RU-MO';

    #[Name('Saha, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', 'Jakutija')]
    #[Name('Sakha, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', 'Yakutiya')]
    case Russia_republic_Saha_Respublika = 'RU-SA';

    #[Name('Severnaja Osetija, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', 'Alanija [Respublika Severnaja Osetija-Alanija]')]
    #[Name('Severnaya Osetiya, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', 'Alaniya [Respublika Severnaya Osetiya Alaniya]')]
    case Russia_republic_Severnaja_Osetija_Respublika = 'RU-SE';

    #[Name('Tatarstan, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    #[Name('Tatarstan, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    case Russia_republic_Tatarstan_Respublika = 'RU-TA';

    #[Name('Tyva, Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', 'Tuva')]
    #[Name('Tyva, Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', 'Tuva')]
    case Russia_republic_Tyva_Respublika = 'RU-TY';

    #[Name('Udmurtskaja Respublika', [LanguageAlpha2::Russian], 'GOST 1983 = UN V/18 1987', null)]
    #[Name('Udmurtskaya Respublika', [LanguageAlpha2::Russian], 'BGN/PCGN 1947', null)]
    case Russia_republic_Udmurtskaja_Respublika = 'RU-UD';

    #[Name('City of Kigali', [LanguageAlpha2::English], null, null)]
    #[Name('Umujyi wa Kigali', [LanguageAlpha2::Kinyarwanda], null, null)]
    #[Name('Ville de Kigali', [LanguageAlpha2::French], null, null)]
    case Rwanda_city_City_of_Kigali = 'RW-01';

    #[Name('Amajyaruguru', [LanguageAlpha2::Kinyarwanda], null, null)]
    #[Name('Nord', [LanguageAlpha2::French], null, null)]
    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Rwanda_province_Amajyaruguru = 'RW-03';

    #[Name('Amajyepfo', [LanguageAlpha2::Kinyarwanda], null, null)]
    #[Name('Southern', [LanguageAlpha2::English], null, null)]
    #[Name('Sud', [LanguageAlpha2::French], null, null)]
    case Rwanda_province_Amajyepfo = 'RW-05';

    #[Name('Eastern', [LanguageAlpha2::English], null, null)]
    #[Name('Est', [LanguageAlpha2::French], null, null)]
    #[Name('Iburasirazuba', [LanguageAlpha2::Kinyarwanda], null, null)]
    case Rwanda_province_Eastern = 'RW-02';

    #[Name('Iburengerazuba', [LanguageAlpha2::Kinyarwanda], null, null)]
    #[Name('Ouest', [LanguageAlpha2::French], null, null)]
    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Rwanda_province_Iburengerazuba = 'RW-04';

    #[Name('A\'ana', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_A_ana = 'WS-AA';

    #[Name('Aiga-i-le-Tai', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Aiga_i_le_Tai = 'WS-AL';

    #[Name('Atua', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Atua = 'WS-AT';

    #[Name('Fa\'asaleleaga', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Fa_asaleleaga = 'WS-FA';

    #[Name('Gaga\'emauga', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Gaga_emauga = 'WS-GE';

    #[Name('Gagaifomauga', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Gagaifomauga = 'WS-GI';

    #[Name('Palauli', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Palauli = 'WS-PA';

    #[Name('Satupa\'itea', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Satupa_itea = 'WS-SA';

    #[Name('Tuamasaga', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Tuamasaga = 'WS-TU';

    #[Name('Va\'a-o-Fonoti', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Va_a_o_Fonoti = 'WS-VF';

    #[Name('Vaisigano', [LanguageAlpha2::Samoan, LanguageAlpha2::English], null, null)]
    case Samoa_district_Vaisigano = 'WS-VS';

    #[Name('Acquaviva', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Acquaviva = 'SM-01';

    #[Name('Borgo Maggiore', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Borgo_Maggiore = 'SM-06';

    #[Name('Chiesanuova', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Chiesanuova = 'SM-02';

    #[Name('Città di San Marino', [LanguageAlpha2::Italian], null, 'San Marino')]
    case San_Marino_municipality_Citta_di_San_Marino = 'SM-07';

    #[Name('Domagnano', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Domagnano = 'SM-03';

    #[Name('Faetano', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Faetano = 'SM-04';

    #[Name('Fiorentino', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Fiorentino = 'SM-05';

    #[Name('Montegiardino', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Montegiardino = 'SM-08';

    #[Name('Serravalle', [LanguageAlpha2::Italian], null, null)]
    case San_Marino_municipality_Serravalle = 'SM-09';

    #[Name('Príncipe', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_autonomous_region_Principe = 'ST-P';

    #[Name('Água Grande', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_district_Agua_Grande = 'ST-01';

    #[Name('Cantagalo', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_district_Cantagalo = 'ST-02';

    #[Name('Caué', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_district_Caue = 'ST-03';

    #[Name('Lembá', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_district_Lemba = 'ST-04';

    #[Name('Lobata', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_district_Lobata = 'ST-05';

    #[Name('Mé-Zóchi', [LanguageAlpha2::Portuguese], null, null)]
    case Sao_Tome_Principe_district_Me_Zochi = 'ST-06';

    #[Name('Al Bāḩah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Al_Bahah = 'SA-11';

    #[Name('Al Ḩudūd ash Shamālīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Al_Hudud_ash_Shamaliyah = 'SA-08';

    #[Name('Al Jawf', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Al_Jawf = 'SA-12';

    #[Name('Al Madīnah al Munawwarah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Al_Madinah_al_Munawwarah = 'SA-03';

    #[Name('Al Qaşīm', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Al_Qasim = 'SA-05';

    #[Name('Ar Riyāḑ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Ar_Riyad = 'SA-01';

    #[Name('Ash Sharqīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Ash_Sharqiyah = 'SA-04';

    #[Name('\'Asīr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Asir = 'SA-14';

    #[Name('Ḩā\'il', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Ha_il = 'SA-06';

    #[Name('Jāzān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Jazan = 'SA-09';

    #[Name('Makkah al Mukarramah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Makkah_al_Mukarramah = 'SA-02';

    #[Name('Najrān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Najran = 'SA-10';

    #[Name('Tabūk', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Saudi_Arabia_region_Tabuk = 'SA-07';

    #[Name('Dakar', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Dakar = 'SN-DK';

    #[Name('Diourbel', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Diourbel = 'SN-DB';

    #[Name('Fatick', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Fatick = 'SN-FK';

    #[Name('Kaffrine', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Kaffrine = 'SN-KA';

    #[Name('Kaolack', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Kaolack = 'SN-KL';

    #[Name('Kédougou', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Kedougou = 'SN-KE';

    #[Name('Kolda', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Kolda = 'SN-KD';

    #[Name('Louga', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Louga = 'SN-LG';

    #[Name('Matam', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Matam = 'SN-MT';

    #[Name('Saint-Louis', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Saint_Louis = 'SN-SL';

    #[Name('Sédhiou', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Sedhiou = 'SN-SE';

    #[Name('Tambacounda', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Tambacounda = 'SN-TC';

    #[Name('Thiès', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Thies = 'SN-TH';

    #[Name('Ziguinchor', [LanguageAlpha2::French], null, null)]
    case Senegal_region_Ziguinchor = 'SN-ZG';

    #[Name('Kosovo-Metohija', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_autonomous_province_Kosovo_Metohija = 'RS-KM';

    #[Name('Vojvodina', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_autonomous_province_Vojvodina = 'RS-VO';

    #[Name('Beograd', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_city_Beograd = 'RS-00';

    #[Name('Borski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Borski_okrug = 'RS-14';

    #[Name('Braničevski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Branicevski_okrug = 'RS-11';

    #[Name('Jablanički okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Jablanicki_okrug = 'RS-23';

    #[Name('Južnobački okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Juznobacki_okrug = 'RS-06';

    #[Name('Južnobanatski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Juznobanatski_okrug = 'RS-04';

    #[Name('Kolubarski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Kolubarski_okrug = 'RS-09';

    #[Name('Kosovski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Kosovski_okrug = 'RS-25';

    #[Name('Kosovsko-Mitrovački okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Kosovsko_Mitrovacki_okrug = 'RS-28';

    #[Name('Kosovsko-Pomoravski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Kosovsko_Pomoravski_okrug = 'RS-29';

    #[Name('Mačvanski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Macvanski_okrug = 'RS-08';

    #[Name('Moravički okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Moravicki_okrug = 'RS-17';

    #[Name('Nišavski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Nisavski_okrug = 'RS-20';

    #[Name('Pčinjski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Pcinjski_okrug = 'RS-24';

    #[Name('Pećki okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Pecki_okrug = 'RS-26';

    #[Name('Pirotski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Pirotski_okrug = 'RS-22';

    #[Name('Podunavski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Podunavski_okrug = 'RS-10';

    #[Name('Pomoravski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Pomoravski_okrug = 'RS-13';

    #[Name('Prizrenski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Prizrenski_okrug = 'RS-27';

    #[Name('Rasinski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Rasinski_okrug = 'RS-19';

    #[Name('Raški okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Raski_okrug = 'RS-18';

    #[Name('Severnobački okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Severnobacki_okrug = 'RS-01';

    #[Name('Severnobanatski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Severnobanatski_okrug = 'RS-03';

    #[Name('Srednjebanatski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Srednjebanatski_okrug = 'RS-02';

    #[Name('Sremski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Sremski_okrug = 'RS-07';

    #[Name('Šumadijski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Sumadijski_okrug = 'RS-12';

    #[Name('Toplički okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Toplicki_okrug = 'RS-21';

    #[Name('Zaječarski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Zajecarski_okrug = 'RS-15';

    #[Name('Zapadnobački okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Zapadnobacki_okrug = 'RS-05';

    #[Name('Zlatiborski okrug', [LanguageAlpha2::Serbian], 'UN III/11 1977', null)]
    case Serbia_district_Zlatiborski_okrug = 'RS-16';

    #[Name('Ans Bwalo', [], null, null)]
    #[Name('Anse Boileau', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Ans_Bwalo = 'SC-02';

    #[Name('Ans Etwal', [], null, null)]
    #[Name('Anse Etoile', [LanguageAlpha2::English], null, null)]
    #[Name('Anse Étoile', [LanguageAlpha2::French], null, null)]
    case Seychelles_district_Ans_Etwal = 'SC-03';

    #[Name('Ans Royal', [], null, null)]
    #[Name('Anse Royale', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Ans_Royal = 'SC-05';

    #[Name('Ans o Pen', [], null, null)]
    #[Name('Anse aux Pins', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Ans_o_Pen = 'SC-01';

    #[Name('Au Cap', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('O Kap', [], null, null)]
    case Seychelles_district_Au_Cap = 'SC-04';

    #[Name('Baie Lazare', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Be Lazar', [], null, null)]
    case Seychelles_district_Baie_Lazare = 'SC-06';

    #[Name('Baie Sainte Anne', [LanguageAlpha2::English], null, null)]
    #[Name('Baie Sainte-Anne', [LanguageAlpha2::French], null, null)]
    #[Name('Be Sent Ann', [], null, null)]
    case Seychelles_district_Baie_Sainte_Anne = 'SC-07';

    #[Name('Beau Vallon', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Bovalon', [], null, null)]
    case Seychelles_district_Beau_Vallon = 'SC-08';

    #[Name('Bel Air', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Beler', [], null, null)]
    case Seychelles_district_Bel_Air = 'SC-09';

    #[Name('Bel Ombre', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Belonm', [], null, null)]
    case Seychelles_district_Bel_Ombre = 'SC-10';

    #[Name('Cascade', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Kaskad', [], null, null)]
    case Seychelles_district_Cascade = 'SC-11';

    #[Name('English River', [LanguageAlpha2::English], null, null)]
    #[Name('La Rivière Anglaise', [LanguageAlpha2::French], null, null)]
    #[Name('Larivyer Anglez', [], null, null)]
    case Seychelles_district_English_River = 'SC-16';

    #[Name('Glacis', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Glasi', [], null, null)]
    case Seychelles_district_Glacis = 'SC-12';

    #[Name('Grand Ans Mae', [], null, null)]
    #[Name('Grand Anse Mahe', [LanguageAlpha2::English], null, null)]
    #[Name('Grand\'Anse Mahé', [LanguageAlpha2::French], null, null)]
    case Seychelles_district_Grand_Ans_Mae = 'SC-13';

    #[Name('Grand Ans Pralen', [], null, null)]
    #[Name('Grand Anse Praslin', [LanguageAlpha2::English], null, null)]
    #[Name('Grand\'Anse Praslin', [LanguageAlpha2::French], null, null)]
    case Seychelles_district_Grand_Ans_Pralen = 'SC-14';

    #[Name('Ile Perseverance I', [LanguageAlpha2::English], null, null)]
    #[Name('Île Persévérance I', [LanguageAlpha2::French], null, null)]
    case Seychelles_district_Ile_Perseverance_I = 'SC-26';

    #[Name('Ile Perseverance II', [LanguageAlpha2::English], null, null)]
    #[Name('Île Persévérance II', [LanguageAlpha2::French], null, null)]
    case Seychelles_district_Ile_Perseverance_II = 'SC-27';

    #[Name('La Digue', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Ladig', [], null, null)]
    case Seychelles_district_La_Digue = 'SC-15';

    #[Name('Lemamel', [], null, null)]
    #[Name('Les Mamelles', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Lemamel = 'SC-24';

    #[Name('Mon Bikston', [], null, null)]
    #[Name('Mont Buxton', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Mon_Bikston = 'SC-17';

    #[Name('Mon Fleri', [], null, null)]
    #[Name('Mont Fleuri', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Mon_Fleri = 'SC-18';

    #[Name('Plaisance', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    #[Name('Plezans', [], null, null)]
    case Seychelles_district_Plaisance = 'SC-19';

    #[Name('Pointe La Rue', [LanguageAlpha2::French], null, null)]
    #[Name('Pointe Larue', [LanguageAlpha2::English], null, null)]
    #[Name('Pwent Lari', [], null, null)]
    case Seychelles_district_Pointe_La_Rue = 'SC-20';

    #[Name('Porglo', [], null, null)]
    #[Name('Port Glaud', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Porglo = 'SC-21';

    #[Name('Roche Caiman', [LanguageAlpha2::English], null, null)]
    #[Name('Roche Caïman', [LanguageAlpha2::French], null, null)]
    #[Name('Ros Kaiman', [], null, null)]
    case Seychelles_district_Roche_Caiman = 'SC-25';

    #[Name('Saint Louis', [LanguageAlpha2::English], null, null)]
    #[Name('Saint-Louis', [LanguageAlpha2::French], null, null)]
    #[Name('Sen Lwi', [], null, null)]
    case Seychelles_district_Saint_Louis = 'SC-22';

    #[Name('Takamaka', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Seychelles_district_Takamaka = 'SC-23';

    #[Name('Western Area (Freetown)', [LanguageAlpha2::English], null, null)]
    case Sierra_Leone_area_Western_Area_Freetown = 'SL-W';

    #[Name('Eastern', [LanguageAlpha2::English], null, null)]
    case Sierra_Leone_province_Eastern = 'SL-E';

    #[Name('North Western', [LanguageAlpha2::English], null, null)]
    case Sierra_Leone_province_North_Western = 'SL-NW';

    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Sierra_Leone_province_Northern = 'SL-N';

    #[Name('Southern', [LanguageAlpha2::English], null, null)]
    case Sierra_Leone_province_Southern = 'SL-S';

    #[Name('Central Singapore', [LanguageAlpha2::English], null, null)]
    case Singapore_district_Central_Singapore = 'SG-01';

    #[Name('North East', [LanguageAlpha2::English], null, null)]
    case Singapore_district_North_East = 'SG-02';

    #[Name('North West', [LanguageAlpha2::English], null, null)]
    case Singapore_district_North_West = 'SG-03';

    #[Name('South East', [LanguageAlpha2::English], null, null)]
    case Singapore_district_South_East = 'SG-04';

    #[Name('South West', [LanguageAlpha2::English], null, null)]
    case Singapore_district_South_West = 'SG-05';

    #[Name('Banskobystrický kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Banskobystricky_kraj = 'SK-BC';

    #[Name('Bratislavský kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Bratislavsky_kraj = 'SK-BL';

    #[Name('Košický kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Kosicky_kraj = 'SK-KI';

    #[Name('Nitriansky kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Nitriansky_kraj = 'SK-NI';

    #[Name('Prešovský kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Presovsky_kraj = 'SK-PV';

    #[Name('Trenčiansky kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Trenciansky_kraj = 'SK-TC';

    #[Name('Trnavský kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Trnavsky_kraj = 'SK-TA';

    #[Name('Žilinský kraj', [LanguageAlpha2::Slovak], null, null)]
    case Slovakia_region_Zilinsky_kraj = 'SK-ZI';

    #[Name('Ajdovščina', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ajdovscina = 'SI-001';

    #[Name('Ankaran', [LanguageAlpha2::Slovenian], null, 'Ancarano')]
    case Slovenia_municipality_Ankaran = 'SI-213';

    #[Name('Apače', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Apace = 'SI-195';

    #[Name('Beltinci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Beltinci = 'SI-002';

    #[Name('Benedikt', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Benedikt = 'SI-148';

    #[Name('Bistrica ob Sotli', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Bistrica_ob_Sotli = 'SI-149';

    #[Name('Bled', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Bled = 'SI-003';

    #[Name('Bloke', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Bloke = 'SI-150';

    #[Name('Bohinj', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Bohinj = 'SI-004';

    #[Name('Borovnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Borovnica = 'SI-005';

    #[Name('Bovec', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Bovec = 'SI-006';

    #[Name('Braslovče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Braslovce = 'SI-151';

    #[Name('Brda', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Brda = 'SI-007';

    #[Name('Brežice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Brezice = 'SI-009';

    #[Name('Brezovica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Brezovica = 'SI-008';

    #[Name('Cankova', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Cankova = 'SI-152';

    #[Name('Cerklje na Gorenjskem', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Cerklje_na_Gorenjskem = 'SI-012';

    #[Name('Cerknica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Cerknica = 'SI-013';

    #[Name('Cerkno', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Cerkno = 'SI-014';

    #[Name('Cerkvenjak', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Cerkvenjak = 'SI-153';

    #[Name('Cirkulane', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Cirkulane = 'SI-196';

    #[Name('Črenšovci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Crensovci = 'SI-015';

    #[Name('Črna na Koroškem', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Crna_na_Koroskem = 'SI-016';

    #[Name('Črnomelj', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Crnomelj = 'SI-017';

    #[Name('Destrnik', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Destrnik = 'SI-018';

    #[Name('Divača', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Divaca = 'SI-019';

    #[Name('Dobje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dobje = 'SI-154';

    #[Name('Dobrepolje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dobrepolje = 'SI-020';

    #[Name('Dobrna', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dobrna = 'SI-155';

    #[Name('Dobrova-Polhov Gradec', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dobrova_Polhov_Gradec = 'SI-021';

    #[Name('Dobrovnik', [LanguageAlpha2::Slovenian], null, 'Dobronak')]
    case Slovenia_municipality_Dobrovnik = 'SI-156';

    #[Name('Dol pri Ljubljani', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dol_pri_Ljubljani = 'SI-022';

    #[Name('Dolenjske Toplice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dolenjske_Toplice = 'SI-157';

    #[Name('Domžale', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Domzale = 'SI-023';

    #[Name('Dornava', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dornava = 'SI-024';

    #[Name('Dravograd', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Dravograd = 'SI-025';

    #[Name('Duplek', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Duplek = 'SI-026';

    #[Name('Gorenja vas-Poljane', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Gorenja_vas_Poljane = 'SI-027';

    #[Name('Gorišnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Gorisnica = 'SI-028';

    #[Name('Gorje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Gorje = 'SI-207';

    #[Name('Gornja Radgona', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Gornja_Radgona = 'SI-029';

    #[Name('Gornji Grad', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Gornji_Grad = 'SI-030';

    #[Name('Gornji Petrovci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Gornji_Petrovci = 'SI-031';

    #[Name('Grad', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Grad = 'SI-158';

    #[Name('Grosuplje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Grosuplje = 'SI-032';

    #[Name('Hajdina', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Hajdina = 'SI-159';

    #[Name('Hoče-Slivnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Hoce_Slivnica = 'SI-160';

    #[Name('Hodoš', [LanguageAlpha2::Slovenian], null, 'Hodos')]
    case Slovenia_municipality_Hodos = 'SI-161';

    #[Name('Horjul', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Horjul = 'SI-162';

    #[Name('Hrastnik', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Hrastnik = 'SI-034';

    #[Name('Hrpelje-Kozina', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Hrpelje_Kozina = 'SI-035';

    #[Name('Idrija', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Idrija = 'SI-036';

    #[Name('Ig', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ig = 'SI-037';

    #[Name('Ilirska Bistrica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ilirska_Bistrica = 'SI-038';

    #[Name('Ivančna Gorica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ivancna_Gorica = 'SI-039';

    #[Name('Izola', [LanguageAlpha2::Slovenian], null, 'Isola')]
    case Slovenia_municipality_Izola = 'SI-040';

    #[Name('Jesenice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Jesenice = 'SI-041';

    #[Name('Jezersko', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Jezersko = 'SI-163';

    #[Name('Juršinci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Jursinci = 'SI-042';

    #[Name('Kamnik', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kamnik = 'SI-043';

    #[Name('Kanal ob Soči', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kanal_ob_Soci = 'SI-044';

    #[Name('Kidričevo', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kidricevo = 'SI-045';

    #[Name('Kobarid', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kobarid = 'SI-046';

    #[Name('Kobilje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kobilje = 'SI-047';

    #[Name('Kočevje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kocevje = 'SI-048';

    #[Name('Komen', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Komen = 'SI-049';

    #[Name('Komenda', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Komenda = 'SI-164';

    #[Name('Kostanjevica na Krki', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kostanjevica_na_Krki = 'SI-197';

    #[Name('Kostel', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kostel = 'SI-165';

    #[Name('Kozje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kozje = 'SI-051';

    #[Name('Kranjska Gora', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kranjska_Gora = 'SI-053';

    #[Name('Križevci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Krizevci = 'SI-166';

    #[Name('Kungota', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kungota = 'SI-055';

    #[Name('Kuzma', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Kuzma = 'SI-056';

    #[Name('Laško', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Lasko = 'SI-057';

    #[Name('Lenart', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Lenart = 'SI-058';

    #[Name('Lendava', [LanguageAlpha2::Slovenian], null, 'Lendva')]
    case Slovenia_municipality_Lendava = 'SI-059';

    #[Name('Litija', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Litija = 'SI-060';

    #[Name('Ljubno', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ljubno = 'SI-062';

    #[Name('Ljutomer', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ljutomer = 'SI-063';

    #[Name('Log-Dragomer', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Log_Dragomer = 'SI-208';

    #[Name('Logatec', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Logatec = 'SI-064';

    #[Name('Loška dolina', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Loska_dolina = 'SI-065';

    #[Name('Loški Potok', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Loski_Potok = 'SI-066';

    #[Name('Lovrenc na Pohorju', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Lovrenc_na_Pohorju = 'SI-167';

    #[Name('Luče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Luce = 'SI-067';

    #[Name('Lukovica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Lukovica = 'SI-068';

    #[Name('Majšperk', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Majsperk = 'SI-069';

    #[Name('Makole', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Makole = 'SI-198';

    #[Name('Markovci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Markovci = 'SI-168';

    #[Name('Medvode', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Medvode = 'SI-071';

    #[Name('Mengeš', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Menges = 'SI-072';

    #[Name('Metlika', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Metlika = 'SI-073';

    #[Name('Mežica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Mezica = 'SI-074';

    #[Name('Miklavž na Dravskem polju', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Miklavz_na_Dravskem_polju = 'SI-169';

    #[Name('Miren-Kostanjevica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Miren_Kostanjevica = 'SI-075';

    #[Name('Mirna', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Mirna = 'SI-212';

    #[Name('Mirna Peč', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Mirna_Pec = 'SI-170';

    #[Name('Mislinja', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Mislinja = 'SI-076';

    #[Name('Mokronog-Trebelno', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Mokronog_Trebelno = 'SI-199';

    #[Name('Moravče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Moravce = 'SI-077';

    #[Name('Moravske Toplice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Moravske_Toplice = 'SI-078';

    #[Name('Mozirje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Mozirje = 'SI-079';

    #[Name('Muta', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Muta = 'SI-081';

    #[Name('Naklo', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Naklo = 'SI-082';

    #[Name('Nazarje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Nazarje = 'SI-083';

    #[Name('Odranci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Odranci = 'SI-086';

    #[Name('Oplotnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Oplotnica = 'SI-171';

    #[Name('Ormož', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ormoz = 'SI-087';

    #[Name('Osilnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Osilnica = 'SI-088';

    #[Name('Pesnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Pesnica = 'SI-089';

    #[Name('Piran', [LanguageAlpha2::Slovenian], null, 'Pirano')]
    case Slovenia_municipality_Piran = 'SI-090';

    #[Name('Pivka', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Pivka = 'SI-091';

    #[Name('Podčetrtek', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Podcetrtek = 'SI-092';

    #[Name('Podlehnik', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Podlehnik = 'SI-172';

    #[Name('Podvelka', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Podvelka = 'SI-093';

    #[Name('Poljčane', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Poljcane = 'SI-200';

    #[Name('Polzela', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Polzela = 'SI-173';

    #[Name('Postojna', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Postojna = 'SI-094';

    #[Name('Prebold', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Prebold = 'SI-174';

    #[Name('Preddvor', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Preddvor = 'SI-095';

    #[Name('Prevalje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Prevalje = 'SI-175';

    #[Name('Puconci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Puconci = 'SI-097';

    #[Name('Rače-Fram', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Race_Fram = 'SI-098';

    #[Name('Radeče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Radece = 'SI-099';

    #[Name('Radenci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Radenci = 'SI-100';

    #[Name('Radlje ob Dravi', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Radlje_ob_Dravi = 'SI-101';

    #[Name('Radovljica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Radovljica = 'SI-102';

    #[Name('Ravne na Koroškem', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ravne_na_Koroskem = 'SI-103';

    #[Name('Razkrižje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Razkrizje = 'SI-176';

    #[Name('Rečica ob Savinji', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Recica_ob_Savinji = 'SI-209';

    #[Name('Renče-Vogrsko', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Rence_Vogrsko = 'SI-201';

    #[Name('Ribnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ribnica = 'SI-104';

    #[Name('Ribnica na Pohorju', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ribnica_na_Pohorju = 'SI-177';

    #[Name('Rogaška Slatina', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Rogaska_Slatina = 'SI-106';

    #[Name('Rogašovci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Rogasovci = 'SI-105';

    #[Name('Rogatec', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Rogatec = 'SI-107';

    #[Name('Ruše', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ruse = 'SI-108';

    #[Name('Šalovci', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Salovci = 'SI-033';

    #[Name('Selnica ob Dravi', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Selnica_ob_Dravi = 'SI-178';

    #[Name('Semič', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Semic = 'SI-109';

    #[Name('Šempeter-Vrtojba', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sempeter_Vrtojba = 'SI-183';

    #[Name('Šenčur', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sencur = 'SI-117';

    #[Name('Šentilj', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sentilj = 'SI-118';

    #[Name('Šentjernej', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sentjernej = 'SI-119';

    #[Name('Šentjur', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sentjur = 'SI-120';

    #[Name('Šentrupert', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sentrupert = 'SI-211';

    #[Name('Sevnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sevnica = 'SI-110';

    #[Name('Sežana', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sezana = 'SI-111';

    #[Name('Škocjan', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Skocjan = 'SI-121';

    #[Name('Škofja Loka', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Skofja_Loka = 'SI-122';

    #[Name('Škofljica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Skofljica = 'SI-123';

    #[Name('Slovenska Bistrica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Slovenska_Bistrica = 'SI-113';

    #[Name('Slovenske Konjice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Slovenske_Konjice = 'SI-114';

    #[Name('Šmarje pri Jelšah', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Smarje_pri_Jelsah = 'SI-124';

    #[Name('Šmarješke Toplice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Smarjeske_Toplice = 'SI-206';

    #[Name('Šmartno ob Paki', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Smartno_ob_Paki = 'SI-125';

    #[Name('Šmartno pri Litiji', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Smartno_pri_Litiji = 'SI-194';

    #[Name('Sodražica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sodrazica = 'SI-179';

    #[Name('Solčava', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Solcava = 'SI-180';

    #[Name('Šoštanj', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sostanj = 'SI-126';

    #[Name('Središče ob Dravi', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sredisce_ob_Dravi = 'SI-202';

    #[Name('Starše', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Starse = 'SI-115';

    #[Name('Štore', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Store = 'SI-127';

    #[Name('Straža', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Straza = 'SI-203';

    #[Name('Sveta Ana', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sveta_Ana = 'SI-181';

    #[Name('Sveta Trojica v Slovenskih goricah', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sveta_Trojica_v_Slovenskih_goricah = 'SI-204';

    #[Name('Sveti Andraž v Slovenskih goricah', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sveti_Andraz_v_Slovenskih_goricah = 'SI-182';

    #[Name('Sveti Jurij ob Ščavnici', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sveti_Jurij_ob_Scavnici = 'SI-116';

    #[Name('Sveti Jurij v Slovenskih goricah', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sveti_Jurij_v_Slovenskih_goricah = 'SI-210';

    #[Name('Sveti Tomaž', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Sveti_Tomaz = 'SI-205';

    #[Name('Tabor', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Tabor = 'SI-184';

    #[Name('Tišina', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Tisina = 'SI-010';

    #[Name('Tolmin', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Tolmin = 'SI-128';

    #[Name('Trbovlje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Trbovlje = 'SI-129';

    #[Name('Trebnje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Trebnje = 'SI-130';

    #[Name('Trnovska Vas', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Trnovska_Vas = 'SI-185';

    #[Name('Tržič', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Trzic = 'SI-131';

    #[Name('Trzin', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Trzin = 'SI-186';

    #[Name('Turnišče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Turnisce = 'SI-132';

    #[Name('Velika Polana', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Velika_Polana = 'SI-187';

    #[Name('Velike Lašče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Velike_Lasce = 'SI-134';

    #[Name('Veržej', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Verzej = 'SI-188';

    #[Name('Videm', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Videm = 'SI-135';

    #[Name('Vipava', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vipava = 'SI-136';

    #[Name('Vitanje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vitanje = 'SI-137';

    #[Name('Vodice', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vodice = 'SI-138';

    #[Name('Vojnik', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vojnik = 'SI-139';

    #[Name('Vransko', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vransko = 'SI-189';

    #[Name('Vrhnika', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vrhnika = 'SI-140';

    #[Name('Vuzenica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Vuzenica = 'SI-141';

    #[Name('Zagorje ob Savi', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zagorje_ob_Savi = 'SI-142';

    #[Name('Žalec', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zalec = 'SI-190';

    #[Name('Zavrč', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zavrc = 'SI-143';

    #[Name('Železniki', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zelezniki = 'SI-146';

    #[Name('Žetale', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zetale = 'SI-191';

    #[Name('Žiri', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Ziri = 'SI-147';

    #[Name('Žirovnica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zirovnica = 'SI-192';

    #[Name('Zreče', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zrece = 'SI-144';

    #[Name('Žužemberk', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_municipality_Zuzemberk = 'SI-193';

    #[Name('Celje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Celje = 'SI-011';

    #[Name('Koper', [LanguageAlpha2::Slovenian], null, 'Capodistria')]
    case Slovenia_urban_municipality_Koper = 'SI-050';

    #[Name('Kranj', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Kranj = 'SI-052';

    #[Name('Krško', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Krsko = 'SI-054';

    #[Name('Ljubljana', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Ljubljana = 'SI-061';

    #[Name('Maribor', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Maribor = 'SI-070';

    #[Name('Murska Sobota', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Murska_Sobota = 'SI-080';

    #[Name('Nova Gorica', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Nova_Gorica = 'SI-084';

    #[Name('Novo Mesto', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Novo_Mesto = 'SI-085';

    #[Name('Ptuj', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Ptuj = 'SI-096';

    #[Name('Slovenj Gradec', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Slovenj_Gradec = 'SI-112';

    #[Name('Velenje', [LanguageAlpha2::Slovenian], null, null)]
    case Slovenia_urban_municipality_Velenje = 'SI-133';

    #[Name('Capital Territory (Honiara)', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_capital_territory_Capital_Territory_Honiara = 'SB-CT';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Central = 'SB-CE';

    #[Name('Choiseul', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Choiseul = 'SB-CH';

    #[Name('Guadalcanal', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Guadalcanal = 'SB-GU';

    #[Name('Isabel', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Isabel = 'SB-IS';

    #[Name('Makira-Ulawa', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Makira_Ulawa = 'SB-MK';

    #[Name('Malaita', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Malaita = 'SB-ML';

    #[Name('Rennell and Bellona', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Rennell_and_Bellona = 'SB-RB';

    #[Name('Temotu', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Temotu = 'SB-TE';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Solomon_Islands_province_Western = 'SB-WE';

    #[Name('Awdal', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Awdal = 'SO-AW';

    #[Name('Bakool', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Bakool = 'SO-BK';

    #[Name('Banaadir', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Banaadir = 'SO-BN';

    #[Name('Bari', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Bari = 'SO-BR';

    #[Name('Bay', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Bay = 'SO-BY';

    #[Name('Galguduud', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Galguduud = 'SO-GA';

    #[Name('Gedo', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Gedo = 'SO-GE';

    #[Name('Hiiraan', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Hiiraan = 'SO-HI';

    #[Name('Jubbada Dhexe', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Jubbada_Dhexe = 'SO-JD';

    #[Name('Jubbada Hoose', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Jubbada_Hoose = 'SO-JH';

    #[Name('Mudug', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Mudug = 'SO-MU';

    #[Name('Nugaal', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Nugaal = 'SO-NU';

    #[Name('Sanaag', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Sanaag = 'SO-SA';

    #[Name('Shabeellaha Dhexe', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Shabeellaha_Dhexe = 'SO-SD';

    #[Name('Shabeellaha Hoose', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Shabeellaha_Hoose = 'SO-SH';

    #[Name('Sool', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Sool = 'SO-SO';

    #[Name('Togdheer', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Togdheer = 'SO-TO';

    #[Name('Woqooyi Galbeed', [LanguageAlpha2::Somali], null, null)]
    case Somalia_region_Woqooyi_Galbeed = 'SO-WO';

    #[Name('Bokone Bophirima', [LanguageAlpha2::Tswana], null, null)]
    #[Name('Lebowa Bodikela', [], null, null)]
    #[Name('Leboya (le) Bophirima', [LanguageAlpha2::Sotho_Southern], null, null)]
    #[Name('Mntla-Ntshona', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('N\'walungu-Vupeladyambu', [LanguageAlpha2::Tsonga], null, null)]
    #[Name('Noordwes', [LanguageAlpha2::Afrikaans], null, null)]
    #[Name('North-West', [LanguageAlpha2::English], null, null)]
    #[Name('Nyakatho-Ntshonalanga', [LanguageAlpha2::Zulu], null, null)]
    #[Name('iTlhagwini-Tjhingalanga', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Bokone_Bophirima = 'ZA-NW';

    #[Name('Eastern Cape', [LanguageAlpha2::English], null, null)]
    #[Name('Kapa Bohlabela', [], null, null)]
    #[Name('Kapa Botjhabela', [LanguageAlpha2::Sotho_Southern], null, null)]
    #[Name('Kapa Botlhaba', [LanguageAlpha2::Tswana], null, null)]
    #[Name('Kapa Vhubvaḓuvha', [LanguageAlpha2::Venda], null, null)]
    #[Name('Kapa-Vuxa', [LanguageAlpha2::Tsonga], null, null)]
    #[Name('Mpuma-Koloni', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('Mpumalanga-Kapa', [LanguageAlpha2::Zulu], null, 'Mpumalanga-Koloni')]
    #[Name('Oos-Kaap', [LanguageAlpha2::Afrikaans], null, null)]
    #[Name('iPumalanga-Kapa', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Eastern_Cape = 'ZA-EC';

    #[Name('Foreisetata', [LanguageAlpha2::Tswana], null, null)]
    #[Name('Free State', [LanguageAlpha2::Tsonga, LanguageAlpha2::English], null, null)]
    #[Name('Freistata', [], null, null)]
    #[Name('Freistata', [LanguageAlpha2::Sotho_Southern], null, 'Foreisetata')]
    #[Name('Freyistata', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('Fuleyisitata', [LanguageAlpha2::Zulu], null, 'Freyisitata')]
    #[Name('Fureisitata', [LanguageAlpha2::Venda], null, null)]
    #[Name('Vrystaat', [LanguageAlpha2::Afrikaans], null, null)]
    #[Name('iFreyistata', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Foreisetata = 'ZA-FS';

    #[Name('GaZulu-Natala', [], null, null)]
    #[Name('HaZulu-Natal', [LanguageAlpha2::Venda], null, null)]
    #[Name('Hazolo-Natala', [LanguageAlpha2::Sotho_Southern], null, null)]
    #[Name('KwaZulu-Natal', [LanguageAlpha2::Tswana, LanguageAlpha2::Afrikaans], null, null)]
    #[Name('KwaZulu-Natala', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('KwaZulu-Natali', [LanguageAlpha2::Zulu, LanguageAlpha2::Swati], null, null)]
    #[Name('Kwazulu-Natal', [LanguageAlpha2::Tsonga, LanguageAlpha2::English], null, null)]
    #[Name('iKwaZulu-Natal', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_GaZulu_Natala = 'ZA-KZN';

    #[Name('Gauteng', [LanguageAlpha2::Zulu, LanguageAlpha2::Venda, LanguageAlpha2::Tsonga, LanguageAlpha2::Tswana, LanguageAlpha2::Swati, LanguageAlpha2::English, LanguageAlpha2::Afrikaans], null, null)]
    #[Name('Kgauteng', [LanguageAlpha2::Sotho_Southern], null, null)]
    #[Name('Rhawuti', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('iGauteng', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Gauteng = 'ZA-GP';

    #[Name('Kapa Bodikela', [], null, null)]
    #[Name('Kapa Bophirima', [LanguageAlpha2::Tswana], null, null)]
    #[Name('Kapa Bophirimela', [LanguageAlpha2::Sotho_Southern], null, null)]
    #[Name('Kapa Vhukovhela', [LanguageAlpha2::Venda], null, null)]
    #[Name('Kapa-Vupeladyambu', [LanguageAlpha2::Tsonga], null, null)]
    #[Name('Ntshona-Koloni', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('Ntshonalanga-Kapa', [LanguageAlpha2::Zulu], null, 'Ntshonalanga-Koloni')]
    #[Name('Wes-Kaap', [LanguageAlpha2::Afrikaans], null, null)]
    #[Name('Western Cape', [LanguageAlpha2::English], null, null)]
    #[Name('iTjhingalanga-Kapa', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Kapa_Bodikela = 'ZA-WC';

    #[Name('Kapa Bokone', [LanguageAlpha2::Tswana], null, 'Kapa Leboa')]
    #[Name('Kapa Devhula', [LanguageAlpha2::Venda], null, null)]
    #[Name('Kapa Leboya', [LanguageAlpha2::Sotho_Southern], null, null)]
    #[Name('Kapa-N\'walungu', [LanguageAlpha2::Tsonga], null, null)]
    #[Name('Mntla-Koloni', [LanguageAlpha2::Xhosa], null, null)]
    #[Name('Noord-Kaap', [LanguageAlpha2::Afrikaans], null, null)]
    #[Name('Northern Cape', [LanguageAlpha2::English], null, null)]
    #[Name('Nyakatho-Kapa', [LanguageAlpha2::Zulu], null, 'Nyakatho-Koloni')]
    #[Name('iTlhagwini-Kapa', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Kapa_Bokone = 'ZA-NC';

    #[Name('Limpopo', [LanguageAlpha2::Zulu, LanguageAlpha2::Xhosa, LanguageAlpha2::Tsonga, LanguageAlpha2::Tswana, LanguageAlpha2::Swati, LanguageAlpha2::Sotho_Southern, LanguageAlpha2::Ndebele_South_South_Ndebele, LanguageAlpha2::English, LanguageAlpha2::Afrikaans], null, null)]
    #[Name('Vhembe', [LanguageAlpha2::Venda], null, null)]
    case South_Africa_province_Limpopo = 'ZA-LP';

    #[Name('Mpumalanga', [LanguageAlpha2::Zulu, LanguageAlpha2::Xhosa, LanguageAlpha2::Venda, LanguageAlpha2::Tsonga, LanguageAlpha2::Tswana, LanguageAlpha2::Swati, LanguageAlpha2::Sotho_Southern, LanguageAlpha2::English, LanguageAlpha2::Afrikaans], null, null)]
    #[Name('iMpumalanga', [LanguageAlpha2::Ndebele_South_South_Ndebele], null, null)]
    case South_Africa_province_Mpumalanga = 'ZA-MP';

    #[Name('Busan-gwangyeoksi', [LanguageAlpha2::Korean], 'National 2000', 'Busan')]
    case South_Korea_metropolitan_city_Busan_gwangyeoksi = 'KR-26';

    #[Name('Daegu-gwangyeoksi', [LanguageAlpha2::Korean], 'National 2000', 'Daegu')]
    case South_Korea_metropolitan_city_Daegu_gwangyeoksi = 'KR-27';

    #[Name('Daejeon-gwangyeoksi', [LanguageAlpha2::Korean], 'National 2000', 'Daejeon')]
    case South_Korea_metropolitan_city_Daejeon_gwangyeoksi = 'KR-30';

    #[Name('Gwangju-gwangyeoksi', [LanguageAlpha2::Korean], 'National 2000', 'Gwangju')]
    case South_Korea_metropolitan_city_Gwangju_gwangyeoksi = 'KR-29';

    #[Name('Incheon-gwangyeoksi', [LanguageAlpha2::Korean], 'National 2000', 'Incheon')]
    case South_Korea_metropolitan_city_Incheon_gwangyeoksi = 'KR-28';

    #[Name('Ulsan-gwangyeoksi', [LanguageAlpha2::Korean], 'National 2000', 'Ulsan')]
    case South_Korea_metropolitan_city_Ulsan_gwangyeoksi = 'KR-31';

    #[Name('Chungcheongbuk-do', [LanguageAlpha2::Korean], 'National 2000', 'Chungbuk')]
    case South_Korea_province_Chungcheongbuk_do = 'KR-43';

    #[Name('Chungcheongnam-do', [LanguageAlpha2::Korean], 'National 2000', 'Chungnam')]
    case South_Korea_province_Chungcheongnam_do = 'KR-44';

    #[Name('Gyeonggi-do', [LanguageAlpha2::Korean], 'National 2000', 'Gyeonggi')]
    case South_Korea_province_Gyeonggi_do = 'KR-41';

    #[Name('Gyeongsangbuk-do', [LanguageAlpha2::Korean], 'National 2000', 'Gyeongbuk')]
    case South_Korea_province_Gyeongsangbuk_do = 'KR-47';

    #[Name('Gyeongsangnam-do', [LanguageAlpha2::Korean], 'National 2000', 'Gyeongnam')]
    case South_Korea_province_Gyeongsangnam_do = 'KR-48';

    #[Name('Jeollabuk-do', [LanguageAlpha2::Korean], 'National 2000', 'Jeonbuk')]
    case South_Korea_province_Jeollabuk_do = 'KR-45';

    #[Name('Jeollanam-do', [LanguageAlpha2::Korean], 'National 2000', 'Jeonnam')]
    case South_Korea_province_Jeollanam_do = 'KR-46';

    #[Name('Seoul-teukbyeolsi', [LanguageAlpha2::Korean], 'National 2000', 'Seoul')]
    case South_Korea_special_city_Seoul_teukbyeolsi = 'KR-11';

    #[Name('Sejong', [LanguageAlpha2::Korean], 'National 2000', null)]
    case South_Korea_special_self_governing_city_Sejong = 'KR-50';

    #[Name('Gangwon-teukbyeoljachido', [LanguageAlpha2::Korean], 'National 2000', 'Gangwon')]
    case South_Korea_special_self_governing_province_Gangwon_teukbyeoljachido = 'KR-42';

    #[Name('Jeju-teukbyeoljachido', [LanguageAlpha2::Korean], 'National 2000', 'Jeju')]
    case South_Korea_special_self_governing_province_Jeju_teukbyeoljachido = 'KR-49';

    #[Name('Central Equatoria', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Central_Equatoria = 'SS-EC';

    #[Name('Eastern Equatoria', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Eastern_Equatoria = 'SS-EE';

    #[Name('Jonglei', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Jonglei = 'SS-JG';

    #[Name('Lakes', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Lakes = 'SS-LK';

    #[Name('Northern Bahr el Ghazal', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Northern_Bahr_el_Ghazal = 'SS-BN';

    #[Name('Unity', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Unity = 'SS-UY';

    #[Name('Upper Nile', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Upper_Nile = 'SS-NU';

    #[Name('Warrap', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Warrap = 'SS-WR';

    #[Name('Western Bahr el Ghazal', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Western_Bahr_el_Ghazal = 'SS-BW';

    #[Name('Western Equatoria', [LanguageAlpha2::English], null, null)]
    case South_Sudan_state_Western_Equatoria = 'SS-EW';

    #[Name('Ceuta', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_city_in_North_Africa_Ceuta = 'ES-CE';

    #[Name('Melilla', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_city_in_North_Africa_Melilla = 'ES-ML';

    #[Name('Andalucía', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Andalucia = 'ES-AN';

    #[Name('Aragón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Aragon = 'ES-AR';

    #[Name('Asturias, Principado de', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Asturias_Principado_de = 'ES-AS';

    #[Name('Canarias', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Canarias = 'ES-CN';

    #[Name('Cantabria', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Cantabria = 'ES-CB';

    #[Name('Castilla-La Mancha', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Castilla_La_Mancha = 'ES-CM';

    #[Name('Castilla y León', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Castilla_y_Leon = 'ES-CL';

    #[Name('Catalunya [Cataluña]', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_autonomous_community_Catalunya_Cataluna = 'ES-CT';

    #[Name('Euskal Herria', [LanguageAlpha2::Basque], null, null)]
    #[Name('País Vasco', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Euskal_Herria = 'ES-PV';

    #[Name('Extremadura', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Extremadura = 'ES-EX';

    #[Name('Galicia [Galicia]', [LanguageAlpha2::Galician], null, null)]
    case Spain_autonomous_community_Galicia_Galicia = 'ES-GA';

    #[Name('Illes Balears [Islas Baleares]', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_autonomous_community_Illes_Balears_Islas_Baleares = 'ES-IB';

    #[Name('La Rioja', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_La_Rioja = 'ES-RI';

    #[Name('Madrid, Comunidad de', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Madrid_Comunidad_de = 'ES-MD';

    #[Name('Murcia, Región de', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Murcia_Region_de = 'ES-MC';

    #[Name('Nafarroako Foru Komunitatea*', [LanguageAlpha2::Basque], null, null)]
    #[Name('Navarra, Comunidad Foral de', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_autonomous_community_Nafarroako_Foru_Komunitatea = 'ES-NC';

    #[Name('Valenciana, Comunidad', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('Valenciana, Comunitat*', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_autonomous_community_Valenciana_Comunidad = 'ES-VC';

    #[Name('A Coruña [La Coruña]', [LanguageAlpha2::Galician], null, null)]
    case Spain_province_A_Coruna_La_Coruna = 'ES-C';

    #[Name('Alacant*', [LanguageAlpha2::Catalan_Valencian], null, null)]
    #[Name('Alicante', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Alacant = 'ES-A';

    #[Name('Albacete', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Albacete = 'ES-AB';

    #[Name('Almería', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Almeria = 'ES-AL';

    #[Name('Araba*', [LanguageAlpha2::Basque], null, null)]
    #[Name('Álava', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Araba = 'ES-VI';

    #[Name('Asturias', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Asturias = 'ES-O';

    #[Name('Ávila', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Avila = 'ES-AV';

    #[Name('Badajoz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Badajoz = 'ES-BA';

    #[Name('Barcelona [Barcelona]', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Barcelona_Barcelona = 'ES-B';

    #[Name('Bizkaia', [LanguageAlpha2::Basque], null, null)]
    case Spain_province_Bizkaia = 'ES-BI';

    #[Name('Burgos', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Burgos = 'ES-BU';

    #[Name('Cáceres', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Caceres = 'ES-CC';

    #[Name('Cádiz', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Cadiz = 'ES-CA';

    #[Name('Cantabria', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Cantabria = 'ES-S';

    #[Name('Castelló*', [LanguageAlpha2::Catalan_Valencian], null, null)]
    #[Name('Castellón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Castello = 'ES-CS';

    #[Name('Ciudad Real', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Ciudad_Real = 'ES-CR';

    #[Name('Córdoba', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Cordoba = 'ES-CO';

    #[Name('Cuenca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Cuenca = 'ES-CU';

    #[Name('Gipuzkoa', [LanguageAlpha2::Basque], null, null)]
    case Spain_province_Gipuzkoa = 'ES-SS';

    #[Name('Girona [Gerona]', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_province_Girona_Gerona = 'ES-GI';

    #[Name('Granada', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Granada = 'ES-GR';

    #[Name('Guadalajara', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Guadalajara = 'ES-GU';

    #[Name('Huelva', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Huelva = 'ES-H';

    #[Name('Huesca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Huesca = 'ES-HU';

    #[Name('Illes Balears [Islas Baleares]', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_province_Illes_Balears_Islas_Baleares = 'ES-PM';

    #[Name('Jaén', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Jaen = 'ES-J';

    #[Name('La Rioja', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_La_Rioja = 'ES-LO';

    #[Name('Las Palmas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Las_Palmas = 'ES-GC';

    #[Name('León', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Leon = 'ES-LE';

    #[Name('Lleida [Lérida]', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_province_Lleida_Lerida = 'ES-L';

    #[Name('Lugo [Lugo]', [LanguageAlpha2::Galician], null, null)]
    case Spain_province_Lugo_Lugo = 'ES-LU';

    #[Name('Madrid', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Madrid = 'ES-M';

    #[Name('Málaga', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Malaga = 'ES-MA';

    #[Name('Murcia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Murcia = 'ES-MU';

    #[Name('Nafarroa*', [LanguageAlpha2::Basque], null, null)]
    #[Name('Navarra', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Nafarroa = 'ES-NA';

    #[Name('Ourense [Orense]', [LanguageAlpha2::Galician], null, null)]
    case Spain_province_Ourense_Orense = 'ES-OR';

    #[Name('Palencia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Palencia = 'ES-P';

    #[Name('Pontevedra [Pontevedra]', [LanguageAlpha2::Galician], null, null)]
    case Spain_province_Pontevedra_Pontevedra = 'ES-PO';

    #[Name('Salamanca', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Salamanca = 'ES-SA';

    #[Name('Santa Cruz de Tenerife', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Santa_Cruz_de_Tenerife = 'ES-TF';

    #[Name('Segovia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Segovia = 'ES-SG';

    #[Name('Sevilla', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Sevilla = 'ES-SE';

    #[Name('Soria', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Soria = 'ES-SO';

    #[Name('Tarragona [Tarragona]', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_province_Tarragona_Tarragona = 'ES-T';

    #[Name('Teruel', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Teruel = 'ES-TE';

    #[Name('Toledo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Toledo = 'ES-TO';

    #[Name('Valencia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    #[Name('València*', [LanguageAlpha2::Catalan_Valencian], null, null)]
    case Spain_province_Valencia = 'ES-V';

    #[Name('Valladolid', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Valladolid = 'ES-VA';

    #[Name('Zamora', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Zamora = 'ES-ZA';

    #[Name('Zaragoza', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Spain_province_Zaragoza = 'ES-Z';

    #[Name('Ampāntōṭṭai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Hambantota', [LanguageAlpha2::English], null, null)]
    #[Name('Hambantŏṭa', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Ampantottai = 'LK-33';

    #[Name('Ampara', [LanguageAlpha2::English], null, null)]
    #[Name('Ampāra', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Ampāṟai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Ampara = 'LK-52';

    #[Name('Anuradhapura', [LanguageAlpha2::English], null, null)]
    #[Name('Anurādhapura', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Anurātapuram', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Anuradhapura = 'LK-71';

    #[Name('Badulla', [LanguageAlpha2::English], null, null)]
    #[Name('Badulla', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Patuḷai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Badulla = 'LK-81';

    #[Name('Batticaloa', [LanguageAlpha2::English], null, null)]
    #[Name('Maḍakalapuva', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Maṭṭakkaḷappu', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Batticaloa = 'LK-51';

    #[Name('Colombo', [LanguageAlpha2::English], null, null)]
    #[Name('Kŏl̮umpu', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Kŏḷamba', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Colombo = 'LK-11';

    #[Name('Galle', [LanguageAlpha2::English], null, null)]
    #[Name('Gālla', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Kāli', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Galle = 'LK-31';

    #[Name('Gampaha', [LanguageAlpha2::English], null, null)]
    #[Name('Gampaha', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Kampahā', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Gampaha = 'LK-12';

    #[Name('Irattiṉapuri', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Ratnapura', [LanguageAlpha2::English], null, null)]
    #[Name('Ratnapura', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Irattinapuri = 'LK-91';

    #[Name('Jaffna', [LanguageAlpha2::English], null, null)]
    #[Name('Yāl̮ppāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Yāpanaya', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Jaffna = 'LK-41';

    #[Name('Kalutara', [LanguageAlpha2::English], null, null)]
    #[Name('Kaḷutara', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Kaḷuttuṟai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Kalutara = 'LK-13';

    #[Name('Kandy', [LanguageAlpha2::English], null, null)]
    #[Name('Kaṇṭi', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Mahanuvara', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Kandy = 'LK-21';

    #[Name('Kegalla', [LanguageAlpha2::English], null, null)]
    #[Name('Kekālai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Kægalla', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Kegalla = 'LK-92';

    #[Name('Kilinochchi', [LanguageAlpha2::English], null, null)]
    #[Name('Kilinŏchchi', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Kiḷinochchi', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Kilinochchi = 'LK-42';

    #[Name('Kurunegala', [LanguageAlpha2::English], null, null)]
    #[Name('Kurunākal', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Kuruṇægala', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Kurunegala = 'LK-61';

    #[Name('Mannar', [LanguageAlpha2::English], null, null)]
    #[Name('Mannārama', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Maṉṉār', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Mannar = 'LK-43';

    #[Name('Matale', [LanguageAlpha2::English], null, null)]
    #[Name('Mātale', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Māttaḷai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Matale = 'LK-22';

    #[Name('Matara', [LanguageAlpha2::English], null, null)]
    #[Name('Mātara', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Māttaṛai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Matara = 'LK-32';

    #[Name('Monaragala', [LanguageAlpha2::English], null, null)]
    #[Name('Mŏṇarāgala', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Mŏṉarākalai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Monaragala = 'LK-82';

    #[Name('Mulativ', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Mullaittivu', [LanguageAlpha2::English], null, null)]
    #[Name('Mullaittīvu', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Mulativ = 'LK-45';

    #[Name('Nuvara Ĕliya', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Nuvarĕliyā', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Nuwara Eliya', [LanguageAlpha2::English], null, null)]
    case Sri_Lanka_district_Nuvara_Eliya = 'LK-23';

    #[Name('Polonnaruwa', [LanguageAlpha2::English], null, null)]
    #[Name('Pŏlaṉṉaṛuvai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Pŏḷŏnnaruva', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_district_Polonnaruwa = 'LK-72';

    #[Name('Puttalam', [LanguageAlpha2::English], null, null)]
    #[Name('Puttalama', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Puttaḷam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Puttalam = 'LK-62';

    #[Name('Tirukŏṇamalai', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Trikuṇāmalaya', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Trincomalee', [LanguageAlpha2::English], null, null)]
    case Sri_Lanka_district_Tirukonamalai = 'LK-53';

    #[Name('Vavuniya', [LanguageAlpha2::English], null, null)]
    #[Name('Vavuniyāva', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Vavuṉiyā', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_district_Vavuniya = 'LK-44';

    #[Name('Basnāhira paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Mel mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Western Province', [LanguageAlpha2::English], null, null)]
    case Sri_Lanka_province_Basnahira_palata = 'LK-1';

    #[Name('Central Province', [LanguageAlpha2::English], null, null)]
    #[Name('Madhyama paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Mattiya mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_province_Central_Province = 'LK-2';

    #[Name('Chappirakamuva mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Sabaragamuva paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Sabaragamuwa Province', [LanguageAlpha2::English], null, null)]
    case Sri_Lanka_province_Chappirakamuva_makanam = 'LK-9';

    #[Name('Dakuṇu paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Southern Province', [LanguageAlpha2::English], null, null)]
    #[Name('Tĕṉ mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_province_Dakunu_palata = 'LK-3';

    #[Name('Eastern Province', [LanguageAlpha2::English], null, null)]
    #[Name('Kil̮akku mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    #[Name('Næ̆gĕnahira paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    case Sri_Lanka_province_Eastern_Province = 'LK-5';

    #[Name('North Central Province', [LanguageAlpha2::English], null, null)]
    #[Name('Uturumæ̆da paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Vaṭamattiya mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_province_North_Central_Province = 'LK-7';

    #[Name('North Western Province', [LanguageAlpha2::English], null, null)]
    #[Name('Vayamba paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Vaṭamel mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_province_North_Western_Province = 'LK-6';

    #[Name('Northern Province', [LanguageAlpha2::English], null, null)]
    #[Name('Uturu paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Vaṭakku mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_province_Northern_Province = 'LK-4';

    #[Name('Uva Province', [LanguageAlpha2::English], null, null)]
    #[Name('Ūva paḷāta', [LanguageAlpha2::Sinhala_Sinhalese], 'Provisional UN Draft 1972', null)]
    #[Name('Ūvā mākāṇam', [LanguageAlpha2::Tamil], 'UN II/11 1972', null)]
    case Sri_Lanka_province_Uva_Province = 'LK-8';

    #[Name('Ascension', [LanguageAlpha2::English], null, null)]
    case St_Helena_geographical_entity_Ascension = 'SH-AC';

    #[Name('Saint Helena', [LanguageAlpha2::English], null, null)]
    case St_Helena_geographical_entity_Saint_Helena = 'SH-HL';

    #[Name('Tristan da Cunha', [LanguageAlpha2::English], null, null)]
    case St_Helena_geographical_entity_Tristan_da_Cunha = 'SH-TA';

    #[Name('Christ Church Nichola Town', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Christ_Church_Nichola_Town = 'KN-01';

    #[Name('Saint Anne Sandy Point', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Anne_Sandy_Point = 'KN-02';

    #[Name('Saint George Basseterre', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_George_Basseterre = 'KN-03';

    #[Name('Saint George Gingerland', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_George_Gingerland = 'KN-04';

    #[Name('Saint James Windward', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_James_Windward = 'KN-05';

    #[Name('Saint John Capisterre', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_John_Capisterre = 'KN-06';

    #[Name('Saint John Figtree', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_John_Figtree = 'KN-07';

    #[Name('Saint Mary Cayon', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Mary_Cayon = 'KN-08';

    #[Name('Saint Paul Capisterre', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Paul_Capisterre = 'KN-09';

    #[Name('Saint Paul Charlestown', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Paul_Charlestown = 'KN-10';

    #[Name('Saint Peter Basseterre', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Peter_Basseterre = 'KN-11';

    #[Name('Saint Thomas Lowland', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Thomas_Lowland = 'KN-12';

    #[Name('Saint Thomas Middle Island', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Saint_Thomas_Middle_Island = 'KN-13';

    #[Name('Trinity Palmetto Point', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_parish_Trinity_Palmetto_Point = 'KN-15';

    #[Name('Nevis', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_state_Nevis = 'KN-N';

    #[Name('Saint Kitts', [LanguageAlpha2::English], null, null)]
    case St_Kitts_Nevis_state_Saint_Kitts = 'KN-K';

    #[Name('Anse la Raye', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Anse_la_Raye = 'LC-01';

    #[Name('Canaries', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Canaries = 'LC-12';

    #[Name('Castries', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Castries = 'LC-02';

    #[Name('Choiseul', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Choiseul = 'LC-03';

    #[Name('Dennery', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Dennery = 'LC-05';

    #[Name('Gros Islet', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Gros_Islet = 'LC-06';

    #[Name('Laborie', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Laborie = 'LC-07';

    #[Name('Micoud', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Micoud = 'LC-08';

    #[Name('Soufrière', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Soufriere = 'LC-10';

    #[Name('Vieux Fort', [LanguageAlpha2::English], null, null)]
    case St_Lucia_district_Vieux_Fort = 'LC-11';

    #[Name('Charlotte', [LanguageAlpha2::English], null, null)]
    case St_Vincent_Grenadines_parish_Charlotte = 'VC-01';

    #[Name('Grenadines', [LanguageAlpha2::English], null, null)]
    case St_Vincent_Grenadines_parish_Grenadines = 'VC-06';

    #[Name('Saint Andrew', [LanguageAlpha2::English], null, null)]
    case St_Vincent_Grenadines_parish_Saint_Andrew = 'VC-02';

    #[Name('Saint David', [LanguageAlpha2::English], null, null)]
    case St_Vincent_Grenadines_parish_Saint_David = 'VC-03';

    #[Name('Saint George', [LanguageAlpha2::English], null, null)]
    case St_Vincent_Grenadines_parish_Saint_George = 'VC-04';

    #[Name('Saint Patrick', [LanguageAlpha2::English], null, null)]
    case St_Vincent_Grenadines_parish_Saint_Patrick = 'VC-05';

    #[Name('Al Baḩr al Aḩmar', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Red Sea', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Al_Bahr_al_Ahmar = 'SD-RS';

    #[Name('Al Jazīrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Gezira', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Al_Jazirah = 'SD-GZ';

    #[Name('Al Kharţūm', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Khartoum', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Al_Khartum = 'SD-KH';

    #[Name('Al Qaḑārif', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Gedaref', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Al_Qadarif = 'SD-GD';

    #[Name('An Nīl al Abyaḑ', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('White Nile', [LanguageAlpha2::English], null, null)]
    case Sudan_state_An_Nil_al_Abyad = 'SD-NW';

    #[Name('An Nīl al Azraq', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Blue Nile', [LanguageAlpha2::English], null, null)]
    case Sudan_state_An_Nil_al_Azraq = 'SD-NB';

    #[Name('Ash Shamālīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Ash_Shamaliyah = 'SD-NO';

    #[Name('Central Darfur', [LanguageAlpha2::English], null, 'Zalingei')]
    #[Name('Wasaţ Dārfūr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Zālinjay')]
    case Sudan_state_Central_Darfur = 'SD-DC';

    #[Name('East Darfur', [LanguageAlpha2::English], null, null)]
    #[Name('Sharq Dārfūr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Sudan_state_East_Darfur = 'SD-DE';

    #[Name('Gharb Dārfūr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('West Darfur', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Gharb_Darfur = 'SD-DW';

    #[Name('Gharb Kurdufān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('West Kordofan', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Gharb_Kurdufan = 'SD-GK';

    #[Name('Janūb Dārfūr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('South Darfur', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Janub_Darfur = 'SD-DS';

    #[Name('Janūb Kurdufān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('South Kordofan', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Janub_Kurdufan = 'SD-KS';

    #[Name('Kassala', [LanguageAlpha2::English], null, null)]
    #[Name('Kassalā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Sudan_state_Kassala = 'SD-KA';

    #[Name('Nahr an Nīl', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    #[Name('River Nile', [LanguageAlpha2::English], null, null)]
    case Sudan_state_Nahr_an_Nil = 'SD-NR';

    #[Name('North Darfur', [LanguageAlpha2::English], null, null)]
    #[Name('Shamāl Dārfūr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Sudan_state_North_Darfur = 'SD-DN';

    #[Name('North Kordofan', [LanguageAlpha2::English], null, null)]
    #[Name('Shamāl Kurdufān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Sudan_state_North_Kordofan = 'SD-KN';

    #[Name('Sennar', [LanguageAlpha2::English], null, null)]
    #[Name('Sinnār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Sudan_state_Sennar = 'SD-SI';

    #[Name('Brokopondo', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Brokopondo = 'SR-BR';

    #[Name('Commewijne', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Commewijne = 'SR-CM';

    #[Name('Coronie', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Coronie = 'SR-CR';

    #[Name('Marowijne', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Marowijne = 'SR-MA';

    #[Name('Nickerie', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Nickerie = 'SR-NI';

    #[Name('Para', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Para = 'SR-PR';

    #[Name('Paramaribo', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Paramaribo = 'SR-PM';

    #[Name('Saramacca', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Saramacca = 'SR-SA';

    #[Name('Sipaliwini', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Sipaliwini = 'SR-SI';

    #[Name('Wanica', [LanguageAlpha2::Dutch_Flemish], null, null)]
    case Suriname_district_Wanica = 'SR-WA';

    #[Name('Blekinge län [SE-10]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Blekinge_lan_SE_10 = 'SE-K';

    #[Name('Dalarnas län [SE-20]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Dalarnas_lan_SE_20 = 'SE-W';

    #[Name('Gävleborgs län [SE-21]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Gavleborgs_lan_SE_21 = 'SE-X';

    #[Name('Gotlands län [SE-09]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Gotlands_lan_SE_09 = 'SE-I';

    #[Name('Hallands län [SE-13]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Hallands_lan_SE_13 = 'SE-N';

    #[Name('Jämtlands län [SE-23]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Jamtlands_lan_SE_23 = 'SE-Z';

    #[Name('Jönköpings län [SE-06]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Jonkopings_lan_SE_06 = 'SE-F';

    #[Name('Kalmar län [SE-08]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Kalmar_lan_SE_08 = 'SE-H';

    #[Name('Kronobergs län [SE-07]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Kronobergs_lan_SE_07 = 'SE-G';

    #[Name('Norrbottens län [SE-25]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Norrbottens_lan_SE_25 = 'SE-BD';

    #[Name('Örebro län [SE-18]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Orebro_lan_SE_18 = 'SE-T';

    #[Name('Östergötlands län [SE-05]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Ostergotlands_lan_SE_05 = 'SE-E';

    #[Name('Skåne län [SE-12]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Skane_lan_SE_12 = 'SE-M';

    #[Name('Södermanlands län [SE-04]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Sodermanlands_lan_SE_04 = 'SE-D';

    #[Name('Stockholms län [SE-01]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Stockholms_lan_SE_01 = 'SE-AB';

    #[Name('Uppsala län [SE-03]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Uppsala_lan_SE_03 = 'SE-C';

    #[Name('Värmlands län [SE-17]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Varmlands_lan_SE_17 = 'SE-S';

    #[Name('Västerbottens län [SE-24]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Vasterbottens_lan_SE_24 = 'SE-AC';

    #[Name('Västernorrlands län [SE-22]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Vasternorrlands_lan_SE_22 = 'SE-Y';

    #[Name('Västmanlands län [SE-19]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Vastmanlands_lan_SE_19 = 'SE-U';

    #[Name('Västra Götalands län [SE-14]', [LanguageAlpha2::Swedish], null, null)]
    case Sweden_county_Vastra_Gotalands_lan_SE_14 = 'SE-O';

    #[Name('Aargau', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Aargau = 'CH-AG';

    #[Name('Appenzell Ausserrhoden', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Appenzell_Ausserrhoden = 'CH-AR';

    #[Name('Appenzell Innerrhoden', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Appenzell_Innerrhoden = 'CH-AI';

    #[Name('Basel-Landschaft', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Basel_Landschaft = 'CH-BL';

    #[Name('Basel-Stadt', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Basel_Stadt = 'CH-BS';

    #[Name('Bern', [LanguageAlpha2::German], null, null)]
    #[Name('Berne', [LanguageAlpha2::French], null, null)]
    case Switzerland_canton_Bern = 'CH-BE';

    #[Name('Freiburg', [LanguageAlpha2::German], null, null)]
    #[Name('Fribourg', [LanguageAlpha2::French], null, null)]
    case Switzerland_canton_Freiburg = 'CH-FR';

    #[Name('Genève', [LanguageAlpha2::French], null, null)]
    case Switzerland_canton_Geneve = 'CH-GE';

    #[Name('Glarus', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Glarus = 'CH-GL';

    #[Name('Graubünden', [LanguageAlpha2::German], null, null)]
    #[Name('Grigioni', [LanguageAlpha2::Italian], null, null)]
    #[Name('Grischun', [LanguageAlpha2::Romansh], null, null)]
    case Switzerland_canton_Graubunden = 'CH-GR';

    #[Name('Jura', [LanguageAlpha2::French], null, null)]
    case Switzerland_canton_Jura = 'CH-JU';

    #[Name('Luzern', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Luzern = 'CH-LU';

    #[Name('Neuchâtel', [LanguageAlpha2::French], null, null)]
    case Switzerland_canton_Neuchatel = 'CH-NE';

    #[Name('Nidwalden', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Nidwalden = 'CH-NW';

    #[Name('Obwalden', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Obwalden = 'CH-OW';

    #[Name('Sankt Gallen', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Sankt_Gallen = 'CH-SG';

    #[Name('Schaffhausen', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Schaffhausen = 'CH-SH';

    #[Name('Schwyz', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Schwyz = 'CH-SZ';

    #[Name('Solothurn', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Solothurn = 'CH-SO';

    #[Name('Thurgau', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Thurgau = 'CH-TG';

    #[Name('Ticino', [LanguageAlpha2::Italian], null, null)]
    case Switzerland_canton_Ticino = 'CH-TI';

    #[Name('Uri', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Uri = 'CH-UR';

    #[Name('Valais', [LanguageAlpha2::French], null, null)]
    #[Name('Wallis', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Valais = 'CH-VS';

    #[Name('Vaud', [LanguageAlpha2::French], null, null)]
    case Switzerland_canton_Vaud = 'CH-VD';

    #[Name('Zug', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Zug = 'CH-ZG';

    #[Name('Zürich', [LanguageAlpha2::German], null, null)]
    case Switzerland_canton_Zurich = 'CH-ZH';

    #[Name('Al Ḩasakah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Al_Hasakah = 'SY-HA';

    #[Name('Al Lādhiqīyah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Al_Ladhiqiyah = 'SY-LA';

    #[Name('Al Qunayţirah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Al_Qunaytirah = 'SY-QU';

    #[Name('Ar Raqqah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Ar_Raqqah = 'SY-RA';

    #[Name('As Suwaydā\'', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_As_Suwayda = 'SY-SU';

    #[Name('Dar\'ā', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Dar_a = 'SY-DR';

    #[Name('Dayr az Zawr', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Dayr_az_Zawr = 'SY-DY';

    #[Name('Dimashq', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Dimashq = 'SY-DI';

    #[Name('Ḩalab', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Halab = 'SY-HL';

    #[Name('Ḩamāh', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Hamah = 'SY-HM';

    #[Name('Ḩimş', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Hims = 'SY-HI';

    #[Name('Idlib', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Idlib = 'SY-ID';

    #[Name('Rīf Dimashq', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Rif_Dimashq = 'SY-RD';

    #[Name('Ţarţūs', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Syria_province_Tartus = 'SY-TA';

    #[Name('Chiayi', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_city_Chiayi = 'TW-CYI';

    #[Name('Hsinchu', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_city_Hsinchu = 'TW-HSZ';

    #[Name('Keelung', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_city_Keelung = 'TW-KEE';

    #[Name('Changhua', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Changhua = 'TW-CHA';

    #[Name('Chiayi', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Chiayi = 'TW-CYQ';

    #[Name('Hsinchu', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Hsinchu = 'TW-HSQ';

    #[Name('Hualien', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Hualien = 'TW-HUA';

    #[Name('Kinmen', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Kinmen = 'TW-KIN';

    #[Name('Lienchiang', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Lienchiang = 'TW-LIE';

    #[Name('Miaoli', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Miaoli = 'TW-MIA';

    #[Name('Nantou', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Nantou = 'TW-NAN';

    #[Name('Penghu', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Penghu = 'TW-PEN';

    #[Name('Pingtung', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Pingtung = 'TW-PIF';

    #[Name('Taitung', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Taitung = 'TW-TTT';

    #[Name('Yilan', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Yilan = 'TW-ILA';

    #[Name('Yunlin', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_county_Yunlin = 'TW-YUN';

    #[Name('Kaohsiung', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_special_municipality_Kaohsiung = 'TW-KHH';

    #[Name('New Taipei', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_special_municipality_New_Taipei = 'TW-NWT';

    #[Name('Taichung', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_special_municipality_Taichung = 'TW-TXG';

    #[Name('Tainan', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_special_municipality_Tainan = 'TW-TNN';

    #[Name('Taipei', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_special_municipality_Taipei = 'TW-TPE';

    #[Name('Taoyuan', [LanguageAlpha2::Chinese], 'conventional names', null)]
    case Taiwan_special_municipality_Taoyuan = 'TW-TAO';

    #[Name('Kŭhistoni Badakhshon', [LanguageAlpha2::Tajik], 'BGN/PCGN 1994', null)]
    case Tajikistan_autonomous_region_Kuhistoni_Badakhshon = 'TJ-GB';

    #[Name('Dushanbe', [LanguageAlpha2::Tajik], 'BGN/PCGN 1994', null)]
    case Tajikistan_capital_territory_Dushanbe = 'TJ-DU';

    #[Name('nohiyahoi tobei jumhurí', [LanguageAlpha2::Tajik], 'BGN/PCGN 1994', null)]
    case Tajikistan_districts_under_republic_administration_nohiyahoi_tobei_jumhuri = 'TJ-RA';

    #[Name('Khatlon', [LanguageAlpha2::Tajik], 'BGN/PCGN 1994', null)]
    case Tajikistan_region_Khatlon = 'TJ-KT';

    #[Name('Sughd', [LanguageAlpha2::Tajik], 'BGN/PCGN 1994', null)]
    case Tajikistan_region_Sughd = 'TJ-SU';

    #[Name('Arusha', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Arusha = 'TZ-01';

    #[Name('Coast', [LanguageAlpha2::English], null, null)]
    #[Name('Pwani', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Coast = 'TZ-19';

    #[Name('Dar es Salaam', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Dar_es_Salaam = 'TZ-02';

    #[Name('Dodoma', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Dodoma = 'TZ-03';

    #[Name('Geita', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Geita = 'TZ-27';

    #[Name('Iringa', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Iringa = 'TZ-04';

    #[Name('Kagera', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Kagera = 'TZ-05';

    #[Name('Kaskazini Pemba', [LanguageAlpha2::Swahili], null, null)]
    #[Name('Pemba North', [LanguageAlpha2::English], null, null)]
    case Tanzania_region_Kaskazini_Pemba = 'TZ-06';

    #[Name('Kaskazini Unguja', [LanguageAlpha2::Swahili], null, null)]
    #[Name('Zanzibar North', [LanguageAlpha2::English], null, null)]
    case Tanzania_region_Kaskazini_Unguja = 'TZ-07';

    #[Name('Katavi', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Katavi = 'TZ-28';

    #[Name('Kigoma', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Kigoma = 'TZ-08';

    #[Name('Kilimanjaro', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Kilimanjaro = 'TZ-09';

    #[Name('Kusini Pemba', [LanguageAlpha2::Swahili], null, null)]
    #[Name('Pemba South', [LanguageAlpha2::English], null, null)]
    case Tanzania_region_Kusini_Pemba = 'TZ-10';

    #[Name('Kusini Unguja', [LanguageAlpha2::Swahili], null, null)]
    #[Name('Zanzibar South', [LanguageAlpha2::English], null, null)]
    case Tanzania_region_Kusini_Unguja = 'TZ-11';

    #[Name('Lindi', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Lindi = 'TZ-12';

    #[Name('Manyara', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Manyara = 'TZ-26';

    #[Name('Mara', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Mara = 'TZ-13';

    #[Name('Mbeya', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Mbeya = 'TZ-14';

    #[Name('Mjini Magharibi', [LanguageAlpha2::Swahili], null, null)]
    #[Name('Zanzibar West', [LanguageAlpha2::English], null, null)]
    case Tanzania_region_Mjini_Magharibi = 'TZ-15';

    #[Name('Morogoro', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Morogoro = 'TZ-16';

    #[Name('Mtwara', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Mtwara = 'TZ-17';

    #[Name('Mwanza', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Mwanza = 'TZ-18';

    #[Name('Njombe', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Njombe = 'TZ-29';

    #[Name('Rukwa', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Rukwa = 'TZ-20';

    #[Name('Ruvuma', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Ruvuma = 'TZ-21';

    #[Name('Shinyanga', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Shinyanga = 'TZ-22';

    #[Name('Simiyu', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Simiyu = 'TZ-30';

    #[Name('Singida', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Singida = 'TZ-23';

    #[Name('Songwe', [LanguageAlpha2::Swahili, LanguageAlpha2::English], null, null)]
    case Tanzania_region_Songwe = 'TZ-31';

    #[Name('Tabora', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Tabora = 'TZ-24';

    #[Name('Tanga', [LanguageAlpha2::Swahili], null, null)]
    case Tanzania_region_Tanga = 'TZ-25';

    #[Name('Krung Thep Maha Nakhon', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', 'Bangkok')]
    case Thailand_metropolitan_administration_Krung_Thep_Maha_Nakhon = 'TH-10';

    #[Name('Amnat Charoen', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Amnat_Charoen = 'TH-37';

    #[Name('Ang Thong', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Ang_Thong = 'TH-15';

    #[Name('Bueng Kan', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Bueng_Kan = 'TH-38';

    #[Name('Buri Ram', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Buri_Ram = 'TH-31';

    #[Name('Chachoengsao', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chachoengsao = 'TH-24';

    #[Name('Chai Nat', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chai_Nat = 'TH-18';

    #[Name('Chaiyaphum', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chaiyaphum = 'TH-36';

    #[Name('Chanthaburi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chanthaburi = 'TH-22';

    #[Name('Chiang Mai', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chiang_Mai = 'TH-50';

    #[Name('Chiang Rai', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chiang_Rai = 'TH-57';

    #[Name('Chon Buri', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chon_Buri = 'TH-20';

    #[Name('Chumphon', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Chumphon = 'TH-86';

    #[Name('Kalasin', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Kalasin = 'TH-46';

    #[Name('Kamphaeng Phet', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Kamphaeng_Phet = 'TH-62';

    #[Name('Kanchanaburi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Kanchanaburi = 'TH-71';

    #[Name('Khon Kaen', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Khon_Kaen = 'TH-40';

    #[Name('Krabi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Krabi = 'TH-81';

    #[Name('Lampang', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Lampang = 'TH-52';

    #[Name('Lamphun', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Lamphun = 'TH-51';

    #[Name('Loei', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Loei = 'TH-42';

    #[Name('Lop Buri', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Lop_Buri = 'TH-16';

    #[Name('Mae Hong Son', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Mae_Hong_Son = 'TH-58';

    #[Name('Maha Sarakham', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Maha_Sarakham = 'TH-44';

    #[Name('Mukdahan', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Mukdahan = 'TH-49';

    #[Name('Nakhon Nayok', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nakhon_Nayok = 'TH-26';

    #[Name('Nakhon Pathom', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nakhon_Pathom = 'TH-73';

    #[Name('Nakhon Phanom', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nakhon_Phanom = 'TH-48';

    #[Name('Nakhon Ratchasima', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nakhon_Ratchasima = 'TH-30';

    #[Name('Nakhon Sawan', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nakhon_Sawan = 'TH-60';

    #[Name('Nakhon Si Thammarat', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nakhon_Si_Thammarat = 'TH-80';

    #[Name('Nan', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nan = 'TH-55';

    #[Name('Narathiwat', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Narathiwat = 'TH-96';

    #[Name('Nong Bua Lam Phu', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nong_Bua_Lam_Phu = 'TH-39';

    #[Name('Nong Khai', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nong_Khai = 'TH-43';

    #[Name('Nonthaburi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Nonthaburi = 'TH-12';

    #[Name('Pathum Thani', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Pathum_Thani = 'TH-13';

    #[Name('Pattani', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Pattani = 'TH-94';

    #[Name('Phangnga', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phangnga = 'TH-82';

    #[Name('Phatthalung', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phatthalung = 'TH-93';

    #[Name('Phayao', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phayao = 'TH-56';

    #[Name('Phetchabun', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phetchabun = 'TH-67';

    #[Name('Phetchaburi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phetchaburi = 'TH-76';

    #[Name('Phichit', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phichit = 'TH-66';

    #[Name('Phitsanulok', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phitsanulok = 'TH-65';

    #[Name('Phra Nakhon Si Ayutthaya', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phra_Nakhon_Si_Ayutthaya = 'TH-14';

    #[Name('Phrae', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phrae = 'TH-54';

    #[Name('Phuket', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Phuket = 'TH-83';

    #[Name('Prachin Buri', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Prachin_Buri = 'TH-25';

    #[Name('Prachuap Khiri Khan', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Prachuap_Khiri_Khan = 'TH-77';

    #[Name('Ranong', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Ranong = 'TH-85';

    #[Name('Ratchaburi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Ratchaburi = 'TH-70';

    #[Name('Rayong', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Rayong = 'TH-21';

    #[Name('Roi Et', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Roi_Et = 'TH-45';

    #[Name('Sa Kaeo', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Sa_Kaeo = 'TH-27';

    #[Name('Sakon Nakhon', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Sakon_Nakhon = 'TH-47';

    #[Name('Samut Prakan', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Samut_Prakan = 'TH-11';

    #[Name('Samut Sakhon', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Samut_Sakhon = 'TH-74';

    #[Name('Samut Songkhram', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Samut_Songkhram = 'TH-75';

    #[Name('Saraburi', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Saraburi = 'TH-19';

    #[Name('Satun', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Satun = 'TH-91';

    #[Name('Si Sa Ket', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Si_Sa_Ket = 'TH-33';

    #[Name('Sing Buri', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Sing_Buri = 'TH-17';

    #[Name('Songkhla', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Songkhla = 'TH-90';

    #[Name('Sukhothai', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Sukhothai = 'TH-64';

    #[Name('Suphan Buri', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Suphan_Buri = 'TH-72';

    #[Name('Surat Thani', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Surat_Thani = 'TH-84';

    #[Name('Surin', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Surin = 'TH-32';

    #[Name('Tak', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Tak = 'TH-63';

    #[Name('Trang', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Trang = 'TH-92';

    #[Name('Trat', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Trat = 'TH-23';

    #[Name('Ubon Ratchathani', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Ubon_Ratchathani = 'TH-34';

    #[Name('Udon Thani', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Udon_Thani = 'TH-41';

    #[Name('Uthai Thani', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Uthai_Thani = 'TH-61';

    #[Name('Uttaradit', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Uttaradit = 'TH-53';

    #[Name('Yala', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Yala = 'TH-95';

    #[Name('Yasothon', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_province_Yasothon = 'TH-35';

    #[Name('Phatthaya', [LanguageAlpha2::Thai], 'National 2000 = ISO 11940-2:2007 = UN VIII/12 2002', null)]
    case Thailand_special_administrative_city_Phatthaya = 'TH-S';

    #[Name('Aileu', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Aileu = 'TL-AL';

    #[Name('Ainaro', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Ainaru', [], null, null)]
    case Timor_Leste_municipality_Ainaro = 'TL-AN';

    #[Name('Baucau', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Baukau', [], null, null)]
    case Timor_Leste_municipality_Baucau = 'TL-BA';

    #[Name('Bobonaro', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Bobonaru', [], null, null)]
    case Timor_Leste_municipality_Bobonaro = 'TL-BO';

    #[Name('Cova Lima', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Kovalima', [], null, null)]
    case Timor_Leste_municipality_Cova_Lima = 'TL-CO';

    #[Name('Díli', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Dili = 'TL-DI';

    #[Name('Ermera', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Ermera = 'TL-ER';

    #[Name('Lautein', [], null, null)]
    #[Name('Lautém', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Lautein = 'TL-LA';

    #[Name('Likisá', [], null, null)]
    #[Name('Liquiça', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Likisa = 'TL-LI';

    #[Name('Manatuto', [LanguageAlpha2::Portuguese], null, null)]
    #[Name('Manatutu', [], null, null)]
    case Timor_Leste_municipality_Manatuto = 'TL-MT';

    #[Name('Manufahi', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Manufahi = 'TL-MF';

    #[Name('Vikeke', [], null, null)]
    #[Name('Viqueque', [LanguageAlpha2::Portuguese], null, null)]
    case Timor_Leste_municipality_Vikeke = 'TL-VI';

    #[Name('Oekusi-Ambenu', [], null, null)]
    #[Name('Oé-Cusse Ambeno', [LanguageAlpha2::Portuguese], null, 'Oecussi')]
    case Timor_Leste_special_administrative_region_Oekusi_Ambenu = 'TL-OE';

    #[Name('Centrale', [LanguageAlpha2::French], null, null)]
    case Togo_region_Centrale = 'TG-C';

    #[Name('Kara', [LanguageAlpha2::French], null, null)]
    case Togo_region_Kara = 'TG-K';

    #[Name('Maritime (Région)', [LanguageAlpha2::French], null, null)]
    case Togo_region_Maritime_Region = 'TG-M';

    #[Name('Plateaux', [LanguageAlpha2::French], null, null)]
    case Togo_region_Plateaux = 'TG-P';

    #[Name('Savanes', [LanguageAlpha2::French], null, null)]
    case Togo_region_Savanes = 'TG-S';

    #[Name('\'Eua', [LanguageAlpha2::Tonga_Tonga_Islands, LanguageAlpha2::English], null, null)]
    case Tonga_division_Eua = 'TO-01';

    #[Name('Ha\'apai', [LanguageAlpha2::Tonga_Tonga_Islands, LanguageAlpha2::English], null, null)]
    case Tonga_division_Ha_apai = 'TO-02';

    #[Name('Niuas', [LanguageAlpha2::Tonga_Tonga_Islands, LanguageAlpha2::English], null, null)]
    case Tonga_division_Niuas = 'TO-03';

    #[Name('Tongatapu', [LanguageAlpha2::Tonga_Tonga_Islands, LanguageAlpha2::English], null, null)]
    case Tonga_division_Tongatapu = 'TO-04';

    #[Name('Vava\'u', [LanguageAlpha2::Tonga_Tonga_Islands, LanguageAlpha2::English], null, null)]
    case Tonga_division_Vava_u = 'TO-05';

    #[Name('Arima', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_borough_Arima = 'TT-ARI';

    #[Name('Chaguanas', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_borough_Chaguanas = 'TT-CHA';

    #[Name('Point Fortin', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_borough_Point_Fortin = 'TT-PTF';

    #[Name('Port of Spain', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_city_Port_of_Spain = 'TT-POS';

    #[Name('San Fernando', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_city_San_Fernando = 'TT-SFO';

    #[Name('Couva-Tabaquite-Talparo', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Couva_Tabaquite_Talparo = 'TT-CTT';

    #[Name('Diego Martin', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Diego_Martin = 'TT-DMN';

    #[Name('Mayaro-Rio Claro', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Mayaro_Rio_Claro = 'TT-MRC';

    #[Name('Penal-Debe', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Penal_Debe = 'TT-PED';

    #[Name('Princes Town', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Princes_Town = 'TT-PRT';

    #[Name('San Juan-Laventille', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_San_Juan_Laventille = 'TT-SJL';

    #[Name('Sangre Grande', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Sangre_Grande = 'TT-SGE';

    #[Name('Siparia', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Siparia = 'TT-SIP';

    #[Name('Tunapuna-Piarco', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_region_Tunapuna_Piarco = 'TT-TUP';

    #[Name('Tobago', [LanguageAlpha2::English], null, null)]
    case Trinidad_Tobago_ward_Tobago = 'TT-TOB';

    #[Name('Béja', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Beja = 'TN-31';

    #[Name('Ben Arous', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Ben_Arous = 'TN-13';

    #[Name('Bizerte', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Bizerte = 'TN-23';

    #[Name('Gabès', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Gabes = 'TN-81';

    #[Name('Gafsa', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Gafsa = 'TN-71';

    #[Name('Jendouba', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Jendouba = 'TN-32';

    #[Name('Kairouan', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Kairouan = 'TN-41';

    #[Name('Kasserine', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Kasserine = 'TN-42';

    #[Name('Kébili', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Kebili = 'TN-73';

    #[Name('L\'Ariana', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_L_Ariana = 'TN-12';

    #[Name('La Manouba', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_La_Manouba = 'TN-14';

    #[Name('Le Kef', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Le_Kef = 'TN-33';

    #[Name('Mahdia', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Mahdia = 'TN-53';

    #[Name('Médenine', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Medenine = 'TN-82';

    #[Name('Monastir', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Monastir = 'TN-52';

    #[Name('Nabeul', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Nabeul = 'TN-21';

    #[Name('Sfax', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Sfax = 'TN-61';

    #[Name('Sidi Bouzid', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Sidi_Bouzid = 'TN-43';

    #[Name('Siliana', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Siliana = 'TN-34';

    #[Name('Sousse', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Sousse = 'TN-51';

    #[Name('Tataouine', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Tataouine = 'TN-83';

    #[Name('Tozeur', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Tozeur = 'TN-72';

    #[Name('Tunis', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Tunis = 'TN-11';

    #[Name('Zaghouan', [LanguageAlpha2::Arabic], 'conventional names', null)]
    case Tunisia_governorate_Zaghouan = 'TN-22';

    #[Name('Adana', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Adana = 'TR-01';

    #[Name('Adıyaman', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Adiyaman = 'TR-02';

    #[Name('Afyonkarahisar', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Afyonkarahisar = 'TR-03';

    #[Name('Ağrı', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Agri = 'TR-04';

    #[Name('Aksaray', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Aksaray = 'TR-68';

    #[Name('Amasya', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Amasya = 'TR-05';

    #[Name('Ankara', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Ankara = 'TR-06';

    #[Name('Antalya', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Antalya = 'TR-07';

    #[Name('Ardahan', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Ardahan = 'TR-75';

    #[Name('Artvin', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Artvin = 'TR-08';

    #[Name('Aydın', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Aydin = 'TR-09';

    #[Name('Balıkesir', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Balikesir = 'TR-10';

    #[Name('Bartın', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bartin = 'TR-74';

    #[Name('Batman', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Batman = 'TR-72';

    #[Name('Bayburt', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bayburt = 'TR-69';

    #[Name('Bilecik', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bilecik = 'TR-11';

    #[Name('Bingöl', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bingol = 'TR-12';

    #[Name('Bitlis', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bitlis = 'TR-13';

    #[Name('Bolu', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bolu = 'TR-14';

    #[Name('Burdur', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Burdur = 'TR-15';

    #[Name('Bursa', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Bursa = 'TR-16';

    #[Name('Çanakkale', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Canakkale = 'TR-17';

    #[Name('Çankırı', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Cankiri = 'TR-18';

    #[Name('Çorum', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Corum = 'TR-19';

    #[Name('Denizli', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Denizli = 'TR-20';

    #[Name('Diyarbakır', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Diyarbakir = 'TR-21';

    #[Name('Düzce', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Duzce = 'TR-81';

    #[Name('Edirne', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Edirne = 'TR-22';

    #[Name('Elazığ', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Elazig = 'TR-23';

    #[Name('Erzincan', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Erzincan = 'TR-24';

    #[Name('Erzurum', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Erzurum = 'TR-25';

    #[Name('Eskişehir', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Eskisehir = 'TR-26';

    #[Name('Gaziantep', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Gaziantep = 'TR-27';

    #[Name('Giresun', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Giresun = 'TR-28';

    #[Name('Gümüşhane', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Gumushane = 'TR-29';

    #[Name('Hakkâri', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Hakkari = 'TR-30';

    #[Name('Hatay', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Hatay = 'TR-31';

    #[Name('Iğdır', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Igdir = 'TR-76';

    #[Name('Isparta', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Isparta = 'TR-32';

    #[Name('İstanbul', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Istanbul = 'TR-34';

    #[Name('İzmir', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Izmir = 'TR-35';

    #[Name('Kahramanmaraş', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kahramanmaras = 'TR-46';

    #[Name('Karabük', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Karabuk = 'TR-78';

    #[Name('Karaman', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Karaman = 'TR-70';

    #[Name('Kars', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kars = 'TR-36';

    #[Name('Kastamonu', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kastamonu = 'TR-37';

    #[Name('Kayseri', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kayseri = 'TR-38';

    #[Name('Kilis', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kilis = 'TR-79';

    #[Name('Kırıkkale', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kirikkale = 'TR-71';

    #[Name('Kırklareli', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kirklareli = 'TR-39';

    #[Name('Kırşehir', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kirsehir = 'TR-40';

    #[Name('Kocaeli', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kocaeli = 'TR-41';

    #[Name('Konya', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Konya = 'TR-42';

    #[Name('Kütahya', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Kutahya = 'TR-43';

    #[Name('Malatya', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Malatya = 'TR-44';

    #[Name('Manisa', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Manisa = 'TR-45';

    #[Name('Mardin', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Mardin = 'TR-47';

    #[Name('Mersin', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Mersin = 'TR-33';

    #[Name('Muğla', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Mugla = 'TR-48';

    #[Name('Muş', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Mus = 'TR-49';

    #[Name('Nevşehir', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Nevsehir = 'TR-50';

    #[Name('Niğde', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Nigde = 'TR-51';

    #[Name('Ordu', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Ordu = 'TR-52';

    #[Name('Osmaniye', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Osmaniye = 'TR-80';

    #[Name('Rize', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Rize = 'TR-53';

    #[Name('Sakarya', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Sakarya = 'TR-54';

    #[Name('Samsun', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Samsun = 'TR-55';

    #[Name('Şanlıurfa', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Sanliurfa = 'TR-63';

    #[Name('Siirt', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Siirt = 'TR-56';

    #[Name('Sinop', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Sinop = 'TR-57';

    #[Name('Şırnak', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Sirnak = 'TR-73';

    #[Name('Sivas', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Sivas = 'TR-58';

    #[Name('Tekirdağ', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Tekirdag = 'TR-59';

    #[Name('Tokat', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Tokat = 'TR-60';

    #[Name('Trabzon', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Trabzon = 'TR-61';

    #[Name('Tunceli', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Tunceli = 'TR-62';

    #[Name('Uşak', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Usak = 'TR-64';

    #[Name('Van', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Van = 'TR-65';

    #[Name('Yalova', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Yalova = 'TR-77';

    #[Name('Yozgat', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Yozgat = 'TR-66';

    #[Name('Zonguldak', [LanguageAlpha2::Turkish], null, null)]
    case Turkiye_province_Zonguldak = 'TR-67';

    #[Name('Aşgabat', [LanguageAlpha2::Turkmen], null, null)]
    case Turkmenistan_city_Asgabat = 'TM-S';

    #[Name('Ahal', [LanguageAlpha2::Turkmen], null, null)]
    case Turkmenistan_region_Ahal = 'TM-A';

    #[Name('Balkan', [LanguageAlpha2::Turkmen], null, null)]
    case Turkmenistan_region_Balkan = 'TM-B';

    #[Name('Daşoguz', [LanguageAlpha2::Turkmen], null, null)]
    case Turkmenistan_region_Dasoguz = 'TM-D';

    #[Name('Lebap', [LanguageAlpha2::Turkmen], null, null)]
    case Turkmenistan_region_Lebap = 'TM-L';

    #[Name('Mary', [LanguageAlpha2::Turkmen], null, null)]
    case Turkmenistan_region_Mary = 'TM-M';

    #[Name('Nanumaga', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Nanumaga = 'TV-NMG';

    #[Name('Nanumea', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Nanumea = 'TV-NMA';

    #[Name('Niutao', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Niutao = 'TV-NIT';

    #[Name('Nui', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Nui = 'TV-NUI';

    #[Name('Nukufetau', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Nukufetau = 'TV-NKF';

    #[Name('Nukulaelae', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Nukulaelae = 'TV-NKL';

    #[Name('Vaitupu', [LanguageAlpha2::English], null, null)]
    case Tuvalu_island_council_Vaitupu = 'TV-VAI';

    #[Name('Funafuti', [LanguageAlpha2::English], null, null)]
    case Tuvalu_town_council_Funafuti = 'TV-FUN';

    #[Name('Baker Island', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Baker_Island = 'UM-81';

    #[Name('Howland Island', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Howland_Island = 'UM-84';

    #[Name('Jarvis Island', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Jarvis_Island = 'UM-86';

    #[Name('Johnston Atoll', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Johnston_Atoll = 'UM-67';

    #[Name('Kingman Reef', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Kingman_Reef = 'UM-89';

    #[Name('Midway Islands', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Midway_Islands = 'UM-71';

    #[Name('Navassa Island', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Navassa_Island = 'UM-76';

    #[Name('Palmyra Atoll', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Palmyra_Atoll = 'UM-95';

    #[Name('Wake Island', [LanguageAlpha2::English], null, null)]
    case U_S_Outlying_Islands_islands_groups_of_islands_Wake_Island = 'UM-79';

    #[Name('Kampala', [LanguageAlpha2::English], null, null)]
    case Uganda_city_Kampala = 'UG-102';

    #[Name('Abim', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Abim = 'UG-314';

    #[Name('Adjumani', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Adjumani = 'UG-301';

    #[Name('Agago', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Agago = 'UG-322';

    #[Name('Alebtong', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Alebtong = 'UG-323';

    #[Name('Amolatar', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Amolatar = 'UG-315';

    #[Name('Amudat', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Amudat = 'UG-324';

    #[Name('Amuria', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Amuria = 'UG-216';

    #[Name('Amuru', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Amuru = 'UG-316';

    #[Name('Apac', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Apac = 'UG-302';

    #[Name('Arua', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Arua = 'UG-303';

    #[Name('Budaka', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Budaka = 'UG-217';

    #[Name('Bududa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bududa = 'UG-218';

    #[Name('Bugiri', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bugiri = 'UG-201';

    #[Name('Bugweri', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bugweri = 'UG-235';

    #[Name('Buhweju', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Buhweju = 'UG-420';

    #[Name('Buikwe', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Buikwe = 'UG-117';

    #[Name('Bukedea', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bukedea = 'UG-219';

    #[Name('Bukomansibi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bukomansibi = 'UG-118';

    #[Name('Bukwo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bukwo = 'UG-220';

    #[Name('Bulambuli', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bulambuli = 'UG-225';

    #[Name('Buliisa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Buliisa = 'UG-416';

    #[Name('Bundibugyo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bundibugyo = 'UG-401';

    #[Name('Bunyangabu', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bunyangabu = 'UG-430';

    #[Name('Bushenyi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Bushenyi = 'UG-402';

    #[Name('Busia', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Busia = 'UG-202';

    #[Name('Butaleja', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Butaleja = 'UG-221';

    #[Name('Butambala', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Butambala = 'UG-119';

    #[Name('Butebo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Butebo = 'UG-233';

    #[Name('Buvuma', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Buvuma = 'UG-120';

    #[Name('Buyende', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Buyende = 'UG-226';

    #[Name('Dokolo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Dokolo = 'UG-317';

    #[Name('Gomba', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Gomba = 'UG-121';

    #[Name('Gulu', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Gulu = 'UG-304';

    #[Name('Hoima', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Hoima = 'UG-403';

    #[Name('Ibanda', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Ibanda = 'UG-417';

    #[Name('Iganga', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Iganga = 'UG-203';

    #[Name('Isingiro', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Isingiro = 'UG-418';

    #[Name('Jinja', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Jinja = 'UG-204';

    #[Name('Kaabong', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kaabong = 'UG-318';

    #[Name('Kabale', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kabale = 'UG-404';

    #[Name('Kabarole', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kabarole = 'UG-405';

    #[Name('Kaberamaido', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kaberamaido = 'UG-213';

    #[Name('Kagadi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kagadi = 'UG-427';

    #[Name('Kakumiro', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kakumiro = 'UG-428';

    #[Name('Kalaki', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kalaki = 'UG-237';

    #[Name('Kalangala', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kalangala = 'UG-101';

    #[Name('Kaliro', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kaliro = 'UG-222';

    #[Name('Kalungu', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kalungu = 'UG-122';

    #[Name('Kamuli', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kamuli = 'UG-205';

    #[Name('Kamwenge', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kamwenge = 'UG-413';

    #[Name('Kanungu', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kanungu = 'UG-414';

    #[Name('Kapchorwa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kapchorwa = 'UG-206';

    #[Name('Kapelebyong', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kapelebyong = 'UG-236';

    #[Name('Karenga', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Karenga = 'UG-335';

    #[Name('Kasanda', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kasanda = 'UG-126';

    #[Name('Kasese', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kasese = 'UG-406';

    #[Name('Katakwi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Katakwi = 'UG-207';

    #[Name('Kayunga', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kayunga = 'UG-112';

    #[Name('Kazo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kazo = 'UG-433';

    #[Name('Kibaale', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kibaale = 'UG-407';

    #[Name('Kiboga', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kiboga = 'UG-103';

    #[Name('Kibuku', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kibuku = 'UG-227';

    #[Name('Kikuube', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kikuube = 'UG-432';

    #[Name('Kiruhura', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kiruhura = 'UG-419';

    #[Name('Kiryandongo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kiryandongo = 'UG-421';

    #[Name('Kisoro', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kisoro = 'UG-408';

    #[Name('Kitagwenda', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kitagwenda = 'UG-434';

    #[Name('Kitgum', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kitgum = 'UG-305';

    #[Name('Koboko', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Koboko = 'UG-319';

    #[Name('Kole', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kole = 'UG-325';

    #[Name('Kotido', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kotido = 'UG-306';

    #[Name('Kumi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kumi = 'UG-208';

    #[Name('Kwania', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kwania = 'UG-333';

    #[Name('Kween', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kween = 'UG-228';

    #[Name('Kyankwanzi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kyankwanzi = 'UG-123';

    #[Name('Kyegegwa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kyegegwa = 'UG-422';

    #[Name('Kyenjojo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kyenjojo = 'UG-415';

    #[Name('Kyotera', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Kyotera = 'UG-125';

    #[Name('Lamwo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Lamwo = 'UG-326';

    #[Name('Lira', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Lira = 'UG-307';

    #[Name('Luuka', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Luuka = 'UG-229';

    #[Name('Luwero', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Luwero = 'UG-104';

    #[Name('Lwengo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Lwengo = 'UG-124';

    #[Name('Lyantonde', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Lyantonde = 'UG-114';

    #[Name('Madi-Okollo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Madi_Okollo = 'UG-336';

    #[Name('Manafwa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Manafwa = 'UG-223';

    #[Name('Maracha', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Maracha = 'UG-320';

    #[Name('Masaka', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Masaka = 'UG-105';

    #[Name('Masindi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Masindi = 'UG-409';

    #[Name('Mayuge', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mayuge = 'UG-214';

    #[Name('Mbale', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mbale = 'UG-209';

    #[Name('Mbarara', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mbarara = 'UG-410';

    #[Name('Mitooma', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mitooma = 'UG-423';

    #[Name('Mityana', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mityana = 'UG-115';

    #[Name('Moroto', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Moroto = 'UG-308';

    #[Name('Moyo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Moyo = 'UG-309';

    #[Name('Mpigi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mpigi = 'UG-106';

    #[Name('Mubende', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mubende = 'UG-107';

    #[Name('Mukono', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Mukono = 'UG-108';

    #[Name('Nabilatuk', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Nabilatuk = 'UG-334';

    #[Name('Nakapiripirit', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Nakapiripirit = 'UG-311';

    #[Name('Nakaseke', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Nakaseke = 'UG-116';

    #[Name('Nakasongola', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Nakasongola = 'UG-109';

    #[Name('Namayingo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Namayingo = 'UG-230';

    #[Name('Namisindwa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Namisindwa = 'UG-234';

    #[Name('Namutumba', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Namutumba = 'UG-224';

    #[Name('Napak', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Napak = 'UG-327';

    #[Name('Nebbi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Nebbi = 'UG-310';

    #[Name('Ngora', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Ngora = 'UG-231';

    #[Name('Ntoroko', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Ntoroko = 'UG-424';

    #[Name('Ntungamo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Ntungamo = 'UG-411';

    #[Name('Nwoya', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Nwoya = 'UG-328';

    #[Name('Obongi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Obongi = 'UG-337';

    #[Name('Omoro', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Omoro = 'UG-331';

    #[Name('Otuke', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Otuke = 'UG-329';

    #[Name('Oyam', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Oyam = 'UG-321';

    #[Name('Pader', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Pader = 'UG-312';

    #[Name('Pakwach', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Pakwach = 'UG-332';

    #[Name('Pallisa', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Pallisa = 'UG-210';

    #[Name('Rakai', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Rakai = 'UG-110';

    #[Name('Rubanda', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Rubanda = 'UG-429';

    #[Name('Rubirizi', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Rubirizi = 'UG-425';

    #[Name('Rukiga', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Rukiga = 'UG-431';

    #[Name('Rukungiri', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Rukungiri = 'UG-412';

    #[Name('Rwampara', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Rwampara = 'UG-435';

    #[Name('Sembabule', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Sembabule = 'UG-111';

    #[Name('Serere', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Serere = 'UG-232';

    #[Name('Sheema', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Sheema = 'UG-426';

    #[Name('Sironko', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Sironko = 'UG-215';

    #[Name('Soroti', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Soroti = 'UG-211';

    #[Name('Tororo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Tororo = 'UG-212';

    #[Name('Wakiso', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Wakiso = 'UG-113';

    #[Name('Yumbe', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Yumbe = 'UG-313';

    #[Name('Zombo', [LanguageAlpha2::English], null, null)]
    case Uganda_district_Zombo = 'UG-330';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Uganda_geographical_region_Central = 'UG-C';

    #[Name('Eastern', [LanguageAlpha2::English], null, null)]
    case Uganda_geographical_region_Eastern = 'UG-E';

    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Uganda_geographical_region_Northern = 'UG-N';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Uganda_geographical_region_Western = 'UG-W';

    #[Name('Kyiv', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_city_Kyiv = 'UA-30';

    #[Name('Sevastopol', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_city_Sevastopol = 'UA-40';

    #[Name('Cherkaska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Cherkaska_oblast = 'UA-71';

    #[Name('Chernihivska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Chernihivska_oblast = 'UA-74';

    #[Name('Chernivetska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Chernivetska_oblast = 'UA-77';

    #[Name('Dnipropetrovska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Dnipropetrovska_oblast = 'UA-12';

    #[Name('Donetska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Donetska_oblast = 'UA-14';

    #[Name('Ivano-Frankivska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Ivano_Frankivska_oblast = 'UA-26';

    #[Name('Kharkivska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Kharkivska_oblast = 'UA-63';

    #[Name('Khersonska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Khersonska_oblast = 'UA-65';

    #[Name('Khmelnytska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Khmelnytska_oblast = 'UA-68';

    #[Name('Kirovohradska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Kirovohradska_oblast = 'UA-35';

    #[Name('Kyivska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Kyivska_oblast = 'UA-32';

    #[Name('Luhanska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Luhanska_oblast = 'UA-09';

    #[Name('Lvivska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Lvivska_oblast = 'UA-46';

    #[Name('Mykolaivska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Mykolaivska_oblast = 'UA-48';

    #[Name('Odeska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Odeska_oblast = 'UA-51';

    #[Name('Poltavska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Poltavska_oblast = 'UA-53';

    #[Name('Rivnenska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Rivnenska_oblast = 'UA-56';

    #[Name('Sumska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Sumska_oblast = 'UA-59';

    #[Name('Ternopilska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Ternopilska_oblast = 'UA-61';

    #[Name('Vinnytska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Vinnytska_oblast = 'UA-05';

    #[Name('Volynska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Volynska_oblast = 'UA-07';

    #[Name('Zakarpatska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Zakarpatska_oblast = 'UA-21';

    #[Name('Zaporizka oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Zaporizka_oblast = 'UA-23';

    #[Name('Zhytomyrska oblast', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_region_Zhytomyrska_oblast = 'UA-18';

    #[Name('Avtonomna Respublika Krym', [LanguageAlpha2::Ukrainian], 'National 2010 = UN X/9 2012', null)]
    case Ukraine_republic_Avtonomna_Respublika_Krym = 'UA-43';

    #[Name('Abū Z̧aby', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Abu Dhabi')]
    case United_Arab_Emirates_emirate_Abu_Zaby = 'AE-AZ';

    #[Name('‘Ajmān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case United_Arab_Emirates_emirate_Ajman = 'AE-AJ';

    #[Name('Al Fujayrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Fujairah')]
    case United_Arab_Emirates_emirate_Al_Fujayrah = 'AE-FU';

    #[Name('Ash Shāriqah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Sharjah')]
    case United_Arab_Emirates_emirate_Ash_Shariqah = 'AE-SH';

    #[Name('Dubayy', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Dubai')]
    case United_Arab_Emirates_emirate_Dubayy = 'AE-DU';

    #[Name('Ra’s al Khaymah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Ras Al Khaimah')]
    case United_Arab_Emirates_emirate_Ra_s_al_Khaymah = 'AE-RK';

    #[Name('Umm al Qaywayn', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', 'Umm Al Quwain')]
    case United_Arab_Emirates_emirate_Umm_al_Qaywayn = 'AE-UQ';

    #[Name('Barking and Dagenham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Barking_and_Dagenham = 'GB-BDG';

    #[Name('Barnet', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Barnet = 'GB-BNE';

    #[Name('Bexley', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Bexley = 'GB-BEX';

    #[Name('Brent', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Brent = 'GB-BEN';

    #[Name('Bromley', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Bromley = 'GB-BRY';

    #[Name('Camden', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Camden = 'GB-CMD';

    #[Name('Croydon', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Croydon = 'GB-CRY';

    #[Name('Ealing', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Ealing = 'GB-EAL';

    #[Name('Enfield', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Enfield = 'GB-ENF';

    #[Name('Greenwich', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Greenwich = 'GB-GRE';

    #[Name('Hackney', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Hackney = 'GB-HCK';

    #[Name('Hammersmith and Fulham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Hammersmith_and_Fulham = 'GB-HMF';

    #[Name('Haringey', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Haringey = 'GB-HRY';

    #[Name('Harrow', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Harrow = 'GB-HRW';

    #[Name('Havering', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Havering = 'GB-HAV';

    #[Name('Hillingdon', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Hillingdon = 'GB-HIL';

    #[Name('Hounslow', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Hounslow = 'GB-HNS';

    #[Name('Islington', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Islington = 'GB-ISL';

    #[Name('Kensington and Chelsea', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Kensington_and_Chelsea = 'GB-KEC';

    #[Name('Kingston upon Thames', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Kingston_upon_Thames = 'GB-KTT';

    #[Name('Lambeth', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Lambeth = 'GB-LBH';

    #[Name('Lewisham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Lewisham = 'GB-LEW';

    #[Name('Merton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Merton = 'GB-MRT';

    #[Name('Newham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Newham = 'GB-NWM';

    #[Name('Redbridge', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Redbridge = 'GB-RDB';

    #[Name('Richmond upon Thames', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Richmond_upon_Thames = 'GB-RIC';

    #[Name('Southwark', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Southwark = 'GB-SWK';

    #[Name('Sutton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Sutton = 'GB-STN';

    #[Name('Tower Hamlets', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Tower_Hamlets = 'GB-TWH';

    #[Name('Waltham Forest', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Waltham_Forest = 'GB-WFT';

    #[Name('Wandsworth', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Wandsworth = 'GB-WND';

    #[Name('Westminster', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_London_borough_Westminster = 'GB-WSM';

    #[Name('London, City of', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_city_corporation_London_City_of = 'GB-LND';

    #[Name('Aberdeen City', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Aberdeen_City = 'GB-ABE';

    #[Name('Aberdeenshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Aberdeenshire = 'GB-ABD';

    #[Name('Angus', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Angus = 'GB-ANS';

    #[Name('Argyll and Bute', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Argyll_and_Bute = 'GB-AGB';

    #[Name('Clackmannanshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Clackmannanshire = 'GB-CLK';

    #[Name('Dumfries and Galloway', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Dumfries_and_Galloway = 'GB-DGY';

    #[Name('Dundee City', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Dundee_City = 'GB-DND';

    #[Name('East Ayrshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_East_Ayrshire = 'GB-EAY';

    #[Name('East Dunbartonshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_East_Dunbartonshire = 'GB-EDU';

    #[Name('East Lothian', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_East_Lothian = 'GB-ELN';

    #[Name('East Renfrewshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_East_Renfrewshire = 'GB-ERW';

    #[Name('Edinburgh, City of', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Edinburgh_City_of = 'GB-EDH';

    #[Name('Eilean Siar', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Eilean_Siar = 'GB-ELS';

    #[Name('Falkirk', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Falkirk = 'GB-FAL';

    #[Name('Fife', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Fife = 'GB-FIF';

    #[Name('Glasgow City', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Glasgow_City = 'GB-GLG';

    #[Name('Highland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Highland = 'GB-HLD';

    #[Name('Inverclyde', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Inverclyde = 'GB-IVC';

    #[Name('Midlothian', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Midlothian = 'GB-MLN';

    #[Name('Moray', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Moray = 'GB-MRY';

    #[Name('North Ayrshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_North_Ayrshire = 'GB-NAY';

    #[Name('North Lanarkshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_North_Lanarkshire = 'GB-NLK';

    #[Name('Orkney Islands', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Orkney_Islands = 'GB-ORK';

    #[Name('Perth and Kinross', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Perth_and_Kinross = 'GB-PKN';

    #[Name('Renfrewshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Renfrewshire = 'GB-RFW';

    #[Name('Scottish Borders', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Scottish_Borders = 'GB-SCB';

    #[Name('Shetland Islands', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Shetland_Islands = 'GB-ZET';

    #[Name('South Ayrshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_South_Ayrshire = 'GB-SAY';

    #[Name('South Lanarkshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_South_Lanarkshire = 'GB-SLK';

    #[Name('Stirling', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_Stirling = 'GB-STG';

    #[Name('West Dunbartonshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_West_Dunbartonshire = 'GB-WDU';

    #[Name('West Lothian', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_council_area_West_Lothian = 'GB-WLN';

    #[Name('England', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_country_England = 'GB-ENG';

    #[Name('Scotland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_country_Scotland = 'GB-SCT';

    #[Name('Wales [Cymru GB-CYM]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_country_Wales_Cymru_GB_CYM = 'GB-WLS';

    #[Name('Antrim and Newtownabbey', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Antrim_and_Newtownabbey = 'GB-ANN';

    #[Name('Ards and North Down', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Ards_and_North_Down = 'GB-AND';

    #[Name('Armagh City, Banbridge and Craigavon', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Armagh_City_Banbridge_and_Craigavon = 'GB-ABC';

    #[Name('Belfast City', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Belfast_City = 'GB-BFS';

    #[Name('Causeway Coast and Glens', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Causeway_Coast_and_Glens = 'GB-CCG';

    #[Name('Derry and Strabane', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Derry_and_Strabane = 'GB-DRS';

    #[Name('Fermanagh and Omagh', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Fermanagh_and_Omagh = 'GB-FMO';

    #[Name('Lisburn and Castlereagh', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Lisburn_and_Castlereagh = 'GB-LBC';

    #[Name('Mid-Ulster', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Mid_Ulster = 'GB-MUL';

    #[Name('Mid and East Antrim', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Mid_and_East_Antrim = 'GB-MEA';

    #[Name('Newry, Mourne and Down', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_district_Newry_Mourne_and_Down = 'GB-NMD';

    #[Name('Barnsley', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Barnsley = 'GB-BNS';

    #[Name('Birmingham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Birmingham = 'GB-BIR';

    #[Name('Bolton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Bolton = 'GB-BOL';

    #[Name('Bradford', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Bradford = 'GB-BRD';

    #[Name('Bury', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Bury = 'GB-BUR';

    #[Name('Calderdale', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Calderdale = 'GB-CLD';

    #[Name('Coventry', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Coventry = 'GB-COV';

    #[Name('Doncaster', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Doncaster = 'GB-DNC';

    #[Name('Dudley', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Dudley = 'GB-DUD';

    #[Name('Gateshead', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Gateshead = 'GB-GAT';

    #[Name('Kirklees', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Kirklees = 'GB-KIR';

    #[Name('Knowsley', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Knowsley = 'GB-KWL';

    #[Name('Leeds', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Leeds = 'GB-LDS';

    #[Name('Liverpool', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Liverpool = 'GB-LIV';

    #[Name('Manchester', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Manchester = 'GB-MAN';

    #[Name('Newcastle upon Tyne', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Newcastle_upon_Tyne = 'GB-NET';

    #[Name('North Tyneside', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_North_Tyneside = 'GB-NTY';

    #[Name('Oldham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Oldham = 'GB-OLD';

    #[Name('Rochdale', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Rochdale = 'GB-RCH';

    #[Name('Rotherham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Rotherham = 'GB-ROT';

    #[Name('Salford', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Salford = 'GB-SLF';

    #[Name('Sandwell', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Sandwell = 'GB-SAW';

    #[Name('Sefton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Sefton = 'GB-SFT';

    #[Name('Sheffield', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Sheffield = 'GB-SHF';

    #[Name('Solihull', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Solihull = 'GB-SOL';

    #[Name('South Tyneside', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_South_Tyneside = 'GB-STY';

    #[Name('St. Helens', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_St_Helens = 'GB-SHN';

    #[Name('Stockport', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Stockport = 'GB-SKP';

    #[Name('Sunderland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Sunderland = 'GB-SND';

    #[Name('Tameside', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Tameside = 'GB-TAM';

    #[Name('Trafford', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Trafford = 'GB-TRF';

    #[Name('Wakefield', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Wakefield = 'GB-WKF';

    #[Name('Walsall', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Walsall = 'GB-WLL';

    #[Name('Wigan', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Wigan = 'GB-WGN';

    #[Name('Wirral', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Wirral = 'GB-WRL';

    #[Name('Wolverhampton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_metropolitan_district_Wolverhampton = 'GB-WLV';

    #[Name('Northern Ireland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_province_Northern_Ireland = 'GB-NIR';

    #[Name('Cambridgeshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Cambridgeshire = 'GB-CAM';

    #[Name('Cumbria', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Cumbria = 'GB-CMA';

    #[Name('Derbyshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Derbyshire = 'GB-DBY';

    #[Name('Devon', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Devon = 'GB-DEV';

    #[Name('Dorset', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Dorset = 'GB-DOR';

    #[Name('East Sussex', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_East_Sussex = 'GB-ESX';

    #[Name('Essex', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Essex = 'GB-ESS';

    #[Name('Gloucestershire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Gloucestershire = 'GB-GLS';

    #[Name('Hampshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Hampshire = 'GB-HAM';

    #[Name('Hertfordshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Hertfordshire = 'GB-HRT';

    #[Name('Kent', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Kent = 'GB-KEN';

    #[Name('Lancashire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Lancashire = 'GB-LAN';

    #[Name('Leicestershire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Leicestershire = 'GB-LEC';

    #[Name('Lincolnshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Lincolnshire = 'GB-LIN';

    #[Name('Norfolk', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Norfolk = 'GB-NFK';

    #[Name('North Yorkshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_North_Yorkshire = 'GB-NYK';

    #[Name('Nottinghamshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Nottinghamshire = 'GB-NTT';

    #[Name('Oxfordshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Oxfordshire = 'GB-OXF';

    #[Name('Somerset', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Somerset = 'GB-SOM';

    #[Name('Staffordshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Staffordshire = 'GB-STS';

    #[Name('Suffolk', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Suffolk = 'GB-SFK';

    #[Name('Surrey', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Surrey = 'GB-SRY';

    #[Name('Warwickshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Warwickshire = 'GB-WAR';

    #[Name('West Sussex', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_West_Sussex = 'GB-WSX';

    #[Name('Worcestershire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_two_tier_county_Worcestershire = 'GB-WOR';

    #[Name('Bath and North East Somerset', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Bath_and_North_East_Somerset = 'GB-BAS';

    #[Name('Bedford', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Bedford = 'GB-BDF';

    #[Name('Blackburn with Darwen', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Blackburn_with_Darwen = 'GB-BBD';

    #[Name('Blackpool', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Blackpool = 'GB-BPL';

    #[Name('Blaenau Gwent', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Blaenau_Gwent = 'GB-BGW';

    #[Name('Bournemouth, Christchurch and Poole', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Bournemouth_Christchurch_and_Poole = 'GB-BCP';

    #[Name('Bracknell Forest', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Bracknell_Forest = 'GB-BRC';

    #[Name('Bridgend [Pen-y-bont ar Ogwr GB-POG]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Bridgend_Pen_y_bont_ar_Ogwr_GB_POG = 'GB-BGE';

    #[Name('Brighton and Hove', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Brighton_and_Hove = 'GB-BNH';

    #[Name('Bristol, City of', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Bristol_City_of = 'GB-BST';

    #[Name('Buckinghamshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Buckinghamshire = 'GB-BKM';

    #[Name('Caerphilly [Caerffili GB-CAF]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Caerphilly_Caerffili_GB_CAF = 'GB-CAY';

    #[Name('Cardiff [Caerdydd GB-CRD]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Cardiff_Caerdydd_GB_CRD = 'GB-CRF';

    #[Name('Carmarthenshire [Sir Gaerfyrddin GB-GFY]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Carmarthenshire_Sir_Gaerfyrddin_GB_GFY = 'GB-CMN';

    #[Name('Central Bedfordshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Central_Bedfordshire = 'GB-CBF';

    #[Name('Ceredigion [Sir Ceredigion]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Ceredigion_Sir_Ceredigion = 'GB-CGN';

    #[Name('Cheshire East', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Cheshire_East = 'GB-CHE';

    #[Name('Cheshire West and Chester', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Cheshire_West_and_Chester = 'GB-CHW';

    #[Name('Conwy', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Conwy = 'GB-CWY';

    #[Name('Cornwall', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Cornwall = 'GB-CON';

    #[Name('Darlington', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Darlington = 'GB-DAL';

    #[Name('Denbighshire [Sir Ddinbych GB-DDB]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Denbighshire_Sir_Ddinbych_GB_DDB = 'GB-DEN';

    #[Name('Derby', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Derby = 'GB-DER';

    #[Name('Durham, County', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Durham_County = 'GB-DUR';

    #[Name('East Riding of Yorkshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_East_Riding_of_Yorkshire = 'GB-ERY';

    #[Name('Flintshire [Sir y Fflint GB-FFL]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Flintshire_Sir_y_Fflint_GB_FFL = 'GB-FLN';

    #[Name('Gwynedd', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Gwynedd = 'GB-GWN';

    #[Name('Halton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Halton = 'GB-HAL';

    #[Name('Hartlepool', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Hartlepool = 'GB-HPL';

    #[Name('Herefordshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Herefordshire = 'GB-HEF';

    #[Name('Isle of Anglesey [Sir Ynys Môn GB-YNM]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Isle_of_Anglesey_Sir_Ynys_Mon_GB_YNM = 'GB-AGY';

    #[Name('Isle of Wight', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Isle_of_Wight = 'GB-IOW';

    #[Name('Isles of Scilly', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Isles_of_Scilly = 'GB-IOS';

    #[Name('Kingston upon Hull', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Kingston_upon_Hull = 'GB-KHL';

    #[Name('Leicester', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Leicester = 'GB-LCE';

    #[Name('Luton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Luton = 'GB-LUT';

    #[Name('Medway', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Medway = 'GB-MDW';

    #[Name('Merthyr Tydfil [Merthyr Tudful GB-MTU]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Merthyr_Tydfil_Merthyr_Tudful_GB_MTU = 'GB-MTY';

    #[Name('Middlesbrough', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Middlesbrough = 'GB-MDB';

    #[Name('Milton Keynes', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Milton_Keynes = 'GB-MIK';

    #[Name('Monmouthshire [Sir Fynwy GB-FYN]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Monmouthshire_Sir_Fynwy_GB_FYN = 'GB-MON';

    #[Name('Neath Port Talbot [Castell-nedd Port Talbot GB-CTL]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Neath_Port_Talbot_Castell_nedd_Port_Talbot_GB_CTL = 'GB-NTL';

    #[Name('Newport [Casnewydd GB-CNW]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Newport_Casnewydd_GB_CNW = 'GB-NWP';

    #[Name('North East Lincolnshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_North_East_Lincolnshire = 'GB-NEL';

    #[Name('North Lincolnshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_North_Lincolnshire = 'GB-NLN';

    #[Name('North Northamptonshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_North_Northamptonshire = 'GB-NNH';

    #[Name('North Somerset', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_North_Somerset = 'GB-NSM';

    #[Name('Northumberland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Northumberland = 'GB-NBL';

    #[Name('Nottingham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Nottingham = 'GB-NGM';

    #[Name('Pembrokeshire [Sir Benfro GB-BNF]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Pembrokeshire_Sir_Benfro_GB_BNF = 'GB-PEM';

    #[Name('Peterborough', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Peterborough = 'GB-PTE';

    #[Name('Plymouth', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Plymouth = 'GB-PLY';

    #[Name('Portsmouth', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Portsmouth = 'GB-POR';

    #[Name('Powys', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Powys = 'GB-POW';

    #[Name('Reading', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Reading = 'GB-RDG';

    #[Name('Redcar and Cleveland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Redcar_and_Cleveland = 'GB-RCC';

    #[Name('Rhondda Cynon Taff [Rhondda CynonTaf]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Rhondda_Cynon_Taff_Rhondda_CynonTaf = 'GB-RCT';

    #[Name('Rutland', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Rutland = 'GB-RUT';

    #[Name('Shropshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Shropshire = 'GB-SHR';

    #[Name('Slough', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Slough = 'GB-SLG';

    #[Name('South Gloucestershire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_South_Gloucestershire = 'GB-SGC';

    #[Name('Southampton', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Southampton = 'GB-STH';

    #[Name('Southend-on-Sea', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Southend_on_Sea = 'GB-SOS';

    #[Name('Stockton-on-Tees', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Stockton_on_Tees = 'GB-STT';

    #[Name('Stoke-on-Trent', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Stoke_on_Trent = 'GB-STE';

    #[Name('Swansea [Abertawe GB-ATA]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Swansea_Abertawe_GB_ATA = 'GB-SWA';

    #[Name('Swindon', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Swindon = 'GB-SWD';

    #[Name('Telford and Wrekin', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Telford_and_Wrekin = 'GB-TFW';

    #[Name('Thurrock', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Thurrock = 'GB-THR';

    #[Name('Torbay', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Torbay = 'GB-TOB';

    #[Name('Torfaen [Tor-faen]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Torfaen_Tor_faen = 'GB-TOF';

    #[Name('Vale of Glamorgan, The [Bro Morgannwg GB-BMG]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Vale_of_Glamorgan_The_Bro_Morgannwg_GB_BMG = 'GB-VGL';

    #[Name('Warrington', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Warrington = 'GB-WRT';

    #[Name('West Berkshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_West_Berkshire = 'GB-WBK';

    #[Name('West Northamptonshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_West_Northamptonshire = 'GB-WNH';

    #[Name('Wiltshire', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Wiltshire = 'GB-WIL';

    #[Name('Windsor and Maidenhead', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Windsor_and_Maidenhead = 'GB-WNM';

    #[Name('Wokingham', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Wokingham = 'GB-WOK';

    #[Name('Wrexham [Wrecsam GB-WRC]', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_Wrexham_Wrecsam_GB_WRC = 'GB-WRX';

    #[Name('York', [LanguageAlpha2::English], null, null)]
    case United_Kingdom_unitary_authority_York = 'GB-YOR';

    #[Name('District of Columbia', [LanguageAlpha2::English], null, null)]
    case United_States_district_District_of_Columbia = 'US-DC';

    #[Name('American Samoa', [LanguageAlpha2::English], null, null)]
    #[SameAsCountry(CountryAlpha2::American_Samoa)]
    case United_States_outlying_area_American_Samoa = 'US-AS';

    #[Name('Guam', [LanguageAlpha2::English], null, null)]
    #[SameAsCountry(CountryAlpha2::Guam)]
    case United_States_outlying_area_Guam = 'US-GU';

    #[Name('Northern Mariana Islands', [LanguageAlpha2::English], null, null)]
    #[SameAsCountry(CountryAlpha2::Northern_Mariana_Islands)]
    case United_States_outlying_area_Northern_Mariana_Islands = 'US-MP';

    #[Name('Puerto Rico', [LanguageAlpha2::English], null, null)]
    #[SameAsCountry(CountryAlpha2::Puerto_Rico)]
    case United_States_outlying_area_Puerto_Rico = 'US-PR';

    #[Name('United States Minor Outlying Islands', [LanguageAlpha2::English], null, null)]
    #[SameAsCountry(CountryAlpha2::United_States_Outlying_Islands)]
    case United_States_outlying_area_United_States_Minor_Outlying_Islands = 'US-UM';

    #[Name('Virgin Islands, U.S.', [LanguageAlpha2::English], null, null)]
    #[SameAsCountry(CountryAlpha2::Virgin_Islands_U_S)]
    case United_States_outlying_area_Virgin_Islands_U_S = 'US-VI';

    #[Name('Alabama', [LanguageAlpha2::English], null, null)]
    case United_States_state_Alabama = 'US-AL';

    #[Name('Alaska', [LanguageAlpha2::English], null, null)]
    case United_States_state_Alaska = 'US-AK';

    #[Name('Arizona', [LanguageAlpha2::English], null, null)]
    case United_States_state_Arizona = 'US-AZ';

    #[Name('Arkansas', [LanguageAlpha2::English], null, null)]
    case United_States_state_Arkansas = 'US-AR';

    #[Name('California', [LanguageAlpha2::English], null, null)]
    case United_States_state_California = 'US-CA';

    #[Name('Colorado', [LanguageAlpha2::English], null, null)]
    case United_States_state_Colorado = 'US-CO';

    #[Name('Connecticut', [LanguageAlpha2::English], null, null)]
    case United_States_state_Connecticut = 'US-CT';

    #[Name('Delaware', [LanguageAlpha2::English], null, null)]
    case United_States_state_Delaware = 'US-DE';

    #[Name('Florida', [LanguageAlpha2::English], null, null)]
    case United_States_state_Florida = 'US-FL';

    #[Name('Georgia', [LanguageAlpha2::English], null, null)]
    case United_States_state_Georgia = 'US-GA';

    #[Name('Hawaii', [LanguageAlpha2::English], null, null)]
    case United_States_state_Hawaii = 'US-HI';

    #[Name('Idaho', [LanguageAlpha2::English], null, null)]
    case United_States_state_Idaho = 'US-ID';

    #[Name('Illinois', [LanguageAlpha2::English], null, null)]
    case United_States_state_Illinois = 'US-IL';

    #[Name('Indiana', [LanguageAlpha2::English], null, null)]
    case United_States_state_Indiana = 'US-IN';

    #[Name('Iowa', [LanguageAlpha2::English], null, null)]
    case United_States_state_Iowa = 'US-IA';

    #[Name('Kansas', [LanguageAlpha2::English], null, null)]
    case United_States_state_Kansas = 'US-KS';

    #[Name('Kentucky', [LanguageAlpha2::English], null, null)]
    case United_States_state_Kentucky = 'US-KY';

    #[Name('Louisiana', [LanguageAlpha2::English], null, null)]
    case United_States_state_Louisiana = 'US-LA';

    #[Name('Maine', [LanguageAlpha2::English], null, null)]
    case United_States_state_Maine = 'US-ME';

    #[Name('Maryland', [LanguageAlpha2::English], null, null)]
    case United_States_state_Maryland = 'US-MD';

    #[Name('Massachusetts', [LanguageAlpha2::English], null, null)]
    case United_States_state_Massachusetts = 'US-MA';

    #[Name('Michigan', [LanguageAlpha2::English], null, null)]
    case United_States_state_Michigan = 'US-MI';

    #[Name('Minnesota', [LanguageAlpha2::English], null, null)]
    case United_States_state_Minnesota = 'US-MN';

    #[Name('Mississippi', [LanguageAlpha2::English], null, null)]
    case United_States_state_Mississippi = 'US-MS';

    #[Name('Missouri', [LanguageAlpha2::English], null, null)]
    case United_States_state_Missouri = 'US-MO';

    #[Name('Montana', [LanguageAlpha2::English], null, null)]
    case United_States_state_Montana = 'US-MT';

    #[Name('Nebraska', [LanguageAlpha2::English], null, null)]
    case United_States_state_Nebraska = 'US-NE';

    #[Name('Nevada', [LanguageAlpha2::English], null, null)]
    case United_States_state_Nevada = 'US-NV';

    #[Name('New Hampshire', [LanguageAlpha2::English], null, null)]
    case United_States_state_New_Hampshire = 'US-NH';

    #[Name('New Jersey', [LanguageAlpha2::English], null, null)]
    case United_States_state_New_Jersey = 'US-NJ';

    #[Name('New Mexico', [LanguageAlpha2::English], null, null)]
    case United_States_state_New_Mexico = 'US-NM';

    #[Name('New York', [LanguageAlpha2::English], null, null)]
    case United_States_state_New_York = 'US-NY';

    #[Name('North Carolina', [LanguageAlpha2::English], null, null)]
    case United_States_state_North_Carolina = 'US-NC';

    #[Name('North Dakota', [LanguageAlpha2::English], null, null)]
    case United_States_state_North_Dakota = 'US-ND';

    #[Name('Ohio', [LanguageAlpha2::English], null, null)]
    case United_States_state_Ohio = 'US-OH';

    #[Name('Oklahoma', [LanguageAlpha2::English], null, null)]
    case United_States_state_Oklahoma = 'US-OK';

    #[Name('Oregon', [LanguageAlpha2::English], null, null)]
    case United_States_state_Oregon = 'US-OR';

    #[Name('Pennsylvania', [LanguageAlpha2::English], null, null)]
    case United_States_state_Pennsylvania = 'US-PA';

    #[Name('Rhode Island', [LanguageAlpha2::English], null, null)]
    case United_States_state_Rhode_Island = 'US-RI';

    #[Name('South Carolina', [LanguageAlpha2::English], null, null)]
    case United_States_state_South_Carolina = 'US-SC';

    #[Name('South Dakota', [LanguageAlpha2::English], null, null)]
    case United_States_state_South_Dakota = 'US-SD';

    #[Name('Tennessee', [LanguageAlpha2::English], null, null)]
    case United_States_state_Tennessee = 'US-TN';

    #[Name('Texas', [LanguageAlpha2::English], null, null)]
    case United_States_state_Texas = 'US-TX';

    #[Name('Utah', [LanguageAlpha2::English], null, null)]
    case United_States_state_Utah = 'US-UT';

    #[Name('Vermont', [LanguageAlpha2::English], null, null)]
    case United_States_state_Vermont = 'US-VT';

    #[Name('Virginia', [LanguageAlpha2::English], null, null)]
    case United_States_state_Virginia = 'US-VA';

    #[Name('Washington', [LanguageAlpha2::English], null, null)]
    case United_States_state_Washington = 'US-WA';

    #[Name('West Virginia', [LanguageAlpha2::English], null, null)]
    case United_States_state_West_Virginia = 'US-WV';

    #[Name('Wisconsin', [LanguageAlpha2::English], null, null)]
    case United_States_state_Wisconsin = 'US-WI';

    #[Name('Wyoming', [LanguageAlpha2::English], null, null)]
    case United_States_state_Wyoming = 'US-WY';

    #[Name('Artigas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Artigas = 'UY-AR';

    #[Name('Canelones', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Canelones = 'UY-CA';

    #[Name('Cerro Largo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Cerro_Largo = 'UY-CL';

    #[Name('Colonia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Colonia = 'UY-CO';

    #[Name('Durazno', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Durazno = 'UY-DU';

    #[Name('Flores', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Flores = 'UY-FS';

    #[Name('Florida', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Florida = 'UY-FD';

    #[Name('Lavalleja', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Lavalleja = 'UY-LA';

    #[Name('Maldonado', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Maldonado = 'UY-MA';

    #[Name('Montevideo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Montevideo = 'UY-MO';

    #[Name('Paysandú', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Paysandu = 'UY-PA';

    #[Name('Río Negro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Rio_Negro = 'UY-RN';

    #[Name('Rivera', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Rivera = 'UY-RV';

    #[Name('Rocha', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Rocha = 'UY-RO';

    #[Name('Salto', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Salto = 'UY-SA';

    #[Name('San José', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_San_Jose = 'UY-SJ';

    #[Name('Soriano', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Soriano = 'UY-SO';

    #[Name('Tacuarembó', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Tacuarembo = 'UY-TA';

    #[Name('Treinta y Tres', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Uruguay_department_Treinta_y_Tres = 'UY-TT';

    #[Name('Toshkent', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_city_Toshkent = 'UZ-TK';

    #[Name('Andijon', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Andijon = 'UZ-AN';

    #[Name('Buxoro', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Buxoro = 'UZ-BU';

    #[Name('Farg‘ona', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Farg_ona = 'UZ-FA';

    #[Name('Jizzax', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Jizzax = 'UZ-JI';

    #[Name('Namangan', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Namangan = 'UZ-NG';

    #[Name('Navoiy', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Navoiy = 'UZ-NW';

    #[Name('Qashqadaryo', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Qashqadaryo = 'UZ-QA';

    #[Name('Samarqand', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Samarqand = 'UZ-SA';

    #[Name('Sirdaryo', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Sirdaryo = 'UZ-SI';

    #[Name('Surxondaryo', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Surxondaryo = 'UZ-SU';

    #[Name('Toshkent', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Toshkent = 'UZ-TO';

    #[Name('Xorazm', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_region_Xorazm = 'UZ-XO';

    #[Name('Qoraqalpog‘iston Respublikasi', [LanguageAlpha2::Uzbek], null, null)]
    case Uzbekistan_republic_Qoraqalpog_iston_Respublikasi = 'UZ-QR';

    #[Name('Malampa', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Vanuatu_province_Malampa = 'VU-MAP';

    #[Name('Pénama', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Vanuatu_province_Penama = 'VU-PAM';

    #[Name('Sanma', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Vanuatu_province_Sanma = 'VU-SAM';

    #[Name('Shéfa', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Vanuatu_province_Shefa = 'VU-SEE';

    #[Name('Taféa', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Vanuatu_province_Tafea = 'VU-TAE';

    #[Name('Torba', [LanguageAlpha2::French, LanguageAlpha2::English], null, null)]
    case Vanuatu_province_Torba = 'VU-TOB';

    #[Name('Distrito Capital', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_capital_district_Distrito_Capital = 'VE-A';

    #[Name('Dependencias Federales', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_federal_dependency_Dependencias_Federales = 'VE-W';

    #[Name('Amazonas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Amazonas = 'VE-Z';

    #[Name('Anzoátegui', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Anzoategui = 'VE-B';

    #[Name('Apure', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Apure = 'VE-C';

    #[Name('Aragua', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Aragua = 'VE-D';

    #[Name('Barinas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Barinas = 'VE-E';

    #[Name('Bolívar', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Bolivar = 'VE-F';

    #[Name('Carabobo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Carabobo = 'VE-G';

    #[Name('Cojedes', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Cojedes = 'VE-H';

    #[Name('Delta Amacuro', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Delta_Amacuro = 'VE-Y';

    #[Name('Falcón', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Falcon = 'VE-I';

    #[Name('Guárico', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Guarico = 'VE-J';

    #[Name('La Guaira', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_La_Guaira = 'VE-X';

    #[Name('Lara', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Lara = 'VE-K';

    #[Name('Mérida', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Merida = 'VE-L';

    #[Name('Miranda', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Miranda = 'VE-M';

    #[Name('Monagas', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Monagas = 'VE-N';

    #[Name('Nueva Esparta', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Nueva_Esparta = 'VE-O';

    #[Name('Portuguesa', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Portuguesa = 'VE-P';

    #[Name('Sucre', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Sucre = 'VE-R';

    #[Name('Táchira', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Tachira = 'VE-S';

    #[Name('Trujillo', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Trujillo = 'VE-T';

    #[Name('Yaracuy', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Yaracuy = 'VE-U';

    #[Name('Zulia', [LanguageAlpha2::Spanish_Castilian], null, null)]
    case Venezuela_state_Zulia = 'VE-V';

    #[Name('Cần Thơ', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_municipality_Can_Tho = 'VN-CT';

    #[Name('Đà Nẵng', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_municipality_Da_Nang = 'VN-DN';

    #[Name('Hà Nội', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_municipality_Ha_Noi = 'VN-HN';

    #[Name('Hải Phòng', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_municipality_Hai_Phong = 'VN-HP';

    #[Name('Hồ Chí Minh', [LanguageAlpha2::Vietnamese], null, 'Sai Gon')]
    case Vietnam_municipality_Ho_Chi_Minh = 'VN-SG';

    #[Name('An Giang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_An_Giang = 'VN-44';

    #[Name('Bà Rịa - Vũng Tàu', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ba_Ria_Vung_Tau = 'VN-43';

    #[Name('Bắc Giang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Bac_Giang = 'VN-54';

    #[Name('Bắc Kạn', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Bac_Kan = 'VN-53';

    #[Name('Bạc Liêu', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Bac_Lieu = 'VN-55';

    #[Name('Bắc Ninh', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Bac_Ninh = 'VN-56';

    #[Name('Bến Tre', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ben_Tre = 'VN-50';

    #[Name('Bình Định', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Binh_Dinh = 'VN-31';

    #[Name('Bình Dương', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Binh_Duong = 'VN-57';

    #[Name('Bình Phước', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Binh_Phuoc = 'VN-58';

    #[Name('Bình Thuận', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Binh_Thuan = 'VN-40';

    #[Name('Cà Mau', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ca_Mau = 'VN-59';

    #[Name('Cao Bằng', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Cao_Bang = 'VN-04';

    #[Name('Đắk Lắk', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Dak_Lak = 'VN-33';

    #[Name('Đắk Nông', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Dak_Nong = 'VN-72';

    #[Name('Điện Biên', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Dien_Bien = 'VN-71';

    #[Name('Đồng Nai', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Dong_Nai = 'VN-39';

    #[Name('Đồng Tháp', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Dong_Thap = 'VN-45';

    #[Name('Gia Lai', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Gia_Lai = 'VN-30';

    #[Name('Hà Giang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ha_Giang = 'VN-03';

    #[Name('Hà Nam', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ha_Nam = 'VN-63';

    #[Name('Hà Tĩnh', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ha_Tinh = 'VN-23';

    #[Name('Hải Dương', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Hai_Duong = 'VN-61';

    #[Name('Hậu Giang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Hau_Giang = 'VN-73';

    #[Name('Hòa Bình', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Hoa_Binh = 'VN-14';

    #[Name('Hưng Yên', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Hung_Yen = 'VN-66';

    #[Name('Khánh Hòa', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Khanh_Hoa = 'VN-34';

    #[Name('Kiến Giang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Kien_Giang = 'VN-47';

    #[Name('Kon Tum', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Kon_Tum = 'VN-28';

    #[Name('Lai Châu', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Lai_Chau = 'VN-01';

    #[Name('Lâm Đồng', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Lam_Dong = 'VN-35';

    #[Name('Lạng Sơn', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Lang_Son = 'VN-09';

    #[Name('Lào Cai', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Lao_Cai = 'VN-02';

    #[Name('Long An', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Long_An = 'VN-41';

    #[Name('Nam Định', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Nam_Dinh = 'VN-67';

    #[Name('Nghệ An', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Nghe_An = 'VN-22';

    #[Name('Ninh Bình', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ninh_Binh = 'VN-18';

    #[Name('Ninh Thuận', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Ninh_Thuan = 'VN-36';

    #[Name('Phú Thọ', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Phu_Tho = 'VN-68';

    #[Name('Phú Yên', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Phu_Yen = 'VN-32';

    #[Name('Quảng Bình', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Quang_Binh = 'VN-24';

    #[Name('Quảng Nam', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Quang_Nam = 'VN-27';

    #[Name('Quảng Ngãi', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Quang_Ngai = 'VN-29';

    #[Name('Quảng Ninh', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Quang_Ninh = 'VN-13';

    #[Name('Quảng Trị', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Quang_Tri = 'VN-25';

    #[Name('Sóc Trăng', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Soc_Trang = 'VN-52';

    #[Name('Sơn La', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Son_La = 'VN-05';

    #[Name('Tây Ninh', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Tay_Ninh = 'VN-37';

    #[Name('Thái Bình', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Thai_Binh = 'VN-20';

    #[Name('Thái Nguyên', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Thai_Nguyen = 'VN-69';

    #[Name('Thanh Hóa', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Thanh_Hoa = 'VN-21';

    #[Name('Thừa Thiên-Huế', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Thua_Thien_Hue = 'VN-26';

    #[Name('Tiền Giang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Tien_Giang = 'VN-46';

    #[Name('Trà Vinh', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Tra_Vinh = 'VN-51';

    #[Name('Tuyên Quang', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Tuyen_Quang = 'VN-07';

    #[Name('Vĩnh Long', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Vinh_Long = 'VN-49';

    #[Name('Vĩnh Phúc', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Vinh_Phuc = 'VN-70';

    #[Name('Yên Bái', [LanguageAlpha2::Vietnamese], null, null)]
    case Vietnam_province_Yen_Bai = 'VN-06';

    #[Name('Alo', [LanguageAlpha2::French], null, null)]
    case Wallis_Futuna_administrative_precinct_Alo = 'WF-AL';

    #[Name('Sigave', [LanguageAlpha2::French], null, null)]
    case Wallis_Futuna_administrative_precinct_Sigave = 'WF-SG';

    #[Name('Uvea', [LanguageAlpha2::French], null, null)]
    case Wallis_Futuna_administrative_precinct_Uvea = 'WF-UV';

    #[Name('Abyan', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Abyan = 'YE-AB';

    #[Name('Aḑ Ḑāli‘', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Ad_Dali = 'YE-DA';

    #[Name('‘Adan', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Adan = 'YE-AD';

    #[Name('Al Bayḑā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Al_Bayda = 'YE-BA';

    #[Name('Al Ḩudaydah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Al_Hudaydah = 'YE-HU';

    #[Name('Al Jawf', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Al_Jawf = 'YE-JA';

    #[Name('Al Mahrah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Al_Mahrah = 'YE-MR';

    #[Name('Al Maḩwīt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Al_Mahwit = 'YE-MW';

    #[Name('‘Amrān', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Amran = 'YE-AM';

    #[Name('Arkhabīl Suquţrá', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Arkhabil_Suqutra = 'YE-SU';

    #[Name('Dhamār', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Dhamar = 'YE-DH';

    #[Name('Ḩaḑramawt', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Hadramawt = 'YE-HD';

    #[Name('Ḩajjah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Hajjah = 'YE-HJ';

    #[Name('Ibb', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Ibb = 'YE-IB';

    #[Name('Laḩij', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Lahij = 'YE-LA';

    #[Name('Ma’rib', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Ma_rib = 'YE-MA';

    #[Name('Raymah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Raymah = 'YE-RA';

    #[Name('Şāʻdah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Sa_dah = 'YE-SD';

    #[Name('Şanʻā’', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_San_a = 'YE-SN';

    #[Name('Shabwah', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Shabwah = 'YE-SH';

    #[Name('Tāʻizz', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_governorate_Ta_izz = 'YE-TA';

    #[Name('Amānat al ‘Āşimah [city]', [LanguageAlpha2::Arabic], 'BGN/PCGN 1956', null)]
    case Yemen_municipality_Amanat_al_Asimah_city = 'YE-SA';

    #[Name('Central', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Central = 'ZM-02';

    #[Name('Copperbelt', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Copperbelt = 'ZM-08';

    #[Name('Eastern', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Eastern = 'ZM-03';

    #[Name('Luapula', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Luapula = 'ZM-04';

    #[Name('Lusaka', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Lusaka = 'ZM-09';

    #[Name('Muchinga', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Muchinga = 'ZM-10';

    #[Name('North-Western', [LanguageAlpha2::English], null, null)]
    case Zambia_province_North_Western = 'ZM-06';

    #[Name('Northern', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Northern = 'ZM-05';

    #[Name('Southern', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Southern = 'ZM-07';

    #[Name('Western', [LanguageAlpha2::English], null, null)]
    case Zambia_province_Western = 'ZM-01';

    #[Name('Bulawayo', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Bulawayo = 'ZW-BU';

    #[Name('Harare', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Harare = 'ZW-HA';

    #[Name('Manicaland', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Manicaland = 'ZW-MA';

    #[Name('Mashonaland Central', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Mashonaland_Central = 'ZW-MC';

    #[Name('Mashonaland East', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Mashonaland_East = 'ZW-ME';

    #[Name('Mashonaland West', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Mashonaland_West = 'ZW-MW';

    #[Name('Masvingo', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Masvingo = 'ZW-MV';

    #[Name('Matabeleland North', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Matabeleland_North = 'ZW-MN';

    #[Name('Matabeleland South', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Matabeleland_South = 'ZW-MS';

    #[Name('Midlands', [LanguageAlpha2::English], null, null)]
    case Zimbabwe_province_Midlands = 'ZW-MI';

    public function getPartOfCountry(): CountryAlpha2 {
        /** @phpstan-ignore missingType.checkedException, missingType.checkedException */
        return CountryAlpha2::from(substr($this->value, 0, 2));
    }

    /** @return array<Name> */
    public function getNames(): array {
        return BackedEnum::getCaseAttributes($this, Name::class);
    }

    public function getSameAsCountry(): ?CountryAlpha2 {
        $sameAsCountryAttributes = BackedEnum::getCaseAttributes($this, SameAsCountry::class);
        if ($sameAsCountryAttributes === [] || count($sameAsCountryAttributes) !== 1) {
            return null;
        }

        return $sameAsCountryAttributes[0]->country;
    }
}

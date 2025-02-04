<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\CountryAlpha3;
use PrinsFrank\Standards\Country\CountryNumeric;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @source https://www.iana.org/domains/root/db
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\TopLevelDomainMapping
 */
enum CountryCodeTLD: string implements TLD {
    case ac = 'ac';
    case ad = 'ad';
    case ae = 'ae';
    case af = 'af';
    case ag = 'ag';
    case ai = 'ai';
    case al = 'al';
    case alardn_arabic = 'الاردن';
    case albhryn_arabic = 'البحرين';
    case aljzayr_arabic = 'الجزائر';
    case almghrb_arabic = 'المغرب';
    case alswdyt_arabic = 'السعودية';
    case am = 'am';
    case amarat_arabic = 'امارات';

    #[NotAssigned]
    case an = 'an';
    case ao = 'ao';
    case ao_men_han = '澳門';
    case aq = 'aq';
    case ar = 'ar';
    case art_arabic = 'ڀارت';
    case as = 'as';
    case at = 'at';
    case au = 'au';
    case aw = 'aw';
    case ax = 'ax';
    case ayran_arabic = 'ایران';
    case az = 'az';
    case ba = 'ba';
    case banla_bengali = 'বাংলা';
    case bart_arabic = 'بارت';
    case bart_arabic_2 = 'بھارت';
    case bb = 'bb';
    case bd = 'bd';
    case be = 'be';
    case bel_cyrillic = 'бел';
    case bf = 'bf';
    case bg = 'bg';
    case bg_cyrillic = 'бг';
    case bh = 'bh';
    case bharat_telugu = 'భారత్';
    case bharata_bengali = 'ভাৰত';
    case bharata_bengali_2 = 'ভারত';
    case bharata_devanagari = 'भारत';
    case bharata_gujarati = 'ભારત';
    case bharata_gurmukhi = 'ਭਾਰਤ';
    case bharata_kannada = 'ಭಾರತ';
    case bharata_oriya = 'ଭାରତ';
    case bharatam_devanagari = 'भारतम्';
    case bharatam_malayalam = 'ഭാരതം';
    case bharota_devanagari = 'भारोत';
    case bi = 'bi';
    case bj = 'bj';

    #[NotAssigned]
    case bl = 'bl';
    case bm = 'bm';
    case bn = 'bn';
    case bo = 'bo';

    #[NotAssigned]
    case bq = 'bq';
    case br = 'br';
    case bs = 'bs';
    case bt = 'bt';
    case bv = 'bv';
    case bw = 'bw';
    case by = 'by';
    case bz = 'bz';
    case ca = 'ca';
    case cc = 'cc';
    case cd = 'cd';
    case cf = 'cf';
    case cg = 'cg';
    case ch = 'ch';
    case ci = 'ci';
    case cinkappur_tamil = 'சிங்கப்பூர்';
    case ck = 'ck';
    case cl = 'cl';
    case cm = 'cm';
    case cn = 'cn';
    case co = 'co';
    case cr = 'cr';
    case cu = 'cu';
    case cv = 'cv';
    case cw = 'cw';
    case cx = 'cx';
    case cy = 'cy';
    case cz = 'cz';
    case de = 'de';
    case dj = 'dj';
    case dk = 'dk';
    case dm = 'dm';
    case do = 'do';
    case dz = 'dz';
    case ec = 'ec';
    case ee = 'ee';
    case eg = 'eg';

    #[NotAssigned]
    case eh = 'eh';
    case el_greek = 'ελ';
    case er = 'er';
    case es = 'es';
    case et = 'et';
    case eu = 'eu';
    case eu_cyrillic = 'ею';
    case eu_greek = 'ευ';
    case fi = 'fi';
    case fj = 'fj';
    case fk = 'fk';
    case flstyn_arabic = 'فلسطين';
    case fm = 'fm';
    case fo = 'fo';
    case fr = 'fr';
    case ga = 'ga';
    case gb = 'gb';
    case gd = 'gd';
    case ge = 'ge';
    case ge_georgian = 'გე';
    case gf = 'gf';
    case gg = 'gg';
    case gh = 'gh';
    case gi = 'gi';
    case gl = 'gl';
    case gm = 'gm';
    case gn = 'gn';
    case gp = 'gp';
    case gq = 'gq';
    case gr = 'gr';
    case gs = 'gs';
    case gt = 'gt';
    case gu = 'gu';
    case gw = 'gw';
    case gy = 'gy';
    case hangug_hangul = '한국';
    case hay_armenian = 'հայ';
    case hk = 'hk';
    case hm = 'hm';
    case hn = 'hn';
    case hr = 'hr';
    case ht = 'ht';
    case hu = 'hu';
    case id = 'id';
    case ie = 'ie';
    case il = 'il';
    case ilankai_tamil = 'இலங்கை';
    case im = 'im';
    case in = 'in';
    case intiya_tamil = 'இந்தியா';
    case io = 'io';
    case iq = 'iq';
    case ir = 'ir';
    case is = 'is';
    case it = 'it';
    case je = 'je';
    case jm = 'jm';
    case jo = 'jo';
    case jp = 'jp';
    case kaz_cyrillic = 'қаз';
    case ke = 'ke';
    case kg = 'kg';
    case kh = 'kh';
    case ki = 'ki';
    case km = 'km';
    case kn = 'kn';
    case kp = 'kp';
    case kr = 'kr';
    case kw = 'kw';
    case ky = 'ky';
    case kz = 'kz';
    case la = 'la';
    case lanka_sinhala = 'ලංකා';
    case lao_lao = 'ລາວ';
    case lb = 'lb';
    case lc = 'lc';
    case li = 'li';
    case lk = 'lk';
    case lr = 'lr';
    case ls = 'ls';
    case lt = 'lt';
    case lu = 'lu';
    case lv = 'lv';
    case ly = 'ly';
    case ma = 'ma';
    case man_arabic = 'عمان';
    case mc = 'mc';
    case md = 'md';
    case me = 'me';

    #[NotAssigned]
    case mf = 'mf';
    case mg = 'mg';
    case mh = 'mh';
    case mk = 'mk';
    case mkd_cyrillic = 'мкд';
    case ml = 'ml';
    case mlysya_arabic = 'مليسيا';
    case mm = 'mm';
    case mn = 'mn';
    case mo = 'mo';
    case mon_cyrillic = 'мон';
    case mp = 'mp';
    case mq = 'mq';
    case mr = 'mr';
    case ms = 'ms';
    case msr_arabic = 'مصر';
    case mt = 'mt';
    case mu = 'mu';
    case mv = 'mv';
    case mw = 'mw';
    case mwrytanya_arabic = 'موريتانيا';
    case mx = 'mx';
    case my = 'my';
    case mz = 'mz';
    case na = 'na';
    case nc = 'nc';
    case ne = 'ne';
    case nf = 'nf';
    case ng = 'ng';
    case ni = 'ni';
    case nl = 'nl';
    case no = 'no';
    case np = 'np';
    case nr = 'nr';
    case nu = 'nu';
    case nz = 'nz';
    case om = 'om';
    case pa = 'pa';
    case pakstan_arabic = 'پاکستان';
    case pe = 'pe';
    case pf = 'pf';
    case pg = 'pg';
    case ph = 'ph';
    case pk = 'pk';
    case pl = 'pl';
    case pm = 'pm';
    case pn = 'pn';
    case pr = 'pr';
    case ps = 'ps';
    case pt = 'pt';
    case pw = 'pw';
    case py = 'py';
    case qa = 'qa';
    case qtr_arabic = 'قطر';
    case raq_arabic = 'عراق';
    case re = 're';
    case rf_cyrillic = 'рф';
    case ro = 'ro';
    case rs = 'rs';
    case ru = 'ru';
    case rw = 'rw';
    case sa = 'sa';
    case sb = 'sb';
    case sc = 'sc';
    case sd = 'sd';
    case se = 'se';
    case sg = 'sg';
    case sh = 'sh';
    case si = 'si';
    case sj = 'sj';
    case sk = 'sk';
    case sl = 'sl';
    case sm = 'sm';
    case sn = 'sn';
    case so = 'so';
    case sr = 'sr';
    case srb_cyrillic = 'срб';
    case ss = 'ss';
    case st = 'st';
    case su = 'su';
    case sv = 'sv';
    case swdan_arabic = 'سودان';
    case swryt_arabic = 'سورية';
    case sx = 'sx';
    case sy = 'sy';
    case sz = 'sz';
    case tai_wan_han = '台湾';
    case tai_wan_han_2 = '台灣';
    case tc = 'tc';
    case td = 'td';
    case tf = 'tf';
    case tg = 'tg';
    case th = 'th';
    case thiy_thai = 'ไทย';
    case tj = 'tj';
    case tk = 'tk';
    case tl = 'tl';
    case tm = 'tm';
    case tn = 'tn';
    case to = 'to';

    #[NotAssigned]
    case tp = 'tp';
    case tr = 'tr';
    case tt = 'tt';
    case tv = 'tv';
    case tw = 'tw';
    case twns_arabic = 'تونس';
    case tz = 'tz';
    case ua = 'ua';
    case ug = 'ug';
    case uk = 'uk';
    case ukr_cyrillic = 'укр';

    #[NotAssigned]
    case um = 'um';
    case us = 'us';
    case uy = 'uy';
    case uz = 'uz';
    case va = 'va';
    case vc = 'vc';
    case ve = 've';
    case vg = 'vg';
    case vi = 'vi';
    case vn = 'vn';
    case vu = 'vu';
    case wf = 'wf';
    case ws = 'ws';
    case xiang_gang_han = '香港';
    case xin_jia_po_han = '新加坡';
    case ye = 'ye';
    case ysr_l_hebrew = 'ישראל';
    case yt = 'yt';
    case za = 'za';
    case zhong_guo_han = '中国';
    case zhong_guo_han_2 = '中國';
    case zm = 'zm';
    case zw = 'zw';

    public function getCountryAlpha2(): ?CountryAlpha2 {
        return match($this) {
            self::ad => CountryAlpha2::Andorra,
            self::ae => CountryAlpha2::United_Arab_Emirates,
            self::af => CountryAlpha2::Afghanistan,
            self::ag => CountryAlpha2::Antigua_and_Barbuda,
            self::ai => CountryAlpha2::Anguilla,
            self::al => CountryAlpha2::Albania,
            self::am => CountryAlpha2::Armenia,
            self::ao => CountryAlpha2::Angola,
            self::aq => CountryAlpha2::Antarctica,
            self::ar => CountryAlpha2::Argentina,
            self::as => CountryAlpha2::American_Samoa,
            self::at => CountryAlpha2::Austria,
            self::au => CountryAlpha2::Australia,
            self::aw => CountryAlpha2::Aruba,
            self::ax => CountryAlpha2::Aland_Islands,
            self::az => CountryAlpha2::Azerbaijan,
            self::ba => CountryAlpha2::Bosnia_and_Herzegovina,
            self::bb => CountryAlpha2::Barbados,
            self::bd => CountryAlpha2::Bangladesh,
            self::be => CountryAlpha2::Belgium,
            self::bf => CountryAlpha2::Burkina_Faso,
            self::bg => CountryAlpha2::Bulgaria,
            self::bh => CountryAlpha2::Bahrain,
            self::bi => CountryAlpha2::Burundi,
            self::bj => CountryAlpha2::Benin,
            self::bl => CountryAlpha2::Saint_Barthelemy,
            self::bm => CountryAlpha2::Bermuda,
            self::bn => CountryAlpha2::Brunei_Darussalam,
            self::bo => CountryAlpha2::Bolivia,
            self::bq => CountryAlpha2::Bonaire_Sint_Eustatius_and_Saba,
            self::br => CountryAlpha2::Brazil,
            self::bs => CountryAlpha2::Bahamas,
            self::bt => CountryAlpha2::Bhutan,
            self::bv => CountryAlpha2::Bouvet_Island,
            self::bw => CountryAlpha2::Botswana,
            self::by => CountryAlpha2::Belarus,
            self::bz => CountryAlpha2::Belize,
            self::ca => CountryAlpha2::Canada,
            self::cc => CountryAlpha2::Cocos_Islands,
            self::cd => CountryAlpha2::Congo_Democratic_Republic,
            self::cf => CountryAlpha2::Central_African_Republic,
            self::cg => CountryAlpha2::Congo,
            self::ch => CountryAlpha2::Switzerland,
            self::ci => CountryAlpha2::Cote_d_Ivoire,
            self::ck => CountryAlpha2::Cook_Islands,
            self::cl => CountryAlpha2::Chile,
            self::cm => CountryAlpha2::Cameroon,
            self::cn => CountryAlpha2::China,
            self::co => CountryAlpha2::Colombia,
            self::cr => CountryAlpha2::Costa_Rica,
            self::cu => CountryAlpha2::Cuba,
            self::cv => CountryAlpha2::Cabo_Verde,
            self::cw => CountryAlpha2::Curacao,
            self::cx => CountryAlpha2::Christmas_Island,
            self::cy => CountryAlpha2::Cyprus,
            self::cz => CountryAlpha2::Czechia,
            self::de => CountryAlpha2::Germany,
            self::dj => CountryAlpha2::Djibouti,
            self::dk => CountryAlpha2::Denmark,
            self::dm => CountryAlpha2::Dominica,
            self::do => CountryAlpha2::Dominican_Republic,
            self::dz => CountryAlpha2::Algeria,
            self::ec => CountryAlpha2::Ecuador,
            self::ee => CountryAlpha2::Estonia,
            self::eg => CountryAlpha2::Egypt,
            self::eh => CountryAlpha2::Western_Sahara,
            self::er => CountryAlpha2::Eritrea,
            self::es => CountryAlpha2::Spain,
            self::et => CountryAlpha2::Ethiopia,
            self::fi => CountryAlpha2::Finland,
            self::fj => CountryAlpha2::Fiji,
            self::fk => CountryAlpha2::Falkland_Islands,
            self::fm => CountryAlpha2::Micronesia,
            self::fo => CountryAlpha2::Faroe_Islands,
            self::fr => CountryAlpha2::France,
            self::ga => CountryAlpha2::Gabon,
            self::gb => CountryAlpha2::United_Kingdom,
            self::gd => CountryAlpha2::Grenada,
            self::ge => CountryAlpha2::Georgia,
            self::gf => CountryAlpha2::French_Guiana,
            self::gg => CountryAlpha2::Guernsey,
            self::gh => CountryAlpha2::Ghana,
            self::gi => CountryAlpha2::Gibraltar,
            self::gl => CountryAlpha2::Greenland,
            self::gm => CountryAlpha2::Gambia,
            self::gn => CountryAlpha2::Guinea,
            self::gp => CountryAlpha2::Guadeloupe,
            self::gq => CountryAlpha2::Equatorial_Guinea,
            self::gr => CountryAlpha2::Greece,
            self::gs => CountryAlpha2::South_Georgia_South_Sandwich_Islands,
            self::gt => CountryAlpha2::Guatemala,
            self::gu => CountryAlpha2::Guam,
            self::gw => CountryAlpha2::Guinea_Bissau,
            self::gy => CountryAlpha2::Guyana,
            self::hk => CountryAlpha2::Hong_Kong,
            self::hm => CountryAlpha2::Heard_Island_and_McDonald_Islands,
            self::hn => CountryAlpha2::Honduras,
            self::hr => CountryAlpha2::Croatia,
            self::ht => CountryAlpha2::Haiti,
            self::hu => CountryAlpha2::Hungary,
            self::id => CountryAlpha2::Indonesia,
            self::ie => CountryAlpha2::Ireland,
            self::il => CountryAlpha2::Israel,
            self::im => CountryAlpha2::Isle_of_Man,
            self::in => CountryAlpha2::India,
            self::io => CountryAlpha2::British_Indian_Ocean_Territory,
            self::iq => CountryAlpha2::Iraq,
            self::ir => CountryAlpha2::Iran,
            self::is => CountryAlpha2::Iceland,
            self::it => CountryAlpha2::Italy,
            self::je => CountryAlpha2::Jersey,
            self::jm => CountryAlpha2::Jamaica,
            self::jo => CountryAlpha2::Jordan,
            self::jp => CountryAlpha2::Japan,
            self::ke => CountryAlpha2::Kenya,
            self::kg => CountryAlpha2::Kyrgyzstan,
            self::kh => CountryAlpha2::Cambodia,
            self::ki => CountryAlpha2::Kiribati,
            self::km => CountryAlpha2::Comoros,
            self::kn => CountryAlpha2::Saint_Kitts_and_Nevis,
            self::kp => CountryAlpha2::Korea_Democratic_Peoples_Republic,
            self::kr => CountryAlpha2::Korea_Republic,
            self::kw => CountryAlpha2::Kuwait,
            self::ky => CountryAlpha2::Cayman_Islands,
            self::kz => CountryAlpha2::Kazakhstan,
            self::la => CountryAlpha2::Lao_Peoples_Democratic_Republic,
            self::lb => CountryAlpha2::Lebanon,
            self::lc => CountryAlpha2::Saint_Lucia,
            self::li => CountryAlpha2::Liechtenstein,
            self::lk => CountryAlpha2::Sri_Lanka,
            self::lr => CountryAlpha2::Liberia,
            self::ls => CountryAlpha2::Lesotho,
            self::lt => CountryAlpha2::Lithuania,
            self::lu => CountryAlpha2::Luxembourg,
            self::lv => CountryAlpha2::Latvia,
            self::ly => CountryAlpha2::Libya,
            self::ma => CountryAlpha2::Morocco,
            self::mc => CountryAlpha2::Monaco,
            self::md => CountryAlpha2::Moldova,
            self::me => CountryAlpha2::Montenegro,
            self::mf => CountryAlpha2::Saint_Martin_French_part,
            self::mg => CountryAlpha2::Madagascar,
            self::mh => CountryAlpha2::Marshall_Islands,
            self::mk => CountryAlpha2::North_Macedonia,
            self::ml => CountryAlpha2::Mali,
            self::mm => CountryAlpha2::Myanmar,
            self::mn => CountryAlpha2::Mongolia,
            self::mo => CountryAlpha2::Macao,
            self::mp => CountryAlpha2::Northern_Mariana_Islands,
            self::mq => CountryAlpha2::Martinique,
            self::mr => CountryAlpha2::Mauritania,
            self::ms => CountryAlpha2::Montserrat,
            self::mt => CountryAlpha2::Malta,
            self::mu => CountryAlpha2::Mauritius,
            self::mv => CountryAlpha2::Maldives,
            self::mw => CountryAlpha2::Malawi,
            self::mx => CountryAlpha2::Mexico,
            self::my => CountryAlpha2::Malaysia,
            self::mz => CountryAlpha2::Mozambique,
            self::na => CountryAlpha2::Namibia,
            self::nc => CountryAlpha2::New_Caledonia,
            self::ne => CountryAlpha2::Niger,
            self::nf => CountryAlpha2::Norfolk_Island,
            self::ng => CountryAlpha2::Nigeria,
            self::ni => CountryAlpha2::Nicaragua,
            self::nl => CountryAlpha2::Netherlands,
            self::no => CountryAlpha2::Norway,
            self::np => CountryAlpha2::Nepal,
            self::nr => CountryAlpha2::Nauru,
            self::nu => CountryAlpha2::Niue,
            self::nz => CountryAlpha2::New_Zealand,
            self::om => CountryAlpha2::Oman,
            self::pa => CountryAlpha2::Panama,
            self::pe => CountryAlpha2::Peru,
            self::pf => CountryAlpha2::French_Polynesia,
            self::pg => CountryAlpha2::Papua_New_Guinea,
            self::ph => CountryAlpha2::Philippines,
            self::pk => CountryAlpha2::Pakistan,
            self::pl => CountryAlpha2::Poland,
            self::pm => CountryAlpha2::Saint_Pierre_and_Miquelon,
            self::pn => CountryAlpha2::Pitcairn,
            self::pr => CountryAlpha2::Puerto_Rico,
            self::ps => CountryAlpha2::Palestine,
            self::pt => CountryAlpha2::Portugal,
            self::pw => CountryAlpha2::Palau,
            self::py => CountryAlpha2::Paraguay,
            self::qa => CountryAlpha2::Qatar,
            self::re => CountryAlpha2::Reunion,
            self::ro => CountryAlpha2::Romania,
            self::rs => CountryAlpha2::Serbia,
            self::ru => CountryAlpha2::Russian_Federation,
            self::rw => CountryAlpha2::Rwanda,
            self::sa => CountryAlpha2::Saudi_Arabia,
            self::sb => CountryAlpha2::Solomon_Islands,
            self::sc => CountryAlpha2::Seychelles,
            self::sd => CountryAlpha2::Sudan,
            self::se => CountryAlpha2::Sweden,
            self::sg => CountryAlpha2::Singapore,
            self::sh => CountryAlpha2::Saint_Helena_Ascension_Tristan_da_Cunha,
            self::si => CountryAlpha2::Slovenia,
            self::sj => CountryAlpha2::Svalbard_Jan_Mayen,
            self::sk => CountryAlpha2::Slovakia,
            self::sl => CountryAlpha2::Sierra_Leone,
            self::sm => CountryAlpha2::San_Marino,
            self::sn => CountryAlpha2::Senegal,
            self::so => CountryAlpha2::Somalia,
            self::sr => CountryAlpha2::Suriname,
            self::ss => CountryAlpha2::South_Sudan,
            self::st => CountryAlpha2::Sao_Tome_and_Principe,
            self::sv => CountryAlpha2::El_Salvador,
            self::sx => CountryAlpha2::Sint_Maarten_Dutch_part,
            self::sy => CountryAlpha2::Syrian_Arab_Republic,
            self::sz => CountryAlpha2::Eswatini,
            self::tc => CountryAlpha2::Turks_and_Caicos_Islands,
            self::td => CountryAlpha2::Chad,
            self::tf => CountryAlpha2::French_Southern_Territories,
            self::tg => CountryAlpha2::Togo,
            self::th => CountryAlpha2::Thailand,
            self::tj => CountryAlpha2::Tajikistan,
            self::tk => CountryAlpha2::Tokelau,
            self::tl => CountryAlpha2::Timor_Leste,
            self::tm => CountryAlpha2::Turkmenistan,
            self::tn => CountryAlpha2::Tunisia,
            self::to => CountryAlpha2::Tonga,
            self::tr => CountryAlpha2::Turkey,
            self::tt => CountryAlpha2::Trinidad_and_Tobago,
            self::tv => CountryAlpha2::Tuvalu,
            self::tw => CountryAlpha2::Taiwan_Province_of_China,
            self::tz => CountryAlpha2::Tanzania,
            self::ua => CountryAlpha2::Ukraine,
            self::ug => CountryAlpha2::Uganda,
            self::um => CountryAlpha2::United_States_Outlying_Islands,
            self::us => CountryAlpha2::United_States_of_America,
            self::uy => CountryAlpha2::Uruguay,
            self::uz => CountryAlpha2::Uzbekistan,
            self::va => CountryAlpha2::Holy_See,
            self::vc => CountryAlpha2::Saint_Vincent_and_the_Grenadines,
            self::ve => CountryAlpha2::Venezuela,
            self::vg => CountryAlpha2::Virgin_Islands_British,
            self::vi => CountryAlpha2::Virgin_Islands_U_S,
            self::vn => CountryAlpha2::Viet_Nam,
            self::vu => CountryAlpha2::Vanuatu,
            self::wf => CountryAlpha2::Wallis_and_Futuna,
            self::ws => CountryAlpha2::Samoa,
            self::ye => CountryAlpha2::Yemen,
            self::yt => CountryAlpha2::Mayotte,
            self::za => CountryAlpha2::South_Africa,
            self::zm => CountryAlpha2::Zambia,
            self::zw => CountryAlpha2::Zimbabwe,
            default => null
        };
    }

    public function getCountryAlpha3(): ?CountryAlpha3 {
        return $this->getCountryAlpha2()?->toCountryAlpha3();
    }

    public function getCountryNumeric(): ?CountryNumeric {
        return $this->getCountryAlpha2()?->toCountryNumeric();
    }

    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

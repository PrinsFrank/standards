<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use Override;
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
        return match ($this) {
            default => null,
        };
    }

    public function getCountryAlpha3(): ?CountryAlpha3 {
        return $this->getCountryAlpha2()?->toCountryAlpha3();
    }

    public function getCountryNumeric(): ?CountryNumeric {
        return $this->getCountryAlpha2()?->toCountryNumeric();
    }

    #[Override]
    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

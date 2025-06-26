<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\TopLevelDomain\Attributes\NotAssigned;

/**
 * @source https://www.iana.org/domains/root/db
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\TopLevelDomainMapping
 */
enum GenericTLD: string implements TLD {
    case aaa = 'aaa';
    case aarp = 'aarp';

    #[NotAssigned]
    case abarth = 'abarth';
    case abb = 'abb';
    case abbott = 'abbott';
    case abbvie = 'abbvie';
    case abc = 'abc';
    case able = 'able';
    case abogado = 'abogado';
    case abudhabi = 'abudhabi';
    case abwzby_arabic = 'ابوظبي';
    case academy = 'academy';
    case accenture = 'accenture';
    case accountant = 'accountant';
    case accountants = 'accountants';
    case aco = 'aco';

    #[NotAssigned]
    case active = 'active';
    case actor = 'actor';

    #[NotAssigned]
    case adac = 'adac';
    case ads = 'ads';
    case adult = 'adult';
    case aeg = 'aeg';
    case aetna = 'aetna';

    #[NotAssigned]
    case afamilycompany = 'afamilycompany';
    case afl = 'afl';
    case africa = 'africa';
    case agakhan = 'agakhan';
    case agency = 'agency';
    case aig = 'aig';

    #[NotAssigned]
    case aigo = 'aigo';
    case airbus = 'airbus';
    case airforce = 'airforce';
    case airtel = 'airtel';
    case akdn = 'akdn';

    #[NotAssigned]
    case alfaromeo = 'alfaromeo';
    case alibaba = 'alibaba';
    case alipay = 'alipay';
    case allfinanz = 'allfinanz';
    case allstate = 'allstate';
    case ally = 'ally';
    case allyan_arabic = 'العليان';
    case alsace = 'alsace';
    case alstom = 'alstom';
    case amazon = 'amazon';
    case amazon_katakana = 'アマゾン';
    case americanexpress = 'americanexpress';
    case americanfamily = 'americanfamily';
    case amex = 'amex';
    case amfam = 'amfam';
    case amica = 'amica';
    case amsterdam = 'amsterdam';
    case analytics = 'analytics';
    case android = 'android';
    case anquan = 'anquan';
    case anz = 'anz';
    case aol = 'aol';
    case apartments = 'apartments';
    case app = 'app';
    case apple = 'apple';
    case aquarelle = 'aquarelle';
    case arab = 'arab';
    case aramco = 'aramco';
    case aramkw_arabic = 'ارامكو';
    case archi = 'archi';
    case army = 'army';
    case art = 'art';
    case arte = 'arte';
    case asda = 'asda';
    case associates = 'associates';
    case athleta = 'athleta';

    #[NotAssigned]
    case atsalat_arabic = 'اتصالات';
    case attorney = 'attorney';
    case auction = 'auction';
    case audi = 'audi';
    case audible = 'audible';
    case audio = 'audio';
    case auspost = 'auspost';
    case author = 'author';
    case auto = 'auto';
    case autos = 'autos';

    #[NotAssigned]
    case avianca = 'avianca';
    case aws = 'aws';
    case axa = 'axa';
    case azure = 'azure';
    case ba_gua_han = '八卦';
    case baby = 'baby';
    case baidu = 'baidu';
    case banamex = 'banamex';

    #[NotAssigned]
    case bananarepublic = 'bananarepublic';
    case band = 'band';
    case bank = 'bank';
    case bar = 'bar';
    case barcelona = 'barcelona';
    case barclaycard = 'barclaycard';
    case barclays = 'barclays';
    case barefoot = 'barefoot';
    case bargains = 'bargains';
    case baseball = 'baseball';
    case basketball = 'basketball';
    case bauhaus = 'bauhaus';
    case bayern = 'bayern';
    case bazar_arabic = 'بازار';
    case bbc = 'bbc';
    case bbt = 'bbt';
    case bbva = 'bbva';
    case bcg = 'bcg';
    case bcn = 'bcn';
    case beats = 'beats';
    case beauty = 'beauty';
    case beer = 'beer';

    #[NotAssigned]
    case bentley = 'bentley';
    case berlin = 'berlin';
    case best = 'best';
    case bestbuy = 'bestbuy';
    case bet = 'bet';
    case bharti = 'bharti';
    case bible = 'bible';
    case bid = 'bid';
    case bike = 'bike';
    case bing = 'bing';
    case bingo = 'bingo';
    case bio = 'bio';
    case black = 'black';
    case blackfriday = 'blackfriday';

    #[NotAssigned]
    case blanco = 'blanco';
    case blockbuster = 'blockbuster';
    case blog = 'blog';
    case bloomberg = 'bloomberg';
    case blue = 'blue';
    case bms = 'bms';
    case bmw = 'bmw';

    #[NotAssigned]
    case bnl = 'bnl';
    case bnpparibas = 'bnpparibas';
    case boats = 'boats';
    case boehringer = 'boehringer';
    case bofa = 'bofa';
    case bom = 'bom';
    case bond = 'bond';
    case boo = 'boo';
    case book = 'book';
    case booking = 'booking';

    #[NotAssigned]
    case boots = 'boots';
    case bosch = 'bosch';
    case bostik = 'bostik';
    case boston = 'boston';
    case bot = 'bot';
    case boutique = 'boutique';
    case box = 'box';
    case bradesco = 'bradesco';
    case bridgestone = 'bridgestone';
    case broadway = 'broadway';
    case broker = 'broker';
    case brother = 'brother';
    case brussels = 'brussels';

    #[NotAssigned]
    case budapest = 'budapest';

    #[NotAssigned]
    case bugatti = 'bugatti';
    case build = 'build';
    case builders = 'builders';
    case business = 'business';
    case buy = 'buy';
    case buzz = 'buzz';
    case bytk_arabic = 'بيتك';
    case bzh = 'bzh';
    case cab = 'cab';
    case cafe = 'cafe';
    case cal = 'cal';
    case call = 'call';
    case calvinklein = 'calvinklein';
    case cam = 'cam';
    case camera = 'camera';
    case camp = 'camp';
    case can_ting_han = '餐厅';

    #[NotAssigned]
    case cancerresearch = 'cancerresearch';
    case canon = 'canon';
    case capetown = 'capetown';
    case capital = 'capital';
    case capitalone = 'capitalone';
    case car = 'car';
    case caravan = 'caravan';
    case cards = 'cards';
    case care = 'care';
    case career = 'career';
    case careers = 'careers';
    case cars = 'cars';

    #[NotAssigned]
    case cartier = 'cartier';
    case casa = 'casa';
    case case = 'case';

    #[NotAssigned]
    case caseih = 'caseih';
    case cash = 'cash';
    case casino = 'casino';
    case catering = 'catering';
    case catholic = 'catholic';
    case cba = 'cba';
    case cbn = 'cbn';
    case cbre = 'cbre';

    #[NotAssigned]
    case cbs = 'cbs';

    #[NotAssigned]
    case ceb = 'ceb';
    case center = 'center';
    case ceo = 'ceo';
    case cern = 'cern';
    case cfa = 'cfa';
    case cfd = 'cfd';
    case chanel = 'chanel';
    case channel = 'channel';
    case charity = 'charity';
    case chase = 'chase';
    case chat = 'chat';
    case cheap = 'cheap';
    case chintai = 'chintai';

    #[NotAssigned]
    case chloe = 'chloe';
    case christmas = 'christmas';
    case chrome = 'chrome';

    #[NotAssigned]
    case chrysler = 'chrysler';
    case church = 'church';
    case ci_shan_han = '慈善';
    case cipriani = 'cipriani';
    case circle = 'circle';
    case cisco = 'cisco';
    case citadel = 'citadel';
    case citi = 'citi';
    case citic = 'citic';
    case city = 'city';

    #[NotAssigned]
    case cityeats = 'cityeats';
    case claims = 'claims';
    case cleaning = 'cleaning';
    case click = 'click';
    case clinic = 'clinic';
    case clinique = 'clinique';
    case clothing = 'clothing';
    case cloud = 'cloud';
    case club = 'club';
    case clubmed = 'clubmed';
    case coach = 'coach';
    case codes = 'codes';
    case coffee = 'coffee';
    case college = 'college';
    case cologne = 'cologne';
    case com = 'com';

    #[NotAssigned]
    case comcast = 'comcast';
    case commbank = 'commbank';
    case community = 'community';
    case company = 'company';
    case compare = 'compare';
    case computer = 'computer';
    case comsec = 'comsec';
    case condos = 'condos';
    case construction = 'construction';
    case consulting = 'consulting';
    case contact = 'contact';
    case contractors = 'contractors';
    case cooking = 'cooking';

    #[NotAssigned]
    case cookingchannel = 'cookingchannel';
    case cool = 'cool';
    case corsica = 'corsica';
    case country = 'country';
    case coupon = 'coupon';
    case coupons = 'coupons';
    case courses = 'courses';
    case cpa = 'cpa';
    case credit = 'credit';
    case creditcard = 'creditcard';
    case creditunion = 'creditunion';
    case cricket = 'cricket';
    case crown = 'crown';
    case crs = 'crs';
    case cruise = 'cruise';
    case cruises = 'cruises';

    #[NotAssigned]
    case csc = 'csc';
    case cuisinella = 'cuisinella';
    case cymru = 'cymru';
    case cyou = 'cyou';
    case da_na_han = '大拿';

    #[NotAssigned]
    case da_zhong_qi_che_han = '大众汽车';

    #[NotAssigned]
    case dabur = 'dabur';
    case dad = 'dad';
    case dan_ma_xi_han = '淡马锡';
    case dance = 'dance';
    case daskeom_hangul = '닷컴';
    case dasnes_hangul = '닷넷';
    case data = 'data';
    case date = 'date';
    case dating = 'dating';
    case datsun = 'datsun';
    case day = 'day';
    case dclk = 'dclk';
    case dds = 'dds';
    case deal = 'deal';
    case dealer = 'dealer';
    case deals = 'deals';
    case degree = 'degree';
    case delivery = 'delivery';
    case dell = 'dell';
    case deloitte = 'deloitte';
    case delta = 'delta';
    case democrat = 'democrat';
    case dental = 'dental';
    case dentist = 'dentist';
    case desi = 'desi';
    case design = 'design';
    case deti_cyrillic = 'дети';
    case dev = 'dev';
    case dhl = 'dhl';
    case diamonds = 'diamonds';
    case dian_kan_han = '点看';
    case dian_xun_ying_ke_han = '電訊盈科';
    case diet = 'diet';
    case digital = 'digital';
    case direct = 'direct';
    case directory = 'directory';
    case discount = 'discount';
    case discover = 'discover';
    case dish = 'dish';
    case diy = 'diy';
    case dnp = 'dnp';
    case docs = 'docs';
    case doctor = 'doctor';

    #[NotAssigned]
    case dodge = 'dodge';
    case dog = 'dog';

    #[NotAssigned]
    case doha = 'doha';
    case domains = 'domains';

    #[NotAssigned]
    case doosan = 'doosan';
    case dot = 'dot';
    case download = 'download';
    case drive = 'drive';
    case dtv = 'dtv';
    case dubai = 'dubai';

    #[NotAssigned]
    case duck = 'duck';
    case dunlop = 'dunlop';

    #[NotAssigned]
    case duns = 'duns';
    case dupont = 'dupont';
    case durban = 'durban';
    case dvag = 'dvag';
    case dvr = 'dvr';
    case earth = 'earth';
    case eat = 'eat';
    case eco = 'eco';
    case edeka = 'edeka';
    case education = 'education';
    case email = 'email';
    case emerck = 'emerck';

    #[NotAssigned]
    case emerson = 'emerson';
    case energy = 'energy';
    case engineer = 'engineer';
    case engineering = 'engineering';
    case enterprises = 'enterprises';

    #[NotAssigned]
    case epost = 'epost';
    case epson = 'epson';
    case equipment = 'equipment';
    case ericsson = 'ericsson';
    case erni = 'erni';
    case esq = 'esq';
    case estate = 'estate';

    #[NotAssigned]
    case esurance = 'esurance';

    #[NotAssigned]
    case etisalat = 'etisalat';
    case eurovision = 'eurovision';
    case eus = 'eus';
    case events = 'events';

    #[NotAssigned]
    case everbank = 'everbank';
    case exchange = 'exchange';
    case expert = 'expert';
    case exposed = 'exposed';
    case express = 'express';
    case extraspace = 'extraspace';
    case fage = 'fage';
    case fail = 'fail';
    case fairwinds = 'fairwinds';
    case faith = 'faith';
    case family = 'family';
    case fan = 'fan';
    case fans = 'fans';
    case farm = 'farm';
    case farmers = 'farmers';
    case fashion = 'fashion';
    case fasshon_katakana = 'ファッション';
    case fast = 'fast';
    case fedex = 'fedex';
    case feedback = 'feedback';
    case fei_li_pu_han = '飞利浦';
    case ferrari = 'ferrari';
    case ferrero = 'ferrero';

    #[NotAssigned]
    case fiat = 'fiat';
    case fidelity = 'fidelity';
    case fido = 'fido';
    case film = 'film';
    case final = 'final';
    case finance = 'finance';
    case financial = 'financial';
    case fire = 'fire';
    case firestone = 'firestone';
    case firmdale = 'firmdale';
    case fish = 'fish';
    case fishing = 'fishing';
    case fit = 'fit';
    case fitness = 'fitness';
    case flickr = 'flickr';
    case flights = 'flights';
    case flir = 'flir';
    case florist = 'florist';
    case flowers = 'flowers';

    #[NotAssigned]
    case flsmidth = 'flsmidth';
    case fly = 'fly';
    case foo = 'foo';
    case food = 'food';

    #[NotAssigned]
    case foodnetwork = 'foodnetwork';
    case football = 'football';
    case ford = 'ford';
    case forex = 'forex';
    case forsale = 'forsale';
    case forum = 'forum';
    case foundation = 'foundation';
    case fox = 'fox';
    case free = 'free';
    case fresenius = 'fresenius';
    case frl = 'frl';
    case frogans = 'frogans';

    #[NotAssigned]
    case frontdoor = 'frontdoor';
    case frontier = 'frontier';
    case ftr = 'ftr';
    case fu_shan_han = '佛山';
    case fujitsu = 'fujitsu';

    #[NotAssigned]
    case fujixerox = 'fujixerox';
    case fun = 'fun';
    case fund = 'fund';
    case furniture = 'furniture';
    case futbol = 'futbol';
    case fyi = 'fyi';
    case gal = 'gal';
    case gallery = 'gallery';
    case gallo = 'gallo';
    case gallup = 'gallup';
    case game = 'game';
    case games = 'games';
    case gap = 'gap';
    case garden = 'garden';
    case gay = 'gay';
    case gbiz = 'gbiz';
    case gdn = 'gdn';
    case gea = 'gea';
    case gent = 'gent';
    case genting = 'genting';
    case george = 'george';
    case ggee = 'ggee';
    case gift = 'gift';
    case gifts = 'gifts';
    case gives = 'gives';
    case giving = 'giving';

    #[NotAssigned]
    case glade = 'glade';
    case glass = 'glass';
    case gle = 'gle';
    case global = 'global';
    case globo = 'globo';
    case gmail = 'gmail';
    case gmbh = 'gmbh';
    case gmo = 'gmo';
    case gmx = 'gmx';
    case godaddy = 'godaddy';
    case gold = 'gold';
    case goldpoint = 'goldpoint';
    case golf = 'golf';
    case gong_si_han = '公司';

    #[NotAssigned]
    case gong_xing_han = '工行';
    case gong_yi_han = '公益';
    case goo = 'goo';

    #[NotAssigned]
    case goodhands = 'goodhands';
    case goodyear = 'goodyear';
    case goog = 'goog';
    case google = 'google';
    case gop = 'gop';
    case got = 'got';
    case gou_wu_han = '购物';
    case grainger = 'grainger';
    case graphics = 'graphics';
    case gratis = 'gratis';
    case green = 'green';
    case gripe = 'gripe';
    case grocery = 'grocery';
    case group = 'group';
    case gu_ge_han = '谷歌';
    case guang_dong_han = '广东';

    #[NotAssigned]
    case guardian = 'guardian';
    case gucci = 'gucci';
    case guge = 'guge';
    case guguru_katakana = 'グーグル';
    case guide = 'guide';
    case guitars = 'guitars';
    case guru = 'guru';
    case hair = 'hair';
    case hamburg = 'hamburg';
    case hangout = 'hangout';
    case haus = 'haus';
    case hbo = 'hbo';
    case hdfc = 'hdfc';
    case hdfcbank = 'hdfcbank';
    case health = 'health';
    case healthcare = 'healthcare';
    case help = 'help';
    case helsinki = 'helsinki';
    case here = 'here';
    case hermes = 'hermes';

    #[NotAssigned]
    case hgtv = 'hgtv';
    case hiphop = 'hiphop';
    case hisamitsu = 'hisamitsu';
    case hitachi = 'hitachi';
    case hiv = 'hiv';
    case hkt = 'hkt';
    case hmrah_arabic = 'همراه';
    case hockey = 'hockey';
    case holdings = 'holdings';
    case holiday = 'holiday';
    case homedepot = 'homedepot';
    case homegoods = 'homegoods';
    case homes = 'homes';
    case homesense = 'homesense';
    case honda = 'honda';

    #[NotAssigned]
    case honeywell = 'honeywell';
    case horse = 'horse';
    case hospital = 'hospital';
    case host = 'host';
    case hosting = 'hosting';
    case hot = 'hot';

    #[NotAssigned]
    case hoteles = 'hoteles';
    case hotels = 'hotels';
    case hotmail = 'hotmail';
    case house = 'house';
    case how = 'how';
    case hsbc = 'hsbc';

    #[NotAssigned]
    case htc = 'htc';
    case hughes = 'hughes';
    case hyatt = 'hyatt';
    case hyundai = 'hyundai';
    case ibm = 'ibm';
    case icbc = 'icbc';
    case ice = 'ice';
    case icu = 'icu';
    case ieee = 'ieee';
    case ifm = 'ifm';

    #[NotAssigned]
    case iinet = 'iinet';
    case ikano = 'ikano';
    case imamat = 'imamat';
    case imdb = 'imdb';
    case immo = 'immo';
    case immobilien = 'immobilien';
    case inc = 'inc';
    case industries = 'industries';
    case infiniti = 'infiniti';
    case info = 'info';
    case ing = 'ing';
    case ink = 'ink';
    case institute = 'institute';
    case insurance = 'insurance';
    case insure = 'insure';

    #[NotAssigned]
    case intel = 'intel';
    case international = 'international';
    case intuit = 'intuit';
    case investments = 'investments';
    case ipiranga = 'ipiranga';
    case irish = 'irish';

    #[NotAssigned]
    case iselect = 'iselect';
    case ismaili = 'ismaili';
    case ist = 'ist';
    case istanbul = 'istanbul';
    case itau = 'itau';
    case itv = 'itv';

    #[NotAssigned]
    case iveco = 'iveco';

    #[NotAssigned]
    case iwc = 'iwc';
    case jaguar = 'jaguar';
    case java = 'java';
    case jcb = 'jcb';

    #[NotAssigned]
    case jcp = 'jcp';
    case jeep = 'jeep';
    case jetzt = 'jetzt';
    case jewelry = 'jewelry';
    case ji_gou_han = '机构';
    case ji_tuan_han = '集团';
    case jia_dian_han = '家電';
    case jia_li_da_jiu_dian_han = '嘉里大酒店';
    case jia_li_han = '嘉里';
    case jian_kang_han = '健康';
    case jio = 'jio';

    #[NotAssigned]
    case jlc = 'jlc';
    case jll = 'jll';
    case jmp = 'jmp';
    case jnj = 'jnj';
    case joburg = 'joburg';
    case jot = 'jot';
    case joy = 'joy';
    case jpmorgan = 'jpmorgan';
    case jprs = 'jprs';
    case juegos = 'juegos';
    case juniper = 'juniper';
    case kathwlyk_arabic = 'كاثوليك';
    case katolik_cyrillic = 'католик';
    case kaufen = 'kaufen';
    case kddi = 'kddi';
    case kerryhotels = 'kerryhotels';

    #[NotAssigned]
    case kerrylogistics = 'kerrylogistics';
    case kerryproperties = 'kerryproperties';
    case kfh = 'kfh';
    case khxm_thai = 'คอม';
    case kia = 'kia';
    case kids = 'kids';
    case kim = 'kim';

    #[NotAssigned]
    case kinder = 'kinder';
    case kindle = 'kindle';
    case kitchen = 'kitchen';
    case kiwi = 'kiwi';
    case koeln = 'koeln';
    case kom_cyrillic = 'ком';
    case koma_devanagari = 'कॉम';
    case komatsu = 'komatsu';
    case komu_katakana = 'コム';
    case kosher = 'kosher';
    case kpmg = 'kpmg';
    case kpn = 'kpn';
    case krd = 'krd';
    case kred = 'kred';
    case kuokgroup = 'kuokgroup';
    case kuraudo_katakana = 'クラウド';
    case kwm_arabic = 'كوم';
    case kyoto = 'kyoto';
    case lacaixa = 'lacaixa';

    #[NotAssigned]
    case ladbrokes = 'ladbrokes';
    case lamborghini = 'lamborghini';
    case lamer = 'lamer';

    #[NotAssigned]
    case lancaster = 'lancaster';

    #[NotAssigned]
    case lancia = 'lancia';

    #[NotAssigned]
    case lancome = 'lancome';
    case land = 'land';
    case landrover = 'landrover';
    case lanxess = 'lanxess';
    case lasalle = 'lasalle';
    case lat = 'lat';
    case latino = 'latino';
    case latrobe = 'latrobe';
    case law = 'law';
    case lawyer = 'lawyer';
    case lds = 'lds';
    case lease = 'lease';
    case leclerc = 'leclerc';
    case lefrak = 'lefrak';
    case legal = 'legal';
    case lego = 'lego';
    case lexus = 'lexus';
    case lgbt = 'lgbt';

    #[NotAssigned]
    case liaison = 'liaison';
    case lian_tong_han = '联通';
    case lidl = 'lidl';
    case life = 'life';
    case lifeinsurance = 'lifeinsurance';
    case lifestyle = 'lifestyle';
    case lighting = 'lighting';
    case like = 'like';
    case lilly = 'lilly';
    case limited = 'limited';
    case limo = 'limo';
    case lincoln = 'lincoln';

    #[NotAssigned]
    case linde = 'linde';
    case link = 'link';

    #[NotAssigned]
    case lipsy = 'lipsy';
    case live = 'live';
    case living = 'living';

    #[NotAssigned]
    case lixil = 'lixil';
    case llc = 'llc';
    case llp = 'llp';
    case loan = 'loan';
    case loans = 'loans';
    case locker = 'locker';
    case locus = 'locus';

    #[NotAssigned]
    case loft = 'loft';
    case lol = 'lol';
    case london = 'london';
    case lotte = 'lotte';
    case lotto = 'lotto';
    case love = 'love';
    case lpl = 'lpl';
    case lplfinancial = 'lplfinancial';
    case ltd = 'ltd';
    case ltda = 'ltda';
    case lundbeck = 'lundbeck';

    #[NotAssigned]
    case lupin = 'lupin';
    case luxe = 'luxe';
    case luxury = 'luxury';

    #[NotAssigned]
    case macys = 'macys';
    case madrid = 'madrid';
    case maif = 'maif';
    case maison = 'maison';
    case makeup = 'makeup';
    case man = 'man';
    case management = 'management';
    case mango = 'mango';
    case map = 'map';
    case market = 'market';
    case marketing = 'marketing';
    case markets = 'markets';
    case marriott = 'marriott';
    case marshalls = 'marshalls';

    #[NotAssigned]
    case maserati = 'maserati';
    case mattel = 'mattel';
    case mba = 'mba';

    #[NotAssigned]
    case mcd = 'mcd';

    #[NotAssigned]
    case mcdonalds = 'mcdonalds';
    case mckinsey = 'mckinsey';
    case med = 'med';
    case media = 'media';
    case meet = 'meet';
    case melbourne = 'melbourne';
    case meme = 'meme';
    case memorial = 'memorial';
    case men = 'men';
    case menu = 'menu';

    #[NotAssigned]
    case meo = 'meo';
    case merckmsd = 'merckmsd';

    #[NotAssigned]
    case metlife = 'metlife';
    case miami = 'miami';
    case microsoft = 'microsoft';
    case min_na_hiragana = 'みんな';
    case mini = 'mini';
    case mint = 'mint';
    case mit = 'mit';
    case mitsubishi = 'mitsubishi';
    case mlb = 'mlb';
    case mls = 'mls';
    case mma = 'mma';
    case mobi = 'mobi';
    case mobile = 'mobile';

    #[NotAssigned]
    case mobily = 'mobily';
    case moda = 'moda';
    case moe = 'moe';
    case moi = 'moi';
    case mom = 'mom';
    case monash = 'monash';
    case money = 'money';
    case monster = 'monster';

    #[NotAssigned]
    case montblanc = 'montblanc';

    #[NotAssigned]
    case mopar = 'mopar';
    case mormon = 'mormon';
    case mortgage = 'mortgage';
    case moscow = 'moscow';
    case moskva_cyrillic = 'москва';
    case moto = 'moto';
    case motorcycles = 'motorcycles';
    case mov = 'mov';
    case movie = 'movie';

    #[NotAssigned]
    case movistar = 'movistar';
    case msd = 'msd';
    case mtn = 'mtn';

    #[NotAssigned]
    case mtpc = 'mtpc';
    case mtr = 'mtr';
    case music = 'music';

    #[NotAssigned]
    case mutual = 'mutual';

    #[NotAssigned]
    case mutuelle = 'mutuelle';

    #[NotAssigned]
    case mwbayly_arabic = 'موبايلي';
    case mwq_arabic = 'موقع';
    case nab = 'nab';

    #[NotAssigned]
    case nadex = 'nadex';
    case nagoya = 'nagoya';

    #[NotAssigned]
    case nationwide = 'nationwide';

    #[NotAssigned]
    case natura = 'natura';
    case navy = 'navy';
    case nba = 'nba';
    case nec = 'nec';
    case net = 'net';
    case neta_devanagari = 'नेट';
    case netbank = 'netbank';
    case netflix = 'netflix';
    case network = 'network';
    case neustar = 'neustar';
    case new = 'new';

    #[NotAssigned]
    case newholland = 'newholland';
    case news = 'news';
    case next = 'next';
    case nextdirect = 'nextdirect';
    case nexus = 'nexus';
    case nfl = 'nfl';
    case ngo = 'ngo';
    case nhk = 'nhk';
    case nico = 'nico';
    case nike = 'nike';
    case nikon = 'nikon';
    case ninja = 'ninja';
    case nissan = 'nissan';
    case nissay = 'nissay';
    case nokia = 'nokia';

    #[NotAssigned]
    case northwesternmutual = 'northwesternmutual';
    case norton = 'norton';
    case now = 'now';
    case nowruz = 'nowruz';
    case nowtv = 'nowtv';
    case nra = 'nra';
    case nrw = 'nrw';
    case ntt = 'ntt';

    #[NotAssigned]
    case nuo_ji_ya_han = '诺基亚';
    case nyc = 'nyc';
    case obi = 'obi';
    case observer = 'observer';

    #[NotAssigned]
    case off = 'off';
    case office = 'office';
    case okinawa = 'okinawa';
    case olayan = 'olayan';
    case olayangroup = 'olayangroup';

    #[NotAssigned]
    case oldnavy = 'oldnavy';
    case ollo = 'ollo';
    case omega = 'omega';
    case one = 'one';
    case ong = 'ong';
    case onl = 'onl';
    case onlajn_cyrillic = 'онлайн';
    case online = 'online';

    #[NotAssigned]
    case onyourside = 'onyourside';
    case ooo = 'ooo';
    case open = 'open';
    case oracle = 'oracle';
    case orange = 'orange';
    case org = 'org';
    case org_cyrillic = 'орг';
    case organic = 'organic';

    #[NotAssigned]
    case orientexpress = 'orientexpress';
    case origins = 'origins';
    case osaka = 'osaka';
    case otsuka = 'otsuka';
    case ott = 'ott';
    case ovh = 'ovh';
    case page = 'page';

    #[NotAssigned]
    case pamperedchef = 'pamperedchef';
    case panasonic = 'panasonic';

    #[NotAssigned]
    case panerai = 'panerai';
    case paris = 'paris';
    case pars = 'pars';
    case partners = 'partners';
    case parts = 'parts';
    case party = 'party';

    #[NotAssigned]
    case passagens = 'passagens';
    case pay = 'pay';
    case pccw = 'pccw';
    case pet = 'pet';
    case pfizer = 'pfizer';
    case pharmacy = 'pharmacy';
    case phd = 'phd';
    case philips = 'philips';
    case phone = 'phone';
    case photo = 'photo';
    case photography = 'photography';
    case photos = 'photos';
    case physio = 'physio';

    #[NotAssigned]
    case piaget = 'piaget';
    case pics = 'pics';
    case pictet = 'pictet';
    case pictures = 'pictures';
    case pid = 'pid';
    case pin = 'pin';
    case ping = 'ping';
    case pink = 'pink';
    case pioneer = 'pioneer';
    case pizza = 'pizza';
    case place = 'place';
    case play = 'play';
    case playstation = 'playstation';
    case plumbing = 'plumbing';
    case plus = 'plus';
    case pnc = 'pnc';
    case pohl = 'pohl';
    case pointo_katakana = 'ポイント';
    case poker = 'poker';
    case politie = 'politie';
    case porn = 'porn';

    #[NotAssigned]
    case pramerica = 'pramerica';
    case praxi = 'praxi';
    case press = 'press';
    case prime = 'prime';
    case prod = 'prod';
    case productions = 'productions';
    case prof = 'prof';
    case progressive = 'progressive';
    case promo = 'promo';
    case properties = 'properties';
    case property = 'property';
    case protection = 'protection';
    case pru = 'pru';
    case prudential = 'prudential';
    case pub = 'pub';
    case pwc = 'pwc';
    case qi_ye_han = '企业';
    case qpon = 'qpon';
    case quebec = 'quebec';
    case quest = 'quest';

    #[NotAssigned]
    case qvc = 'qvc';
    case qwm_hebrew = 'קום';
    case racing = 'racing';
    case radio = 'radio';

    #[NotAssigned]
    case raid = 'raid';
    case rb_arabic = 'عرب';
    case read = 'read';
    case realestate = 'realestate';
    case realtor = 'realtor';
    case realty = 'realty';
    case recipes = 'recipes';
    case red = 'red';
    case redstone = 'redstone';
    case redumbrella = 'redumbrella';
    case rehab = 'rehab';
    case reise = 'reise';
    case reisen = 'reisen';
    case reit = 'reit';
    case reliance = 'reliance';
    case ren = 'ren';
    case rent = 'rent';
    case rentals = 'rentals';
    case repair = 'repair';
    case report = 'report';
    case republican = 'republican';
    case rest = 'rest';
    case restaurant = 'restaurant';
    case review = 'review';
    case reviews = 'reviews';
    case rexroth = 'rexroth';
    case rich = 'rich';
    case richardli = 'richardli';
    case ricoh = 'ricoh';

    #[NotAssigned]
    case rightathome = 'rightathome';
    case ril = 'ril';
    case rio = 'rio';
    case rip = 'rip';

    #[NotAssigned]
    case rmit = 'rmit';

    #[NotAssigned]
    case rocher = 'rocher';
    case rocks = 'rocks';
    case rodeo = 'rodeo';
    case rogers = 'rogers';
    case room = 'room';
    case rsvp = 'rsvp';
    case rugby = 'rugby';
    case ruhr = 'ruhr';
    case run = 'run';
    case rus_cyrillic = 'рус';
    case rwe = 'rwe';
    case ryukyu = 'ryukyu';
    case saarland = 'saarland';
    case safe = 'safe';
    case safety = 'safety';
    case sajt_cyrillic = 'сайт';
    case sakura = 'sakura';
    case sale = 'sale';
    case salon = 'salon';
    case samsclub = 'samsclub';
    case samseong_hangul = '삼성';
    case samsung = 'samsung';
    case sandvik = 'sandvik';
    case sandvikcoromant = 'sandvikcoromant';
    case sangathana_devanagari = 'संगठन';
    case sanofi = 'sanofi';
    case sap = 'sap';

    #[NotAssigned]
    case sapo = 'sapo';
    case sarl = 'sarl';
    case sas = 'sas';
    case save = 'save';
    case saxo = 'saxo';
    case sbi = 'sbi';
    case sbs = 'sbs';

    #[NotAssigned]
    case sca = 'sca';
    case scb = 'scb';
    case schaeffler = 'schaeffler';
    case schmidt = 'schmidt';
    case scholarships = 'scholarships';
    case school = 'school';
    case schule = 'schule';
    case schwarz = 'schwarz';
    case science = 'science';

    #[NotAssigned]
    case scjohnson = 'scjohnson';

    #[NotAssigned]
    case scor = 'scor';
    case scot = 'scot';
    case search = 'search';
    case seat = 'seat';
    case secure = 'secure';
    case security = 'security';
    case seek = 'seek';
    case select = 'select';
    case sener = 'sener';
    case seru_katakana = 'セール';
    case services = 'services';

    #[NotAssigned]
    case ses = 'ses';
    case seven = 'seven';
    case sew = 'sew';
    case sex = 'sex';
    case sexy = 'sexy';
    case sfr = 'sfr';
    case shang_biao_han = '商标';
    case shang_cheng_han = '商城';
    case shang_dian_han = '商店';
    case shangrila = 'shangrila';
    case sharp = 'sharp';

    #[NotAssigned]
    case shaw = 'shaw';
    case shbkt_arabic = 'شبكة';
    case shell = 'shell';
    case shi_jie_han = '世界';
    case shi_pin_han = '食品';
    case shi_shang_han = '时尚';
    case shia = 'shia';
    case shiksha = 'shiksha';
    case shoes = 'shoes';
    case shop = 'shop';
    case shopping = 'shopping';

    #[NotAssigned]
    case shou_biao_han = '手表';
    case shou_ji_han = '手机';
    case shouji = 'shouji';
    case show = 'show';

    #[NotAssigned]
    case showtime = 'showtime';

    #[NotAssigned]
    case shriram = 'shriram';
    case shu_ji_han = '書籍';
    case silk = 'silk';
    case sina = 'sina';
    case singles = 'singles';
    case site = 'site';
    case ski = 'ski';
    case skin = 'skin';
    case sky = 'sky';
    case skype = 'skype';
    case sling = 'sling';
    case smart = 'smart';
    case smile = 'smile';
    case sncf = 'sncf';
    case soccer = 'soccer';
    case social = 'social';
    case softbank = 'softbank';
    case software = 'software';
    case sohu = 'sohu';
    case solar = 'solar';
    case solutions = 'solutions';
    case song = 'song';
    case sony = 'sony';
    case soy = 'soy';
    case spa = 'spa';
    case space = 'space';

    #[NotAssigned]
    case spiegel = 'spiegel';
    case sport = 'sport';
    case spot = 'spot';

    #[NotAssigned]
    case spreadbetting = 'spreadbetting';
    case srl = 'srl';

    #[NotAssigned]
    case srt = 'srt';
    case stada = 'stada';
    case staples = 'staples';
    case star = 'star';

    #[NotAssigned]
    case starhub = 'starhub';
    case statebank = 'statebank';
    case statefarm = 'statefarm';

    #[NotAssigned]
    case statoil = 'statoil';
    case stc = 'stc';
    case stcgroup = 'stcgroup';
    case stockholm = 'stockholm';
    case storage = 'storage';
    case store = 'store';
    case stream = 'stream';
    case studio = 'studio';
    case study = 'study';
    case style = 'style';
    case sucks = 'sucks';
    case supplies = 'supplies';
    case supply = 'supply';
    case support = 'support';
    case surf = 'surf';
    case surgery = 'surgery';
    case sutoa_katakana = 'ストア';
    case suzuki = 'suzuki';
    case swatch = 'swatch';

    #[NotAssigned]
    case swiftcover = 'swiftcover';
    case swiss = 'swiss';
    case sydney = 'sydney';

    #[NotAssigned]
    case symantec = 'symantec';
    case systems = 'systems';
    case tab = 'tab';
    case taipei = 'taipei';
    case talk = 'talk';
    case taobao = 'taobao';
    case target = 'target';
    case tatamotors = 'tatamotors';
    case tatar = 'tatar';
    case tattoo = 'tattoo';
    case tax = 'tax';
    case taxi = 'taxi';
    case tci = 'tci';
    case tdk = 'tdk';
    case team = 'team';
    case tech = 'tech';
    case technology = 'technology';

    #[NotAssigned]
    case telecity = 'telecity';

    #[NotAssigned]
    case telefonica = 'telefonica';
    case temasek = 'temasek';
    case tennis = 'tennis';
    case teva = 'teva';
    case thd = 'thd';
    case theater = 'theater';
    case theatre = 'theatre';
    case tiaa = 'tiaa';
    case tian_zhu_jiao_han = '天主教';
    case tickets = 'tickets';
    case tienda = 'tienda';

    #[NotAssigned]
    case tiffany = 'tiffany';
    case tips = 'tips';
    case tires = 'tires';
    case tirol = 'tirol';
    case tjmaxx = 'tjmaxx';
    case tjx = 'tjx';
    case tkmaxx = 'tkmaxx';
    case tmall = 'tmall';
    case today = 'today';
    case tokyo = 'tokyo';
    case tong_fan_han = '通販';
    case tools = 'tools';
    case top = 'top';
    case toray = 'toray';
    case toshiba = 'toshiba';
    case total = 'total';
    case tours = 'tours';
    case town = 'town';
    case toyota = 'toyota';
    case toys = 'toys';
    case trade = 'trade';
    case trading = 'trading';
    case training = 'training';

    #[NotAssigned]
    case travelchannel = 'travelchannel';
    case travelers = 'travelers';
    case travelersinsurance = 'travelersinsurance';
    case trust = 'trust';
    case trv = 'trv';
    case tube = 'tube';
    case tui = 'tui';
    case tunes = 'tunes';
    case tushu = 'tushu';
    case tvs = 'tvs';
    case ubank = 'ubank';
    case ubs = 'ubs';

    #[NotAssigned]
    case uconnect = 'uconnect';
    case unicom = 'unicom';
    case university = 'university';
    case uno = 'uno';
    case uol = 'uol';
    case ups = 'ups';
    case vacations = 'vacations';
    case vana = 'vana';
    case vanguard = 'vanguard';
    case vegas = 'vegas';
    case ventures = 'ventures';
    case verisign = 'verisign';
    case vermogensberater = 'vermögensberater';
    case vermogensberatung = 'vermögensberatung';
    case versicherung = 'versicherung';
    case vet = 'vet';
    case viajes = 'viajes';
    case video = 'video';
    case vig = 'vig';
    case viking = 'viking';
    case villas = 'villas';
    case vin = 'vin';
    case vip = 'vip';
    case virgin = 'virgin';
    case visa = 'visa';
    case vision = 'vision';

    #[NotAssigned]
    case vista = 'vista';

    #[NotAssigned]
    case vistaprint = 'vistaprint';
    case viva = 'viva';
    case vivo = 'vivo';
    case vlaanderen = 'vlaanderen';
    case vodka = 'vodka';

    #[NotAssigned]
    case volkswagen = 'volkswagen';
    case volvo = 'volvo';
    case vote = 'vote';
    case voting = 'voting';
    case voto = 'voto';
    case voyage = 'voyage';

    #[NotAssigned]
    case vuelos = 'vuelos';
    case wales = 'wales';
    case walmart = 'walmart';
    case walter = 'walter';
    case wang = 'wang';
    case wang_dian_han = '网店';
    case wang_luo_han = '网络';
    case wang_zhan_han = '网站';
    case wang_zhi_han = '网址';
    case wanggou = 'wanggou';

    #[NotAssigned]
    case warman = 'warman';
    case watch = 'watch';
    case watches = 'watches';
    case weather = 'weather';
    case weatherchannel = 'weatherchannel';
    case webcam = 'webcam';
    case weber = 'weber';
    case website = 'website';
    case wed = 'wed';
    case wedding = 'wedding';
    case wei_bo_han = '微博';
    case weibo = 'weibo';
    case weir = 'weir';
    case whoswho = 'whoswho';
    case wien = 'wien';
    case wiki = 'wiki';
    case williamhill = 'williamhill';
    case win = 'win';
    case windows = 'windows';
    case wine = 'wine';
    case winners = 'winners';
    case wme = 'wme';
    case wo_ai_ni_han = '我爱你';
    case wolterskluwer = 'wolterskluwer';
    case woodside = 'woodside';
    case work = 'work';
    case works = 'works';
    case world = 'world';
    case wow = 'wow';
    case wtc = 'wtc';
    case wtf = 'wtf';
    case xbox = 'xbox';
    case xerox = 'xerox';

    #[NotAssigned]
    case xfinity = 'xfinity';
    case xiang_ge_li_la_han = '香格里拉';
    case xihuan = 'xihuan';
    case xin = 'xin';
    case xin_wen_han = '新闻';
    case xin_xi_han = '信息';

    #[NotAssigned]
    case xperia = 'xperia';
    case xyz = 'xyz';
    case ya_ma_xun_han = '亚马逊';
    case yachts = 'yachts';
    case yahoo = 'yahoo';
    case yamaxun = 'yamaxun';
    case yandex = 'yandex';
    case yi_dong_han = '移动';
    case yodobashi = 'yodobashi';
    case yoga = 'yoga';
    case yokohama = 'yokohama';
    case you = 'you';
    case you_xi_han = '游戏';
    case youtube = 'youtube';
    case yu_le_han = '娱乐';
    case yun = 'yun';
    case zai_xian_han = '在线';
    case zappos = 'zappos';
    case zara = 'zara';
    case zero = 'zero';
    case zhao_pin_han = '招聘';
    case zheng_fu_han = '政府';
    case zheng_wu_han = '政务';
    case zhong_wen_wang_han = '中文网';
    case zhong_xin_han = '中信';

    #[NotAssigned]
    case zhu_bao_han = '珠宝';
    case zip = 'zip';

    #[NotAssigned]
    case zippo = 'zippo';
    case zone = 'zone';
    case zu_zhi_ji_gou_han = '组织机构';
    case zuerich = 'zuerich';

    public function isAssigned(): bool {
        return BackedEnum::hasCaseAttribute($this, NotAssigned::class) === false;
    }
}

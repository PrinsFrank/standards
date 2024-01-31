<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

/** @source https://www.iana.org/domains/root/db */
enum GenericTLD: string
{
    case aaa = 'aaa';
    case aarp = 'aarp';
    case abb = 'abb';
    case abbott = 'abbott';
    case abbvie = 'abbvie';
    case abc = 'abc';
    case able = 'able';
    case abogado = 'abogado';
    case abudhabi = 'abudhabi';
    case abwzby = 'ابوظبي';
    case academy = 'academy';
    case accenture = 'accenture';
    case accountant = 'accountant';
    case accountants = 'accountants';
    case aco = 'aco';
    case actor = 'actor';
    case ads = 'ads';
    case adult = 'adult';
    case aeg = 'aeg';
    case aetna = 'aetna';
    case afl = 'afl';
    case africa = 'africa';
    case agakhan = 'agakhan';
    case agency = 'agency';
    case aig = 'aig';
    case airbus = 'airbus';
    case airforce = 'airforce';
    case airtel = 'airtel';
    case akdn = 'akdn';
    case alibaba = 'alibaba';
    case alipay = 'alipay';
    case allfinanz = 'allfinanz';
    case allstate = 'allstate';
    case ally = 'ally';
    case allyan = 'العليان';
    case alsace = 'alsace';
    case alstom = 'alstom';
    case amazon = 'amazon';
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
    case aramkw = 'ارامكو';
    case archi = 'archi';
    case army = 'army';
    case art = 'art';
    case arte = 'arte';
    case asda = 'asda';
    case associates = 'associates';
    case athleta = 'athleta';
    case attorney = 'attorney';
    case auction = 'auction';
    case audi = 'audi';
    case audible = 'audible';
    case audio = 'audio';
    case auspost = 'auspost';
    case author = 'author';
    case auto = 'auto';
    case autos = 'autos';
    case avianca = 'avianca';
    case aws = 'aws';
    case axa = 'axa';
    case azure = 'azure';
    case ba_gua = '八卦';
    case baby = 'baby';
    case baidu = 'baidu';
    case banamex = 'banamex';
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
    case bazar = 'بازار';
    case bbc = 'bbc';
    case bbt = 'bbt';
    case bbva = 'bbva';
    case bcg = 'bcg';
    case bcn = 'bcn';
    case beats = 'beats';
    case beauty = 'beauty';
    case beer = 'beer';
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
    case blockbuster = 'blockbuster';
    case blog = 'blog';
    case bloomberg = 'bloomberg';
    case blue = 'blue';
    case bms = 'bms';
    case bmw = 'bmw';
    case bnpparibas = 'bnpparibas';
    case boats = 'boats';
    case boehringer = 'boehringer';
    case bofa = 'bofa';
    case bom = 'bom';
    case bond = 'bond';
    case boo = 'boo';
    case book = 'book';
    case booking = 'booking';
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
    case build = 'build';
    case builders = 'builders';
    case business = 'business';
    case buy = 'buy';
    case buzz = 'buzz';
    case bytk = 'بيتك';
    case bzh = 'bzh';
    case cab = 'cab';
    case cafe = 'cafe';
    case cal = 'cal';
    case call = 'call';
    case calvinklein = 'calvinklein';
    case cam = 'cam';
    case camera = 'camera';
    case camp = 'camp';
    case can_ting = '餐厅';
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
    case casa = 'casa';
    case case = 'case';
    case cash = 'cash';
    case casino = 'casino';
    case catering = 'catering';
    case catholic = 'catholic';
    case cba = 'cba';
    case cbn = 'cbn';
    case cbre = 'cbre';
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
    case christmas = 'christmas';
    case chrome = 'chrome';
    case church = 'church';
    case ci_shan = '慈善';
    case cipriani = 'cipriani';
    case circle = 'circle';
    case cisco = 'cisco';
    case citadel = 'citadel';
    case citi = 'citi';
    case citic = 'citic';
    case city = 'city';
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
    case cuisinella = 'cuisinella';
    case cymru = 'cymru';
    case cyou = 'cyou';
    case da_na = '大拿';
    case dabur = 'dabur';
    case dad = 'dad';
    case dan_ma_xi = '淡马锡';
    case dance = 'dance';
    case daskeom = '닷컴';
    case dasnes = '닷넷';
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
    case deti = 'дети';
    case dev = 'dev';
    case dhl = 'dhl';
    case diamonds = 'diamonds';
    case dian_kan = '点看';
    case dian_xun_ying_ke = '電訊盈科';
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
    case dog = 'dog';
    case domains = 'domains';
    case dot = 'dot';
    case download = 'download';
    case drive = 'drive';
    case dtv = 'dtv';
    case dubai = 'dubai';
    case dunlop = 'dunlop';
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
    case energy = 'energy';
    case engineer = 'engineer';
    case engineering = 'engineering';
    case enterprises = 'enterprises';
    case epson = 'epson';
    case equipment = 'equipment';
    case ericsson = 'ericsson';
    case erni = 'erni';
    case esq = 'esq';
    case estate = 'estate';
    case eurovision = 'eurovision';
    case eus = 'eus';
    case events = 'events';
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
    case fasshon = 'ファッション';
    case fast = 'fast';
    case fedex = 'fedex';
    case feedback = 'feedback';
    case fei_li_pu = '飞利浦';
    case ferrari = 'ferrari';
    case ferrero = 'ferrero';
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
    case fly = 'fly';
    case foo = 'foo';
    case food = 'food';
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
    case frontier = 'frontier';
    case ftr = 'ftr';
    case fu_shan = '佛山';
    case fujitsu = 'fujitsu';
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
    case gong_si = '公司';
    case gong_yi = '公益';
    case goo = 'goo';
    case goodyear = 'goodyear';
    case goog = 'goog';
    case google = 'google';
    case gop = 'gop';
    case got = 'got';
    case gou_wu = '购物';
    case grainger = 'grainger';
    case graphics = 'graphics';
    case gratis = 'gratis';
    case green = 'green';
    case gripe = 'gripe';
    case grocery = 'grocery';
    case group = 'group';
    case gu_ge = '谷歌';
    case guang_dong = '广东';
    case guardian = 'guardian';
    case gucci = 'gucci';
    case guge = 'guge';
    case guguru = 'グーグル';
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
    case hiphop = 'hiphop';
    case hisamitsu = 'hisamitsu';
    case hitachi = 'hitachi';
    case hiv = 'hiv';
    case hkt = 'hkt';
    case hmrah = 'همراه';
    case hockey = 'hockey';
    case holdings = 'holdings';
    case holiday = 'holiday';
    case homedepot = 'homedepot';
    case homegoods = 'homegoods';
    case homes = 'homes';
    case homesense = 'homesense';
    case honda = 'honda';
    case horse = 'horse';
    case hospital = 'hospital';
    case host = 'host';
    case hosting = 'hosting';
    case hot = 'hot';
    case hotels = 'hotels';
    case hotmail = 'hotmail';
    case house = 'house';
    case how = 'how';
    case hsbc = 'hsbc';
    case hughes = 'hughes';
    case hyatt = 'hyatt';
    case hyundai = 'hyundai';
    case ibm = 'ibm';
    case icbc = 'icbc';
    case ice = 'ice';
    case icu = 'icu';
    case ieee = 'ieee';
    case ifm = 'ifm';
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
    case international = 'international';
    case intuit = 'intuit';
    case investments = 'investments';
    case ipiranga = 'ipiranga';
    case irish = 'irish';
    case ismaili = 'ismaili';
    case ist = 'ist';
    case istanbul = 'istanbul';
    case itau = 'itau';
    case itv = 'itv';
    case jaguar = 'jaguar';
    case java = 'java';
    case jcb = 'jcb';
    case jeep = 'jeep';
    case jetzt = 'jetzt';
    case jewelry = 'jewelry';
    case ji_gou = '机构';
    case ji_tuan = '集团';
    case jia_dian = '家電';
    case jia_li = '嘉里';
    case jia_li_da_jiu_dian = '嘉里大酒店';
    case jian_kang = '健康';
    case jio = 'jio';
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
    case kathwlyk = 'كاثوليك';
    case katolik = 'католик';
    case kaufen = 'kaufen';
    case kddi = 'kddi';
    case kerryhotels = 'kerryhotels';
    case kerrylogistics = 'kerrylogistics';
    case kerryproperties = 'kerryproperties';
    case kfh = 'kfh';
    case khxm = 'คอม';
    case kia = 'kia';
    case kids = 'kids';
    case kim = 'kim';
    case kindle = 'kindle';
    case kitchen = 'kitchen';
    case kiwi = 'kiwi';
    case koeln = 'koeln';
    case kom = 'ком';
    case koma = 'कॉम';
    case komatsu = 'komatsu';
    case komu = 'コム';
    case kosher = 'kosher';
    case kpmg = 'kpmg';
    case kpn = 'kpn';
    case krd = 'krd';
    case kred = 'kred';
    case kuokgroup = 'kuokgroup';
    case kuraudo = 'クラウド';
    case kwm = 'كوم';
    case kyoto = 'kyoto';
    case lacaixa = 'lacaixa';
    case lamborghini = 'lamborghini';
    case lamer = 'lamer';
    case lancaster = 'lancaster';
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
    case lian_tong = '联通';
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
    case link = 'link';
    case lipsy = 'lipsy';
    case live = 'live';
    case living = 'living';
    case llc = 'llc';
    case llp = 'llp';
    case loan = 'loan';
    case loans = 'loans';
    case locker = 'locker';
    case locus = 'locus';
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
    case luxe = 'luxe';
    case luxury = 'luxury';
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
    case mattel = 'mattel';
    case mba = 'mba';
    case mckinsey = 'mckinsey';
    case med = 'med';
    case media = 'media';
    case meet = 'meet';
    case melbourne = 'melbourne';
    case meme = 'meme';
    case memorial = 'memorial';
    case men = 'men';
    case menu = 'menu';
    case merckmsd = 'merckmsd';
    case miami = 'miami';
    case microsoft = 'microsoft';
    case min_na = 'みんな';
    case mini = 'mini';
    case mint = 'mint';
    case mit = 'mit';
    case mitsubishi = 'mitsubishi';
    case mlb = 'mlb';
    case mls = 'mls';
    case mma = 'mma';
    case mobi = 'mobi';
    case mobile = 'mobile';
    case moda = 'moda';
    case moe = 'moe';
    case moi = 'moi';
    case mom = 'mom';
    case monash = 'monash';
    case money = 'money';
    case monster = 'monster';
    case mormon = 'mormon';
    case mortgage = 'mortgage';
    case moscow = 'moscow';
    case moskva = 'москва';
    case moto = 'moto';
    case motorcycles = 'motorcycles';
    case mov = 'mov';
    case movie = 'movie';
    case msd = 'msd';
    case mtn = 'mtn';
    case mtr = 'mtr';
    case music = 'music';
    case mwq = 'موقع';
    case nab = 'nab';
    case nagoya = 'nagoya';
    case natura = 'natura';
    case navy = 'navy';
    case nba = 'nba';
    case nec = 'nec';
    case net = 'net';
    case neta = 'नेट';
    case netbank = 'netbank';
    case netflix = 'netflix';
    case network = 'network';
    case neustar = 'neustar';
    case new = 'new';
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
    case norton = 'norton';
    case now = 'now';
    case nowruz = 'nowruz';
    case nowtv = 'nowtv';
    case nra = 'nra';
    case nrw = 'nrw';
    case ntt = 'ntt';
    case nyc = 'nyc';
    case obi = 'obi';
    case observer = 'observer';
    case office = 'office';
    case okinawa = 'okinawa';
    case olayan = 'olayan';
    case olayangroup = 'olayangroup';
    case ollo = 'ollo';
    case omega = 'omega';
    case one = 'one';
    case ong = 'ong';
    case onl = 'onl';
    case onlajn = 'онлайн';
    case online = 'online';
    case ooo = 'ooo';
    case open = 'open';
    case oracle = 'oracle';
    case orange = 'orange';
    case org = 'org';
    case organic = 'organic';
    case origins = 'origins';
    case osaka = 'osaka';
    case otsuka = 'otsuka';
    case ott = 'ott';
    case ovh = 'ovh';
    case page = 'page';
    case panasonic = 'panasonic';
    case paris = 'paris';
    case pars = 'pars';
    case partners = 'partners';
    case parts = 'parts';
    case party = 'party';
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
    case pointo = 'ポイント';
    case poker = 'poker';
    case politie = 'politie';
    case porn = 'porn';
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
    case qi_ye = '企业';
    case qpon = 'qpon';
    case quebec = 'quebec';
    case quest = 'quest';
    case qwm = 'קום';
    case racing = 'racing';
    case radio = 'radio';
    case rb = 'عرب';
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
    case ril = 'ril';
    case rio = 'rio';
    case rip = 'rip';
    case rocks = 'rocks';
    case rodeo = 'rodeo';
    case rogers = 'rogers';
    case room = 'room';
    case rsvp = 'rsvp';
    case rugby = 'rugby';
    case ruhr = 'ruhr';
    case run = 'run';
    case rus = 'рус';
    case rwe = 'rwe';
    case ryukyu = 'ryukyu';
    case saarland = 'saarland';
    case safe = 'safe';
    case safety = 'safety';
    case sajt = 'сайт';
    case sakura = 'sakura';
    case sale = 'sale';
    case salon = 'salon';
    case samsclub = 'samsclub';
    case samseong = '삼성';
    case samsung = 'samsung';
    case sandvik = 'sandvik';
    case sandvikcoromant = 'sandvikcoromant';
    case sangathana = 'संगठन';
    case sanofi = 'sanofi';
    case sap = 'sap';
    case sarl = 'sarl';
    case sas = 'sas';
    case save = 'save';
    case saxo = 'saxo';
    case sbi = 'sbi';
    case sbs = 'sbs';
    case scb = 'scb';
    case schaeffler = 'schaeffler';
    case schmidt = 'schmidt';
    case scholarships = 'scholarships';
    case school = 'school';
    case schule = 'schule';
    case schwarz = 'schwarz';
    case science = 'science';
    case scot = 'scot';
    case search = 'search';
    case seat = 'seat';
    case secure = 'secure';
    case security = 'security';
    case seek = 'seek';
    case select = 'select';
    case sener = 'sener';
    case seru = 'セール';
    case services = 'services';
    case seven = 'seven';
    case sew = 'sew';
    case sex = 'sex';
    case sexy = 'sexy';
    case sfr = 'sfr';
    case shang_biao = '商标';
    case shang_cheng = '商城';
    case shang_dian = '商店';
    case shangrila = 'shangrila';
    case sharp = 'sharp';
    case shaw = 'shaw';
    case shbkt = 'شبكة';
    case shell = 'shell';
    case shi_jie = '世界';
    case shi_pin = '食品';
    case shi_shang = '时尚';
    case shia = 'shia';
    case shiksha = 'shiksha';
    case shoes = 'shoes';
    case shop = 'shop';
    case shopping = 'shopping';
    case shou_ji = '手机';
    case shouji = 'shouji';
    case show = 'show';
    case shu_ji = '書籍';
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
    case sport = 'sport';
    case spot = 'spot';
    case srl = 'srl';
    case stada = 'stada';
    case staples = 'staples';
    case star = 'star';
    case statebank = 'statebank';
    case statefarm = 'statefarm';
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
    case sutoa = 'ストア';
    case suzuki = 'suzuki';
    case swatch = 'swatch';
    case swiss = 'swiss';
    case sydney = 'sydney';
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
    case temasek = 'temasek';
    case tennis = 'tennis';
    case teva = 'teva';
    case thd = 'thd';
    case theater = 'theater';
    case theatre = 'theatre';
    case tiaa = 'tiaa';
    case tian_zhu_jiao = '天主教';
    case tickets = 'tickets';
    case tienda = 'tienda';
    case tips = 'tips';
    case tires = 'tires';
    case tirol = 'tirol';
    case tjmaxx = 'tjmaxx';
    case tjx = 'tjx';
    case tkmaxx = 'tkmaxx';
    case tmall = 'tmall';
    case today = 'today';
    case tokyo = 'tokyo';
    case tong_fan = '通販';
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
    case viva = 'viva';
    case vivo = 'vivo';
    case vlaanderen = 'vlaanderen';
    case vodka = 'vodka';
    case volvo = 'volvo';
    case vote = 'vote';
    case voting = 'voting';
    case voto = 'voto';
    case voyage = 'voyage';
    case wales = 'wales';
    case walmart = 'walmart';
    case walter = 'walter';
    case wang = 'wang';
    case wang_dian = '网店';
    case wang_luo = '网络';
    case wang_zhan = '网站';
    case wang_zhi = '网址';
    case wanggou = 'wanggou';
    case watch = 'watch';
    case watches = 'watches';
    case weather = 'weather';
    case weatherchannel = 'weatherchannel';
    case webcam = 'webcam';
    case weber = 'weber';
    case website = 'website';
    case wed = 'wed';
    case wedding = 'wedding';
    case wei_bo = '微博';
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
    case wo_ai_ni = '我爱你';
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
    case xfinity = 'xfinity';
    case xiang_ge_li_la = '香格里拉';
    case xihuan = 'xihuan';
    case xin = 'xin';
    case xin_wen = '新闻';
    case xin_xi = '信息';
    case xyz = 'xyz';
    case ya_ma_xun = '亚马逊';
    case yachts = 'yachts';
    case yahoo = 'yahoo';
    case yamaxun = 'yamaxun';
    case yandex = 'yandex';
    case yi_dong = '移动';
    case yodobashi = 'yodobashi';
    case yoga = 'yoga';
    case yokohama = 'yokohama';
    case you = 'you';
    case you_xi = '游戏';
    case youtube = 'youtube';
    case yu_le = '娱乐';
    case yun = 'yun';
    case zai_xian = '在线';
    case zappos = 'zappos';
    case zara = 'zara';
    case zero = 'zero';
    case zhao_pin = '招聘';
    case zheng_fu = '政府';
    case zheng_wu = '政务';
    case zhong_wen_wang = '中文网';
    case zhong_xin = '中信';
    case zip = 'zip';
    case zone = 'zone';
    case zu_zhi_ji_gou = '组织机构';
    case zuerich = 'zuerich';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case abarth = 'abarth';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case active = 'active';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case adac = 'adac';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case afamilycompany = 'afamilycompany';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case aigo = 'aigo';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case alfaromeo = 'alfaromeo';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case atsalat = 'اتصالات';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case bananarepublic = 'bananarepublic';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case blanco = 'blanco';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case bnl = 'bnl';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case boots = 'boots';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case budapest = 'budapest';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case bugatti = 'bugatti';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case cancerresearch = 'cancerresearch';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case cartier = 'cartier';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case caseih = 'caseih';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case cbs = 'cbs';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case ceb = 'ceb';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case chloe = 'chloe';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case chrysler = 'chrysler';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case cityeats = 'cityeats';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case cookingchannel = 'cookingchannel';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case csc = 'csc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case da_zhong_qi_che = '大众汽车';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case dodge = 'dodge';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case doha = 'doha';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case doosan = 'doosan';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case duck = 'duck';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case duns = 'duns';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case epost = 'epost';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case esurance = 'esurance';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case etisalat = 'etisalat';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case everbank = 'everbank';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case fiat = 'fiat';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case flsmidth = 'flsmidth';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case foodnetwork = 'foodnetwork';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case frontdoor = 'frontdoor';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case fujixerox = 'fujixerox';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case glade = 'glade';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case gong_xing = '工行';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case goodhands = 'goodhands';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case hgtv = 'hgtv';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case honeywell = 'honeywell';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case hoteles = 'hoteles';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case htc = 'htc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case iinet = 'iinet';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case intel = 'intel';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case iselect = 'iselect';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case iveco = 'iveco';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case iwc = 'iwc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case jcp = 'jcp';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case jlc = 'jlc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case kinder = 'kinder';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case ladbrokes = 'ladbrokes';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case lancia = 'lancia';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case lancome = 'lancome';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case liaison = 'liaison';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case linde = 'linde';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case lixil = 'lixil';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case loft = 'loft';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case lupin = 'lupin';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case macys = 'macys';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case maserati = 'maserati';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mcd = 'mcd';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mcdonalds = 'mcdonalds';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case meo = 'meo';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case metlife = 'metlife';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mobily = 'mobily';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case montblanc = 'montblanc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mopar = 'mopar';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case movistar = 'movistar';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mtpc = 'mtpc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mutual = 'mutual';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mutuelle = 'mutuelle';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case mwbayly = 'موبايلي';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case nadex = 'nadex';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case nationwide = 'nationwide';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case newholland = 'newholland';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case northwesternmutual = 'northwesternmutual';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case nuo_ji_ya = '诺基亚';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case off = 'off';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case oldnavy = 'oldnavy';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case onyourside = 'onyourside';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case orientexpress = 'orientexpress';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case pamperedchef = 'pamperedchef';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case panerai = 'panerai';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case passagens = 'passagens';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case piaget = 'piaget';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case qvc = 'qvc';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case raid = 'raid';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case rightathome = 'rightathome';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case rmit = 'rmit';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case rocher = 'rocher';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case sapo = 'sapo';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case sca = 'sca';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case scjohnson = 'scjohnson';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case scor = 'scor';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case ses = 'ses';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case shou_biao = '手表';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case showtime = 'showtime';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case shriram = 'shriram';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case spiegel = 'spiegel';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case spreadbetting = 'spreadbetting';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case srt = 'srt';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case starhub = 'starhub';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case statoil = 'statoil';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case swiftcover = 'swiftcover';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case symantec = 'symantec';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case telecity = 'telecity';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case telefonica = 'telefonica';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case tiffany = 'tiffany';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case travelchannel = 'travelchannel';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case uconnect = 'uconnect';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case vista = 'vista';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case vistaprint = 'vistaprint';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case volkswagen = 'volkswagen';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case vuelos = 'vuelos';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case warman = 'warman';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case xperia = 'xperia';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case zhu_bao = '珠宝';

    /** @deprecated Has been removed from the specification but is maintained here for Backwards Compatibility reasons */
    case zippo = 'zippo';
}

<?php declare(strict_types=1);

namespace PrinsFrank\Standards\URIScheme;

use PrinsFrank\Enums\BackedEnum;
use PrinsFrank\Standards\ShouldNotHappenException;
use PrinsFrank\Standards\URIScheme\Attributes\Status;

/**
 * @source https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\URISchemeMapping
 */
enum URIScheme: string {
    #[Status(URISchemeStatus::Permanent)]
    case aaa = 'aaa';

    #[Status(URISchemeStatus::Permanent)]
    case aaas = 'aaas';

    #[Status(URISchemeStatus::Permanent)]
    case about = 'about';

    #[Status(URISchemeStatus::Permanent)]
    case acap = 'acap';

    #[Status(URISchemeStatus::Permanent)]
    case acct = 'acct';

    #[Status(URISchemeStatus::Provisional)]
    case acd = 'acd';

    #[Status(URISchemeStatus::Provisional)]
    case acr = 'acr';

    #[Status(URISchemeStatus::Provisional)]
    case adiumxtra = 'adiumxtra';

    #[Status(URISchemeStatus::Provisional)]
    case adt = 'adt';

    #[Status(URISchemeStatus::Provisional)]
    case afp = 'afp';

    #[Status(URISchemeStatus::Provisional)]
    case afs = 'afs';

    #[Status(URISchemeStatus::Provisional)]
    case aim = 'aim';

    #[Status(URISchemeStatus::Provisional)]
    case amss = 'amss';

    #[Status(URISchemeStatus::Provisional)]
    case android = 'android';

    #[Status(URISchemeStatus::Provisional)]
    case appdata = 'appdata';

    #[Status(URISchemeStatus::Provisional)]
    case apt = 'apt';

    #[Status(URISchemeStatus::Provisional)]
    case ar = 'ar';

    #[Status(URISchemeStatus::Provisional)]
    case ari = 'ari';

    #[Status(URISchemeStatus::Provisional)]
    case ark = 'ark';

    #[Status(URISchemeStatus::Provisional)]
    case at = 'at';

    #[Status(URISchemeStatus::Provisional)]
    case attachment = 'attachment';

    #[Status(URISchemeStatus::Provisional)]
    case aw = 'aw';

    #[Status(URISchemeStatus::Provisional)]
    case barion = 'barion';

    #[Status(URISchemeStatus::Historical)]
    case bb = 'bb';

    #[Status(URISchemeStatus::Provisional)]
    case beshare = 'beshare';

    #[Status(URISchemeStatus::Provisional)]
    case bitcoin = 'bitcoin';

    #[Status(URISchemeStatus::Provisional)]
    case bitcoincash = 'bitcoincash';

    #[Status(URISchemeStatus::Provisional)]
    case bl = 'bl';

    #[Status(URISchemeStatus::Provisional)]
    case blob = 'blob';

    #[Status(URISchemeStatus::Provisional)]
    case bluetooth = 'bluetooth';

    #[Status(URISchemeStatus::Provisional)]
    case bolo = 'bolo';

    #[Status(URISchemeStatus::Provisional)]
    case brid = 'brid';

    #[Status(URISchemeStatus::Provisional)]
    case browserext = 'browserext';

    #[Status(URISchemeStatus::Provisional)]
    case cabal = 'cabal';

    #[Status(URISchemeStatus::Provisional)]
    case calculator = 'calculator';

    #[Status(URISchemeStatus::Provisional)]
    case callto = 'callto';

    #[Status(URISchemeStatus::Permanent)]
    case cap = 'cap';

    #[Status(URISchemeStatus::Provisional)]
    case cast = 'cast';

    #[Status(URISchemeStatus::Provisional)]
    case casts = 'casts';

    #[Status(URISchemeStatus::Provisional)]
    case chrome = 'chrome';

    #[Status(URISchemeStatus::Provisional)]
    case chrome_extension = 'chrome-extension';

    #[Status(URISchemeStatus::Permanent)]
    case cid = 'cid';

    #[Status(URISchemeStatus::Permanent)]
    case coap = 'coap';

    #[Status(URISchemeStatus::Permanent)]
    case coap_tcp = 'coap+tcp';

    #[Status(URISchemeStatus::Permanent)]
    case coap_ws = 'coap+ws';

    #[Status(URISchemeStatus::Permanent)]
    case coaps = 'coaps';

    #[Status(URISchemeStatus::Permanent)]
    case coaps_tcp = 'coaps+tcp';

    #[Status(URISchemeStatus::Permanent)]
    case coaps_ws = 'coaps+ws';

    #[Status(URISchemeStatus::Provisional)]
    case com_eventbrite_attendee = 'com-eventbrite-attendee';

    #[Status(URISchemeStatus::Provisional)]
    case content = 'content';

    #[Status(URISchemeStatus::Provisional)]
    case content_type = 'content-type';

    #[Status(URISchemeStatus::Permanent)]
    case crid = 'crid';

    #[Status(URISchemeStatus::Provisional)]
    case cstr = 'cstr';

    #[Status(URISchemeStatus::Provisional)]
    case cvs = 'cvs';

    #[Status(URISchemeStatus::Provisional)]
    case dab = 'dab';

    #[Status(URISchemeStatus::Provisional)]
    case dat = 'dat';

    #[Status(URISchemeStatus::Permanent)]
    case data = 'data';

    #[Status(URISchemeStatus::Permanent)]
    case dav = 'dav';

    #[Status(URISchemeStatus::Provisional)]
    case dhttp = 'dhttp';

    #[Status(URISchemeStatus::Provisional)]
    case diaspora = 'diaspora';

    #[Status(URISchemeStatus::Permanent)]
    case dict = 'dict';

    #[Status(URISchemeStatus::Provisional)]
    case did = 'did';

    #[Status(URISchemeStatus::Provisional)]
    case dis = 'dis';

    #[Status(URISchemeStatus::Provisional)]
    case dlna_playcontainer = 'dlna-playcontainer';

    #[Status(URISchemeStatus::Provisional)]
    case dlna_playsingle = 'dlna-playsingle';

    #[Status(URISchemeStatus::Permanent)]
    case dns = 'dns';

    #[Status(URISchemeStatus::Provisional)]
    case dntp = 'dntp';

    #[Status(URISchemeStatus::Permanent)]
    case doi = 'doi';

    #[Status(URISchemeStatus::Provisional)]
    case dpp = 'dpp';

    #[Status(URISchemeStatus::Provisional)]
    case drm = 'drm';

    #[Status(URISchemeStatus::Historical)]
    case drop = 'drop';

    #[Status(URISchemeStatus::Provisional)]
    case dtmi = 'dtmi';

    #[Status(URISchemeStatus::Permanent)]
    case dtn = 'dtn';

    #[Status(URISchemeStatus::Provisional)]
    case dvb = 'dvb';

    #[Status(URISchemeStatus::Provisional)]
    case dvx = 'dvx';

    #[Status(URISchemeStatus::Provisional)]
    case dweb = 'dweb';

    #[Status(URISchemeStatus::Provisional)]
    case ed2k = 'ed2k';

    #[Status(URISchemeStatus::Provisional)]
    case eid = 'eid';

    #[Status(URISchemeStatus::Provisional)]
    case elsi = 'elsi';

    #[Status(URISchemeStatus::Provisional)]
    case embedded = 'embedded';

    #[Status(URISchemeStatus::Provisional)]
    case ens = 'ens';

    #[Status(URISchemeStatus::Provisional)]
    case ethereum = 'ethereum';

    #[Status(URISchemeStatus::Permanent)]
    case example = 'example';

    #[Status(URISchemeStatus::Provisional)]
    case facetime = 'facetime';

    #[Status(URISchemeStatus::Historical)]
    case fax = 'fax';

    #[Status(URISchemeStatus::Provisional)]
    case feed = 'feed';

    #[Status(URISchemeStatus::Provisional)]
    case feedready = 'feedready';

    #[Status(URISchemeStatus::Provisional)]
    case fido = 'fido';

    #[Status(URISchemeStatus::Permanent)]
    case file = 'file';

    #[Status(URISchemeStatus::Historical)]
    case filesystem = 'filesystem';

    #[Status(URISchemeStatus::Provisional)]
    case finger = 'finger';

    #[Status(URISchemeStatus::Provisional)]
    case first_run_pen_experience = 'first-run-pen-experience';

    #[Status(URISchemeStatus::Provisional)]
    case fish = 'fish';

    #[Status(URISchemeStatus::Provisional)]
    case fm = 'fm';

    #[Status(URISchemeStatus::Permanent)]
    case ftp = 'ftp';

    #[Status(URISchemeStatus::Provisional)]
    case fuchsia_pkg = 'fuchsia-pkg';

    #[Status(URISchemeStatus::Permanent)]
    case geo = 'geo';

    #[Status(URISchemeStatus::Provisional)]
    case gg = 'gg';

    #[Status(URISchemeStatus::Provisional)]
    case git = 'git';

    #[Status(URISchemeStatus::Provisional)]
    case gitoid = 'gitoid';

    #[Status(URISchemeStatus::Provisional)]
    case gizmoproject = 'gizmoproject';

    #[Status(URISchemeStatus::Permanent)]
    case go = 'go';

    #[Status(URISchemeStatus::Permanent)]
    case gopher = 'gopher';

    #[Status(URISchemeStatus::Provisional)]
    case graph = 'graph';

    #[Status(URISchemeStatus::Historical)]
    case grd = 'grd';

    #[Status(URISchemeStatus::Provisional)]
    case gtalk = 'gtalk';

    #[Status(URISchemeStatus::Permanent)]
    case h323 = 'h323';

    #[Status(URISchemeStatus::Provisional)]
    case ham = 'ham';

    #[Status(URISchemeStatus::Provisional)]
    case hcap = 'hcap';

    #[Status(URISchemeStatus::Provisional)]
    case hcp = 'hcp';

    #[Status(URISchemeStatus::Provisional)]
    case hs20 = 'hs20';

    #[Status(URISchemeStatus::Permanent)]
    case http = 'http';

    #[Status(URISchemeStatus::Permanent)]
    case https = 'https';

    #[Status(URISchemeStatus::Provisional)]
    case hxxp = 'hxxp';

    #[Status(URISchemeStatus::Provisional)]
    case hxxps = 'hxxps';

    #[Status(URISchemeStatus::Provisional)]
    case hydrazone = 'hydrazone';

    #[Status(URISchemeStatus::Provisional)]
    case hyper = 'hyper';

    #[Status(URISchemeStatus::Permanent)]
    case iax = 'iax';

    #[Status(URISchemeStatus::Permanent)]
    case icap = 'icap';

    #[Status(URISchemeStatus::Provisional)]
    case icon = 'icon';

    #[Status(URISchemeStatus::Provisional)]
    case ilstring = 'ilstring';

    #[Status(URISchemeStatus::Permanent)]
    case im = 'im';

    #[Status(URISchemeStatus::Permanent)]
    case imap = 'imap';

    #[Status(URISchemeStatus::Permanent)]
    case info = 'info';

    #[Status(URISchemeStatus::Provisional)]
    case iotdisco = 'iotdisco';

    #[Status(URISchemeStatus::Provisional)]
    case ipfs = 'ipfs';

    #[Status(URISchemeStatus::Permanent)]
    case ipn = 'ipn';

    #[Status(URISchemeStatus::Provisional)]
    case ipns = 'ipns';

    #[Status(URISchemeStatus::Permanent)]
    case ipp = 'ipp';

    #[Status(URISchemeStatus::Permanent)]
    case ipps = 'ipps';

    #[Status(URISchemeStatus::Provisional)]
    case irc = 'irc';

    #[Status(URISchemeStatus::Provisional)]
    case irc6 = 'irc6';

    #[Status(URISchemeStatus::Provisional)]
    case ircs = 'ircs';

    #[Status(URISchemeStatus::Permanent)]
    case iris = 'iris';

    #[Status(URISchemeStatus::Permanent)]
    case iris_beep = 'iris.beep';

    #[Status(URISchemeStatus::Permanent)]
    case iris_lwz = 'iris.lwz';

    #[Status(URISchemeStatus::Permanent)]
    case iris_xpc = 'iris.xpc';

    #[Status(URISchemeStatus::Permanent)]
    case iris_xpcs = 'iris.xpcs';

    #[Status(URISchemeStatus::Provisional)]
    case isostore = 'isostore';

    #[Status(URISchemeStatus::Provisional)]
    case itms = 'itms';

    #[Status(URISchemeStatus::Permanent)]
    case jabber = 'jabber';

    #[Status(URISchemeStatus::Provisional)]
    case jar = 'jar';

    #[Status(URISchemeStatus::Provisional)]
    case jms = 'jms';

    #[Status(URISchemeStatus::Provisional)]
    case keyparc = 'keyparc';

    #[Status(URISchemeStatus::Provisional)]
    case lastfm = 'lastfm';

    #[Status(URISchemeStatus::Provisional)]
    case lbry = 'lbry';

    #[Status(URISchemeStatus::Permanent)]
    case ldap = 'ldap';

    #[Status(URISchemeStatus::Provisional)]
    case ldaps = 'ldaps';

    #[Status(URISchemeStatus::Permanent)]
    case leaptofrogans = 'leaptofrogans';

    #[Status(URISchemeStatus::Provisional)]
    case lid = 'lid';

    #[Status(URISchemeStatus::Provisional)]
    case lorawan = 'lorawan';

    #[Status(URISchemeStatus::Provisional)]
    case lpa = 'lpa';

    #[Status(URISchemeStatus::Provisional)]
    case lvlt = 'lvlt';

    #[Status(URISchemeStatus::Provisional)]
    case machineProvisioningProgressReporter = 'machineProvisioningProgressReporter';

    #[Status(URISchemeStatus::Provisional)]
    case magnet = 'magnet';

    #[Status(URISchemeStatus::Historical)]
    case mailserver = 'mailserver';

    #[Status(URISchemeStatus::Permanent)]
    case mailto = 'mailto';

    #[Status(URISchemeStatus::Provisional)]
    case maps = 'maps';

    #[Status(URISchemeStatus::Provisional)]
    case market = 'market';

    #[Status(URISchemeStatus::Provisional)]
    case matrix = 'matrix';

    #[Status(URISchemeStatus::Provisional)]
    case message = 'message';

    #[Status(URISchemeStatus::Provisional)]
    case microsoft_windows_camera = 'microsoft.windows.camera';

    #[Status(URISchemeStatus::Provisional)]
    case microsoft_windows_camera_multipicker = 'microsoft.windows.camera.multipicker';

    #[Status(URISchemeStatus::Provisional)]
    case microsoft_windows_camera_picker = 'microsoft.windows.camera.picker';

    #[Status(URISchemeStatus::Permanent)]
    case mid = 'mid';

    #[Status(URISchemeStatus::Provisional)]
    case mms = 'mms';

    #[Status(URISchemeStatus::Historical)]
    case modem = 'modem';

    #[Status(URISchemeStatus::Provisional)]
    case mongodb = 'mongodb';

    #[Status(URISchemeStatus::Provisional)]
    case moz = 'moz';

    #[Status(URISchemeStatus::Provisional)]
    case ms_access = 'ms-access';

    #[Status(URISchemeStatus::Provisional)]
    case ms_appinstaller = 'ms-appinstaller';

    #[Status(URISchemeStatus::Provisional)]
    case ms_browser_extension = 'ms-browser-extension';

    #[Status(URISchemeStatus::Provisional)]
    case ms_calculator = 'ms-calculator';

    #[Status(URISchemeStatus::Provisional)]
    case ms_drive_to = 'ms-drive-to';

    #[Status(URISchemeStatus::Provisional)]
    case ms_enrollment = 'ms-enrollment';

    #[Status(URISchemeStatus::Provisional)]
    case ms_excel = 'ms-excel';

    #[Status(URISchemeStatus::Provisional)]
    case ms_eyecontrolspeech = 'ms-eyecontrolspeech';

    #[Status(URISchemeStatus::Provisional)]
    case ms_gamebarservices = 'ms-gamebarservices';

    #[Status(URISchemeStatus::Provisional)]
    case ms_gamingoverlay = 'ms-gamingoverlay';

    #[Status(URISchemeStatus::Provisional)]
    case ms_getoffice = 'ms-getoffice';

    #[Status(URISchemeStatus::Provisional)]
    case ms_help = 'ms-help';

    #[Status(URISchemeStatus::Provisional)]
    case ms_infopath = 'ms-infopath';

    #[Status(URISchemeStatus::Provisional)]
    case ms_inputapp = 'ms-inputapp';

    #[Status(URISchemeStatus::Provisional)]
    case ms_launchremotedesktop = 'ms-launchremotedesktop';

    #[Status(URISchemeStatus::Provisional)]
    case ms_lockscreencomponent_config = 'ms-lockscreencomponent-config';

    #[Status(URISchemeStatus::Provisional)]
    case ms_media_stream_id = 'ms-media-stream-id';

    #[Status(URISchemeStatus::Provisional)]
    case ms_meetnow = 'ms-meetnow';

    #[Status(URISchemeStatus::Provisional)]
    case ms_mixedrealitycapture = 'ms-mixedrealitycapture';

    #[Status(URISchemeStatus::Provisional)]
    case ms_mobileplans = 'ms-mobileplans';

    #[Status(URISchemeStatus::Provisional)]
    case ms_newsandinterests = 'ms-newsandinterests';

    #[Status(URISchemeStatus::Provisional)]
    case ms_officeapp = 'ms-officeapp';

    #[Status(URISchemeStatus::Provisional)]
    case ms_people = 'ms-people';

    #[Status(URISchemeStatus::Provisional)]
    case ms_personacard = 'ms-personacard';

    #[Status(URISchemeStatus::Provisional)]
    case ms_powerpoint = 'ms-powerpoint';

    #[Status(URISchemeStatus::Provisional)]
    case ms_project = 'ms-project';

    #[Status(URISchemeStatus::Provisional)]
    case ms_publisher = 'ms-publisher';

    #[Status(URISchemeStatus::Provisional)]
    case ms_recall = 'ms-recall';

    #[Status(URISchemeStatus::Provisional)]
    case ms_remotedesktop = 'ms-remotedesktop';

    #[Status(URISchemeStatus::Provisional)]
    case ms_remotedesktop_launch = 'ms-remotedesktop-launch';

    #[Status(URISchemeStatus::Provisional)]
    case ms_restoretabcompanion = 'ms-restoretabcompanion';

    #[Status(URISchemeStatus::Provisional)]
    case ms_screenclip = 'ms-screenclip';

    #[Status(URISchemeStatus::Provisional)]
    case ms_screensketch = 'ms-screensketch';

    #[Status(URISchemeStatus::Provisional)]
    case ms_search = 'ms-search';

    #[Status(URISchemeStatus::Provisional)]
    case ms_search_repair = 'ms-search-repair';

    #[Status(URISchemeStatus::Provisional)]
    case ms_secondary_screen_controller = 'ms-secondary-screen-controller';

    #[Status(URISchemeStatus::Provisional)]
    case ms_secondary_screen_setup = 'ms-secondary-screen-setup';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings = 'ms-settings';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_airplanemode = 'ms-settings-airplanemode';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_bluetooth = 'ms-settings-bluetooth';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_camera = 'ms-settings-camera';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_cellular = 'ms-settings-cellular';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_cloudstorage = 'ms-settings-cloudstorage';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_connectabledevices = 'ms-settings-connectabledevices';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_displays_topology = 'ms-settings-displays-topology';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_emailandaccounts = 'ms-settings-emailandaccounts';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_language = 'ms-settings-language';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_location = 'ms-settings-location';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_lock = 'ms-settings-lock';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_nfctransactions = 'ms-settings-nfctransactions';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_notifications = 'ms-settings-notifications';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_power = 'ms-settings-power';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_privacy = 'ms-settings-privacy';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_proximity = 'ms-settings-proximity';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_screenrotation = 'ms-settings-screenrotation';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_wifi = 'ms-settings-wifi';

    #[Status(URISchemeStatus::Provisional)]
    case ms_settings_workplace = 'ms-settings-workplace';

    #[Status(URISchemeStatus::Provisional)]
    case ms_spd = 'ms-spd';

    #[Status(URISchemeStatus::Provisional)]
    case ms_stickers = 'ms-stickers';

    #[Status(URISchemeStatus::Provisional)]
    case ms_sttoverlay = 'ms-sttoverlay';

    #[Status(URISchemeStatus::Provisional)]
    case ms_transit_to = 'ms-transit-to';

    #[Status(URISchemeStatus::Provisional)]
    case ms_useractivityset = 'ms-useractivityset';

    #[Status(URISchemeStatus::Provisional)]
    case ms_uup = 'ms-uup';

    #[Status(URISchemeStatus::Provisional)]
    case ms_virtualtouchpad = 'ms-virtualtouchpad';

    #[Status(URISchemeStatus::Provisional)]
    case ms_visio = 'ms-visio';

    #[Status(URISchemeStatus::Provisional)]
    case ms_walk_to = 'ms-walk-to';

    #[Status(URISchemeStatus::Provisional)]
    case ms_whiteboard = 'ms-whiteboard';

    #[Status(URISchemeStatus::Provisional)]
    case ms_whiteboard_cmd = 'ms-whiteboard-cmd';

    #[Status(URISchemeStatus::Provisional)]
    case ms_widgetboard = 'ms-widgetboard';

    #[Status(URISchemeStatus::Provisional)]
    case ms_widgets = 'ms-widgets';

    #[Status(URISchemeStatus::Provisional)]
    case ms_word = 'ms-word';

    #[Status(URISchemeStatus::Provisional)]
    case msnim = 'msnim';

    #[Status(URISchemeStatus::Permanent)]
    case msrp = 'msrp';

    #[Status(URISchemeStatus::Permanent)]
    case msrps = 'msrps';

    #[Status(URISchemeStatus::Provisional)]
    case mss = 'mss';

    #[Status(URISchemeStatus::Permanent)]
    case mt = 'mt';

    #[Status(URISchemeStatus::Permanent)]
    case mtqp = 'mtqp';

    #[Status(URISchemeStatus::Provisional)]
    case mtrust = 'mtrust';

    #[Status(URISchemeStatus::Provisional)]
    case mumble = 'mumble';

    #[Status(URISchemeStatus::Permanent)]
    case mupdate = 'mupdate';

    #[Status(URISchemeStatus::Provisional)]
    case mvn = 'mvn';

    #[Status(URISchemeStatus::Provisional)]
    case mvrp = 'mvrp';

    #[Status(URISchemeStatus::Provisional)]
    case mvrps = 'mvrps';

    #[Status(URISchemeStatus::Permanent)]
    case news = 'news';

    #[Status(URISchemeStatus::Permanent)]
    case nfs = 'nfs';

    #[Status(URISchemeStatus::Permanent)]
    case ni = 'ni';

    #[Status(URISchemeStatus::Permanent)]
    case nih = 'nih';

    #[Status(URISchemeStatus::Permanent)]
    case nntp = 'nntp';

    #[Status(URISchemeStatus::Provisional)]
    case notes = 'notes';

    #[Status(URISchemeStatus::Provisional)]
    case num = 'num';

    #[Status(URISchemeStatus::Provisional)]
    case ocf = 'ocf';

    #[Status(URISchemeStatus::Provisional)]
    case oid = 'oid';

    #[Status(URISchemeStatus::Provisional)]
    case onenote = 'onenote';

    #[Status(URISchemeStatus::Provisional)]
    case onenote_cmd = 'onenote-cmd';

    #[Status(URISchemeStatus::Permanent)]
    case opaquelocktoken = 'opaquelocktoken';

    #[Status(URISchemeStatus::Provisional)]
    case openid = 'openid';

    #[Status(URISchemeStatus::Provisional)]
    case openpgp4fpr = 'openpgp4fpr';

    #[Status(URISchemeStatus::Provisional)]
    case otpauth = 'otpauth';

    #[Status(URISchemeStatus::Historical)]
    case p1 = 'p1';

    #[Status(URISchemeStatus::Historical)]
    case pack = 'pack';

    #[Status(URISchemeStatus::Provisional)]
    case palm = 'palm';

    #[Status(URISchemeStatus::Provisional)]
    case paparazzi = 'paparazzi';

    #[Status(URISchemeStatus::Historical)]
    case payment = 'payment';

    #[Status(URISchemeStatus::Provisional)]
    case payto = 'payto';

    #[Status(URISchemeStatus::Permanent)]
    case pkcs11 = 'pkcs11';

    #[Status(URISchemeStatus::Provisional)]
    case platform = 'platform';

    #[Status(URISchemeStatus::Permanent)]
    case pop = 'pop';

    #[Status(URISchemeStatus::Permanent)]
    case pres = 'pres';

    #[Status(URISchemeStatus::Historical)]
    case prospero = 'prospero';

    #[Status(URISchemeStatus::Provisional)]
    case proxy = 'proxy';

    #[Status(URISchemeStatus::Provisional)]
    case psyc = 'psyc';

    #[Status(URISchemeStatus::Provisional)]
    case pttp = 'pttp';

    #[Status(URISchemeStatus::Provisional)]
    case pwid = 'pwid';

    #[Status(URISchemeStatus::Provisional)]
    case qb = 'qb';

    #[Status(URISchemeStatus::Provisional)]
    case query = 'query';

    #[Status(URISchemeStatus::Provisional)]
    case quic_transport = 'quic-transport';

    #[Status(URISchemeStatus::Provisional)]
    case redis = 'redis';

    #[Status(URISchemeStatus::Provisional)]
    case rediss = 'rediss';

    #[Status(URISchemeStatus::Permanent)]
    case reload = 'reload';

    #[Status(URISchemeStatus::Provisional)]
    case res = 'res';

    #[Status(URISchemeStatus::Provisional)]
    case resource = 'resource';

    #[Status(URISchemeStatus::Provisional)]
    case rmi = 'rmi';

    #[Status(URISchemeStatus::Provisional)]
    case rsync = 'rsync';

    #[Status(URISchemeStatus::Provisional)]
    case rtmfp = 'rtmfp';

    #[Status(URISchemeStatus::Provisional)]
    case rtmp = 'rtmp';

    #[Status(URISchemeStatus::Permanent)]
    case rtsp = 'rtsp';

    #[Status(URISchemeStatus::Permanent)]
    case rtsps = 'rtsps';

    #[Status(URISchemeStatus::Permanent)]
    case rtspu = 'rtspu';

    #[Status(URISchemeStatus::Provisional)]
    case sarif = 'sarif';

    #[Status(URISchemeStatus::Provisional)]
    case secondlife = 'secondlife';

    #[Status(URISchemeStatus::Provisional)]
    case secret_token = 'secret-token';

    #[Status(URISchemeStatus::Permanent)]
    case service = 'service';

    #[Status(URISchemeStatus::Permanent)]
    case session = 'session';

    #[Status(URISchemeStatus::Provisional)]
    case sftp = 'sftp';

    #[Status(URISchemeStatus::Provisional)]
    case sgn = 'sgn';

    #[Status(URISchemeStatus::Provisional)]
    case shc = 'shc';

    #[Status(URISchemeStatus::Provisional)]
    case shelter = 'shelter';

    #[Status(URISchemeStatus::Permanent)]
    case shttp_OBSOLETE = 'shttp (OBSOLETE)';

    #[Status(URISchemeStatus::Permanent)]
    case sieve = 'sieve';

    #[Status(URISchemeStatus::Provisional)]
    case simpleledger = 'simpleledger';

    #[Status(URISchemeStatus::Provisional)]
    case simplex = 'simplex';

    #[Status(URISchemeStatus::Permanent)]
    case sip = 'sip';

    #[Status(URISchemeStatus::Permanent)]
    case sips = 'sips';

    #[Status(URISchemeStatus::Provisional)]
    case skype = 'skype';

    #[Status(URISchemeStatus::Provisional)]
    case smb = 'smb';

    #[Status(URISchemeStatus::Provisional)]
    case smp = 'smp';

    #[Status(URISchemeStatus::Permanent)]
    case sms = 'sms';

    #[Status(URISchemeStatus::Provisional)]
    case smtp = 'smtp';

    #[Status(URISchemeStatus::Historical)]
    case snews = 'snews';

    #[Status(URISchemeStatus::Permanent)]
    case snmp = 'snmp';

    #[Status(URISchemeStatus::Permanent)]
    case soap_beep = 'soap.beep';

    #[Status(URISchemeStatus::Permanent)]
    case soap_beeps = 'soap.beeps';

    #[Status(URISchemeStatus::Provisional)]
    case soldat = 'soldat';

    #[Status(URISchemeStatus::Provisional)]
    case spiffe = 'spiffe';

    #[Status(URISchemeStatus::Provisional)]
    case spotify = 'spotify';

    #[Status(URISchemeStatus::Provisional)]
    case ssb = 'ssb';

    #[Status(URISchemeStatus::Provisional)]
    case ssh = 'ssh';

    #[Status(URISchemeStatus::Provisional)]
    case starknet = 'starknet';

    #[Status(URISchemeStatus::Provisional)]
    case steam = 'steam';

    #[Status(URISchemeStatus::Permanent)]
    case stun = 'stun';

    #[Status(URISchemeStatus::Permanent)]
    case stuns = 'stuns';

    #[Status(URISchemeStatus::Provisional)]
    case submit = 'submit';

    #[Status(URISchemeStatus::Provisional)]
    case svn = 'svn';

    #[Status(URISchemeStatus::Provisional)]
    case swh = 'swh';

    #[Status(URISchemeStatus::Provisional)]
    case swid = 'swid';

    #[Status(URISchemeStatus::Provisional)]
    case swidpath = 'swidpath';

    #[Status(URISchemeStatus::Permanent)]
    case tag = 'tag';

    #[Status(URISchemeStatus::Provisional)]
    case taler = 'taler';

    #[Status(URISchemeStatus::Provisional)]
    case teamspeak = 'teamspeak';

    #[Status(URISchemeStatus::Provisional)]
    case teapot = 'teapot';

    #[Status(URISchemeStatus::Provisional)]
    case teapots = 'teapots';

    #[Status(URISchemeStatus::Permanent)]
    case tel = 'tel';

    #[Status(URISchemeStatus::Provisional)]
    case teliaeid = 'teliaeid';

    #[Status(URISchemeStatus::Permanent)]
    case telnet = 'telnet';

    #[Status(URISchemeStatus::Permanent)]
    case tftp = 'tftp';

    #[Status(URISchemeStatus::Provisional)]
    case things = 'things';

    #[Status(URISchemeStatus::Permanent)]
    case thismessage = 'thismessage';

    #[Status(URISchemeStatus::Historical)]
    case thzp = 'thzp';

    #[Status(URISchemeStatus::Permanent)]
    case tip = 'tip';

    #[Status(URISchemeStatus::Permanent)]
    case tn3270 = 'tn3270';

    #[Status(URISchemeStatus::Provisional)]
    case tool = 'tool';

    #[Status(URISchemeStatus::Permanent)]
    case turn = 'turn';

    #[Status(URISchemeStatus::Permanent)]
    case turns = 'turns';

    #[Status(URISchemeStatus::Permanent)]
    case tv = 'tv';

    #[Status(URISchemeStatus::Provisional)]
    case udp = 'udp';

    #[Status(URISchemeStatus::Provisional)]
    case unreal = 'unreal';

    #[Status(URISchemeStatus::Historical)]
    case upt = 'upt';

    #[Status(URISchemeStatus::Permanent)]
    case urn = 'urn';

    #[Status(URISchemeStatus::Provisional)]
    case ut2004 = 'ut2004';

    #[Status(URISchemeStatus::Provisional)]
    case uuid_in_package = 'uuid-in-package';

    #[Status(URISchemeStatus::Provisional)]
    case v_event = 'v-event';

    #[Status(URISchemeStatus::Permanent)]
    case vemmi = 'vemmi';

    #[Status(URISchemeStatus::Provisional)]
    case ventrilo = 'ventrilo';

    #[Status(URISchemeStatus::Provisional)]
    case ves = 'ves';

    #[Status(URISchemeStatus::Historical)]
    case videotex = 'videotex';

    #[Status(URISchemeStatus::Provisional)]
    case view_source = 'view-source';

    #[Status(URISchemeStatus::Permanent)]
    case vnc = 'vnc';

    #[Status(URISchemeStatus::Provisional)]
    case vscode = 'vscode';

    #[Status(URISchemeStatus::Provisional)]
    case vscode_insiders = 'vscode-insiders';

    #[Status(URISchemeStatus::Provisional)]
    case vsls = 'vsls';

    #[Status(URISchemeStatus::Provisional)]
    case w3 = 'w3';

    #[Status(URISchemeStatus::Historical)]
    case wais = 'wais';

    #[Status(URISchemeStatus::Provisional)]
    case wasm = 'wasm';

    #[Status(URISchemeStatus::Provisional)]
    case wasm_js = 'wasm-js';

    #[Status(URISchemeStatus::Provisional)]
    case wcr = 'wcr';

    #[Status(URISchemeStatus::Provisional)]
    case web3 = 'web3';

    #[Status(URISchemeStatus::Provisional)]
    case web_ap = 'web+ap';

    #[Status(URISchemeStatus::Provisional)]
    case webcal = 'webcal';

    #[Status(URISchemeStatus::Provisional)]
    case wifi = 'wifi';

    #[Status(URISchemeStatus::Historical)]
    case wpid = 'wpid';

    #[Status(URISchemeStatus::Permanent)]
    case ws = 'ws';

    #[Status(URISchemeStatus::Permanent)]
    case wss = 'wss';

    #[Status(URISchemeStatus::Provisional)]
    case wtai = 'wtai';

    #[Status(URISchemeStatus::Provisional)]
    case wyciwyg = 'wyciwyg';

    #[Status(URISchemeStatus::Permanent)]
    case xcon = 'xcon';

    #[Status(URISchemeStatus::Permanent)]
    case xcon_userid = 'xcon-userid';

    #[Status(URISchemeStatus::Provisional)]
    case xfire = 'xfire';

    #[Status(URISchemeStatus::Provisional)]
    case xftp = 'xftp';

    #[Status(URISchemeStatus::Permanent)]
    case xmlrpc_beep = 'xmlrpc.beep';

    #[Status(URISchemeStatus::Permanent)]
    case xmlrpc_beeps = 'xmlrpc.beeps';

    #[Status(URISchemeStatus::Permanent)]
    case xmpp = 'xmpp';

    #[Status(URISchemeStatus::Provisional)]
    case xrcp = 'xrcp';

    #[Status(URISchemeStatus::Provisional)]
    case xri = 'xri';

    #[Status(URISchemeStatus::Provisional)]
    case ymsgr = 'ymsgr';

    #[Status(URISchemeStatus::Historical)]
    case z39_50 = 'z39.50';

    #[Status(URISchemeStatus::Permanent)]
    case z39_50r = 'z39.50r';

    #[Status(URISchemeStatus::Permanent)]
    case z39_50s = 'z39.50s';

    public function getStatus(): URISchemeStatus {
        $statusAttributes = BackedEnum::getCaseAttributes($this, Status::class);
        if ($statusAttributes === [] || !array_key_exists(0, $statusAttributes)) {
            // @codeCoverageIgnoreStart
            throw new ShouldNotHappenException('Every URI scheme has a status');
            // @codeCoverageIgnoreEnd
        }

        return $statusAttributes[0]->status;
    }
}

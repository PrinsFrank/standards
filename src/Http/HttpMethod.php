<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Http;

/**
 * @source https://www.iana.org/assignments/http-methods/http-methods.xhtml
 */
enum HttpMethod: string
{
    case ACL               = 'ACL';
    case BASELINE_CONTROL  = 'BASELINE-CONTROL';
    case BIND              = 'BIND';
    case CHECKIN           = 'CHECKIN';
    case CHECKOUT          = 'CHECKOUT';
    case CONNECT           = 'CONNECT';
    case COPY              = 'COPY';
    case DELETE            = 'DELETE';
    case GET               = 'GET';
    case HEAD              = 'HEAD';
    case LABEL             = 'LABEL';
    case LINK              = 'LINK';
    case LOCK              = 'LOCK';
    case MERGE             = 'MERGE';
    case MKACTIVITY        = 'MKACTIVITY';
    case MKCALENDAR        = 'MKCALENDAR';
    case MKCOL             = 'MKCOL';
    case MKREDIRECTREF     = 'MKREDIRECTREF';
    case MKWORKSPACE       = 'MKWORKSPACE';
    case MOVE              = 'MOVE';
    case OPTIONS           = 'OPTIONS';
    case ORDERPATCH        = 'ORDERPATCH';
    case PATCH             = 'PATCH';
    case POST              = 'POST';
    case PRI               = 'PRI';
    case PROPFIND          = 'PROPFIND';
    case PROPPATCH         = 'PROPPATCH';
    case PUT               = 'PUT';
    case REBIND            = 'REBIND';
    case REPORT            = 'REPORT';
    case SEARCH            = 'SEARCH';
    case TRACE             = 'TRACE';
    case UNBIND            = 'UNBIND';
    case UNCHECKOUT        = 'UNCHECKOUT';
    case UNLINK            = 'UNLINK';
    case UNLOCK            = 'UNLOCK';
    case UPDATE            = 'UPDATE';
    case UPDATEREDIRECTREF = 'UPDATEREDIRECTREF';
    case VERSION_CONTROL   = 'VERSION-CONTROL';
}

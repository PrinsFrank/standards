<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Http;

/**
 * @source https://www.iana.org/assignments/http-methods/http-methods.xhtml
 *
 * @updated-by \PrinsFrank\Standards\Dev\DataSource\Mapping\HttpMethodMapping
 */
enum HttpMethod: string {
    case Acl = 'ACL';
    case BaselineControl = 'BASELINE-CONTROL';
    case Bind = 'BIND';
    case Checkin = 'CHECKIN';
    case Checkout = 'CHECKOUT';
    case Connect = 'CONNECT';
    case Copy = 'COPY';
    case Delete = 'DELETE';
    case Get = 'GET';
    case Head = 'HEAD';
    case Label = 'LABEL';
    case Link = 'LINK';
    case Lock = 'LOCK';
    case Merge = 'MERGE';
    case Mkactivity = 'MKACTIVITY';
    case Mkcalendar = 'MKCALENDAR';
    case Mkcol = 'MKCOL';
    case Mkredirectref = 'MKREDIRECTREF';
    case Mkworkspace = 'MKWORKSPACE';
    case Move = 'MOVE';
    case Options = 'OPTIONS';
    case Orderpatch = 'ORDERPATCH';
    case Patch = 'PATCH';
    case Post = 'POST';
    case Pri = 'PRI';
    case Propfind = 'PROPFIND';
    case Proppatch = 'PROPPATCH';
    case Put = 'PUT';
    case Rebind = 'REBIND';
    case Report = 'REPORT';
    case Search = 'SEARCH';
    case Trace = 'TRACE';
    case Unbind = 'UNBIND';
    case Uncheckout = 'UNCHECKOUT';
    case Unlink = 'UNLINK';
    case Unlock = 'UNLOCK';
    case Update = 'UPDATE';
    case Updateredirectref = 'UPDATEREDIRECTREF';
    case VersionControl = 'VERSION-CONTROL';
}

<?php declare(strict_types=1);

namespace PrinsFrank\Standards\URIScheme;

/**
 * @source https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml
 *
 * @manually-updated
 */
enum URISchemeStatus: string {
    case Permanent = 'Permanent'; // Expert Review
    case Provisional = 'Provisional'; // First Come First Served
    case Historical = 'Historical'; // Expert Review
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

/** @source https://www.iana.org/domains/root/db */
enum GenericRestrictedTLD: string
{
    case biz = 'biz';
    case name = 'name';
    case pro = 'pro';
}

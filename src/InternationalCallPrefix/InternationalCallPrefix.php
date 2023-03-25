<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\InternationalCallPrefix;

/**
 * @standard ITU_T_E_164
 */
enum InternationalCallPrefix: string
{
    case _0    = '0';
    case _00   = '00';
    case _000  = '000';
    case _001  = '001';
    case _0011 = '0011';
    case _009  = '009';
    case _00x  = '00x';
    case _010  = '010';
    case _011  = '011';
    case _119  = '119';
    case _1xx0 = '1xx0';
    case _8_10 = '8~10';
}

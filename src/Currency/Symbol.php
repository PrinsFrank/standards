<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Currency;

enum Symbol: string
{
    case Afghani            = '؋';
    case Armenian_Dram      = '֏';
    case Aruban_Florin      = 'ƒ';
    case Azerbaijan_Manat   = '₼';
    case Bahraini_Dinar     = '.د.ب';
    case Baht               = '฿';
    case Cent               = '¢';
    case Costa_Rican_Colon  = '₡';
    case Dollar             = '$';
    case Dong               = '₫';
    case Egyptian_Pound     = '.ج.م';
    case Euro               = '€';
    case Fils               = 'فلس';
    case Generic            = '¤';
    case Ghana_Cedi         = '₵';
    case Guarani            = '₲';
    case Hryvnia            = '₴';
    case Indian_Rupee       = '₹';
    case Iranian_Rial       = '﷼';
    case Iraqi_Dinar        = '.د.ع';
    case Lao_Kip            = '₭';
    case Lari               = '₾';
    case Lebanese_Pound     = '.ل.ل';
    case Moroccan_Dirham    = '.د.م';
    case Naira              = '₦';
    case New_Israeli_Sheqel = '₪';
    case Philippine_Peso    = '₱';
    case Pound              = '£';
    case Qatari_Rial        = '.ر.ق';
    case Rial_Omani         = '.ر.ع';
    case Riel               = '៛';
    case Rufiyaa            = 'ރ';
    case Russian_Ruble      = '₽';
    case Saudi_Riyal        = '.ر.س';
    case Taka               = '৳';
    case Tenge              = '₸';
    case Turkish_Lira       = '₺';
    case UAE_Dirham         = '.د.إ';
    case Won                = '₩';
    case Yemeni_Rial        = '.ر.ي';
    case Yen                = '¥';
}

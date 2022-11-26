<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

enum SpecType
{
    case COUNTRY;
    case CURRENCY;
    case HTTP_STATUS_CODES;
    case HTTP_METHODS;
    case LANGUAGE;
}

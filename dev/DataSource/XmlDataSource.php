<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource;

interface XmlDataSource extends DataSource
{
    public static function url(): string;
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

interface DataSourceExtractor
{
    public static function extractForSource(string $sourceFQN): array;
}

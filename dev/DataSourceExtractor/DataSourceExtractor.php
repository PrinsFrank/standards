<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSourceExtractor;

interface DataSourceExtractor
{
    /** @return array<string, string|int> */
    public static function extractForSource(string $sourceFQN): array;
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Sorting;

use PrinsFrank\Standards\Dev\DataTarget\EnumCase;

class ValueWithDeprecatedTagsSeparateSorting implements SortingInterface
{
    public function __invoke(EnumCase $a, EnumCase $b): int
    {
        return ($a->deprecated ? 1 : 0) . $a->value <=>  ($b->deprecated ? 1 : 0) . $b->value;
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Sorting;

use PrinsFrank\Standards\Dev\DataTarget\EnumCase;

interface Sorting {
    public function __invoke(EnumCase $a, EnumCase $b): int;
}

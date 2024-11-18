<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\TopLevelDomain;

interface TLD {
    public function isAssigned(): bool;
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards;

class ShouldNotHappenException extends StandardException {
    public function __construct(string $message) {
        parent::__construct(sprintf('%s. This should never happen. Please report this exception with a stack trace at https://github.com/PrinsFrank/standards/issues/new', $message));
    }
}

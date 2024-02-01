<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\ShouldNotHappenException;

/** @coversDefaultClass \PrinsFrank\Standards\ShouldNotHappenException */
class ShouldNotHappenExceptionTest extends TestCase
{
    /** @covers ::__construct */
    public function testConstruct(): void
    {
        $this->expectException(ShouldNotHappenException::class);
        $this->expectExceptionMessage('foo. This should never happen. Please report this exception with a stack trace at https://github.com/PrinsFrank/standards/issues/new');
        throw new ShouldNotHappenException('foo');
    }
}

<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\URIScheme\Attributes;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\URIScheme\Attributes\Status;
use PrinsFrank\Standards\URIScheme\URISchemeStatus;

#[CoversClass(Status::class)]
class StatusTest extends TestCase {
    public function testStatus(): void {
        static::assertSame(
            URISchemeStatus::Permanent,
            (new Status(URISchemeStatus::Permanent))->status
        );
    }
}

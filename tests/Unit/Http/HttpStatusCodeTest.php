<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Http;

use DateTimeImmutable;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Http\HttpStatusCode;

#[CoversClass(HttpStatusCode::class)]
class HttpStatusCodeTest extends TestCase {
    public function testIsTemporaryAssignment(): void {
        static::assertFalse(HttpStatusCode::OK->isTemporaryAssignment());
        static::assertTrue(HttpStatusCode::Upload_Resumption_Supported->isTemporaryAssignment());
    }

    public function testGetTemporaryAssignmentExpiresAt(): void {
        static::assertNull(HttpStatusCode::OK->getTemporaryAssignmentExpiresAt());
        static::assertEquals(
            new DateTimeImmutable('2026-11-13'),
            HttpStatusCode::Upload_Resumption_Supported->getTemporaryAssignmentExpiresAt()
        );
    }
}

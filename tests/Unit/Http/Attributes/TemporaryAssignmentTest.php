<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Http\Attributes;

use DateTimeImmutable;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Http\Attributes\TemporaryAssignment;

#[CoversClass(TemporaryAssignment::class)]
class TemporaryAssignmentTest extends TestCase
{
    public function testConstructor(): void
    {
        $expiresAt = new DateTimeImmutable();
        $attribute = new TemporaryAssignment($expiresAt);

        static::assertEquals($attribute->expiresAt, $expiresAt);
    }
}

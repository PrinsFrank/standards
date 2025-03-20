<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\URIScheme;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\URIScheme\URIScheme;

#[CoversClass(URIScheme::class)]
class URISchemeTest extends TestCase {
    public function testAllSchemesHaveStatus(): void {
        foreach (URIScheme::cases() as $scheme) {
            $scheme->getStatus();

            $this->addToAssertionCount(1);
        }
    }
}

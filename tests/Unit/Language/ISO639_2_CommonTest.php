<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_2_Common;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_2_Common
 */
class ISO639_2_CommonTest extends TestCase
{
    /**
     * @covers ::toISO639_1
     */
    public function testSomeCasesCanBeConvertedToISO639_1(): void
    {
        $cases = ISO639_2_Common::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toISO639_1();
            $this->addToAssertionCount(1);
        }
    }
}

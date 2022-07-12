<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Common;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_2_Alpha_3_Common
 */
class ISO639_2_Alpha_3CommonTest extends TestCase
{
    /**
     * @covers ::toISO639_1_Alpha_2
     */
    public function testSomeCasesCanBeConvertedToISO639_1_Alpha2(): void
    {
        $cases = ISO639_2_Alpha_3_Common::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            $case->toISO639_1_Alpha_2();
            $this->addToAssertionCount(1);
        }
    }

    /**
     * @covers ::toISO639_Name
     */
    public function testAllCasesCanBeConvertedToISO639_Name(): void
    {
        $cases = ISO639_2_Alpha_3_Common::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toISO639_Name());
        }
    }
}

<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_1;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_1
 */
class ISO639_1Test extends TestCase
{
    /**
     * @covers ::toLanguage
     */
    public function testAllCasesCanBeConvertedToLanguage(): void
    {
        $cases = ISO639_1::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguage());
        }
    }
}

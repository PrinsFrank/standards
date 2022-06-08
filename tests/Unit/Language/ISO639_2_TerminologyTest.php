<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\ISO639_2_Terminology;

/**
 * @coversDefaultClass \PrinsFrank\Standards\Language\ISO639_2_Terminology
 */
class ISO639_2_TerminologyTest extends TestCase
{
    /**
     * @covers ::toLanguage
     */
    public function testAllCasesCanBeConvertedToLanguage(): void
    {
        $cases = ISO639_2_Terminology::cases();
        static::assertNotEmpty($cases);
        foreach ($cases as $case) {
            static::assertNotNull($case->toLanguage());
        }
    }
}

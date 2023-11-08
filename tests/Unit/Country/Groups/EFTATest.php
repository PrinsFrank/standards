<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Groups;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EFTA;

/** @coversDefaultClass \PrinsFrank\Standards\Country\Groups\EFTA */
class EFTATest extends TestCase
{
    /** @covers ::allAlpha2 */
    public function testAllAlpha2(): void
    {
        static::assertSame(
            [
                CountryAlpha2::Iceland,
                CountryAlpha2::Liechtenstein,
                CountryAlpha2::Norway,
                CountryAlpha2::Switzerland,
            ],
            EFTA::allAlpha2()
        );
    }
}

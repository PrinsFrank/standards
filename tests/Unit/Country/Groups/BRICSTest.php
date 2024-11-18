<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Groups;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\BRICS;

#[CoversClass(BRICS::class)]
class BRICSTest extends TestCase {
    public function testAllAlpha2(): void {
        static::assertSame(
            [
                CountryAlpha2::Brazil,
                CountryAlpha2::Russian_Federation,
                CountryAlpha2::India,
                CountryAlpha2::China,
                CountryAlpha2::South_Africa,
            ],
            BRICS::allAlpha2()
        );
    }
}

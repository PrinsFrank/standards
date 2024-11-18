<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Groups;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EFTA;

#[CoversClass(EFTA::class)]
class EFTATest extends TestCase {
    public function testAllAlpha2(): void {
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

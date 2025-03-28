<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Groups;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\EuroZone;

#[CoversClass(EuroZone::class)]
class EuroZoneTest extends TestCase {
    public function testAllAlpha2(): void {
        static::assertSame(
            [
                CountryAlpha2::Austria,
                CountryAlpha2::Belgium,
                CountryAlpha2::Croatia,
                CountryAlpha2::Cyprus,
                CountryAlpha2::Estonia,
                CountryAlpha2::Finland,
                CountryAlpha2::France,
                CountryAlpha2::Germany,
                CountryAlpha2::Greece,
                CountryAlpha2::Ireland,
                CountryAlpha2::Italy,
                CountryAlpha2::Latvia,
                CountryAlpha2::Lithuania,
                CountryAlpha2::Luxembourg,
                CountryAlpha2::Malta,
                CountryAlpha2::Netherlands,
                CountryAlpha2::Portugal,
                CountryAlpha2::Slovakia,
                CountryAlpha2::Slovenia,
                CountryAlpha2::Spain,
            ],
            EuroZone::allAlpha2()
        );
    }
}

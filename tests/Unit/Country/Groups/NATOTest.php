<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Groups;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Groups\NATO;

#[CoversClass(NATO::class)]
class NATOTest extends TestCase
{
    public function testAllAlpha2(): void
    {
        static::assertSame(
            [
                CountryAlpha2::Albania,
                CountryAlpha2::Belgium,
                CountryAlpha2::Bulgaria,
                CountryAlpha2::Canada,
                CountryAlpha2::Croatia,
                CountryAlpha2::Czechia,
                CountryAlpha2::Denmark,
                CountryAlpha2::Estonia,
                CountryAlpha2::Finland,
                CountryAlpha2::France,
                CountryAlpha2::Germany,
                CountryAlpha2::Greece,
                CountryAlpha2::Hungary,
                CountryAlpha2::Iceland,
                CountryAlpha2::Italy,
                CountryAlpha2::Latvia,
                CountryAlpha2::Lithuania,
                CountryAlpha2::Luxembourg,
                CountryAlpha2::Montenegro,
                CountryAlpha2::Netherlands,
                CountryAlpha2::North_Macedonia,
                CountryAlpha2::Norway,
                CountryAlpha2::Poland,
                CountryAlpha2::Portugal,
                CountryAlpha2::Romania,
                CountryAlpha2::Slovakia,
                CountryAlpha2::Slovenia,
                CountryAlpha2::Spain,
                CountryAlpha2::Turkey,
                CountryAlpha2::United_Kingdom,
                CountryAlpha2::United_States_of_America,
            ],
            NATO::allAlpha2()
        );
    }
}

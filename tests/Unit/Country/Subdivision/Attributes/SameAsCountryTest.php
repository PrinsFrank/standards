<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Subdivision\Attributes;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Subdivision\Attributes\SameAsCountry;

/** @coversDefaultClass \PrinsFrank\Standards\Country\Subdivision\Attributes\SameAsCountry */
class SameAsCountryTest extends TestCase
{
    /** @covers ::__construct */
    public function testCovers(): void
    {
        static::assertSame(CountryAlpha2::Netherlands, (new SameAsCountry(CountryAlpha2::Netherlands))->country);
    }
}

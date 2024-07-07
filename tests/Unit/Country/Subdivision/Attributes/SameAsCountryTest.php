<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Subdivision\Attributes;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Subdivision\Attributes\SameAsCountry;

#[CoversClass(SameAsCountry::class)]
class SameAsCountryTest extends TestCase
{
    public function testCoversClass(): void
    {
        static::assertSame(CountryAlpha2::Netherlands, (new SameAsCountry(CountryAlpha2::Netherlands))->country);
    }
}

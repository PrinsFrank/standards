<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Subdivision;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Country\Subdivision\Attributes\Name;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;
use PrinsFrank\Standards\Language\LanguageAlpha2;

/** @coversDefaultClass \PrinsFrank\Standards\Country\Subdivision\CountrySubdivision */
class CountrySubdivisionTest extends TestCase
{
    /** @covers ::getPartOfCountry */
    public function testGetPartOfCountry(): void
    {
        foreach (CountrySubdivision::cases() as $countrySubdivision) {
            $countrySubdivision->getPartOfCountry();

            $this->addToAssertionCount(1);
        }
    }

    /** @covers ::getNames */
    public function testGetNames(): void {
        static::assertSame(
            [
                new Name('Bonaire', [LanguageAlpha2::Dutch_Flemish, LanguageAlpha2::English], null, null),
                new Name('Boneiru', [], null, null),
            ],
            CountrySubdivision::Caribbean_Netherlands_special_municipality_Bonaire->getNames()
        );
    }

    /** @covers ::getSameAsCountry */
    public function testGetSameAsCountry(): void {
        static::assertNull(CountrySubdivision::Netherlands_province_Fryslan->getSameAsCountry());
        static::assertSame(
            CountryAlpha2::Aruba,
            CountrySubdivision::Netherlands_country_Aruba->getSameAsCountry()
        );
    }
}

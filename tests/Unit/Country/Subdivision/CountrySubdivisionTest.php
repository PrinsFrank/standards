<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\Subdivision;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\Subdivision\CountrySubdivision;

/** @coversDefaultClass \PrinsFrank\Standards\Country\Subdivision\CountrySubdivision */
class CountrySubdivisionTest extends TestCase
{
    /** @covers ::getCountry */
    public function testGetCountry(): void
    {
        foreach (CountrySubdivision::cases() as $countrySubdivision) {
            $countrySubdivision->getCountry();

            $this->addToAssertionCount(1);
        }
    }
}

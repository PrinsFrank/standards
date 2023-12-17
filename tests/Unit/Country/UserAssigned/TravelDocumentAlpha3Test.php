<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Country\UserAssigned;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Country\UserAssigned\TravelDocumentAlpha2;
use PrinsFrank\Standards\Country\UserAssigned\TravelDocumentAlpha3;

/** @coversDefaultClass \PrinsFrank\Standards\Country\UserAssigned\TravelDocumentAlpha3 */
class TravelDocumentAlpha3Test extends TestCase
{
    /** @covers ::toTravelDocumentAlpha2 */
    public function testToTravelDocumentAlpha2(): void
    {
        static::assertSame(TravelDocumentAlpha2::European_Union, TravelDocumentAlpha3::European_Union->toTravelDocumentAlpha2());
        static::assertSame(TravelDocumentAlpha2::United_Nations, TravelDocumentAlpha3::United_Nations_Organization_or_one_of_its_officials->toTravelDocumentAlpha2());
        static::assertSame(TravelDocumentAlpha2::United_Nations, TravelDocumentAlpha3::United_Nations_specialized_agency_or_one_of_its_officials->toTravelDocumentAlpha2());
        static::assertSame(TravelDocumentAlpha2::Netherlands_Antilles, TravelDocumentAlpha3::Netherlands_Antilles->toTravelDocumentAlpha2());
        static::assertSame(TravelDocumentAlpha2::Neutral_Zone, TravelDocumentAlpha3::Neutral_Zone->toTravelDocumentAlpha2());
        static::assertSame(TravelDocumentAlpha2::Utopia, TravelDocumentAlpha3::Utopia->toTravelDocumentAlpha2());
        static::assertSame(TravelDocumentAlpha2::International_Civil_Aviation_Organization, TravelDocumentAlpha3::International_Civil_Aviation_Organization->toTravelDocumentAlpha2());
        static::assertNull(TravelDocumentAlpha3::International_Criminal_Police_Organization->toTravelDocumentAlpha2());
    }
}

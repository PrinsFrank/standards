<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Region;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Region\GeographicRegion;

/** @coversDefaultClass \PrinsFrank\Standards\Region\GeographicRegion */
class GeographicRegionTest extends TestCase
{
    /** @covers ::getDirectSubRegions */
    public function testGetDirectSubRegions(): void
    {
        static::assertSame(
            [
                GeographicRegion::Latin_America_And_The_Caribbean,
                GeographicRegion::Northern_America
            ],
            GeographicRegion::Americas->getDirectSubRegions()
        );
    }

    /** @covers ::getAllSubRegions */
    public function testGetAllSubRegions(): void
    {
        static::assertSame(
            [
                GeographicRegion::Latin_America_And_The_Caribbean,
                GeographicRegion::Caribbean,
                GeographicRegion::Central_America,
                GeographicRegion::South_America,
                GeographicRegion::Northern_America
            ],
            GeographicRegion::Americas->getAllSubRegions()
        );
    }
}

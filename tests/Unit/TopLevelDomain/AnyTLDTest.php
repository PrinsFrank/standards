<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\TopLevelDomain;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\TopLevelDomain\AnyTLD;
use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;
use ValueError;

#[CoversClass(AnyTLD::class)]
class AnyTLDTest extends TestCase {
    public function testTryFrom(): void {
        static::assertNull(AnyTLD::tryFrom('boop'));

        static::assertSame(CountryCodeTLD::ac, AnyTLD::tryFrom('ac'));
        static::assertSame(GenericRestrictedTLD::biz, AnyTLD::tryFrom('biz'));
        static::assertSame(GenericTLD::aaa, AnyTLD::tryFrom('aaa'));
        static::assertSame(InfrastructureTLD::arpa, AnyTLD::tryFrom('arpa'));
        static::assertSame(SponsoredTLD::aero, AnyTLD::tryFrom('aero'));
        static::assertSame(TestTLD::akhtbar_arabic, AnyTLD::tryFrom('إختبار'));
    }

    /** @throws ValueError */
    public function testFrom(): void {
        static::assertSame(CountryCodeTLD::ac, AnyTLD::from('ac'));
        static::assertSame(GenericRestrictedTLD::biz, AnyTLD::from('biz'));
        static::assertSame(GenericTLD::aaa, AnyTLD::from('aaa'));
        static::assertSame(InfrastructureTLD::arpa, AnyTLD::from('arpa'));
        static::assertSame(SponsoredTLD::aero, AnyTLD::from('aero'));
        static::assertSame(TestTLD::akhtbar_arabic, AnyTLD::from('إختبار'));

        $this->expectException(ValueError::class);
        $this->expectExceptionMessage('"boop" is not a valid backing value for any TLD enum');
        AnyTLD::from('boop');
    }
}

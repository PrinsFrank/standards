<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Name;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Name\NameOrder;

#[CoversClass(NameOrder::class)]
class NameOrderTest extends TestCase {
    public function testFormatPermutations(): void {
        // Different permutations - three names
        static::assertSame('Foo Bar Boop', NameOrder::Western->format('Foo', 'Bar', 'Boop'));
        static::assertSame('Boop Bar Foo', NameOrder::Eastern->format('Foo', 'Bar', 'Boop'));

        // Different permutations - Only first and last
        static::assertSame('Foo Boop', NameOrder::Western->format('Foo', null, 'Boop'));
        static::assertSame('Boop Foo', NameOrder::Eastern->format('Foo', null, 'Boop'));

        // Different permutations - Only first and middle
        static::assertSame('Foo Bar', NameOrder::Western->format('Foo', 'Bar', null));
        static::assertSame('Bar Foo', NameOrder::Eastern->format('Foo', 'Bar', null));

        // Different permutations - Only middle and last
        static::assertSame('Bar Boop', NameOrder::Western->format(null, 'Bar', 'Boop'));
        static::assertSame('Boop Bar', NameOrder::Eastern->format(null, 'Bar', 'Boop'));

        // Different permutations - Only first
        static::assertSame('Foo', NameOrder::Western->format('Foo', null, null));
        static::assertSame('Foo', NameOrder::Eastern->format('Foo', null, null));

        // Different permutations - Only middle
        static::assertSame('Bar', NameOrder::Western->format(null, 'Bar', null));
        static::assertSame('Bar', NameOrder::Eastern->format(null, 'Bar', null));

        // Different permutations - Only last
        static::assertSame('Boop', NameOrder::Western->format(null, null, 'Boop'));
        static::assertSame('Boop', NameOrder::Eastern->format(null, null, 'Boop'));

        // Different permutations - None
        static::assertSame('', NameOrder::Western->format(null, null, null));
        static::assertSame('', NameOrder::Eastern->format(null, null, null));
    }

    public function testActualNames(): void {
        // Mononyms
        static::assertSame('Teller', NameOrder::Eastern->format('Teller', null, null));
        static::assertSame('Teller', NameOrder::Western->format('Teller', null, null));

        // Eastern
        static::assertSame('Abe Shinzo', NameOrder::Eastern->format('Shinzo', null, 'Abe'));

        // Western
        static::assertSame('Frank Prins', NameOrder::Western->format('Frank', null, 'Prins'));
    }
}

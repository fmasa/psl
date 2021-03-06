<?php

declare(strict_types=1);

namespace Psl\Tests\Str\Byte;

use PHPUnit\Framework\TestCase;
use Psl\Str\Byte;

class CompareCiTest extends TestCase
{
    /**
     * @dataProvider provideData
     */
    public function testCompareCi(int $expected, string $str1, string $str2, ?int $length = null): void
    {
        $diff = Byte\compare_ci($str1, $str2, $length);

        if (0 === $expected) {
            self::assertSame(0, $diff);
        } elseif (0 > $expected) {
            self::assertLessThanOrEqual(-1, $diff);
        } else {
            self::assertGreaterThanOrEqual(1, $diff);
        }
    }

    public function provideData(): array
    {
        return [
            [0, 'Hello', 'hello'],
            [0, 'hello', 'Hello'],
            [0, 'Hello', 'Hello'],
            [-1, 'Hello', 'helloo'],
            [1, 'Helloo', 'hello'],
            [0, 'Helloo', 'hello', 2],
            [0, 'Helloo', 'hello', 5],
            [1, 'Helloo', 'hello', 6],
        ];
    }
}

<?php

declare(strict_types=1);

namespace Psl\Tests\Str\Byte;

use PHPUnit\Framework\TestCase;
use Psl\Str\Byte;

class Rot13Test extends TestCase
{
    /**
     * @dataProvider provideData
     */
    public function testWords(string $expected, string $string): void
    {
        self::assertSame($expected, Byte\rot13($string));
    }

    public function provideData(): array
    {
        return [
            ['', ''],
            ['Uryyb', 'Hello'],
            ['Uryyb, Jbeyq!', 'Hello, World!'],
        ];
    }
}

<?php

declare(strict_types=1);

namespace Psl\Str\Byte;

/**
 * Perform the rot13 transform on a string.
 *
 * @psalm-pure
 */
function rot13(string $string): string
{
    return \str_rot13($string);
}

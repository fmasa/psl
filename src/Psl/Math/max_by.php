<?php

declare(strict_types=1);

namespace Psl\Math;

use Psl;

/**
 * Returns the largest element of the given iterable, or null if the
 * iterable is empty.
 *
 * The value for comparison is determined by the given function in the case of
 * duplicate numeric keys, later values overwrite the previous ones.
 *
 * @psalm-template T
 *
 * @psalm-param list<T>                     $values
 * @psalm-param (pure-callable(T): numeric) $num_func
 *
 * @psalm-return null|T
 *
 * @psalm-pure
 */
function max_by(array $values, callable $num_func)
{
    $max = null;
    $max_num = null;
    foreach ($values as $value) {
        $value_num = $num_func($value);
        if (null === $max_num || $value_num >= $max_num) {
            $max = $value;
            $max_num = $value_num;
        }
    }

    return $max;
}

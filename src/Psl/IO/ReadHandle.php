<?php

declare(strict_types=1);

namespace Psl\IO;

/**
 * An interface for a readable Handle.
 */
interface ReadHandle extends Handle
{
    /**
     * Read until we reach `$max_bytes`, or the end of the file.
     */
    public function read(?int $max_bytes = null): string;

    /**
     * Read until we reach `$max_bytes`, the end of the file, or the
     * end of the line.
     *
     * 'End of line' is platform-specific, and matches the C `fgets()`
     * function; the newline character/characters are included in the
     * return value.
     */
    public function readLine(?int $max_bytes = null): string;
}

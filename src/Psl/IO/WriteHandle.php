<?php

declare(strict_types=1);

namespace Psl\IO;

/**
 * An interface for a writable Handle.
 */
interface WriteHandle extends Handle
{
    /**
     * Possibly write some of the string.
     *
     * Returns the number of bytes written, which may be 0.
     */
    public function write(string $bytes): int;

    public function flush(): void;
}

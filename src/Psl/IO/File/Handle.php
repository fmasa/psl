<?php

declare(strict_types=1);

namespace Psl\IO\File;

use Psl\IO;

interface Handle extends IO\SeekableHandle
{
    /**
     * Get the name of this file.
     */
    public function getPath(): Path;

    /**
     * Get the size of the file.
     */
    public function getSize(): int;

    /**
     * Get a shared or exclusive lock on the file.
     *
     * @throws `Exception\AlreadyLockedException` if `lock()` would block and the lock type is non-blocking.
     */
    public function lock(int $lock_type, bool $non_blocking = false): Lock;
}

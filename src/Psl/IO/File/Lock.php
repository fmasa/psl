<?php

declare(strict_types=1);

namespace Psl\IO\File;

use Psl;

/**
 * A File Lock.
 *
 * To acquire one, call `lock` on a Base object.
 *
 * Note that in some cases, such as the non-blocking lock types, we may throw
 * an `Exception\LockAcquisitionException` instead of acquiring the lock. If this
 * is not desired behavior it should be guarded against.
 */
final class Lock
{
    private $handle;
    private bool $released = false;

    public function __construct($handle)
    {
        Psl\invariant(\is_resource($handle), 'Expected $resource to be of type resource, %s given.', \gettype($handle));
        $this->handle = $handle;
    }

    public function __destruct()
    {
        if (!$this->released) {
            $this->release();
        }
    }

    public function release(): void
    {
        Psl\invariant(!$this->released, 'Lock has already been released.');
        \flock($this->handle, \LOCK_UN);
    }
}

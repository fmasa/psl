<?php

declare(strict_types=1);

namespace Psl\IO;

/**
 * An interface for an IO stream.
 *
 * For example, an IO handle might be attached to a file, a network socket, or
 * just an in-memory buffer.
 *
 * Psl IO handles can be thought of as having a combination of behaviors - some
 * of which are mutually exclusive - which are reflected in more-specific
 * interfaces; for example:
 *
 * - Seekable ( `IO\SeekableHandle` )
 * - Readable ( `IO\ReadHandle` )
 * - Writeable ( `IO\WriteHandle` )
 */
interface Handle
{
    public function isEndOfFile(): bool;

    public function close(): void;
}

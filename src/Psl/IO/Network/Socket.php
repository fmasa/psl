<?php

declare(strict_types=1);

namespace Psl\IO\Network;

use Psl\IO;

/**
 * A handle representing a connection between processes.
 *
 * It is possible for both ends to be connected to the same process,
 * and to either be local or across a network.
 */
interface Socket extends IO\ReadWriteHandle
{
    /**
     * Returns the address of the local side of the socket
     */
    public function getLocalAddress(): string;

    /**
     * Returns the address of the remote side of the socket
     */
    public function getPeerAddress(): string;
}

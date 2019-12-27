<?php
declare(strict_types=1);

namespace Psl\IO\Network;

/**
 * Generic interface for a class able to accept socket connections.
 */
interface Server
{
    /**
     * Retrieve the next pending connection as a disposable.
     *
     * Will wait for new connections if none are pending.
     */
    public function nextConnection(): Socket;

    /**
     * Return the local (listening) address for the server
     */
    public function getLocalAddress(): string;
}

<?php

declare(strict_types=1);

namespace Psl\IO;

interface SeekableReadWriteHandle extends ReadWriteHandle, SeekableReadHandle, SeekableWriteHandle
{
}

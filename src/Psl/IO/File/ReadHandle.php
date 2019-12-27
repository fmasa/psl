<?php

declare(strict_types=1);

namespace Psl\IO\File;

use Psl\IO;

interface ReadHandle extends Handle, IO\SeekableReadHandle
{
}

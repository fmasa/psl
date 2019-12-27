<?php

declare(strict_types=1);

namespace Psl\IO\File;

use Psl\Iter;
use Psl\Str;

final class Path
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function toString(): string
    {
        return $this->path;
    }

    public function isAbsolute(): bool
    {
        return Str\starts_with($this->path, \DIRECTORY_SEPARATOR);
    }

    public function isRelative(): bool
    {
        return !$this->isAbsolute();
    }

    public function isDirectory(): bool
    {
        return \is_dir($this->path);
    }

    public function isFile(): bool
    {
        return \is_file($this->path);
    }

    public function isSymlink(): bool
    {
        return \is_link($this->path);
    }

    public function exists(): bool
    {
        return \file_exists($this->path);
    }

    public function getParent(): Path
    {
        return new Path(\dirname($this->path));
    }

    public function getBaseName(): string
    {
        return \basename($this->path);
    }

    public function getExtension(): ?string
    {
        $extension = \pathinfo($this->path, \PATHINFO_EXTENSION);
        return '' === $extension ? null : $extension;
    }

    public function getParts(): array
    {
        return Iter\to_array(Iter\filter(
            Str\split($this->path, \DIRECTORY_SEPARATOR),
            fn ($part) => !Str\is_empty($part)
        ));
    }

    public function withExtension(string $extension): Path
    {
        $extension = Str\strip_prefix($extension, '.');
        $new_path = $this->path;
        $current_extension = $this->getExtension();
        if (null !== $current_extension) {
            $new_path = Str\strip_suffix($new_path, '.' . $current_extension);
        }

        return new Path($new_path . '.' . $extension);
    }
}

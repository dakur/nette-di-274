<?php declare(strict_types = 1);

namespace App\Infrastructure;

use League\Flysystem\Filesystem;


final class FilesystemProvider implements \App\Model\FilesystemProvider
{

	public function __construct(
		private Filesystem $filesystem,
	) {}

	public function getFilesystem(): Filesystem
	{
		return $this->filesystem;
	}

}

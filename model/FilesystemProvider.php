<?php declare(strict_types = 1);

namespace App\Model;

use League\Flysystem\Filesystem;


interface FilesystemProvider
{

	public function getFilesystem(): Filesystem;

}

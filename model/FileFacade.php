<?php declare(strict_types = 1);

namespace App\Model;

use League\Flysystem\Filesystem;
use Nette\Utils\Random;


final class FileFacade
{

	public function __construct(
		private Filesystem $filesystem,
	) {}

	public function save()
	{
		$this->filesystem->write(Random::generate() . '.txt', 'it works');
	}

}

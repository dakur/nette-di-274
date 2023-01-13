<?php declare(strict_types=1);


namespace App\Model;


use Nette\Configurator;
use Mangoweb\NetteDIScope\ScopeExtension;
use Nette;

final class ModelExtension extends ScopeExtension
{

	public static function getTagName(): string
	{
		return 'API';
	}

	protected function createInnerConfigurator(): Configurator
	{
		$configurator = parent::createInnerConfigurator();
		$configurator->addConfig(__DIR__ . '/services.neon');
		$configurator->addConfig(__DIR__ . '/../config/local.neon');
		return $configurator;
	}


}

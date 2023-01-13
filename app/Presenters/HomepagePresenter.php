<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Model\FileFacade;
use Nette;
use Nette\Application\UI\Form;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

	public function __construct(
		private FileFacade $fileFacade,
	) {
		parent::__construct();
	}

	public function createComponentSaveFile(): Form
	{
		$form = new Form();
		$form->addSubmit('submit', 'Save file');
		$form->onSuccess[] = function () {
			$this->fileFacade->save();
			$this->flashMessage('File successfully stored');
			$this->redirect('this');
		};
		return $form;
	}

}

<?php

namespace Demo\Controller\Front;

use Base\Controller\BaseActionController;

class TestController extends BaseActionController
{
	public function indexAction()
	{
		return new ViewModel(array(	
		));
	}
		
	public function viewAction()
	{
		$viewModel = $this->getViewModel(__METHOD__);
		return $viewModel;
	}
}
<?php

namespace Demo\Controller\Front;

use ZendStore\Controller\FrontActionController;

class DemoController extends FrontActionController
{
	public function indexAction()
	{
		$viewModel = $this->getViewModel(__METHOD__);
		
		return $viewModel;
	}	
}
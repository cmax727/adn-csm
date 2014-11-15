<?php

class Provider_ClientController extends BaseController{
	protected $layout = 'layouts.dashboard';
	protected $clien = null;

	public function getIndex()
	{
		$this->layout->content = View::make('providers/clients/index');
	}

	public function getNew($currentStep = 1)
	{
		$this->layout->content = View::make('providers/clients/steps/step'.$currentStep, ['currentStep' => $currentStep]);
	}

	public function getDashboard()
	{
		$this->layout->content = View::make('providers/clients/dashboard');	
	}
}
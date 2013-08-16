<?php

class Client_JobController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->menu = View::make('clients.menu');
		$this->layout->content = View::make('clients/jobs/form');
	}

}
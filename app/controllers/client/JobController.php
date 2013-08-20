<?php

class Client_JobController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->content = View::make('clients/jobs/index');
	}

	public function getNew()
	{
		$this->layout->content = View::make('clients/jobs/form-tabs');
	}

}
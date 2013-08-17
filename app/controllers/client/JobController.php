<?php

class Client_JobController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
	}

	public function getNew()
	{
		$this->layout->content = View::make('clients/jobs/form-tabs');
	}

}
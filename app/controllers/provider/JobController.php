<?php

class Provider_JobController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->content = View::make('providers/jobs/index');
	}
	public function getNew()
	{
		$this->layout->content = View::make('providers/jobs/form');
	}

}
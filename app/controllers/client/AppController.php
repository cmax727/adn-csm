<?php

class Client_AppController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->content = View::make('clients/jobs/form');
	}

	public function getFilter()
	{
		$this->layout->content = View::make('clients/apps/app-filter');
	}

}
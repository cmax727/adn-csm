<?php

class Client_AppController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->content = '';
	}

	public function getFilter()
	{
		$this->layout->content = View::make('clients/apps/app-filter');
	}

}
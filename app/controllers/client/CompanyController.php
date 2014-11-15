<?php

class Client_CompanyController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->content = View::make('clients/company');
	}

}
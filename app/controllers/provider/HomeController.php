<?php

class Provider_HomeController extends BaseController {
	protected $layout = 'layouts.dashboard';

	public function index()
	{
		$this->layout->content = View::make('providers/index');
	}

}
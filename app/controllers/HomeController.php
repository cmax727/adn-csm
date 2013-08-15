<?php

class HomeController extends BaseController {
	protected $layout = 'layouts.dashboard';

	public function index()
	{
		$this->layout->content = View::make('index');
	}

}
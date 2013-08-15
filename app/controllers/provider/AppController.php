<?php

class AppController extends BaseController {
	protected $layout = 'layouts.dashboard';

	public function index()
	{
		$this->layout->content = View::make('index');
	}

}
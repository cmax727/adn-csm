<?php

class LoginController extends BaseController {
	protected $layout = 'layouts.default';

	public function getIndex()
	{
		$this->layout->content = View::make('login');
	}
	
}
<?php

class Provider_AppController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->content = View::make('providers/app/index');
	}
	public function getMail(){
		$this->layout->content = View::make('providers/app/mail');
	}


}
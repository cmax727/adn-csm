<?php

class AuthController extends BaseController {
	protected $layout = 'layouts.default';

	public function getLogin()
	{
		$this->layout->content = View::make('login');
	}

	public function postLogin()
	{
		$credentials = ['username' => Input::get('email'), 'password' => Input::get('password')];

		if(Auth::attempt($credentials))
		{
			return Redirect::to('dashboard');
		}else{
			return Redirect::to('login')->with('flash.message', '');
			/*$errors = ['username' => ['Invalid Username/Password']];
			return Response::json(['errors'=>$errors]);*/
		}
	}

	public function getLogout()
	{
		if (Auth::user()) {
			Auth::logout();
		}
		return Redirect::to('')->with('flash.message', 'Successfuly logged out.');
	}

}
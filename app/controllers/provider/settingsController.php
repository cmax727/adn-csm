<?php

class Provider_SettingsController extends BaseController{
	protected $layout = 'layouts.dashboard';

	public function getIndex()
	{
		$this->layout->menu = View::make('providers.menu');
		$this->layout->content = View::make('providers/settings');
	}

}
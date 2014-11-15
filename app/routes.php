<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return Redirect::to('auth/login');
});

Route::controller('auth', 'AuthController');

Route::group(array('prefix' => 'provider'), function(){

    Route::get('/', 'Provider_HomeController@index');
    Route::controller('client', 'Provider_ClientController');
	Route::controller('settings', 'Provider_SettingsController');
	Route::controller('job', 'Provider_JobController');
	Route::controller('app', 'Provider_AppController');
	Route::controller('banner', 'Provider_BannerController');
});

Route::group(array('prefix' => 'client'), function(){

	Route::controller('job', 'Client_JobController');
	Route::controller('app', 'Client_AppController');
	Route::controller('company', 'Client_CompanyController');

});
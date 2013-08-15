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

Route::get('/', 'HomeController@index');

Route::controller('login', 'LoginController');
Route::controller('provider/settings', 'SettingsController');
Route::controller('client/job', 'JobController');
Route::controller('client/app', 'AppController');

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
//Route::controller('app', 'AppController');
/*
//Controller located at /app/controllers/Something/SomeController
<?php
class Something_SomeController extends BaseController {
        public function getIndex(){
                  DB::table('users')->get();
         }
}
//routes.php
Route::controller('some/thing','Something_SomeController');*/
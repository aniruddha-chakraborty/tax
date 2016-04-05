<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');

});


Route::get('superadmin/login',[

	'uses' => 'SuperAdminController@login',
	'as'   => 'SuperAdminLogin',
	'middleware' => ['guest']

]);

Route::post('superadmin/postLogin', [

	'uses' => 'SuperAdminController@postLogin',
	'as'   => 'SuperAdminPostLogin',
	'middleware' => ['guest']

]);

Route::get('superadmin/dash', [

	'uses' => 'SuperAdminController@dash',
	'as'   => 'SuperAdminDash',
	'middleware' => 'auth:superAdmin'

]);

Route::get('logout', [

	'uses' => 'SuperAdminController@dash',
	'as'   => 'SuperAdminDash',
	'middleware' => 'auth:superAdmin'

]);










Route::get('ministry/login',[

	'uses' => 'MinistryAdminController@login',
	'as'   => 'SuperAdminLogin',
	'middleware' => ['guest']

]);

Route::post('ministry/postLogin', [

	'uses' => 'MinistryAdminController@postLogin',
	'as'   => 'SuperAdminPostLogin',
	'middleware' => ['guest']

]);

Route::get('ministry/dash', [

	'uses' => 'MinistryAdminController@dash',
	'as'   => 'SuperAdminDash',
	'middleware' => 'auth:superAdmin'

]);

Route::get('logout', [

	'uses' => 'MinistryAdminController@dash',
	'as'   => 'SuperAMinistryAdminControllerdminDash',
	'middleware' => 'auth:superAdmin'

]);









Route::get('/home', 'HomeController@index');

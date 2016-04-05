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

// Super Admin login

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

Route::get('superadmin/logout', [

	'uses' => 'SuperAdminController@logout',
	'as'   => 'SuperAdminLogout',

]);




// ministry login

Route::get('ministry/login',[

	'uses' => 'MinistryAdminController@login',
	'as'   => 'MinistryAdminLogin',
	'middleware' => ['guest']

]);

Route::post('ministry/postLogin', [

	'uses' => 'MinistryAdminController@postLogin',
	'as'   => 'MinistryAdminPostLogin',
	'middleware' => ['guest']

]);

Route::get('ministry/dash', [

	'uses' => 'MinistryAdminController@dash',
	'as'   => 'MinistryAdminDash',
	'middleware' => 'auth:ministryAdmin'

]);

Route::get('ministry/logout', [

	'uses' => 'MinistryAdminController@logout',
	'as'   => 'MinistryAdminLogout',

]);



// Shopkeeper Login

Route::get('shopkeeper/login',[

	'uses' => 'shopkeeper@login',
	'as'   => 'SuperAdminLogin',
	'middleware' => ['guest']

]);

Route::post('shopkeeper/postLogin', [

	'uses' => 'shopkeeper@postLogin',
	'as'   => 'SuperAdminPostLogin',
	'middleware' => ['guestministryadmin']

]);

Route::get('shopkeepershopkeeper/dash', [

	'uses' => 'shopkeeper@dash',
	'as'   => 'SuperAdminDash',
	'middleware' => 'auth:web'

]);

Route::get('shopkeeper/logout', [

	'uses' => 'shopkeeper@logout',
	'as'   => 'ShopkeeperLogout',

]);









Route::get('/home', 'HomeController@index');

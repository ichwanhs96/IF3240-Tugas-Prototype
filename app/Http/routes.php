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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/kasir', 'KasirController@home');

Route::get('/kasir/pesanan/{id}', 'KasirController@pesanan');
//Settings: create a new setting
Route::post( '/kasir/pesanan/{id}/add', array(
    'as' => 'pesanan.add',
    'uses' => 'KasirController@addPesanan'
) );

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//manager's route
Route::get('/manager', array(
	'as' =>'manager.home',
	'uses' =>'ManagerController@home')
	);
Route::post('/manager/login', array(
	'as' => 'manager.login',
	'uses' => 'ManagerController@login')
	);
Route::get('/manager/logout', array(
	'as' => 'manager.logout',
	'uses' => 'ManagerController@logout')
	);
Route::get('/manager/edit_menu_makanan', array(
	'as' => 'manager.list_menu_makanan',
	'uses' => 'ManagerController@getMenu')
	);
Route::get('/manager/edit_menu_makanan/{id}', array(
	'as' => 'manager.editMenu',
	'uses' => 'ManagerController@editMenu')
	);

Route::get('/manager/tambah_menu_makanan', array(
	'as' => 'manager.tambahMenu',
	'uses' => 'ManagerController@tambahMenu')
	);

Route::post('/manager/update_menu_makanan', array(
	'as' => 'manager.updateMenu',
	'uses' => 'ManagerController@updateMenu')
	);

Route::get('/manager/laporan', array(
	'as' => 'manager.laporan',
	'uses' => function(){
		return view('manager.laporan');
	})
	);

Route::post('/manager/generate_laporan', array(
	'as' => 'manager.generateLaporan',
	'uses' => 'ManagerController@generateLaporan')
	);
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

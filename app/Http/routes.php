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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('pengajuan-proker', ['as'=>'proker.create', 'uses'=>'ProkerController@create']);
Route::post('pengajuan-proker', ['as'=>'proker.postCreate', 'uses'=>'ProkerController@postC
	reate']);

Route::group(['prefix'=>'admin'], function() {
  Route::get('/', ['as'=>'admin.index', 'uses'=>'Admin\AdminController@index']);
  Route::get('list-proker', ['as'=>'admin.proker.index', 'uses'=>'Admin\ProkerController@index']);
});

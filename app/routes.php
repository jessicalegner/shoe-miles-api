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

Route::get('auth', 'Tappleby\AuthToken\AuthTokenController@index');
Route::post('auth', 'Tappleby\AuthToken\AuthTokenController@store');
Route::delete('auth', 'Tappleby\AuthToken\AuthTokenController@destroy');

Route::group(['prefix' => 'api/v1', 'before' => 'auth.token'], function() {
	Route::resource('shoes', 'ShoesController', array('except' => array('edit', 'create', 'index')));

	Route::get('/shoes/user/{user}', 'ShoesController@userShoes');
});
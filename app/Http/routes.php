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

Route::get('/','fieldsController@show');
Route::post('submit', 'fieldsController@index');
Route::get('edit/{id}', 'fieldsController@edit');
Route::get('delete/{id}', 'fieldsController@delete');



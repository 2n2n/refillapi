<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'DashboardController@index');

Route::get('client', 'ClientController@index');
Route::get('client/create', 'ClientController@create');
Route::get('client/delete', 'ClientController@delete');
Route::post('client/register', 'ClientController@register');
Route::post('client/remove', 'ClientController@remove');


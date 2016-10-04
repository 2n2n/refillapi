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
use App\Client;
use \Carbon\Carbon;
Route::get('/', function () {
    return view('welcome');
});

Route::get('ag/simple', function() {
	return view('angular_templates.simple');
});
Route::get('/test', function() {
	return view('dashboard.landing');
	// $client = new Client;
	// $client->username = 'iris.ras';
	// $client->first_name = 'iris';
	// $client->last_name = 'lloveras';
	// $client->address = 'Pedro Gil';
	// $client->schedule = Carbon::now();
	// $client->save();

	// dd(Client::all());
});

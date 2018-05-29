<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = null) {
	return 'Recibí:'.$name.' y lastname: '.$lastname;
});

Route::get('/mi-primera-ruta', function() {
	return 'Hello world1';
});
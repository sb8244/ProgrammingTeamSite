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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/about', function() {
	return View::make('about');
});

Route::get('/competitions', function() {
	return View::make('competitions');
});

Route::get('/calendar', function() {
	return View::make('calendar');
});

Route::get('/resources', function() {
	return View::make('resources');
});
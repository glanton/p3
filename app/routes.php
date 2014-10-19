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


// home page: provides both forms to generate either dummy text or dummy profiles
Route::get('/', function() {
	
	return View::make('_master');
	
});


// send request for dummy text
Route::get('/text/{query}', function($query) {
	
	return "submit text form";

});


// display dummy text and form to quickly re-process dummy text
Route::get('/text', function() {
	
	return View::make('text');

});


// send request for dummy profile
Route::get('/profile/{query}', function($query) {
	
	return "submit profile form";

});



// display dummy profile and form to quickly re-process dummy profile
Route::get('/profile', function() {
	
	return View::make('profile');

});


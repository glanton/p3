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
	
	// set default value for number of dummy paragraphs
	$numberOfParagraphs = 4;
	
	// set defaults for number of dummy paragraphs and other options
	$numberOfProfiles = 5;
	$includeBirthday = false;
	$includeLocation = false;
	$includePicture = false;
	
	return View::make('_master')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture);
	
});


// send and display request for dummy text
Route::get('/text/{query}', function($query) {

	// set defaults for number of dummy paragraphs and other options
	$numberOfProfiles = 5;
	$includeBirthday = false;
	$includeLocation = false;
	$includePicture = false;

	// retrieve requested number of paragraphs
	$numberOfParagraphs = Input::get('numberOfParagraphs');
	
	// strip to integer and pull back to 1 or 7 if outside of range
	$numberOfParagraphs = intval($numberOfParagraphs);
	if ($numberOfParagraphs < 1) {
		$numberOfParagraphs = 1;
	} elseif ($numberOfParagraphs > 7) {
		$numberOfParagraphs = 7;
	}

	return View::make('text')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture);

});


// send and display request for dummy profile
Route::get('/profile/{query}', function($query) {
	
	// set default value for number of dummy paragraphs
	$numberOfParagraphs = 4;
	
	// retrieve requested number of profiles and birthday, location, and picture options
	$numberOfProfiles = Input::get('numberOfProfiles');
	$includeBirthday = Input::get('includeBirthday');
	$includeLocation = Input::get('includeLocation');
	$includePicture = Input::get('includePicture');
	
	return View::make('profile')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture);

});


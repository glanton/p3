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
	
	// retrieve requested form data for dummy paragraphs and profiles and set to default values if not provided
	$numberOfParagraphs = Input::get('numberOfParagraphs', 4);
	$numberOfProfiles = Input::get('numberOfProfiles', 5);
	$includeBirthday = Input::get('includeBirthday', false);
	$includeLocation = Input::get('includeLocation', false);
	$includePicture = Input::get('includePicture', false);
	
	return View::make('_master')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture);
	
});


// send and display request for dummy text
Route::get('/text/{query}', function($query) {

	// retrieve requested form data for dummy paragraphs and profiles and set to default values if not provided
	$numberOfParagraphs = Input::get('numberOfParagraphs', 4);
	$numberOfProfiles = Input::get('numberOfProfiles', 5);
	$includeBirthday = Input::get('includeBirthday', false);
	$includeLocation = Input::get('includeLocation', false);
	$includePicture = Input::get('includePicture', false);
	
	// strip numberOfParagraphs to integer and pull back to 1 or 7 if outside of range
	$numberOfParagraphs = intval($numberOfParagraphs);
	if ($numberOfParagraphs < 1) {
		$numberOfParagraphs = 1;
	} elseif ($numberOfParagraphs > 7) {
		$numberOfParagraphs = 7;
	}
	
	$booksToRead = array("AnneOfGreenGables",
				"Dracula",
				"Frankenstein",
				"GreatExpectations",
				"HeartOfDarkness",
				"JaneEyre",
				"MobyDick",
				"PortraitOfTheArtist",
				"PrideAndPrejudice",
				"TheScarletLetter");
            
        $openedBooks = array();
            
	$numberOfBooksToRead = count($booksToRead);
	for ($i = 0; $i < $numberOfBooksToRead; $i++) {
	    $bookString = file_get_contents(asset('books/' . $booksToRead[$i] . '.txt'));
	    array_push($openedBooks, preg_split('/(?<!Mr\.)(?<!Mrs\.)(?<!Ms\.)(?<!Dr\.)(?<!St\.)(?<=[.?!])\s+(?=[a-z])/i', $bookString));
	}
	
	$paragraphLength = rand(4, 7);
	$generatedParagraphs = array();
	
	for ($k = 0; $k < $numberOfParagraphs; $k++) {
	    for ($i = 0; $i < $paragraphLength; $i++) {
		$randomBook = rand(0, $numberOfBooksToRead - 1);
		$randomSentence = rand(0, count($openedBooks[$randomBook]));
		$generatedParagraphs[$k][$i] = $openedBooks[$randomBook][$randomSentence];
	    }
	}
	
	
	return View::make('text')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture)
		->with('generatedParagraphs', $generatedParagraphs);

});


// send and display request for dummy profile
Route::get('/profile/{query}', function($query) {
	
	// retrieve requested form data for dummy paragraphs and profiles and set to default values if not provided
	$numberOfParagraphs = Input::get('numberOfParagraphs', 4);
	$numberOfProfiles = Input::get('numberOfProfiles', 5);
	$includeBirthday = Input::get('includeBirthday', false);
	$includeLocation = Input::get('includeLocation', false);
	$includePicture = Input::get('includePicture', false);
	
	// strip numberOfProiles to integer and pull back to 1 or 30 if outside of range
	$numberOfProfiles = intval($numberOfProfiles);
	if ($numberOfProfiles < 1) {
		$numberOfProfiles = 1;
	} elseif ($numberOfProfiles > 30) {
		$numberOfProfiles = 30;
	}
	
	return View::make('profile')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture);

});


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
	$numberOfParagraphs = Input::get('numberOfParagraphs', 5);
	$numberOfProfiles = Input::get('numberOfProfiles', 5);
	$includeBirthday = Input::get('includeBirthday', false);
	$includeLocation = Input::get('includeLocation', false);
	$includePicture = Input::get('includePicture', false);
	$includeFavoriteQuote = Input::get('includeFavoriteQuote', false);
	
	return View::make('_master')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture)
		->with('includeFavoriteQuote', $includeFavoriteQuote);
	
});


// send and display request for dummy text
Route::get('/text/{query}', function($query) {

	// retrieve requested form data for dummy paragraphs and profiles and set to default values if not provided
	$numberOfParagraphs = Input::get('numberOfParagraphs', 5);
	$numberOfProfiles = Input::get('numberOfProfiles', 5);
	$includeBirthday = Input::get('includeBirthday', false);
	$includeLocation = Input::get('includeLocation', false);
	$includePicture = Input::get('includePicture', false);
	$includeFavoriteQuote = Input::get('includeFavoriteQuote', false);
	
	// strip numberOfParagraphs to integer and pull back to 1 or 7 if outside of range
	$numberOfParagraphs = intval($numberOfParagraphs);
	if ($numberOfParagraphs < 1) {
		$numberOfParagraphs = 1;
	} elseif ($numberOfParagraphs > 50) {
		$numberOfParagraphs = 50;
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
		$randomSentence = rand(0, count($openedBooks[$randomBook]) - 1);
		$generatedParagraphs[$k][$i] = $openedBooks[$randomBook][$randomSentence];
	    }
	}
	
	
	return View::make('text')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture)
		->with('generatedParagraphs', $generatedParagraphs)
		->with('includeFavoriteQuote', $includeFavoriteQuote);

});


// send and display request for dummy profile
Route::get('/profile/{query}', function($query) {
	
	// retrieve requested form data for dummy paragraphs and profiles and set to default values if not provided
	$numberOfParagraphs = Input::get('numberOfParagraphs', 5);
	$numberOfProfiles = Input::get('numberOfProfiles', 5);
	$includeBirthday = Input::get('includeBirthday', false);
	$includeLocation = Input::get('includeLocation', false);
	$includePicture = Input::get('includePicture', false);
	$includeFavoriteQuote = Input::get('includeFavoriteQuote', false);
	
	// strip numberOfProiles to integer and pull back to 1 or 30 if outside of range
	$numberOfProfiles = intval($numberOfProfiles);
	if ($numberOfProfiles < 1) {
		$numberOfProfiles = 1;
	} elseif ($numberOfProfiles > 50) {
		$numberOfProfiles = 50;
	}
	
	$faces = array(': )', ':-)', ': ]', ':-]', ': }', ':-}',
               ': )', ':-(', ': [', ':-[', ': {', ':-{', ':, (',
               '; )', ';-)', '; ]', ';-]', '; }', ';-}',
               ': |', ':-|', ': /', ':-/', ': \\', ':-\\');
	$facesLength = count($faces) - 1;
	
	$generatedProfiles = array();
	
	// need to credit this in readme.md
	for ($i = 0; $i < $numberOfProfiles; $i++) {
	    $profilePic = imagecreate(200, 200);
	    $background = imagecolorallocate($profilePic, 0, 0, 0);
	    $text_color = imagecolorallocate($profilePic, 255, 255, 255);
	    $sq_color1 = imagecolorallocate($profilePic, rand(0,255), rand(0,255), rand(0,255));
	    $sq_color2 = imagecolorallocate($profilePic, rand(0,255), rand(0,255), rand(0,255));
	    $sq_color3 = imagecolorallocate($profilePic, rand(0,255), rand(0,255), rand(0,255));
	    $sq_color4 = imagecolorallocate($profilePic, rand(0,255), rand(0,255), rand(0,255));
	    imagefilledrectangle($profilePic, 0, 0, 100, 100, $sq_color1);
	    imagefilledrectangle($profilePic, 101, 101, 200, 200, $sq_color2);
	    imagefilledrectangle($profilePic, 101, 0, 200, 100, $sq_color3);
	    imagefilledrectangle($profilePic, 0, 101, 100, 200, $sq_color4);
	    imagettftext($profilePic, 130, -90, 55, 35, $text_color, public_path() . '/fonts/exprswy_free.ttf', $faces[rand(0, $facesLength)] );
	    
	    ob_start();
	    imagepng($profilePic);
	    $profilePicData = ob_get_contents();
	    ob_end_clean();
	    $profilePicDataBase64 = base64_encode ($profilePicData);
	    $generatedProfiles[$i] = $profilePicDataBase64;
	    
	    imagecolordeallocate($profilePic, $sq_color4);
	    imagecolordeallocate($profilePic, $sq_color3);
	    imagecolordeallocate($profilePic, $sq_color2);
	    imagecolordeallocate($profilePic, $sq_color1);
	    imagecolordeallocate($profilePic, $text_color);
	    imagecolordeallocate($profilePic, $background);
	    imagedestroy($profilePic);
	}
	
	
	
	
	return View::make('profile')
		->with('numberOfParagraphs', $numberOfParagraphs)
		->with('numberOfProfiles', $numberOfProfiles)
		->with('includeBirthday', $includeBirthday)
		->with('includeLocation', $includeLocation)
		->with('includePicture', $includePicture)
		->with('generatedProfiles', $generatedProfiles)
		->with('includeFavoriteQuote', $includeFavoriteQuote);

});


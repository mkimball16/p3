<?php


// Homepage
Route::get('/', function()
{
    return View::make('index');
});

// Display page with lorem ipsum generator form
Route::get('/text', function() {
   return View::make('text');   
});

// Display page with lorem ipsum paragraph results
Route::post('/text', function() {
    $numberOfParagraphs = Input::get('numParagraphs');
    $Generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $Generator->getParagraphs($numberOfParagraphs);
    $result = array('numberOfParagraphs'=>$numberOfParagraphs, 'paragraphs'=>$paragraphs);
    if (is_numeric($numberOfParagraphs)) {
    return View::make('text')->with('result', $result);
    }
    else {
        return View::make('error');
    }
});

// Display page with random user generator form
Route::get('/user', function() {
   return View::make('user');   
});

// Display page with random user results
Route::post('/user', function() {   
    $inputs = Input::all();
    $numberOfUsers = Input::get('users');
    $isBdayRequired = false;
    $isProfileRequired = false;
    $isEmailRequired = false;
    $isPhoneNumberRequired = false;
    foreach($inputs as $key => $value) {
        if ($key == "birthdate")
            $isBdayRequired = true;
        elseif ($key == "profile") 
            $isProfileRequired = true;
        elseif ($key == "email")
            $isEmailRequired = true;
        elseif ($key == "phoneNumber")
            $isPhoneNumberRequired = true;
    }

    $faker = Faker\Factory::create();
    $result = array('numberOfUsers'=>$numberOfUsers, 'isBdayRequired'=>$isBdayRequired, 
        'isProfileRequired'=>$isProfileRequired, 'isEmailRequired'=>$isEmailRequired, 
        'isPhoneNumberRequired'=>$isPhoneNumberRequired, 'faker'=>$faker);
    if (is_numeric($numberOfUsers)) {
    return View::make('user')->with('result', $result);
    }
    else {
        return View::make('error');
    }
});























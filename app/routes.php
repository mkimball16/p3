<?php


// Homepage
Route::get('/', function()
{
    return View::make('index');
});

Route::get('/text', function() {
   return View::make('text');   
});

Route::post('/text', function() {
    $numberOfParagraphs = Input::get('numParagraphs');
    $Generator = new Badcow\LoremIpsum\Generator();
    $paragraphsStr = $Generator->getParagraphs($numberOfParagraphs);
    $result = array('numberOfParagraphs'=>$numberOfParagraphs, 'paragraphsStr'=>$paragraphsStr);
    return View::make('text')->with('result', $result);
});





Route::get('/user', function() {
   return View::make('user');   
});

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
    $result = array('numberOfUsers'=>$numberOfUsers, 'isBdayRequired'=>$isBdayRequired, 'isProfileRequired'=>$isProfileRequired, 'isEmailRequired'=>$isEmailRequired, 'isPhoneNumberRequired'=>$isPhoneNumberRequired, 'faker'=>$faker);
    return View::make('user')->with('result', $result);
});


/*Route::get('/', function() {
	
    return View::make('index');

    $query = Input::get('query');

});




// Display page to generate random users
Route::get('/user/{users?}', function($users = 1)
{
    require_once (base_path().'/vendor/fzaninotto/faker/src/autoload.php');
    $faker = Faker\Factory::create();
    $names = isset($_GET['name']) ? $_GET['name'] : '';
    for ($i = 0; $i < $users; $i++){
         $names[$i] = $faker->name;
    }

    $data['names'] = $names;
    return View::make('user', $data);

        
});

Route::post('/user/{users?}', function($users = 1)
{
    require_once (base_path().'/vendor/fzaninotto/faker/src/autoload.php');
    $faker = Faker\Factory::create();
    $names = isset($_GET['name']) ? $_GET['name'] : '';
    for ($i = 0; $i < $users; $i++){
         $names[$i] = $faker->name;
    }

    $data['names'] = $names;
    return View::make('user', $data);

   }); 

        

// Display page to generate random lorem ipsum text
Route::get('/text/{paragraphs?}', function($paragraphs = 0)
{
    $generator = new Badcow\LoremIpsum\Generator();
    $data['paragraphs'] = $generator->getParagraphs($paragraphs);
    return View::make('text', $data);
});





















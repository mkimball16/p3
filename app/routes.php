<?php


// Homepage
Route::get('/', function() {
	
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

/*Route::get('/user', function($users = 1)
{
    require_once (base_path().'/vendor/fzaninotto/faker/src/autoload.php');
    $faker = Faker\Factory::create();
    $names = isset($_GET['name']) ? $_GET['name'] : '';
    $numberOfUsers = $_POST['numberOfUsers'];
    for ($i = 0; $i < $numberOfUsers; $i++){
         $names[$i] = $faker->name;
    }

    $data['names'] = $names;
    return View::make('user', $data);

        
});*/


// Display page to generate random lorem ipsum text
Route::get('/text/{paragraphs?}', function($paragraphs = 0)
{
    $generator = new Badcow\LoremIpsum\Generator();
    $data['paragraphs'] = $generator->getParagraphs($paragraphs);
    return View::make('text', $data);
});


/*
// Process form for a new user
Route::post('user', function() {

    $numberOfUsers = Input::get('users');
    $faker= Faker\Factory::create() ;
    return View::make('user')->with('user', $numberOfUsers);


});


// Display the form to generate paragraphs of text
Route::get('text', function() {

    return View::make('text');

});


















<?php

function user($numberOfUsers, $dob, $email, $location){


	//Instantiate Faker package
	require_once '../../vendor/fzaninotto/faker/src/autoload.php';
	$faker = Faker/Factory::create();

	for($i=1; $i <= $numberOfUsers; $i++){
		echo $faker->firstName; 
		echo $faker->lastName;
		echo $faker->email;
		echo $faker->dob;
		echo $faker->location;

	}
	
}


	
?>
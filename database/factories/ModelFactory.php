<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\student::class, function (Faker\Generator $faker) {

    return [
    	'user_id' => function(){
    		return factory(App\User::class)->create()->id;
    	},
    	'no' => $faker->regexify('s[0-9]{10}'),
    	'tel' => $faker->phoneNumber()
    ];
});

$factory->define(App\score::class, function (Faker\Generator $faker) {

    return [
    	'student_id' => function(){
    		return factory(App\User::class)->create()->id;
    	},
    	'chinese' => $faker->numberBetween(0,100),
    	'english' => $faker->numberBetween(0,100),
    	'mathe' => $faker->numberBetween(0,100),
    ];
});
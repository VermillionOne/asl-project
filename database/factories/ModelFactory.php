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

$factory->define('App\User', function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->username,
        'email' => $faker->safeEmail,
        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'avatar' => $faker->image,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define('App\Userlist', function (Faker\Generator $faker) {
    return [
        'userId' => mt_rand(3, 27),
        'listTitle' => $faker->sentence(1),
        'listItems' => json_encode($faker->sentences(mt_rand(3,12)))
    ];
});

$factory->define('App\Note', function (Faker\Generator $faker) {
    return [
        'userId' => mt_rand(3, 27),
        'listId' => mt_rand(1, 100),
        'noteBody' => $faker->paragraph
    ];
});

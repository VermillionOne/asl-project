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

$factory->define('App\User_List', function (Faker\Generator $faker) {
    return [
        'book_id' => mt_rand(3, 27),
        'book_order' => mt_rand(1, 100),
        'list_items' => json_encode($faker->sentences(mt_rand(3,12)))
    ];
});

$factory->define('App\Note', function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(3, 27),
        'list_id' => mt_rand(1, 100),
        'note_body' => $faker->paragraph
    ];
});

$factory->define('App\Book', function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 50),
        'book_title' => $faker->sentence,
    ];
});

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for($i = 0; $i < 50; $1++)
        {
            App\User::create([
                'username' => $faker->userName,
                'email' => $faker->safeEmail,
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'avatar' => 'avatar_placeholder.jpg',
                'password' => $password ?: $password = bcrypt('secret'),
                'remember_token' => str_random(10),
                'create_at' => $faker->time
            ]);
        }
    }
}

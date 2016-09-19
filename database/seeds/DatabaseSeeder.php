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

        for($i = 0; $i < 50; $i++)
        {
            $user = App\User::create([
                'username' => $faker->userName,
                'email' => $faker->safeEmail,
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'avatar' => 'avatar_placeholder.jpg',
                'password' => $password = bcrypt('secret'),
                'remember_token' => str_random(10),
            ]);

            for($ii = 0; $ii < 10; $ii++)
            {
                $book = App\Book::create([
                    //'user_id' => mt_rand(1, 50),
                    'book_title' => $faker->sentence,
                ]);

                // dd($user->books());

                $usersList = App\UsersList::create([
                    // 'book_order' => mt_rand(1, 100),
                    'list_items' => json_encode($faker->sentences(mt_rand(3,12)))
                ]);

                $note = App\Note::create([
                    // 'book_order' => mt_rand(1, 100),
                    'note_body' => $faker->paragraph
                ]);


                $user->books()->save($book);
                $book->usersList()->save($usersList);
                $book->note()->save($note);

            }

        }

    }
}

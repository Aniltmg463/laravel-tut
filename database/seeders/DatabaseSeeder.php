<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //method 1
        /*  User::factory(4)->create();
        $this->call([
            UserSeeder::class,
        ]); */


        //method 2
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //method 3 make ot default
        $this->call([
            UserSeeder::class,
        ]);


        /*  //to delete database data
        // User::truncate(); //this empty user tables
        // User::whereIn('id', [2, 3, 4, 5, 6, 7, 8, 9, 10])->delete(); //mulitipla data to delete from table
        // User::where('id', 5)->delete(); //single data delete
        // User::find(5)?->delete(); //sigle data delete */

        //to change password use this
        /* $user = User::find(11); // find user by ID
        $user->password = Hash::make('password123'); // hash the new password insdoe make(user your desire passsword to update)
        $user->save(); // save the changes */
    }
}

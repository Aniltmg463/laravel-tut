<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //method 1
        /*  DB::table('users')->truncate();
        User::create([
            'name' => 'Akasas',
            'email' => 'dummy@gmail.com',
            'password' => Hash::make('password123')
        ]); */

        //method 2
        User::factory()->count(5)->create();
    }
}

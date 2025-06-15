<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('posts')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'age' => $faker->numberBetween(18, 60),
                'city' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
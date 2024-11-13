<?php

namespace Database\Seeders;

use App\Models\Tag;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            Tag::create([
                'name' => $faker->unique()->word,
            ]);
        }
    }
}

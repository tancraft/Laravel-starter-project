<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph(4),
                'image' => $faker->imageUrl(640, 480, 'posts', true, 'post-image'),
            ]);
        }
    }
}

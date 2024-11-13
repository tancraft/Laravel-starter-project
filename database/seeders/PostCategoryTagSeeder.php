<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostCategoryTagSeeder extends Seeder
{
    public function run()
    {
        $posts = Post::all();
        $categories = Category::all();
        $tags = Tag::all();

        // Associe des catégories aux posts
        foreach ($posts as $post) {
            $post->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );

            $post->tags()->attach(
                $tags->random(rand(2, 5))->pluck('id')->toArray()
            );
        }
    }
}

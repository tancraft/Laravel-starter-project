<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            PostSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            PostCategoryTagSeeder::class,
            RoleSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'tancraft',
            'email' => 'tancraft@tancraft.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
            'remember_token'=> Str::random(60)
        ]);

        User::factory()->create([
            'name' => 'alfred',
            'email' => 'alfred@alfred.com',
            'password' => bcrypt('password'),
            'role_id' => 2,
            'remember_token'=> Str::random(60)
        ]);
    }
}

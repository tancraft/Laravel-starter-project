<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $editor = Role::create(['name' => 'editor']);
        $user = Role::create(['name' => 'user']);

        // Associer des rôles aux utilisateurs
        $user1 = User::find(1); // Exemple
        $user1->roles()->attach([$admin->id, $editor->id]);

        $user2 = User::find(2); // Exemple
        $user2->roles()->attach([$editor->id]);
    }
}

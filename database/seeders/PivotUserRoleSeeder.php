<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PivotUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = \App\Models\Role::all(); // Récupère tous les rôles
        $users = \App\Models\User::all(); // Récupère tous les utilisateurs

                // Ajouter un rôle pour chaque utilisateur de manière aléatoire
                foreach ($users as $user) {
                    // On attribue des rôles aléatoires parmi les rôles existants
                    $user->roles()->attach(
                        $roles->random()->id // Associe un rôle aléatoire à l'utilisateur
                    );
                }
    }
}

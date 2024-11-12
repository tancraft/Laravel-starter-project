<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Ajout de la colonne role_id en tant que clé étrangère
            $table->unsignedBigInteger('role_id')->nullable();

            // Ajout de la contrainte de clé étrangère
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Suppression de la contrainte de clé étrangère
            $table->dropForeign(['role_id']);

            // Suppression de la colonne role_id
            $table->dropColumn('role_id');
        });
    }
};


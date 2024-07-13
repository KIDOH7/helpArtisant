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
        Schema::create('artisans', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            // $table->string('prenom');
            $table->string('sexe');
            $table->string('pays');
            $table->string('ville');
            $table->string('quartier');
            $table->string('email')->unique()->nullable();
            $table->string('telephone')->unique()->nullable();
            $table->string('nom_entreprise');
            $table->string('secteur_activite');
            $table->string('domaine_activite');
            $table->string('localisation_entreprise');
            $table->integer('annee_existence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artisans');
    }
};

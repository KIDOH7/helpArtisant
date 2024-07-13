<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArtisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('artisans')->insert([
                'nom' => $faker->lastName,
                // 'prenom' => $faker->firstName,
                'sexe' => $faker->randomElement(['M', 'F']),
                'pays' => 'Côte d\'Ivoire',
                'ville' => $faker->city,
                'quartier' => $faker->streetName,
                'telephone' => $faker->unique()->phoneNumber,
                'nom_entreprise' => $faker->company,
                'secteur_activite' => 'Artisanat',
                'domaine_activite' => $faker->randomElement(['Menuiserie', 'Couture', 'Ferronnerie', 'Bijouterie']),
                'localisation_entreprise' => $faker->address,
                'annee_existence' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}


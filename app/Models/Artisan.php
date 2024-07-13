<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artisan extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nom', 'sexe', 'ville', 'commune', 'autre_ville', 'quartier',
        'email', 'telephone', 'nom_entreprise','num_entreprise','secteur_activite', 'domaine_activite',
        'certif','zone_couverture','annee_existence', 'latitude', 'longitude', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

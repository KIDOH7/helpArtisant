@extends('base')

@section('title', 'rechercher un artisan')
@section('content')


                    <main class="mt-6">
                         <div class="container">
                            <h1>Détails de l'Artisan</h1>
                            <div>
                                <strong>Nom:</strong> {{ $artisan->nom }}<br>
                                <strong>Prénom:</strong> {{ $artisan->prenom }}<br>
                                <strong>Sexe:</strong> {{ $artisan->sexe }}<br>
                                <strong>Pays:</strong> {{ $artisan->pays }}<br>
                                <strong>Ville:</strong> {{ $artisan->ville }}<br>
                                <strong>Quartier:</strong> {{ $artisan->quartier }}<br>
                                <strong>Contact:</strong> {{ $artisan->contact }}<br>
                                <strong>Nom de l'entreprise:</strong> {{ $artisan->nom_entreprise }}<br>
                                <strong>Secteur d'activité:</strong> {{ $artisan->secteur_activite }}<br>
                                <strong>Domaine d'activité:</strong> {{ $artisan->domaine_activite }}<br>
                                <strong>Localisation:</strong> {{ $artisan->localisation }}<br>
                                <strong>Année d'existence:</strong> {{ $artisan->annee_existance }}<br>
                            </div>
                        </div>
                    </main>
@endsection













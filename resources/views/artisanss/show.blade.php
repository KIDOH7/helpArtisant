@extends('base')

@section('title', 'rechercher un artisan')
@section('content')


                    <main class="mt-6">
                         <div class="container">
                            <h1>Détails de l'Artisan</h1>
                            <div>
                            <p>Imformation sur l'artisans</p> 

                                <strong>Nom:</strong> {{ $artisan->nom }}<br>
                                <strong>Sexe:</strong> {{ $artisan->sexe }}<br>
                                <strong>Ville:</strong> {{ $artisan->ville }}<br>
                                <strong>Ville:</strong> {{ $artisan->autre_ville }}<br>
                                <strong>Quartier:</strong> {{ $artisan->quartier }}<br>
                                <strong>Contact:</strong> {{ $artisan->contact }}<br>

                                <p>Information sur l'entreprise</p> 
                                <strong>Nom de l'entreprise:</strong> {{ $artisan->nom_entreprise }}<br>
                                <strong>Secteur d'activité:</strong> {{ $artisan->secteur_activite }}<br>
                                <strong>Domaine d'activité:</strong> {{ $artisan->domaine_activite }}<br>

                                <p>Localisation de l'entreprise</p> 
                                <strong>latitude:</strong> {{ $artisan->latitude }}<br>
                                <strong>longitude:</strong> {{ $artisan->longitude }}<br>
                                <strong>Année d'existence:</strong> {{ $artisan->annee_existence }}<br>
                            </div>
                        </div>
                    </main>
@endsection













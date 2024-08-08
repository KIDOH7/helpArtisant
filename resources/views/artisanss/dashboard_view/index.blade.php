<!-- resources/views/artisan/dashboard_template/index.blade.php -->

@extends('layouts.artisan')

@section('content')
    <div class="container">
        <h1>Bienvenue dans votre tableau de bord, {{ $artisan->nom }}</h1>
        <p>Vos informations :</p>
        <ul>
            <li>Nom : {{ $artisan->nom }}</li>
            <li>Email : {{ $artisan->email }}</li>
            <li>Ville : {{ $artisan->ville }}</li>
            <!-- Ajoutez d'autres informations nécessaires -->
        </ul>
        <a href="{{ route('artisanss.dashboard_view.form_modif', $artisan->id) }}">Modifier vos informations</a>
    </div>
@endsection


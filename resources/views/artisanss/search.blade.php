@extends('base')

@section('title', 'rechercher un artisan')
@section('content')

    <section id="search" class="py-5">
        <div class="container">
            <h2>Rechercher un artisan</h2>
            <form action="{{ route('artisans_search_results') }}" method="GET">
        @csrf

        <div class="form-group">
            <label for="sector">Secteur d'Activité</label>
            <input type="text" name="secteur_activite" id="sector" class="form-control" placeholder="Secteur d'activité" list="sectors">
            <datalist id="sectors">
                @foreach($sectors as $sector)
                    <option value="{{ $sector }}">{{ $sector }}</option>
                @endforeach
            </datalist>
        </div>

        <div class="form-group">
            <label for="city">Ville</label>
            <input type="text" name="ville" id="city" class="form-control" placeholder="Ville">
            <datalist id="cities">
                @foreach($cities as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </datalist>
        </div>

        <div class="form-group" id="commune-group" style="display:none;">
            <label for="commune">Commune</label>
            <input type="text" name="commune" id="commune" class="form-control" placeholder="Commune">
            <datalist id="communes">
                @foreach($communes as $commune)
                    <option value="{{ $commune }}">{{ $commune }}</option>
                @endforeach
            </datalist>
        </div>

        <div class="form-group">
            <label for="quarter">Quartier</label>
            <input type="text" name="quartier" id="quarter" class="form-control" placeholder="Quartier">
        </div>

        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>

        </div>
    </section>
@endsection






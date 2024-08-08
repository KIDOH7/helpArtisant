<!-- resources/views/artisans/dashboard.blade.php -->

@extends('layouts.artisan')

@section('content')
    @include('artisanss.dashboard_view.index')

<div class="container">
    <h1>Tableau de Bord de l'Artisan capish</h1>
    <div>
        <p>Nom: {{ $artisan->nom }}</p>
        <p>Email: {{ $artisan->email }}</p>
        <p>Adresse: {{ $artisan->company_location }}</p>
        <p>Ville: {{ $artisan->ville }}</p>
        <p>quartier: {{ $artisan->quartier }}</p>
        <p>Latitude: {{ $artisan->latitude }}</p>
        <p>Longitude: {{ $artisan->longitude }}</p>
    </div>
    <div id="map" style="height: 400px; width: 100%;"></div>
</div>

<script>
    function initMap() {
        var location = { lat: {{ $artisan->latitude }}, lng: {{ $artisan->longitude }} };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"></script>
@endsection

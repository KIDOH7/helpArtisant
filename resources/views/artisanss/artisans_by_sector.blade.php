@extends('base')

@section('title', 'Accueil du  site')
@section('content')


    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Découvrez les meilleurs Artisans de côte d'ivoire</h1>
                    <p>Bienvenue sur notre plateforme dédiée à simplifier votre recherche d'artisans talentueux pour l'achat.</p>
                    <a href="html/creation.html" class="btn btn-dark">Commencer maintenant</a>
                </div>
                <div class="col-md-6">
                    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://img.freepik.com/photos-gratuite/gros-plan-femme-peinture-pot-argile_23-2148944985.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=sph"  style="height: 350px;" class="d-block w-100 img-fluid rounded" alt="Artisan Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.freepik.com/photos-gratuite/portrait-photorealiste-femme-africaine_23-2151435740.jpg?uid=R99967860&ga=GA1.2.1477675911.1719911554&semt=ais_user"  style="height: 350px;" class="d-block w-100 img-fluid rounded" alt="Artisan Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.freepik.com/photos-premium/section-mediane-homme-sculptant-bois_1048944-16495599.jpg?uid=R99967860&ga=GA1.2.1477675911.1719911554&semt=ais_user"  style="height: 350px;" class="d-block w-100 img-fluid rounded" alt="Artisan Image 3">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1>Artisans dans le secteur : {{ $sector }}</h1>

    <div class="row">

        @foreach ($artisans as $artisan)
        <div class="col-md-4">
        <div class="card">
            <img src="https://img.freepik.com/photos-premium/creatrice-mode-travaillant-son-atelier-soir_175356-9604.jpg?uid=R99967860&ga=GA1.1.266333496.1681286428&semt=ais_hybrid" class="card-img-top" style="height:250px;" alt="Image de l'article">
            <div class="card-body">
                <h4 class="card-title">{{ $artisan->nom }}</h4>
                <h5 class="card-text">{{ $artisan->secteur_activite }}</h5>
                <h5 class="card-text">localisation</h5>
    
                <a href="{{ route('artisanss.show', $artisan->id) }}" class="btn btn-primary btn-contact"> voir ma page</a>
    
            </div>
        </div>
    </div>
    @endforeach
    </div>

@endsection


 
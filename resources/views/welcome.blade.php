@extends('base')

@section('title', 'Accueil du  site')
@section('content')

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Découvrez les meilleurs Artisans de côte d'ivoire</h1>
                    <p>Bienvenue sur notre plateforme dédiée à simplifier votre recherche d'artisans talentueux pour l'achat.</p>
                    <a href="{{ route('artisanss.search') }}" class="btn btn-dark">rechercher un artisan particulier</a>
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

    <section class="besoin">
        <div class="container">
            <div class="section-header">
                <h2>Secteurs d'activité (De quoi avez vous besoins ?)</h2>
                <p>Découvrez les dernières tendances Restez à jour avec nos informations et nos articles de blog </p>
            </div>

            <div class="row">
                     @foreach($sectors as $sector) 
        
                    <div class="col-md-4 image-card">
                        <a href="{{ route('artisans.by_sector', ['sector' => $sector]) }}" class="btn btn-outline-dark">
                            <img src="https://img.freepik.com/photos-gratuite/mechanic-bras-croises-tenant-cle_1170-1491.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=sph" alt="Manufacturing">
                            <h5>{{ $sector }} </h5>
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                <a href="html/recherche.html"><button class="btn btn-outline-dark" type="button">Explorer</button></a>
            </div>
        </div>

        
    </section>

    <section id="visit-shop" class="py-5">
        <div class="container">
            <div class="row align-items-center text-left">
                <div class="col-md-6">
                    <h2>Visitez notre boutique</h2>
                    <p>Profitez de nos derniers articles en visitant notre boutique. Nous proposons une large gamme de produits de haute qualité qui répondent à tous vos besoins.</p>
                    <a href="html/creation.html" class="btn btn-primary mt-3">Visitez maintenant</a>
                </div>
                <div class="col-md-6">
                    <img src="https://img.freepik.com/photos-gratuite/artisans-plan-moyen-travaillant-ensemble_23-2150104733.jpg?uid=R99967860&ga=GA1.2.1477675911.1719911554&semt=ais_user" alt="Boutique" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
 @endsection
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

    <section class="besoin">
        <div class="container">
            <div class="section-header">
                <h2>De quoi avez vous besoins ?</h2>
                <p>Découvrez les dernières tendances Restez à jour avec nos informations et nos articles de blog </p>
            </div>
            
            <div class="row">
                <div class="col-md-4 image-card">
                    <img src="https://img.freepik.com/photos-gratuite/mechanic-bras-croises-tenant-cle_1170-1491.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=sph" alt="Manufacturing">
                    <h5>MÉCANIQUE </h5>
                </div>
                <div class="col-md-4 image-card">
                    <img src="https://img.freepik.com/photos-premium/styliste-afro-americaine-cousant-toute-nuit-se-sentant-mal_175356-9602.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=ais_user" alt="Assembly">
                    <h5>COUTURE</h5>
                </div>
                <div class="col-md-4 image-card">
                    <img src="https://img.freepik.com/photos-gratuite/charpentier-coupant-panneau-forces-defense-principale-interieur-atelier_23-2149451111.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=ais_user" alt="Warehousing">
                    <h5>MENUSIER</h5>
                </div>
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


                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://img.freepik.com/photos-premium/creatrice-mode-travaillant-son-atelier-soir_175356-9604.jpg?uid=R99967860&ga=GA1.1.266333496.1681286428&semt=ais_hybrid" class="card-img-top" style="height:250px;" alt="Image de l'article">
                            <div class="card-body">
                                <h4 class="card-title">{{ $artisan->nom }}</h4>
                                <h5 class="card-text">{{ $artisan->secteur_activite }}</h5>
                                <h5 class="card-text">localisation</h5>
        
                                <a href="" class="btn btn-primary btn-contact"> voir ma page</a>
        
                            </div>
                        </div>
                    </div>


                       
                    <a href="{{ route('artisanss.create') }}" class="btn btn-primary">Ajouter un Artisan </a>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Ville</th>
                <th>Commune</th>
                <th>Autre Ville</th>
                <th>Quartier</th>
                <th>Contact</th>
                <th>Nom de l'entreprise</th>
                <th>Secteur d'activité</th>
                <th>Domaine d'activité</th>
                <th>Année d'existence</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artisans as $artisan)
            <tr>
                <td>{{ $artisan->nom }}</td>
                <td>{{ $artisan->sexe }}</td>
                <td>{{ $artisan->ville }}</td>
                <td>{{ $artisan->commune }}</td>
                <td>{{ $artisan->autre_ville }}</td>
                <td>{{ $artisan->quartier }}</td>
                <td>{{ $artisan->telephone }}</td>
                <td>{{ $artisan->nom_entreprise }}</td>
                <td>{{ $artisan->secteur_activite }}</td>
                <td>{{ $artisan->domaine_activite }}</td>
                <td>{{ $artisan->annee_existence }}an(s)</td>
                <td>
                    <a href="{{ route('artisanss.show', $artisan->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('artisanss.edit', $artisan->id) }}" class="btn btn-warning">Éditer</a>
                    
                    <form action="{{ route('artisanss.destroy', $artisan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

                        
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>















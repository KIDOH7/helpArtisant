

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help'Artisanat</title>
    <link rel="icon" href="https://img.freepik.com/photos-gratuite/cruche-inachevee_1098-13687.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=ais_user" type="">
    <link href="https://fonts.googleapis.com/css2?family=Marko One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="inscription.css">
    <style>
        body {
            font-family: 'Marko One', sans-serif;
        }

        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    background-color: #f8f9fa !important;
    border-bottom: 1px solid #ddd;
}

.navbar-brand {
    font-weight: bold;
}

.navbar-nav .nav-item .nav-link {
    color: #6c757d;
    font-weight: 500;
    margin: 0 10px;
}

.navbar-nav .nav-item .nav-link:hover {
    color: #d63384;
}
.navbar-nav .nav-item .nav-link .active{
    color: #d63384;
}

h2{
    color: #d63384;
}


.btn-primary {
    background-color: #d63384;
    border-color: #d63384;
}

.btn-primary:hover {
    background-color: #c31d72;
    border-color: #c31d72;
}

.btn-outline-primary {
    color: #d63384;
    border-color: #d63384;
}

.btn-outline-primary:hover {
    background-color: #d63384;
    color: #fff;
}

footer {
    background-color: #000;
    color: #ffffff;
}

footer a {
    color: #ffffff;
    text-decoration: none;
}

footer a:hover {
    color: #d4d4d4;
}

footer h5 {
    margin-bottom: 20px;
}

footer p {
    margin-bottom: 10px;
}

footer .list-unstyled {
    padding-left: 0;
}

footer .list-unstyled li {
    margin-bottom: 10px;
}

footer .text-center p {
    margin: 5px 0;    
}

/* contact css  */

#map {
    width: 100%;
    height: 300px;
}

.container {
    margin-top: 20px;
    margin-bottom: 3rem;
}

h2.text-center {
    color: #d63384;
}

/* inscription css  */

.inscription {
    background-color: #f8f9fa;
    padding: 50px;
}
.form-container {
    max-width: 500px;
    margin: auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}
.form-container h2 {
    color: #333;
    text-align: center;
    margin-bottom: 30px;
}

/* pack css  */

.card-deck .card {
    margin-bottom: 30px;
}
.card-header {
    font-weight: bold;
    font-size: 1.5em;
    text-align: center;
    background-color: #d63384;
    color: white;
}
.card-body {
    text-align: center;
}
.price {
    font-size: 1.2em;
    font-weight: bold;
    color: #d63384;
}
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.html" style="color: #d63384;">Help'Artisanat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="QSN.html">Qui sommes nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Creation.html">Création</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recherche.html">Rechercher un artisan</a>
                </li>
            </ul>
            <a href="connexion.html"><button class="btn btn-primary mr-2" type="button">Se connecter</button></a>
            <a href="pack.html"><button class="btn btn-outline-primary" type="button">S'identifier</button></a>
        </div>
    </header>

    <section class="inscription">
        <div class="container">
            <div class="form-container">
            <div class="container">
                        <h1>S'enregistrer en tant qu'Artisans</h1>


                            <form action="{{ route('artisanss.store') }}" method="POST">
                                @csrf
                                @include('artisanss.form')
                                <button type="submit" class="btn btn-primary">S'Enregistrer</button>
                            </form>
                        </div>
            </div>
        </div>
    </section>

    <footer class="pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Help'Artisanat</h5>
                    <p>
                        Help'Artisanat est une plateforme dédiée aux artisans. Nous croyons en l'importance de préserver les savoir-faire traditionnels et de soutenir les artisans dans leur démarche créative et entrepreneuriale.
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>INFORMATIONS</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Bons de réduction</a></li>
                        <li><a href="#" class="text-white">Condition de vente et livraison</a></li>
                        <li><a href="#" class="text-white">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contactez-nous</h5>
                    <ul class="list-unstyled">
                        <li>Email: contact@helpartisanat-ci.com</li>
                        <li>Téléphone: +225 00 00 00 00</li>
                        <li>Adresse: Rue de l'Artisanat, Abidjan, Côte d'Ivoire</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Suivez-nous</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Facebook</a></li>
                        <li><a href="#" class="text-white">Twitter</a></li>
                        <li><a href="#" class="text-white">Instagram</a></li>
                        <li><a href="#" class="text-white">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col text-center">
                    <p>&copy; 2024 help’artisanat-ci. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // $(document).ready(function () {
        //     $('#ville').change(function () {
        //         if ($(this).val() === 'Autre') {
        //             $('#autre-ville').show().prop('required', true);
        //         } else {
        //             $('#autre-ville').hide().prop('required', false);
        //         }
        //     });

        //     $('#commune').change(function () {
        //         if ($(this).val() === 'Autre') {
        //             $('#autre-commune').show().prop('required', true);
        //         } else {
        //             $('#autre-commune').hide().prop('required', false);
        //         }
        //     });

        //     $('#business-type').change(function () {
        //         if ($(this).val() === 'Autres') {
        //             $('#autre-business-type').show().prop('required', true);
        //         } else {
        //             $('#autre-business-type').hide().prop('required', false);
        //         }
        //     });

        //     var map = L.map('map').setView([5.345317, -4.024429], 13);
        //     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        //     }).addTo(map);

        //     var marker = L.marker([5.345317, -4.024429]).addTo(map)
        //         .bindPopup('Position approximative.')
        //         .openPopup();

        //     map.on('click', function(e) {
        //         marker.setLatLng(e.latlng)
        //             .bindPopup('Vous avez cliqué ici : ' + e.latlng.toString())
        //             .openPopup();
        //     });
        // });
    </script>
</body>
</html>

















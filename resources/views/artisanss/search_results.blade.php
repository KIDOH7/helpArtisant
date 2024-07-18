

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher un artisan - Help'Artisanat</title>
    <link rel="icon" href="https://img.freepik.com/photos-gratuite/cruche-inachevee_1098-13687.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=ais_user" type="">
    <link href="https://fonts.googleapis.com/css2?family=Plus Jakarta Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
       
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
                    <a class="nav-link" href="../index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="QSN.html">Qui sommes nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="creation.html">Création</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Rechercher un artisan</a>
                </li>
            </ul>
            <a href="connexion.html"><button class="btn btn-primary mr-2" type="button">Se connecter</button></a>
            <a href="pack.html"><button class="btn btn-outline-primary" type="button">S'identifier</button></a>
        </div>
    </header>

        </div>
    </section>

    @if($artisans->isEmpty())
        <p>Aucun artisan trouvé dommage.</p>
    @else
        @if(session('secondary_search'))
            <p>Aucun artisan ne correspond exactement à vos critères. Voici des artisans dans la même ville et secteur d'activité :</p>
        @endif

    <div class="container mt-4">
        <h2 class="mb-4">Les plus rechercher</h2>
        <div id="articleList" class="row">
        @foreach($artisans as $artisan)
                    
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
    </div>
    @endif


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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('citySelect').addEventListener('change', function() {
            var selectedOption = this.value;
            if (selectedOption === 'Autre') {
                document.getElementById('otherCityInput').style.display = 'block';
            } else {
                document.getElementById('otherCityInput').style.display = 'none';
            }
        });

        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const articles = [
                { nom: "Dalida Solange", img: "https://img.freepik.com/photos-premium/creatrice-mode-travaillant-son-atelier-soir_175356-9604.jpg?uid=R99967860&ga=GA1.1.266333496.1681286428&semt=ais_hybrid", profession: "Couturière", lieu: "Marcory"},
                { nom: "Diomande Soraya", img: "https://img.freepik.com/photos-gratuite/femme-noire-tete-petite-entreprise_52683-100660.jpg?uid=R99967860&ga=GA1.1.266333496.1681286428&semt=ais_hybrid", profession: "Chef cuisinier", lieu: "Koumassi"},
                { nom: "Dimitri hyppolite", img: "https://img.freepik.com/photos-gratuite/confiant-tenant-plongeur-jeune-homme-nettoyant-afro-americain-uniforme-gants-isoles-fond-vert_141793-135280.jpg?uid=R99967860&ga=GA1.1.266333496.1681286428&semt=ais_hybrid", profession: "Plombier", lieu: "Cocody"},
            ];

            const articleList = document.getElementById('articleList');

            articles.forEach(article => {
                const card = document.createElement('div');
                card.classList.add('col-md-4', 'mb-4');

                card.innerHTML = `
                    <div class="card">
                        <img src= ${article.img} class="card-img-top" style="height:250px;" alt="Image de l'article">
                        <div class="card-body">
                            <h4 class="card-title">${article.nom}</h4>
                            <h5 class="card-text">${article.profession}</h5>
                            <h5 class="card-text">${article.lieu}</h5>
                            <a href="#" class="btn btn-primary btn-contact">Contactez-moi</a>
                        </div>
                    </div>
                `;

                articleList.appendChild(card);
            });
        });

    </script>

<script>
    document.getElementById('sector').addEventListener('input', function() {
        var sector = this.value.toLowerCase();
        var dataList = document.getElementById('sectors');

        fetch(`/autocomplete/sectors?term=${sector}`)
            .then(response => response.json())
            .then(data => {
                dataList.innerHTML = '';

                data.forEach(item => {
                    var option = document.createElement('option');
                    option.value = item;
                    dataList.appendChild(option);
                });

                // Ajouter le texte entré manuellement comme option
                var manualOption = document.createElement('option');
                manualOption.value = sector;
                dataList.appendChild(manualOption);
            });
    });

    document.getElementById('city').addEventListener('input', function() {
        var city = this.value;
        var communeGroup = document.getElementById('commune-group');
        
        if (city.toLowerCase() === 'abidjan') {
            communeGroup.style.display = 'block';
        } else {
            communeGroup.style.display = 'none';
        }

        fetch(`/autocomplete/cities?term=${city}`)
            .then(response => response.json())
            .then(data => {
                var dataList = document.getElementById('cities');
                dataList.innerHTML = '';

                data.forEach(item => {
                    var option = document.createElement('option');
                    option.value = item;
                    dataList.appendChild(option);
                });
            });
    });

    document.getElementById('city').setAttribute('list', 'cities');
    document.getElementById('commune').setAttribute('list', 'communes');
</script>
</body>
</html>








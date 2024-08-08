
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="https://img.freepik.com/photos-gratuite/cruche-inachevee_1098-13687.jpg?uid=R99967860&ga=GA1.1.1477675911.1719911554&semt=ais_user" type="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marko One&display=swap">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
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
.hero-section {
    background: linear-gradient(to right, #fff, #f8f9fa);
    padding: 50px 0;
}

.hero-section h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
}

.hero-section p {
    font-size: 1rem;
    color: #555;
    margin: 20px 0;
}

.hero-section .btn {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.hero-section .btn:hover {
    background-color: #444;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}



.besoin{
    color: #333;
    text-align: center;
    padding: 20px;
}

.besoin .section-header {
    margin-bottom: 30px;
}
.besoin .image-card {
    margin-bottom: 20px;
}
.besoin .image-card img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}
.besoin .image-card h5 {
    margin-top: 10px;
}

.search-section {
    background-color: #f8f9fa;
    padding: 70px 0;
    text-align: center;
}
.search-section h2 {
    margin-bottom: 20px;
    color: #333;
}
.search-section .input-group {
    max-width: 600px;
    margin: 0 auto;
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
            <!-- <a href="/">
                <img src="{{ asset('images/my-logo.jpg') }}" alt="My Logo" class="w-20 h-20 fill-current text-gray-500">
            </a> -->
        <a class="navbar-brand" href="#" style="color: #d63384;">Help'Artisanat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('welcome') }}">Accueil</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="html/QSN.html">Qui sommes nous</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artisanss.create') }}">S'enregistrer en tant qu'artisans</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="html/contact.html">Contact</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artisanss.search') }}">Rechercher un artisans</a>
                </li>
            </ul>
            @if (Route::has('login'))
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btn btn-outline-primary rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        {{ Auth::user()->name }}
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                    <a href="{{ route('login') }}">
                                        <button class="btn btn-outline-primary" type="button">S'identifier</button>
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                        <a href="{{ route('register') }}">
                                            <button class="btn btn-primary mr-2" type="button">S'inscrire</button>
                                        </a>
                                    @endif
                                @endauth
                                @endif
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<!--                                         
                                            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                                                <div class="flex lg:justify-center lg:col-start-2">
                                                    <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                                                </div>
                                                @if (Route::has('login'))
                                                    <nav class="-mx-3 flex flex-1 justify-end">
                                                        @auth
                                                            <a
                                                                href="{{ url('/dashboard') }}"
                                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                            >
                                                                Dashboard
                                                            </a>
                                                        @else
                                                            <a
                                                                href="{{ route('login') }}"
                                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                            >
                                                                medeleiev
                                                            </a>
                        
                                                            @if (Route::has('register'))
                                                                <a
                                                                    href="{{ route('register') }}"
                                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                                >
                                                                ôthaentik
                                                                </a>
                                                            @endif
                                                        @endauth
                                                    </nav>
                                                @endif
                                            </header> -->
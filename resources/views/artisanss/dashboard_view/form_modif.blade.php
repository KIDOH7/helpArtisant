
<!-- resources/views/artisan/dashboard_template/index.blade.php -->

@extends('layouts.artisan')

@section('content')
    <div class="container">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
        }
        .form-row .form-group {
            width: 48%;
        }
        @media (max-width: 600px) {
            form {
                padding: 20px;
                max-width: 100%;
            }
            input[type="submit"] {
                padding: 12px;
                font-size: 16px;
            }
            .form-row {
                flex-direction: column;
            }
            .form-row .form-group {
                width: 100%;
            }
        }
    </style>
        <h1> {{ $artisan->nom }} , Vous pouvez maitenant Modifier vos Informations</h1>
        <p>Vos informations :</p>
        <h2>Modifier mes informations</h2>
    <form action="{{ route('artisanss.dashboard_view.update', $artisan->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
        <div class="form-row">
            <div class="form-group">
                <label for="name">Nom et Prénom:</label>
                <input type="text" id="name" name="nom" value="{{ old('nom', $artisan->nom ?? '') }}" required>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe:</label>
                <select id="sexe" name="sexe" required>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="ville">Ville:</label>
                <select id="ville" name="ville" value="{{ old('ville', $artisan->ville ?? '') }}" required>
                    <option value="Abidjan">...</option>
                    <!-- Ajouter les autres villes ici -->
                    @foreach(['Abidjan', 'Bouaké', 'Daloa', 'Korhogo', 'San-Pédro', 'Man', 'Gagnoa', 'Guiglo' , 'Abengourou', 'Agboville', 'Divo', 'Soubré', 'Anyama', 'Dabou', 'Odienné', 'Bondoukou', 'Ferkessédougou', 'Sassandra', 'Séguéla', 'Issia', 'Katiola', 'Boundiali', 'Tanda', 'Aboisso', 'Bouna', 'Bongouanou', 'Lakota', 'Duékoué', 'Grand-Bassam', 'Toumodi', 'Mankono', 'Sinfra', 'Daoukro', 'Tiassalé', 'Touba'] as $ville)
                        <option value="{{ $ville }}">{{ $ville }}</option>
                    @endforeach
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quartier">Quartier:</label>
                <input type="text" id="quartier" name="quartier" value="{{ old('quartier', $artisan->quartier ?? '') }}" required>
            </div>
        </div>
        <div class="form-row" id="commune-container" style="display: none;">
            <div class="form-group">
                <label for="commune">Commune:</label>
                <select id="commune" name="commune">
                    @foreach(['Abobo', 'Adjamé', 'Attécoubé', 'Cocody', 'Koumassi', 'Marcory', 'Plateau', 'Port-Bouët', 'Treichville', 'Yopougon', 'Songon'] as $commune)
                        <option value="{{ $commune }}">{{ $commune }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" id="autre-ville-container" style="display: none;">
                <label for="autre_ville">Autre Ville:</label>
                <input type="text" id="autre_ville" name="autre_ville" value="{{ old('autre_ville', $artisan->autre_ville ?? '') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="email">Email (facultatif):</label>
                <input type="email" id="email" name="email" value="{{ old('email', $artisan->email ?? '') }}">
            </div>
            <div class="form-group">
                <label for="phone">Numéro de téléphone:</label>
                <input type="tel" id="phone" name="telephone" value="{{ old('telephone', $artisan->telephone ?? '') }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="nom_entreprise">Nom de l'entreprise:</label>
            <input type="text" id="nom_entreprise" name="nom_entreprise" value="{{ old('nom_entreprise', $artisan->nom_entreprise ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="num_entreprise">Numéro WhatsApp de l'entreprise ou personnel:</label>
            <input type="tel" id="num_entreprise" name="num_entreprise" value="{{ old('num_entreprise', $artisan->num_entreprise ?? '') }}" required>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="secteur_activite">Secteur d'activité:</label>
                <select id="secteur_activite" name="secteur_activite" required>
                    @foreach(['Agriculture', 'Artisanat', 'Commerce', 'Transport', 'Construction', 'Services', 'Peintre'] as $domaine)
                        <option value="{{ $domaine }}">{{ $domaine }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="specialite">Spécialité ou type d'activité exercée:</label>
                <input type="text" id="specialite" name="domaine_activite" value="{{ old('domaine_activite', $artisan->domaine_activite ?? '') }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="certif">Avez-vous un certificat démontrant votre aptitude à pratiquer ce métier ?</label>
            <select id="certif" name="certif" required>
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select>
        </div>
        <div class="form-group">
            <label for="zone_couverture">Quelle est votre zone de couverture ?</label>
            <input type="text" id="zone_couverture" name="zone_couverture" value="{{ old('zone_couverture', $artisan->zone_couverture ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="annee_existence">Année d'existence:</label>
            <input type="number" id="annee_existence" name="annee_existence" value="{{ old('annee_existence', $artisan->annee_existence ?? '') }}" min="0" max="100" required>
        </div>
        <div class="form-group">
            <label for="joindre_photo">Joindre une photo illustrative de vos produits ou services:</label>
            <input type="file" id="joindre_photo" name="image" accept="image/*" required>
        </div>
        <input type="submit" value="Enregistrer les modification">
    </form>






    <script>
        document.getElementById('ville').addEventListener('change', function() {
            var ville = this.value;
            var communeContainer = document.getElementById('commune-container');
            var autreVilleContainer = document.getElementById('autre-ville-container');
            if (ville === 'Abidjan') {
                communeContainer.style.display = 'flex';
                autreVilleContainer.style.display = 'none';
            } else if (ville === 'Autre') {
                communeContainer.style.display = 'none';
                autreVilleContainer.style.display = 'block';
            } else {
                communeContainer.style.display = 'none';
                autreVilleContainer.style.display = 'none';
            }
        });
    </script>
    </div>
@endsection





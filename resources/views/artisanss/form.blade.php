 <!-- Nom et Prénom -->
        <div class="form-group">
            <label for="name">Nom et Prénom</label>
            <input type="text" class="form-control" id="name" name="nom"  value="{{ old('nom', $artisan->nom ?? '') }}"  required>
        </div>

        <!-- Sexe -->
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select class="form-control" id="sexe" name="sexe" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>

        <!-- Ville -->
        <div class="form-group">
            <label for="ville">Ville</label>
            <select class="form-control" id="ville" name="ville"  value="{{ old('ville', $artisan->ville ?? '') }}" required>
                <option value="Abidjan">...</option>
                <!-- Ajouter les autres villes ici -->
                @foreach(['Abidjan','Bouaké', 'Daloa', 'Korhogo', 'San-Pédro', 'Man', 'Gagnoa', 'Abengourou', 'Agboville', 'Divo', 'Soubré', 'Anyama', 'Dabou', 'Odienné', 'Bondoukou', 'Ferkessédougou', 'Sassandra', 'Séguéla', 'Issia', 'Katiola', 'Boundiali', 'Tanda', 'Aboisso', 'Bouna', 'Bongouanou', 'Lakota', 'Duékoué', 'Grand-Bassam', 'Toumodi', 'Mankono', 'Sinfra', 'Daoukro', 'Tiassalé', 'Touba'] as $ville)
                    <option value="{{ $ville }}">{{ $ville }}</option>
                @endforeach
                <option value="Autre">Autre</option>
            </select>
        </div>

        <!-- Commune (si Abidjan est sélectionné) -->
        <div class="form-group" id="commune-container" style="display: none;">
            <label for="commune">Commune</label>
            <select class="form-control" id="commune" name="commune">
                @foreach(['Abobo', 'Adjamé', 'Attécoubé', 'Cocody', 'Koumassi', 'Marcory', 'Plateau', 'Port-Bouët', 'Treichville', 'Yopougon', 'Songon'] as $commune)
                    <option value="{{ $commune }}">{{ $commune }}</option>
                @endforeach
            </select>
        </div>

        <!-- Autre ville (si la ville n'est pas dans la liste) -->
        <div class="form-group" id="autre-ville-container" style="display: none;">
            <label for="autre_ville">Autre Ville</label>
            <input type="text" class="form-control" id="autre_ville" name="autre_ville"  value="{{ old('autre_ville', $artisan->autre_ville ?? '') }}">
        </div>

        <!-- Quartier -->
        <div class="form-group">
            <label for="quartier">Quartier</label>
            <input type="text" class="form-control" id="quartier" name="quartier"  value="{{ old('quartier', $artisan->quartier ?? '') }}" required>
        </div>

        <!-- Email (facultatif) -->
        <div class="form-group">
            <label for="email">Email (facultatif)</label>
            <input type="email" class="form-control" id="email" name="email"  value="{{ old('email', $artisan->email ?? '') }}">
        </div>

        <!-- Numéro de téléphone -->
        <div class="form-group">
            <label for="phone">Numéro de téléphone</label>
            <input type="text" class="form-control" id="phone" name="telephone"  value="{{ old('telephone', $artisan->telephone ?? '') }}" required>
        </div>

        <!-- Nom de l'entreprise -->
        <div class="form-group">
            <label for="nom_entreprise">Nom de l'entreprise</label>
            <input type="text" class="form-control" id="nom_entreprise" name="nom_entreprise"  value="{{ old('nom_entreprise', $artisan->nom_entreprise ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="num_entreprise">numero whatsapp de l'entreprise ou personnelle</label>
            <input type="text" class="form-control" id="num_entreprise" name="num_entreprise"  value="{{ old('num_entreprise', $artisan->num_entreprise ?? '') }}" required>
        </div>

        <!-- Domaine d'activité -->
        <div class="form-group">
            <label for="domaine_activite">Domaine d'activité</label>
            <select class="form-control" id="domaine_activite" name="secteur_activite" required>
                <!-- Ajouter les domaines d'activité ici -->
                @foreach(['Agriculture', 'Artisanat', 'Commerce', 'Transport', 'Construction', 'Services','peintre'] as $domaine)
                    <option value="{{ $domaine }}">{{ $domaine }}</option>
                @endforeach
            </select>
        </div>

        <!-- Spécialité ou type d'activité exercée -->
        <div class="form-group">
            <label for="specialite">Spécialité ou type d'activité exercée</label>
            <input type="text" class="form-control" id="specialite" name="domaine_activite"  value="{{ old('domaine_activite', $artisan->domaine_activite ?? '') }}" required>
        </div>
        <!-- possession d'un certif  -->
        <div class="form-group">
            <label for="certif">Avez-vous un certificat démontrant votre aptitude à pratiquer ce métier ?</label>
            <select class="form-control" id="certif" name="certif" required>
                <option value="oui">oui</option>
                <option value="non">non</option>
            </select>
        </div>
         <!-- zone de couverture  -->
        <div class="form-group">
            <label for="zone_couverture">Quelle est votre zone de couverture ?</label>
            <input type="text" class="form-control" id="zone_couverture" name="zone_couverture"  value="{{ old('zone_couverture', $artisan->zone_couverture ?? '') }}" required>
        </div>
        

        <!-- Année d'existence -->
        <div class="form-group">
            <label for="annee_existence">Année d'existence </label>
            <input type="number" class="form-control" id="annee_existence" name="annee_existence"  value="{{ old('annee_existence', $artisan->annee_existence ?? '') }}" required>
        </div>

        <!-- Géolocalisation automatique -->
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">

    


<script>
    // Géolocalisation automatique
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
        }, function(error) {
            console.log(error);
        });
    } else {
        console.log("La géolocalisation n'est pas supportée par ce navigateur.");
    }

    // Affichage conditionnel des champs
    document.getElementById('ville').addEventListener('change', function() {
        var communeContainer = document.getElementById('commune-container');
        var autreVilleContainer = document.getElementById('autre-ville-container');
        if (this.value === 'Abidjan') {
            communeContainer.style.display = 'block';
            autreVilleContainer.style.display = 'none';
        } else if (this.value === 'Autre') {
            communeContainer.style.display = 'none';
            autreVilleContainer.style.display = 'block';
        } else {
            communeContainer.style.display = 'none';
            autreVilleContainer.style.display = 'none';
        }
    });
</script>

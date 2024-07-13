<div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $artisan->nom ?? '') }}" required>
</div>
<!-- <div class="form-group">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" class="form-control" value="{{ old('prenom', $artisan->prenom ?? '') }}" required>
</div> -->
<div class="form-group">
    <label for="sexe">Sexe:</label>
    <input type="text" name="sexe" id="sexe" class="form-control" value="{{ old('sexe', $artisan->sexe ?? '') }}" required>
</div>
<div class="form-group">
    <label for="pays">Pays:</label>
    <input type="text" name="pays" id="pays" class="form-control" value="{{ old('pays', $artisan->pays ?? '') }}" required>
</div>
<div class="form-group">
    <label for="ville">Ville:</label>
    <input type="text" name="ville" id="ville" class="form-control" value="{{ old('ville', $artisan->ville ?? '') }}" required>
</div>
<div class="form-group">
    <label for="quartier">Quartier:</label>
    <input type="text" name="quartier" id="quartier" class="form-control" value="{{ old('quartier', $artisan->quartier ?? '') }}" required>
</div>
<div class="form-group">
    <label for="email">Email </label>
    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $artisan->email ?? '') }}" required>
</div>
<div class="form-group">
    <label for="telephone">numéro de téléphone:</label>
    <input type="tel" name="telephone" id="telephone" class="form-control" value="{{ old('telephone', $artisan->telephone ?? '') }}" required>
</div>
<div class="form-group">
    <label for="nom_entreprise">Nom de l'entreprise:</label>
    <input type="text" name="nom_entreprise" id="nom_entreprise" class="form-control" value="{{ old('nom_entreprise', $artisan->nom_entreprise ?? '') }}" required>
</div>
<div class="form-group">
    <label for="secteur_activite">Secteur d'activité:</label>
    <input type="text" name="secteur_activite" id="secteur_activite" class="form-control" value="{{ old('secteur_activite', $artisan->secteur_activite ?? '') }}" required>
</div>
<div class="form-group">
    <label for="domaine_activite">Domaine d'activité:</label>
    <input type="text" name="domaine_activite" id="domaine_activite" class="form-control" value="{{ old('domaine_activite', $artisan->domaine_activite ?? '') }}" required>
</div>
<div class="form-group">
    <label for="localisation_entreprise">Localisation de l'entreprise:</label>
    <input type="text" name="localisation_entreprise" id="localisation_entreprise" class="form-control" value="{{ old('localisation_entreprise', $artisan->localisation ?? '') }}" required>
</div>
<div class="form-group">
    <label for="annee_existence">Année d'existance:</label>
    <input type="number" name="annee_existence" id="annee_existence" class="form-control" value="{{ old('annee_existence', $artisan->annee_existence ?? '') }}" required>
</div>

@extends('base')

@section('title', 'connecter vous')
@section('content')


<section class="inscription">
        <div class="container">
            <div class="form-container">
                <h2>Se connecter</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    <a href="../artisan/indexArtisan.html">connecter</a>
                </form>
                <p class="text-center mt-3 mb-0"><a href="pack.html">Pas de compte ? S'inscrire</a></p>
            </div>
        </div>    
    </section>

@endsection


 
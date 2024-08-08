
@extends('base')

@section('title', 'Accueil du  site')
@section('content')
<section class="inscription">
    <div class="container">
        <div class="form-container">
            <h2>S'enregistrer en tant qu'Artisans</h2>
                <form action="{{ route('artisanss.store') }}" method="POST">
                    @csrf
                    @include('artisanss.form')
                    <button type="submit" class="btn btn-primary">S'Enregistrer</button>
                </form>
        </div>
    </div>
</section>
@endsection
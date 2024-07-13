@extends('layouts.app')

@section('title', 'Modifier un Produit')

@section('content')
<div class="container">
    <h1>Modifier un Produit</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom_produit">Nom du Produit</label>
            <input type="text" class="form-control" id="nom_produit" name="nom_produit" value="{{ old('nom_produit', $produit->nom_produit) }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $produit->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="video">Vidéo</label>
            <input type="file" class="form-control" id="video" name="video">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection


@extends('base')


@section('title', 'Inscription d\'un Artisan')

@section('content')


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


    @endsection














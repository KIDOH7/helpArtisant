
@extends('base')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <h2>Welcome, {{ $artisan->nom }}</h2>

    <a href="{{ route('artisanss.edit', $artisan) }}">Edit Information</a>

    <form action="{{ route('artisanss.destroy', $artisan) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete your account?');">Delete Account</button>
    </form>
</div>
@endsection


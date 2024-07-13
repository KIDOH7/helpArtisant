<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ArtisanControllers;
use App\Http\Controllers\ArtisanDashboardController;
use App\Http\Controllers\ProduitsController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/artisanss_form', function () {
    return view('artisanss.form');
});

// Route::get('/ide', ArtisanController::class);

// Route::resource('artisans', ArtisanController::class);
Route::resource('artisanss', ArtisanControllers::class);

    
// important 

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


Route::middleware(['auth'])->group(function () {
    Route::resource('artisans', ArtisanController::class);
    Route::resource('produits', ProduitController::class);
});


// Route pour le tableau de bord des artisans
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ArtisanDashboardController::class, 'index'])->name('artisanss.dashboard');
});
// a prendre en comptz plus tard route pour changer le dashbord
// Route::middleware(['auth:artisan'])->group(function () {
//     Route::get('/dashboard', [ArtisanDashboardController::class, 'index'])->name('artisanss.dashboard');
// });
// Route::get('/register/artisan', [ArtisanControllers::class, 'create']);
// Route::post('/register/artisan', [ArtisanControllers::class, 'store'])->name('artisanss.register');

// Redirection des utilisateurs vers la page d'accueil
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});

require __DIR__.'/auth.php';

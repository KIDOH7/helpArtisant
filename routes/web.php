<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ArtisanControllers;
use App\Http\Controllers\ArtisanDashboardController;
use App\Http\Controllers\ProduitsController;




Route::get('/artisanss_form_search', function () {
    return view('artisanss.search');
});

// Route::get('/ide', ArtisanController::class);
Route::get('/', [ArtisanControllers::class, 'welcome'])->name('welcome');
Route::get('/sectors/{sector}', [ArtisanControllers::class, 'showArtisansBySector'])->name('artisans.by_sector');

// Route::resource('artisans', ArtisanController::class);
Route::resource('artisanss', ArtisanControllers::class);

Route::get('/artisans/search', [ArtisanControllers::class, 'showSearchForm'])->name('artisanss.search');
Route::get('/autocomplete/sectors', [ArtisanControllers::class, 'autocompleteSectors']);
Route::get('/artisans/search-results', [ArtisanControllers::class, 'search'])->name('artisans_search_results');



Route::get('/artisans/group-by-sector', [ArtisanControllers::class, 'groupBySector'])->name('artisans.group_by_sector');

// important 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



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
// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [ArtisanDashboardController::class, 'index'])->name('artisanss.dashboard');
// });  
// a prendre en comptz plus tard route pour changer le dashbord
// Route::middleware(['auth:artisan'])->group(function () {
//     Route::get('/dashboard', [ArtisanControllers::class, 'index'])->name('artisanss.dashboard');
// });
// Route::get('/register/artisan', [ArtisanControllers::class, 'create']);
// Route::post('/register/artisan', [ArtisanControllers::class, 'store'])->name('artisanss.register');  

// Redirection des utilisateurs vers la page d'accueil
Route::middleware('auth')->group(function () {
    Route::get('/s', function () {
        return view('welcome');
    })->name('home');
});

require __DIR__.'/auth.php';

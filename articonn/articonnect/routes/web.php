<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BesoinController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ArtisansController;
use App\Http\Controllers\ArtisanAuthController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\Artisan\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/besoin', [BesoinController::class, 'index']);
Route::resource('/inscription', InscriptionController::class);

Route::get('/presentation', [HomeController::class, 'about']);

Route::resource('/artisans', ArtisansController::class);

Route::get('/articles-artisans', [ArticlesController::class, 'index']);

Route::get('/contacts', [HomeController::class, 'contact']);


Route::middleware('auth:artisan')->group(function() {
    // Route pour le dashboard des artisans
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('artisan.dashboard');
});

Route::get('/connexion', [ArtisanAuthController::class, 'index'])->name('artisan.login');
Route::post('/connexion', [ArtisanAuthController::class, 'login']);
Route::post('/logout', [ArtisanAuthController::class, 'logout'])->name('artisan.logout');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('artisan.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


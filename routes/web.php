<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NamaqoriController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('page.auth.login');
// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('page.auth.register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('favorite', [InfoController::class, 'favorite'])->name('pages.favorite');
    Route::get('alquran', [InfoController::class, 'alquran'])->name('pages.alquran');
    Route::get('playlist', [InfoController::class, 'playlist'])->name('pages.playlist');
    Route::get('tambahan', [InfoController::class, 'tambahan'])->name('pages.tambahan');
    Route::get('receiter', [InfoController::class, 'receiter'])->name('pages.receiter');

    Route::get('play', [NamaqoriController::class, 'play'])->name('pages.receiter.play');
    Route::get('AlAhmed', [NamaqoriController::class, 'AlAhmed'])->name('pages.receiter.AlAhmed');
    Route::get('Warsh', [NamaqoriController::class, 'Warsh'])->name('pages.receiter.Warsh');
    Route::get('Brown', [NamaqoriController::class, 'Brown'])->name('pages.receiter.Brown');
    Route::get('Basit', [NamaqoriController::class, 'Basit'])->name('pages.receiter.Basit');
    Route::get('Obeikan', [NamaqoriController::class, 'Obeikan'])->name('pages.receiter.Obeikan');
    Route::get('Albudair', [NamaqoriController::class, 'Albudair'])->name('pages.receiter.Albudair');
    Route::get('Alqasim', [NamaqoriController::class, 'Alqasim'])->name('pages.receiter.Alqasim');
    Route::get('AlYusuf', [NamaqoriController::class, 'AlYusuf'])->name('pages.receiter.AlYusuf');
    Route::get('Aloosi', [NamaqoriController::class, 'Aloosi'])->name('pages.receiter.Aloosi');
    Route::get('Haneef', [NamaqoriController::class, 'Haneef'])->name('pages.receiter.Haneef');
    Route::get('Alarkani', [NamaqoriController::class, 'Alarkani'])->name('pages.receiter.Alarkani');
    Route::get('Alhadidi', [NamaqoriController::class, 'Alhadidi'])->name('pages.receiter.Alhadidi');
    Route::get('Arrifai', [NamaqoriController::class, 'Arrifai'])->name('pages.receiter.Arrifai');
    Route::get('Alburaimi', [NamaqoriController::class, 'Alburaimi'])->name('pages.receiter.Alburaimi');
    Route::get('Thubaity', [NamaqoriController::class, 'Thubaity'])->name('pages.receiter.Thubaity');
    Route::get('Sudais', [NamaqoriController::class, 'Sudais'])->name('pages.receiter.Sudais');
    Route::get('Shatri', [NamaqoriController::class, 'Shatri'])->name('pages.receiter.Shatri');
    Route::get('Alajmi', [NamaqoriController::class, 'Alajmi'])->name('pages.receiter.Alajmi');
    Route::get('Jibreen', [NamaqoriController::class, 'Jibreen'])->name('pages.receiter.Jibreen');
    Route::get('Dossari', [NamaqoriController::class, 'Dossari'])->name('pages.receiter.Dossari');
    Route::get('Ghamdi', [NamaqoriController::class, 'Ghamdi'])->name('pages.receiter.Ghamdi');
});

Route::get('auth/google', [\App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [\App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::view("vue", "vue");

<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReciterController;
use App\Http\Controllers\MurotalController;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('auth/google', [LoginController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [LoginController::class, 'handle'])->name('google.callback');

Route::get('auth/google', [RegisterController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [RegisterController::class, 'handle'])->name('google.callback');

Route::group(['middleware' => 'auth'], function () {
    Route::get('donate', [DashboardController::class, 'donate'])->name('pages.donate.index');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => [LanguageController::class, 'switchLang']]);
    Route::get('/languageDemo', [DashboardController::class, 'languageDemo']);

    Route::middleware(['admin'])->group(function () {
        Route::resource('reciters', ReciterController::class)->except('show');
        Route::resource('surahs', SurahController::class)->except('show');
        Route::resource('riwayats', RiwayatController::class)->except('show');
        Route::resource('murotals', MurotalController::class)->except('show');
        Route::resource('playlists', PlaylistController::class)->except('show');
    });
        
    Route::middleware(['user'])->group(function () {

    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('favorite', [DashboardController::class, 'favorite'])->name('pages.favorite');
    Route::get('alquran', [DashboardController::class, 'alquran'])->name('pages.alquran');
    Route::get('playlist', [DashboardController::class, 'playlist'])->name('pages.playlist');
    Route::get('tambahan', [DashboardController::class, 'tambahan'])->name('pages.tambahan');
    Route::get('receiter', [DashboardController::class, 'receiter'])->name('pages.receiter');

    Route::get('reciters/{slug}', [ReciterController::class, 'show'])->name('reciters.show');
    Route::get('surahs/{slug}', [SurahController::class, 'show'])->name('surah.show');
    Route::get('murotals/{slug}', [MurotalController::class, 'show'])->name('murotals.show');
    Route::get('playlists/{slug}', [PlaylistController::class, 'show'])->name('playlists.show');
    Route::get('riwayats/{slug}', [RiwayatController::class, 'show'])->name('riwayats.show');
});
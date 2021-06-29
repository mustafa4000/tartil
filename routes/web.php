<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ReciterController;
use App\Http\Controllers\MurotalController;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Murotal;
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

Route::get('auth/google', [LoginController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [LoginController::class, 'handle'])->name('google.callback');

Route::get('auth/google', [RegisterController::class, 'redirect'])->name('google.login');
Route::get('auth/google/callback', [RegisterController::class, 'handle'])->name('google.callback');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin/dashboard', [DashboardController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('favorite', [DashboardController::class, 'favorite'])->name('pages.favorite');
    Route::get('alquran', [DashboardController::class, 'alquran'])->name('pages.alquran');
    Route::get('playlist', [DashboardController::class, 'playlist'])->name('pages.playlist');
    Route::get('tambahan', [DashboardController::class, 'tambahan'])->name('pages.tambahan');
    Route::get('receiter', [DashboardController::class, 'receiter'])->name('pages.receiter');

    Route::get('play', [DashboardController::class, 'play'])->name('pages.receiter.play');
    Route::get('AlAhmed', [DashboardController::class, 'AlAhmed'])->name('pages.receiter.AlAhmed');
    Route::get('Warsh', [DashboardController::class, 'Warsh'])->name('pages.receiter.Warsh');
    Route::get('Brown', [DashboardController::class, 'Brown'])->name('pages.receiter.Brown');
    Route::get('Basit', [DashboardController::class, 'Basit'])->name('pages.receiter.Basit');
    Route::get('Obeikan', [DashboardController::class, 'Obeikan'])->name('pages.receiter.Obeikan');
    Route::get('Albudair', [DashboardController::class, 'Albudair'])->name('pages.receiter.Albudair');
    Route::get('Alqasim', [DashboardController::class, 'Alqasim'])->name('pages.receiter.Alqasim');
    Route::get('AlYusuf', [DashboardController::class, 'AlYusuf'])->name('pages.receiter.AlYusuf');
    Route::get('Aloosi', [DashboardController::class, 'Aloosi'])->name('pages.receiter.Aloosi');
    Route::get('Haneef', [DashboardController::class, 'Haneef'])->name('pages.receiter.Haneef');
    Route::get('Alarkani', [DashboardController::class, 'Alarkani'])->name('pages.receiter.Alarkani');
    Route::get('Alhadidi', [DashboardController::class, 'Alhadidi'])->name('pages.receiter.Alhadidi');
    Route::get('Arrifai', [DashboardController::class, 'Arrifai'])->name('pages.receiter.Arrifai');
    Route::get('Alburaimi', [DashboardController::class, 'Alburaimi'])->name('pages.receiter.Alburaimi');
    Route::get('Thubaity', [DashboardController::class, 'Thubaity'])->name('pages.receiter.Thubaity');
    Route::get('Sudais', [DashboardController::class, 'Sudais'])->name('pages.receiter.Sudais');
    Route::get('Shatri', [DashboardController::class, 'Shatri'])->name('pages.receiter.Shatri');
    Route::get('Alajmi', [DashboardController::class, 'Alajmi'])->name('pages.receiter.Alajmi');
    Route::get('Jibreen', [DashboardController::class, 'Jibreen'])->name('pages.receiter.Jibreen');
    Route::get('Dossari', [DashboardController::class, 'Dossari'])->name('pages.receiter.Dossari');
    Route::get('Ghamdi', [DashboardController::class, 'Ghamdi'])->name('pages.receiter.Ghamdi');

    Route::get('surah/{slug}', [SurahController::class, 'show'])->name('surah.show');
    Route::get('reciter/{slug}', [ReciterController::class, 'show'])->name('reciters.show');

    Route::resource('homes', TableController::class);
    Route::get('player', [TableController::class, 'player'])->name('homes.player');
    Route::resource('reciters', ReciterController::class);
    Route::resource('surahs', SurahController::class);
    Route::resource('posts', PostController::class);

    //route CRUD
    Route::resource('riwayat', RiwayatController::class);
    Route::resource('murotal', MurotalController::class);
});


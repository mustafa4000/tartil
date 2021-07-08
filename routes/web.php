<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LocalizationController;

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

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);        
        Route::resource('reciters', ReciterController::class)->except('show');
        Route::resource('homes', TableController::class)->except('show');
        Route::resource('surahs', SurahController::class);
        Route::resource('riwayats', RiwayatController::class);
        Route::resource('murotals', MurotalController::class);
        Route::resource('posts', PostController::class);
    });
    
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('favorite', [DashboardController::class, 'favorite'])->name('pages.favorite');
    Route::get('alquran', [DashboardController::class, 'alquran'])->name('pages.alquran');
    Route::get('playlist', [DashboardController::class, 'playlist'])->name('pages.playlist');
    Route::get('tambahan', [DashboardController::class, 'tambahan'])->name('pages.tambahan');
    Route::get('receiter', [DashboardController::class, 'receiter'])->name('pages.receiter');

    Route::get('homes/{slug}', [TableController::class, 'show'])->name('homes.show');
    Route::get('reciters/{slug}', [ReciterController::class, 'show'])->name('reciters.show');
    Route::get('surah/{slug}', [SurahController::class, 'show'])->name('surah.show');

    Route::resource('playlists', PlaylistController::class);
});
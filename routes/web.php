<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NamaqoriController;

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
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('favorite', [InfoController::class, 'favorite'])->name('pages.favorite');
    Route::get('alquran', [InfoController::class, 'alquran'])->name('pages.alquran');
    Route::get('playlist', [InfoController::class, 'playlist'])->name('pages.playlist');
    Route::get('receiter', [InfoController::class, 'receiter'])->name('pages.receiter');

    Route::get('play', [NamaqoriController::class, 'play'])->name('pages.receiter.play');
    Route::get('AlAhmed', [NamaqoriController::class, 'AlAhmed'])->name('pages.receiter.AlAhmed');
    Route::get('Warsh', [NamaqoriController::class, 'Warsh'])->name('pages.receiter.Warsh');
    Route::get('Brown', [NamaqoriController::class, 'Brown'])->name('pages.receiter.Brown');
    Route::get('Basit', [NamaqoriController::class, 'Basit'])->name('pages.receiter.Basit');
    Route::get('Obeikan', [NamaqoriController::class, 'Obeikan'])->name('pages.receiter.Obeikan');
    Route::get('Albudair', [NamaqoriController::class, 'Albudair'])->name('pages.receiter.Albudair');
});

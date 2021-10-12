<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\MurotalController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PlaylistController;
use App\Http\Controllers\Api\ReciterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', [UserController::class, 'users']);
/**
 * Api Register
 */
Route::post('/register', [RegisterController::class, 'register']);
/**
 * Api Login
 */
Route::post('/login', [LoginController::class, 'login']);

/**
 * APi PLaylists
 */
Route::get('/playlists', [PlaylistController::class, 'index']);
// Route::get('/category/{slug}', [PlaylistController::class, 'show']);
// Route::get('/categoryHome', [PlaylistController::class, 'categoryHome']);

/**
 * APi Murotals
 */
Route::get('/murotals', [MurotalController::class, 'index']);
// Route::get('/category/{slug}', [PlaylistController::class, 'show']);
// Route::get('/categoryHome', [PlaylistController::class, 'categoryHome']);

/**
 * APi Reciters
 */
Route::get('/reciters', [ReciterController::class, 'index']);
Route::get('/reciters/{slug}', [ReciterController::class, 'show']);

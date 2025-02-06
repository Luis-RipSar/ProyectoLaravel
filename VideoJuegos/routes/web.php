<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/games', [GamesController::class, 'index']);

Route::get('/games/create', [GamesController::class, 'create']);

Route::get('/games/delete', [GamesController::class, 'delete']);

Route::get('/games/{name_game}', [GamesController::class, 'help']);

Route::get('/games/edit', function() {
    return view('');
});
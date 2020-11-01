<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayersController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/');
});
Auth::routes();

Route::middleware ('auth') -> group (function () {

    Route::get('/', [PlayersController::class, 'index']);

    Route::get('/players/{players}', [PlayersController::class, 'show']);
    Route::delete('/players/{players}/', [PlayersController::class, 'destroy']);

    Route::get('/players/', [PlayersController::class, 'create']);
    Route::post('/players/', [PlayersController::class, 'store']);

    Route::get('/players/{players}/edit', [PlayersController::class, 'edit']);
    Route::patch('/players/{players}', [PlayersController::class, 'update']);
});

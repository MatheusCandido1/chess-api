<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;

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


Route::prefix('v1')->group(function () {

    // Match
    Route::prefix('games')->group(function() {
        Route::get('', [GameController::class, 'index']);
    });

    // Players
    Route::prefix('players')->group(function() {
        Route::get('', [PlayerController::class, 'index']);
    });
});

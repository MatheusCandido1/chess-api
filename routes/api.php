<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchController;
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
    Route::prefix('matches')->group(function() {
        Route::get('', [MatchController::class, 'index']);
    });

    // Players
    Route::prefix('players')->group(function() {
        Route::get('', [PlayerController::class, 'index']);
    });
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index() {
        try {
            $games = Game::where('status', 1)->get();

            $next_game = Game::where('status', 0)->first();


            return response()->json([
                'data' => [
                   'game' => $games,
                   'next_game' => $next_game
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}

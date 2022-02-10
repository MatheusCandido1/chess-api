<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index() {
        try {
            $players = Player::all();


            return response()->json([
                'data' => [
                   'players' => $players,
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Match;


class MatchController extends Controller
{
    public function index() {
        try {
            $matches = Match::where('status', 1)->get();

            $next_match = Match::where('status', 0)->first();


            return response()->json([
                'data' => [
                   'matches' => $matches,
                   'next_match' => $next_match
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}

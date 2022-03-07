<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Game;
use App\Models\Player;

class GameController extends Controller
{

    public function getGame() {

        $game = Game::where('play', 'https://lichess.org/bi1un5CV')->first();

        $response = Http::accept('application/json')->get('https://lichess.org/game/export/bi1un5CV');

        $white_id = $response['players']['white']['user']['id'];
        $black_id = $response['players']['black']['user']['id'];

        $white = Player::where('lichess_id', $white_id)->first();
        $black = Player::where('lichess_id', $black_id)->first();

        if($response['winner'] === 'white') {
            $game->winner = $white->id;
            $game->loser = $black->id;
            $game->winner_color = 'white';
            $game->loser_color = 'black';
        }

        if($response['winner'] === 'black') {
            $game->winner = $black->id;
            $game->loser = $white->id;
            $game->winner_color = 'black';
            $game->loser_color = 'white';
        }

        $game->status = 1;
        $game->pgn = $response['moves'];
        $game->save();

        return response()->json([
            'message' => 'Match updated'
        ], 200);
    }

    public function store(Request $request) {
        $game = new Game;
        $game->play = $request->play;
        $game->status = $request->status;
        $game->whites = $request->whites;
        $game->blacks = $request->blacks;
        $game->speed = 'Rápida';
        $game->schedule = $request->schedule;
        $game->save();

        return response()->json([
            'message' => 'Match created'
        ], 201);
    }


    public function index() {
        try {
            $games = Game::with('whites','blacks','winner','loser')->where('status', 1)->get();

            $next_game = Game::with('whites','blacks')->where('status', 0)->first();


            return response()->json([
                'data' => [
                   'games' => $games,
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

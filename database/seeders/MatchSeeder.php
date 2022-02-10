<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Match;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::create([
            'play' => 'https://lichess.org/Am8n1GWW',
            'status' => '0',
            'whites' => '1',
            'blacks' => '2',
            'play' => '2',
            'schedule' => '2022-02-10 00:00:00',
        ]);
    }
}

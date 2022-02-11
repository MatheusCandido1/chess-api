<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'name' => 'Candin',
            'lichess_id' => 'matheuscandido'
        ]);

        Player::create([
            'name' => 'Max',
            'lichess_id' => 'max618br'
        ]);
    }
}

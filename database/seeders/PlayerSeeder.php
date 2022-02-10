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
            'name' => 'Candin'
        ]);

        Player::create([
            'name' => 'Max'
        ]);
    }
}

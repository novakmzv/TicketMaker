<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'name' => 'Fútbol',
            'base_price' => 25.00
        ]);

        Game::create([
            'name' => 'Basketball',
            'base_price' => 20.00
        ]);

        Game::create([
            'name' => 'Tenis',
            'base_price' => 30.00
        ]);
    }
}

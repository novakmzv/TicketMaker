<?php

namespace Database\Seeders;

use App\Models\ClientType;
use Illuminate\Database\Seeder;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientType::create([
            'name' => 'Regular',
            'price_multiplier' => 1.00
        ]);

        ClientType::create([
            'name' => 'VIP',
            'price_multiplier' => 0.70
        ]);

        ClientType::create([
            'name' => 'Estudiante',
            'price_multiplier' => 0.80
        ]);
    }
}

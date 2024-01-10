<?php

namespace Database\Seeders;

use App\Models\Room;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Room::factory()->create([
            'title' => 'title1',
            'number' => '02',
            'capacity' => 5,
            'description' => 'desc',
            'price' => 20000,
        ]);

        Room::factory()->create([
            'title' => 'title2',
            'number' => '03',
            'capacity' => 2,
            'description' => 'desc2',
            'price' => 30000,
        ]);
    }
}

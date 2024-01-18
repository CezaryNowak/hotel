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
            'title' => 'Luxury Suite',
            'number' => '101',
            'capacity' => 2,
            'description' => 'Experience ultimate luxury and comfort in our spacious suite.',
            'price' => 20000,
        ]);
        
        Room::factory()->create([
            'title' => 'Deluxe Room',
            'number' => '202',
            'capacity' => 3,
            'description' => 'Indulge in the modern amenities and stylish decor of our deluxe room.',
            'price' => 30000,
        ]);
        
        Room::factory()->create([
            'title' => 'Family Suite',
            'number' => '303',
            'capacity' => 4,
            'description' => 'Perfect for families, our suite offers ample space and cozy ambiance.',
            'price' => 40000,
        ]);
        
        Room::factory()->create([
            'title' => 'Executive Room',
            'number' => '404',
            'capacity' => 2,
            'description' => 'Enjoy a productive stay in our executive room with a dedicated workspace.',
            'price' => 25000,
        ]);
        
        Room::factory()->create([
            'title' => 'Penthouse Suite',
            'number' => '505',
            'capacity' => 2,
            'description' => 'Indulge in luxury and breathtaking views from our penthouse suite.',
            'price' => 50000,
        ]);
        
        Room::factory()->create([
            'title' => 'Standard Room',
            'number' => '606',
            'capacity' => 1,
            'description' => 'Experience a comfortable stay in our well-appointed standard room.',
            'price' => 15000,
        ]);
        
        Room::factory()->create([
            'title' => 'Ocean View Suite',
            'number' => '707',
            'capacity' => 2,
            'description' => 'Wake up to stunning ocean views in our exclusive ocean view suite.',
            'price' => 35000,
        ]);
        
        Room::factory()->create([
            'title' => 'Honeymoon Suite',
            'number' => '808',
            'capacity' => 2,
            'description' => 'Celebrate your special moments in our romantic honeymoon suite.',
            'price' => 40000,
        ]);
        
        Room::factory()->create([
            'title' => 'Business Room',
            'number' => '909',
            'capacity' => 1,
            'description' => 'Stay productive and focused in our well-equipped business room.',
            'price' => 20000,
        ]);
        
        Room::factory()->create([
            'title' => 'Garden View Suite',
            'number' => '1010',
            'capacity' => 3,
            'description' => 'Relax in the serenity of our garden view suite with beautiful garden views.',
            'price' => 30000,
        ]);
    }
}

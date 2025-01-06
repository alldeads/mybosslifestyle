<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => '100 Pesos SM Gift Certificate',
            'image' => 'items/9.jpg',
            'description' => '100 Pesos SM Gift Certificate',
            'points' => 8,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '5 Kilos Ganador Rice',
            'image' => 'items/1.jpg',
            'description' => '5 Kilos Ganador Rice',
            'points' => 25,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '800 Pesos SM Gift Certificate',
            'image' => 'items/2.jpg',
            'description' => '800 Pesos SM Gift Certificate',
            'points' => 50,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '25 Kls Ganador Rice',
            'image' => 'items/3.jpg',
            'description' => '25 Kls Ganador Rice',
            'points' => 90,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Negosyo Package',
            'image' => 'items/4.jpg',
            'description' => 'Negosyo Package worth of 12,600',
            'points' => 250,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brand New Samsung A12',
            'image' => 'items/5.jpg',
            'description' => 'Brand New Samsung A12',
            'points' => 400,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Family Appliance Showcase',
            'image' => 'items/6.jpg',
            'description' => '30k worth of SM Appliances',
            'points' => 1250,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Mio Soul 125i',
            'image' => 'items/7.jpg',
            'description' => 'Brandnew Mio Soul 125i',
            'points' => 3000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '150K Pesos Cash',
            'image' => 'items/8.jpg',
            'description' => '150K Pesos Cash',
            'points' => 5000,
            'quantity' => 9999,
            'status' => 'active'
        ]);
    }
}

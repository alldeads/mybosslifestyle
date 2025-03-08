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
            'image' => 'items/1.jpg',
            'description' => '100 Pesos SM Gift Certificate',
            'points' => 10,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '5 Kilos Ganador Rice',
            'image' => 'items/2.jpg',
            'description' => '5 Kilos Ganador Rice',
            'points' => 30,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '1k Pesos SM Gift Certificate',
            'image' => 'items/3.jpg',
            'description' => '1k Pesos SM Gift Certificate',
            'points' => 50,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '25 Kls Ganador Rice',
            'image' => 'items/4.jpg',
            'description' => '25 Kls Ganador Rice',
            'points' => 100,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Samsung Galaxy A06',
            'image' => 'items/5.jpg',
            'description' => 'Brandnew Samsung Galaxy A06',
            'points' => 300,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Huawei Nova Y72',
            'image' => 'items/6.jpg',
            'description' => 'Brandnew Huawei Nova Y72',
            'points' => 450,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Samsung Galaxy A15',
            'image' => 'items/7.jpg',
            'description' => 'Brandnew Samsung Galaxy A15',
            'points' => 600,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew 10.2 inch Apple Ipad',
            'image' => 'items/8.jpg',
            'description' => 'Brandnew 10.2 inch Apple Ipad',
            'points' => 800,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Family Appliance Showcase',
            'image' => 'items/9.jpg',
            'description' => '25k worth of SM Appliances',
            'points' => 1000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Mio Soul 125i',
            'image' => 'items/10.jpg',
            'description' => 'Brandnew Mio Soul 125i',
            'points' => 3000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '100K Pesos Cash',
            'image' => 'items/11.jpg',
            'description' => '100K Pesos Cash',
            'points' => 3500,
            'quantity' => 9999,
            'status' => 'active'
        ]);
    }
}

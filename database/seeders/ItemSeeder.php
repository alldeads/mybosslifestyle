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
            'name' => 'B.O.S.S Product',
            'image' => 'items/1.jpg',
            'description' => '1 B.O.S.S Product of your own choice',
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
            'name' => '1k Pesos Cash',
            'image' => 'items/3.jpg',
            'description' => '1k Pesos Cash',
            'points' => 70,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Samsung Keystone',
            'image' => 'items/4.jpg',
            'description' => 'Brandnew Samsung Keystone',
            'points' => 100,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Shopping Spree!',
            'image' => 'items/5.jpg',
            'description' => 'Shopping Spree! 4k worth of SM Gift Certificate',
            'points' => 300,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Samsung Galaxy A50s Smartphone',
            'image' => 'items/6.jpg',
            'description' => 'Samsung Galaxy A50s Smartphone',
            'points' => 500,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Huawei Matepad with Keyboard',
            'image' => 'items/7.jpg',
            'description' => 'Huawei Matepad with Keyboard',
            'points' => 1000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'TCL 50" Smart TV',
            'image' => 'items/8.jpg',
            'description' => 'TCL 50" Smart TV',
            'points' => 2000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Hongkong Disneyland Trip',
            'image' => 'items/9.jpg',
            'description' => 'All Expense Paid Trip to Hongkong Good For 1',
            'points' => 3000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => 'Brandnew Mio Soul 125i',
            'image' => 'items/10.jpg',
            'description' => 'Brandnew Mio Soul 125i',
            'points' => 5000,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Item::create([
            'name' => '120k Pesos Cash',
            'image' => 'items/11.jpg',
            'description' => '120k Pesos Cash',
            'points' => 8000,
            'quantity' => 9999,
            'status' => 'active'
        ]);
    }
}

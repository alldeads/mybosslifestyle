<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'FamGuard',
            'image' => 'products/famguard.jpg',
            'bio' => 'Your personal self protective measure to combat mosquito and the diseases it carry.',
            'description' => 'Your personal self protective measure to combat mosquito and the diseases it carry.',
            'price' => 150,
            'dprice' => 150,
            'quantity' => 9999,
            'status' => 'active'
        ]);
    }
}

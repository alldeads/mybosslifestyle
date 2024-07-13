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
            'name' => 'Magnesium Therapy Oil',
            'image' => 'products/1.png',
            'bio' => 'Magnesium is an essential element required as a cofactor for over 300 enzymatic reactions and is necessary for our body to function properly',
            'description' => 'Magnesium is an essential element required as a cofactor for over 300 enzymatic reactions and is necessary for our body to function properly',
            'price' => 300,
            'dprice' => 210,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Product::create([
            'name' => '24k Gold Anti-radiation Path',
            'image' => 'products/2.png',
            'bio' => 'Approximately 90% of the world’s population owns a smart phone or a mobile phone. We use this device in multiple ways such as browsing the internet, watching movies and videos, playing games and many more. On average a person spends 8-10 hours per day using a smart phone with ages 9 to 18 years old spending longer hours. Some studies shows that prolong usage of gadgets especially the smart phone can cause brain tumor as this emits radiation that can potentially harm our health and worst cause brain tumor.',
            'description' => 'Approximately 90% of the world’s population owns a smart phone or a mobile phone. We use this device in multiple ways such as browsing the internet, watching movies and videos, playing games and many more. On average a person spends 8-10 hours per day using a smart phone with ages 9 to 18 years old spending longer hours. Some studies shows that prolong usage of gadgets especially the smart phone can cause brain tumor as this emits radiation that can potentially harm our health and worst cause brain tumor.',
            'price' => 500,
            'dprice' => 300,
            'quantity' => 9999,
            'status' => 'active'
        ]);

        Product::create([
            'name' => 'Titan Oil',
            'image' => 'products/3.png',
            'bio' => 'Magnesium is an essential element required as a cofactor for over 300 enzymatic reactions and is necessary for our body to function properly',
            'description' => 'Applying titan oil to a man’s sexual organ greatly reduces the risk of prostate problem in the future as this contains safe and effective plant base minerals.

Epimedium Extract Mint- Promotes better blood flow

Virgin Coconut oil-Anti fungal, anti bacterial and an effective moisturizer

Peruvian Maca- Help boost prostate and sperm health while promoting healthy sexual life by increasing libido

Grape seed extract- known for promoting good blood flow and circulation and repairs nerve damage.

This product is highly recommended for men especially the married one’s. Applying titan oil on a regular basis not only reduces the risk of prostate problem in the future this can is also be  beneficial for both couples as this product promotes  healthier, better and more active sex life.
',
            'price' => 500,
            'dprice' => 350,
            'quantity' => 9999,
            'status' => 'active'
        ]);
    }
}

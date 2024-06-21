<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        User::factory(1)->create([
            'name' => 'Chong',
            'email' => 'chong@admin.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        User::factory(1)->create([
            'name' => 'Rex',
            'email' => 'rex@admin.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);
    }
}

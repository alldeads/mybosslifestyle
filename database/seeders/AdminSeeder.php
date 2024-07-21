<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'first_name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => Str::random(8),
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        User::factory(1)->create([
            'first_name' => 'Chong',
            'email' => 'chong@admin.com',
            'username' => Str::random(8),
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        User::factory(1)->create([
            'first_name' => 'Rex',
            'email' => 'rex@admin.com',
            'username' => Str::random(8),
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        Setting::create([
            'share_bonus' => 0
        ]);
    }
}

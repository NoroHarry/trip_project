<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Mouad Harimech',
            'email' => 'inova@gmail.com',
            'photo' => 'admin_1717493029.jpg',
            'password' => Hash::make('1234'),
            'token' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            WelcomeItemSeeder::class,
            CounterItemSeeder::class,
            HomeItemSeeder::class,
            AboutItemSeeder::class,
            ContactItemSeeder::class,
            TermPrivacyItemSeeder::class,
            SettingSeeder::class,
            // Ajoutez d'autres seeders si nécessaire
        ]);
    }
}

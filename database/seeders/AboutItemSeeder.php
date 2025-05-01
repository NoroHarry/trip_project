<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutItem;

class AboutItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutItem::create([
            'feature_status' => 'Show',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CounterItem;

class CounterItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CounterItem::create([
            'item1_number' => '60',
            'item1_text' => 'Destinations',
            'item2_number' => '1500',
            'item2_text' => 'Clients',
            'item3_number' => '70',
            'item3_text' => 'Packages',
            'item4_number' => '80',
            'item4_text' => 'Feedbacks',
            'status' => 'Show',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

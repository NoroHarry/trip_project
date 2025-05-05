<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'logo' => 'logo_1720806387.png',
            'favicon' => 'favicon_1720806387.png',
            'top_bar_phone' => '+212 682 666 837',
            'top_bar_email' => 'inova@gmail.com',
            'footer_address' => '34 Rue Jabran Khalil, Yassmina, Berrechid, Maroc',
            'footer_phone' => '+212 682 666 837',
            'footer_email' => 'inova@gmail.com',
            'facebook' => '#',
            'twitter' => '#',
            'youtube' => '#',
            'linkedin' => '#',
            'instagram' => '#',
            'copyright' => 'Copyright © 2025, InovaTrip. All Rights Reserved.',
            'banner' => 'banner_1720807992.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

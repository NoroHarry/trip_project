<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WelcomeItem;

class WelcomeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WelcomeItem::create([
            'heading' => 'Welcome to InovaTrip',
            'description' => 'At to InovaTrip, our mission is to turn travel dreams into reality by providing personalized and memorable experiences. We leverage our expertise and trusted partners to ensure every trip is seamless and enjoyable. <br><br>We believe travel fosters personal growth and cultural understanding. Our goal is to help clients explore new destinations and connect with diverse cultures. We promote sustainable travel to positively impact communities and preserve our planet\'s beauty.',
            'button_text' => 'Read More',
            'button_link' => '#',
            'photo' => 'welcome_item_1720275719.jpg',
            'video' => 'Rh9Kz2EHKnw',
            'status' => 'Show',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

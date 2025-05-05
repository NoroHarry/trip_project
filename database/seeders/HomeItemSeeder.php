<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeItem;

class HomeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeItem::create([
            'destination_heading' => 'Popular Destinations',
            'destination_subheading' => 'Explore our most popular travel destinations around the world',
            'destination_status' => 'Show',
            'feature_status' => 'Show',
            'package_heading' => 'Latest Packages',
            'package_subheading' => 'Explore our latest travel packages around the world',
            'package_status' => 'Show',
            'testimonial_heading' => 'Client Testimonials',
            'testimonial_subheading' => 'See what our clients have to say about their experience with us',
            'testimonial_background' => 'testimonial_background_1720808299.jpg',
            'testimonial_status' => 'Show',
            'blog_heading' => 'Latest News',
            'blog_subheading' => 'Check out the latest news and updates from our blog post',
            'blog_status' => 'Show',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

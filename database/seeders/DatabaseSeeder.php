<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@accountforge.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $user = User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@accountforge.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // Seed Countries
        $countries = [
            ['name' => 'United States', 'code' => 'US', 'status' => true],
            ['name' => 'United Kingdom', 'code' => 'UK', 'status' => true],
            ['name' => 'Canada', 'code' => 'CA', 'status' => true],
            ['name' => 'Australia', 'code' => 'AU', 'status' => true],
            ['name' => 'Germany', 'code' => 'DE', 'status' => true],
        ];
        foreach ($countries as $c) {
            \App\Models\Country::create($c);
        }

        // Seed Categories
        $categories = [
            ['name' => 'TikTok Growth', 'description' => 'Boost your TikTok presence', 'status' => true],
            ['name' => 'YouTube SEO', 'description' => 'Rank higher on YouTube', 'status' => true],
            ['name' => 'Instagram Branding', 'description' => 'Professional Instagram setup', 'status' => true],
            ['name' => 'Twitter Marketing', 'description' => 'Engage on X/Twitter', 'status' => true],
            ['name' => 'LinkedIn Profile', 'description' => 'Professional networking', 'status' => true],
        ];
        foreach ($categories as $cat) {
            \App\Models\Category::create($cat);
        }

        // Seed Services
        for ($i = 1; $i <= 5; $i++) {
            \App\Models\Service::create([
                'category_id' => $i,
                'name' => 'Premium Service ' . $i,
                'description' => 'High quality digital service ' . $i,
                'status' => true,
            ]);
        }

        // Seed Service Requests
        $statuses = ['Pending', 'In Progress', 'Waiting for User', 'Completed', 'Cancelled'];
        for ($i = 1; $i <= 5; $i++) {
            \App\Models\ServiceRequest::create([
                'user_id' => $user->id,
                'service_id' => $i,
                'country_id' => $i,
                'details' => 'Please provide the service for my account as discussed.',
                'status' => $statuses[$i - 1],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Vote;
use App\Models\Country; // Import the Country model
use App\Models\User; // Import the User model
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get only supportive countries
        $supportiveCountryIds = Country::where('supportive', true)->pluck('id')->toArray();

        // Get all users
        $userIds = User::pluck('id')->toArray();

        // Create 50 random votes from supportive countries with unique users
        foreach (array_unique(array_rand(array_flip($userIds), 50)) as $userId) {
            Vote::factory()->create([
                'user_id' => $userId,
                'country_id' => $supportiveCountryIds[array_rand($supportiveCountryIds)],
            ]);
        }
    }
}

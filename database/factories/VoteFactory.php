<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Get random user and country IDs from the database
        $userIds = User::pluck('id')->toArray();
        $countryIds = Country::pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($userIds),
            'country_id' => $this->faker->randomElement($countryIds),
            'percentage' => $this->faker->randomFloat(2, 0, 100),
            'notes' => $this->faker->text,
            'public_vote' => $this->faker->boolean,
        ];
    }
}

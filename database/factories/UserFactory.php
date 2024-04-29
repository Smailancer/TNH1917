<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        $username = $this->generateUniqueUsername(); // Generate a unique username

        return [
            'name' => $name,
            'username' => $username,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Generate a unique username.
     *
     * @return string
     */
   private function generateUniqueUsername(): string
    {
        $prefix = 'Balfour_';

        // Generate a random string of digits for the username
        $randomDigits = '';
        for ($i = 0; $i < 5; $i++) {
            $randomDigits .= mt_rand(0, 9);
        }

        $username = $prefix . $randomDigits; // Concatenate the random digits to the prefix

        // Check if the generated username already exists in the database
        while (User::where('username', $username)->exists()) {
            // Regenerate a new random string of digits
            $randomDigits = '';
            for ($i = 0; $i < 5; $i++) {
                $randomDigits .= mt_rand(0, 9);
            }

            $username = $prefix . $randomDigits; // Generate a new username
        }

        return $username;
    }


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

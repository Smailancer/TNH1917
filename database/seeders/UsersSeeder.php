<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the admin user with a generated username
        $adminUser = User::factory()->create([
            'name' => env('ADMIN_NAME'),
            'email' => env('ADMIN_EMAIL'),
            'password' => Hash::make(env('ADMIN_PASSWORD')),
        ]);

        // Generate username for the admin user
        $adminUsername = 'Balfour_' . $adminUser->id;
        $adminUser->update(['username' => $adminUsername]);

        // Create 49 additional users
        User::factory()->count(49)->create()->each(function ($user) {
            $username = 'Balfour_' . $user->id; // Generate username using user ID
            $user->update(['username' => $username]); // Update the user with the generated username
        });
    }
}

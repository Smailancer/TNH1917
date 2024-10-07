<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Signature;

class SignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some default signatures
        Signature::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'country_id' => 1, // Assuming you have a country with ID 1
            'receive_updates' => true,
        ]);

        Signature::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'country_id' => 1,
            'receive_updates' => false,
        ]);
    }
}

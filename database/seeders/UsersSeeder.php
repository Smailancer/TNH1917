<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(49)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@smail.com',
            'password' => Hash::make('azerty123'),

        ]);

    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Option;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        parent::call(CountriesSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Option::create(['name' => 'Option 1']);
        Option::create(['name' => 'Option 2']);
        Option::create(['name' => 'Option 3']);
        Option::create(['name' => 'Option 4']);

    }
}

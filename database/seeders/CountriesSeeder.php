<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $json = File::get(database_path('seeders/json/countries.json'));
        $data = json_decode($json);

        // Insert data into the 'countries' table
        foreach ($data as $item) {
            DB::table('countries')->insert([
                'name' => $item->name,
                'code' => $item->code,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = database_path('seeders/json/countries.json');
        
        if (!File::exists($filePath)) {
            Log::error("CountriesSeeder: JSON file not found at path: $filePath");
            return;
        }

        $json = File::get($filePath);
        $data = json_decode($json);
        $nonSupportiveCountries = [
            'AF',  // Afghanistan - Never
            'DZ',  // Algeria - Never
            'BD',  // Bangladesh - Never
            'BZ',  // Belize - Suspended/Cut Relations
            'BO',  // Bolivia - Suspended/Cut Relations
            'BN',  // Brunei - Never
            'KM',  // Comoros - Never
            'CU',  // Cuba - Withdrew
            'DJ',  // Djibouti - Never
            'ID',  // Indonesia - Never
            'IR',  // Iran - Withdrew
            'IQ',  // Iraq - Never
            'KW',  // Kuwait - Never
            'LB',  // Lebanon - Never
            'LY',  // Libya - Never
            'MY',  // Malaysia - Never
            'MV',  // Maldives - Suspended/Cut Relations
            'ML',  // Mali - Suspended/Cut Relations
            'MR',  // Mauritania - Suspended/Cut Relations
            'NE',  // Niger - Suspended/Cut Relations
            'KP',  // North Korea - Never
            'OM',  // Oman - Never
            'PK',  // Pakistan - Never
            'QA',  // Qatar - Never
            'SA',  // Saudi Arabia - Never
            'SO',  // Somalia - Never
            'SY',  // Syria - Never
            'TN',  // Tunisia - Never
            'VE',  // Venezuela - Suspended/Cut Relations
            'YE',  // Yemen - Never
        ];
        
        

        foreach ($data as $item) {
            DB::table('countries')->insert([
                'name' => $item->name,
                'code' => strtolower($item->code),
                'supportive' => !in_array($item->code, $nonSupportiveCountries),
            ]);
        }

        Log::info('CountriesSeeder: Countries table seeded successfully.');
    }
}

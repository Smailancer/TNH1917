<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Option;
use Illuminate\Database\Seeder;
use Database\Seeders\VotesSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        parent::call(UsersSeeder::class);
        parent::call(CountriesSeeder::class);
        parent::call(VotesSeeder::class);


        Option::create(['name' => 'Accepting what was written in the Torah thousands of years ago as a legal document for land ownership in the United Nations.
']);

Option::create(['name' => 'Declaring that the chosen land is a land without a people to divert attention from the fact that the process is colonization.
']);

Option::create(['name' => 'Harassing the indigenous population, pushing them, and forcing them if necessary to leave their lands, especially farmers.
']);

Option::create(['name' => 'Enacting new cunning laws to confiscate the lands from their original inhabitants who refuse to leave, even by force, and handing them over to new settlers.
']);

Option::create(['name' => 'Arresting any troublesome person who resists and protests (even  peacefully) against these new laws and describe what he is doing as an act of sabotage.
']);

Option::create(['name' => 'Blackmailing the indigenous population to escalate by cutting off resources such as water and electricity, isolating the indigenous people, leaving them to slow death, and forcing them to protest using force.
']);

Option::create(['name' => 'In case the blackmail succeeds and any armed resistance appears, using it as an excuse and directly labeling it as terrorism, and spreading it through propaganda (media warfare) to obtain validation from the world to facilitate afterwards eliminating it.
']);

Option::create(['name' => 'Harassing journalists, assassinating them, and destroying their media headquarters if necessary so they do not spread what is happening in reality.
']);

Option::create(['name' => 'Creating digital viruses to hack journalists\' devices and spy on them (cyber warfare).
']);

Option::create(['name' => 'Besieging the indigenous population in a narrow area, tightening the grip on them, administratively controlling them, and leaving a humanitarian outlet for those who oppose the decision to vacate their place for neighboring countries.
']);

Option::create(['name' => 'Ethnic cleansing if necessary and indiscriminate shelling of the troublesome indigenous population if they do not leave their homes (providing exits to comply with international laws).
']);

Option::create(['name' => 'Requesting military, media, and financial support from powerful countries such as our Great Britain (as Balfour) and the United States to eliminate any armed opposition voice.
']);

Option::create(['name' => 'Taking the hiding of resistance fighters in public places such as hospitals as an excuse to bomb them (with a warning sent before bombing in compliance with international laws).
']);

Option::create(['name' => 'Targeting bombing towards children and women to reduce the demographic growth of the troublesome indigenous population in the area.
']);

Option::create(['name' => 'Closing humanitarian aid outlets such as food and medicine to leave the indigenous population to slow death, famine, and diseases.
']);

Option::create(['name' => 'Using any event that the armed resistance may carry out as a compelling excuse for any unethical act that our allies Israel may commit.
']);




    }
}

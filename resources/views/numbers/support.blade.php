<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Numbers (October 2023 - August 2024)') }}
        </h2>
    </x-slot>

    <div>
        <main>
            <div class="container mx-auto p-4">
                <!-- Responsive Grid for sections -->
                <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Palestine Section -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="flex flex-col items-center mb-6">
                            <img src="../palestine.png" alt="Palestine Flag" class="w-16 h-10">
                            <h2 class="mt-2 text-2xl font-bold text-red-600 text-center">Loses of Palestine</h2>
                        </div>

                        <!-- Key Impact Figures -->
                        <div class="space-y-4">
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Lives Lost: <span class="text-red-600">Over 37,900 civilians, including 13,000 children and 9,000 women</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Hostages: <span class="text-red-600">Approximately 4,700 Palestinians are currently being held in Israeli prisons, including hundreds in administrative detention</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Missing: <span class="text-red-600">7,000 missing under rubble</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Displacement: <span class="text-red-600">Over 2.3 million Palestinians displaced</span>
                            </div>
                        </div>

                        <!-- Additional Impact -->
                        <ul class="space-y-2 mt-6 text-sm text-justify">
                            <li><strong>Hospitals Under Siege:</strong> Key medical facilities, including <em>Indonesian Hospital</em>, have been bombed or surrounded by Israeli forces, severely limiting access to medical care for thousands of injured civilians.</li>
                            <li><strong>Infrastructure Devastation:</strong> Over 70% of homes in Gaza have been destroyed, leaving millions without access to basic services like clean water, electricity, or medical care.</li>
                            <li><strong>Cultural Destruction:</strong> Hundreds of historical landmarks, mosques, and schools have been damaged or destroyed in the bombardment.</li>
                            <li><strong>Humanitarian Crisis:</strong> The region faces a looming famine due to a lack of food, water, and medical supplies. Aid agencies like the UN struggle to provide relief due to blockades and ongoing airstrikes.</li>
                            <li><strong>Mass Graves Found:</strong> Dozens of mass graves were discovered inside hospitals like <em>Al-Shifa</em>, highlighting the severe scale of death.</li>
                            <li><strong>Airstrike on Jabalia Camp:</strong> An Israeli airstrike on the crowded Jabalia refugee camp caused over 100 civilian deaths in one incident, showcasing the widespread civilian impact.</li>
                            <li><strong>Accusations of War Crimes:</strong> Both Israel and Hamas have faced accusations of targeting civilians, leading to international calls for war crime investigations.</li>
                        </ul>
                    </div>

                    <!-- Israel Section -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="flex flex-col items-center mb-6">
                            <img src="../israel.png" alt="Israel Flag" class="w-16 h-10">
                            <h2 class="mt-2 text-2xl font-bold text-blue-600 text-center">Loses of Israel</h2>
                        </div>

                        <!-- Key Impact Figures -->
                        <div class="space-y-4">
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Lives Lost: <span class="text-blue-600">1,200 Israeli civilians killed</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Hostages: <span class="text-blue-600">101 Israeli civilians still held in Gaza</span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Missing: <span class="text-blue-600">0 missing case </span>
                            </div>
                            <div class="text-xl font-bold text-gray-800 text-center">
                                Displacement: <span class="text-blue-600">Up to 500,000 Israelis displaced, mainly in southern regions</span>
                            </div>
                        </div>

                        <!-- Additional Impact -->
                        <ul class="space-y-2 mt-6 text-sm text-justify">
                            <li><strong>Civilian Fear and Trauma:</strong> Rocket attacks from Gaza have caused widespread trauma, with civilians forced to evacuate towns near the Gaza border.</li>
                            <li><strong>Economic Strain:</strong> Israel has incurred billions in military costs, reconstruction, and civilian aid due to damage in southern towns and the defense against rocket fire.</li>
                            <li><strong>Infrastructure Damage:</strong> Southern Israeli towns, while less severely impacted compared to Gaza, have suffered infrastructure damage from rocket fire and drone attacks.</li>
                            <li><strong>Hostage Crisis:</strong> More than 100 Israeli civilians remain hostages in Gaza, with efforts to negotiate their release ongoing amidst the conflict.</li>
                            <li><strong>Global Sympathy for Civilian Casualties:</strong> Israel has received significant global attention for the suffering of its civilians, particularly in response to the attacks on October 7, 2023.</li>
                            <li><strong>U.S. Military and Financial Support:</strong> Israel continues to receive billions of dollars in military aid and advanced defense systems to mitigate the threat from Gaza.</li>
                        </ul>
                    </div>
                </div>

                <!-- Support Section -->
                <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                    
                    <!-- Palestine Support Section -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="flex flex-col items-center mb-6">
                            <h2 class="mt-2 text-2xl font-bold text-green-600 text-center">Support for Palestine</h2>
                        </div>
                        <ul class="space-y-2 text-sm text-justify">
                            <li><strong>Humanitarian Aid:</strong> Despite the overwhelming need for humanitarian aid, it is extremely difficult for Gaza to receive basic necessities like food, water, and medicines due to the blockade. Aid convoys are often delayed or blocked, and as of late 2023, only a limited number of trucks were allowed through, far less than needed for the 2.3 million people in Gaza.</li>
                            <li><strong>Diplomatic Support:</strong> Countries such as <strong>Algeria</strong>, <strong>South Africa</strong>,<strong>Turkey</strong> and many others in the Middle East have condemned Israeli actions, calling for a ceasefire and bringing the issue to the <strong>International Criminal Court</strong> (ICC) to accuse Israel of genocide. South Africa formally brought charges of genocide against Israel in the ICJ.</li>
                            <li><strong>Financial Assistance:</strong> Some countries, particularly in the Middle East, have provided financial aid to Palestinian families affected by the war, but this aid is minimal compared to what Israel receives, and faces significant obstacles in reaching the people due to the blockade. As of mid-2024, these efforts are far from meeting the humanitarian needs.</li>
                            <li><strong>No Military Support:</strong> Unlike Israel, Palestinian groups have no rights to receive any foreign military equipment otherwise they would be labeld as terrorists. Hamas relies on smuggled weapons and locally produced rockets, which are no match for Israel's advanced military capabilities.</li>
                            <li><strong>International Protests:</strong> Public demonstrations in support of Palestinians have taken place across the world, pressuring israel supportive governments to take action against the violence. However, these movements have struggled to translate into concrete international interventions, and their influence on immediate military actions is minimal.</li>
                        </ul>
                    </div>

                    <!-- Israel Support Section -->
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class="flex flex-col items-center mb-6">
                            <h2 class="mt-2 text-2xl font-bold text-blue-600 text-center">Support for Israel</h2>
                        </div>
                        <ul class="space-y-2 text-sm text-justify">
                            <li><strong>Military Aid:</strong> Israel keeps having <strong>public immediate and consistent military aid</strong> from its allies, particularly the <strong>United States</strong>, which provides billions of dollars in advanced weaponry such as <strong>precision-guided bombs</strong>, <strong>fighter jets</strong>, and <strong>missile defense systems</strong> like <strong>Iron Dome</strong>. As of late 2023, the U.S. alone had sent more than $320 million worth of bombs and other equipment, including specialized gliding bomb assemblies and precision-guided weapons to Israel.</li>
                            <li><strong>Financial Support:</strong> The U.S. has provided <strong>billions of dollars</strong> in financial aid to Israel to support military operations and civilian recovery. In 2023, the U.S. provided **$3.8 billion** in military aid, with additional emergency support packages approved during the conflict.</li>
                            <li><strong>Diplomatic Backing:</strong> Israel receives strong diplomatic support from <strong>Western nations</strong>, including the <strong> U.K</strong>, <strong>France</strong>, and <strong>Germany</strong>, which consistently defend Israel’s actions at the <strong>UN</strong> and other international forums, ensuring it faces minimal consequences for its military operations.</li>
                            <li><strong>Ease of Access to Military Equipment:</strong> Unlike Palestinians, who struggle to get even basic humanitarian aid like food and medicine, Israel can easily acquire advanced military equipment. International arms deals and military shipments to Israel face no significant obstacles, allowing for rapid replenishment of supplies during conflict.</li>
                            <li><strong>Political Support:</strong> Many <strong>Western governments</strong> not only support Israel militarily but also provide substantial political cover, preventing the passage of resolutions at the UN that would impose sanctions or restrictions on Israel’s military activities.</li>
                        </ul>
                    </div>

                </div>

            </div>
        </main>
    </div>

</x-app-layout>

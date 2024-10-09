<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Story Timeline') }}
        </h2>
    </x-slot>
    @include('layouts.StoryNav')

    <div class="bg-white px-5 my-2">
        <ol class="relative border-s border-gray-200">

            <!-- August 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">August 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Humanitarian Crisis Reaches Breaking Point</h3>
                        <div class="text-sm font-normal">
                            By <strong>August 2024</strong>, the death toll exceeded <strong>43,000</strong>, with Gaza’s healthcare system near collapse. International agencies struggled to deliver aid amid ongoing blockades and bombings.
                        </div>
                    </div>
                </div>
            </li>

            <!-- July 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">July 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Infrastructure Breakdown Escalates</h3>
                        <div class="text-sm font-normal">
                            Over <strong>70% of homes</strong> in Gaza were destroyed or severely damaged, leaving millions displaced. Power and water infrastructure remained crippled, deepening the crisis.
                        </div>
                    </div>
                </div>
            </li>

            <!-- June 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">June 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Death Toll Rises to 40,000</h3>
                        <div class="text-sm font-normal">
                            Civilian casualties continued to rise, with the death toll surpassing <strong>40,000</strong> as airstrikes intensified across Gaza, targeting residential and public areas.
                        </div>
                    </div>
                </div>
            </li>

            <!-- May 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">May 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Humanitarian Agencies Struggle to Help</h3>
                        <div class="text-sm font-normal">
                            Humanitarian agencies faced increasing challenges reaching Gaza due to continued blockades, with over <strong>35,000 civilians</strong> dead and millions displaced.
                        </div>
                    </div>
                </div>
            </li>

            <!-- April 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">April 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Gaza’s Infrastructure Crumbles</h3>
                        <div class="text-sm font-normal">
                            By <strong>April 2024</strong>, over <strong>70% of homes</strong> in Gaza had been destroyed or severely damaged. Gaza’s public infrastructure, including hospitals and schools, faced near-total collapse.
                        </div>
                    </div>
                </div>
            </li>

            <!-- March 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">March 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Death Toll Exceeds 30,000</h3>
                        <div class="text-sm font-normal">
                            By <strong>March 2024</strong>, the cumulative death toll exceeded <strong>30,000</strong>, with continued airstrikes targeting residential and public infrastructure across Gaza.
                        </div>
                    </div>
                </div>
            </li>

            <!-- February 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">February 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Humanitarian Crisis Deepens</h3>
                        <div class="text-sm font-normal">
                            By <strong>February 2024</strong>, <strong>96% of Gaza’s water</strong> was unfit for consumption. Power outages extended to over <strong>12 hours a day</strong>, leading to a deepening humanitarian crisis.
                        </div>
                    </div>
                </div>
            </li>

            <!-- January 2024 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">January 2024</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Ceasefire Talks Collapse</h3>
                        <div class="text-sm font-normal">
                            Ceasefire negotiations broke down in <strong>January 2024</strong>, as airstrikes continued across Gaza, leaving the healthcare system in a state of collapse and worsening civilian casualties.
                        </div>
                    </div>
                </div>
            </li>

            <!-- December 2023 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">December 2023</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Mass Casualties and Infrastructure Collapse</h3>
                        <div class="text-sm font-normal">
                            By <strong>December 2023</strong>, Israeli airstrikes targeted homes and shelters, resulting in mass casualties. Reports of entire families being killed were frequent, and mass graves were discovered in heavily bombed areas.
                        </div>
                    </div>
                </div>
            </li>

            <!-- November 2023 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">November 2023</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Heavy Casualties in Gaza</h3>
                        <div class="text-sm font-normal">
                            In <strong>November 2023</strong>, Israel intensified airstrikes, killing over <strong>308 civilians</strong> in UNRWA shelters. Gaza’s infrastructure continued to crumble, and mass civilian casualties were reported.
                        </div>
                    </div>
                </div>
            </li>

            <!-- October 2023 -->
            <li class="mb-5 ms-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white"></div>
                <time class="mb-1 text-sm font-normal leading-none text-gray-700">October 2023</time>
                <div class="items-center block p-3">
                    <div class="text-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900">Hamas Attacks Israel, Conflict Erupts</h3>
                        <div class="text-sm font-normal">
                            On <strong>October 7, 2023</strong>, Hamas launched a surprise attack, killing over <strong>1,100 Israeli civilians</strong> and taking <strong>250 hostages</strong>. Israel retaliated with airstrikes on Gaza, leading to over <strong>20,000+</strong> Palestinian deaths and extensive infrastructure damage.
                        </div>
                    </div>
                </div>
            </li>

        </ol>
    </div>

</x-app-layout>

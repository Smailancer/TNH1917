<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
        {{ __('The National Home 1917') }}
    </h2>
</x-slot>
@include('layouts.VoteNav')

<section class="bg-white">
    <div class="grid text-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="ml-2 mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Help us end the Plastinien occupation</h1>
            <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50">
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl"> "The opening words of the declaration represented the first public expression of support for Zionism by a major political power. The term <strong class="font-semibold text-gray-900"> "National Home" had no precedent in international law </strong>, and was intentionally vague as to whether a Jewish state was contemplated. The intended boundaries of Palestine were not specified, and the British government later confirmed that the words "in Palestine" meant that the Jewish national home was not intended to cover all of Palestine. "</p>
                -Wikipedia
            </blockquote>
        </div>

        <dic class="max-w-lg lg:col-span-5 item-center ">
            <figcaption class="mt-2 text-sm text-center text-gray-500">The Balfor Declaration</figcaption>
            <img class="mx-auto h-auto" src="/declaration.jpg" alt="the declaration letter">
        </dic>
    </div>
</section>
    <section class="bg-gray">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto text-center lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="lg:col-span-5 lg:order-first order-last mt-8 lg:mt-0 lg:flex">
            <img class="mb-4 lg:mb-0 max-w-full h-auto" src="balfour.jpg" alt="Arthur Balfour">
        </div>

        <div class="ml-2 mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                A promise between 3 parties attended by only two
            </h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">The British government acknowledged in 1939 that the local population's wishes and interests should have been taken into account, and recognised in 2017 that the declaration should have called for the protection of the Palestinian political rights. This is what led to a promise between two Britons determines the fate of an entire foreign country and its region for many generations, making them ratify the famous saying:<strong class="font-semibold text-gray-900"> "Fateful promise from those who do not own [i.e., the British] to those who do not deserve [i.e., the Zionist]." </strong></p>
        </div>
    </div>
</section>



    <section class="bg-white">
        <div class="grid text-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="ml-2 mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Time to review that promise</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">We will now revive the promise and we will simulate the real declaration and give everyone the opportunity to assume the role of Balfour to decide the new location of The National Homel through a <strong class="font-semibold text-gray-900"> list of the countries that recognize the establishment of this new state and that it is assumed that they will not object if it were on their lands since they support the existence of such an invention called a national home.  </strong> </p>

            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                {{-- <img src="map.png" alt="mockup"> --}}
                <img class="mx-auto h-auto" src="map.png" alt="ocupation status">

            </div>
        </div>
    </section>


    {{-- @livewire('vote-form') --}}


<section id="voting" class="px-3 mx-2 flex justify-center items-center min-h-screen">
    <div class="my-2 w-full max-w-2xl mx-auto lg:pt-16 lg:pb-24 bg-white p-6 rounded-xl shadow-md"
         style="background-color: #F5DEB3;"
         x-data="{
            isLoggedIn: {{ Auth::check() ? 'true' : 'false' }},
            hasVoted: {{ Auth::check() ? (auth()->user()->hasVoted() ? 'true' : 'false') : 'false' }},
            countryId: null,
            countryCode: '',
            countryName: '',
            percentage: 50,
            basePath: '{{ asset('maps') }}',
            updateMaskWidth(value) {
                const maskRect = document.getElementById('mask-rect');
                if (maskRect) {
                    maskRect.setAttribute('width', 8 * value);
                }
            }
        }">
        
        <!-- Sign-In Prompt for Submission (if not signed in) -->
        <div x-show="!isLoggedIn" class="bg-yellow-200 p-4 rounded-lg text-center text-yellow-800 font-semibold mb-6">
            You can interact with the form, but you must <a href="{{ route('login') }}" class="text-blue-600 hover:underline">sign in</a> to submit your declaration.
        </div>
        
           <!-- Already Voted Message (if logged in and already voted) -->
           <div x-show="isLoggedIn && hasVoted" class="bg-yellow-200 p-4 rounded-lg text-center text-yellow-800 font-semibold mb-6">
            @if (auth()->check() && auth()->user()->hasVoted())
                You have already voted. <a href="{{ route('votes.show', ['vote' => auth()->user()->vote->id]) }}" class="text-blue-600 hover:underline">confirm the step 5 from here</a>.
            @else
                Check your vote status.
            @endif
             </div>
        
        <form action="{{ route('votes.store') }}" method="POST">
            @csrf

            <!-- Enhanced Introduction -->
            <div class="text-center p-6 rounded-lg shadow-md mb-6">
                <h1 class="text-3xl font-extrabold text-gray-800 mb-4">
                    Rewrite History: Be the Next Balfour!
                </h1>
                <p class="text-gray-800 text-lg">
                    Register now to create your own Balfour Declaration. Choose the land you believe is right and shape the course of history in 5 steps.
                </p>
            </div>

            <!-- Step 1: Country Selection -->
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">1. The New National Home: Choose a Country* </label>
                <select x-model="countryId" @change="
                    countryCode = $event.target.options[$event.target.selectedIndex].getAttribute('data-code');
                    countryName = $event.target.options[$event.target.selectedIndex].text;
                    updateMaskWidth(percentage);
                " name="country_id" class="bg-white bg-opacity-70 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected>Select a country</option>
                    
                    <optgroup label="Veto Countries">
                        @foreach (['United States', 'United Kingdom', 'France', 'Russia', 'China'] as $vetoCountry)
                            @php
                                $country = $sortedCountries->firstWhere('name', $vetoCountry);
                            @endphp
                            @if ($country)
                                <option value="{{ $country->id }}" data-code="{{ $country->code }}">{{ $country->name }}</option>
                            @endif
                        @endforeach
                    </optgroup>

                    <option disabled style="border-top: 1px solid #ccc; margin: 5px 0;">──────────</option> <!-- Separator Line -->

                    <optgroup label="Other Countries">
                        @foreach ($sortedCountries as $country)
                            @if (!in_array($country->name, ['United States', 'United Kingdom', 'France', 'Russia', 'China']))
                                <option value="{{ $country->id }}" data-code="{{ $country->code }}">{{ $country->name }}</option>
                            @endif
                        @endforeach
                    </optgroup>
                </select>
                <p class="mt-2 text-sm text-gray-700">* <a class="font-medium text-blue-600 hover:underline" href="https://en.wikipedia.org/wiki/International_recognition_of_Israel" target="_blank">List of countries</a> that recognize the establishment of the Zionist entity.</p>
            </div>

            <!-- Step 2: Map Display - Hidden if 'nil' or no country is selected -->
            <div x-show="countryCode && countryCode !== 'nil'" x-transition class="mb-6">
                <div class="relative grid place-items-center p-4 bg-white bg-opacity-70 rounded-lg shadow-inner">
                    <div class="relative map-container" style="width: 100%; height: auto;">
                        <svg id="map-svg" viewBox="0 0 800 800" style="width: 100%; height: auto;">
                            <defs>
                                <mask id="occupation-mask">
                                    <rect id="mask-rect" x="0" y="0" :width="8 * percentage" height="800" fill="white"></rect>
                                </mask>
                            </defs>
                            <!-- Original Map Colored Black -->
                            <image :href="`${basePath}/${countryCode.toLowerCase()}/vector.svg`" width="800" height="800" style="filter: grayscale(100%);" href="http://127.0.0.1:8000/maps/us/vector.svg"></image>
                            <!-- Blue Overlay Map -->
                            <image :href="`${basePath}/${countryCode.toLowerCase()}/vector.svg`" width="800" height="800" class="blue-overlay" mask="url(#occupation-mask)" style="fill: blue;" href="http://127.0.0.1:8000/maps/us/vector.svg"></image>
                        </svg>
                    </div>
                    <figcaption class="mt-2 text-sm text-center text-gray-900" x-text="`Map of ${countryName}`">Map of United States</figcaption>
                </div>
            </div>

            <!-- Step 3: Percentage Slider -->
            <div x-show="countryCode !== 'nil'" x-transition class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">
                    2. Percentage of the Land You Want to Give to Israel
                </label>
                <input x-model="percentage"
                    type="range"
                    name="percentage"
                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                    min="0"
                    max="100"
                    @input="
                        $event.target.style.background = 'linear-gradient(to right, blue 0%, blue ' + $event.target.value + '%, #ccc ' + $event.target.value + '%, #ccc 100%)';
                        updateMaskWidth($event.target.value);
                    ">
                <div class="flex justify-between text-sm text-gray-800 mt-4">
                    <div class="text-center">
                        <span>Israel</span>
                        <img src="{{ asset('israel.png') }}" alt="Israel Flag" class="block mx-auto w-16 h-12 mt-2">
                    </div>
                    <div class="text-center">
                        <span x-text="countryName ? countryName : 'Selected country'"></span>
                        <template x-if="countryCode">
                            <img :src="`https://flagpedia.net/data/flags/w702/${countryCode.toLowerCase()}.webp`"
                                :alt="`Flag of ${countryName}`"
                                class="block mx-auto w-16 h-12 mt-2">
                        </template>
                    </div>
                </div>
                <div class="text-center text-blue-700 font-bold mt-4" x-text="`${percentage}%`"></div>
            </div>

            <!-- Step 4: Decisions Section -->
            <div x-show="countryCode !== 'nil'" x-transition class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">
                    3. What Decisions Will You Make with the Indigenous People?
                </label>
                <div class="grid grid-cols-1 gap-4">
                    @foreach ($options as $option)
                        <div class="flex items-center">
                            <input type="checkbox" value="{{ $option->id }}" name="options[]" id="option-{{ $option->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                            <label for="option-{{ $option->id }}" class="ml-2 text-sm font-medium text-gray-900">{{ $option->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Step 5: Notes Section -->
            <div class="mb-6">
                <label for="notes" class="block mb-2 text-sm font-medium text-gray-900">4. Notes: Other Suggestions</label>
                <textarea name="notes" id="notes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-white bg-opacity-70 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your suggestions..."></textarea>
            </div>

            <!-- Step 6: Submission Info -->
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900">
                    5. Final Step
                </label>
                <p class="text-gray-800 text-sm">
                    After submitting the form, you will find your declaration ready to print or send digitally to the embassy of the country you chose, either via email or their mailbox.
                </p>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800" :disabled="!isLoggedIn || hasVoted"">
                    Submit Your Declaration
                </button>
                <p x-show="!isLoggedIn" class="text-red-500 text-sm mt-2">
                    Please <a href="{{ route('login') }}" class="text-blue-600 hover:underline">sign in</a> to submit your vote.
                </p>
                <p x-show="hasVoted" class="text-red-500 text-sm mt-2">
                You are allowed to vote only ones.
                </p>
            </div>
        </form>
    </div>
</section>

<hr>
{{-- Smooth scrooling script   --}}

    <script>
        function scrollToSection(sectionId) {
          const section = document.getElementById(sectionId);
          if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
          }
        }
      </script>

</x-app-layout>
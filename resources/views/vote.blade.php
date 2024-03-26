<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('The National Home 1917') }}
        </h2>
    </x-slot>
    @include('layouts.VoteNav')

    <section class="bg-white dark:bg-gray-900">
        <div class="grid text-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Help us end the Plastinien ocupation</h1>
                <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-gray-50 dark:border-gray-500 dark:bg-gray-800">
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"> "The opening words of the declaration represented the first public expression of support for Zionism by a major political power. The term <strong class="font-semibold text-gray-900 dark:text-white"> "National Home" had no precedent in international law </strong>, and was intentionally vague as to whether a Jewish state was contemplated. The intended boundaries of Palestine were not specified, and the British government later confirmed that the words "in Palestine" meant that the Jewish national home was not intended to cover all of Palestine. "</p>
                {{-- <p>-Wikipedia</p> --}}
            </blockquote>

            </div>
            {{-- <div class="lg:mt-0 lg:col-span-5 lg:flex"> --}}
                {{-- <img src="/declaration.webp" alt="Balfort Declaration Letter"> --}}

            {{-- <img class="h-auto max-w-lg" src="/declaration.jpg" alt="the declaration letter">

            </div> --}}

            <dic class="max-w-lg lg:col-span-5 item-center ">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">The Balfor Declaration</figcaption>
                <img class="mx-auto h-auto max-w-lg" src="/declaration.jpg" alt="the declaration letter">
            </div>


            {{-- <div class="space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <a href="javascript:void(0);" onclick="scrollToSection('voting')" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 w-full lg:w-auto lg:inline-flex">
                    Vote Now
                </a>
            </div> --}}
        </div>
    </section>


    <section class="bg-gray dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto text-center lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

            <div class="lg:col-span-5 lg:order-first order-last mt-8 lg:mt-0 lg:flex">
                {{-- <img class="mb-4 lg:mb-0" src="balfour.png" alt="mockup"> --}}
                <img class=" h-80 max-w-lg px-3" src="balfour.jpg" alt="arther balfor">

            </div>

            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">A promise between 3 parties attended by only two</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">The British government acknowledged in 1939 that the local population's wishes and interests should have been taken into account, and recognised in 2017 that the declaration should have called for the protection of the Palestinian Arabs' political rights. This is what led to a promise between two Britons determines the fate of an entire foreign country and its region for many generations, making them ratify the famous saying:<strong class="font-semibold text-gray-900 dark:text-white"> "Fateful promise from those who do not own [i.e., the British] to those who do not deserve [i.e., the Zionist]." </strong></p>

            </div>
        </div>
    </section>


    <section class="bg-white dark:bg-gray-900">
        <div class="grid text-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Time to review that promise</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">We will now revive the promise and we will simulate the real declaration and give everyone the opportunity to assume the role of Balfour to decide the new location of The National Homel through a <strong class="font-semibold text-gray-900 dark:text-white"> list of the countries that recognize the establishment of this new state </strong> and that it is assumed that they will not object if it were on their lands since they support the existence of such an invention called a national home.</p>

            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                {{-- <img src="map.png" alt="mockup"> --}}
                <img class="mx-auto h-auto max-w-lg" src="map.png" alt="ocupation status">

            </div>
        </div>
    </section>


    {{-- @livewire('vote-form') --}}

    <!-- Ensure you have Alpine.js included in your layout -->
<!-- Example view: resources/views/votes/create.blade.php -->

<section id="voting" class="bg-gray dark:bg-gray-900 px-3 mx-2 flex justify-center items-center min-h-screen">
    <div class="my-2 w-full max-w-2xl mx-auto lg:pt-16 lg:pb-24 bg-white p-3 duration-1000 opacity-70 -inset-px bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt" x-data="{countryId: null, countryCode: '', countryName: '', percentage: 50}" >
        <form action="{{ route('votes.store') }}" method="POST">
            @csrf
            <h1 class="text-center  max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Act as Balfour Now and revote</h1>

            <div >
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white p-2">1- The New National Home: Choose a country</label>
                <select x-model="countryId" @change="countryCode = $event.target.options[$event.target.selectedIndex].getAttribute('data-code'); countryName = $event.target.options[$event.target.selectedIndex].text" name="country_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="" selected >Select a country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" data-code="{{ $country->code }}">{{ $country->name }}</option>
                    @endforeach

                </select>
                <p class="mt-2 text-sm text-black dark:text-white">* List of countries that recognize the establishment of the Zionist entity.</p>

            </div>

            <div x-show="countryCode !== 'nil'" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                <template x-if="countryCode">
                    <div class="my-4 grid grid-cols place-items-center p-2 m-2">
                        <img :src="`https://simplemaps.com/static/svg/country/${countryCode.toLowerCase()}/all/${countryCode.toLowerCase()}.svg`" :alt="`Map of ${countryCode}`" class="max-w-xs h-auto rounded-lg">
                        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400" x-text="`Map of ${countryName}`"></figcaption>
                    </div>
                </template>
                <hr class="p-3 m-5">
            </div>



                <!-- Percentage Section -->
                <div x-show="countryCode !== 'nil'"
                x-transition:enter="transition-opacity duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="m-3">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    2- Percentage of the land you want to give to Israel from the native country
                </label>
                <input x-model="percentage"
                       type="range"
                       name="percentage"
                       class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-900"
                       min="0"
                       max="100"
                       @input="$event.target.style.background = 'linear-gradient(to right, blue 0%, red ' + $event.target.value + '%, #ccc ' + $event.target.value + '%, #ccc 100%)'">
                <div class="flex justify-between text-sm text-gray-800 dark:text-gray-800">
                    <div>
                        <span>Israel</span>
                        <img src="israel.png" alt="Israel Flag" class="block rounded-full mx-auto w-16 h-16 mt-2">
                    </div>
                    <div>
                        <span x-text="countryName ? countryName : 'Selected country'"></span>
                        <!-- Use conditional rendering to show the default image if no country is selected -->
                        <template x-if="countryCode">
                            <img x-bind:src="`https://flagpedia.net/data/flags/w702/${countryCode.toLowerCase()}.webp`"
                                 x-bind:alt="`Flag of ${countryCode}`"
                                 class="block rounded-full mx-auto w-16 h-16 mt-2">
                        </template>
                        <template x-if="!countryCode">
                            <img src="Unknown.webp" alt="Default Flag" class="block rounded-full mx-auto w-16 h-16 mt-2">
                        </template>
                    </div>
                </div>
                <div class="text-center text-black dark:text-gray-300" x-text="`${percentage}%`"></div>
                <hr class="p-3 m-2">
            </div>



                <!-- Dessisions Section -->
                <div x-show="countryCode !== 'nil'" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="m-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">3-What decisions will you make with the indigenous people?</label>
                    @foreach ($options as $option)
                        <div class="flex items-center my-4">
                            <input type="checkbox" value="{{ $option->id }}" name="options[]" id="option-{{ $option->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="option-{{ $option->id }}" class="ml-2 text-sm font-medium text-black dark:text-gray-300">{{ $option->name }}</label>
                        </div>
                    @endforeach
                    <hr class="p-3 m-2">
                </div>




            <div class="sm:col-span-2 my-4">
                <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">4- Notes: Other Suggestions</label>
                <textarea name="notes" id="notes" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
            </div>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Sign the petition</button>
        </form>
    </div>
</section>


    {{-- Statistics  --}}

    <section class="bg-white dark:bg-gray-900 mb-1">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Choosed Country</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">20K</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Members</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">5K</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Vote</dd>
                </div>
            </dl>
        </div>
      </section>
      <hr>

      {{-- newsletter --}}



      <section class="bg-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="mb-1 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative ">
            {{-- <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span class="text-sm font-medium">Jumbotron component was launched! See what's new</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
            </a> --}}
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Stay informed...</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Sign up for our newsletter and you'll be among the first to find out about new updates</p>
            <form action="/subscribe" method="post" class="w-full max-w-md mx-auto">
                @csrf <!-- CSRF token for form security -->

                <!-- Name Field -->
                <label for="name" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Name</label>
                <input type="text" id="name" name="name" class="block w-full p-4 mb-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name" autocomplete="name">

                <!-- Email Field -->
                <label for="default-email" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email sign-up</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                        </svg>
                    </div>
                    <input type="email" id="default-email" name="email" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your email" required autocomplete="email">
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign up</button>
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

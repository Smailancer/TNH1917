<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Vote') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="grid text-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Manage all your calculations from one place</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
            <div class="space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <a href="javascript:void(0);" onclick="scrollToSection('voting')" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 w-full lg:w-auto lg:inline-flex">
                    Vote Now
                </a>
            </div>
        </div>
    </section>


    <section class="bg-gray dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">

            <div class="lg:col-span-5 lg:order-first order-last mt-8 lg:mt-0 lg:flex">
                <img class="mb-4 lg:mb-0" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>

            <div class="mr-auto  lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>

            </div>
        </div>
    </section>


    <section class="bg-white dark:bg-gray-900">
        <div class="grid text-center max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>

            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>


    <section id="voting" class="bg-gray dark:bg-gray-900 px-3 mx-2 flex justify-center min-h-screen ">
        {{-- <div class="py-8 px-4 mx-auto lg:py-16 flex"> --}}
            <!-- First Vertical Section -->
            {{-- <div class="w-1/2 "> --}}
                <form method="POST" action="{{ route('votes.store') }}" x-data="{ code: ''}" >
                    @csrf
                    <div class=" w-full bg-white m-2 p-3  duration-1000 opacity-70 -inset-px bg-gradient-to-r bg-yellow-500  rounded-xl  group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Act as Belf Now and revote</h1>
                        <h5 class="text-xl font-bold dark:text-white pt-5">1- The New National Home</h5>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose a country</label>
                            <select id="category" name="country_id" x-on:change="code = $event.target.options[$event.target.selectedIndex].getAttribute('data-code')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="" selected disabled>Select a country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" data-code="{{ $country->code }}">{{ $country->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div x-show="code">
                            {{-- <img :src="`https://simplemaps.com/static/svg/country/${code}/all/${code}.svg`" :alt="`Map of ${code}`" class="w-full h-auto"> --}}
                            <figure class="max-w-lg">
                                <img class="h-auto max-w-full rounded-lg" :src="`https://simplemaps.com/static/svg/country/${code}/all/${code}.svg`" :alt="`Map of ${code}`">
                                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">map of ${code}</figcaption>
                              </figure>

                        </div>


                        <hr>

                        <h5 class="text-xl font-bold dark:text-white py-5">2- Percentage</h5>
                        <div x-data="{ percentage: 50 }" class="mb-8">
                            <div class="relative mb-6">
                                <label for="default-range" class="inline mb-5 text-sm font-medium text-gray-900 dark:text-white">Percentage you want to give from the native country</label>
                                <input :disabled="code == 'nil'"   x-model="percentage"  name="percentage" id="default-range" type="range" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">

                                <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">OLD Country</span>
                                <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">NEW Country</span>

                                <span x-text="`${percentage}%`" class=" text-center text-sm text-gray-700 dark:text-gray-300"></span>

                            </div>
                        </div>



                        <hr>

                        <h5 class="text-xl font-bold dark:text-white pt-5">3- Decisions </h5>

                        @foreach ($options as $option)
                            <div class="flex items-center my-4" :disabled="code == 'nil'">
                                <input :disabled="code == 'nil'" id="checkbox{{ $option->id }}" name="options[]" type="checkbox" value="{{ $option->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label :disabled="code == 'nil'" for="checkbox{{ $option->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option->name }}</label>
                            </div>
                        @endforeach

                        <hr>

                        <h5 class="text-xl font-bold dark:text-white pt-5">4- Notes </h5>
                            <div class="sm:col-span-2 my-4">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Suggestions :</label>
                                <textarea name="notes" id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
                            </div>

                        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Sign the petition
                        </button>
                    </div>
                </form>
            {{-- </div> --}}

            <!-- Second Vertical Section -->
            {{-- <div class="w-1/2">

                <livewire:counter />
                <div x-show="selectedCountry" id="country-map">
                    <!-- Replace this with your map image or component -->
                    <img src="{{ asset('maps/' . $country->code . '.png') }}" alt="{{ $country->name }} Map">
                </div>

            </div> --}}
        {{-- </div> --}}
    </section>


    {{-- Statistics  --}}

    <section class="bg-white dark:bg-gray-900 mb-1">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Vote</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">2M</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Alt Belf signd</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl font-extrabold">35</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Alt country</dd>
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

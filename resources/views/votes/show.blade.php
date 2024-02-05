<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Vote Details') }}
        </h2>
    </x-slot>

   <!-- resources/views/votes/show.blade.php -->


   <section id="voting" class="bg-gray dark:bg-gray-900 px-10">
    <div class="py-8 px-4 mx-auto lg:py-16 flex">
        <!-- Show Section Content -->
        <div class="w-1/2 pr-8">
            {{-- <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Vote Details</h1> --}}
            <h5 class="text-xl font-bold dark:text-white pt-5 my-3">The New National Home</h5>
            <!-- Display selected country -->

            <label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selected Country: </label>
            <select disabled id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>{{ $vote->country->name }}</option>
            </select>

            <hr>

            <h5 class="text-xl font-bold dark:text-white py-5">Percentage</h5>
            <!-- Display selected percentage -->

            <label for="disabled-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selected Percentage:</label>
            <input id="disabled-range" type="range" value="{{ $vote->percentage }}" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" disabled>
            <p class="text-gray-900 dark:text-white">{{ $vote->percentage }}%</p>

            <hr>

            <h5 class="text-xl font-bold dark:text-white py-5">Decisions </h5>
            <!-- Display selected options -->
            @foreach ($vote->options as $selectedOption)
                <div class="flex items-center">
                    <input disabled checked id="disabled-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="disabled-checked-checkbox" class="my-2 ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">{{ $selectedOption->name }}</label>
                </div>
            @endforeach

            <hr>

            <h5 class="text-xl font-bold dark:text-white py-5">Notes </h5>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your notes</label>
            <textarea id="message" rows="4" class="block w-full text-gray-600 text-sm bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p-2.5" disabled>
                {{ $vote->notes ?? 'You didn\'t add any notes' }}
            </textarea>

            <!-- Display notes -->
        </div>
    </div>
</section>



</x-app-layout>

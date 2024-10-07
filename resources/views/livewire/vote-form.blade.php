<section id="voting" class="bg-gray-100 dark:bg-gray-900 px-3 mx-2 flex justify-center min-h-screen">
    <div class="w-full max-w-3xl bg-white m-2 p-6 rounded-xl shadow-lg">
        <!-- Option 2 Message -->
        <div class="mb-6 text-center bg-blue-50 p-6 rounded-lg shadow-md">
            <h1 class="text-3xl font-extrabold text-blue-700 mb-4">
                Rewrite History: Be the Next Balfour!
            </h1>
            <p class="text-gray-800 text-lg">
                Make your own Balfour Declaration. Choose the land you believe is right and shape the course of history.
            </p>
        </div>

        <form action="{{ route('votes.store') }}" method="POST">
            @csrf

            <!-- Section 1: The New National Home -->
            <h5 class="text-xl font-bold text-gray-900 pt-5">1. The New National Home</h5>
            <div x-data="{ countryId: null, countryCode: '' }" class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-900">Choose a country</label>
                <select x-model="countryId" @change="countryCode = $event.target.options[$event.target.selectedIndex].getAttribute('data-code')" name="country_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" selected disabled>Select a country</option>
                    @foreach ($supportiveCountries as $country)
                        <option value="{{ $country->id }}" data-code="{{ $country->code }}">{{ $country->name }}</option>
                    @endforeach
                </select>

                <template x-if="countryCode">
                    <div class="my-4 grid place-items-center">
                        <img x-bind:src="`https://simplemaps.com/static/svg/country/${countryCode.toLowerCase()}/all/${countryCode.toLowerCase()}.svg`" x-bind:alt="`Map of ${countryCode}`" class="max-w-xs h-auto rounded-lg">
                        <figcaption class="mt-2 text-sm text-center text-gray-500" x-text="`Map of ${countryCode}`"></figcaption>
                    </div>
                </template>
            </div>

            <hr class="my-6">

            <!-- Section 2: Percentage -->
            <h5 class="text-xl font-bold text-gray-900 py-5">2. Percentage</h5>
            <div x-data="{ percentage: 50 }" class="mb-8">
                <label for="percentage-range" class="block mb-2 text-sm font-medium text-gray-900">Percentage you want to give from the native country</label>
                <input x-model="percentage" type="range" name="percentage" id="percentage-range" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer" min="0" max="100">
                <div class="flex justify-between text-sm text-gray-800 mt-2">
                    <span>Native Country</span>
                    <span>New Country</span>
                </div>
                <div class="text-center text-gray-900 mt-2 font-semibold" x-text="percentage + '%'"></div>
            </div>

            <hr class="my-6">

            <!-- Section 3: Decisions -->
            <h5 class="text-xl font-bold text-gray-900 pt-5">3. Decisions</h5>
            <div class="mt-4">
                @foreach ($options as $option)
                    <div class="flex items-center my-2">
                        <input type="checkbox" name="options[]" value="{{ $option->id }}" id="option-{{ $option->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="option-{{ $option->id }}" class="ml-2 text-sm font-medium text-gray-900">{{ $option->name }}</label>
                    </div>
                @endforeach
            </div>

            <hr class="my-6">

            <!-- Section 4: Notes -->
            <h5 class="text-xl font-bold text-gray-900 pt-5">4. Notes</h5>
            <div class="mt-4">
                <label for="notes" class="block mb-2 text-sm font-medium text-gray-900">Other Suggestions:</label>
                <textarea name="notes" id="notes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your notes..."></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="inline-flex items-center px-6 py-3 mt-8 text-sm font-medium text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:ring-4 focus:ring-blue-200">
                    Submit Your Declaration
                </button>
            </div>
        </form>
    </div>
</section>

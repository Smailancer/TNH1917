<section id="voting" class="bg-gray dark:bg-gray-900 px-3 mx-2 flex justify-center min-h-screen">
    <div class="lg:pt-16 lg:pb-24 bg-white m-2 p-3 duration-1000 opacity-70 -inset-px bg-gradient-to-r from-yellow-500 to-yellow-500 rounded-xl group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt" x-data="{ countryId: null, countryCode: '', percentage: 50 }">
        <form action="{{ route('votes.store') }}" method="POST">
            @csrf
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Act as Belf Now and revote</h1>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">1- The New National Home: Choose a country</label>
                <select x-model="countryId" @change="countryCode = $event.target.options[$event.target.selectedIndex].getAttribute('data-code')" name="country_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option value="" selected disabled>Select a country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}" data-code="{{ $country->code }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>

            <template x-if="countryCode">
                <div class="my-4 grid grid-cols place-items-center">
                    <img :src="`https://simplemaps.com/static/svg/country/${countryCode.toLowerCase()}/all/${countryCode.toLowerCase()}.svg`" :alt="`Map of {{ $country->name }}`" class="max-w-xs h-auto rounded-lg">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400" x-text="{{ $country->name }}"></figcaption>
                </div>
                <hr>
            </template>


            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">2- Percentage: Percentage you want to give from the native country</label>
                <input x-model="percentage" type="range" name="percentage" class="w-full h-2 rounded-lg appearance-none cursor-pointer" min="0" max="100"
                       x-bind:class="{
                           'bg-green-500': percentage > 0,
                           'bg-gray-300': percentage == 0
                       }">
                <div class="flex justify-between text-sm text-gray-800 dark:text-gray-800">
                    <span>OLD Country</span>
                    <span>NEW Country</span>
                </div>
                <div class="text-center text-black dark:text-gray-300" x-text="`${percentage}%`"></div>
                <hr>
            </div>


            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">3- Decisions: Choose options</label>
                @foreach ($options as $option)
                    <div class="flex items-center my-4">
                        <input type="checkbox" value="{{ $option->id }}" name="options[]" id="option-{{ $option->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="option-{{ $option->id }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option->name }}</label>
                    </div>
                @endforeach
                <hr>
            </div>


            <div class="sm:col-span-2 my-4">
                <label for="notes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">4- Notes: Other Suggestions</label>
                <textarea name="notes" id="notes" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder=""></textarea>
            </div>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">Sign the petition</button>
        </form>
    </div>
</section>

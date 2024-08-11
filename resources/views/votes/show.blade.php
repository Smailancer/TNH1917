<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Vote Details') }}
        </h2>
    </x-slot>

    <!-- resources/views/votes/show.blade.php -->

    <section id="voting" class="bg-gray dark:bg-gray-900 p-3 ">
        <!-- Show Section Content -->
        <div class="my-3 p-5 justify-center flex bg-white">
            <div>
                <h5 class="text-xl font-bold dark:text-white pt-5 my-3">As {{ $vote->user->username }} :</h5>
                <label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">I choose the country {{ $vote->country->name }} to be the new national home for the the jew people.</label>
                <select disabled id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>{{ $vote->country->name }}</option>
                </select>

                <hr>

                <div>
                    @if($vote->country && $vote->country->code)
                        <div class="relative my-4 grid place-items-center">
                            <div class="relative map-container" style="width: 600px; height: 400px;">
                                <svg id="map-svg" viewBox="0 0 800 800" width="600" height="400">
                                    <defs>
                                        <mask id="occupation-mask">
                                            <rect id="mask-rect" x="0" y="0" width="0" height="800" fill="white"></rect>
                                        </mask>
                                    </defs>
                                    <!-- Original Map Colored Black -->
                                    <image href="{{ asset('maps/' . strtolower($vote->country->code) . '/vector.svg') }}" width="800" height="800" style="filter: grayscale(100%);"></image>
                                    <!-- Blue Overlay Map -->
                                    <image href="{{ asset('maps/' . strtolower($vote->country->code) . '/vector.svg') }}" width="800" height="800" class="blue-overlay" mask="url(#occupation-mask)"></image>
                                </svg>
                            </div>
                            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Map of {{ $vote->country->name }}</figcaption>
                        </div>
                    @endif
                </div>

                <hr>

                <h5 class="text-xl font-bold dark:text-white py-5">Percentage</h5>
                <!-- Display selected percentage -->
                <label for="disabled-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Percentage of land given to Israel to istblish its state:</label>
                <input id="disabled-range" type="range" value="{{ $vote->percentage }}" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700" disabled>
                <!-- Flags and Percentage Display Container -->
                <div class="flex items-center justify-between my-3">
                    <!-- Left Flag -->
                    <img src="../israel.png" alt="Country Flag" class="block rounded-full w-16 h-16 mt-2">
                    <!-- Percentage Text -->
                    <p class="text-gray-900 dark:text-white">{{ $vote->percentage }}%</p>
                    <!-- Right Flag -->
                    <img src="https://flagpedia.net/data/flags/w702/{{ strtolower($vote->country->code) }}.webp" alt="{{ $vote->country->name }}" class="block rounded-full w-16 h-16 mt-2">
                </div>

                <hr>

                <h5 class="text-xl font-bold dark:text-white py-5">Decisions </h5>
                <!-- Display selected options -->
                <div class="my-3">
                    @foreach ($vote->options as $selectedOption)
                        <div class="flex items-center">
                            <input disabled checked id="disabled-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="disabled-checked-checkbox" class="my-2 ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">{{ $selectedOption->name }}</label>
                        </div>
                    @endforeach
                </div>

                <hr>

                <h5 class="text-xl font-bold dark:text-white py-5">Notes </h5>
                <div class="my-3">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your notes</label>
                    <textarea id="message" rows="4" class="block w-full text-gray-600 text-sm bg-gray-200 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p-2.5" disabled>
                        {{ $vote->notes ?? 'You didn\'t add any notes' }}
                    </textarea>
                </div>
            </div>
        </div>

        <div class="my-6 p-5 flex justify-center bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <div class="w-full max-w-xl">
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-4">Next Steps</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-2">
                    Download The Promise as a letter and send a copy to each of:
                </p>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-4">
                    <li>The embassy of the country you chose, which is: <strong>{{ $vote->country->name }}</strong></li>
                    <li>The embassy of Israel (if your country has a Legal occupation embassy of the state)</li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('votes.downloadPdf', $vote->id) }}" class="px-5 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-offset-gray-800">
                        Download the letter as PDF
                    </a>
                </div>
            </div>
        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const maskRect = document.getElementById('mask-rect');
            const percentage = {{ $vote->percentage }};
            const mapSvg = document.getElementById('map-svg');
            const svgWidth = mapSvg.viewBox.baseVal.width;
            maskRect.setAttribute('width', (percentage / 100) * svgWidth);
        });
    </script>
</x-app-layout>

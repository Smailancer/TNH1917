<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl sm:text-lg text-gray-800 leading-tight">
            {{ __('My Vote Details') }}
        </h2>
    </x-slot>

    <section id="voting" class="bg-gray-100 p-3">
        <!-- Show Section Content -->
        <div class="my-3 p-5 flex justify-center bg-white rounded-lg shadow-md max-w-screen-lg mx-auto">
            <div class="w-full">
                <h5 class="text-xl sm:text-lg font-bold pt-5 my-3">As {{ $vote->user->username }} :</h5>
                <label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900">I choose the country {{ $vote->country->name }} to be the new national home for the the jew people.</label>
                <select disabled id="countries_disabled" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>{{ $vote->country->name }}</option>
                </select>

                <hr class="my-4">

                <div>
                    @if($vote->country && $vote->country->code)
                        <div class="relative my-4 grid place-items-center">
                            <div class="relative map-container" style="width: 100%; max-width: 600px; height: auto;">
                                <svg id="map-svg" viewBox="0 0 800 800" width="100%" height="auto">
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
                            <figcaption class="mt-2 text-sm text-center text-gray-500">Map of {{ $vote->country->name }}</figcaption>
                        </div>
                    @endif
                </div>

                <hr class="my-4">

                <h5 class="text-xl sm:text-lg font-bold py-5">Percentage</h5>
                <label for="disabled-range" class="block mb-2 text-sm font-medium text-gray-900">Percentage of land given to Israel to establish its state:</label>
                <input id="percentage-slider" type="range" value="{{ $vote->percentage }}" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer" disabled>

                <div class="flex items-center justify-between my-3">
                    <img src="../israel.png" alt="Country Flag" class="block rounded-full w-12 h-12 md:w-16 md:h-16 mt-2">
                    <p class="text-gray-900 text-sm sm:text-base">{{ $vote->percentage }}%</p>
                    <img src="https://flagpedia.net/data/flags/w702/{{ strtolower($vote->country->code) }}.webp" alt="{{ $vote->country->name }}" class="block rounded-full w-12 h-12 md:w-16 md:h-16 mt-2">
                </div>

                <hr class="my-4">

                <h5 class="text-xl sm:text-lg font-bold py-5">Decisions</h5>
                <div class="my-3">
                    @foreach ($vote->options as $selectedOption)
                        <div class="flex items-center">
                            <input disabled checked id="disabled-checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                            <label for="disabled-checked-checkbox" class="my-2 ms-2 text-sm font-medium text-gray-400">{{ $selectedOption->name }}</label>
                        </div>
                    @endforeach
                </div>

                <hr class="my-4">

                <h5 class="text-xl sm:text-lg font-bold py-5">Notes</h5>
                <div class="my-3">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your notes</label>
                    <textarea id="message" rows="4" class="block w-full text-gray-600 text-sm bg-gray-200 rounded-lg border border-gray-300" disabled>
                        {{ $vote->notes ?? 'You didn\'t add any notes' }}
                    </textarea>
                </div>
            </div>
        </div>

        <div class="my-6 p-5 flex justify-center bg-white rounded-lg shadow-md max-w-screen-lg mx-auto">
            <div class="w-full">
                <h3 class="text-2xl sm:text-xl font-semibold text-gray-900 mb-4">Step 5:</h3>
                <p class="text-gray-700 mb-2">
                    Download The declaration you have made and send a copy to each of:
                </p>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>The embassy of the country you chose, which is: <strong>{{ $vote->country->name }}</strong></li>
                    <li>The embassy of Israel (if your country has a Legal occupation embassy of the state)</li>
                </ul>
                <div class="text-center">
                    <a href="{{ route('votes.downloadPdf', $vote->id) }}" class="px-5 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Download the declaration as PDF
                    </a>
                </div>

                <form method="POST" action="{{ route('votes.updateActions', $vote->id) }}">            
                    @csrf
                    @method('PATCH')
                    <div class="mt-6">
                        <h6 class="text-lg font-semibold text-gray-800">What have you done?</h6>
                        <div class="mt-2 space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="downloaded" {{ $vote->downloaded ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Downloaded the declaration</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="sent_to_embassy" {{ $vote->sent_to_embassy ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Sent it to the embassy</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="published_on_social_media" {{ $vote->published_on_social_media ? 'checked' : '' }} class="form-checkbox h-5 w-5 text-blue-600">
                                <span class="ml-2 text-gray-700">Published on social media</span>
                            </label>
                        </div>
                        <div class="flex justify-center mt-4">
                            <button type="submit" class="px-5 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Update Your To Do List
                            </button>
                        </div>
                    </div>
                </form>
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

        const slider = document.getElementById('percentage-slider');
        const percentage = {{ $vote->percentage }};
        
        function updateSliderBackground(value) {
            const percentageValue = (value / slider.max) * 100;
            slider.style.background = `linear-gradient(to right, #3b82f6 ${percentageValue}%, #e5e7eb ${percentageValue}%)`;
        }

        updateSliderBackground(percentage);
    </script>
</x-app-layout>

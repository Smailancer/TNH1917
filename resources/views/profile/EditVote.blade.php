{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Vote') }}
        </h2>
    </x-slot>

    <section id="voting" class="bg-gray dark:bg-gray-900 px-10">
        <div class="py-8 px-4 mx-auto lg:py-16">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Act as Belf Now and revote</h1>
            <h5 class="text-xl font-bold dark:text-white pt-5">The New National Home</h5>
            <form method="POST" action="{{ route('vote.update', $vote->id) }}">
                @csrf
                @method('PUT')

                <div class="my-5 gap-4 sm:grid-cols-2 sm:gap-6 w-full">

                    <hr>

                    <h5 class="text-xl font-bold dark:text-white py-5">Percentage</h5>
                    <div class="w-full my-5">
                        <label for="default-range" class=" inline mb-5 text-sm font-medium text-gray-900 dark:text-white">Percentage you want to give to the new nation</label>
                        <input name="percentage" id="default-range" type="range" value="{{ $vote->percentage }}" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    </div>

                    <hr>

                    <h5 class="text-xl font-bold dark:text-white pt-5">Decisions </h5>
                    @foreach ($options as $option)
                        <div class="flex items-center my-4">
                            <input id="checkbox{{ $option->id }}" name="options[]" type="checkbox" value="{{ $option->id }}" {{ in_array($option->id, $vote->options->pluck('id')->toArray()) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox{{ $option->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option->name }}</label>
                        </div>
                    @endforeach

                    <hr>

                    <h5 class="text-xl font-bold dark:text-white pt-5">Notes </h5>
                    <div class="sm:col-span-2 my-4">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other Suggestions :</label>
                        <textarea name="notes" id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="">{{ $vote->notes }}</textarea>
                    </div>

                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Update Vote
                    </button>
                </div>
            </form>
        </div>
    </section>

</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Discussion Forum') }}
        </h2>
    </x-slot>

    <!-- Content Section -->
    <div class="bg-white py-8">
        <div class="max-w-7xl mx-auto text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Join the Community</h3>
            <p class="text-lg text-gray-700 mb-6">Participate freely in discussions about all the sections of the website in this independent forum.</p>
            <a href="https://forum.tnh1917.com/" target="_blank" class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700">Go to Forum</a>
        </div>
    </div>
</x-app-layout>

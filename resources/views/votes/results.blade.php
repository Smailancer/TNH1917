<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('The National Home 1917') }}
        </h2>
    </x-slot>

    @include('layouts.VoteNav')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Country Selection Chart -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">10 Most Chosen Countries</h3>
                @livewire('most-chosen-countries-chart')
            </div>
            

            <!-- Land Allocation Chart -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Land Allocation Distribution</h3>
                @livewire('land-allocation-chart')
            </div>

            <!-- Decision Frequency Chart -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Frequency of Decisions made with Indigenous People</h3>
                @livewire('decision-frequency-chart')
            </div>
        </div>
    </div>


</x-app-layout>

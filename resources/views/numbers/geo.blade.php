<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Numbers (Since October 2023)') }}
        </h2>
    </x-slot>
    @include('layouts.NumbersNav')


    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-xl font-semibold text-center mb-4">Population Before and After the Declaration</h1>
            <p class="text-center">An overview of demographic changes impacted by the event.</p>
        </div>

        <!-- Timeline (Placeholder) -->
        <div class="bg-white shadow rounded-lg p-4 mb-6">
            <h2 class="font-semibold mb-4">Key Demographic Milestones</h2>
            <!-- Implement an interactive timeline here -->
            <div class="text-center">[Interactive Timeline Placeholder]</div>
        </div>

        <!-- Comparative Charts -->
        <div class="grid md:grid-cols-2 gap-4">
            <!-- Bar Chart for Population Comparison -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="font-semibold mb-4">Population Comparison</h2>
                <!-- Bar chart placeholder -->
                <div class="text-center">[Bar Chart Placeholder]</div>
            </div>

            <!-- Line Chart for Population Trends -->
            <div class="bg-white shadow rounded-lg p-4">
                <h2 class="font-semibold mb-4">Population Growth Trends</h2>
                <!-- Line chart placeholder -->
                <div class="text-center">[Line Chart Placeholder]</div>
            </div>
        </div>
    </div>


</x-app-layout>

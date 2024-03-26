
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Fallacies and Facts') }}
        </h2>
    </x-slot>

    @include('layouts.F&FNav')

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-center mb-6">Facts and Fallacies</h1>

        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" placeholder="Search for topics..." class="w-full p-2 border rounded-lg">
        </div>

        <!-- Tabs for Facts and Fallacies -->
        <div class="mb-4">
            <ul class="flex border-b">
                <li class="-mb-px mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#facts">Facts</a>
                </li>
                <li class="mr-1">
                    <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#fallacies">Fallacies</a>
                </li>
            </ul>
        </div>

        <!-- Content for Facts Tab -->
        <div id="facts" class="bg-white p-4 rounded-lg shadow">
            <h2 class="font-semibold text-xl mb-4">Facts</h2>
            <!-- Accordion Items for Facts Here -->
            <div class="space-y-4">
                <!-- Example Accordion Item -->
                <details class="group">
                    <summary class="cursor-pointer text-lg font-medium text-gray-900">
                        Fact 1 Title
                    </summary>
                    <p class="pt-2 text-gray-700">
                        Detailed explanation for Fact 1. Include citations or links where appropriate.
                    </p>
                </details>
                <!-- More Accordion Items -->
            </div>
        </div>

        <!-- Content for Fallacies Tab -->
        <div id="fallacies" class="bg-white p-4 rounded-lg shadow mt-6">
            <h2 class="font-semibold text-xl mb-4">Fallacies</h2>
            <!-- Accordion Items for Fallacies Here -->
            <div class="space-y-4">
                <!-- Example Accordion Item -->
                <details class="group">
                    <summary class="cursor-pointer text-lg font-medium text-gray-900">
                        Fallacy 1 Title
                    </summary>
                    <p class="pt-2 text-gray-700">
                        Detailed explanation for Fallacy 1, including debunking information and sources.
                    </p>
                </details>
                <!-- More Accordion Items -->
            </div>
        </div>
    </div>
</x-app-layout>

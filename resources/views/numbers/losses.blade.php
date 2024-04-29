<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Numbers (Since October 2023)') }}
        </h2>
    </x-slot>
    @include('layouts.NumbersNav')


            <div class="container mx-auto p-4">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Palestine Losses -->
                    <div class="bg-white shadow rounded-lg p-4">
                        <div class="flex flex-col items-center mb-4">
                            <img src="../palestine.png" alt="Palestine Flag" class="w-16 h-10">
                            <h2 class="mt-2 font-bold">Palestine Losses</h2>
                        </div>
                        <ul class="space-y-2">
                            <li>Hostages: <span class="placeholder-content">Placeholder</span></li>
                            <li>Human Lives: <span class="placeholder-content">Placeholder</span></li>
                            <li>Economic Impact: <span class="placeholder-content">Placeholder</span></li>
                            <li>Infrastructure Damage: <span class="placeholder-content">Placeholder</span></li>
                            <li>Displacement: <span class="placeholder-content">Placeholder</span></li>
                            <li>Cultural Heritage Loss: <span class="placeholder-content">Placeholder</span></li>
                        </ul>
                    </div>
                    <!-- Israel Losses -->
                    <div class="bg-white shadow rounded-lg p-4">
                        <div class="flex flex-col items-center mb-4">
                            <img src="../israel.png" alt="Israel Flag" class="w-16 h-10">
                            <h2 class="mt-2 font-bold">Israel Losses</h2>
                        </div>
                        <ul class="space-y-2">
                            <li>Hostages: <span class="placehold0er-content">Placeholder</span></li>
                            <li>Human Lives: <span class="placehold0er-content">Placeholder</span></li>
                            <li>Economic Impact: <span class="placeholder-content">Placeholder</span></li>
                            <li>Infrastructure Damage: <span class="placeholder-content">Placeholder</span></li>
                            <li>Displacement: <span class="placeholder-content">Placeholder</span></li>
                            <li>Cultural Heritage Loss: <span class="placeholder-content">Placeholder</span></li>
                        </ul>
                    </div>
                </div>
            </div>




</x-app-layout>

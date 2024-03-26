<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Numbers (Since October 2023)') }}
        </h2>
    </x-slot>
    @include('layouts.NumbersNav')

<div>

    <main>
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-2 gap-4">
                <!-- Palestine Support -->
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex flex-col items-center mb-4">
                        <img src="../palestine.png" alt="Palestine Flag" class="w-16 h-10">
                        <h2 class="mt-2 font-bold">Palestine</h2>
                    </div>
                    <ul class="space-y-2">
                        <li>International Support: <span class="placeholder-content">Placeholder</span></li>
                        <li>Media Coverage: <span class="placeholder-content">Placeholder</span></li>
                        <li>Political Backing: <span class="placeholder-content">Placeholder</span></li>
                        <li>Financial Aid: <span class="placeholder-content">Placeholder</span></li>
                        <li>Military Equipment: <span class="placeholder-content">Placeholder</span></li>
                    </ul>
                </div>
                <!-- Israel Support -->
                <div class="bg-white shadow rounded-lg p-4">
                    <div class="flex flex-col items-center mb-4">
                        <img src="../israel.png" alt="Israel Flag" class="w-16 h-10">
                        <h2 class="mt-2 font-bold">Israel</h2>
                    </div>
                    <ul class="space-y-2">
                        <li>International Support: <span class="placeholder-content">Placeholder</span></li>
                        <li>Media Coverage: <span class="placeholder-content">Placeholder</span></li>
                        <li>Political Backing: <span class="placeholder-content">Placeholder</span></li>
                        <li>Financial Aid: <span class="placeholder-content">Placeholder</span></li>
                        <li>Military Equipment: <span class="placeholder-content">Placeholder</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</div>

</x-app-layout>

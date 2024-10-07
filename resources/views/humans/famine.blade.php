<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Humans (Since October 2023)') }}
        </h2>
    </x-slot>
    @include('layouts.HumansNav')

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-2 justify-center">
          <!-- Enhanced Statistic Card 1 - Famine -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-lg p-4 transition-shadow duration-300 hover:shadow-xl">
              <div class="bg-orange-300 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/9267/9267500.png" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">In Famine</h3>
              <p class="text-center mt-2 font-medium text-gray-600">Region: Gaza</p>
              <p class="text-center font-medium text-gray-600">Number Affected: 1,000+</p>
            </div>
          </div>

          <!-- Enhanced Statistic Card 2 - Displaced -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-lg p-4 transition-shadow duration-300 hover:shadow-xl">
              <div class="bg-blue-300 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/15869/15869698.png" alt="Displaced Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Displaced</h3>
              <p class="text-center mt-2 font-medium text-gray-600">Region: West Bank</p>
              <p class="text-center font-medium text-gray-600">Number Affected: 5,000+</p>
            </div>
          </div>

          <!-- Enhanced Statistic Card 3 - Missing Persons -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-lg p-4 transition-shadow duration-300 hover:shadow-xl">
              <div class="bg-red-300 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/6034/6034049.png" alt="Missing Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Missing Persons</h3>
              <p class="text-center mt-2 font-medium text-gray-600">Region: Gaza</p>
              <p class="text-center font-medium text-gray-600">Number Affected: 250+</p>
            </div>
          </div>

          <!-- Enhanced Statistic Card 4 - Psychological Trauma -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-lg p-4 transition-shadow duration-300 hover:shadow-xl">
              <div class="bg-green-300 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/8774/8774853.png" alt="Trauma Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Psychological Trauma</h3>
              <p class="text-center mt-2 font-medium text-gray-600">Region: Gaza</p>
              <p class="text-center font-medium text-gray-600">Number Affected: 2,000+</p>
            </div>
          </div>

          <!-- Enhanced Statistic Card 5 - Orphans and Widows -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-lg p-4 transition-shadow duration-300 hover:shadow-xl">
              <div class="bg-purple-300 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/5459/5459657.png" alt="Orphans and Widows Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Orphans and Widows</h3>
              <p class="text-center mt-2 font-medium text-gray-600">Region: West Bank</p>
              <p class="text-center font-medium text-gray-600">Number Affected: 1,500+</p>
            </div>
          </div>

          <!-- Enhanced Statistic Card 6 - Without Education -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow-lg p-4 transition-shadow duration-300 hover:shadow-xl">
              <div class="bg-yellow-300 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <img src="https://cdn-icons-png.flaticon.com/128/5794/5794004.png" alt="No Education Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Without Education</h3>
              <p class="text-center mt-2 font-medium text-gray-600">Region: Gaza</p>
              <p class="text-center font-medium text-gray-600">Number Affected: 4,000+</p>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Humans (From October 2023)') }}
        </h2>
    </x-slot>
    @include('layouts.HumansNav')

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-2 justify-center">
          <!-- Begin Card Columns Layout -->

          <!-- Example Statistic Card 1 -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
              <div class="bg-orange-200 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <!-- Icon or Image for Famine -->
                <img src="path_to_icon_or_image" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Famine Affected Area</h3>
              <p class="text-center mt-2">Region: Name</p>
              <p class="text-center">Number Affected: X,XXX</p>
            </div>
          </div>

          <!-- Example Statistic Card 2 -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
              <div class="bg-orange-200 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <!-- Icon or Image for Famine -->
                <img src="path_to_icon_or_image" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Famine Affected Area</h3>
              <p class="text-center mt-2">Region: Name</p>
              <p class="text-center">Number Affected: X,XXX</p>
            </div>
          </div>
          <!-- Similar structure to Card 1 -->

          <!-- Example Statistic Card 3 -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
              <div class="bg-orange-200 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <!-- Icon or Image for Famine -->
                <img src="path_to_icon_or_image" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Famine Affected Area</h3>
              <p class="text-center mt-2">Region: Name</p>
              <p class="text-center">Number Affected: X,XXX</p>
            </div>
          </div>
          <!-- Similar structure to Card 1 -->
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
              <div class="bg-orange-200 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <!-- Icon or Image for Famine -->
                <img src="path_to_icon_or_image" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Famine Affected Area</h3>
              <p class="text-center mt-2">Region: Name</p>
              <p class="text-center">Number Affected: X,XXX</p>
            </div>
          </div>
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
              <div class="bg-orange-200 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <!-- Icon or Image for Famine -->
                <img src="path_to_icon_or_image" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Famine Affected Area</h3>
              <p class="text-center mt-2">Region: Name</p>
              <p class="text-center">Number Affected: X,XXX</p>
            </div>
          </div>
          <div class="px-2 mb-4 w-full md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
              <div class="bg-orange-200 p-2 rounded-full w-16 h-16 flex items-center justify-center mx-auto">
                <!-- Icon or Image for Famine -->
                <img src="path_to_icon_or_image" alt="Famine Icon" class="w-full h-full">
              </div>
              <h3 class="text-xl font-semibold text-center mt-4">Famine Affected Area</h3>
              <p class="text-center mt-2">Region: Name</p>
              <p class="text-center">Number Affected: X,XXX</p>

            </div>
          </div>
          <!-- Additional cards as needed... -->
        </div>
      </div>


</x-app-layout>

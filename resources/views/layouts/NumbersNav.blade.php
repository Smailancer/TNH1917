
<nav class="bg-gray-50 dark:bg-gray-700 p-2">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center justify-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <x-nav-link :href="route('numbers')" :active="request()->routeIs('numbers')">
                        {{ __('Population') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('politics')" :active="request()->routeIs('politics')">
                        {{ __('Support') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('finance')" :active="request()->routeIs('finance')">
                        {{ __('Losses') }}
                    </x-nav-link>
                </li>
                {{-- <li>
                    <x-nav-link :href="route('media')" :active="request()->routeIs('media')">
                        {{ __('Media') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('army')" :active="request()->routeIs('army')">
                        {{ __('Army Equepments') }}
                    </x-nav-link>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>


<nav class="bg-gray-50 dark:bg-gray-700 p-3">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center justify-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <x-nav-link :href="route('story')" :active="request()->routeIs('story')">
                        {{ __('Before 7th October') }}
                    </x-nav-link>
                </li>

                <li>
                    <x-nav-link :href="route('after')" :active="request()->routeIs('after')">
                        {{ __('After 7th October') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>

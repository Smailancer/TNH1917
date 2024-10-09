<nav class="bg-gray-50 p-2">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center justify-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <x-nav-link :href="route('fallacies')" :active="request()->routeIs('fallacies')">
                        {{ __('Fallacies ') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('facts')" :active="request()->routeIs('facts')">
                        {{ __('Facts ') }}
                    </x-nav-link>
                </li>

            </ul>
        </div>
    </div>
</nav>

<nav class="bg-gray-50 p-2">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center justify-center">
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <x-nav-link :href="route('humans')" :active="request()->routeIs('humans')">
                        {{ __('Victims') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('injured')" :active="request()->routeIs('injured')">
                        {{ __('Injured') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('relatives')" :active="request()->routeIs('relatives')">
                        {{ __('Relatives') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('famine')" :active="request()->routeIs('famine')">
                        {{ __('Other') }}
                    </x-nav-link>
                </li>
            
            </ul>
        </div>
    </div>
</nav>

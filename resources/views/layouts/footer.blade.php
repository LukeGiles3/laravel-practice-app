<nav class="bg-white border-b border-gray-100">
    <div class="fixed left-0 bottom-0 w-full text-center">
        <div class="flex justify-center h-16">
            <div class="flex">
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
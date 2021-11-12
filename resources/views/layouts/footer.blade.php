<nav x-data="{ open: false }">
    <div class="fixed left-0 bottom-0 w-full text-center bg-white border-b border-gray-100">
        <div class="flex justify-center h-16">
            <div class="flex">
                <div class="flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
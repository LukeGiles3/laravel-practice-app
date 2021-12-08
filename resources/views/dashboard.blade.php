<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-light overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-green-dark text-white text-2xl text-center border-4">
                    Account Details
                </div>
                <div class="p-6 bg-green-dark text-white text-2xl my-3">
                    Name: {{ Auth::user()->name }} <br>
                    Email: {{ Auth::user()->email }} <br>
                </div>
                <div class="p-6 bg-green-dark text-white text-2xl text-center border-4">
                    <h1>Favorites</h1>
                </div>
                <div class="p-6 bg-green-dark text-white text-2xl my-3">
                    <div>
                        <h1>Leagues: </h1>
                    </div>
                    <div>
                        <h1>Players: </h1>
                    </div>
                    <div>
                        <h1>Managers: </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

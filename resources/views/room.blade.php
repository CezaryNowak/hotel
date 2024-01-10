<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($room==null)
                    <h1>{{ __("Room does not exists")}}</h1>
                    @else
                    <div class="border border-info p-1 currencyContainer">
                        <div class="d-flex justify-content-between"></div>
                        <h1>{{ $room->title }}</h1>
                        <p>{{ $room->description }}</p>
                    </div>
                    @endif
            </div>
        </div>
    </div>
</x-app-layout> 

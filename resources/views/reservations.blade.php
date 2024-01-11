<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your reservations') }}
        </h2>
    </x-slot>
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    @if ($reservations->isEmpty())
                        <h1>{{ __("You didn't made any reservations yet!") }}</h1>
                    @else
                        @foreach ($reservations as $reservation)
                            <a href="{{ route('room', ['id' => $reservation['roomId']]) }}">
                                Wow reservations much
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

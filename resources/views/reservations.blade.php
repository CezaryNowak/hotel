<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your reservations') }}
        </h2>
    </x-slot>
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    @if ($reservations->isEmpty())
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ __("You haven't made any reservations yet!") }}</h1>
                    @else
                        <ul class="divide-y divide-gray-200">
                            @foreach ($reservations as $reservation)
                                <li class="py-3">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __("Reservation for Room ID") }} {{ $reservation['roomId'] }}</h2>
                                            <p class="text-gray-500 dark:text-gray-400">
                                                {{ __("Check-in Date:") }} {{ $reservation['checkInDate'] }}
                                            </p>
                                            <p class="text-gray-500 dark:text-gray-400">
                                                {{ __("Check-out Date:") }} {{ $reservation['checkOutDate'] }}
                                            </p>
                                        </div>
                                        <div>
                                            <a href="{{ route('room', ['id' => $reservation['roomId']]) }}" class="block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">{{ __("View Room") }}</a>
                                            <form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="block mt-2 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">{{ __("Cancel") }}</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
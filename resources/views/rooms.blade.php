<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Room selection') }}
        </h2>
    </x-slot>

    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($rooms->isEmpty())
                        <h1 class="text-2xl font-bold">{{ __("There are no rooms")}}</h1>
                    @endif
                    @foreach($rooms as $room)
                        <a href="{{route('room', ['id' => $room['id']] )}}" class="block mb-4">
                            <div class="border border-info p-4 rounded-lg">
                                <h2 class="text-xl font-bold">{{ $room['number']}}</h2>
                                <p class="text-gray-600">{{ __('Capacity:')}}  {{ $room['capacity']}}</p>
                                <p class="text-gray-600">{{ __('Price:')}} ${{ number_format($room->price / 100, 2)}} PLN</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-app-layout> 

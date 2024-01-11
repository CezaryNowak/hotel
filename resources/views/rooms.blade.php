<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

        <div class="py-12 h-screen">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @if($rooms->isEmpty())
                        <h1>{{ __("There are no rooms")}}</h1>
                        @endif
                        @foreach($rooms as $room)
                        <a href="{{route('room', ['id' => $room['id']] )}}">
                            <div class="border border-info p-1 currencyContainer">
                            <div class="d-flex justify-content-between"><h2>{{ $room['title']}}</h2></div>
                            {{ __('Price:')}} {{ $room['price']}}PLN</div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

</x-app-layout> 

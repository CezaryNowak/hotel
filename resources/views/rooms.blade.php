<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Room selection') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('rooms') }}">
                        <div class="flex items-center mb-4">
                        <div class="flex-grow">
                            <label for="capacity" class="block dark:text-gray-100">{{ __('Room capacity:') }}</label>
                            <input type="text" name="capacity" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="border border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ request('capacity') }}">
                        </div>
                        <div class="flex-grow ml-4">
                            <label for="dates" class="block dark:text-gray-100">{{ __('Room avalability:') }}</label>
                            <input autocomplete="off"  value="{{ request('input') }}" id="input-id" name="input" type="text" class="border border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                        </div>
                    </div>
                        <button type="submit" class=" flex items-center mb-4 block bg-blue-500 hover:bg-blue-600 text-white rounded-md px-4 py-2">{{ __('Search') }}</button>
                    </form>
                    @if($rooms->isEmpty())
                    <h1 class="text-2xl dark:text-gray-100 font-bold">{{ __("There are no rooms available")}}</h1>
                    @endif
                    @foreach($rooms as $room)
                        <a href="{{route('room', ['id' => $room['id']] )}}" class="block mb-4">
                            <div class="border border-info p-4 rounded-lg dark:text-gray-100">
                                <h2 class="text-xl font-bold">{{ $room['number']}}</h2>
                                <p>{{ __('Capacity:')}}  {{ $room['capacity']}}</p>
                                <p>{{ __('Price:')}} ${{ number_format($room->price / 100, 2)}} PLN</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        datePicker();
    </script>
</x-app-layout>
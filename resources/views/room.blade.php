<x-app-layout>
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    @if ($room == null)
                        <h1 class="text-2xl font-bold text-red-500">{{ __('Room does not exist') }}</h1>
                    @else
                        <div class="border border-info p-4 rounded-lg">
                            <h1 class="text-3xl font-bold">{{ $room->title }}</h1>
                            <p class="text-gray-600">{{ $room->description }}</p>
                            <p class="text-lg font-bold mt-4">Price per night: ${{ number_format($room->price / 100, 2) }}</p>
                        </div>
                        <div class="flex justify-center mt-4">
                            <h3 class="text-xl font-bold">Book now:</h3>
                            <form method="POST" action="{{ route('reservations.create') }}" class="ml-4">
                                @csrf
                                <label for="input-id" class="sr-only">Input ID</label>
                                <input autocomplete="off" id="input-id" name="input" type="text" class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                <input type="hidden" name="roomId" value="{{ $room->id }}" />
                                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white rounded-md px-4 py-2 ml-4">{{ __('Book') }}</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script type="module">
        datePicker({!! $dates !!});
    </script>
</x-app-layout>

<x-app-layout>
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    @if ($room == null)
                        <h1>{{ __('Room does not exists') }}</h1>
                    @else
                        <div class="border border-info p-1 currencyContainer">
                            <div class="d-flex justify-content-between"></div>
                            <h1>{{ $room->title }}</h1>
                            <p>{{ $room->description }}</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h3>Book now:</h3>
                            <form method="POST" action="{{ route('reservations.create') }}">
                                @csrf
                                <label for="input-id"></label>
                                <input id="input-id" name="input" type="text" />
                                <input type="hidden" name="roomId" value="{{ $room->id }}" />
                                <x-primary-button class="ms-4">
                                    {{ __('Book') }}
                                </x-primary-button>
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

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

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
                     
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="input-daterange input-group" id="datepicker">
        <input type="text" class="input-sm form-control" name="start" />
        <span class="input-group-addon">to</span>
        <input type="text" class="input-sm form-control" name="end" />
    </div>
</x-app-layout>

<script>
    $('#sandbox-container .input-daterange').datepicker({
    daysOfWeekHighlighted: "0,2,4,6",
    datesDisabled: ['01/06/2024', '01/21/2024']
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
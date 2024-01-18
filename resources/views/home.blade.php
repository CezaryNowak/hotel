<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Home') }}
        </h2>
    </x-slot>
  
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center h-full">
                <h1 class="text-5xl font-bold text-gray-900 dark:text-white">Welcome to our Hotel</h1>
                <div class="mt-8 flex space-x-4">
                    <a href="{{ route('rooms') }}" class="px-4 py-2 text-lg font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Rooms</a>
                    <a href="{{ route('contact') }}" class="px-4 py-2 text-lg font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Contact</a>
                    <a href="{{ route('gallery') }}" class="px-4 py-2 text-lg font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gallery</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    img {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .gallery-item {
        flex-basis: calc(33.33% - 1rem);
        margin-right: 1rem;
    }

    .gallery-item:last-child {
        margin-right: 0;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            {{ __('Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-4">
                <div class="gallery-item px-4">
                    <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <img src="https://images.unsplash.com/photo-1679678690998-88c8711cbe5f?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="gallery-item px-4">
                    <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="gallery-item px-4">
                    <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <img src="https://images.unsplash.com/photo-1445991842772-097fea258e7b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

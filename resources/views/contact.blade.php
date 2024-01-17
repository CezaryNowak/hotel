<style>
    .google-maps {}

    .google-maps iframe {
        top: 0;
        left: 0;
        width: 100% !important;

    }
</style>
<x-app-layout>
    <div class="py-12 h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="font-bold tracking-tight text-gray-900 dark:text-white">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('Contact
                        Information') }}</h2>
                    <p>Email: contact@grandeagle.com</p>
                    <p>{{ __('Address') }}: ul. Orłowska 3, 03-571 Warszawa</p>
                    <p>{{ __('Phone') }}: +48 123 456 789</p>
                </div>
                <h2 class="font-semibold text-center text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('How to find us') }}
                </h2>
                <div class="google-maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2441.2619043894056!2d21.051517292312614!3d52.274947023296264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ece9df26269dd%3A0xc0942a5b3bbd5a13!2sOr%C5%82owska%203%2C%2003-571%20Warszawa!5e0!3m2!1spl!2spl!4v1704719320652!5m2!1spl!2spl"
                        width="800" height="600" style="border:0;" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

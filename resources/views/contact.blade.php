<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Contact
                            Information</h2>
                        <p>Email: contact@grandeagle.com</p>
                        <p>Address: ul. Orłowska 3, 03-571 Warszawa</p>
                        <p>Phone: +48 123 456 789</p>
                    </div>
                    <br>
                    <h2 class="font-semibold text-center text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        How to find us
                    </h2>
                    <br>           
<style>
  .google-maps {
    position: relative;
    padding-bottom: 75%; // This is the aspect ratio
    height: 0;
    overflow: hidden;
  }
  .google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
  }
</style>
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2441.2619043894056!2d21.051517292312614!3d52.274947023296264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ece9df26269dd%3A0xc0942a5b3bbd5a13!2sOr%C5%82owska%203%2C%2003-571%20Warszawa!5e0!3m2!1spl!2spl!4v1704719320652!5m2!1spl!2spl"
                            width="800" height="600" style="border:0;" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

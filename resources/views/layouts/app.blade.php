<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'La Clasica Burger') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="https://kit.fontawesome.com/f7ae6f38d1.js" crossorigin="anonymous"></script>


    </head>
    <body class="font-sans antialiased ">
        <div class="min-h-screen bg-primario">
            @livewire('navigation-dropdown')
            <!-- Page Content -->
            <main class="h-full">
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
        <footer class="bg-black p-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between">
                    <div class="text-primary underline flex items-center">
                        <ul class="flex justify-between">
                            <li>
                                <a href="./aviso_legal">Aviso Legal</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex">
                        <span class="mx-2" style="color: rgb(255,183,0);">
                            <a href="https://www.facebook.com/LaClasicaBurger">
                                <i class="fab fa-facebook-square fa-3x"></i>
                            </a>
                        </span>
                        <span class="mx-2" style="color: rgb(255,183,0);">
                            <a href="tel:+526693290910">
                                <i class="fas fa-phone fa-3x"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>

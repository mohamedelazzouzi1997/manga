<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://kit.fontawesome.com/f4eca1ee68.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">

        <link rel="stylesheet" href="{{ asset('css/glider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('links')
        @yield('styles')
        @yield('header')
        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="Nunito antialiased dark:bg-gray-900 bg-slate-100">
        <button
            type="button"
            class=" text-gray-400 opacity-50 hidden w-10 h-10 rounded-md fixed bottom-4 right-4 bg-black "
            id="toTop"
            >
            <i class="fa-sharp fa-solid fa-arrow-up fa-bounce"></i>

        </button>
        @include('layouts.navbar')

        @yield('content')

        @livewireScripts
        <script src="{{ asset('js/jquery.js') }}"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> --}}
        <script src="{{ asset('js/flowbite.js') }}"></script>
        {{-- dark mode switcher --}}
        <script src="{{ asset('js/mode.js') }}"></script>
        {{-- dark mode switcher --}}
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('scripts')
        <script>
            $(window).scroll(function() {
                if ($(this).scrollTop()>500) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });

            $("#toTop").click(function() {
                $("html, body").animate({scrollTop: 0}, 1000);
            });
        </script>
    </body>
</html>

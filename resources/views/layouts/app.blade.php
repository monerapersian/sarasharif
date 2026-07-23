<!DOCTYPE html>
<html lang="fa" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'سارا شریف')</title>

        <!-- Fonts & Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Tailwind -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-[#FAF8F4] text-gray-800">

        {{-- Header --}}
        @include('partials.header')

        {{-- Page Content --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')

        <!-- Lucide -->
        <script src="https://unpkg.com/lucide@latest"></script>

        <script>
            lucide.createIcons();
        </script>

    </body>

</html>
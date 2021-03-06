<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog">
    <meta name="keywords" content="Create, Blog, Read, Update, News, Development, Laravel">
    <meta name="author" content="Angelino Verhaeghe - Full Stack Developer - 2021">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex">
        <header class="bg-gray-800 w-80 border-b-2 border-blue-700 px-4 py-10">
            @include('includes.admin.navigation')
        </header>

        <main class="bg-gray-200 flex flex-col flex-grow">
            @include('includes.admin.topheader')
            @yield('content')
        </main>
    </div>

    <footer class="bg-blue-900">
        @include('includes.admin.footer')
    </footer>

</body>

</html>

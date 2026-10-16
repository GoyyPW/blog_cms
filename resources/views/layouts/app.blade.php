<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') | {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800">
    @include('partials.navbar')
 
    <main class="flex-1 w-full max-w-4xl mx-auto px-4 py-8">
        @yield('content')
    </main>
 
    @include('partials.footer')
</body>
</html>

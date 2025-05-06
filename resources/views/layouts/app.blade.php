<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mizu')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="flex flex-col min-h-screen bg-pink-50 text-gray-800">
    @if (Request::is('/') || Request::is('login'))
        <x-navbar-guest />
    @else
        <x-navbar />
    @endif

    <main class="flex-1">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>

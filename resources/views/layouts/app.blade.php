<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Include compiled JS/CSS -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="text-center text-white bg-dark">
    @include('layouts.navbar')

    <main class="py-3">
        <div class="container">
            @yield('content')
        </div>
        @include('layouts.footer')
    </main>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Twitter Clone</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- fontsawesome -->

    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<section class="px-8 py-4 mb-6">
    <header class="container mx-auto">

        <h1>
            <img src="{{ asset('images/logo.svg') }}" alt="">
        </h1>

    </header>
</section>

<section class="px-8">
    <main class="container mx-auto">

        {{ $slot }}

    </main>
</section>

</body>
</html>

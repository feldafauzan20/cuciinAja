<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-blue-500">
        <div class="w-full  px-10">
            <div>
                <a href="/">
                    <h2 class="font-poppins text-white text-center text-2xl font-bold">cuciinAja</h2>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 mx-auto bg-white shadow-md overflow-hidden rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>

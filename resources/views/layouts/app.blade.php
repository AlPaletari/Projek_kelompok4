<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Krusit') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">
    <div class="flex flex-col min-h-screen">

        {{-- Navbar --}}
        @include('layouts.navigation')

        {{-- Header jika ada (opsional, tergantung halaman) --}}
        @isset($header)
            <header class="bg-white shadow-sm">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        {{-- Konten utama --}}
        <main class="flex-1">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')

    </div>
</body>
</html>

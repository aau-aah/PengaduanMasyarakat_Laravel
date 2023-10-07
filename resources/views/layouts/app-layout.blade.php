<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
    <title>Aau | @yield('title')</title>
</head>

<body class="dark:bg-gray-900 antialiased">
    @livewire('layouts.navbar')
    @livewire('layouts.sidebar')

    {{-- Content Page --}}
    <div class="p-4 md:ml-64">
        <div class="p-4 rounded-lg mt-14">
            {{ $slot }}
        </div>
    </div>


    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @livewireScripts
    @yield('scripts')
</body>

</html>

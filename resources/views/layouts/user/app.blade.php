<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - User</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <script src="{{ asset('js/theme.js') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('layouts.user.sidebar')
        <!-- Navbar -->
        @include('layouts.user.navbar')
        <div class="page-wrapper">
            @yield('header')
            <div class="page-body">
                <div class="container-xl">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
</body>
</html>

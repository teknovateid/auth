<!DOCTYPE html>
<html lang="id" class="scroll-smooth" theme-mode="light">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-3x3.svg') }}" type="image/x-icon">

    @stack('seo')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.min.css') }}">
</head>

<body class="font-inter antialiased">
    <div class="min-h-screen items-center justify-center flex bg-gray-100 dark:bg-gray-900">
        @yield('content')
    </div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ URL::asset('css/nunito.css') }}">

    <!-- Styles -->
    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('assets/admin/css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('assets/main/vendors/mdi/css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('assets/main/vendors/aos/dist/aos.css/aos.css') }}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- endinject -->

</head>
<body class="antialiased">
<div class="container-scroller">
    <div class="main-panel">
        <header id="header">
            <div class="container">
                @include('layouts.partials.navbar')
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>

</body>
</html>

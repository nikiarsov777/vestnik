<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href="{{ asset('assets/admin/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ URL::asset('css/nunito.css') }}">


    <!-- Styles -->
    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('assets/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('assets/admin/css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('assets/main/vendors/mdi/css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('assets/main/vendors/aos/dist/aos.css/aos.css') }}" />

    <link href="{{ asset('assets/bootstrap.min.css') }}" rel="stylesheet">
    <!-- End plugin css for this page -->

    <!-- inject:css -->

    <!-- endinject -->
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}" ></script>
    <script src="{{ asset('assets/admin/js/sb-admin-2.js') }}" ></script>

    <script src="{{ asset('js/selectinput/src/js/selectinput.js') }}" ></script>

    <script src="{{ asset('js/functions.js') }}"></script>

</head>
<body class="antialiased">
<div class="container-scroller" id="app">
    <div class="main-panel">
        <header id="header">
            <div class="container">
                @include('layouts.partials.navbar')
            </div>
        </header>
        @include('layouts.partials.flashnews')
        @yield('content')
    </div>
</div>
<!-- Scripts -->



</body>
</html>

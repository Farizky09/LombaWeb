<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon.jpg') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.jpg') }}">    
    
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('assets/logres/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="{{ asset('assets/boxicons-2.1.2/css/boxicons.min.css') }}" rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app"> 
        
            @yield('content')
        
    </div>
    <!--===== MAIN JS =====-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fancybox.umd.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/logres/js/main.js') }}"></script>
</body>
</html>

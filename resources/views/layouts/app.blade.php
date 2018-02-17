<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    @yield('head')
</head>

<body class="font-sans bg-grey-lighter">
    <div id="app">
        @include ('layouts.nav')
        <div id='header_fp'>
            <div id='header_ww_fp'>
                <div id='logo'>
                    <p class='text-center'></p>
                    <p class='text-center'><img src='/images/logo_90.png' width='375' height='90' alt='FlightPhysical.com' >
                    </p>
                </div> <!-- end header logo -->
            </div>  <!-- end header_ww -->
        </div> <!-- end header -->


        <div class="container mx-auto">
            <div class="flex">
                @section('sidebar')
                    @include('sidebar')
                @show

                <div class="px-10 bg-white flex-1">
                    @yield('content')
                </div>

                 @include('channels-sidebar')
            </div>
        </div>

        <flash message="{{ session('flash') }}"></flash>

        @include('modals.all')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>

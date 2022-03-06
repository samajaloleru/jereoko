<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Styles -->
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" href="css/vendor/fontawesome-all.min.css" />
        <link rel="stylesheet" href="css/plugins/swiper.min.css" />
        <link rel="stylesheet" href="css/plugins/animate-text.css" />
        <link rel="stylesheet" href="css/plugins/aos.css" />
        <link rel="stylesheet" href="css/plugins/some-plugins.min.css" />
        <link rel="stylesheet" href="css/plugins/animate.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/strok_gap_icon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/preset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"> -->
        
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="preloader-activate preloader-active open_tm_preloader">
            <div class="preloader-area-wrap">
                <div class="spinner d-flex justify-content-center align-items-center h-100">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
        </div>
                
        @yield('content')

        @include('inc.footer')


        <!--   Core JS Files   -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="js/plugins/swiper.min.js"></script>
        <script src="js/plugins/waypoints.min.js"></script>
        <script src="js/plugins/countdown.min.js"></script>
        <script src="js/plugins/isotope.min.js"></script>
        <script src="js/plugins/masonry.min.js"></script>
        <script src="js/plugins/images-loaded.min.js"></script>
        <script src="js/plugins/counterup.min.js"></script>
        <script src="js/plugins/wow.min.js"></script>
        <script src="js/plugins/aos.js"></script>
        <script src="js/plugins/some-plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Shipex') }} | {{ config('setting.site.tagline', 'Reliable Logistic & Shipping Company') }}</title>
        <meta name="robots" content="noindex, follow">
        <meta name="description" content="{{ config('settings.site.description', '') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fevicon.png') }}">

        <!-- CSS
        ============================================ -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
        <!-- Flaticon -->
        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
        <!-- Base Icons -->
        <link rel="stylesheet" href="{{ asset('assets/css/pbminfotech-base-icons.css') }}">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
        <!-- Slick -->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <!-- Magnific -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <!-- AOS -->
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
        <!-- Shortcode CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/shortcode.css') }}">
        <!-- Base CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>

    <body>
        <!-- page wrapper -->
        <div class="page-wrapper" id="page">
            <!-- Header Main Area -->
            @include('partials.header')
            <!-- Header Main Area End Here -->

            <!-- page content -->
            @yield('content')
            <!-- page content End -->

            <!-- footer -->
            @include('partials.footer')
            <!-- footer End -->
        </div>
        <!-- page wrapper End -->

        <!-- Search Box Start Here -->
        @include('partials.search')
        <!-- Search Box End Here -->

        <!-- Scroll To Top -->
        <div class="pbmit-backtotop">
            <div class="pbmit-arrow">
                <i class="pbmit-base-icon-plane"></i>
            </div>

            <div class="pbmit-hover-arrow">
                <i class="pbmit-base-icon-plane"></i>
            </div>
        </div>
        <!-- Scroll To Top End -->

        <!-- JS
        ============================================ -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- jquery Waypoints JS -->
        <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
        <!-- jquery Appear JS -->
        <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <!-- Numinate JS -->
        <script src="{{ asset('assets/js/numinate.min.js') }}"></script>
        <!-- Slick JS -->
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <!-- Magnific JS -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Circle Progress JS -->
        <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
        <!-- countdown JS -->
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <!-- AOS -->
        <script src="{{ asset('assets/js/aos.js') }}"></script>
        <!-- GSAP -->
        <script src='{{ asset('assets/js/gsap.js') }}'></script>
        <!-- Scroll Trigger -->
        <script src='{{ asset('assets/js/ScrollTrigger.js') }}'></script>
        <!-- Split Text -->
        <script src='{{ asset('assets/js/SplitText.js') }}'></script>
        <!-- Theia Sticky Sidebar JS -->
        <script src='{{ asset('assets/js/theia-sticky-sidebar.js') }}'></script>
        <!-- GSAP Animation -->
        <script src='{{ asset('assets/js/gsap-animation.js') }}'></script>
        <!-- Form Validator -->
        <script src="{{ asset('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
        <!-- Scripts JS -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>

        <!-- Sessions Message -->
        @include('partials.message')
    </body>
</html>

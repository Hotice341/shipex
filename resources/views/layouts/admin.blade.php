<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <meta name="description" content="{{ config('settings.site.description', '') }}" />
        <title>{{ config('app.name', 'Shipex') }} | {{ config('setting.site.tagline', 'Reliable Logistic & Shipping Company') }}</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fevicon.png') }}">

        <!-- Preloaded local web font (Inter) -->
        <link rel="preload" href="{{ asset('admin/fonts/inter-variable-latin.woff2') }}" as="font" type="font/woff2" crossorigin="">

        <!-- Font icons -->
        <link rel="preload" href="{{ asset('admin/icons/cartzilla-icons.woff2') }}" as="font" type="font/woff2" crossorigin="">
        <link rel="stylesheet" href="{{ asset('admin/icons/cartzilla-icons.min.css') }}">

        <!-- Bootstrap + Theme styles -->
        <link rel="preload" href="{{ asset('admin/css/theme.min.css') }}" as="style">
        <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}" id="theme-styles">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('admin/vendor/flatpickr/flatpickr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/vendor/choices.js/choices.min.css') }}">
    </head>

    <!-- Body -->
    <body>
        <!-- Navigation bar (Page header) -->
        @include('partials.admin.header')

        <main class="content-wrapper">
            <div class="container pt-4 pt-lg-5 pb-5">
                <div class="row pt-sm-2 pt-md-3 pt-lg-0 pb-2 pb-sm-3 pb-md-4 pb-lg-5">
                    <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
                    @include('partials.admin.sidebar')

                    <!-- Page content -->
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Page footer -->
        @include('partials.admin.footer')

        <!-- Modals -->
        @include('partials.modals')

        <!-- Sidebar navigation offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
        <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar" data-bs-theme="light">
            <i class="ci-sidebar fs-base me-2"></i>
            Account menu
        </button>

        <!-- Vendor scripts -->
        <script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('admin/vendor/choices.js/choices.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/flatpickr/flatpickr.min.js') }}"></script>

        <!-- Bootstrap + Theme scripts -->
        <script src="{{ asset('admin/js/theme.min.js') }}"></script>

        <!-- Izitoast CSS + JS -->
        <link rel="stylesheet" href="{{ asset('admin/custom/css/iziToast.min.css') }}">
        <script src="{{ asset('admin/custom/js/iziToast.min.js') }}"></script>

        <!-- Sessions Message -->
        @include('partials.message')
    </body>
</html>

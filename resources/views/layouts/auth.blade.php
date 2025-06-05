<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-pwa="true">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
        <meta name="description" content="{{ config('settings.site.description', '') }}" />
        <title>{{ config('app.name', 'Shipex') }} | {{ config('setting.site.tagline', 'Logistic & Shipping Company') }}</title>

        <!-- Theme switcher (color modes) -->
        <script src="{{ asset('admin/js/theme-switcher.js') }}"></script>

        <!-- Preloaded local web font (Inter) -->
        <link rel="preload" href="{{ asset('admin/fonts/inter-variable-latin.woff2') }}" as="font" type="font/woff2" crossorigin="">

        <!-- Font icons -->
        <link rel="preload" href="{{ asset('admin/icons/cartzilla-icons.woff2') }}" as="font" type="font/woff2" crossorigin="">
        <link rel="stylesheet" href="{{ asset('admin/icons/cartzilla-icons.min.css') }}">

        <!-- Bootstrap + Theme styles -->
        <link rel="preload" href="{{ asset('admin/css/theme.min.css') }}" as="style">
        <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}" id="theme-styles">
    </head>

    <!-- Body -->
    <body>
        <!-- Page content -->
        @yield('content')

        <!-- Bootstrap + Theme scripts -->
        <script src="{{ asset('admin/js/theme.min.js') }}"></script>

        <!-- Izitoast CSS + JS -->
        <link rel="stylesheet" href="{{ asset('admin/custom/css/iziToast.min.css') }}">
        <script src="{{ asset('admin/custom/js/iziToast.min.js') }}"></script>

        <!-- Sessions Message -->
        @include('partials.message')
    </body>
</html>

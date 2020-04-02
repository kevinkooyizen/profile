<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @if (strtolower(config('app.env')) === 'production')
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155997821-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-155997821-4');
        </script>

    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#28023D">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kevin Koo Yi Zen | Full-Stack Web Developer') }}</title>
    <meta name="description" content="Kevin Koo Yi Zen. Full-Stack Web Developer. Email: kooyizen@outlook.com. Phone: +60123658503">

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>

<div id="app">

    @include('layouts.header')

    @yield('content')

</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('/plugins/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/plugins/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/plugins/progress.min.js') }}"></script>
<script src="{{ asset('/plugins/script.js') }}"></script>

</body>
</html>

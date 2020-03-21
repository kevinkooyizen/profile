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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kevin Koo Yi Zen | Full-Stack Web Developer') }}</title>

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>

<div id="app">

    @include('layouts.header')

    @yield('content')

</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

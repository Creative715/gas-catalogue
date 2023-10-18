<!doctype html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link async rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link async rel="stylesheet" href="{{ asset('css/style.css') }}" id="main-styles-link">
    <link async rel="stylesheet" href="{{ asset('font/css/all.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'ТОВ "ІММЕРТРЕЙД"' }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
</head>

<body>
    @include('app.includes.header')
    @yield('content')
    @include('app.includes.footer')

</body>

</html>

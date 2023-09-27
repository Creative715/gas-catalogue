<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'ТОВ ІММЕРТРЕЙД' }}
    </title>
    <meta name="description"
        content="{{ $description ?? 'Газові котли, теплові насоси та аксесуари купити в Україні' }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate css-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- owl-carousel-->
    <link rel="stylesheet" href="{{ asset('vendors/owlcarousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui-1.11.4/jquery-ui.min.css') }}">
    <!-- Main Css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    @include('app.includes.header')
    @yield('content')
    @include('app.includes.footer')
    <script src="{{ asset('js/jquery-1.12.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Revolution Slider Tools-->
    <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Revolution Slider-->
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <!-- owl carousel-->
    <script src="{{ asset('vendors/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui-1.11.4/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/imagelightbox.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
  </body>
</html>

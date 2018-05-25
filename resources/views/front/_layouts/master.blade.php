<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Breweries - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">

    @stack('head_resources')
</head>
<body>
    @include('front._partials.site-navigation')

    @yield('content')

    {{-- @include('front._partials.site-footer') --}}

    {{-- <script src="{{ asset('js/vendors.js') }}"></script> --}}
	{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    @stack('footer_resources')
</body>
</html>

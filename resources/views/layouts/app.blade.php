<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Yaroshaa CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Сайт — визитка, резюме, Веб разработчика">
    <link rel="shortcut icon" href=" {{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href=" {{ asset('assets/vendor/font-awesome/font-awesome.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href=" {{ asset('blade/assets/css/app.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href=" {{ asset('assets/vendor/themify/themify.css') }}" type="text/css" />
</head>
<body class="relative">
<div  id="app" >
    @yield('content')
</div>
<script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendor/slick/slick.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.singlePageNav.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.scrollUp.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('blade/assets/js/app.js') }}"></script>

</body>
</html>

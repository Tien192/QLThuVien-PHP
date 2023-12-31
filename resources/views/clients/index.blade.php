<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Saw</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/icomoon/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/auth_form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/alert.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- script
		================================================== -->
    <script src="{{asset('assets/client/js/modernizr.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>

    <div id="header-wrap">

        @include('clients.layout.block.top-content')
        <!--top-content-->

        @include('clients.layout.block.navbar')

    </div>
    <!--header-wrap-->
    @yield('body')
    @include('clients/layout/block/footer')
    <script src="{{asset('assets/client/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('assets/client/js/plugins.js')}}"></script>
    <script src="{{asset('assets/client/js/script.js')}}"></script>
</body>

</html>